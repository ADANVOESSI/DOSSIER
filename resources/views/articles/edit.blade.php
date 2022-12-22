@extends('layouts.master')
@section('title')

Editer l'article {{ $article->title }}
@endsection

@section('content')
    <form action="/article/{{ $article->id }}/edit" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        @include('partials.article-form')
    </form>

    <form action="/article/{{ $article->id }}/delete" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Effacer l'article">
    </form>

@endsection
