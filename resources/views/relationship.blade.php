<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    @foreach($categories as $category)
        <p>
            {{ $category->name }}
            {{ $category->num_books }}
        </p>
        <ul>
            @foreach($category->books_public as $book)
                <li>
                    <strong>{{ $book->title }}</strong>
                    <p>{{ $book->description }} - {{ $book->status }}</p>
                </li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>
























