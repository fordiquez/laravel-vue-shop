import { ref } from 'vue'
import axios from 'axios'

export const useAxios = (url, data, config = {}) => {
    const response = ref(null)
    const error = ref(null)
    const loading = ref(null)

    const fetch = async () => {
        loading.value = true
        try {
            const result = await this.$axios.request({
                baseURL: import.meta.env.VITE_LARAVEL_API_BASE_URL,
                url,
                ...config
            })
            response.value = result.data.data
        } catch (e) {
            error.value = e
        } finally {
            loading.value = false
        }
    }

    !config.skip && fetch()

    return {
        response,
        error,
        loading,
        fetch
    }
}