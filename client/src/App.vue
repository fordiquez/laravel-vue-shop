<template>
  <div class="wrapper central-wrapper js-wrapper ng-star-inserted">
    <header-component />
    <router-view></router-view>
    <footer-component />
  </div>
</template>

<script>
import HeaderComponent from "./components/HeaderComponent.vue";
import FooterComponent from "./components/FooterComponent.vue";
export default {
  name: "App",
  components: { FooterComponent, HeaderComponent },
  data: () => ({
    categories: []
  }),
  mounted() {
    $(document).trigger("change");
    this.getCategories();
  },
  methods: {
    async getCategories() {
      await this.$axios.get("/api/categories").then(({ data }) => {
        this.categories = data.data;
      }).catch(error => {
        console.log(error);
      });
    }
  }
};
</script>
