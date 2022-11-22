<template>
  <div v-if="error">
    {{ error }}
  </div>
  <Suspense v-else>
    <template #default>
      <div class="bg-white">
        <div class="mx-auto max-w-screen-2xl py-16 px-4 sm:px-6 lg:px-8">
          <h2 class="sr-only">Products</h2>

          <div v-if="data" class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 xl:gap-x-8">
            <a v-for="good in data" :key="good.id" :href="good.slug" class="group">
              <div v-if="good.images" class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                <img :src="good.images[0].src" :alt="good.title" :title="good.title" class="h-full w-full object-cover object-center group-hover:opacity-75" />
              </div>
              <h3 class="mt-4 text-sm text-gray-700">{{ good.title }}</h3>
              <p class="mt-1 text-lg font-medium text-gray-900">{{ good.price }} $</p>
            </a>
          </div>
        </div>
      </div>
    </template>
    <template #fallback>
      <div>Loading...</div>
    </template>
  </Suspense>
</template>

<script setup>
import { useFetch } from "../composables/useFetch";

const { data, error } = useFetch('/api/goods')
</script>