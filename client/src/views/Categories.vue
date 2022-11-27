<template>
  <div v-if="error">
    {{ error }}
  </div>
  <Suspense v-else>
    <template #default>
      <div class="bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="mx-auto max-w-2xl py-8 lg:max-w-none">
            <h2 class="text-2xl font-bold text-gray-900">Collections</h2>
            <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
              <div v-for="categories in data" :key="categories.id" class="group relative">
                <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                  <img :src="categories.photo" :alt="categories.title" :title="categories.title" class="h-full w-full object-cover object-center" />
                </div>
                <h3 class="mt-6 text-sm text-gray-500">
                  <a :href="categories.slug">
                    <span class="absolute inset-0" />
                    {{ categories.title }}
                  </a>
                </h3>
              </div>
            </div>
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
import { useAxios } from "../composables/useAxios";

const { data, error } = useAxios('/api/categories')
</script>