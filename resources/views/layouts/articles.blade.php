@extends('layouts.master')

@section('content')
    <h2>Articles</h2>

@foreach($articles as $article)
    <p>{{ $article['title'] }}</p>
    <p>{{ $article['body'] }}</p>
@endforeach

@if($articles)
    @foreach($articles as $article)
        <p>{{ $article['title'] }}</p>
        <p>{{ $article['body'] }}</p>
    @endforeach
@else
    <p>Pas d'articles disponible</p>
@endif

@unless(! $articles)
    @foreach($articles as $article)
        @include('articles.index')
    @endforeach
@endunless

@forelse($articles as $article)
    <p>{{ $article['title'] }}</p>
    <p>{{ $article['body'] }}</p>
@empty
    <p>Pas d'articles disponible.</p>
@endforelse

@each('articles.index', $articles, 'article', 'articles.no-articles')

@for ($i = 0; $i < 10; $i++)
    <p>Bonjour à toi ma maman</p>
@endfor

@endsection