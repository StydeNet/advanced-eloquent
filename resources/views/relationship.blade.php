<!DOCTYPE html>
<html>
    <head>
        <title>Relaciones</title>
    </head>
    <body>
        @foreach($categories as $category)
        	<p>
        		{{ $category->name }}
        		({{ $category->num_books }})
        	</p>
        	<ul>
        	@foreach($category->books as $book)
        		<li>
        			<strong>{{ $book->title }}</strong>
        			{{ $book->description }}
        		</li>
        	@endforeach
        	</ul>
        @endforeach
    </body>
</html>