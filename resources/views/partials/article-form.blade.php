<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
@csrf
    <fieldset>
        <legend>Mon formulaire LARAVEL</legend>
        
        <div>
            <label for="">Titre</label>
            <input type="text" placeholder="Titre de l'article" name="title" value="{{ old('title', isset($article->tirle) ? $article->title : null) }}">
        </div>
        <br>

        <div>
            <textarea name="body" id="" cols="100" rows="10"> {{ old('body', isset($article->body) ? $article->body : null) }}</textarea>
        </div>
        <br>


        <div>
            <input type="file" name="image" id="">
        </div>
        <br>

        @error('image')
            <div>{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">Enregistrer</button>

    </fieldset>
</body>
</html>