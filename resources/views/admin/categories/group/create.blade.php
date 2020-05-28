@extends('admin.layout.main')

@section('title') Создание группы категорий @endsection
@section('caption') Создание новой группы категорий @endsection


@section('content')
    <form class="p-4" method="post" action="{{route('admin.categories.group.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Название группы категории</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile">
            <label class="custom-file-label" for="validatedInputGroupCustomFile">Изображение группы категорий</label>
        </div>
        <div class="card mb-3">
            <div class="card-header row no-gutters justify-content-between align-items-center">
                <h6>Для добавления категорий, сохраните эту группу категорий</h6>
                <a href="#" class="btn btn-success disabled">Добавить</a>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
