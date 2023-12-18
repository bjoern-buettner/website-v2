<template>
    <!-- eslint-disable max-len -->
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Willkommen bei uns!
            </h1>
            <p class="mb-4 text-sm font-normal text-gray-500 lg:text-base sm:px-16 lg:px-48 dark:text-gray-400">
                Wir sind ein kleines Unternehmen, welches sich auf hochwertige Dienstleistungen im Webbereich
                spezialisiert hat. Neben verschiedenen Hostingleistungen bieten wir ebenfalls Softwareentwicklung,
                Administrationssupport, Performanceoptimierung, technische Suchmaschienenoptimierung(SEO) und
                Beratungsleistungen an.
            </p>
            <p class="mb-4 text-sm font-normal text-gray-500 lg:text-base sm:px-16 lg:px-48 dark:text-gray-400">
                Wir glauben daran ein zentraler Partner zu sein. Entweder haben wir bereits Spezialisten für Sie im
                Team, oder wir kümmern uns darum neue Spezialisten für Sie zu finden. Alles mit dem Ziel, dass Sie das
                bestmögliche Ergebnis erhalten.
            </p>
            <p class="mb-4 text-sm font-normal text-gray-500 lg:text-base sm:px-16 lg:px-48 dark:text-gray-400">
                Wir bemühen uns immer um faire Preise und glückliche Kunden, denn glückliche Kunden werben für
                uns - nicht nur, weil es dafür einen kleinen Bonus gibt.
            </p>
            <p class="mb-4 text-sm font-normal text-gray-500 lg:text-base sm:px-16 lg:px-48 dark:text-gray-400">
                Unsere detaillierte Abrechnung erfolgt über PayPal jeweils zu Anfang eines Monats, Sie haben also kein
                Risiko, dass wir Ihr Geld einfach einbehalten.
            </p>
            <p class="mb-4 text-sm font-normal text-gray-500 lg:text-base sm:px-16 lg:px-48 dark:text-gray-400">
                Haben Sie Fragen? Schicken Sie uns gerne eine Mail an service@bjoern-buettner.me, wir werden uns
                schnellstmöglich zurückmelden.
            </p>
            <p class="mb-4 text-sm font-normal text-gray-500 lg:text-base sm:px-16 lg:px-48 dark:text-gray-400">
                Wir freuen uns jetzt schon Ihre Probleme in Ihre Chancen zu verwandeln!
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <!-- @todo: Weiterleitung Leistungen -->
                <Link href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300">
                    Starten Sie jetzt
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
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
  name: 'IndexComponent',
};
</script>
