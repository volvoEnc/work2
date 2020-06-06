@extends('admin.layout.main')
@section('title') Группы категорий @endsection
@section('caption') Группы категорий @endsection

@section('content')
    <div class="row no-gutters">
        <div class="my-3 ml-3">
            @if (request()->has('select'))
                <a href="{{ route('admin.categories.main.show', ['main_category' => request()->select]) }}" class="btn btn-info">Назад</a>
            @endif
        </div>
        <div class="ml-auto my-3 mr-3">
            @if (!request()->has('select'))
                <a href="{{ route('admin.categories.group.create') }}" class="btn btn-success">Создать новую</a>
            @endif
        </div>
    </div>
    <div class="list-group">
        @foreach($categories as $category)
            <div class="list-group-item @if(!empty($category->parentCategory) and $category->parentCategory->id == request()->select) d-none @endif" id="{{ $category->id }}">
                <div class="row no-gutters">
                    <div class="mr-3">
                        <img src="{{ $category->image }}" alt="" class="" style="max-height: 65px;">
                    </div>
                    <div class="card-body p-0">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <div class="card-text"><small class="text-muted">Категорий: {{ count($category->categories) }}</small></div>
                    </div>
                    <div class="row flex-column">
                        @if (request()->has('select'))
                            <a href="{{ route('admin.categories.main.add', ['main_category' => request()->select, 'group_category' => $category->id]) }}" class="btn btn-sm btn-primary">Добавить</a>
                        @else
                            <a href="{{ route('admin.categories.group.show', ['group_category' => $category->id]) }}" class="btn btn-sm btn-info mb-1">Подробнее</a>
                            <a href="{{ route('admin.categories.group.delete', ['group_category' => $category->id]) }}" class="btn btn-sm btn-danger mb-1">Удалить</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
