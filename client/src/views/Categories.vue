<template>
  <div class="bg-white">
    <div class="mx-auto max-w-screen-2xl py-16 px-4 sm:px-6 lg:px-8">
      <h2 class="sr-only">Products</h2>
      <div v-if="appStore.category?.subcategories"
           class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 xl:gap-x-8">
        <a v-for="category in appStore.category.subcategories" :key="category.id" :href="category.slug" class="group">
          <div v-if="category.photo"
               class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
            <img :src="category.photo" :alt="category.title" :title="category.title" class="h-full w-full object-cover object-center group-hover:opacity-75" />
          </div>
          <router-link :to="category.slug" class="mt-2 text-lg font-medium text-gray-900">{{ category.title }}</router-link>
          <ul v-if="category?.subcategories">
            <li v-for="subcategory in category.subcategories" :key="subcategory.id">
              <a :href="subcategory.slug" class="hover:text-indigo-600">{{ subcategory.title }}</a>
            </li>
          </ul>
        </a>
      </div>
    </div>
  </div>
</template>

<script setup>
import { useAppStore } from '@/stores/app';
import { onMounted, onUpdated } from 'vue';
import { useRoute } from 'vue-router';

const appStore = useAppStore();
const route = useRoute();

onMounted(() => {
  const { slug } = route.params
  console.log(slug)
  appStore.setCategorySlug(slug)
})

onUpdated(() => {
  const { slug } = route.params
  console.log(slug)
  appStore.setCategorySlug(slug)
})

</script>