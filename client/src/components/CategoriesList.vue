<template>
  <div ref="categoriesWrapper" style="position: absolute; top: 0; left: 0; min-height: 575px; height: 100%" :style="{ width: `${categoriesWidth}px` }">
    <div class="menu__hidden-content ng-star-inserted" :style="{ width: `${categoriesWidth}px` }">
      <div class="menu__main-cats" style="flex-flow: column wrap; justify-content: flex-start" v-if="parentCategory.subcategories">
        <ul class="menu__hidden-list ng-star-inserted" style="display: flex" v-for="category in parentCategory.subcategories" :key="category.id">
          <li class="menu__hidden-list-item">
            <a class="menu__hidden-title" href="">{{ category.title }}</a>
            <ul class="ng-star-inserted" v-for="subcategory in category.subcategories" :key="subcategory.id">
              <li class="ng-star-inserted">
                <a class="menu__link" href="">{{ subcategory.title }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import { ref } from "vue";
import { onClickOutside } from "@vueuse/core/index";

export default {
  name: "CategoriesList",
  props: {
    categoriesWidth: {
      type: Number,
      required: true
    },
    parentCategory: {
      type: Object,
      required: true
    }
  },
  setup(props, context) {
    const categoriesWrapper = ref(null)
    onClickOutside(categoriesWrapper, (event) => {
      if (event.target.dataset.id !== 'categories') context.emit('close-categories')
    })
    return {
      categoriesWrapper,
    }
  },
};
</script>

<style scoped>

</style>