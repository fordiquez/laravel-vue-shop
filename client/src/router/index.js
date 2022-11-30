import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '@/views/Home.vue'
import { useAuthStore } from '@/stores/auth';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/:pathMatch(.*)*',
      redirect: '/'
    },
    {
      path: '/',
      name: 'Home',
      component: HomeView,
      meta: {
        authorized: true
      }
    },
    {
      path: '/login',
      name: 'Login',
      component: () => import('@/views/Login.vue'),
      meta: {
        authorized: false
      }
    },
    {
      path: '/register',
      name: 'Register',
      component: () => import('@/views/Register.vue'),
      meta: {
        authorized: false
      }
    },
    {
      path: '/forgot-password',
      name: 'ForgotPassword',
      component: () => import('@/views/ForgotPassword.vue'),
      meta: {
        authorized: false
      }
    },
    {
      path: '/password-reset/:token',
      name: 'ResetPassword',
      component: () => import('@/views/ResetPassword.vue'),
      meta: {
        authorized: false
      }
    },
    {
      path: '/categories/:slug',
      name: 'Categories',
      component: () => import('@/views/Categories.vue'),
      meta: {
        authorized: false
      }
    },
  ]
})

router.beforeEach((to, from, next) => {
  const authStore = useAuthStore()
  authStore.authErrors = []
  const authRoutes = ['Login', 'Register', 'ForgotPassword', 'ResetPassword']
  const token = authStore.getToken()
  const { authorized } = to.meta

  if (authorized && !token) {
    return next({ name: 'Login' })
  } else if (authRoutes.includes(to.name) && token) {
    return next({ name: 'Home' })
  } else {
    return next()
  }
})

export default router
