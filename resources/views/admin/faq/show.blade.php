@extends('admin.layout.main')
@section('title') Редактирование FAQ @endsection
@section('caption') Редактирование FAQ @endsection

@section('content')
    <div class="card-body">
        <form method="post" action="{{ route('admin.site.faq.update', ['FAQ' => $faq->id]) }}" class="">
            <div class="form-group">
                <label for="editor">Заголовок вопроса</label>
                <input name="title" class="form-control" value="{{ $faq->title }}">
            </div>
            <div class="form-group">
                <label for="editor">Содержание вопроса</label>
                <textarea name="content" class="border border-dark" id="editor">{{ $faq->content }}</textarea>
            </div>
            @csrf
            <button type="submit" class="btn btn-success">Обновить</button>
        </form>
    </div>

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace( 'editor' );
    </script>
@endsection
