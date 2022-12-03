<template>
  <div class="bg-white">
    <!-- Mobile menu -->
    <TransitionRoot as="template" :show="open">
      <Dialog as="div" class="relative z-40 lg:hidden" @close="open = false">
        <TransitionChild
            as="template"
            enter="transition-opacity ease-linear duration-300"
            enter-from="opacity-0"
            enter-to="opacity-100"
            leave="transition-opacity ease-linear duration-300"
            leave-from="opacity-100"
            leave-to="opacity-0">
          <div class="fixed inset-0 bg-black bg-opacity-25"/>
        </TransitionChild>

        <div class="fixed inset-0 z-40 flex">
          <TransitionChild
              as="template"
              enter="transition ease-in-out duration-300 transform"
              enter-from="-translate-x-full"
              enter-to="translate-x-0"
              leave="transition ease-in-out duration-300 transform"
              leave-from="translate-x-0"
              leave-to="-translate-x-full">
            <DialogPanel class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
              <div class="flex px-4 pt-5 pb-2">
                <button type="button" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400"
                        @click="open = false">
                  <span class="sr-only">Close menu</span>
                  <XMarkIcon class="h-6 w-6" aria-hidden="true"/>
                </button>
              </div>

              <div class="space-y-6 border-t border-gray-200 py-6 px-4">
                <div class="flow-root">
                  <router-link :to="{ name: 'Login' }" class="-m-2 block p-2 font-medium text-gray-900">Sign in
                  </router-link>
                </div>
                <div class="flow-root">
                  <router-link :to="{ name: 'Register' }" class="-m-2 block p-2 font-medium text-gray-900">Create
                    account
                  </router-link>
                </div>
              </div>

              <div class="border-t border-gray-200 py-6 px-4">
                <a href="#" class="-m-2 flex items-center p-2">
                  <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt=""
                       class="block h-auto w-5 flex-shrink-0"/>
                  <span class="ml-3 block text-base font-medium text-gray-900">CAD</span>
                  <span class="sr-only">, change currency</span>
                </a>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </Dialog>
    </TransitionRoot>

    <header class="relative bg-white">
      <!--      <p class="flex h-10 items-center justify-center bg-indigo-600 px-4 text-sm font-medium text-white sm:px-6 lg:px-8">-->
      <!--        Get free delivery on orders over $100</p>-->

      <nav aria-label="Top" class="mx-auto max-w-screen-2xl px-4 sm:px-6 lg:px-8">
        <div class="border-b border-gray-200">
          <div class="flex h-16 items-center">
            <button type="button" class="rounded-md bg-white p-2 text-gray-400 lg:hidden" @click="open = true">
              <span class="sr-only">Open menu</span>
              <Bars3Icon class="h-6 w-6" aria-hidden="true"/>
            </button>

            <!-- Logo -->
            <div class="ml-4 flex lg:ml-0">
              <router-link :to="{ name: 'Home' }">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt=""/>
              </router-link>
            </div>

            <div class="ml-3 hidden sm:block lg:hidden">
              <button class="text-base font-medium text-gray-500 hover:text-gray-900" @click="appStore.toggleMobileCategories">
                <span>Categories</span>
              </button>
            </div>

            <!-- Flyout menus -->
            <PopoverGroup class="hidden lg:ml-8 lg:block lg:self-stretch">
              <div class="flex h-full space-x-8">
                <Popover class="flex" v-slot="{ open }">
                  <div class="relative flex">
                    <PopoverButton
                        :class="[open ? 'border-indigo-600 text-indigo-600' : 'border-transparent text-gray-500 hover:text-gray-900', 'relative z-10 -mb-px flex items-center border-b-2 pt-px text-base font-medium transition-colors duration-200 ease-out']">
                      Categories
                    </PopoverButton>
                  </div>

                  <Transition
                      enter-active-class="transition ease-out duration-200"
                      enter-from-class="opacity-0"
                      enter-to-class="opacity-100"
                      leave-active-class="transition ease-in duration-150"
                      leave-from-class="opacity-100"
                      leave-to-class="opacity-0">
                    <PopoverPanel class="absolute inset-x-0 top-full text-sm text-gray-500 z-10">
                      <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"/>
                      <div class="relative bg-white">
                        <div class="mx-auto max-w-7xl px-4">
                          <div class="py-8 flex justify-between">
                            <div class="flex xl:basis-1/5 basis-1/4">
                              <ul>
                                <li v-for="category in categories" :key="category.id" class="p-1.5 rounded-md"
                                    :class="hoveredCategoryId === category.id ? 'bg-indigo-600 text-white' : 'stroke-slate-400'"
                                    @mouseover="onCategory(category)">
                                  <router-link :to="{ name: 'categories', params: { slug: category.slug } }"
                                               class="flex font-semibold">
                                    {{ category.title }}
                                  </router-link>
                                </li>
                              </ul>
                            </div>
                            <div class="text-sm flex flex-col flex-wrap grow" style="max-height: 300px">
                              <ul class="flex" v-for="subcategory in hoveredCategory.subcategories"
                                  :key="subcategory.id">
                                <li class="flex flex-col">
                                  <router-link :to="{ name: 'categories', params: { slug: subcategory.slug } }"
                                               :id="`${subcategory.title}-heading`" class="font-medium text-gray-900 hover:text-gray-700">
                                    {{ subcategory.title }}
                                  </router-link>
                                  <ul role="list" :aria-labelledby="`${subcategory.title}-heading`"
                                      class="my-2 space-y-2">
                                    <li v-for="item in subcategory.subcategories" :key="item.id" class="flex">
                                      <a :href="item.slug" class="text-sm text-gray-500 hover:text-gray-600">{{ item.title }}</a>
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                            <div class="basis-1/5 xl:block hidden">
                              <div class="group relative text-base sm:text-sm">
                                <div v-if="hoveredCategory.photo"
                                     class="aspect-w-1 aspect-h-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                  <img :src="hoveredCategory.photo" :alt="hoveredCategory.title"
                                       :title="hoveredCategory.title"
                                       class="object-cover object-center"/>
                                </div>
                                <router-link :to="{ name: 'categories', params: { slug: hoveredCategory.slug } }"
                                             class="mt-3 block font-medium text-gray-900">
                                  <span class="absolute inset-0 z-10" aria-hidden="true"/>
                                  {{ hoveredCategory.title }}
                                </router-link>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </PopoverPanel>
                  </Transition>
                </Popover>
              </div>
            </PopoverGroup>

            <div class="ml-3 hidden lg:block">
              <router-link :to="{ name: 'goods' }" class="text-base font-medium text-gray-500 hover:text-gray-900">
                <span>Goods</span>
              </router-link>
            </div>

            <div class="ml-auto flex items-center">
              <div v-if="!authStore.user" class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                <router-link :to="{ name: 'Login' }"
                             class="text-base font-medium leading-6 text-gray-500 whitespace-no-wrap hover:text-wave-600 focus:outline-none focus:text-gray-900">
                  Sign in
                </router-link>
                <span class="h-6 w-px bg-gray-200" aria-hidden="true"/>
                <span class="inline-flex rounded-md shadow-sm">
                  <router-link :to="{ name: 'Register' }"
                               class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap transition duration-150 ease-in-out border border-transparent rounded-md bg-wave-500 hover:bg-wave-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-wave active:bg-wave-700">
                    Sign up
                  </router-link>
                </span>
              </div>

              <div v-else>
                <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                  <button @click="authStore.logout"
                          class="text-base font-medium leading-6 text-gray-500 whitespace-no-wrap hover:text-wave-600 focus:outline-none focus:text-gray-900">
                    Logout
                  </button>
                </div>
              </div>

              <div class="hidden lg:ml-8 lg:flex">
                <a href="#" class="flex items-center text-gray-700 hover:text-gray-800">
                  <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt=""
                       class="block h-auto w-5 flex-shrink-0"/>
                  <span class="ml-3 block text-sm font-medium">CAD</span>
                  <span class="sr-only">, change currency</span>
                </a>
              </div>

              <!-- Search -->
              <div class="flex lg:ml-6">
                <a href="#" class="p-2 text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Search</span>
                  <MagnifyingGlassIcon class="h-6 w-6" aria-hidden="true"/>
                </a>
              </div>

              <!-- Cart -->
              <div class="ml-4 flow-root lg:ml-6">
                <button @click="appStore.toggleCart" class="group -m-2 flex items-center p-2">
                  <ShoppingBagIcon class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                   aria-hidden="true"/>
                  <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <Cart v-if="appStore.cart" :cart="appStore.cart" @close-cart="appStore.toggleCart" />
  </div>
</template>

<script setup>
import { computed, ref } from 'vue'
import {
  Dialog,
  DialogPanel,
  Popover,
  PopoverButton,
  PopoverGroup,
  PopoverPanel,
  TransitionChild,
  TransitionRoot
} from '@headlessui/vue'
import { Bars3Icon, MagnifyingGlassIcon, ShoppingBagIcon, XMarkIcon } from '@heroicons/vue/24/outline'
import { useAuthStore } from '@/stores/auth';
import { useAppStore } from '@/stores/app';
import Cart from '@/components/Cart.vue';

const props = defineProps(['categories'])

const appStore = useAppStore()
const authStore = useAuthStore()
const open = ref(false)

let hoveredCategoryId = ref(1)

let hoveredCategory = computed(() => props.categories.find(category => category.id === hoveredCategoryId.value))

function onCategory(category) {
  hoveredCategoryId.value = category.id
}
</script>