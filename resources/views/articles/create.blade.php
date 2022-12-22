<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            flex-wrap:wrap;
            justify-content:space-between;
            align-items:center;
        }
    </style>
</head>
<body>
    @extends('layouts.master')

    @section('titre')
        
    <form action="articles/create" method="post">
    @csrf
    @include('partials.article-form')

    </form>

    @endsection
</body>
</html>