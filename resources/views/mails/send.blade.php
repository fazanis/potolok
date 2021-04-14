@if ($data['type']=='calculate')
    <h1>Заявка с сайта c формы калькулятора</h1>
    <p>Площадь {{$data['square']}} Примерная стоимость {{$data['price']}} <br>
        Телефон заказчика {{$data['tel']}} <a href="tel:{{$data['tel']}}">Позвонить</a> </p>
    <p>Дата заявки {{\Carbon\Carbon::now()->format('d.m.Y H:i')}}</p>
    @elseif($data['type']=='zamer2')
    <h1>Заявка с сайта для обратного звонка</h1>
    <p>Телефон заказчика {{$data['tel']}} <a href="tel:{{$data['tel']}}">Позвонить</a> </p>
    <p>Дата заявки {{\Carbon\Carbon::now()->format('d.m.Y H:i')}}</p>
    @else
    <h1>Заявка с сайта для обратного звонка</h1>
    <p>Имя {{$data['name']}} Телефон заказчика {{$data['tel']}} <a href="tel:{{$data['tel']}}">Позвонить</a> </p>
    <p>Дата заявки {{\Carbon\Carbon::now()->format('d.m.Y H:i')}}</p>
{{--@elseif($data['type']=='zamer')--}}
{{--    zamer--}}
{{--@elseif($data['type']=='zamer2')--}}
{{--    zamer2--}}
@endif

