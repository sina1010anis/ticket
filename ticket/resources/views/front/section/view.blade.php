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
            <header_page></header_page>
            <view_ticket :titleFilter="{{$title_filter}}" :send="{{$send}}" :ticket="{{$ticket}}">
                <template v-slot:filter>
                    @foreach($title_filter as $i)
                        <span class="item-filter fl-right">
                            <h5 class="set-font color-b-600 al-right m-p">{{$i->name}}</h5>
                            <span class="line fl-right"></span>
                            <select @change="search_name_ticket" class="set-font color-b-600" name="item_filter">
                                @foreach($ticket as $ii)
                                    <option value="{{$ii->name}}">{{$ii->name}}</option>
                                @endforeach
                            </select>
                        </span>
                    @endforeach
                    <span class="item-filter fl-right">
                            <h5 class="set-font color-b-600 al-right m-p">نوع سفر</h5>
                            <span class="line fl-right"></span>
                            <select class="set-font color-b-600" name="item_filter">
                                <option value="1">ORGINAL</option>
                                <option value="2">VIP</option>
                            </select>
                        </span>
                </template>
                <template v-slot:show_ticket>
                    <span class="part-ticket fl-left">
                        <ul class="m-p">
                    @foreach($ticket as $i)
                        <li class="{{$i->date_went}}" id="{{$i->name}}">
                            @if($i->transportation_type == '1')
                                <img class="fl-right" src="{{url('data/icon/pr.png')}}" alt="">
                            @endif
                                @if($i->transportation_type == '2')
                                    <img class="fl-right" src="{{url('data/icon/mt.png')}}" alt="">
                                @endif
                                @if($i->transportation_type == '3')
                                    <img class="fl-right" src="{{url('data/icon/bus.png')}}" alt="">
                                @endif
                            <span class="view-des-ticket fl-right">
                                <span class="w-100 obj-center title-name-ticket">
                                    <p class="set-font f-12 al-center">{{$i->name}}</p>
                                </span>
                                <span class="w-100 obj-end-center des-ticket">
                                    <p class="set-font f-12 al-center">{{$i->cities_back->name}}</p>
                                    <p class="set-font f-12 al-center">{{$i->cities_next->name}} </p>
                                </span>
                            </span>
                            <span class="view-des-ticket fl-right">
                                <span class="w-100 obj-center title-name-ticket">
                                    @if($i->way == '1')
                                        <p class="set-font f-12 al-center">یک طرفه </p>
                                    @endif
                                    @if($i->way == '2')
                                        <p class="set-font f-12 al-center">دو طرفه </p>
                                    @endif
                                </span>
                                <span class="w-100 obj-end-center des-ticket">
                                    <p class="set-font f-12 al-center">{{$i->date_went}}</p>
                                    @if($i->date_return == '0')
                                        <p style="display: none" class="set-font f-12 al-center"></p>
                                    @else
                                        <p class="set-font f-12 al-center">{{$i->date_return}}</p>
                                    @endif
                                </span>
                            </span>
                            <span class="price-and-buy  view-des-ticket fl-left"
                                  style="background-color: unset;margin: 0">
                                <p class="f-20 al-center m-p set-font" style="color: #EF2D2B">{{$i->price}}</p>
                                <p class="f-16 al-center m-p set-font" style="color: #FFD1D0">تومان</p>
                                <a href="#" class="btn-buy-ticket set-font f-12">خرید</a>
                            </span>
                        </li>
                    @endforeach
                        </ul>
                </span>
                </template>
            </view_ticket>
        </div>
    </div>
</div>
</body>
<script src="{{url('/js/app.js')}}"></script>
</html>
