require('./bootstrap');
import '../css/app.css'
import '../css/style.css'
import {createApp} from 'vue/dist/vue.esm-bundler.js'
import test from './components/test'
import header_page from './components/index/header_page'
import index_page from './components/index/index_page'
const app  = createApp({
    data:()=>({
        test:'test',
    }),
    components:{
        test,
        header_page:header_page,
        index_page,
    }
})

app.mount('#app')
// window.Vue = require('vue').default;
//
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// const app = new Vue({
//     el: '#app',
// });
