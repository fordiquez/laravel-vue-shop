<template>

</template>

<script>
export default {
  name: "Shop",
  data: () => ({
    goods: []
  }),
  mounted() {
    this.getGoods()
  },
  methods: {
    async getGoods() {
      await this.$axios.get('/api/goods').then(({ data }) => {
        this.goods = data.data
      }).catch(error => {
        console.log(error);
      }).finally(() => $(document).trigger('change'))
    }
  }
};
</script>

<style scoped>

</style>