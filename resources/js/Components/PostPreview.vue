<script setup>
import { Link } from '@inertiajs/vue3';
import VueMarkdown from 'vue-markdown-render'
import truncateMarkdown from 'markdown-truncate'

defineProps({
    post: Object
});
</script>

<template>
    <Link :href="'posts/' + post.slug">
        <div class="bg-slate-100 backdrop-blur-xl shadow bg-opacity-25 py-4 px-8 mb-8 transition ease-in-out duration-75 hover:cursor-pointer hover:shadow-lg">
            <h3 class="text-lg leading-none font-black text-cyan-700">
                    {{ post.title }}
            </h3>
            <div class="text-md italic mt-1 mb-4 text-slate-600">
                {{ post.published_at }}
            </div>
            <p class="text-md leading-relaxed mb-4">
                <VueMarkdown :source="truncateMarkdown(post.content, {limit: 250, ellipsis: true})" class="prose max-w-none line-clamp-3" />
            </p>
        </div>
    </Link>
</template>
