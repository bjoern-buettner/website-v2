<!-- eslint-disable max-len -->
<template>
    <section>
        <div class="flex flex-col items-center justify-center px-6 py-16 mx-auto">
            <div class="w-full bg-white rounded-lg shadow lg:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 lg:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 lg:text-2xl">
                        {{ $t('login.headline') }}
                    </h1>
                    <div v-if="loginForm.errors.generic" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <div class="ms-3 text-sm font-medium">
                            {{ loginForm.errors.generic }}
                        </div>
                    </div>
                    <div v-if="flash" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <div class="ms-3 text-sm font-medium">
                            {{ flash }}
                        </div>
                    </div>
                    <form @submit.prevent="login" class="space-y-4 lg:space-y-6">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                                {{ $t('login.email') }}
                            </label>
                            <input v-model="loginForm.email"
                                   type="email"
                                   name="email"
                                   id="email"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                                   :placeholder="$t('login.email_placeholder')"
                                   required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                                {{ $t('login.password') }}
                            </label>
                            <input v-model="loginForm.password"
                                   type="password"
                                   name="password"
                                   id="password"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                                   placeholder="••••••••"
                                   required="">
                        </div>
                        <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input v-model="loginForm.remember_me"
                                           id="remember"
                                           aria-describedby="remember"
                                           type="checkbox"
                                           class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-green-500 text-green-500">
                                </div>
                                <div class="ml-2 text-sm">
                                    <label for="remember" class="text-gray-500">
                                        {{ $t('login.remember_me') }}
                                    </label>
                                </div>
                            </div>
                            <Link :href="route('password.request')" class="text-sm font-medium text-green-500 hover:underline mt-5 lg:mt-0">
                                {{ $t('login.forgot_password') }}
                            </Link>
                        </div>
                        <button type="submit"
                                class="w-full text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            {{ $t('login.sign_in') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import {useForm, usePage, Link} from '@inertiajs/vue3';
import {computed} from 'vue';
const page = usePage();
const flash = computed(() => page.props.flash.success);
const loginForm = useForm(
    {
      email: null,
      password: null,
      remember_me: false,
    },
);

const login = () => loginForm.post(
    route('app.auth.login'),
    {
      preserveScroll: true,
      preserveState: true,
    },
);
</script>

<script>
export default {
  name: 'LoginCreate',
};
</script>
