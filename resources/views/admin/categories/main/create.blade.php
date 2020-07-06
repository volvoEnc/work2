@extends('admin.layout.main')

@section('title') Создание основной категории @endsection
@section('caption') Создание новой основной категории @endsection


@section('content')
        <form class="p-4" method="post" enctype="multipart/form-data" action="{{ route('admin.categories.main.store') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Название категории</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="custom-file mb-3">
                <input type="file" name="image" class="custom-file-input" id="validatedInputGroupCustomFile">
                <label class="custom-file-label" for="validatedInputGroupCustomFile">Изображение основной категории</label>
            </div>
            <div class="card mb-3">
                <div class="card-header row no-gutters justify-content-between align-items-center">
                    <h6>Для добавления групп категорий, сохраните эту категорию</h6>
                    <a href="#" class="btn btn-success disabled">Добавить</a>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
@endsection
