<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('scripts/js.js')}}"></script>
        <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css')}}">
        @yield('header')
    </head>
    <body>
        <section class="container" id="pjax-container">
        <h4>{{ time() }}</h4>
      @include('partials.flash') 
      @yield('content')
      @yield('footer')
        </section>
      
    </body>
   
    
    
<!--      @if(count($errors))
          <ul>
              @foreach($errors->all() as $error)    
                  <li>{{$error}}</li>
              @endforeach
          </ul>
  
      @endif-->
</html>

