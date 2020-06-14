@extends('client.layouts.main')
@section('title') Вход @endsection
@section('content')
<main>
    <section id="sign">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="box">
                        <form action="{{route('login.auth')}}" method="POST">
                            <div class="form-header">
                                <p>Вход</p>
                            </div>
                            <div class="form-body">
                                @csrf

                                <label for="mail">Электронная почта</label>
                                <input id="mail" name="email" type="text" value="{{old('email')}}">
                                @error('email')
                                    <small class="text-danger ml-3">{{$message}}</small>
                                @enderror

                                <label for="password" class="mt-3">Пароль</label>
                                <input id="password" name="password" type="password">
                                @error('auth')
                                    <small class="text-danger ml-3">{{$message}}</small>
                                @enderror

                            </div>
                            <div class="d-flex justify-content-center" style="padding: 15px 0;text-align:center;border-bottom: 1px solid #efefef;">
                                <button type="submit" class="button button3 border-0" style="padding: 10px 30px">Вход</button>
                            </div>
                            <div class="form-footer">
                                <a href="{{route('register.show')}}" style="color: #3333ff;margin-bottom: 15px;">Зарегистрироваться</a>
                                <a href="{{route('reset.password.step.1')}}">Забыли пароль</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
