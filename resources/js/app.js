//config
require('./bootstrap');
window.Vue = require('vue');
const App = require('./App.vue').default
Vue.config.productionTip = false
import Vue from 'vue';
import router from './router'
//endconfig


//filters
import Date from './filters/date_filter'
Vue.filter('date',Date)

//endfilter

new Vue({
    components:{
        Maincomponent:App
    },
    render:render=>render(App),
    router,
}).$mount('#app')

