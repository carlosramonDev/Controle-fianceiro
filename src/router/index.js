import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Finance from '../views/Finance.vue'
Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/Users',
    name: 'Users',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>
      import(/* webpackChunkName: "about" */ '../views/Users.vue')
  },
  {
    path: '/Finance',
    name: 'Finance',
    component: Finance
  }
]

const router = new VueRouter({
  routes
})

export default router
