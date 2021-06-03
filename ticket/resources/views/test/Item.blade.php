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
            @foreach($product_test as $i)
            <div class="column">
                <div class="demo-title">{{$i->name}}</div>
                <!-- Post-->
                <div class="post-module hover">
                    <!-- Thumbnail-->
                    <div class="thumbnail">
                        <div class="date">
                            <div class="day">{{$i->size}}</div>
                            <div class="month">{{$i->price}}</div>
                        </div><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg"/>
                    </div>
                    <!-- Post Content-->
                    <div class="post-content">
                        <a href="{{route('TestProduct' , $i->name)}}" class="category">{{$i->name}}</a>
                        <h1 class="title">{{$i->name}}</h1>
                        <p class="description">{{\Illuminate\Support\Str::limit($i->des , 50)}}</p>
                        <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-o"></i>
            6 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#">{{$i->price}}</a></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <br><br>
            @endforeach
</body>
<script src="{{url('js/app.js')}}"></script>
</html>
