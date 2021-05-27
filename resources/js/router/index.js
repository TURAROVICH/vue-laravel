require('../bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router'
const Home = require('../views/Home.vue').default
const Product = require('../views/Product.vue').default
const User = require('../views/User.vue').default
const Add = require('../views/Add.vue').default
const Update = require('../views/Update.vue').default
Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/product/:id',
    name: 'Product',
    component:Product
  },
  {
    path: '/user',
    name: 'User',
    component:User
  },
  {
    path: '/add',
    name: 'Add',
    component:Add
  },
  {
    path: '/update/product/:id',
    name: 'Update',
    component:Update
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
