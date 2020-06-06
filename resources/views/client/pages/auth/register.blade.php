@extends('client.layouts.main')
@section('title') Регистрация @endsection
@section('content')
<main>
    <section id="sign">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="box">
                        <form action="{{route('register.store')}}" method="POST" >
                            <div class="form-header">
                                <p>Регистрация</p>
                            </div>
                            <div class="form-body">
                                @csrf

                                <label for="name">ФИО</label>
                                <input id="name" name="fio" type="text" value="{{old('fio')}}">
                                @error('fio')
                                    <small class="text-danger ml-3">{{$message}}</small>
                                @enderror

                                <label for="mail" class="mt-3">Электронная почта</label>
                                <input id="mail" name="email" type="text" value="{{old('email')}}">
                                @error('email')
                                    <small class="text-danger ml-3">{{$message}}</small>
                                @enderror

                                <label for="password" class="mt-3">Пароль</label>
                                <input id="password" name="password" type="password">
                                @error('password')
                                    <small class="text-danger ml-3">{{$message}}</small>
                                @enderror

                                <label for="password-replay" class="mt-3">Повторите пароль</label>
                                <input id="password-replay" name="password_confirmation" type="password">

                            </div>
                            <div class="d-flex justify-content-center" style="padding: 15px 0;text-align:center;border-bottom: 1px solid #efefef;">
                                <button type="submit" class="button button3 border-0" style="padding: 12px 30px!important;">Регистрация</button>
                            </div>
                            <div class="form-footer">
                                <a href="{{route('login.show')}}" style="color: #3333ff;margin-bottom: 15px;">Уже зарегистрированны?</a>
                                <a href="#">Войти через ВКонтакте <img style="margin-left: 8px" src="../footer/footer-img/vk.png" alt=""></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
