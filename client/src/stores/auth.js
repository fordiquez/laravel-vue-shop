import { defineStore } from 'pinia';
import axios from 'axios';

export const useAuthStore = defineStore('auth', {
  state: () => ({
    authUser: null,
    authErrors: [],
    authStatus: null,
  }),
  getters: {
    user: (state) => state.authUser,
    errors: (state) => state.authErrors,
    status: (state) => state.authStatus
  },
  actions: {
    async setCookie() {
      await axios.get('/sanctum/csrf-cookie');
    },
    async getUser() {
      this.authErrors = []
      await axios.get('/api/user').then(({ data }) => this.authUser = data).catch(error => console.log(error))
    },
    async login(data) {
      this.authErrors = []
      await this.setCookie().then(async () => {
        await axios.post('/login', {
          email: data.email,
          password: data.password
        }).then(() => this.router.push({ name: 'Home' }))
          .catch(error => error.response.status === 422 ? this.authErrors = error.response.data.errors : undefined)
      })
    },
    async register(data) {
      this.authErrors = []
      await this.setCookie().then(async () => {
        await axios.post('/register', {
          first_name: data.firstName,
          last_name: data.lastName,
          birthday_date: data.birthdayDate,
          gender: data.gender,
          email: data.email,
          password: data.password,
          password_confirmation: data.passwordConfirm,
        })
      }).then(() => this.router.push({ name: 'Home' }))
        .catch(error => error.response.status === 422 ? this.authErrors = error.response.data.errors : undefined)
    },
    async logout() {
      await axios.post('/logout').then(() => this.authUser = null)
    },
    async forgotPassword(email) {
      this.authErrors = []
      await axios.post('/forgot-password', {
        email
      }).then(response => this.authStatus = response.data.status)
        .catch(error => error.response.status === 422 ? this.authErrors = error.response.data.errors : undefined)
    },
    async resetPassword(data) {
      this.authErrors = []
      await axios.post('/reset-password', data)
        .then(response => this.authStatus = response.data.status)
        .catch((error) => error.response.status === 422 ? this.authErrors = error.response.data.errors : undefined)
    }
  }
})