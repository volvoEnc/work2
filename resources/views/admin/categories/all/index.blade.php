@extends('admin.layout.main')
@section('title') Категории @endsection
@section('caption') Категории @endsection

@section('content')
    <div class="row no-gutters">
        <div class="my-3 ml-3">
            @if (request()->has('select'))
                <a href="{{ route('admin.categories.group.show', ['id' => request()->select]) }}" class="btn btn-info">Назад</a>
            @endif
        </div>
        <div class="ml-auto my-3 mr-3">
            @if (!request()->has('select'))
                <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Все группы категорий и осн. категории будут удалены!">Пересобрать</a>
                <a href="#" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Добавление новых категорий если появились новые продукты">Обновить</a>
            @endif
        </div>
    </div>
    <div class="list-group">
        @for($i=0; $i < 50; $i++)
            <div class="list-group-item" id="{{$i}}">
                <div class="row no-gutters">
                    <div class="mr-3">
                        <img src="https://picsum.photos/60/60" alt="" class="">
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">Колбаса вареная</h5>
                            @if (request()->has('select'))
                                <a href="{{ route('admin.categories.group.add', ['id' => request()->select, 'id_item' => $i]) }}" class="btn btn-sm btn-primary">Добавить</a>
                            @endif
                        </div>
                        <div class="card-text"><small class="text-muted">Товаров: {{random_int(10, 999)}}</small></div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection
