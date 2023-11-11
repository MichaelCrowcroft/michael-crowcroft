<script setup>
import { Link } from '@inertiajs/vue3';
import VueMarkdown from 'vue-markdown-render'
import truncateMarkdown from 'markdown-truncate'

defineProps({
    post: Object
});
</script>

<template>
        <h3 class="text-lg leading-none">
            <Link :href="'posts/' + post.slug" class="font-black hover:underline text-cyan-600">
                {{ post.title }}
            </Link>
        </h3>
        <div class="text-md italic mt-1 mb-4 text-slate-600">
            {{ post.published_at }}
        </div>
        <p class="text-md leading-relaxed mb-4">
            <VueMarkdown :source="truncateMarkdown(post.content, {limit: 250, ellipsis: true})" class="prose max-w-none line-clamp-3" />
        </p>
</template>
