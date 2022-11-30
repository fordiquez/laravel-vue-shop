import { defineStore } from 'pinia';
import axios from 'axios';

export const useGoodsStore = defineStore('goods', {
  state: () => ({
    goodsList: [],
  }),
  getters: {
    goods: (state) => state.goodsList,
  },
  actions: {
    async getGoods() {
      this.goodsList = []
      await axios.get('/api/goods').then(({ data }) => this.goodsList = data.data)
        .catch(error => console.log(error.response))
    },
  }
})