@extends('admin.layout.main')
@section('title') FAQ @endsection
@section('caption') FAQ @endsection

@section('content')
    <div class="row no-gutters">
        <a href="{{ route('admin.site.faq.create') }}" class="btn btn-success ml-3 my-3">Добавить</a>
    </div>
    <div class="list-group">
        <div class="list-group-item list-group-item-action d-flex">
            <h5 class="">Политика конфиденциальности</h5>
            <div class="d-flex btn-group ml-auto">
                <a href="{{ route('admin.site.faq.show', ['id' => 32]) }}" class="btn btn-info btn-sm">Подробнее</a>
                <a href="{{ route('admin.site.faq.remove', ['id' => 32]) }}" class="btn btn-danger btn-sm">Удалить</a>
            </div>
        </div>
    </div>
@endsection
