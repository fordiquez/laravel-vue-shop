<template>
  <div class="bg-white">
    <div class="mx-auto max-w-screen-2xl py-16 px-4 sm:px-6 lg:px-8">
      <h2 class="sr-only">Products</h2>
      <div v-if="goodsStore.goods.length"
           class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 xl:gap-x-8">
        <a v-for="good in goodsStore.goods" :key="good.id" :href="good.slug" class="group">
          <div v-if="good.images"
               class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
            <img :src="good.images[0].src" :alt="good.title" :title="good.title"
                 class="h-full w-full object-cover object-center group-hover:opacity-75"/>
          </div>
          <h3 class="mt-4 text-sm text-gray-700">{{ good.title }}</h3>
          <p class="mt-1 text-lg font-medium text-gray-900">{{ good.price }} $</p>
        </a>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineComponent, onMounted } from 'vue';
import { useGoodsStore } from '@/stores/goods';

defineComponent({
  name: 'Home',
})

const goodsStore = useGoodsStore();

onMounted(async () => {
  await goodsStore.getGoods()
})
</script>