<template>
  <div class="app-header">
    <div class="app-header-wrapper header--thin">
      <div class="preloader" hidden=""></div>
      <hamburger-menu v-if="isHamburgerMenu" :is-active="isHamburgerMenu" @close-menu="onHamburgerMenu" @categories="onCategories" />
      <header class="header">
        <div class="layout">
          <div class="header-layout">
            <div class="header-menu ">
              <button type="button" class="header__button" aria-label="Відкрити меню" @click="onHamburgerMenu">
                <svg aria-hidden="true">
                  <use href="#icon-menu"></use>
                </svg>
              </button>
            </div>
            <a class="header__logo" title="Інтернет-магазин Rozetka.ua - №1" href="">
              <picture>
                <source media="(min-width: 1280px)" srcset="https://content.rozetka.com.ua/widget_logotype/full/original/298337767.svg">
                <source media="(min-width: 240px)" srcset="https://content1.rozetka.com.ua/widget_logotype/light/original/298337769.svg">
                <img alt="Rozetka Logo" loading="lazy" src="https://content.rozetka.com.ua/widget_logotype/full/original/298337767.svg">
              </picture>
            </a>
            <div class="header-catalog">
              <button id="fat-menu" data-id="categories" class="button button--medium button--with-icon menu__toggle" aria-label="Каталог" @click="onCategories">
                <svg data-id="categories">
                  <use href="#icon-catalog"></use>
                </svg>
                Каталог
              </button>
              <div>
                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                <div class="menu-wrapper menu-wrapper_state_animated" :style="{ display: isCategories ? 'block' : 'none' }">
                  <ul class="menu-categories">
                    <li class="menu-categories__item"
                        v-for="parentCategory in categories" :key="parentCategory.id"
                        :class="hoveredCategory === parentCategory.id ? 'menu-categories__item_state_hovered' : undefined"
                    >
                      <a class="menu-categories__link js-menu-categories__link" href="" @mouseover="hoveredCategory = parentCategory.id"
                         :class="hoveredCategory === parentCategory.id ? 'menu-categories__link_state_hovered' : undefined"
                      >
                        <span class="menu-categories__icon">
                          <svg width="24" height="24">
                            <use href="#icon-fat-2416"></use>
                          </svg>
                        </span>
                        <span>{{ parentCategory.title }}</span>
                        <svg width="16" height="16" aria-hidden="true"
                             class="menu-categories__link-chevron">
                          <use href="#icon-chevron-down"></use>
                        </svg>
                      </a>
                      <categories-list :key="parentCategory.id" v-if="isCategories && hoveredCategory === parentCategory.id" :categories-width="categoriesWidth" :parent-category="parentCategory" @close-categories="onCategories" />
                    </li>
                  </ul>
                </div>
                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor"
                     aria-hidden="true"></div>
              </div>
            </div>
            <div class="header-search">
              <form action="" class="search-form ng-untouched ng-pristine ng-valid">
                <div class="search-form__inner">
                  <div class="search-form__input-wrapper">
                    <button type="button" class="search-form__back" aria-label="Отменить поиск">
                      <svg width="16" height="16">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-down"></use>
                      </svg>
                    </button>
                    <input type="text" autocomplete="off" name="search"
                           class="search-form__input ng-untouched ng-pristine ng-valid" placeholder="Я шукаю...">
                    <button type="button" class="search-form__clear" aria-label="Очистити пошук" style="display: none;">
                      <svg width="16" height="16">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-close-modal"></use>
                      </svg>
                    </button>
                    <button type="button" class="search-form__microphone" aria-label="Голосовой поиск">
                      <svg width="14" height="19">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-microphone"></use>
                      </svg>
                    </button>
                  </div>
                </div>
                <button class="button button_color_green button_size_medium search-form__submit">Знайти
                </button>
              </form>
            </div>
            <ul class="header-actions">
              <li class="header-actions__item header-actions__item--language">
                <div class="header-actions__component">
                  <ul class="lang lang-header">
                    <li class="lang__item lang-header__item">
                      <a class="lang__link" href="https://rozetka.com.ua/">RU</a>
                    </li>
                    <li class="lang__item lang-header__item lang-header__item_state_active">
                      <span class="lang__link lang__link--active">
                        <img alt="ua" src="https://xl-static.rozetka.com.ua/assets/icons/flag-ua.svg">
                        UA
                      </span>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="header-actions__item header-actions__item--help">
                <a href="https://savelife.in.ua/donate/" target="_blank" class="help-zsu header-actions__component">
                  <span class="visible-hidden">Повернись живим</span>
                  <img alt="Повернись живим" src="https://xl-static.rozetka.com.ua/assets/img/design/logos/war_banner.svg">
                </a>
              </li>
              <li class="header-actions__item header-actions__item--user">
                <div class="header-actions__component">
                  <a class="header__button" href="https://rozetka.com.ua/ua/cabinet/orders/">
                    <svg aria-hidden="true">
                      <use href="#icon-orders"></use>
                    </svg>
                  </a>
                </div>
              </li>
              <li class="header-actions__item header-actions__item--bonuses">
                <div class="header-actions__component"></div>
              </li>
              <li
                class="header-actions__item header-actions__item--comparison">
                <div class="header-actions__component"></div>
              </li>
              <li class="header-actions__item header-actions__item--wishlist">
                <div class="header-actions__component">
                  <a class="header__button" href="">
                    <svg aria-hidden="true">
                      <use href="#icon-heart-empty"></use>
                    </svg>
                    <div>
                      <span class="counter counter--gray"> 2</span>
                    </div>
                  </a>
                </div>
              </li>
              <li class="header-actions__item header-actions__item--cart">
                <div class="header-actions__component">
                  <button type="button" class="header__button header__button--active">
                    <svg aria-hidden="true">
                      <use href="#icon-header-basket"></use>
                    </svg>
                    <div>
                      <span class="counter counter--green">1</span>
                    </div>
                  </button>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </header>
      <mobile-categories v-if="isMobileCategories" :is-active="isMobileCategories" @close-categories="onCategories" />
    </div>
  </div>
</template>

<script>
import HamburgerMenu from "./mobile-navigation/HamburgerMenu.vue";
import MobileCategories from "./mobile-navigation/Categories.vue";
import CategoriesList from "./CategoriesList.vue";

export default {
  name: "HeaderComponent",
  components: { CategoriesList, MobileCategories, HamburgerMenu },
  data: () => ({
    categories: [],
    categoriesWidth: 1520,
    hoveredCategory: 1,
    isBaseHover: true,
    isCategories: false,
    isMobileCategories: false,
    isHamburgerMenu: false
  }),
  mounted() {
    this.getCategories();
    this.onResize();
    this.$nextTick(() => {
      window.addEventListener("resize", this.onResize);
    });
  },
  beforeDestroy() {
    window.removeEventListener("resize", this.onResize);
  },
  methods: {
    async getCategories() {
      await this.$axios.get("/api/categories").then(({ data }) => {
        this.categories = data.data;
      }).catch(error => {
        console.log(error);
      });
    },
    onResize() {
      window.innerWidth <= 1584 ? this.categoriesWidth = window.innerWidth - 64 : undefined;
    },
    onCategories(value) {
      if (typeof value === 'boolean') {
        this.isHamburgerMenu = false;
        window.innerWidth < 1024 ? this.isMobileCategories = value : this.isCategories = value;
      } else {
        console.log("onCategories");
        this.hoveredCategory = 1;
        this.isCategories = !this.isCategories;
      }
    },
    onHamburgerMenu() {
      this.isHamburgerMenu = !this.isHamburgerMenu;
    }
  }
};
</script>

<style scoped>

</style>