<template>
    <div class="group-item-ticket">
        <span class="part-filter fl-right">
            <h4 class="set-font color-b-600 al-right">فیلتر</h4>
            <span class="line fl-right"></span>
            <span class="item-filter fl-right">
                <h5 class="set-font color-b-600 al-right m-p">تاریخ</h5>
                <span class="line fl-right"></span>
                <input class="set-font color-b-600 al-right" type="text" placeholder="تاریخ رفت">
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
    props:[
        'data',
        'titleFilter',
        'send',
        'ticket',
    ]
}
</script>

<style scoped>

</style>
