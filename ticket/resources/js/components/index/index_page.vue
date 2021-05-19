<template>
    <div class="index-page-select-type-ticket obj-center-c obj-center">
        <div class="title">
            <h2 class='set-font' style="color: #545454">بلیط <b style="color: #EF2D2B!important;">ماهان</b></h2>
        </div>
        <div class="icon-index-page">
            <img v-if="type_car === '1'" width="180px!important" src="data/icon/pr.png" alt="پرواز">
            <img v-else-if="type_car === '2'" width="180px!important" src="data/icon/mt.png" alt="مترو">
            <img v-else-if="type_car === '3'" width="180px!important" src="data/icon/bus.png" alt="اتوبوس">
        </div>
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
                        <select v-model="next" class='set-font f-12 color-b-600' name="Send" id="M2">
                            <option value="1" selected>برتنیا</option>
                            <option value="2">نیویورک</option>
                            <option value="3">برزیل</option>
                        </select>
                        <label class="set-font color-b-600 f-12" for="M2">مقصد</label>
                    </div>
                    <div>
                        <select v-model="back" class='set-font f-12 color-b-600' name="Send" id="M1">
                            <option value="1" selected>مشهد</option>
                            <option value="2">تهران</option>
                            <option value="3">تبریز</option>
                        </select>
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
                        <input checked v-model="type_car"  type="radio" name="type_select" id="airplane" value="1">
                    </div>
                    <div>
                        <label class="set-font color-b-600 f-12 label-radio-btn" for="train">قطار</label>
                        <input v-model="type_car"  type="radio" name="type_select" id="train" value="2">
                    </div>
                    <div>
                        <label class="set-font color-b-600 f-12 label-radio-btn" for="bus">اتوبوس</label>
                        <input  v-model="type_car" type="radio" name="type_select" id="bus" value="3">
                    </div>
                </div>
            </div>
        </div>
        <div class="obj-center m-p group-btn-send-ticket">
            <button class="btn-send-ticket-view set-font">
                برسی بلیط
            </button>
        </div>
    </div>
</template>

<script>
export default {
name: "index_page",
    data:()=>({
        type_send:1,
        type_car:'1',
        next:1,
        back:1,
    }),
    methods:{
        MT(event){
            console.log(event.target.value);
        },
    }
}
</script>

<style scoped>

</style>
