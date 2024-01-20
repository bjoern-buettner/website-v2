<!-- eslint-disable max-len -->
<template>
    <Link :href="props.href"
          :method="method"
          class="link"
          :as="as"
    >
        {{ props.text }}
    </Link>
</template>

<script setup>

import {Link} from '@inertiajs/vue3';

const props = defineProps(['text', 'href', 'method', 'as']);
</script>
