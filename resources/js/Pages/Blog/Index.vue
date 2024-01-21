<template>
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
            <div v-for="blog in props.blogs" :key="blog.id">
                <h1>{{blog.heading_en}}</h1>
                <p>{{blog.content_en}}</p>
                <p>{{blog.tags}}</p>
            </div>
        </div>
    </section>
</template>

<script setup>
const props = defineProps(['blogs']);
</script>

<script>
export default {
  name: 'BlogIndex',
};
</script>
