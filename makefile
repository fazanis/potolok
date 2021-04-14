DOCKER_CONFIG=nginx mysql phpmyadmin workspace
DOCKER_APACHE=apache2 mysql phpmyadmin workspace
DOCKER_FOLDER=../laradock
DOCKER_DATABASE=default
DOCKER_USERNAME=root
DOCKER_PASSWORD=root
PROJECT_FOLDER=elitelom

up: # create and start containers
	@cd ${DOCKER_FOLDER} && docker-compose up -d ${DOCKER_CONFIG}

down: # stop and destroy containers
	@cd ${DOCKER_FOLDER} && docker-compose down

apache:
	@cd ${DOCKER_FOLDER} && docker-compose up -d ${DOCKER_APACHE}

down-volume: #  WARNING: stop and destroy containers with volumes
	@cd ${DOCKER_FOLDER} && docker-compose down -v

start: # start already created containers
	@cd ${DOCKER_FOLDER} && docker-compose up -d ${DOCKER_CONFIG}

stop: # stop containers, but not destroy
	@cd ${DOCKER_FOLDER} && docker-compose stop

ps: # show started containers and their status
	@cd ${DOCKER_FOLDER} && docker-compose ps

build: # build all dockerfile, if not built yet
	@cd ${DOCKER_FOLDER} && docker-compose build $(name)


ssh: # app command line
	@cd ${DOCKER_FOLDER} && docker-compose exec workspace bash

connect_node: # node command line
	@cd ${DOCKER_FOLDER} && docker-compose exec -u www -w /www/laravel node sh

connect_nginx: # nginx command line
	@cd ${DOCKER_FOLDER} && docker-compose exec -w /www nginx sh

connect_db: # database command line
	@cd ${DOCKER_FOLDER} && docker-compose exec db bash


database-dump: # dump database
	@cd ${DOCKER_FOLDER} && docker-compose exec db mysqldump ${DOCKER_DATABASE} -u${DOCKER_USERNAME} -p${DOCKER_PASSWORD}


vendor: # composer install
	@cd ${DOCKER_FOLDER} && docker-compose exec -u www -w /www/elitelom app composer install

node_modules: # npm install
	@cd ${DOCKER_FOLDER} && docker-compose exec -u www -w /www/laravel node npm install

watch: # npm run watch
	@cd ${DOCKER_FOLDER} && docker-compose -f ${DOCKER_CONFIG} exec -u www -w /www/laravel node npm run watch

key: # gen application key
	@cd ${DOCKER_FOLDER} && docker-compose ${DOCKER_CONFIG} exec -u www -w /www app php artisan key:generate

fresh: # refresh the database and run all database seeds
	@cd ${DOCKER_FOLDER} && docker-compose -f ${DOCKER_CONFIG} exec -u www -w /www/laravel app php artisan migrate:fresh --seed

composer_dump: # composer dump-autoload
	@cd ${DOCKER_FOLDER} && docker-compose -f ${DOCKER_CONFIG} exec -u www -w /www/laravel app composer dump-autoload

#test: # run all tests
#	@cd ${DOCKER_FOLDER} && docker-compose -f ${DOCKER_CONFIG} exec -u www -w /www/laravel app php vendor/bin/phpunit

migrate: #
	@cd ${DOCKER_FOLDER} && docker-compose exec workspace php artisan migrate

route: #
	@cd ${DOCKER_FOLDER} && docker-compose exec workspace php artisan route:cache

create_migration: # create migrate name=[controllerName]
	@cd ${DOCKER_FOLDER} && docker-compose exec workspace php artisan make:migration $(name)

create_controller: # create controller name=[controllerName]
	@docker-compose -f ${DOCKER_CONFIG} exec workspace -u www -w /www/laravel app php artisan make:controller $(name)

create_model: # create model name=[modelName]
	@cd ${DOCKER_FOLDER} && docker-compose exec workspace php artisan make:model $(name)

create_seeder: # create seeder name=[seederName]
	@docker-compose -f ${DOCKER_CONFIG} exec -u www -w /www/laravel app php artisan make:seeder $(name)TableSeeder

reboot:
	@cd ${DOCKER_FOLDER} && docker-compose stop && docker-compose up -d ${DOCKER_CONFIG}
clear:
	@php artisan cache:clear && php artisan route:clear && php artisan view:cache

deploy: #name=folder
	@/opt/plesk/php/7.2/bin/php /var/www/vhosts/elitelom.kz/$(name)/artisan migrate && /opt/plesk/php/7.2/bin/php /var/www/vhosts/elitelom.kz/$(name)/artisan route:clear  && /opt/plesk/php/7.2/bin/php /var/www/vhosts/elitelom.kz/$(name)/artisan cache:clear && /opt/plesk/php/7.2/bin/php /var/www/vhosts/elitelom.kz/$(name)/artisan view:clear && sudo chmod -R 777 ./ && /opt/plesk/php/7.2/bin/php /var/www/vhosts/elitelom.kz/$(name)/artisan queue:restart
local: #local
	@php artisan migrate && php artisan route:clear && php artisan view:clear && sudo chmod -R 777 ./
test:
	@./vendor/bin/phpunit
push: #name=commit
	@git add . && git commit -m "$(name)" && git push
