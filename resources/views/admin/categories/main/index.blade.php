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
        @foreach($categories as $category)
            <div class="list-group-item" id="{{ $category->id }}">
                <div class="row no-gutters">
                    <div class="mr-3">
                        <img src="{{ $category->image }}" alt="" class="" style="max-height: 65px;">
                    </div>
                    <div class="card-body p-0">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <div class="card-text"><small class="text-muted">Групп категорий: {{ count($category->categories) }}</small></div>
                    </div>
                    <div class="row flex-column">
                        <a href="{{ route('admin.categories.main.show', ['main_category' => $category->id]) }}" class="btn btn-sm btn-info">Подробнее</a>
                        <a href="{{ route('admin.categories.main.delete', ['main_category' => $category->id]) }}" class="btn btn-sm btn-danger">Удалить</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
