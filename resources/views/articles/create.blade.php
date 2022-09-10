{{ Form::model($article, ['route' => 'articles.store']) }}
    @include('articles.form')
    {{ Form::submit('Сохранить') }}
{{ Form::close() }}
