<!DOCTYPE html>
<html>
    <head>
        <title>Query Builder</title>
    </head>
    <body>
        <h1>Query Builder</h1>
        <ul>
        @foreach($users as $user)
            <li>
                <strong>Autor</strong>: {{ $user->user_name }}
                {{ $user->user_email }} 
            </li>
        @endforeach
        </ul>
    </body>
</html>