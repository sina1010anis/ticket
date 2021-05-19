<template>
    <div class="index-page-select-type-ticket obj-center-c obj-center">
        <div class="title">
            <h2 class='set-font' style="color: #545454">بلیط <b style="color: #EF2D2B!important;">ماهان</b></h2>
        </div>
        <div class="icon-index-page">
            <img width="180px" src="data/icon/mt.png" alt="مترو">
        </div>
        <div class="group-select-type-ticket obj-center">
            <div class="item-select-group">
                <h5 class="set-font color-b-700 m-p al-right">مبدا و مقصد</h5>
                <div class="line"></div>
                <div class="obj-end-center">
                    <div>
                        <label class="set-font color-b-600 f-12 label-radio-btn" for="1T">یک طرفه</label>
                        <input type="radio" name="Send" id="1T">
                    </div>
                    <div>
                        <label class="set-font color-b-600 f-12 label-radio-btn" for="2T">دو طرفه</label>
                        <input type="radio" name="Send" id="2T">
                    </div>
                </div>
                <div class="line"></div>
                <div class="obj-end-center group-select-type-ticket-select-input">
                    <div>
                        <select class='set-font f-12 color-b-600' name="Send" id="M2">
                            <option value="1">برتنیا</option>
                            <option value="1">نیویورک</option>
                            <option value="1">برزیل</option>
                        </select>
                        <label class="set-font color-b-600 f-12" for="M2">مقصد</label>
                    </div>
                    <div>
                        <select class='set-font f-12 color-b-600' name="Send" id="M1">
                            <option value="1">مشهد</option>
                            <option value="1">تهران</option>
                            <option value="1">تبریز</option>
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
                        <input type="radio" name="type_select" id="airplane">
                    </div>
                    <div>
                        <label class="set-font color-b-600 f-12 label-radio-btn" for="train">قطار</label>
                        <input type="radio" name="type_select" id="train">
                    </div>
                    <div>
                        <label class="set-font color-b-600 f-12 label-radio-btn" for="bus">اتوبوس</label>
                        <input type="radio" name="type_select" id="bus">
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
name: "index_page"
}
</script>

<style scoped>

</style>
