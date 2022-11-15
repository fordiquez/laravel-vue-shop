<template>
  <div class="cdk-overlay-container" v-if="isActive">
    <div class="cdk-overlay-backdrop cdk-overlay-backdrop-showing"></div>
    <div class="cdk-global-overlay-wrapper" dir="ltr">
      <div id="cdk-overlay-8" ref="hamburgerMenu" class="cdk-overlay-pane" style="width: 320px; position: static;">
        <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
        <nav class="drawer">
          <div class="side-menu drawer-content drawer-content_state_visible">
            <div class="side-menu__header">
              <a class="side-menu__logo" href="">
                <img alt="" aria-hidden="true" loading="lazy" src="https://content2.rozetka.com.ua/widget_logotype/full/original/298270224.svg">
              </a>
              <button type="button" data-testid="side-menu-close" class="side-menu__close" aria-label="Закрити меню" @click="onClose">
                <svg aria-hidden="true">
                  <use href="#icon-close-modal"></use>
                </svg>
              </button>
            </div>
            <div class="side-menu__body" style="overflow: visible;">
              <div class="side-menu__auth">
                <a class="side-menu__auth-wrap side-menu__auth-wrap--link" href="">
                  <div class="side-menu__avatar"> Р</div>
                  <div class="side-menu__auth-content">
                    <span class="side-menu__user-name"> Руслан Цяпко </span>
                    <p class="side-menu__auth-caption">ruslan.tsiapko@gmail.com</p>
                  </div>
                </a>
              </div>
              <a href="" target="_blank" class="side-help">
                <img alt="Повернись живим" class="side-help__herb" src="https://xl-static.rozetka.com.ua/assets/img/design/logos/war_icon.svg">
                ПОВЕРНИСЬ ЖИВИМ
                <svg aria-hidden="true" class="side-help__chevron">
                  <use href="#icon-chevron-down"></use>
                </svg>
              </a>
              <ul class="side-menu__list side-menu__list--top">
                <li class="side-menu__item">
                  <button type="button" id="fat-menu" @click="onCategories" class="button button--large side-menu__button">
                    <span class="side-menu__button-icon">
                      <svg aria-hidden="true">
                        <use href="#icon-catalog"></use>
                      </svg>
                    </span>
                    Каталог товарів
                  </button>
                </li>
                <li class="side-menu__item">
                  <a class="button button--large side-menu__button" href="">
                    <span class="side-menu__button-icon">
                      <svg aria-hidden="true">
                        <use href="#icon-simple-orders"></use>
                      </svg>
                    </span>
                    Мої замовлення</a>
                </li>
                <li class="side-menu__item">
                  <button type="button" class="button button--large side-menu__button">
                    <span class="side-menu__button-icon">
                      <svg aria-hidden="true">
                        <use href="#icon-basket"></use>
                      </svg>
                    </span>
                    Кошик
                    <span class="side-menu__counter side-menu__counter--green">1</span>
                  </button>
                </li>
              </ul>
              <ul>
                <li class="side-menu__item">
                  <a class="button button--large side-menu__button" href="">
                    <span class="side-menu__button-icon">
                      <svg aria-hidden="true">
                        <use href="#icon-simple-heart"></use>
                      </svg>
                    </span>
                    Списки бажань
                    <span class="side-menu__counter side-menu__counter--green"> 3 </span>
                  </a>
                </li>
                <li class="side-menu__item">
                  <a class="button button--large side-menu__button" href="">
                    <span class="side-menu__button-icon">
                      <svg aria-hidden="true">
                        <use href="#icon-checkin"></use>
                      </svg>
                    </span>
                  Забрати замовлення</a>
                </li>
                <li
                  class="side-menu__item side-menu__item--bordered-bottom">
                  <div class="side-menu__switch">
                    <p class="side-menu__switch-label">Мова</p>
                    <div>
                      <ul class="lang">
                        <li class="lang__item __item">
                          <a class="lang__link" href="">RU</a>
                        </li>
                        <li class="lang__item __item __item_state_active">
                          <span class="lang__link lang__link--active">
                            <img alt="ua" src="https://xl-static.rozetka.com.ua/assets/icons/flag-ua.svg">
                            UA
                          </span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="side-menu__switch">
                    <p class="side-menu__switch-label">Місто</p>
                    <div class="side-menu__city-toggle">
                      <button type="button" class="city-toggle button button--small button--white">
                        <span class="city-toggle__text">Одеса</span>
                        <svg aria-hidden="true">
                          <use href="#icon-chevron-down"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="side-menu__item">
                <button type="button" class="button button--large side-menu__button">
                  <span class="side-menu__button-icon side-menu__button-icon--white">
                    <svg aria-hidden="true">
                      <use href="#icon-chevron-down"></use>
                    </svg>
                  </span>
                  Розкрити
                </button>
              </div>
              <ul>
                <li class="side-menu__item side-menu__item--bordered-bottom">
                  <a class="button button--large side-menu__button" href="">
                    <span class="side-menu__button-icon">
                      <svg aria-hidden="true">
                        <use href="#icon-question-empty"></use>
                      </svg>
                    </span>
                    Довідковий центр
                  </a>
                  <a class="button button--large side-menu__button" href="">
                    <span class="side-menu__button-icon">
                      <svg aria-hidden="true">
                        <use href="#icon-telegram"></use>
                      </svg>
                    </span>
                    Зв'язатися з нами
                  </a>
                </li>
                <li class="side-menu__item">
                  <div>
                    <div class="side-links">
                      <div class="side-links__item side-links__item--heading">
                        <h3 class="side-links__label">Інформація про компанію</h3>
                      </div>
                      <ul class="side-links__list ng-trigger ng-trigger-rzToggleAnimation">
                        <li class="side-links__item">
                          <a href="">Про нас</a>
                        </li>
                        <li class="side-links__item">
                          <a href="">Умови використання сайту</a>
                        </li>
                        <li class="side-links__item">
                          <a href=""> Контакти </a>
                        </li>
                        <li class="side-links__item">
                          <a href="">Black Friday 2022</a>
                        </li>
                        </ul>
                    </div>
                    <div class="side-links">
                      <div class="side-links__item side-links__item--heading">
                        <h3 class="side-links__label">Допомога</h3>
                      </div>
                      <ul class="side-links__list ng-trigger">
                        <li class="side-links__item">
                          <a href="">Доставка та оплата</a>
                        </li>
                        <li class="side-links__item">
                          <a href="">Кредит</a>
                        </li>
                        <li class="side-links__item">
                          <a href="">Гарантія</a>
                        </li>
                        <li class="side-links__item">
                          <a href="">Повернення товару</a>
                        </li>
                        <li class="side-links__item">
                          <a href="">Сервісні центри</a>
                        </li>
                      </ul>
                    </div>
                    <div class="side-links">
                      <div class="side-links__item side-links__item--heading">
                        <h3 class="side-links__label">Сервіси</h3>
                        <button type="button" class="button button--icon button--medium button--white side-links__toggle">
                          <svg aria-hidden="true">
                            <use href="#icon-chevron-down"></use>
                          </svg>
                        </button>
                      </div>
                    </div>
                    <div class="side-links">
                      <div class="side-links__item side-links__item--heading">
                        <h3 class="side-links__label">Партнерам</h3>
                        <button type="button" class="button button--icon button--medium button--white side-links__toggle">
                          <svg aria-hidden="true">
                            <use href="#icon-chevron-down"></use>
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="side-menu__item side-menu__item--bordered-bottom">
                  <div>
                    <div class="side-stores">
                      <h3 class="side-stores__heading">Завантажуйте наші додатки</h3>
                      <ul class="side-stores__buttons">
                        <li class="side-stores__item">
                          <a target="_blank" class="side-stores__button" href="" aria-label="Додаток для Android">
                            <img loading="lazy" alt="Google Play" src="https://xl-static.rozetka.com.ua/assets/img/design/button-google-play-ua.svg">
                          </a>
                        </li>
                        <li class="side-stores__item">
                          <a target="_blank" class="side-stores__button" href="" aria-label="Додаток для iOS">
                            <img loading="lazy" alt="AppStore" src="https://xl-static.rozetka.com.ua/assets/img/design/button-appstore-ua.svg">
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="side-menu__item side-menu__item--bordered-bottom">
                  <div class="menu-social">
                    <h3 class="menu-social__heading">Ми в соціальних мережах</h3>
                    <div>
                      <ul class="socials__list">
                        <li class="socials__list-item">
                          <a target="_blank" class="socials__link socials__link--facebook" href="" title="Facebook" aria-label="Facebook">
                            <svg aria-hidden="true">
                              <use href="#icon-facebook"></use>
                            </svg>
                          </a>
                        </li>
                        <li class="socials__list-item">
                          <a target="_blank" class="socials__link socials__link--twitter" href="" title="Twitter" aria-label="Twitter">
                            <svg aria-hidden="true">
                              <use href="#icon-twitter"></use>
                            </svg>
                          </a>
                        </li>
                        <li class="socials__list-item">
                          <a target="_blank" class="socials__link socials__link--youtube" href="" title="YouTube" aria-label="YouTube">
                            <svg aria-hidden="true">
                              <use href="#icon-youtube"></use>
                            </svg>
                          </a>
                        </li>
                        <li class="socials__list-item">
                          <a target="_blank" class="socials__link socials__link--instagram" href="" title="Instagram" aria-label="Instagram">
                            <svg aria-hidden="true">
                              <use href="#icon-instagram"></use>
                            </svg>
                          </a>
                        </li>
                        <li class="socials__list-item">
                          <a target="_blank" class="socials__link socials__link--viber" href="" title="Viber" aria-label="Viber">
                            <svg aria-hidden="true">
                              <use href="#icon-viber"></use>
                            </svg>
                          </a>
                        </li>
                        <li class="socials__list-item">
                          <a target="_blank" class="socials__link socials__link--telegram" href="" title="Telegram" aria-label="Telegram">
                            <svg aria-hidden="true">
                              <use href="#icon-telegram"></use>
                            </svg>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </li>
                <li class="side-menu__item side-menu__item--bordered-bottom">
                  <button type="button" class="button button--large side-menu__button">Вийти з аккаунта</button>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
      </div>
    </div>
  </div>
</template>

<script>
import useClickOutside from "../../composables/useClickOutside";
import { ref } from "vue";

export default {
  name: "HamburgerMenu",
  props: {
    isActive: {
      type: Boolean,
      default: false
    }
  },
  setup(props, context) {
    const hamburgerMenu = ref(null)
    useClickOutside(hamburgerMenu, () => {
      context.emit('close-menu')
    })
    return {
      hamburgerMenu,
    }
  },
  methods: {
    onClose() {
      this.$emit("close-menu");
    },
    onCategories() {
      this.$emit("categories", true);
    },
  },
};
</script>

<style scoped>

</style>