require('./bootstrap');
import '../css/app.css'
import '../css/style.css'
import {createApp} from 'vue/dist/vue.esm-bundler.js'
import test from './components/test'
import header_page from './components/index/header_page'
import index_page from './components/index/index_page'
import view_ticket from './components/index/view_ticket'
import axios from 'axios'
const app  = createApp({
    data:()=>({
        test:'test',
        type_send: '1',
        type_car: '1',
        next: '2',
        back: '1',
        name_ticket:'',
        item_set_size_product:''
    }),
    components:{
        test,
        header_page:header_page,
        index_page,
        view_ticket,
    },
    methods:{
        send_item_search_size_product(){
          axios.post('/EAV' , {id:this.item_set_size_product}).then((res)=>{
              $('.view_price').html(res.data[0])
              $('.view_btn_buy').html(res.data[1])
          });
        },
        search_name_ticket(e){
            this.name_ticket = e.target.value;
            $('.part-ticket li').hide();
            $('#'+this.name_ticket).show();
        }
    }
})

app.mount('#app')
// window.Vue = require('vue').default;
//
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// const app = new Vue({
//     el: '#app',
// });
