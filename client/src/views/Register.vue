<template>
  <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-md space-y-8">
      <div>
        <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
             alt="Your Company"/>
        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign Up a new account</h2>
        <p class="mt-2 text-center text-sm text-gray-600">
          Or {{ ' ' }}
          <router-link :to="{ name: 'Login' }" class="font-medium text-indigo-600 hover:text-indigo-500">
            login to an existing account using the sign in form
          </router-link>
        </p>
      </div>
      <form class="mt-8 space-y-6" @submit.prevent="authStore.register(form)">
        <input type="hidden" name="remember" value="true"/>
        <div class="-space-y-px rounded-md shadow-sm">
          <div>
            <label for="first-name" class="sr-only">First Name</label>
            <input v-model="form.firstName" id="first-name" name="first_name" type="text"
                   class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                   placeholder="First Name"/>
            <div v-if="authStore.errors.first_name" class="flex py-1">
              <span class="text-red-400 text-sm">{{ authStore.errors.first_name[0] }}</span>
            </div>
          </div>
          <div>
            <label for="last-name" class="sr-only">Last Name</label>
            <input v-model="form.lastName" id="last-name" name="last_name" type="text"
                   class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                   placeholder="Last Name"/>
            <div v-if="authStore.errors.last_name" class="flex py-1">
              <span class="text-red-400 text-sm">{{ authStore.errors.last_name[0] }}</span>
            </div>
          </div>
          <div>
            <label for="birthday-date" class="sr-only">Birthday Date</label>
            <input v-model="form.birthdayDate" id="birthday-date" name="birthday_date" type="date"
                   autocomplete="current-password"
                   class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                   placeholder="Password confirmation" />
            <div v-if="authStore.errors.birthday_date" class="flex py-1">
              <span class="text-red-400 text-sm">{{ authStore.errors.birthday_date[0] }}</span>
            </div>
          </div>
          <div>
            <div class="flex justify-center py-3">
              <div class="form-check">
                <input v-model="form.gender" type="radio" name="gender" id="male" value="male"
                       class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                <label class="form-check-label inline-block text-gray-800" for="male">Male</label>
              </div>
              <div class="form-check ml-2">
                <input v-model="form.gender" type="radio" name="gender" id="female" value="female"
                       class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                <label class="form-check-label inline-block text-gray-800" for="female">Female</label>
              </div>
            </div>
            <div v-if="authStore.errors.gender" class="flex py-1">
              <span class="text-red-400 text-sm">{{ authStore.errors.gender[0] }}</span>
            </div>
          </div>
          <div>
            <label for="email-address" class="sr-only">Email address</label>
            <input v-model="form.email" id="email-address" name="email" type="email" autocomplete="email"
                   class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                   placeholder="Email address"/>
            <div v-if="authStore.errors.email" class="flex py-1">
              <span class="text-red-400 text-sm">{{ authStore.errors.email[0] }}</span>
            </div>
          </div>
          <div>
            <label for="password" class="sr-only">Password</label>
            <input v-model="form.password" id="password" name="password" type="password" autocomplete="current-password"
                   class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                   placeholder="Password"/>
            <div v-if="authStore.errors.password" class="flex py-1">
              <span class="text-red-400 text-sm">{{ authStore.errors.password[0] }}</span>
            </div>
          </div>
          <div>
            <label for="password-confirmation" class="sr-only">Password Confirmation</label>
            <input v-model="form.passwordConfirm" id="password-confirmation" name="password_confirmation"
                   type="password"
                   autocomplete="current-password"
                   class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                   placeholder="Password confirmation"/>
          </div>
        </div>

        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember-me" name="remember-me" type="checkbox"
                   class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
          </div>

          <div class="text-sm">
            <router-link :to="{ name: 'Login' }" class="font-medium text-indigo-600 hover:text-indigo-500">Already have an account?</router-link>
          </div>
        </div>

        <div>
          <button type="submit"
                  class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
              <LockClosedIcon class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" aria-hidden="true"/>
            </span>
            Sign Up
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { LockClosedIcon } from '@heroicons/vue/20/solid'
import { defineComponent, reactive } from 'vue';
import { useAuthStore } from '@/stores/auth';

defineComponent({
  name: 'Register'
})

const authStore = useAuthStore()

const form = reactive({
  firstName: '',
  lastName: '',
  birthdayDate: '',
  gender: '',
  email: '',
  password: '',
  passwordConfirm: ''
})
</script>