<script setup>
import { Link } from '@inertiajs/vue3';
import VueMarkdown from 'vue-markdown-render'
import truncateMarkdown from 'markdown-truncate'
import DateFormatter from './DateFormatter.vue';
import { PencilIcon } from '@heroicons/vue/24/solid'


defineProps({
    post: Object
});
</script>

<template>
    <Link :href="'posts/' + post.slug">
        <div class="bg-pink-100 backdrop-blur shadow bg-opacity-25 py-4 px-8 mb-8 transition ease-in-out duration-50 hover:cursor-pointer hover:shadow-lg">
            <p class="uppercase text-xs font-bold text-cyan-600">{{ post.category }}</p>
            <div class="flex justify-between mb-4 items-center">
                <h3 class="text-lg leading-none font-black text-slate-900">
                    {{ post.title }}
                </h3>
                <div class="text-md italic mt-1 text-cyan-800 items-center">
                    <DateFormatter :date="post.published_at" />
                </div>
            </div>
            <p class="text-md leading-relaxed mb-4">
                <VueMarkdown :source="truncateMarkdown(post.content, {limit: 250, ellipsis: true})" class="prose max-w-none line-clamp-3" />
            </p>
        </div>
    </Link>
</template>
