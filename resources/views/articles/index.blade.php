@extends('layouts')

@section('content')
<div>
<a href="{{ route('articles.create') }}">Sozdat' statyu</a>
</div>
<h1>Spisok statey</h1>
@foreach ($articles as $article)
    <a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a>
    <div>{{ Str::limit($article->body, 200) }}</div>
    <a href="{{ route('articles.edit', $article->id) }}">Redaktirovat'</a>
    <form method="POST" action="{{ route('articles.destroy', $article->id) }}">
        <button type="submit">delete</button>
        @csrf
        @method('DELETE')
    </form>
@endforeach

@endsection
