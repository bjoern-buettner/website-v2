<template>
    <div class="w-full min-h-screen">
        <MainHeader/>
        <div class="w-full">
            <div class="max-w-screen-xl mx-auto">
                <main class="px-4">
                    <slot></slot>
                </main>
            </div>
        </div>
        <MainFooter/>
    </div>
</template>

<script setup>
import MainFooter from '../Components/Layout/MainFooter.vue';
import MainHeader from '../Components/Layout/MainHeader.vue';
</script>
