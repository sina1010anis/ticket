<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$title}}</title>
</head>
<body>
<div id="shit">
    <div id="row">
        <div id="app">
            @yield('header')
            @yield('page_index')
        </div>
    </div>
</div>
</body>
<script src="{{url('js/app.js')}}"></script>
</html>
