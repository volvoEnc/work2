@extends('client.layouts.main')
@section('title') Регистрация @endsection
@section('content')
    <main>
        <section id="sign">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="box">
                            <form action="">
                                <div class="form-header">
                                    <p>Смена пароля</p>
                                </div>
                                <div class="form-body">
                                    <label for="password"> Новый Пароль</label>
                                    <input id="password" name="userpassword" type="password" style="margin-bottom: 25px">
                                    <label for="password-replay">Повторите новый пароль</label>
                                    <input id="password-replay" name="userpassword-replay" type="password" style="margin-bottom: 25px">
                                </div>
                                <div class="d-flex button-group" style="padding: 15px 0;text-align:center;border-bottom: 1px solid #efefef;">
                                    <a href="#" class="button button3" style="background: none;border: 1px solid #000000;color: #000000">назад</a>
                                    <a href="#" class="button button3">Регистрация</a>
                                </div>
                                <div class="form-footer">
                                    <p></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
