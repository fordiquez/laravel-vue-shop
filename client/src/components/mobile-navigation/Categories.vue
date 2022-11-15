<template>
  <div v-if="isActive" class="ng-star-inserted modal__wrapper">
    <div role="button" class="modal__background modal__background_show_animation"></div>
    <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
    <div class="modal__holder modal__holder_show_animation modal__holder--large">
      <div class="modal__header">
        <h3 class="modal__heading">Ноутбуки та комп’ютери</h3>
        <button type="button" class="modal__close" aria-label="Закрити модальне вікно" @click="onClose">
          <svg pointer-events="none">
            <use href="#icon-close-modal"></use>
          </svg>
        </button>
      </div>
      <div class="modal__content">
        <div class="ng-star-inserted">
          <ul class="menu-main ng-star-inserted">
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Ноутбуки та комп’ютери">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-2416"></use>
                </svg>
                <span class="menu-main__link-title">Ноутбуки та комп’ютери</span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Смартфони, ТВ і електроніка">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-3361"></use>
                </svg>
                <span class="menu-main__link-title"> Смартфони, ТВ і електроніка </span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Товари для геймерів">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-18421"></use>
                </svg>
                <span class="menu-main__link-title"> Товари для геймерів </span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Побутова техніка">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-4306"></use>
                </svg>
                <span class="menu-main__link-title"> Побутова техніка </span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Товари для дому">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-5300"></use>
                </svg>
                <span class="menu-main__link-title"> Товари для дому </span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Інструменти та автотовари">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-6700"></use>
                </svg>
                <span class="menu-main__link-title"> Інструменти та автотовари </span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Сантехніка та ремонт">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-7806"></use>
                </svg>
                <span class="menu-main__link-title"> Сантехніка та ремонт </span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Дача, сад і город">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-8261"></use>
                </svg>
                <span class="menu-main__link-title"> Дача, сад і город </span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Спорт і захоплення">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-9017"></use>
                </svg>
                <span class="menu-main__link-title"> Спорт і захоплення </span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Одяг, взуття та прикраси">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-10515"></use>
                </svg>
                <span class="menu-main__link-title"> Одяг, взуття та прикраси </span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Краса та здоров’я">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-12258"></use>
                </svg>
                <span class="menu-main__link-title"> Краса та здоров’я </span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Дитячі товари">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-13224"></use>
                </svg>
                <span class="menu-main__link-title"> Дитячі товари </span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Зоотовари">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-15954"></use>
                </svg>
                <span class="menu-main__link-title"> Зоотовари </span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Офіс, школа, книги">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-14127"></use>
                </svg>
                <span class="menu-main__link-title"> Офіс, школа, книги </span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Алкогольні напої та продукти">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-14939"></use>
                </svg>
                <span class="menu-main__link-title"> Алкогольні напої та продукти </span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <button class="menu-main__link button--medium button--link ng-star-inserted" aria-label="Товари для бізнесу та послуги">
                <svg aria-hidden="true" class="menu-main__icon">
                  <use href="#icon-fat-15422"></use>
                </svg>
                <span class="menu-main__link-title"> Товари для бізнесу та послуги </span>
                <svg aria-hidden="true" class="menu-main__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </button>
            </li>
            <li class="menu-main__item ng-star-inserted">
              <a class="menu-main__link button--medium button--link ng-star-inserted" href="https://rozetka.com.ua/ua/promo/11_11sale/" target="">
              <svg aria-hidden="true" class="menu-main__icon">
                <use href="#icon-fat-17191"></use>
              </svg>
                День шопінгу до -60%
                <img loading="lazy" class="menu-main__picture" src="https://content1.rozetka.com.ua/fatmenu/section_mobile_icon/original/287602634.png" alt="День шопінгу до -60%"></a></li></ul>
          </div>
      </div>
    </div>
    <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
  </div>
</template>

<script>
export default {
  name: "MobileCategories",
  props: {
    isActive: {
      type: Boolean,
      default: false
    }
  },
  methods: {
    onClose() {
      this.$emit('close-categories')
    }
  }
};
</script>

<style scoped>

</style>