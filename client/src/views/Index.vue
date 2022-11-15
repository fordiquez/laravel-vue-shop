<template>
  <div class="ng-star-inserted">
    <div class="layout layout_with_sidebar">
      <main class="content content_type_main">
        <div>
          <div class="top-wrap top-wrap--skeleton">
            <div class="top-wrap__slider top-wrap--skeleton">
              <div class="ng-star-inserted">
                <div class="simple-slider">
                  <button type="button" class="main-slider__control main-slider__control--prev">
                    <svg width="16" height="40" aria-hidden="true">
                      <use href="#icon-slider-right"></use>
                    </svg>
                  </button>
                  <div class="simple-slider__holder">
                    <ul class="simple-slider__list ng-star-inserted" style="transform: translate3d(-906px, 0px, 0px); transition-duration: 906ms;">
                      <li class="simple-slider__item ng-star-inserted" style="width: 906px;">
                        <section class="main-slider__slide main-slider_theme_light main-slider_big_image ng-star-inserted" style="background: rgb(255, 255, 255);">
                          <div class="main-slider__slide-inner">
                            <div class="main-slider__picture">
                              <picture class="main-slider__picture-wrap ng-star-inserted">
                                <source srcset="https://content2.rozetka.com.ua/banner_main/image_ua/original/298209038.jpg" media="(min-width: 421px)">
                                <img src="https://content1.rozetka.com.ua/banner_main/image_mobile_ua/original/298209032.jpg" alt="">
                              </picture>
                            </div>
                            <a class="main-slider__link ng-star-inserted"
                               href="https://rozetka.com.ua/ua/promo/rehearsalbf/" target="_self"></a>
                          </div>
                        </section>
                      </li>
                      <li class="simple-slider__item ng-star-inserted" style="width: 906px;">
                        <section class="main-slider__slide main-slider_theme_light main-slider_big_image ng-star-inserted" style="background: rgb(255, 255, 255);">
                          <div class="main-slider__slide-inner">
                            <div class="main-slider__picture">
                              <picture class="main-slider__picture-wrap ng-star-inserted"><img src="https://content.rozetka.com.ua/banner_main/image_ua/original/298367761.jpg" alt="" class="ng-star-inserted">
                              </picture>
                            </div>
                            <a class="main-slider__link ng-star-inserted" title="" href="https://rozetka.com.ua/ua/promo/black-friday/" target="_self">
                            </a>
                          </div>
                        </section>
                      </li>
                      <li class="simple-slider__item ng-star-inserted" style="width: 906px;">
                        <section class="main-slider__slide main-slider_theme_light main-slider_big_image ng-star-inserted" style="background: rgb(255, 255, 255);">
                          <div class="main-slider__slide-inner">
                            <div class="main-slider__picture">
                              <picture class="main-slider__picture-wrap ng-star-inserted">
                                <img src="https://content2.rozetka.com.ua/banner_main/image_ua/original/297983122.jpg" alt="" class="ng-star-inserted">
                              </picture>
                            </div>
                            <a class="main-slider__link ng-star-inserted" title="" href="https://rozetka.com.ua/ua/news-articles-promotions/promotions/201957_sale_samsa/" target="_self"></a>
                          </div>
                        </section>
                      </li>
                    </ul>
                    </div>
                  <button type="button" class="main-slider__control main-slider__control--next">
                    <svg width="16" height="40" aria-hidden="true">
                      <use href="#icon-slider-right"></use>
                    </svg>
                  </button>
                </div></div>
              <ul class="main-slider__pagination ng-star-inserted">
                <li class="main-slider__pagination-item"><a class="main-slider__pagination-link"
                                                            href="https://rozetka.com.ua/ua/news-articles-promotions/promotions/">
                  Всі акції <span class="main-slider__pagination-quantity">90</span></a></li>
              </ul>
            </div>
          </div>
          <div v-if="categories.length">
            <nav class="main-categories">
              <button type="button"
                      class="button button--green button--medium main-categories__toggle ng-star-inserted">
                <svg width="24" height="24">
                  <use href="#icon-catalog"></use>
                </svg>
                Каталог товарів
              </button>
              <h2 class="main-categories__heading ng-star-inserted">Каталог товарів</h2>
              <ul class="main-categories__list ng-star-inserted">
                <li class="main-categories__item ng-star-inserted" v-for="category in categories" :key="category.id">
                  <a role="button" class="main-categories__link ng-star-inserted">
                  <svg width="32" height="32" class="main-categories__icon">
                    <use href="#icon-fat-2416"></use>
                  </svg>
                  <span>{{ category.title }}</span>
                  <svg width="6" height="9" aria-hidden="true" class="main-categories__chevron">
                    <use href="#icon-fat-chevron"></use>
                  </svg>
                </a>
                </li>
              </ul>
            </nav>
          </div>
          <div>
            <section class="main-goods ng-star-inserted">
              <div class="ng-star-inserted">
                <h2 class="main-goods__heading ng-star-inserted">Останні переглянуті товари </h2>
                <ul class="main-goods__grid ng-star-inserted">
                  <li class="main-goods__cell ng-star-inserted" :data-goods-id="good.vendor_code" v-for="good in goods" :key="good.vendor_code">
                    <rz-app-tile>
                      <div class="tile">
                        <div class="tile__inner" :data-goods-id="good.vendor_code">
                          <a class="tile__picture" href="">
                            <img loading="lazy" alt="Миша Bloody J90s USB Black (4711421949040)" src="https://content.rozetka.com.ua/goods/images/preview/24689487.jpg">
                          </a>
                          <a class="tile__title" href="https://rozetka.com.ua/ua/bloody_4711421949040/p213510733/" title="Миша Bloody J90s USB Black (4711421949040)">
                            <span>{{ good.title }}</span>
                          </a>
                          <div class="tile__actions">
                            <div>
                              <button type="button" class="wish-button ng-star-inserted" aria-label="Видалити зі списку бажань">
                                <svg width="24" height="24" aria-hidden="true" class="ng-star-inserted">
                                  <use href="#icon-heart-filled"></use>
                                </svg>
                              </button>
                            </div>
                          </div>
                          <div class="tile__prices ng-star-inserted">
                            <div class="tile__price-old ng-star-inserted">{{ good.old_price }} ₴</div>
                            <div class="tile__price tile__price_color_red ng-star-inserted">
                              <span class="tile__price-value">{{ good.price }}</span>
                              <span class="tile__price-currency"> ₴</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </rz-app-tile>
                  </li>
                </ul>
                <button type="button" class="main-goods__show-more button_type_link ng-star-inserted">
                  Показати ще
                  <svg width="8" height="8">
                    <use href="#icon-arrow-down"></use>
                  </svg>
                </button>
              </div>
            </section>
          </div>
        </div>
      </main>
      <aside class="sidebar sidebar_type_main">
        <rz-main-page-sidebar>
          <div class="fat-wrap">
            <rz-sidebar-fat-menu class="fat-wrap">
              <div class="menu-wrapper menu-wrapper_state_static ng-star-inserted">
                <ul class="menu-categories menu-categories_type_main">
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://rozetka.com.ua/ua/computers-notebooks/c80253/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-2416"></use></svg></span>Ноутбуки та комп’ютери<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://rozetka.com.ua/ua/telefony-tv-i-ehlektronika/c4627949/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-3361"></use></svg></span>Смартфони, ТВ і електроніка<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://rozetka.com.ua/ua/game-zone/c80261/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-18421"></use></svg></span>Товари для геймерів<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://bt.rozetka.com.ua/ua/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-4306"></use></svg></span>Побутова техніка<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://rozetka.com.ua/ua/tovary-dlya-doma/c2394287/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-5300"></use></svg></span>Товари для дому<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://rozetka.com.ua/ua/instrumenty-i-avtotovary/c4627858/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-6700"></use></svg></span>Інструменти та автотовари<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://rozetka.com.ua/ua/santekhnika-i-remont/c4628418/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-7806"></use></svg></span>Сантехніка та ремонт<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://rozetka.com.ua/ua/dacha-sad-ogorod/c2394297/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-8261"></use></svg></span>Дача, сад і город<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://rozetka.com.ua/ua/sport-i-uvlecheniya/c4627893/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-9017"></use></svg></span>Спорт і захоплення<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://rozetka.com.ua/ua/shoes_clothes/c1162030/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-10515"></use></svg></span>Одяг, взуття та прикраси<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://rozetka.com.ua/ua/krasota-i-zdorovje/c4629305/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-12258"></use></svg></span>Краса та здоров’я<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://rozetka.com.ua/ua/kids/c88468/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-13224"></use></svg></span>Дитячі товари<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://rozetka.com.ua/ua/zootovary/c3520929/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-15954"></use></svg></span>Зоотовари<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://rozetka.com.ua/ua/office-school-books/c4625734/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-14127"></use></svg></span>Офіс, школа, книги<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://rozetka.com.ua/ua/alkoholnie-napitki-i-produkty/c4626923/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-14939"></use></svg></span>Алкогольні напої та продукти<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a class="menu-categories__link"
                                                                        href="https://rozetka.com.ua/ua/tovary-dlya-biznesa/c4627851/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-15422"></use></svg></span>Товари для бізнесу та послуги<!----></a></li>
                  <li class="menu-categories__item ng-star-inserted"><a
                                                                        class="menu-categories__link menu-categories__item_type_bordered"
                                                                        href="https://rozetka.com.ua/ua/promo/rehearsalbf/"><span
                    class="menu-categories__icon"><svg width="24" height="24" aria-hidden="true"><use
                    href="#icon-fat-17191"></use></svg></span>Репетиція ЧП до -50%<img loading="lazy" aria-hidden="true"
                                                                                       class="menu-categories__action-icon ng-star-inserted"
                                                                                       alt="Репетиція ЧП до -50%"
                                                                                       src="https://content1.rozetka.com.ua/fatmenu/section_icon/original/287602635.png">
                    <!----></a></li><!----></ul>
              </div><!----><!----></rz-sidebar-fat-menu>
          </div>
          <a class="button button--medium button--with-icon main-links__help ng-star-inserted"
             href="https://help.rozetka.com.ua/">
            <svg aria-hidden="true">
              <use href="#icon-question-empty"></use>
            </svg>
            Довідковий центр
          </a><!----><a class="button button--medium button--with-icon main-links__help ng-star-inserted"
                        href="https://t.me/Rozetka_helpBot?start=src=hc">
          <svg aria-hidden="true">
            <use href="#icon-telegram"></use>
          </svg>
          Зв'язатися з нами
        </a><!----><a class="button button--medium button--with-icon main-links__help ng-star-inserted"
                      href="retail/odesa/">
          <svg aria-hidden="true">
            <use href="#icon-delivery-shop"></use>
          </svg>
          Точки видачі Rozetka
        </a><!---->
          <div class="main-auth-wrap"><!---->
            <ul class="main-auth__links ng-star-inserted">
              <li><a class="main-auth-wrap main-auth-wrap--link"
                     href="https://rozetka.com.ua/ua/cabinet/personal-information">
                <div class="main-auth__avatar"> Р</div>
                <div class="main-auth-content"><span class="main-auth__user-name"> Руслан Цяпко </span>
                  <p class="main-auth__user-caption">ruslan.tsiapko@gmail.com</p></div>
              </a></li>
              <li class="main-auth__links-item ng-star-inserted"><a
                                                                    href="https://rozetka.com.ua/ua/cabinet/wishlist/"
                                                                    class="ng-star-inserted"> Списки бажань </a><!---->
                <!----></li>
              <li class="main-auth__links-item ng-star-inserted"><a href="https://rozetka.com.ua/ua/cart/"
                                                                    class="ng-star-inserted"> Кошик </a><!----><!---->
              </li>
              <li class="main-auth__links-item ng-star-inserted"><a
                                                                    href="https://rozetka.com.ua/ua/cabinet/orders/"
                                                                    class="ng-star-inserted"> Мої замовлення </a><!---->
                <!----></li>
              <li class="main-auth__links-item ng-star-inserted"><a
                                                                    href="https://rozetka.com.ua/ua/cabinet/reviews/"
                                                                    class="ng-star-inserted"> Мої відгуки </a><!---->
                <!----></li>
              <li class="main-auth__links-item ng-star-inserted"><a
                                                                    href="https://rozetka.com.ua/ua/cabinet/recently-viewed/"
                                                                    class="ng-star-inserted"> Переглянуті товари </a>
                <!----><!----></li>
              <li class="main-auth__links-item ng-star-inserted"><a
                                                                    href="https://rozetka.com.ua/ua/cabinet/subscribes/"
                                                                    class="ng-star-inserted"> Розсилки </a><!---->
                <!----></li>
              <li class="main-auth__links-item ng-star-inserted"><a
                                                                    href="https://rozetka.com.ua/ua/cabinet/promotions"
                                                                    class="ng-star-inserted"> Участь в акціях </a>
                <!----><!----></li>
              <li class="main-auth__links-item ng-star-inserted"><a
                                                                    href="https://rozetka.com.ua/ua/cabinet/market/message/"
                                                                    class="ng-star-inserted"> Моє листування </a><!---->
                <!----></li>
              <li class="main-auth__links-item ng-star-inserted"><a
                                                                    href="https://rozetka.com.ua/ua/cabinet/bonus/"
                                                                    class="ng-star-inserted"> Мій бонусний рахунок </a>
                <!----><!----></li>
              <li class="main-auth__links-item ng-star-inserted"><a
                                                                    href="https://rozetka.com.ua/ua/cabinet/premium/"
                                                                    class="ng-star-inserted"> Підписка Premium </a>
                <!----><!----></li>
              <li class="main-auth__links-item ng-star-inserted"><a
                                                                    href="https://rozetka.com.ua/ua/checkin/"
                                                                    class="ng-star-inserted"> Забрати замовлення </a>
                <!----><!----></li>
              <li class="main-auth__links-item ng-star-inserted"><a
                                                                    href="https://rozetka.com.ua/ua/comparison/"
                                                                    class="ng-star-inserted"> Порівняння </a><!---->
                <!----></li><!---->
              <li class="main-auth__links-item"><a> Вихід </a></li>
            </ul><!----><!----><!----><!----></div>
          <div class="main-stores ng-star-inserted"><h4 class="main-sidebar__heading">Встановлюйте наші додатки</h4><a
            target="_blank" class="main-stores__button" title="Приложение для Андроида"
            href="https://play.google.com/store/apps/details/?id=ua.com.rozetka.shop&amp;referrer=utm_source%3Dfullversion%26utm_medium%3Dsite%26utm_campaign%3Dfullversion"><img
            loading="lazy" alt="Google Play"
            src="https://xl-static.rozetka.com.ua/assets/img/design/button-google-play-ua.svg"></a><a target="_blank"
                                                                                                      class="main-stores__button"
                                                                                                      href="https://itunes.apple.com/app/apple-store/id740469631/?pt=3132803&amp;ct=fullversion&amp;at=1000l3MB&amp;mt=8"
                                                                                                      title="Приложение для Айфона"><img
            loading="lazy" alt="AppStore"
            src="https://xl-static.rozetka.com.ua/assets/img/design/button-appstore-ua.svg"></a></div><!---->
          <div class="main-sidebar__block main-socials ng-star-inserted"><h3 class="main-sidebar__heading">Ми в
            соціальних мережах</h3>
            <rz-social-icons _nghost-rz-client-c93="">
              <ul _ngcontent-rz-client-c93="" class="socials__list">
                <li _ngcontent-rz-client-c93="" class="socials__list-item ng-star-inserted"><a
                  _ngcontent-rz-client-c93="" rzclickgtm="" target="_blank"
                  class="socials__link socials__link--facebook" href="https://www.facebook.com/rozetka.ua"
                  title="Facebook" aria-label="Facebook">
                  <svg _ngcontent-rz-client-c93="" aria-hidden="true">
                    <use _ngcontent-rz-client-c93="" href="#icon-facebook"></use>
                  </svg>
                </a></li>
                <li _ngcontent-rz-client-c93="" class="socials__list-item ng-star-inserted"><a
                  _ngcontent-rz-client-c93="" rzclickgtm="" target="_blank" class="socials__link socials__link--twitter"
                  href="https://twitter.com/rozetka_ua" title="Twitter" aria-label="Twitter">
                  <svg _ngcontent-rz-client-c93="" aria-hidden="true">
                    <use _ngcontent-rz-client-c93="" href="#icon-twitter"></use>
                  </svg>
                </a></li>
                <li _ngcontent-rz-client-c93="" class="socials__list-item ng-star-inserted"><a
                  _ngcontent-rz-client-c93="" rzclickgtm="" target="_blank" class="socials__link socials__link--youtube"
                  href="http://bit.ly/RZTK_UA" title="YouTube" aria-label="YouTube">
                  <svg _ngcontent-rz-client-c93="" aria-hidden="true">
                    <use _ngcontent-rz-client-c93="" href="#icon-youtube"></use>
                  </svg>
                </a></li>
                <li _ngcontent-rz-client-c93="" class="socials__list-item ng-star-inserted"><a
                  _ngcontent-rz-client-c93="" rzclickgtm="" target="_blank"
                  class="socials__link socials__link--instagram" href="https://instagram.com/rozetkaua"
                  title="Instagram" aria-label="Instagram">
                  <svg _ngcontent-rz-client-c93="" aria-hidden="true">
                    <use _ngcontent-rz-client-c93="" href="#icon-instagram"></use>
                  </svg>
                </a></li>
                <li _ngcontent-rz-client-c93="" class="socials__list-item ng-star-inserted"><a
                  _ngcontent-rz-client-c93="" rzclickgtm="" target="_blank" class="socials__link socials__link--viber"
                  href="https://invite.viber.com/?g2=AQB9mwM%2F5f%2FxJUlMxP4V9flr2%2BvXTC1MpxdGFZ0P6d%2Fs6Ws%2FFe%2FQtLiZwA4E28sj"
                  title="Viber" aria-label="Viber">
                  <svg _ngcontent-rz-client-c93="" aria-hidden="true">
                    <use _ngcontent-rz-client-c93="" href="#icon-viber"></use>
                  </svg>
                </a></li>
                <li _ngcontent-rz-client-c93="" class="socials__list-item ng-star-inserted"><a
                  _ngcontent-rz-client-c93="" rzclickgtm="" target="_blank"
                  class="socials__link socials__link--telegram" href="https://t.me/rrozetka" title="Telegram"
                  aria-label="Telegram">
                  <svg _ngcontent-rz-client-c93="" aria-hidden="true">
                    <use _ngcontent-rz-client-c93="" href="#icon-telegram"></use>
                  </svg>
                </a></li><!----></ul>
            </rz-social-icons>
          </div><!----><!---->
          <div class="main-sidebar__block main-links">
            <rz-service-links cssclass="side" _nghost-rz-client-c91="" class="ng-tns-c91-3 ng-star-inserted">
              <div _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links ng-star-inserted">
                <div _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item side-links__item--heading"><h3
                  _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__label">Інформація про компанію</h3><!---->
                </div>
                <ul _ngcontent-rz-client-c91=""
                    class="ng-tns-c91-3 side-links__list ng-trigger ng-trigger-rzToggleAnimation ng-animate-disabled ng-star-inserted">
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://rozetka.com.ua/ua/pages/about/"> Про нас </a></li><!----><!---->
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://rozetka.com.ua/ua/pages/legal_terms/"> Умови використання сайту </a></li><!---->
                  <!---->
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://rozetka.com.ua/ua/contacts/"> Контакти </a></li><!----><!---->
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://rozetka.com.ua/ua/promo/black-friday/"> Black Friday 2022 </a></li><!----><!---->
                  <!----></ul><!----></div>
              <div _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links ng-star-inserted">
                <div _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item side-links__item--heading"><h3
                  _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__label">Допомога</h3><!----></div>
                <ul _ngcontent-rz-client-c91=""
                    class="ng-tns-c91-3 side-links__list ng-trigger ng-trigger-rzToggleAnimation ng-animate-disabled ng-star-inserted">
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://help.rozetka.com.ua/p/97-dostavka/"> Доставка та оплата </a></li><!----><!---->
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://rozetka.com.ua/ua/pages/credit/"> Кредит </a></li><!----><!---->
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://help.rozetka.com.ua/p/111-harantiya-i-povernennya-tovaru/"> Гарантія </a></li><!---->
                  <!---->
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://help.rozetka.com.ua/p/102-povernennya-tovaru/"> Повернення товару </a></li><!---->
                  <!---->
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://rozetka.com.ua/ua/service-centers/"> Сервісні центри </a></li><!----><!----><!---->
                </ul><!----></div>
              <div _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links ng-star-inserted">
                <div _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item side-links__item--heading"><h3
                  _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__label">Сервіси</h3><!----></div>
                <ul _ngcontent-rz-client-c91=""
                    class="ng-tns-c91-3 side-links__list ng-trigger ng-trigger-rzToggleAnimation ng-animate-disabled ng-star-inserted">
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://rozetka.com.ua/ua/pages/loyalty/"> Бонусний рахунок </a></li><!----><!---->
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://rozetka.com.ua/ua/premium/"> Rozetka Premium </a></li><!----><!---->
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://rozetka.com.ua/ua/pages/certificates/"> Подарункові сертифікати </a></li><!---->
                  <!---->
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://rozetka.com.ua/ua/pages/obmin/"> Rozetka Обмін </a></li><!----><!---->
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://rozetka.travel/ua/"> Тури та відпочинок </a></li><!----><!----><!----></ul><!---->
              </div>
              <div _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links ng-star-inserted">
                <div _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item side-links__item--heading"><h3
                  _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__label">Партнерам</h3><!----></div>
                <ul _ngcontent-rz-client-c91=""
                    class="ng-tns-c91-3 side-links__list ng-trigger ng-trigger-rzToggleAnimation ng-animate-disabled ng-star-inserted">
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://seller.rozetka.com.ua/newseller/"> Продавати на Розетці </a></li><!----><!---->
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://rozetka.com.ua/ua/pages/partnership/"> Співпраця з нами </a></li><!----><!---->
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://rozetka.com.ua/ua/pages/franchise/"> Франчайзинг </a></li><!----><!---->
                  <li _ngcontent-rz-client-c91="" class="ng-tns-c91-3 side-links__item ng-star-inserted" style=""><a
                    _ngcontent-rz-client-c91="" rzclickgtm="" class="ng-tns-c91-3"
                    href="https://rozetka.com.ua/ua/news-articles-promotions/promotions/store_search/"> Оренда
                    приміщень </a></li><!----><!----><!----></ul><!----></div><!----><!----><!----></rz-service-links>
          </div>
          <div class="main-sidebar__block main-copyright">
            <rz-payments-btns class="main-payments ng-star-inserted" _nghost-rz-client-c111="">
              <ul _ngcontent-rz-client-c111="" class="payments-buttons">
                <li _ngcontent-rz-client-c111="" class="payments-buttons__item ng-star-inserted">
                  <button _ngcontent-rz-client-c111="" type="button" class="payments-buttons__button"
                          title="MasterCard Secure"><img _ngcontent-rz-client-c111="" loading="lazy"
                                                         alt="MasterCard Secure"
                                                         src="https://xl-static.rozetka.com.ua/assets/img/design/mastercard-logo.svg">
                  </button>
                </li>
                <li _ngcontent-rz-client-c111="" class="payments-buttons__item ng-star-inserted">
                  <button _ngcontent-rz-client-c111="" type="button" class="payments-buttons__button"
                          title="Visa Verified"><img _ngcontent-rz-client-c111="" loading="lazy"
                                                     alt="Visa Verified"
                                                     src="https://xl-static.rozetka.com.ua/assets/img/design/visa-logo.svg">
                  </button>
                </li><!----></ul>
            </rz-payments-btns><!----><p class="main-copyright_color_gray"> ТМ використовується на підставі ліцензії
            правовласника RozetkaLTD. </p>
            <p> ©&nbsp;Інтернет-магазин «Розетка™» <br> 2001–2022 </p></div>
        </rz-main-page-sidebar>
      </aside>
    </div>
  </div>
</template>

<script>
export default {
  name: "HomeView",
  data: () => ({
    goods: [],
    categories: []
  }),
  mounted() {
    this.getCategories()
    this.getGoods()
  },
  methods: {
    async getCategories() {
      await this.$axios.get("/api/categories").then(({ data }) => {
        this.categories = data.data;
      }).catch(error => {
        console.log(error);
      });
    },
    async getGoods() {
      await this.$axios.get("/api/goods").then(({ data }) => {
        this.goods = data.data;
      }).catch(error => {
        console.log(error);
      });
    }
  }
};
</script>

<style scoped>

</style>