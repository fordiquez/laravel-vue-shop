<template>
  <Header :categories="data" />
  <main class="flex-grow overflow-x-hidden">
    <RouterView />
  </main>
  <Footer />
</template>
<script setup>
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";
import { useAxios } from "./composables/useAxios";

const { data } = useAxios('/api/categories')
</script>