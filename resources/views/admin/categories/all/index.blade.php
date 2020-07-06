@extends('admin.layout.main')
@section('title') Категории @endsection
@section('caption') Категории @endsection

@section('content')
    <div class="row no-gutters">
        <div class="my-3 ml-3">
            @if (request()->has('select'))
                <a href="{{ route('admin.categories.group.show', ['group_category' => request()->select]) }}" class="btn btn-info">Назад</a>
            @endif
        </div>
        <div class="ml-auto my-3 mr-3">
            @if (!request()->has('select'))
                <a href="#" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Все группы категорий и осн. категории будут удалены!">Пересобрать</a>
                <a href="#" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Добавление новых категорий если появились новые продукты">Обновить</a>
            @endif
        </div>
    </div>
    <div class="list-group">
        @foreach ($categories as $category)
            <div class="list-group-item @if(!empty($category->parentCategory) and $category->parentCategory->id == request()->select) d-none @endif" id="{{$category->id}}">
                <div class="row no-gutters">
                    <div class="mr-3">
                        <img src="https://lenta.gcdn.co/globalassets/1/-/33/992/56/36749.png?preset=fulllossywhite" alt="" class="" style="max-height: 65px;">
                    </div>
                    <div class="card-body p-0">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            @if (request()->has('select') and ( (!empty($category->parentCategory) and $category->parentCategory->id != request()->select) or (empty($category->parentCategory)) ) )
                                <a href="{{ route('admin.categories.group.add', ['group_category' => request()->select, 'category' => $category->id]) }}" class="btn btn-sm btn-primary">Добавить</a>
                            @endif
                        </div>
                        <div class="card-text"><small class="text-muted">Товаров: {{ count($category->products) }}</small></div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
