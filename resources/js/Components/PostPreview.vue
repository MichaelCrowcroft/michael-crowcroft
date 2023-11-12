<script setup>
import { Link } from '@inertiajs/vue3';
import VueMarkdown from 'vue-markdown-render'
import truncateMarkdown from 'markdown-truncate'
import DateFormatter from './DateFormatter.vue';

defineProps({
    post: Object
});
</script>

<template>
    <Link :href="'posts/' + post.slug">
        <div class="bg-pink-100 backdrop-blur shadow bg-opacity-25 py-4 px-8 mb-8 transition ease-in-out duration-50 hover:cursor-pointer hover:shadow-lg">
            <p class="uppercase text-xs font-bold text-cyan-600">{{ post.category }}</p>
            <div class="flex justify-between mb-4 items-center">
                <h3 class="text-md leading-none font-black text-slate-900">
                    {{ post.title }}
                </h3>
                <div class="text-xs italic w-2/5 text-right text-cyan-800">
                    <DateFormatter :date="post.published_at" />
                </div>
            </div>
            <p class="text-xs leading-relaxed mb-4">
                <VueMarkdown :source="truncateMarkdown(post.content, {limit: 250, ellipsis: true})" class="prose prose-sm max-w-none" />
            </p>
        </div>
    </Link>
</template>
