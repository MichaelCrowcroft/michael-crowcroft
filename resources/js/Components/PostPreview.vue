<script setup>
import { Link } from '@inertiajs/vue3';
import VueMarkdown from 'vue-markdown-render'

defineProps({
    post: Object
});
</script>

<template>
    <div class="px-2">
        <h3 class="text-2xl font-serif leading-none">
            <Link :href="'posts/' + post.slug" class="font-black hover:underline text-teal-800">
                {{ post.title }}
            </Link>
        </h3>
        <div class="text-md italic mt-1 mb-4 text-gray-600">
            {{ post.published_at }}
        </div>
        <p class="text-md leading-relaxed mb-4">
            <VueMarkdown :source="post.content" :options="options" class="prose max-w-none line-clamp-3" />
        </p>
    </div>
</template>
