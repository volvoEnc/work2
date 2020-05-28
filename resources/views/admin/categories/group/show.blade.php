
@extends('admin.layout.main')
@section('title') Группа категорий №{{request()->id}} @endsection
@section('caption') Группа категорий №{{request()->id}} @endsection

@section('content')
    <form class="p-4" method="post" action="{{route('admin.categories.group.update', ['id' => request()->id])}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Название категории</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile">
            <label class="custom-file-label" for="validatedInputGroupCustomFile">Обновить изображение группы категорий</label>
        </div>
        <div class="card mb-3">
            <div class="card-header row no-gutters justify-content-between align-items-center">
                <h6>Категории</h6>
                <a href="{{ route('admin.categories.all.index', ['select' => request()->id]) }}" class="btn btn-success">Добавить</a>
            </div>
            <div class="card-body p-0">
                <div class="list-group">
                    @for($i=0; $i < 10; $i++)
                        <div class="list-group-item" id="{{$i}}">
                            <div class="row no-gutters">
                                <div class="mr-3">
                                    <img src="https://picsum.photos/60/60" alt="" class="">
                                </div>
                                <div class="card-body p-0">
                                    <h5 class="card-title">Колбаса варенная</h5>
                                    <div class="card-text"><small class="text-muted">Продуктов: {{random_int(100, 600)}}</small></div>
                                </div>
                                <div class="row flex-column">
                                    <a href="{{ route('admin.categories.group.remove', ['id' => request()->id, 'id_item' => $i]) }}" class="btn btn-sm btn-danger">Удалить</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
@endsection
