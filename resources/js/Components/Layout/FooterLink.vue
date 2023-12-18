<template>
    <!-- eslint-disable max-len -->
    <Link :href="props.href"
          class="hover:underline hover:text-green-500 active:text-green-500 active:underline me-4 md:me-6"
    >
        {{ props.text }}
    </Link>
</template>

<script setup>

import {Link} from '@inertiajs/vue3';

const props = defineProps(['text', 'href']);
</script>
