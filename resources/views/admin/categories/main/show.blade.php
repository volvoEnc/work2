@extends('admin.layout.main')

@section('title') Основная категория №{{ $category->id }} @endsection
@section('caption') Основная категория №{{ $category->id }} @endsection


@section('content')

        <form class="p-4" method="post" enctype="multipart/form-data" action="{{route('admin.categories.main.update', ['main_category' => $category->id])}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Название категории</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $category->name }}">
            </div>
            <div class="custom-file mb-3">
                <input type="file" name="image" class="custom-file-input" id="validatedInputGroupCustomFile">
                <label class="custom-file-label" for="validatedInputGroupCustomFile">Обновить изображение основной категории</label>
            </div>
            <div class="card mb-3">
                <div class="card-header row no-gutters justify-content-between align-items-center">
                    <h6>Группы категорий</h6>
                    <a href="{{ route('admin.categories.group.index', ['select' => $category->id]) }}" class="btn btn-success">Добавить</a>
                </div>
                <div class="card-body p-0">
                    <div class="list-group">
                        @foreach($category->categories as $child_category)
                            <div class="list-group-item" id="{{$child_category->id}}">
                                <div class="row no-gutters">
                                    <div class="mr-3">
                                        <img src="{{ $child_category->image }}" alt="" class="" style="max-height: 65px;">
                                    </div>
                                    <div class="card-body p-0">
                                        <h5 class="card-title">{{ $child_category->name }}</h5>
                                        <div class="card-text"><small class="text-muted">Категорий: {{ count($child_category->categories) }}</small></div>
                                    </div>
                                    <div class="row flex-column">
                                        <a href="{{ route('admin.categories.main.remove', ['main_category' => $category->id, 'group_category' => $child_category->id]) }}" class="btn btn-sm btn-danger">Удалить</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>
@endsection
