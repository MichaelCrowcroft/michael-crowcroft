<script setup>
import Layout from '@/Layouts/Layout.vue';
import Container from '@/Components/Container.vue';
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';
import DateFormatter from '@/Components/DateFormatter.vue';
import { Head, Link } from '@inertiajs/vue3';
import { marked } from 'marked';

defineProps({
    post: Object,
});
</script>

<template>
    <Head>
        <title>{{ post.title }} | Michael</title>
    </Head>

    <Layout>
        <Container>
            <Header />
                <article class="mb-32 mx-auto max-w-4xl">
                    <h1 class="text-5xl font-serif font-bold text-center leading-tight">
                        {{ post.title }}
                    </h1>
                    <div class="mb-6 text-lg italic text-gray-600 text-center">
                         <DateFormatter :date="post.published_at"/>
                    </div>
                    <div class="max-w-2xl mx-auto">
                        <div v-html="marked.parse(post.body)" class="prose max-w-none"></div>
                    </div>
                </article>
            <Footer />
        </Container>
    </Layout>
</template>