<template>
  <TransitionRoot as="template" :show="cart">
    <Dialog as="div" class="relative z-10" @close="$emit('close-cart')">
      <TransitionChild
          as="template"
          enter="ease-out duration-300"
          enter-from="opacity-0"
          enter-to="opacity-100"
          leave="ease-in duration-200"
          leave-from="opacity-100"
          leave-to="opacity-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"/>
      </TransitionChild>

      <div class="fixed inset-0 z-10">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
          <TransitionChild
              as="template"
              enter="ease-out duration-300"
              enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
              enter-to="opacity-100 translate-y-0 sm:scale-100"
              leave="ease-in duration-200"
              leave-from="opacity-100 translate-y-0 sm:scale-100"
              leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <DialogPanel
                class="relative transform rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-4xl">
              <div class="">
                <div
                    class="modal__header flex items-center justify-between h-14 px-4 md:px-6 border-b border-slate-100">
                  <h3 class="text-2xl sm:text-3xl text-slate-900">Cart</h3>
                  <button @click="$emit('close-cart')">
                    <XMarkIcon class="h-6 w-6"/>
                  </button>
                </div>
                <div class="modal__content p-4 md:p-6 overflow-y-auto">
                  <div v-if="cartItemsCount">
                    <div class="flex justify-end mb-4">
                      <button @click="$emit('bulk-delete')"
                              class="text-white uppercase bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        <span>Clear all</span>
                      </button>
                    </div>
                    <ul class="cart-list md:mb-6">
                      <li class="cart-list__item mt-6 pt-6 border-t border-slate-100"
                          :class="i === 0 ? 'mt-0 pt-0 border-none' : null" v-for="(item, i) in cartItems"
                          :key="item.id">
                        <div class="cart-product">
                          <div class="cart-product__body relative flex">
                            <span
                                class="promo-label text-xs leading-6 px-2 bg-red-600 top-0 left-0 absolute">−20%</span>
                            <a class="flex shrink-0 items-center justify-center mr-4 w-32 h-32">
                              <img v-if="item['images']" :src="item['images'][0].src"
                                   class="h-full w-full object-cover object-center rounded-lg" loading="lazy"
                                   :alt="item.title" :title="item.title">
                            </a>
                            <div class="cart-product__main grow">
                              <a class="block mb-2" href="" :title="item.title">
                                <span class="text-sm text-gray-500">{{ item.title }}</span>
                              </a>
                            </div>
                            <div>
                              <button @click="$emit('remove', item)">
                                <TrashIcon class="h-6 w-6 text-indigo-900"/>
                              </button>
                            </div>
                          </div>
                          <div
                              class="cart-product__footer flex row flex-wrap justify-between md:justify-end py-4 md:py-0 md:pl-28">
                            <div class="cart-product__counter">
                              <div class="flex items-center">
                                <MinusIcon class="h-8 w-8 mr-2 text-slate-200"
                                           @click="$emit('update', item, item.quantity - 1)"/>
                                <input type="number" v-model="item.quantity" @input="$emit('update', item, item.quantity)"
                                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm text-center font-medium rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-14 p-2.5">
                                <PlusIcon class="h-8 w-8 ml-2 text-indigo-600 cursor-pointer"
                                          @click="$emit('update', item, item.quantity + 1)"/>
                              </div>
                            </div>
                            <div
                                class="cart-product__coast flex flex-col justify-center text-right ml-auto md:ml-0 md:w-1/4">
                              <p class="text-sm leading-4 line-through text-gray-500">{{ item.oldPrice }}&nbsp;₴</p>
                              <p class="text-xl text-red-600 whitespace-nowrap">{{ item.price }}&nbsp;<small>₴</small>
                              </p>
                            </div>
                          </div>
                        </div>
                      </li>
                    </ul>
                    <div class="cart-footer sticky -bottom-4 md:-mb-4 flex flex-wrap items-center py-4 bg-inherit bg-white">
                      <button @click="$emit('close-cart')"
                              class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300">
                        <span
                            class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white rounded-md group-hover:bg-opacity-0">Continue shopping</span>
                      </button>
                      <div
                          class="flex flex-col md:flex-row items-center w-full md:w-auto p-4 md:p-6 md:ml-auto rounded bg-purple-50 border border-slate-300">
                        <div class="cart-receipt__sum flex flex-row items-center justify-between w-full md:w-auto mb-4 md:mr-6 md:mb-0">
                          <p class="cart-receipt__sum-label">Total</p>
                          <div class="cart-receipt__sum-price"><span>{{ cartItemsTotal }}</span>&nbsp;<span
                              class="cart-receipt__sum-currency text-base md:text-lg">₴</span>
                          </div>
                        </div>
                        <button type="button"
                                class="w-40 text-white uppercase bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                          <span>Go to checkout</span>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div v-else class="cart-dummy flex flex-col justify-center items-center">
                    <img loading="lazy" alt="Cart" title="Cart" class="cart-dummy__illustration w-full mb-12 max-w-xs"
                         src="@/assets/images/modal-cart-dummy.svg">
                    <h4 class="cart-dummy__heading md:text-2xl text-xl mb-4">Cart is empty</h4>
                    <p class="cart-dummy__caption text-sm text-gray-500">But it's never too late to fix it :)</p>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="button"
                        class="inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm"
                        @click="$emit('close-cart')">
                  <span>Deactivate</span>
                </button>
                <button type="button"
                        class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                        @click="$emit('close-cart')" ref="cancelButtonRef">
                  <span>Cancel</span>
                </button>
              </div>
            </DialogPanel>
          </TransitionChild>
        </div>
      </div>
    </Dialog>
  </TransitionRoot>
</template>

<script setup>
import { Dialog, DialogPanel, TransitionChild, TransitionRoot } from '@headlessui/vue'
import { MinusIcon, PlusIcon, TrashIcon, XMarkIcon } from '@heroicons/vue/24/solid'

defineProps(['cart', 'cartItems', 'cartItemsCount', 'cartItemsTotal']);
</script>

<style scoped>
.modal__content {
  max-height: 80vh;
}

.promo-label {
  font-size: 10px;
  height: 16px;
  line-height: 16px;
  border-radius: 50px;
  color: #fff;
  display: inline-block;
  font-family: BlinkMacSystemFont, -apple-system, Arial, Segoe UI, Roboto, Helvetica, sans-serif;
  font-weight: 700;
  text-transform: uppercase;
}

.cart-receipt__sum-label {
  font-size: 20px;
}

.cart-receipt__sum-price {
  margin-left: auto;
  font-size: 20px;
}

@media (min-width: 768px) {
  .modal__content {
    padding: 24px;
  }

  .cart-list {
    margin-bottom: 24px;
  }

  .cart-receipt__sum-label {
    display: none;
  }

  .cart-receipt__sum-price {
    font-size: 36px;
  }
}
</style>