@extends('admin.layout.main')
@section('title') Прочие настройки @endsection
@section('caption') Прочие настройки @endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h6>Контакты</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route("admin.site.info.update.social") }}">
                @csrf
                <div class="form-group">
                    <label for="phone">Телефон</label>
                    <input type="tel" name="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h6>Контакты</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route("admin.site.info.update.links") }}">
                @csrf
                <div class="form-group">
                    <label for="phone">О нашем сервисе (ссылка)</label>
                    <input type="text" name="about" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Оплата (ссылка)</label>
                    <input type="text" name="payment" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Доставка (ссылка)</label>
                    <input type="text" name="delivery" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Частые вопросы (ссылка)</label>
                    <input type="text" name="faq" class="form-control">
                </div>
                <div class="form-group">
                    <label for="phone">Политика конфиденциальности (ссылка)</label>
                    <input type="text" name="privacy_policy" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
