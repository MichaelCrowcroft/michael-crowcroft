<script setup>
import Layout from '@/Layouts/Layout.vue';
import Container from '@/Components/Container.vue';
import Header from '@/Components/Header.vue';
import { Head, Link } from '@inertiajs/vue3';
import VueMarkdown from 'vue-markdown-render'

defineProps({
    project: Object,
});
</script>

<template>
    <Head>
        <title>{{ project.name }} | Michael</title>
        <link rel="canonical" :href="'https://www.michaelcrowcroft.com/projects/' + project.slug" />
    </Head>

    <Layout>
        <Container>
            <Header />
                <div class="mb-32 mx-auto max-w-2xl">
                    <div class="flex items-center justify-between">
                        <h1 class="text-6xl font-black text-slate-800 text-center leading-tight">
                            {{ project.name }}
                        </h1>
                        <img class="h-24 w-24" :src="project.logo" />
                    </div>
                </div>
                <article>
                    <div class="max-w-4xl mx-auto">
                        <VueMarkdown :source="project.content" class="prose max-w-none" />
                    </div>
                </article>
        </Container>
    </Layout>
</template>