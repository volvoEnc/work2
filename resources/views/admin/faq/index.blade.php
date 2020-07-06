@extends('admin.layout.main')
@section('title') FAQ @endsection
@section('caption') FAQ @endsection

@section('content')
    <div class="row no-gutters">
        <a href="{{ route('admin.site.faq.create') }}" class="btn btn-success ml-3 my-3">Добавить</a>
    </div>
    <div class="list-group">
        @foreach($faqs as $faq)
            <div class="list-group-item list-group-item-action d-flex">
                <h5 class="">{{ $faq->title }}</h5>
                <div class="d-flex btn-group ml-auto">
                    <a href="{{ route('admin.site.faq.show', ['FAQ' => $faq->id]) }}" class="btn btn-info btn-sm">Подробнее</a>
                    <a href="{{ route('admin.site.faq.remove', ['FAQ' => $faq->id]) }}" class="btn btn-danger btn-sm">Удалить</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
