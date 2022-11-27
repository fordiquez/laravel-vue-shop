import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '@/views/Home.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'Home',
      component: HomeView
    },
    {
      path: '/login',
      name: 'Login',
      component: () => import('@/views/Login.vue'),
    },
    {
      path: '/register',
      name: 'Register',
      component: () => import('@/views/Register.vue'),
    },
    {
      path: '/forgot-password',
      name: 'ForgotPassword',
      component: () => import('@/views/ForgotPassword.vue')
    },
    {
      path: '/password-reset/:token',
      name: 'ResetPassword',
      component: () => import('@/views/ResetPassword.vue')
    },
    {
      path: '/categories/:slug',
      name: 'Categories',
      component: () => import('@/views/Categories.vue')
    },

  ]
})

export default router
