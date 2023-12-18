<template>
    <!-- eslint-disable max-len -->
    <div class="w-full sticky top-[100vh] border-t-8 border-green-500">
        <footer class="bg-white">
            <div class="max-w-screen-xl mx-auto p-4 md:py-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <Link :href="route('app.home')" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                        <img src="/public/resources/assets/img/logo.png" alt="Bjoern-Buettner.me Logo">
                    </Link>
                    <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0">
                        <li>
                            <FooterLink href="#" text="Über uns"/>
                        </li>
                        <li>
                            <FooterLink href="#" text="Kundensupport"/>
                        </li>
                        <li>
                            <FooterLink href="#" text="Impressum"/>
                        </li>
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto" />
                <span class="block text-sm text-gray-500 sm:text-center">
                    © 2023
                    <Link :href="route('app.home')"
                          class="hover:underline hover:text-green-500 active:text-green-500">Bjoern-Buettner.me</Link> - Alle Rechte vorbehalten.
                </span>
            </div>
        </footer>
    </div>
</template>

<script setup>
import {Link} from '@inertiajs/vue3';
import FooterLink from './FooterLink.vue';
</script>
