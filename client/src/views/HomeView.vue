<template>
  <div class="bg-white">
    <div class="mx-auto max-w-2xl py-16 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Products</h2>

      <div v-if="goods" class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <a v-for="good in goods" :key="good.id" href="#" class="group">
          <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
            <img v-if="good.images" :alt="good.title" :title="good.title" class="h-full w-full object-cover object-center group-hover:opacity-75" />
          </div>
          <h3 class="mt-4 text-sm text-gray-700">{{ good.title }}</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">{{ good.price }} $</p>
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "HomeView",
  data: () => ({
    goods: []
  }),
  mounted() {
    this.getGoods()
  },
  methods: {
    async getGoods() {
      await this.$axios.get('/api/goods').then(({data}) => {
        this.goods = data.data
      }).catch(error => {
        console.log(error)
      })
    }
  }
}
</script>