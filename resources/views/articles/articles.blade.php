@extends('layouts.master')

@section('title')
    <h2>Articles</h2>
@endsection

@section('content')
@each('articles.index', $articles, 'article', 'articles.no-articles')
<!-- @forelse($articles as $article)
    <p>{{ $article['title'] }}</p>
    <p>{{ $article['body'] }}</p>
    {{-- <a href="/article/{{ $article->id }}">Article</a> --}}
@empty
    <p>Pas d'articles disponible.</p>
@endforelse -->

@endsection