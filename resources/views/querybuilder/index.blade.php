<!DOCTYPE html>
<html>
    <head>
        <title>Query Builder</title>
    </head>
    <body>
        <h1>Query Builder</h1>
        <ul>
        @foreach($books as $book)
            <li>
                {{ $book->title }} - ({{ $book->category }})
                {{ $book->description }} 
            </li>
        @endforeach
        </ul>
    </body>
</html>