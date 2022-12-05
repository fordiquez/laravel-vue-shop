import { defineStore } from 'pinia';
import axios from 'axios';

export const useAppStore = defineStore('app', {
  state: () => ({
    categoriesList: [],
    mobileCategories: false,
    categorySlug: null,
    isOpenHeader: false,
    cart: false,
    _cartItems: [],
    cartGoods: [],
    cartItemsCount: 0,
    cartItemsTotal: 0,
  }),
  getters: {
    categories: (state) => state.categoriesList,
    category: (state) => state.categoriesList.find(category => category.slug === state.categorySlug),
    cartItems: (state) => state.cartGoods.map(good => {
      const container = {}
      container.id = good.id
      container.title = good.title
      container.slug = good.slug
      container.category = good.category
      container.images = good.images
      container.oldPrice = good.old_price
      container.price = good.price
      container.quantity = state._cartItems[good.id]['quantity']
      return container
    })
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
    },
    async getCartItemsCount() {
      await axios.get('/api/cart/count')
        .then(({ data }) => this.cartItemsCount = data.count)
        .catch(error => {
        console.log(error.response)
      })
    },
    async getCartItems() {
      await axios.get('/api/cart/')
        .then(({ data }) => {
          this._cartItems = data.cartItems
          this.cartGoods = data.goods
          this.cartItemsTotal = data.total
        })
        .catch(error => {
          console.log(error.response)
        })
    },
    async addCartItem(item) {
      await axios.post(`/api/cart/store/${item.slug}`)
        .then(async ({ data }) => {
          this.cartItemsCount = data.count
          await this.getCartItems()
        })
        .catch(error => {
          console.log(error.response)
      })
    },
    async updateCartItem(item, quantity) {
      await axios.post(`/api/cart/update-quantity/${item.slug}`, {
        quantity
      }).then(async res => {
        console.log(res)
        await this.getCartItems()
      }).catch(error => {
        console.log(error.response)
      })
    },
    async removeCartItem(item) {
      console.log(item)
      await axios.post(`/api/cart/remove/${item.slug}`)
        .then(async ({ data }) => {
          this.cartItemsCount = data.count
          await this.getCartItems()
        })
        .catch(error => {
          console.log(error.response)
        })
    },
    async bulkDeleteCart() {
      await axios.post('/api/cart/bulk-delete')
        .then(async res => {
          console.log(res)
          this.cartItemsCount = 0
          await this.getCartItems()
        })
        .catch(error => {
          console.log(error.response)
        })
    },
  }
})