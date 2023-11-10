<script setup>
import Layout from '@/Layouts/Layout.vue';
import Container from '@/Components/Container.vue';
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';
import { Head, Link } from '@inertiajs/vue3';
import VueMarkdown from 'vue-markdown-render'

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
                    <h1 class="text-5xl font-serif font-bold text-gray-800 text-center leading-tight">
                        {{ post.title }}
                    </h1>
                    <div class="mb-6 text-lg italic text-gray-600 text-center">
                        {{ post.published_at }}
                    </div>
                    <div class="max-w-2xl mx-auto">
                        <VueMarkdown :source="post.content" :options="options" class="prose max-w-none" />
                    </div>
                </article>
            <Footer />
        </Container>
    </Layout>
</template>