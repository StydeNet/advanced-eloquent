<!DOCTYPE html>
<html>
    <head>
        <title>Relaciones</title>
    </head>
    <body>
        @foreach($categories as $category)
        	<p>
        		{{ $category->name }}
                {{ $category->num_books }}
        	</p>
        @endforeach
    </body>
</html>