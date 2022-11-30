<template>
  <Header :categories="appStore.categories" />
  <main class="flex-grow overflow-x-hidden">
    <RouterView />
  </main>
  <Footer />
  <MobileCategories v-show="appStore.mobileCategories" :categories="appStore.categories" @close="appStore.toggleMobileCategories" />
</template>
<script setup>
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";
import MobileCategories from '@/components/MobileCategories.vue';
import { defineComponent, onMounted, watch } from 'vue';
import { useAppStore } from '@/stores/app';
import { useAuthStore } from '@/stores/auth';

defineComponent({
  name: 'App',
})

const appStore = useAppStore();
const authStore = useAuthStore();

onMounted(async () => {
  await appStore.getCategories();
  if (authStore.getToken()) {
    await authStore.getUser();
  }
})

watch(() => appStore.mobileCategories, () => document.querySelector('body').classList.toggle('overflow-hidden'))
</script>