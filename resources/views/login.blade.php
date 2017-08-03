@extends('layout')

@section('head')
@stop

@section('content')

    <div class="title m-b-md">
        <h1>fun-zio-na</h1>
        <h4>Laravello - login page</h4>
        {{--capire come passare le variabili dal CONTROLLER alla VISTA--}}
        <h6>{{--{{ pippo }}--}}</h6>
    </div>

@stop

@section('footer')
    <script type="text/javascript">alert('test LOGIN');</script>
@stop
