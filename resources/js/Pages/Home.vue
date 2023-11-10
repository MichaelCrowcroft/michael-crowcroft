<script setup>
import Layout from '@/Layouts/Layout.vue';
import Container from '@/Components/Container.vue';
import PostPreview from '@/Components/PostPreview.vue';
import { Head, Link } from '@inertiajs/vue3';
import VueMarkdown from 'vue-markdown-render'

defineProps({
    posts: Object,
    projects: Object,
});
</script>

<template>
    <Head>
        <title>Michael Crowcroft's Website</title>
        <link rel="canonical" href="https://www.michaelcrowcroft.com" />
    </Head>

    <Layout>
        <div class="flex flex-wrap items-center lg:h-screen xl:h-screen 2xl:h-screen
                    text-center lg:text-left xl:text-left 2xl:text-left p-5 md:p-10
                    lg:p-20 xl:p-20 2xl:p-20">
            <div class="w-full lg:w-2/5 xl:w-2/5 2xl:w-2/5 lg:pr-8 xl:pr-8 2xl:pr-8">
                <div class="lg:flex lg:justify-between lg:items-end">
                    <div class="flex-auto">
                        <h1 class="leading-none font-serif text-5xl">Hey there,</h1>
                        <h3 class="font-serif text-3xl">Welcome to my Website</h3>
                    </div>
                </div>

                <hr class="block border-t-1 border-gray-400 mx-auto my-6"/>
                <div class="flex justify-between items-center space-x-4">
                    <p>Want to work with me? Reach out at <a class="text-teal-800 hover:underline" href="mailto:michaelcrowcroft@outlook.com">michaelcrowcroft@outlook.com</a></p>
                </div>
                <hr class="block border-t-1 border-gray-400 mx-auto my-6"/>

                <h3 class="text-2xl font-bold text-center font-serif leading-none mb-6">Current Projects</h3>
                <div class="grid grid-cols-2 gap-2">
                    <div class="flex flex-col items-center" v-for="project in projects" :key="project.slug">
                        <h4 class="text-xl font-serif leading-none mb-3">
                            <a :href="project.link" class="font-black hover:underline text-teal-800">
                                {{ project.name }}
                            </a>
                        </h4>
                        <img class="w-20" :src="project.logo" />
                        <p class="text-xs text-gray-600 px-4 leading-relaxed">
                            <VueMarkdown :source="project.content" :options="options" class="prose text-center" />
                        </p>
                        <a :href="project.link" class="font-black hover:underline text-teal-800">
                            View Project
                        </a>
                    </div>
                </div>
            </div>

            <div class="w-full overflow-scroll max-h-full lg:w-3/5 xl:w-3/5 2xl:w-3/5 lg:pl-8 xl:pl-8 2xl:pl-8">
                <hr class="block border-t-1 border-gray-900 mx-auto my-6"/>
                <Container>
                    <div v-for="(post, index) in posts" :key="post.slug">
                        <hr v-if="index != 0" class="block border-t-1 border-gray-400 mx-auto my-6"/>
                        <PostPreview :post="post" />
                    </div>
                </Container>
                <hr class="block border-t-1 border-gray-900 mx-auto my-6"/>
            </div>
        </div>
    </Layout>
</template>