@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-info">Загрузка фотографий</div>

                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-8 float-left">
                    <table class="table">
                        <thead>
                        <tr>
                            <td>Подпись</td>
                            <td>Фото</td>
                            <td>Место</td>
                            <td>Действия</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($photoList as $item)
                        <tr>
                            <td>{{$item->title}}</td>
                            <td><img src="/photo/{{$item->photo}}" width="100px" height="100px" alt=""></td>
                            <td>
                                @if ($item->mesto==1)
                                    Верх
                                @elseif($item->mesto==2)
                                    Низ
                                @endif
{{--                                {{$item->mesto==1 ? 'Верх' : 'Низ'}}--}}
                            </td>
                            <td>
                                <a href="{{route('photo.edit',$item)}}" class="btn btn-warning m-1">Изменить</a>
                                <form action="{{route('photo.destroy',$item)}}"
                                      method="POST"
                                onsubmit = "return confirm('Вы действительно хотите удалить фото?')"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger m-1" value="Удалить">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>

                        <div class="col-3 float-right">
                        @isset($photo)
                                <a href="{{route('photo.index')}}" class="btn btn-primary">Добавить новую</a>
                            <h2>Изменить фото</h2>
                        @else
                            <h2>Загрузить фото</h2>
                        @endisset
                        <form action="{{isset($photo) ? route('photo.update',$photo) : route('photo.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @isset($photo)
                                <img src="/photo/{{$photo->photo}}" width="150px " alt="">
                                @method('PUT')
                            @endisset
                            <div class="form-group">
                                <lable>Название</lable>
                                <br>
                                <input type="text" name="title" value="{{isset($photo) ? $photo->title : ''}}"><br>
                            </div>
                            <div class="form-group">
                                <lable>Фото</lable>
                                <br>
                                <input type="file" name="photofile"><br>
                            </div>
                            <div class="form-group">
                                <select name="mesto" id="">
                                    <option value="">Выберите место показа</option>
                                    <option value="1" @if(isset($photo) && $photo->mesto==1) selected @endif>Верх</option>
                                    <option value="2" @if(isset($photo) && $photo->mesto==2) selected @endif>Низ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Загрузить">
                            </div>
                        </form>
                        </div>
{{--                        <form--}}
{{--                            action="{{isset($seting) ? route('setings.update',$seting) : route('setings.store')}}"--}}
{{--                            method="POST">--}}
{{--                            @csrf--}}
{{--                            @isset($seting)--}}
{{--                            <input name="_method" type="hidden" value="PUT">--}}
{{--                            @endisset--}}
{{--                            @dd(isset($setings) ? $seting->phone : '')--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="">Телефон</label>--}}
{{--                        <input name="phone" type="text" value="{{isset($seting) ? $seting->phone : ''}}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="">Адрес</label>--}}
{{--                        <input name="adres" type="text" value="{{isset($seting) ? $seting->adres : ''}}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="">Email</label>--}}
{{--                        <input name="email" type="text" value="{{isset($seting) ? $seting->email : ''}}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="">Цена за м2</label>--}}
{{--                        <input name="price" type="text" value="{{isset($seting) ? $seting->price : ''}}">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="submit" class="btn btn-success" value="Сохранить">--}}
{{--                    </div>--}}
{{--                        </form>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
