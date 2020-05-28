@extends('admin.layout.main')
@section('title') Основные категории @endsection
@section('caption') Основные категории @endsection

@section('content')
    <div class="row no-gutters">
        <div class="my-3 ml-auto mr-3">
            <a href="{{ route('admin.categories.main.create') }}" class="btn btn-success">Создать новую</a>
        </div>
    </div>
    <div class="list-group">
        @for($i=0; $i < 5; $i++)
            <div class="list-group-item" id="{{$i}}">
                <div class="row no-gutters">
                    <div class="mr-3">
                        <img src="https://picsum.photos/60/60" alt="" class="">
                    </div>
                    <div class="card-body p-0">
                        <h5 class="card-title">Продукты питания</h5>
                        <div class="card-text"><small class="text-muted">Групп категорий: {{random_int(2, 15)}}</small></div>
                    </div>
                    <div class="row flex-column">
                        <a href="{{ route('admin.categories.main.show', ['id' => $i]) }}" class="btn btn-sm btn-info">Подробнее</a>
                        @if (request()->has('select'))
                            <a href="{{ route('admin.categories.main.add', ['id' => request()->select, 'id_item' => $i]) }}" class="btn btn-sm btn-primary">Добавить</a>
                        @endif
                    </div>
                </div>
            </div>
        @endfor
    </div>
@endsection
