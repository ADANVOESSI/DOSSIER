@extends('layouts.master')

@section('content')
    <h1>Articles</h1>

    <h2>{{ $article['title'] }}</h2>
    <p>{{ $article['body'] }}</p>
    <p>{{ $article['user_id'] }}</p>

    @foreach($article->comments as $comment)
    <p><strong>{{ $comment->user->name }}</strong> a réagi :</p>
    <p>{{ $comment->comment }}</p>
    <p><small>{{ $comment->created_at->diffForHumans() }}</small></p>
    @endforeach

    <a href="/articles"><h2>Retour</h2></a>
    <a href="/article/{{ $article->id }} / edit">Editer l'article</a>

    @endsection




