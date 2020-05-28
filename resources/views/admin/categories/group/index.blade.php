@extends('admin.layout.main')
@section('title') Группы категорий @endsection
@section('caption') Группы категорий @endsection

@section('content')
    <div class="row no-gutters">
        <div class="my-3 ml-3">
            @if (request()->has('select'))
                <a href="{{ route('admin.categories.main.show', ['id' => request()->select]) }}" class="btn btn-info">Назад</a>
            @endif
        </div>
        <div class="ml-auto my-3 mr-3">
            @if (!request()->has('select'))
                <a href="{{ route('admin.categories.group.create') }}" class="btn btn-success">Создать новую</a>
            @endif
        </div>
    </div>
    <div class="list-group">
        @for($i=0; $i < 10; $i++)
            <div class="list-group-item border-success" id="{{$i}}">
                <div class="row no-gutters">
                    <div class="mr-3">
                        <img src="https://picsum.photos/60/60" alt="" class="">
                    </div>
                    <div class="card-body p-0">
                        <h5 class="card-title">Колбаса вареная</h5>
                        <div class="card-text"><small class="text-muted">Категорий: {{random_int(2, 15)}}</small></div>
                    </div>
                    <div class="row flex-column">
                        @if (request()->has('select'))
                            <a href="{{ route('admin.categories.main.add', ['id' => request()->select, 'id_item' => $i]) }}" class="btn btn-sm btn-primary">Добавить</a>
                        @else
                            <a href="{{ route('admin.categories.group.show', ['id' => $i]) }}" class="btn btn-sm btn-info mb-1">Подробнее</a>
                        @endif
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection
