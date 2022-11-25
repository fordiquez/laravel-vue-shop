import axios from 'axios'

export default {
    install: (app, options) => {
        app.config.globalProperties.$axios = axios.create({
            withCredentials: true,
            baseURL: options.baseUrl,
            headers: {
                Authorization: options.token ? `Bearer ${options.token}` : '',
            }
        })

        app.provide('axios', options)
    }
}