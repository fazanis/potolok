<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Натяжные потолки в Павлодаре </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="images/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
<input type="hidden" value="{{csrf_token()}}" id="token">
<div class="success">Ваша заявка отправлена!</div>
<!-- Modal -->
<div class="modal fade" id="call" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Обратный звонок</h2>
                <h4>Заполните поля и мы перезвоним<br>Вам в ближайшее время</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" class="type" value="call" name="type">
                    <input class="name" name="name" type="text" required placeholder="Ваше имя">
                    <input class="tel" name="tel" type="text" required placeholder="Ваш телефон">
                    <button>Перезвоните мне</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="zamer" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">ЗАКАЗАТЬ<br>БЕСПЛАТНЫЙ ЗАМЕР</h2>
                <h4>Оставьте заявку и мы перезвоним<br>Вам в ближайшее время</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" class="type" value="zamer" name="type">
                    <input class="name" name="name" type="text" required placeholder="Ваше имя">
                    <input class="tel" name="tel" type="text" required placeholder="Ваш телефон">
                    <button>ОСТАВИТЬ ЗАЯВКУ</button>
                </form>
            </div>
        </div>
    </div>
</div>
<header>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="header col-12 d-flex justify-content-between align-items-center flex-wrap">
                    <div class="logo-block d-flex justify-content-between align-items-end flex-wrap">
                        <img src="images/logo.png" alt="logo">
                        <span>Установка натяжных потолков<br>в Павлодаре и Павлодарской обл.</span>
                    </div>
                    <div class="contacts d-flex justify-content-between align-items-center flex-wrap">
                        <div class="tel-block d-flex justify-content-sm-between justify-content-center align-items-end">
                            <a target="_blank" href="https://wa.me/{{$seting->phone}}"><img src="images/whacap-icon2.png" style="width:58px" alt="icon"></a>
                            <img src="images/phone-icon.png" alt="icon">
                            <div>
                                <a href="tel:{{$seting->phone}}">{{\App\Setings::phone($seting->phone)}}</a>
                                <span>Без выходных с 10:00 до 18:00</span>
                            </div>
                        </div>
                        <button data-toggle="modal" data-target="#call">Заказать звонок</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container">
            <div class="row">
                <button class="d-md-none navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 124 124" style="enable-background:new 0 0 124 124;" xml:space="preserve">
							<g><path d="M112,6H12C5.4,6,0,11.4,0,18s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,6,112,6z" fill="#FFFFFF"/><path d="M112,50H12C5.4,50,0,55.4,0,62c0,6.6,5.4,12,12,12h100c6.6,0,12-5.4,12-12C124,55.4,118.6,50,112,50z" fill="#FFFFFF"/><path d="M112,94H12c-6.6,0-12,5.4-12,12s5.4,12,12,12h100c6.6,0,12-5.4,12-12S118.6,94,112,94z" fill="#FFFFFF"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
						</svg>
                </button>
                <div class="col-12 d-md-flex justify-content-between align-items-center collapse" id="navbarToggleExternalContent">
                    <a class="smoothScroll" href=".kinds">Фактуры потолков</a>
                    <a class="smoothScroll" href=".texnology">Технологии потолков</a>
                    <a class="smoothScroll" href=".ask">Ответы на вопросы</a>
                    <a class="smoothScroll" href=".reviews">Отзывы</a>
                    <a class="smoothScroll" href="footer">Контакты</a>
                </div>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="first-block">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="h1-block">
                        <h1>Натяжные потолки в Павлодаре</h1>
                        <h2>С гарантией. Цена от <span id="cena">{{$seting->price}}</span> Тг/м²</h2>
                        <!-- <span class="d-flex justify-content-center align-items-center">Дарим подарки!</span> -->
                        <!--							<p>Скидка на каждый 3-й натяжной потолок 20%!<br>Каждый 5-й светильник в подарок!</p>-->
                    </div>
                    <div class="calculate">
                        <div class="calculate-head"><h2>Калькулятор</h2></div>
                        <hr>
                        <div class="calculate-body">
                            <form action="" method="post">
                                <input type="hidden" class="type" value="calculate" name="type">
                                <div><label for="square">Площадь потолка (м2):</label><input name="square" type="text" id="square" required value=17></div>
                                <div><label for="price">Примерная стоимость (Тг):</label><input type="text" name="price" id="price" required value=25500></div>
                                <div><label for="phone">Ваш телефон:</label><input type="text" id="phone" name="tel" required class="tel" maxlength="12"></div>
                                <p>Наш специалист свяжется с вами и договорится об удобном времени замера и консультации</p>
                                <button>Оставить заявку</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="characteristics col-12">
                <h2 class="wow fadeInDown" data-wow-duration="2s">Быстро, чисто, безопасно!</h2>
                <div class="grid">
                    <div class="item item1 wow fadeInLeft" data-wow-duration="2s">
                        <div class="img-block"><img src="images/item1.png" alt="icon"></div>
                        <div class="desc">
                            <h3>Выгодная цена</h3>
                            <span>Лучшее соотношение цены и качества!</span>
                        </div>
                    </div>
                    <div class="item item2 wow fadeInUp" data-wow-duration="2s">
                        <div class="img-block"><img src="images/item2.png" alt="icon"></div>
                        <div class="desc">
                            <h3>Профессионализм</h3>
                            <span>Опытная бригада монтажников и современное оборудование</span>
                        </div>
                    </div>
                    <div class="item item3 wow fadeInRight" data-wow-duration="2s">
                        <div class="img-block"><img src="images/item3.png" alt="icon"></div>
                        <div class="desc">
                            <h3>Богатый ассортимент</h3>
                            <span>Более 3000 цветов, любые виды, любые фактуры</span>
                        </div>
                    </div>
                    <div class="item item4 wow fadeInLeft" data-wow-duration="2s">
                        <div class="img-block"><img src="images/item4.png" alt="icon"></div>
                        <div class="desc">
                            <h3>Лучшие материалы</h3>
                            <span>Используем только  качественные экологичные плёнки БЕЗ запаха</span>
                        </div>
                    </div>
                    <div class="item item5 wow fadeInUp" data-wow-duration="2s">
                        <div class="img-block"><img src="images/item5.png" alt="icon"></div>
                        <div class="desc">
                            <h3>Гарантия 100 лет!</h3>
                            <span>Наши потолки НЕ провисают НЕ выцветают и НЕ портятся</span>
                        </div>
                    </div>
                    <div class="item item6 wow fadeInRight" data-wow-duration="2s">
                        <div class="img-block"><img src="images/item6.png" alt="icon"></div>
                        <div class="desc">
                            <h3>Заключение договора</h3>
                            <span>Работаем официально, есть все необходимые сертификаты</span>
                        </div>
                    </div>
                    <div class="item item7 wow fadeInLeft" data-wow-duration="2s">
                        <div class="img-block"><img src="images/item7.png" alt="icon"></div>
                        <div class="desc">
                            <h3>Бесплатный замер</h3>
                            <span>Выезжаем в течении 1 часа или в др. удобное вам время</span>
                        </div>
                    </div>
                    <div class="item item8 wow fadeInUp" data-wow-duration="2s">
                        <div class="img-block"><img src="images/item8.png" alt="icon"></div>
                        <div class="desc">
                            <h3>Ценим ваше время</h3>
                            <span>Изготовление потолка 1-2 дня, установка за пару часов</span>
                        </div>
                    </div>
                    <div class="item item9 wow fadeInRight" data-wow-duration="2s">
                        <div class="img-block"><img src="images/item9.png" alt="icon"></div>
                        <div class="desc">
                            <h3>Аккуратный монтаж</h3>
                            <span>После установки выполняем уборку помещения</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="kinds container-fluid">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <h2 class="wow fadeInDown" data-wow-duration="2s">Фактуры натяжных потолков</h2>--}}
{{--                    <div class="grid">--}}
{{--                        <div class="item item1 wow fadeInLeft" data-wow-duration="2s">--}}
{{--                            <img class="img" src="images/kids-item1.jpg" alt="img">--}}
{{--                            <div class="wrap">--}}
{{--                                <h3>Глянцевые потолки</h3>--}}
{{--                                <span class="item-price">от 1500 Тг</span>--}}
{{--                                <div>--}}
{{--                                    <span><img src="images/chech1.png" alt="img">Бесплатный cервис</span>--}}
{{--                                    <span><img src="images/chech1.png" alt="img">С установкой</span>--}}
{{--                                </div>--}}
{{--                                <button data-toggle="modal" data-target="#zamer">Оставить заявку</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item item2 wow fadeInUp" data-wow-duration="2s">--}}
{{--                            <img class="img" src="images/kids-item2.jpg" alt="img">--}}
{{--                            <div class="wrap">--}}
{{--                                <h3>Матовые потолки</h3>--}}
{{--                                <span class="item-price">от 1500 Тг</span>--}}
{{--                                <div>--}}
{{--                                    <span><img src="images/chech1.png" alt="img">Бесплатный cервис</span>--}}
{{--                                    <span><img src="images/chech1.png" alt="img">С установкой</span>--}}
{{--                                </div>--}}
{{--                                <button data-toggle="modal" data-target="#zamer">Оставить заявку</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="item item3 wow fadeInRight" data-wow-duration="2s">--}}
{{--                            <img class="img" src="images/kids-item3.jpg" alt="img">--}}
{{--                            <div class="wrap">--}}
{{--                                <h3>Сатиновые потолки</h3>--}}
{{--                                <span class="item-price">от 1500 Тг</span>--}}
{{--                                <div>--}}
{{--                                    <span><img src="images/chech1.png" alt="img">Бесплатный cервис</span>--}}
{{--                                    <span><img src="images/chech1.png" alt="img">С установкой</span>--}}
{{--                                </div>--}}
{{--                                <button data-toggle="modal" data-target="#zamer">Оставить заявку</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="container">
        <div class="row">
            <div class="texnology col-12">
                <h2 class="wow fadeInUp" data-wow-duration="2s">Технологии натяжных потолков</h2>
                <div class="grid">
                    @foreach(\App\Photo::where('mesto',1)->get() as $item)
                        <div class="wow fadeInLeft" data-wow-duration="2s">
                            <img src="photo/{{$item->photo}}" alt="img">
                            <h3>{{$item->title}}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="zamer container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
                    <div class="h2-block wow fadeInLeft" data-wow-duration="2s">
                        <h2>Закажите бесплатный<br>замер прямо сейчас!</h2>
                        <span class="first"><img src="images/check.png" alt="icon">Скидка на каждый третий<br>натяжной потолок 20%</span>
                        <span><img src="images/check.png" alt="icon">Каждый 5-й светильник<br>в подарок</span>
                    </div>
                    <div class="form wow fadeInRight" data-wow-duration="2s">
                        <h3>ВЫЗВАТЬ ЗАМЕРЩИКА</h3>
                        <span>БЕСПЛАТНО УЖЕ СЕГОДНЯ!</span>
                        <h4>+ ПОДАРКИ ПО АКЦИИ</h4>
                        <form action="" method="post">
                            <input type="hidden" class="type" value="zamer2" name="type">
                            <input type="text" name="tel" placeholder="Ваш телефон" required class="tel">
                            <button>Оставить заявку</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="potolki-for container">
        <div class="row">
            <div class="col-12">
                <h2 class="wow fadeInUp" data-wow-duration="2s">Технологии натяжных потолков</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid">
                @foreach(\App\Photo::where('mesto',2)->get() as $item)
                    <div class="wow fadeInLeft" data-wow-duration="2s">
                        <img src="photo/{{$item->photo}}" width="350px" height="350px" alt="img">
                        <h3>{{$item->title}}</h3>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <div class="ask container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12  wow fadeInUp" data-wow-duration="2s">
                    <h2>Ответы на вопросы</h2>
                    <h3>Можете задать вопросы по телефону <a href="tel:{{$seting->phone}}">{{\App\Setings::phone($seting->phone)}}</a><br>или просто оставьте заявку и мы вам перезвоним</h3>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 ask-blocks wow fadeInLeft" data-wow-duration="2s">
                        <div class="item item1">
                            <h4>Как сильно опустится потолок?</h4>
                            <div>Потолок опустится незначительно. Натяжные потолки монтируются на расстоянии 3 см от существующего потолка, если у него нет сильных перепадов.</div>
                        </div>
                        <div class="item item2">
                            <h4>Сколько стоит натяжной потолок?</h4>
                            <div>Точная стоимость натяжного потолка будет известна после проведения замеров и уточнения ваших пожеланий. Она складывается из следующих факторов: стоимость материалов, площадь помещения, сложность и объем монтажа.</div>
                        </div>
                        <div class="item item3">
                            <h4>Что случится с потолками, если нас затопят?</h4>
                            <div>Наши потолки выдерживают до 100 л воды на квадратный метр.<br>Это спасёт ваш ремонт в случае затопления сверху. Если это произойдёт, просто позвоните нам. Бригада оперативно приедет и сольёт воду, сохранив целостность полотна.</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ask-blocks ask-blocks2 wow fadeInRight" data-wow-duration="2s">
                        <div class="item item4">
                            <h4>Какой срок изготовления и установки?</h4>
                            <div>От замера потолка до его полной установки 1-2 дня. На замер наша бригада может выехать в течении часа или в любое время, когда вам удобно.</div>
                        </div>
                        <div class="item item5">
                            <h4>Портится ли мебель и обои при монтаже?</h4>
                            <div>При монтаже температура в помещении доводится до 60 градусов.<br>Мебель и другие предметы интерьера при этом не портятся. Однако мы рекомендуем особенно ценные предметы и комнатные растения вынести из помещения.</div>
                        </div>
                        <div class="item item6">
                            <h4>Плюсы установки натяжных потолков?</h4>
                            <div>Не нужно выравнивать потолок, никакой штукатурки, грунтовки, краски. Чистая комната без мусора, быстрая установка, нет нужды перекрашивать, гарантия 10 лет.</div>
                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-duration="2s"><button data-toggle="modal" data-target="#zamer">ОСТАВИТЬ ЗАЯВКУ</button></div>

                </div>
            </div>
        </div>
    </div>
    <div class="reviews container">
        <div class="row">
            <div class="col-12">
                <h2 class="wow fadeInUp" data-wow-duration="2s"">Что говорят о нас клиенты</h2>
                <div class="items">
                    <div class="item item1 wow fadeInLeft" data-wow-duration="2s">
                        <img src="images/avatar1.jpg" alt="img">
                        <h5>Валентина Николаева</h5>
                        <span>Срочно были нужны потолки. Наткнулась в интернете на сайт, позвонила и записалась на замер, объяснила, что срочно надо. Через час  приехал замерщик, приятный молодой человек, показал образцы материала, проконсультировал. Все быстренько померил, посчитал, цена понравилась, помог определиться с выбором светильников, заключили договор.</span>
                    </div>
                    <div class="item item2 wow fadeInUp" data-wow-duration="2s">
                        <img src="images/avatar2.jpg" alt="img">
                        <h5>Сергей Артемьев</h5>
                        <span>У нас был ограничен бюджет, поэтому выбирали очень долго. Вызвали несколько замерщиков. В этой компании оказалась самая хорошая цена, поэтому и остановили выбор на них. Ни грамма не пожалели. Всем рекомендую. Отдельно хочу поблагодарить бригаду монтажников. Все сделали аккуратно и быстро, спасибо огромное!</span>
                    </div>
                    <div class="item item3 wow fadeInRight" data-wow-duration="2s">
                        <img src="images/avatar3.jpg" alt="img">
                        <h5>Андрей Чудинов</h5>
                        <span>Хорошая компания. Заказывал натяжной потолок на кухню и в спальню. Получилось очень красиво и современно. Большой ассортимент и нормальные цены. Отношение к клиенту человечное. Сделали быстро, после себя убрали, ничего не испортили в квартире, хотя опасения были на этот счет, т.к. работа такая. В общем одни положительные эмоции.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="call wow fadeInUp" data-wow-duration="2s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Вызовите замерщика в любой день,<br>мы работаем без выходных!</h2>
                    <h3>Произведем замер, поможем определиться с фактурой<br class="d-none d-md-block"> и цветом, рассчитаем точную стоимость.</h3>
                    <button data-toggle="modal" data-target="#zamer">ОСТАВИТЬ ЗАЯВКУ</button>
                </div>
            </div>
        </div>
    </div>
    <div id="map">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="places">
                        <img class="places-logo" src="images/logo.png" alt="logo">
                        <span>{{$seting->adres}}</span>
                        <div>
                            <img src="images/phone-icon.png" alt="img">
                            <a href="tel:{{$seting->phone}}">{{\App\Setings::phone($seting->phone)}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="copy">Натяжные потолки Павлодар 2020 - <?php echo date('Y');?></div>
                <div class="desc">Монтаж и обслуживание натяжных<br>потолков в Павлодаре и Павлодарской области</div>
                <div class="footer-contacts">
                    <a class="link-tel" href="tel:+77059871910"><img src="images/tel.png" alt="icon">{{\App\Setings::phone($seting->phone)}}</a>
                    <a class="link-mail" href="mailto:натяжные-потолки@gmail.com"><img src="images/mail.png" alt="icon">{{$seting->email}}</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="up" href="#"><img src="images/chevron-up.png" alt="icon"></a>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
