<!-- eslint-disable max-len -->
<template>
    <Link :href="props.href"
          :method="method"
          class="hover:underline hover:text-green-500 active:text-green-500 active:underline me-4 md:me-6"
          :as="as"
    >
        {{ props.text }}
    </Link>
</template>

<script setup>

import {Link} from '@inertiajs/vue3';

const props = defineProps(['text', 'href', 'method', 'as']);
</script>
