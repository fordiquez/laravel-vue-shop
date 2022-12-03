import { defineStore } from 'pinia';
import axios from 'axios';

export const useAppStore = defineStore('app', {
  state: () => ({
    categoriesList: [],
    mobileCategories: false,
    categorySlug: null,
    isOpenHeader: false,
    cart: false,
  }),
  getters: {
    categories: (state) => state.categoriesList,
    category: (state) => state.categoriesList.find(category => category.slug === state.categorySlug)
  },
  actions: {
    async getCategories() {
      this.categoriesList = []

      await axios.get('/api/categories').then(({ data }) => this.categoriesList = data.data).catch(error => console.log(error.response))
    },
    async setCategorySlug(slug) {
      this.categorySlug = slug
    },
    toggleMobileCategories() {
      this.mobileCategories = !this.mobileCategories
    },
    toggleCart() {
      this.cart = !this.cart
    }
  }
})