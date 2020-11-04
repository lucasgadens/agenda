<!DOCTYPE html>
<html>
    <head>
        <title>{{$title ?? '' or 'Painel Curso'}}</title>
    
        <!--bootstrap--->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{url('resources/css/app.css')}}">
    
    </head>
    <body>
    
        @yield('content')
    
    </body>

</html>

