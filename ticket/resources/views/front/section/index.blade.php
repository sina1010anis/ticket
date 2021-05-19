@extends('front.index')

@section('header')
    <header_page></header_page>
@endsection

@section('page_index')
    <index_page></index_page>
    <form action="{{route('front.viewTicket')}}" method="post">
        @csrf
        <div class="group-select-type-ticket obj-center">
            <div class="item-select-group">
                <h5 class="set-font color-b-700 m-p al-right">مبدا و مقصد</h5>
                <div class="line"></div>
                <div class="obj-end-center">
                    <div>
                        <label class="set-font color-b-600 f-12 label-radio-btn" for="1T">یک طرفه</label>
                        <input checked v-model="type_send" type="radio" name="Send" id="1T" value="1">
                    </div>
                    <div>
                        <label class="set-font color-b-600 f-12 label-radio-btn" for="2T">دو طرفه</label>
                        <input v-model="type_send" type="radio" name="Send" id="2T" value="2">
                    </div>
                </div>
                <div class="line"></div>
                <div class="obj-end-center group-select-type-ticket-select-input">
                    <div>

                        <select v-model="next" class='set-font f-12 color-b-600' name="city_back" id="M2">
                            @foreach($city as $i)
                                <option value="{{$i->id}}">{{ $i->name }}</option>
                            @endforeach
                        </select>
                        <label class="set-font color-b-600 f-12" for="M2">مقصد</label>
                    </div>
                    <div>
                        <select v-model="back" class='set-font f-12 color-b-600' name="city_next" id="M1">
                            @foreach($city as $i)
                                <option value="{{$i->id}}">{{ $i->name }}</option>
                            @endforeach                            </select>
                        <label class="set-font color-b-600 f-12" for="M1">مبدا</label>
                    </div>
                </div>
            </div>
            <div class="item-select-group">
                <h5 class="set-font color-b-700 m-p al-right">نوع حمل و نقل</h5>
                <div class="line"></div>
                <br>
                <div class="obj-end-center">
                    <div>
                        <label class="set-font color-b-600 f-12 label-radio-btn" for="airplane">هواپیما</label>
                        <input checked v-model="type_car" type="radio" name="type_select" id="airplane" value="1">
                    </div>
                    <div>
                        <label class="set-font color-b-600 f-12 label-radio-btn" for="train">قطار</label>
                        <input v-model="type_car" type="radio" name="type_select" id="train" value="2">
                    </div>
                    <div>
                        <label class="set-font color-b-600 f-12 label-radio-btn" for="bus">اتوبوس</label>
                        <input v-model="type_car" type="radio" name="type_select" id="bus" value="3">
                    </div>
                </div>
            </div>
            <div class="obj-center m-p group-btn-send-ticket">
                <button @click="search_ticket" class="btn-send-ticket-view set-font">
                    برسی بلیط
                </button>
            </div>
        </div>
    </form>
@endsection
