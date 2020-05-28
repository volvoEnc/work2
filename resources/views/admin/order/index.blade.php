@extends('admin.layout.main')
@section('title') Заказы @endsection
@section('caption') Заказы @endsection

@section('content')
    <div class="row m-1 my-3">
        <div class="mx-3">
            <div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Фильтровать по:
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Ожидающие</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item active" href="#">В работе</a>
                    <a class="dropdown-item" href="#">Выполнененые</a>
                    <a class="dropdown-item" href="#">Отмененные</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">ID:</span>
                </div>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                    <button class="btn btn-primary">Поиск</button>
                </div>
            </div>
        </div>
    </div>
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse_1" aria-expanded="false" aria-controls="collapse_1">
            <div class="d-flex w-100 justify-content-between">
                <h5>#42</h5>
                <small>27.05.2020 14:43</small>
            </div>
            <div class="d-flex w-100 justify-content-between">
                <small >Сумма: <b>879 руб.</b></small>
                <small>Статус заказа: <b class="text-warning">ожидает</b></small>
            </div>
        </a>
        <div class="collapse" id="collapse_1">
            <div class="card card-body">
                <ul>
                    <li><b>ФИО:</b> Голуб Иван Васильевич</li>
                    <li><b>Телефон:</b> +79058094071</li>
                    <li><b>Email:</b> razumkov@e1.ru</li>
                    <li><b>Адрес:</b> ул. Автомагистральная, д. 34, п. 3, этаж 8, кв. 84</li>
                </ul>
                <div class="row-cols-3 pl-3">
                    <div class="btn-group">
                        <a href="{{route('admin.order.status', ['id' => 32, 'status' => 'cancel', 'page' => 2])}}" class="btn btn-danger">Отменить</a>
                        <a href="{{route('admin.order.status', ['id' => 32, 'status' => 'start', 'page' => 2])}}" class="btn btn-success">Начать</a>
                        <a target="_blank" href="{{ route('order.info', ['id' => 32]) }}" class="btn btn-primary">Подробее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
