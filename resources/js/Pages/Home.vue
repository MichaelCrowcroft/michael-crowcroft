<script setup>
import Layout from '@/Layouts/Layout.vue';
import PostPreview from '@/Components/PostPreview.vue';
import { Head, Link } from '@inertiajs/vue3';
import HelloFreshLogo from '@/Components/HelloFreshLogo.vue';
import Nav from '@/Components/Nav.vue';

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
        <div class="mx-auto w-full h-screen max-w-4xl my-16 px-4">
            <!-- <img class="rounded-full border-cyan-400 border w-24 shadow-xl" src="https://avatars.githubusercontent.com/u/11324235?v=4"> -->
            <p class="text-md text-cyan-600 font-bold tracking-tight uppercase">About Me</p>
            <h1 class="text-2xl font-bold text-slate-800 leading-none mb-8">
                Hey there, it's Michael.
            </h1>
            <p class="text-slate-800 mb-4">I'm a marketer at <a href="https://www.hellofresh.com" class="font-bold hover:cursor-pointer"><HelloFreshLogo class="h-4 inline"/>  HelloFresh</a>, with priors at <a href="https://www.xero.com" class="font-bold hover:cursor-pointer">Xero</a>, and <a href="https://www.ogilvy.com" class="font-bold hover:cursor-pointer">Ogilvy</a>.</p>
            <p class="text-slate-800 mb-4">Originally from Auckland, but currently based in Toronto. Let me know if you're in town and want to grab coffee!</p>
            <p class="text-slate-800">I'm always working on a side project, and am currently obsessed with ad fraud. <a href="https://www.linklooper.com" class="z-10 font-bold hover:cursor-pointer">Link Looper</a> is a tool that helps marketers identify and stop ad fraud, and <a href="https://badvertising.io" class="z-10 font-bold hover:cursor-pointer">Badvertising</a> houses the research I'm doing into programmatic ad exchanges.</p>

            <div class="py-32">
                <p class="text-md text-cyan-600 font-bold tracking-tight uppercase">Blog</p>
                <h1 class="text-2xl font-bold text-slate-800 leading-none mb-8">
                    Recent Thoughts
                </h1>
                <div v-for="post in posts" :key="post.slug">
                    <PostPreview :post="post" />
                </div>
            </div>

        </div>
    </Layout>
</template>