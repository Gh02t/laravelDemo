<?php
    //$_SESSION home = "";
?>
<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - prove mie</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <!-- This is how Laravel include css files -->
    {{--{{ HTML::style("/css/main.css") }}--}}
    <!-- script library-->
    <script src="https://code.jquery.com/jquery-3.2.1.js" type="text/javascript"></script>
    @yield('header')
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        @yield('content')
    </div>
</div>
<footer>
   {{-- {{ HTML::script('js/app.js')}}--}}
    <!-- This is how Laravel include javascript files -->
   {{-- {{ HTML::script('js/main.js')}}--}}
    @yield('footer')
</footer>
</body>
</html>
