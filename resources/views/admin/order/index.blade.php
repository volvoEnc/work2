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
                    <a class="dropdown-item @if(request()->get('filter', 'work') == 'processing') active @endif" href="{{ route('admin.home', ['filter' => 'processing']) }}">Ожидающие</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item @if(request()->get('filter', 'work') == 'work') active @endif" href="{{ route('admin.home', ['filter' => 'work']) }}">В работе</a>
                    <a class="dropdown-item @if(request()->get('filter', 'work') == 'completed') active @endif" href="{{ route('admin.home', ['filter' => 'completed']) }}">Выполнененые</a>
                    <a class="dropdown-item @if(request()->get('filter', 'work') == 'canceled') active @endif" href="{{ route('admin.home', ['filter' => 'canceled']) }}">Отмененные</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <form action="{{ route('admin.home') }}" class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">ID:</span>
                </div>
                <input type="text" name="search" value="{{ request()->get('search', null) }}" class="form-control" aria-label="">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Поиск</button>
                </div>
            </form>
        </div>
    </div>
    <div class="list-group">
        @if ($orders->get(0) == null)
            <h4 class="ml-3 mb-3">Тут ничего нет</h4>
        @else
            @foreach($orders as $order)
                <a href="#" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse_{{ $order->id }}" aria-expanded="false" aria-controls="collapse_{{ $order->id }}">
                    <div class="d-flex w-100 justify-content-between">
                        <h5>#{{ $order->id }}</h5>
                        <small>{{ $order->created_at }}</small>
                    </div>
                    <div class="d-flex w-100 justify-content-between">
                        <small >Сумма: <b>{{ $order->price }} руб.</b></small>
                        <small>Статус заказа: <b class="{{ $order->status_color }}">{{ $order->status }}</b></small>
                    </div>
                </a>
                <div class="collapse" id="collapse_{{ $order->id }}">
                    <div class="card card-body">
                        <ul>
                            <li><b>ФИО:</b> {{ $order->fio }}</li>
                            <li><b>Телефон:</b> {{ $order->phone }}</li>
                            <li><b>Email:</b> {{ $order->email }}</li>
                            <li><b>Адрес:</b> {{ $order->address }}</li>
                        </ul>
                        <div class="row-cols-3 pl-3">
                            <div class="btn-group">
                                @if($order->status == 'В Обработке')
                                    <a href="{{route('admin.order.status', ['order' => $order->id, 'status' => 'canceled', 'page' => request()->get('page', 1)])}}" class="btn btn-danger">Отменить</a>
                                    <a href="{{route('admin.order.status', ['order' => $order->id, 'status' => 'work', 'page' => request()->get('page', 1)])}}" class="btn btn-success">Начать</a>
                                @elseif($order->status == 'В работе')
                                    <a href="{{route('admin.order.status', ['order' => $order->id, 'status' => 'canceled', 'page' => request()->get('page', 1)])}}" class="btn btn-danger">Отменить</a>
                                    <a href="{{route('admin.order.status', ['order' => $order->id, 'status' => 'completed', 'page' => request()->get('page', 1)])}}" class="btn btn-success">Завершить</a>
                                @endif
                                <a target="_blank" href="{{ route('order.info', ['order' => $order->id]) }}" class="btn btn-primary">Подробее</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
