@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info">Настройки обратной связи</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                        <form
                            action="{{isset($seting) ? route('setings.update',$seting) : route('setings.store')}}"
                            method="POST">
                            @csrf
                            @isset($seting)
                            <input name="_method" type="hidden" value="PUT">
                            @endisset
{{--                            @dd(isset($setings) ? $seting->phone : '')--}}
                    <div class="form-group">
                        <label for="">Телефон</label>
                        <input name="phone" type="text" value="{{isset($seting) ? $seting->phone : ''}}">
                    </div>
                    <div class="form-group">
                        <label for="">Адрес</label>
                        <input name="adres" type="text" value="{{isset($seting) ? $seting->adres : ''}}">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input name="email" type="text" value="{{isset($seting) ? $seting->email : ''}}">
                    </div>
                    <div class="form-group">
                        <label for="">Цена за м2</label>
                        <input name="price" type="text" value="{{isset($seting) ? $seting->price : ''}}">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Сохранить">
                    </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
