<!-- eslint-disable max-len -->
<template>
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                {{ $t('home.headline') }}
            </h1>
            <p class="mb-4 text-sm font-normal text-gray-500 lg:text-base sm:px-16 lg:px-48 dark:text-gray-400">
                {{ $t('home.paragraph_1') }}
            </p>
            <p class="mb-4 text-sm font-normal text-gray-500 lg:text-base sm:px-16 lg:px-48 dark:text-gray-400">
                {{ $t('home.paragraph_2') }}
            </p>
            <p class="mb-4 text-sm font-normal text-gray-500 lg:text-base sm:px-16 lg:px-48 dark:text-gray-400">
                {{ $t('home.paragraph_3') }}
            </p>
            <p class="mb-4 text-sm font-normal text-gray-500 lg:text-base sm:px-16 lg:px-48 dark:text-gray-400">
                {{ $t('home.paragraph_4') }}
            </p>
            <p class="mb-4 text-sm font-normal text-gray-500 lg:text-base sm:px-16 lg:px-48 dark:text-gray-400">
                {{ $t('home.paragraph_5') }}
            </p>
            <p class="mb-4 text-sm font-normal text-gray-500 lg:text-base sm:px-16 lg:px-48 dark:text-gray-400">
                {{ $t('home.paragraph_6') }}
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <!-- @todo: Weiterleitung Leistungen -->
                <Link href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300">
                    Starten Sie jetzt
                    <svg class="w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </Link>
                <!-- @todo: Weiterleitung "Genutzte Lösungen" -->
                <Link href="#"
                      class="inline-flex justify-center items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                    Erfahren Sie mehr
                </Link>
            </div>
        </div>
    </section>
</template>

<script setup>
import {Link} from '@inertiajs/vue3';
</script>

<script>
export default {
  name: 'HomeIndex',
};
</script>
