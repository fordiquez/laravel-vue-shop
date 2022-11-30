import axios from 'axios'
import { useAuthStore } from '@/stores/auth';

axios.defaults.withCredentials = true;
axios.defaults.baseURL = import.meta.env.VITE_LARAVEL_API_BASE_URL;

axios.interceptors.response.use({}, error => {
  const authStore = useAuthStore();
  if (error.response.status === 401 || error.response.status === 419) {
    authStore.removeToken();
  } else if (error.response.status === 422) {
    authStore.authErrors = error.response.data.errors
  }
  return Promise.reject(error);
})