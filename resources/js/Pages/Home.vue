<script setup>
import Layout from '@/Layouts/Layout.vue';
import Container from '@/Components/Container.vue';
import PostPreview from '@/Components/PostPreview.vue';
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    posts: Object,
});
</script>

<template>
    <Head>
        <title>Michael Crowcroft's Website</title>
    </Head>

    <Layout>
        <div class="flex flex-wrap items-center lg:h-screen xl:h-screen 2xl:h-screen
                    text-center lg:text-left xl:text-left 2xl:text-left p-5 md:p-10
                    lg:p-20 xl:p-20 2xl:p-20">
            <div class="w-full lg:w-2/5 xl:w-2/5 2xl:w-2/5 lg:pr-8 xl:pr-8 2xl:pr-8">
                <h1 class="leading-none font-serif text-5xl">Hey there,</h1>
                <h3 class="font-serif text-3xl">Welcome to my Website 👋</h3>
                <p>(Want to hire me? Here's <Link class="text-teal-800 hover:underline" href="/resume">my résumé</Link>)</p>
                <hr class="block border-t-1 border-gray-400 mx-auto my-6"/>
                <div class="flex justify-between items-center space-x-4">
                    <p>Reach out at <a class="text-teal-800 hover:underline" href="mailto:michaelcrowcroft@outlook.com">michaelcrowcroft@outlook.com</a></p>
                </div>
                <hr class="block border-t-1 border-gray-400 mx-auto my-6"/>
            </div>
            <div class="w-full overflow-scroll max-h-full lg:w-3/5 xl:w-3/5 2xl:w-3/5 lg:pl-8 xl:pl-8 2xl:pl-8">
                <hr class="block border-t-1 border-gray-900 mx-auto my-6"/>
                <Container>
                    <div v-for="(post, index) in posts" :key="post.id">
                        <hr v-if="index != 0" class="block border-t-1 border-gray-400 mx-auto my-6"/>
                        <PostPreview :post="post" />
                    </div>
                </Container>
                <hr class="block border-t-1 border-gray-900 mx-auto my-6"/>
            </div>
        </div>
    </Layout>
</template>