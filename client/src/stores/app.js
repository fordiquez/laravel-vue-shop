import { defineStore } from 'pinia';
import axios from 'axios';

export const useAppStore = defineStore('app', {
  state: () => ({
    categoriesList: [],
    mobileCategories: false,
  }),
  getters: {
    categories: (state) => state.categoriesList,
  },
  actions: {
    async getCategories() {
      this.categoriesList = []
      await axios.get('/api/categories').then(({ data }) => this.categoriesList = data.data).catch(error => console.log(error.response))
    },
    toggleMobileCategories() {
      this.mobileCategories = !this.mobileCategories
    }
  }
})