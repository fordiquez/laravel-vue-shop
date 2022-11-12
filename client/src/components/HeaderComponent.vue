<template>
  <div class="app-header ng-star-inserted">
    <div class="app-header-wrapper header--thin ng-star-inserted">
      <div class="preloader" hidden=""></div>
      <header class="header">
        <div class="layout">
          <div class="header-layout">
            <div class="header-menu ng-tns-c94-1 ng-star-inserted">
              <button type="button" class="header__button ng-tns-c94-1" aria-label="Відкрити меню">
                <svg aria-hidden="true" class="ng-tns-c94-1">
                  <use href="#icon-menu" class="ng-tns-c94-1"></use>
                </svg>
              </button>
              <div class="ng-tns-c94-1"></div>
            </div>
            <a class="header__logo" title="Інтернет-магазин Rozetka.ua - №1" href="https://rozetka.com.ua/ua/">
              <picture class="ng-star-inserted">
                <source media="(min-width: 1280px)" srcset="https://content2.rozetka.com.ua/widget_logotype/full/original/298270224.svg">
                <source media="(min-width: 240px)" srcset="https://content1.rozetka.com.ua/widget_logotype/light/original/298270226.svg">
                <img alt="Rozetka Logo" loading="lazy" src="./index_files/298270224.svg"></picture>
            </a>
            <div class="header-catalog">
              <button id="fat-menu" class="button button--medium button--with-icon menu__toggle ng-star-inserted" aria-label="Каталог">
                <svg>
                  <use href="#icon-catalog"></use>
                </svg>
                Каталог
              </button>
              <div class="ng-star-inserted">
                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" aria-hidden="true"></div>
                <div class="menu-wrapper menu-wrapper_state_animated" style="display: none;">
                  <ul class="menu-categories ng-star-inserted">
                    <li class="menu-categories__item menu-categories__item_state_hovered ng-star-inserted">
                      <a class="menu-categories__link js-menu-categories__link menu-categories__link_state_hovered" href="https://rozetka.com.ua/ua/computers-notebooks/c80253/" target="">
                        <span class="menu-categories__icon">
                          <svg width="24" height="24">
                            <use href="#icon-fat-2416"></use>
                          </svg>
                        </span>
                        Ноутбуки та комп’ютери
                        <svg width="16" height="16" aria-hidden="true" class="menu-categories__link-chevron ng-star-inserted">
                          <use href="#icon-chevron-down"></use>
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
                <div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor"
                     aria-hidden="true"></div>
              </div>
            </div>
            <div class="header-search js-app-search-suggest">
              <form action="https://rozetka.com.ua/ua/" class="search-form ng-untouched ng-pristine ng-valid">
                <div class="search-form__inner">
                  <div class="search-form__input-wrapper">
                    <button type="button" class="search-form__back" aria-label="Отменить поиск">
                      <svg width="16" height="16">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-arrow-down"></use>
                      </svg>
                    </button>
                    <input type="text" autocomplete="off" name="search" class="search-form__input ng-untouched ng-pristine ng-valid" placeholder="Я шукаю...">
                    <button type="button" class="search-form__clear" aria-label="Очистити пошук" style="display: none;">
                      <svg width="16" height="16">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-close-modal"></use>
                      </svg>
                    </button>
                    <button type="button" class="search-form__microphone ng-star-inserted" aria-label="Голосовой поиск">
                      <svg width="14" height="19">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-microphone"></use>
                      </svg>
                    </button>
                  </div>
                </div>
                <button class="button button_color_green button_size_medium search-form__submit ng-star-inserted">Знайти
                </button>
              </form>
            </div>
            <ul class="header-actions">
              <li class="header-actions__item header-actions__item--language">
                <div class="header-actions__component">
                  <ul class="lang lang-header ng-star-inserted">
                    <li class="lang__item lang-header__item ng-star-inserted">
                      <a class="lang__link ng-star-inserted" href="https://rozetka.com.ua/">RU</a>
                    </li>
                    <li class="lang__item lang-header__item lang-header__item_state_active ng-star-inserted">
                      <span class="lang__link lang__link--active ng-star-inserted">
                        <img alt="ua" src="./index_files/flag-ua.svg" class="ng-star-inserted">
                      </span>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="header-actions__item header-actions__item--help ng-star-inserted">
                <a href="https://savelife.in.ua/donate/" target="_blank" class="help-zsu header-actions__component">
                  <span class="visible-hidden">Повернись живим</span>
                  <img alt="Повернись живим" src="./index_files/war_banner.svg">
                </a>
              </li>
              <li class="header-actions__item header-actions__item--user">
                <div class="header-actions__component">
                  <a class="header__button ng-star-inserted" href="https://rozetka.com.ua/ua/cabinet/orders/">
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
                  <a class="header__button ng-star-inserted" href="https://rozetka.com.ua/ua/cabinet/wishlist/">
                    <svg aria-hidden="true">
                      <use href="#icon-heart-empty"></use>
                    </svg>
                    <div>
                      <span class="counter counter--gray ng-star-inserted"> 2</span>
                    </div>
                  </a>
                </div>
              </li>
              <li class="header-actions__item header-actions__item--cart">
                <div class="header-actions__component">
                  <button type="button" class="header__button ng-star-inserted header__button--active">
                    <svg aria-hidden="true">
                      <use href="#icon-header-basket"></use>
                    </svg>
                    <div>
                      <span class="counter counter--green ng-star-inserted"> 1 </span>
                    </div>
                  </button>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </header>
    </div></div>
</template>

<script>
export default {
  name: "HeaderComponent"
};
</script>

<style scoped>

</style>