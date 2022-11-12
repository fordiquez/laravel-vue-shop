import { createRouter, createWebHistory } from 'vue-router'
import Index from "../views/Index.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: Index
    },
    {
      path: '/shop',
      name: 'shop',
      component: () => import('../views/Shop.vue')
    }
  ]
})

export default router
