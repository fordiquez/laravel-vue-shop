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
import { useFetch } from "./composables/useFetch";

const { data } = useFetch('/api/categories')
</script>