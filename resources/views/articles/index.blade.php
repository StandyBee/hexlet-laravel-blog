@extends('layouts')

@section('content')

<h1>Spisok statey</h1>
@foreach ($articles as $article)
    <a href="{{ route('articles.show', $article->id) }}">{{ $article->name }}</a>
    <div>{{ Str::limit($article->body, 200) }}</div>
@endforeach

@endsection
