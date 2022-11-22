import {inject, ref} from 'vue'
import axios from 'axios'

export const useFetch = (url, config = {}) => {
    const data = ref(null)
    const response = ref(null)
    const error = ref(null)
    const loading = ref(null)

    const fetch = async () => {
        loading.value = true
        try {
            const { baseUrl } = inject('axios')
            const result = await axios.request({
                baseURL: baseUrl,
                url,
                ...config
            })
            response.value = result
            data.value = result.data.data
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
        data,
        loading,
        fetch
    }
}