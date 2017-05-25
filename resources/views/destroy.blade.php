<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<p>{{ count($books) }}</p>
<form action="{{ url('destroy') }}" method="post">
    {!! csrf_field() !!}
    {!! method_field('delete') !!}
    @foreach($books as $book)
        <input type="checkbox" name="ids[]" value="{{ $book->id }}">{{ $book->title }} <br>
    @endforeach
    <br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>