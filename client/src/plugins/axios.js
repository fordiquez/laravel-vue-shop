import axios from 'axios'

axios.defaults.withCredentials = true;
axios.defaults.baseURL = import.meta.env.VITE_LARAVEL_API_BASE_URL;

// export default {
//     install: (app, options) => {
//         app.config.globalProperties.$axios = axios.create({
//             withCredentials: true,
//             baseURL: options.baseUrl,
//             headers: {
//                 Authorization: options.token ? `Bearer ${options.token}` : '',
//             }
//         })
//     }
// }