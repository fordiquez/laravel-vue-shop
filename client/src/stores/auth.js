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
      await axios.get('/sanctum/csrf-cookie')
    },
    async getUser() {
      this.authErrors = []
      await axios.get('/api/user').then(({ data }) => this.authUser = data)
    },
    async login(data) {
      this.authErrors = []
      await this.setCookie().then(async () => {
        await axios.post('/login', {
          email: data.email,
          password: data.password
        }).then(async response => {
          localStorage.setItem('token', response.config.headers['X-XSRF-TOKEN'])
          await this.getUser()
          await this.router.push({ name: 'Home' })
        }).catch(error => {
          console.log(error.response)
        })
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
    },
    async logout() {
      await axios.post('/logout').then(() => {
        this.authUser = null
        this.removeToken()
      })
    },
    async forgotPassword(email) {
      this.authErrors = []
      await axios.post('/forgot-password', {
        email
      }).then(response => this.authStatus = response.data.status)
    },
    async resetPassword(data) {
      this.authErrors = []
      await axios.post('/reset-password', data).then(response => this.authStatus = response.data.status)
    },
    getToken() {
      return localStorage.getItem('token')
    },
    removeToken() {
      const token = this.getToken()

      if (token) {
        localStorage.removeItem('token')
      }

      this.router.push({ name: 'Login' })
    }
  }
})