@extends('client.layouts.main')
@section('title') Заголовок уведомления @endsection
@section('content')
    <main>
        <div id="warning">
            <div class="container">
                <p class="section-subtitle">< Вернуться на главную</p>
                <div class="warning-box">
                    <div class="warning-header">
                        <h6>Название уведомления</h6>
                    </div>
                    <p>Здравствуйте, Александр! ДоставкаЛента.ру Вам
                        сообщает: Вы попали в ситуацию, которая должна быть
                        немедленно устранена. Пожалуйста, проснитесь и
                        устраните последствия Вашего нестандартно
                        прошедшего сна.</p>
                </div>
            </div>
        </div>
    </main>
@endsection
