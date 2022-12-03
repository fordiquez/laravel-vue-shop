<template>
  <TransitionRoot as="template" :show="cart">
    <Dialog as="div" class="relative z-10" @close="$emit('close-cart')">
      <TransitionChild as="template" enter="ease-out duration-300" enter-from="opacity-0" enter-to="opacity-100"
                       leave="ease-in duration-200" leave-from="opacity-100" leave-to="opacity-0">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"/>
      </TransitionChild>

      <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
          <TransitionChild as="template" enter="ease-out duration-300"
                           enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                           enter-to="opacity-100 translate-y-0 sm:scale-100" leave="ease-in duration-200"
                           leave-from="opacity-100 translate-y-0 sm:scale-100"
                           leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
            <DialogPanel
                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
              <div class="modal__holder modal__holder_show_animation modal__holder--large">
                <div class="modal__header">
                  <h3 class="modal__heading">Кошик</h3>
                  <button type="button" class="modal__close" aria-label="Закрити модальне вікно">
                    <svg pointer-events="none">
                      <use href="#icon-close-modal"></use>
                    </svg>
                  </button>
                </div>
                <div class="modal__content">
                  <div class="ng-star-inserted">
                    <div class="cart cart-se ng-star-inserted">
                      <div class="cart-header ng-star-inserted">
                        <div class="cart-header__remove">
                          <div>
                            <button type="button" class="button button--white button--small popup-menu__toggle popup-menu__toggle--confirm" id="" aria-expanded="false" aria-label="" aria-controls="" aria-haspopup="true">
                              <span class="button button--medium button--link ng-star-inserted"> Видалити все </span>
                            </button>
                          </div>
                        </div>
                      </div>
                      <ul class="cart-list ng-star-inserted">
                        <li class="cart-list__item ng-star-inserted">
                          <div>
                            <div class="cart-product ng-star-inserted" style="opacity: 1;">
                              <div class="cart-product__body">
                                <span data-testid="picture-discount" class="promo-label promo-label_size_small promo-label_type_action cart-product__label ng-star-inserted"> −20% </span>
                                <a data-testid="picture-link" class="cart-product__picture" href="https://rozetka.com.ua/marvo_kg901/p204508459/"><img
                                    data-testid="picture" loading="lazy"
                                    alt="Клавіатура дротова Marvo KG901 Multi-LED Mechanical RED Switch UKR (KG901)"
                                    src="https://content1.rozetka.com.ua/goods/images/medium/23670732.jpg"></a>
                                <div class="cart-product__main">
                                  <a data-testid="title" class="cart-product__title" href="https://rozetka.com.ua/marvo_kg901/p204508459/" title="Клавіатура дротова Marvo KG901 Multi-LED Mechanical RED Switch UKR (KG901)">
                                    Клавіатура дротова Marvo KG901 Multi-LED Mechanical RED Switch UKR (KG901)
                                  </a>
                                </div>
                                <div>
                                  <button type="button"
                                          class="button button--white button--small popup-menu__toggle popup-menu__toggle--context"
                                          id="cartProductActions0" aria-expanded="false" aria-label=""
                                          aria-controls="cartProductActions0" aria-haspopup="true">
                                    <svg width="24" height="24" aria-hidden="true"
                                         pointer-events="none" class="ng-star-inserted">
                                      <use href="#icon-vertical-dots"></use>
                                    </svg></button>
                                </div>
                              </div>
                              <div class="cart-product__footer">
                                <div class="cart-product__counter ng-star-inserted">
                                  <div class="cart-counter">
                                    <button data-testid="cart-counter-decrement-button" type="button"
                                            class="button button_color_white button_size_medium cart-counter__button" disabled=""
                                            aria-label="Видалити один товар">
                                      <svg width="24" height="24" aria-hidden="true"
                                           pointer-events="none">
                                        <use pointer-events="none"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-minus"></use>
                                      </svg>
                                    </button>
                                    <input data-testid="cart-counter-input"
                                           class="cart-counter__input ng-untouched ng-pristine ng-valid">
                                    <button data-testid="cart-counter-increment-button" type="button"
                                            class="button button_color_white button_size_medium cart-counter__button"
                                            aria-label="Додати ще один товар">
                                      <svg width="24" height="24" aria-hidden="true"
                                           pointer-events="none">
                                        <use pointer-events="none"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-plus"></use>
                                      </svg>
                                    </button>
                                  </div>
                                </div>
                                <div class="cart-product__coast ng-star-inserted">
                                  <p
                                      data-testid="old-cost"
                                      class="cart-product__old-price ng-star-inserted">999&nbsp;₴
                                  </p>
                                  <p
                                      data-testid="cost"
                                      class="cart-product__price cart-product__price--red">799&nbsp;<small>₴</small>
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="cart-list__item ng-star-inserted">
                          <div>
                            <div class="cart-product ng-star-inserted" style="opacity: 1;">
                              <div class="cart-product__body"><span
                                  data-testid="picture-discount"
                                  class="promo-label promo-label_size_small promo-label_type_action cart-product__label ng-star-inserted"> −26% </span>
                                <a data-testid="picture-link"
                                   class="cart-product__picture"
                                   href="https://rozetka.com.ua/curaprox_7612412422429_03/p96486610/"><img
                                    data-testid="picture" loading="lazy"
                                    alt="Набір зубних щіток Curaprox CS 5460 Ultra Soft ультрам'яка Салатова + Синя + Фіолетова 3 шт. (CS5460/3-03)"
                                    src="https://content1.rozetka.com.ua/goods/images/medium/15137965.jpg"></a>
                                <div class="cart-product__main"><a
                                    data-testid="title"
                                    class="cart-product__title"
                                    href="https://rozetka.com.ua/curaprox_7612412422429_03/p96486610/"
                                    title="Набір зубних щіток Curaprox CS 5460 Ultra Soft ультрам'яка Салатова + Синя + Фіолетова 3 шт. (CS5460/3-03)">Набір
                                  зубних щіток Curaprox CS 5460 Ultra Soft ультрам'яка Салатова + Синя + Фіолетова 3 шт.
                                  (CS5460/3-03)</a></div>
                                <div>
                                  <button type="button"
                                          class="button button--white button--small popup-menu__toggle popup-menu__toggle--context"
                                          id="cartProductActions1" aria-expanded="false" aria-label=""
                                          aria-controls="cartProductActions1" aria-haspopup="true">
                                    <svg width="24" height="24" aria-hidden="true"
                                         pointer-events="none" class="ng-star-inserted">
                                      <use href="#icon-vertical-dots"></use>
                                    </svg></button></div>
                              </div>
                              <div class="cart-product__footer">
                                <div class="cart-product__counter ng-star-inserted">
                                  <div class="cart-counter">
                                    <button data-testid="cart-counter-decrement-button" type="button"
                                            class="button button_color_white button_size_medium cart-counter__button" disabled=""
                                            aria-label="Видалити один товар">
                                      <svg width="24" height="24" aria-hidden="true"
                                           pointer-events="none">
                                        <use pointer-events="none"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-minus"></use>
                                      </svg>
                                    </button>
                                    <input data-testid="cart-counter-input"
                                           class="cart-counter__input ng-untouched ng-pristine ng-valid">
                                    <button data-testid="cart-counter-increment-button" type="button"
                                            class="button button_color_white button_size_medium cart-counter__button"
                                            aria-label="Додати ще один товар">
                                      <svg width="24" height="24" aria-hidden="true"
                                           pointer-events="none">
                                        <use pointer-events="none"
                                             xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-plus"></use>
                                      </svg>
                                    </button>
                                  </div>
                                </div>
                                <div class="cart-product__coast ng-star-inserted"><p
                                    data-testid="old-cost"
                                    class="cart-product__old-price ng-star-inserted">900&nbsp;₴</p><p
                                    data-testid="cost"
                                    class="cart-product__price cart-product__price--red">666&nbsp;<small>₴</small></p></div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="cart-footer ng-star-inserted">
                        <button data-testid="continue-shopping-link"
                                class="button button_size_medium button_color_gray cart-footer__continue ng-star-inserted"
                                style="visibility: visible;"> Продовжити покупки
                        </button>
                        <div class="cart-receipt ng-star-inserted">
                          <div data-testid="cart-receipt-sum" class="cart-receipt__sum"><p class="cart-receipt__sum-label">Разом</p>
                            <div class="cart-receipt__sum-price"><span>1465</span>&nbsp;<span class="cart-receipt__sum-currency">₴</span>
                            </div>
                          </div>
                          <a data-testid="cart-receipt-submit-order" class="button button_size_large button_color_green cart-receipt__submit ng-star-inserted" href="https://rozetka.com.ua/ua/checkout/"> Оформити замовлення </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="button"
                        class="inline-flex w-full justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm"
                        @click="$emit('close-cart')">Deactivate
                </button>
                <button type="button"
                        class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm"
                        @click="$emit('close-cart')" ref="cancelButtonRef">Cancel
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
import { Dialog, DialogPanel, DialogTitle, TransitionChild, TransitionRoot } from '@headlessui/vue'
import { ExclamationTriangleIcon } from '@heroicons/vue/24/outline'

defineProps(['cart']);
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

.modal__background_show_animation {
  animation-duration: 0.2s;
  animation-timing-function: ease;
  animation-delay: 0s;
  animation-iteration-count: 1;
  animation-direction: normal;
  animation-fill-mode: none;
  animation-play-state: running;
}

.modal__background {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #00000080;
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
}

.modal__holder_show_animation {
  animation-duration: 0.2s;
  animation-timing-function: ease;
  animation-delay: 0s;
  animation-iteration-count: 1;
  animation-direction: normal;
  animation-fill-mode: none;
  animation-play-state: running;
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

.modal__content {
  max-height: 100%;
  padding: 16px;
  box-sizing: border-box;
  overflow-y: auto;
}

.cart-header {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: flex-end;
  margin-bottom: 16px;
}

.cart-header__remove {
  position: relative;
}

.cart-list__item:first-child {
  margin-top: 0;
  padding-top: 0;
  border: none;
}

.cart-list__item {
  margin-top: 24px;
  padding-top: 24px;
  border-top: 1px solid #e9e9e9;
}

.cart-product__body {
  position: relative;
  display: flex;
  flex-direction: row;
}

.cart-product__label {
  position: absolute;
  left: 0;
  top: 0;
}

.promo-label_type_action {
  background-color: #f84147;
}

.promo-label_size_small {
  font-size: 8px;
  height: 16px;
  line-height: 16px;
  padding-left: 8px;
  padding-right: 8px;
}

.promo-label {
  border-radius: 50px;
  color: #fff;
  display: inline-block;
  font-family: Rozetka, BlinkMacSystemFont, -apple-system, Arial, Segoe UI, Roboto, Helvetica, sans-serif;
  font-weight: 700;
  text-transform: uppercase;
}

.cart-product__picture {
  display: flex;
  flex-direction: row;
  flex-shrink: 0;
  align-items: center;
  justify-content: center;
  width: 96px;
  height: 96px;
  margin-right: 16px;
}

.cart-product__picture img {
  max-width: 100%;
  max-height: 100%;
}

.cart-product__main {
  flex-grow: 1;
}

.cart-product__title {
  display: block;
  margin-bottom: 8px;
  font-size: 14px;
  color: #221f1f;
}

.popup-menu__toggle {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  padding: 0;
}

.popup-menu__toggle--confirm {
  width: auto;
}


button svg {
  transition-duration: .2s;
  transition-property: fill;
  transition-timing-function: ease-in-out;
}

.popup-menu__toggle svg {
  fill: #3e77aa;
}

.popup-menu__list {
  position: absolute;
  z-index: 5;
  right: 0;
  top: 0;
  width: 250px;
  padding: 8px 16px;
  border-radius: 4px;
  background-color: #fff;
  box-shadow: 0 2px 4px #00000040;
}

.cart-product__footer {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: space-between;
  padding-top: 16px;
  padding-bottom: 16px;
}

.cart-counter {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
}

.cart-counter__button:disabled {
  background-color: initial;
}

.cart-counter__button {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  width: 40px;
  padding: 0;
}

.cart-counter__input {
  width: 56px;
  margin-left: 4px;
  margin-right: 4px;
  text-align: center;
}

.cart-product__coast {
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: right;
  margin-left: auto;
}

.cart-product__old-price {
  font-size: 14px;
  line-height: 1;
  text-decoration: line-through;
  color: #a6a5a5;
}

.cart-product__price--red {
  color: #f84147;
}

.cart-product__price {
  font-size: 20px;
  white-space: nowrap;
}

.cart-receipt {
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;
  padding: 16px;
  background-color: #00a0461a;
  border: 1px solid #00a046;
  border-radius: 4px;
}

.cart-receipt__sum {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  width: 100%;
  margin-bottom: 16px;
}

.cart-receipt__sum-label {
  font-size: 20px;
}

.cart-receipt__sum-price {
  margin-left: auto;
  font-size: 20px;
}

.cart-receipt__sum-currency {
  font-size: 16px;
}

.cart-receipt__submit {
  width: 100%;
}

.button_color_green {
  background-color: #00a046;
  color: #fff;
}

.button_size_large {
  font-size: 18px;
  height: 48px;
  line-height: 48px;
}

.button {
  border: none;
  border-radius: 4px;
  box-sizing: border-box;
  display: inline-block;
  font-family: BlinkMacSystemFont, -apple-system, Arial, Segoe UI, Roboto, Helvetica, sans-serif;
  margin: 0;
  outline: none;
  padding-left: 16px;
  padding-right: 16px;
  position: relative;
  text-align: center;
  transition-duration: .2s;
  transition-property: color, background-color, border-color;
  transition-timing-function: ease-in-out;
}

.cart-footer__continue {
  display: none;
}

.cart-footer {
  position: sticky;
  bottom: -16px;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: center;
  padding-top: 16px;
  padding-bottom: 16px;
  background-color: #fff;
}

@media (min-width: 768px) {
  .modal {
    max-height: 100vh;
    padding: 24px;
  }

  .modal__holder--large {
    max-width: 960px;
  }

  .modal__holder {
    height: auto;
    max-height: 100%;
    margin: 0 auto;
    border-radius: 8px;
    box-shadow: 0 8px 40px #00000052;
  }

  .modal__header {
    padding-left: 24px;
    padding-right: 24px;
  }

  .modal__content {
    padding: 24px;
  }

  .cart-list {
    margin-bottom: 24px;
  }

  .cart-product__footer {
    justify-content: flex-end;
    padding-top: 0;
    padding-bottom: 0;
    padding-left: 112px;
    box-sizing: border-box;
  }

  .cart-product__coast {
    width: 28%;
    margin-left: 0;
  }

  .cart-services {
    padding-left: 112px;
  }

  .cart-services__toggle {
    width: auto;
    margin-top: -40px;
  }

  .cart-footer {
    bottom: -24px;
  }

  .cart-receipt {
    flex-direction: row;
    width: auto;
    margin-left: auto;
    padding: 24px;
  }

  .cart-receipt__sum {
    width: auto;
    margin-right: 24px;
    margin-bottom: 0;
  }

  .cart-receipt__sum-label {
    display: none;
  }

  .cart-receipt__sum-price {
    font-size: 36px;
  }

  .cart-receipt__sum-currency {
    font-size: 20px;
  }

  .cart-footer__continue {
    display: block;
  }
}
</style>