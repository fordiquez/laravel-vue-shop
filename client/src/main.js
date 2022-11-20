import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'
import axios from './plugins/axios'

import '@/assets/main.css'

const app = createApp(App)

app.use(createPinia())
app.use(router)
app.use(axios, {
    baseUrl: import.meta.env.VITE_LARAVEL_API_BASE_URL
})

app.mount('#app')
