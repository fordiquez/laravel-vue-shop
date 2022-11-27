import { createApp, markRaw } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'
import './plugins/axios'

import '@/assets/main.css'

const app = createApp(App)

app.use(createPinia().use(({ store }) => store.router = markRaw(router)))
app.use(router)

app.mount('#app')
