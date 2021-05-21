<template>
    <div class="group-item-ticket">
        <span class="part-filter fl-right">
            <h4 class="set-font color-b-600 al-right">فیلتر</h4>
            <span class="line fl-right"></span>
            <span class="item-filter fl-right">
                <h5 class="set-font color-b-600 al-right m-p">تاریخ</h5>
                <span class="line fl-right"></span>
                <input v-model="date_one_way" @keyup="search_ticket" class="set-font color-b-600 al-right" type="text" placeholder="تاریخ رفت">
                <input v-if="send == '2'" class="set-font color-b-600 al-right" type="text" placeholder="تاریخ برگشت">
            </span>
            <slot name="filter" />
        </span>
        <slot name="show_ticket"/>
    </div>
</template>

<script>
export default {
    name: "view_ticket",
    data:()=>({
       date_one_way:'',
    }),
    methods:{
        search_ticket(){
            $('.part-ticket li').fadeOut();
            $('.part-ticket .'+this.date_one_way).fadeIn();
        },
    },
    props:[
        'data',
        'titleFilter',
        'send',
        'ticket',
    ],
}
</script>

<style scoped>

</style>
