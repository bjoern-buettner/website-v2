<!-- eslint-disable max-len -->
<template>
    <section>
        <div class="flex flex-col items-center justify-center px-6 py-16 mx-auto">
            <div class="w-full bg-white rounded-lg shadow lg:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 lg:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 lg:text-2xl">
                        {{ $t('login.headline') }}
                    </h1>
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
                            <a href="#" class="text-sm font-medium text-green-500 hover:underline mt-5 lg:mt-0">
                                {{ $t('login.forgot_password') }}
                            </a>
                        </div>
                        <div v-if="loginForm.errors.generic"
                             class="w-full mt-5 text-red-600 text-sm">
                            {{loginForm.errors.generic}}
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
import {useForm} from '@inertiajs/vue3';

const loginForm = useForm(
    {
      email: null,
      password: null,
      remember_me: false,
    },
);

const login = () => loginForm.post(
    route('app.login.create'),
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
