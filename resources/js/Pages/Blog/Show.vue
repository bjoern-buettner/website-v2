<template>
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <h1>{{props.blog.heading_en}}</h1>
            <p>{{props.blog.content_en}}</p>
            <p>{{props.blog.tags}}</p>
        </div>
    </section>
</template>

<script setup>
const props = defineProps(['blog']);
</script>

<script>
export default {
  name: 'BlogShow',
};
</script>
