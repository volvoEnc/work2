
@extends('admin.layout.main')
@section('title') Группа категорий №{{$category->id}} @endsection
@section('caption') Группа категорий №{{$category->id}} @endsection

@section('content')
    <form class="p-4" method="post" enctype="multipart/form-data" action="{{route('admin.categories.group.update', ['group_category' => $category->id])}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1"></label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $category->name }}">
        </div>
        <div class="custom-file mb-3">
            <input type="file" name="image" class="custom-file-input" id="validatedInputGroupCustomFile">
            <label class="custom-file-label" for="validatedInputGroupCustomFile">Обновить изображение группы категорий</label>
        </div>
        <div class="card mb-3">
            <div class="card-header row no-gutters justify-content-between align-items-center">
                <h6>Категории</h6>
                <a href="{{ route('admin.categories.all.index', ['select' => $category->id]) }}" class="btn btn-success">Добавить</a>
            </div>
            <div class="card-body p-0">
                <div class="list-group">
                    @foreach($category->categories as $child_category)
                        <div class="list-group-item" id="{{$child_category->id}}">
                            <div class="row no-gutters">
                                <div class="mr-3">
                                    <img src="https://picsum.photos/60/60" alt="" class="">
                                </div>
                                <div class="card-body p-0">
                                    <h5 class="card-title">{{ $child_category->name }}</h5>
                                    <div class="card-text"><small class="text-muted">Продуктов: {{ count($child_category->products) }}</small></div>
                                </div>
                                <div class="row flex-column">
                                    <a href="{{ route('admin.categories.group.remove', ['group_category' => $category->id, 'category' => $child_category->id]) }}" class="btn btn-sm btn-danger">Удалить</a>
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
