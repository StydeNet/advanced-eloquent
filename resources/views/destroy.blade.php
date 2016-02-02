<!DOCTYPE html>
<html>
    <head>
        <title>Eliminar varios items, Destroy</title>
    </head>
    <body>
        <p>
            {{ count($books) }}
            Registros
        </p>
        <form action="{{ url('destroy') }}" method="post">
            {!! csrf_field() !!}
            {!! method_field('delete') !!}

            @foreach($books as $book)
            <input type="checkbox" name="ids[]" value="{{ $book->id }}">{{ $book->title }}<br>
            @endforeach

            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
