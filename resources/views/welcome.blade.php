<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Examen</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
        <!-- Styles -->
        
    </head>
    <body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#">TCADF</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
         @if (Route::has('login'))
         <a class="navbar-brand" href="{{ url('/login') }}">Entrar</a>
                    <a href="{{ url('/register') }}"></a>
           @endif
      </ul>
    </div>
  </div>
</nav>
   <div class="content text-center">
  <div class="jumbotron">
  <h1>Bienvenido al sitio</h1>
  <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
   </div>            
   </div>
   </body>
</html>
