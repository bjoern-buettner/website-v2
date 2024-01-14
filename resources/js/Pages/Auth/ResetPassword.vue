<!-- eslint-disable max-len -->
<template>
    <section>
        <div class="flex flex-col items-center justify-center px-6 py-16 mx-auto">
            <div class="w-full bg-white rounded-lg shadow lg:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 lg:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 lg:text-2xl">
                        {{ $t('reset_password.headline') }}
                    </h1>
                    <div v-if="showPasswordDoesNotMatchError" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <div class="ms-3 text-sm font-medium">
                            {{ $t('reset_password.passwordsDoNotMatch') }}
                        </div>
                    </div>
                    <div v-if="showPasswordMinimumLengthError" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <div class="ms-3 text-sm font-medium">
                            {{ $t('reset_password.passwordNotHasMinimumLength') }}
                        </div>
                    </div>
                    <div v-if="flashError" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50" role="alert">
                        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                        </svg>
                        <div class="ms-3 text-sm font-medium">
                            {{ flashError }}
                        </div>
                    </div>
                    <form @submit.prevent="resetPassword" class="space-y-4 lg:space-y-6">
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                                {{ $t('reset_password.newPassword') }}
                            </label>
                            <input v-model="resetPasswordForm.password"
                                   type="password"
                                   name="password"
                                   id="password"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                                   placeholder="••••••••"
                                   required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                                {{ $t('reset_password.newPasswordConfirm') }}
                            </label>
                            <input v-model="resetPasswordForm.password_confirmation"
                                   type="password"
                                   name="passwordConfirm"
                                   id="passwordConfirm"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5"
                                   placeholder="••••••••"
                                   required="">
                        </div>
                        <button type="submit"
                                class="w-full text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            {{ $t('reset_password.change_password') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import {useForm, usePage} from '@inertiajs/vue3';
import {computed, ref} from 'vue';

const page = usePage();

const resetPasswordForm = useForm({
  password: '',
  password_confirmation: '',
  token: page.props.token,
  email: page.props.email,
});

const showPasswordDoesNotMatchError = ref(false);
const showPasswordMinimumLengthError = ref(false);
const flashError = computed(() => page.props.flash.error);

const resetPassword = function() {
  showPasswordMinimumLengthError.value = false;
  showPasswordDoesNotMatchError.value = false;

  if (resetPasswordForm.password.length < 8) {
    showPasswordMinimumLengthError.value = true;
    return;
  }

  if (resetPasswordForm.password !== resetPasswordForm.password_confirmation) {
    showPasswordDoesNotMatchError.value = true;
    return;
  }

  resetPasswordForm.post(route('password.reset.submit'));
};
</script>
