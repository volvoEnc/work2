@extends('admin.layout.main')

@section('title') Основная категория №{{request()->id}} @endsection
@section('caption') Основная категория №{{request()->id}} @endsection


@section('content')

        <form class="p-4" method="post" action="{{route('admin.categories.main.update', ['id' => request()->id])}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Название категории</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="custom-file mb-3">
                <input type="file" class="custom-file-input" id="validatedInputGroupCustomFile">
                <label class="custom-file-label" for="validatedInputGroupCustomFile">Обновить изображение основной категории</label>
            </div>
            <div class="card mb-3">
                <div class="card-header row no-gutters justify-content-between align-items-center">
                    <h6>Группы категорий</h6>
                    <a href="{{ route('admin.categories.group.index', ['select' => request()->id]) }}" class="btn btn-success">Добавить</a>
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
                                        <div class="card-text"><small class="text-muted">Категорий: {{random_int(2, 15)}}</small></div>
                                    </div>
                                    <div class="row flex-column">
                                        <a href="{{ route('admin.categories.main.remove', ['id' => request()->id, 'id_item' => $i]) }}" class="btn btn-sm btn-danger">Удалить</a>
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
