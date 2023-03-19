<script setup>
import { Link } from '@inertiajs/vue3';
import DateFormatter from '@/Components/DateFormatter.vue';

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
        <div class="text-md italic mb-4 text-gray-600">
            <DateFormatter :date="post.published_at" />
        </div>
        <p class="text-md leading-relaxed mb-4">{{ post.excerpt }}</p>
    </div>
</template>
