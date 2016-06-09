<!DOCTYPE html>
<html>
    <head>
        <title>Relación | Video 16</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Usuario {{ $user->name }}</h1>
                </div>
                @foreach($user->photos as $photo)
                <div class="col-xs-3 text-center">
                    <img src="{{ asset("asset/photo/$photo->photo") }}" class="img-responsive">
                    <a href="{{ asset("asset/photo/$photo->photo") }}">Ver</a> -
                    <a href="{{ asset("asset/photo/$photo->photo") }}" download>Descargar</a> 
                </div>
                @endforeach
            </div>
        </div>
        
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </body>
</html>