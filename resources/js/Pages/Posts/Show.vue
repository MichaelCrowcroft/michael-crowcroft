<script setup>
import Layout from '@/Layouts/Layout.vue';
import Container from '@/Components/Container.vue';
import Header from '@/Components/Header.vue';
import { Head, Link } from '@inertiajs/vue3';
import VueMarkdown from 'vue-markdown-render'
import DateFormatter from '@/Components/DateFormatter.vue';

defineProps({
    post: Object,
});
</script>

<template>
    <Head>
        <title>{{ post.title }} | Michael</title>
        <link rel="canonical" :href="'https://www.michaelcrowcroft.com/posts/' + post.slug" />
    </Head>

    <Layout>
        <Container>
            <Header />
                <article class="mb-32 mx-auto max-w-4xl">
                    <p class="uppercase text-md font-bold text-cyan-600 text-center">{{ post.category }}</p>
                    <h1 class="text-4xl font-bold text-slate-800 text-center leading-tight">
                        {{ post.title }}
                    </h1>
                    <div class="mb-6 text-md italic text-cyan-800 text-center">
                        <DateFormatter :date="post.published_at" />
                    </div>
                    <div class="max-w-2xl mx-auto">
                        <VueMarkdown :source="post.content" class="prose max-w-none" />
                    </div>
                </article>
        </Container>
    </Layout>
</template>