<template>
  <div class="modal">
    <div role="button" class="modal__background modal__background_show_animation"></div>
    <div class="modal__holder modal__holder_show_animation modal__holder--large">
      <div class="modal__header">
        <h3 class="modal__heading">Catalog of goods</h3>
        <button type="button" class="modal__close" @click="$emit('close')">
          <XCircleIcon class="w-10 h-10"/>
        </button>
      </div>
      <div class="modal__content">
        <ul class="menu-main" v-if="!showSubcategories">
          <li class="menu-main__item" v-for="category in categories" :key="category.id">
            <button class="menu-main__link button--medium button--link justify-between" @click="renderSubcategories(category.id)">
              <div class="flex items-center">
                <EllipsisHorizontalIcon class="w-6 h-6"/>
                <span class="menu-main__link-title ml-2">{{ category.title }}</span>
              </div>
              <ArrowRightIcon class="w-6 h-6"/>
            </button>
          </li>
        </ul>
        <div v-else>
          <button type="button" class="menu__back button button--medium button--white" @click="rollbackCategories">
            <ArrowRightIcon class="w-6 h-6"/>
            <span>All categories</span>
          </button>
          <p class="menu__label">{{ selectedCategory.title }}</p>
          <ul class="menu-regular" v-if="selectedCategory.subcategories">
            <li class="menu-regular__column" v-for="subcategory in selectedCategory.subcategories" :key="subcategory.id">
              <a class="menu-main__link button--medium button--link" :href="subcategory.slug">
                <span class="menu-main__link-title">{{ subcategory.title }}</span>
              </a>
              <ul v-if="subcategory.subcategories">
                <li class="menu-regular__column" v-for="item in subcategory.subcategories" :key="item.id">
                  <a class="menu-main__link menu-main__link--regular button--small button--white" :href="item.slug">
                    <span class="menu-main__link-title">{{ item.title }}</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineComponent, reactive, ref } from 'vue';
import { ArrowRightIcon, EllipsisHorizontalIcon, XCircleIcon } from '@heroicons/vue/24/solid'

defineComponent({
  name: 'MobileCategories'
})

const showSubcategories = ref(false)
let selectedCategory = reactive({})

const props = defineProps(['categories'])

function renderSubcategories(categoryId) {
  selectedCategory = props.categories.find(category => category.id === categoryId)
  showSubcategories.value = true
}

function rollbackCategories() {
  selectedCategory = {}
  showSubcategories.value = false
}
</script>

<style scoped>
.modal {
  position: fixed;
  z-index: 100;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 100%;
  height: 100%;
  overflow: hidden;
  box-sizing: border-box;
}

.modal__background {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #00000080;
  animation: fadeIn .2s;
}

.modal__holder {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  max-width: 100%;
  height: 100%;
  margin: 0;
  background-color: #fff;
  border-radius: 0;
  box-shadow: none;
  overflow: hidden;
  animation: zoomIn .2s;
}

.modal__header {
  position: relative;
  display: flex;
  flex-direction: row;
  flex-shrink: 0;
  align-items: center;
  height: 57px;
  padding-left: 16px;
  padding-right: 68px;
  box-sizing: border-box;
  border-bottom: 1px solid #e9e9e9;
}

.modal__heading {
  overflow: hidden;
  font-size: 20px;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.modal__close {
  position: absolute;
  z-index: 99;
  right: 0;
  top: 0;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  width: 56px;
  height: 56px;
  background-color: #fffc;
  border: none;
  border-radius: 8px;
  outline: none;
  padding: 0;
  transition: all .2s ease;
  cursor: pointer;
}

.modal__content {
  max-height: 100%;
  padding: 16px;
  box-sizing: border-box;
  overflow-y: auto;
}

.menu-main__link {
  display: flex;
  flex-direction: row;
  align-items: center;
  width: 100%;
}

.button--link {
  background: none;
  border: none;
  color: #3e77aa;
  cursor: pointer;
  margin: 0;
  padding: 0;
  text-decoration: none;
}

.button--medium {
  font-size: 16px;
  height: 40px;
  line-height: 40px;
}

.menu-main__link-title {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}

.menu__back {
  display: flex;
  flex-direction: row;
  align-items: center;
  width: 100%;
  padding-left: 0;
  padding-right: 0;
}

.button--white {
  background-color: hsla(0,0%,100%,.9);
  color: #221f1f;
}

.menu__label {
  display: block;
  margin-top: 16px;
  margin-bottom: 16px;
  font-size: 16px;
  color: #797878;
}

.menu-regular {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  flex-wrap: wrap;
}

.menu-regular__column {
  width: 100%;
}
</style>