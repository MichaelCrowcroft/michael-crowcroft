<script setup>
import Layout from '@/Layouts/Layout.vue';
import PostPreview from '@/Components/PostPreview.vue';
import { Head, Link } from '@inertiajs/vue3';
import HelloFreshLogo from '@/Components/HelloFreshLogo.vue';
import Nav from '@/Components/Nav.vue';
import { ArrowRightIcon } from '@heroicons/vue/24/solid';

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
            <div class="flex justify-between">
                <div>
                    <p class="text-md text-cyan-600 font-bold tracking-tight uppercase">About Me</p>
                    <h1 class="text-2xl font-bold text-slate-800 leading-none mb-8">
                        Hey there, it's Michael.
                    </h1>
                </div>
            <img class="rounded-full border-cyan-400 border w-24 shadow-xl" src="https://avatars.githubusercontent.com/u/11324235?v=4">
            </div>

            <p class="text-slate-800 mb-4">I'm a marketer at <a href="https://www.hellofresh.com" class="font-bold hover:cursor-pointer"><HelloFreshLogo class="h-4 inline"/>  HelloFresh</a>, with priors at <a href="https://www.xero.com" class="font-bold hover:cursor-pointer">Xero</a>, and <a href="https://www.ogilvy.com" class="font-bold hover:cursor-pointer">Ogilvy</a>.</p>
            <p class="text-slate-800 mb-4">Originally from Auckland, currently based in Toronto. Let me know if you're in town and want to grab coffee!</p>
            <p class="text-slate-800 pb-16">I'm always working on a side project, and am currently obsessed with ad fraud. <a href="https://www.linklooper.com" class="z-10 font-bold hover:cursor-pointer">Link Looper</a> is a tool that helps marketers identify and stop ad fraud, and <a href="https://www.bestmanpro.com" class="z-10 font-bold hover:cursor-pointer">Bestman Pro</a> is a tool I'm building to better understand text based LLMs.</p>

            <div class="py-16">
                <p class="text-md text-cyan-600 font-bold tracking-tight uppercase">Blog</p>
                <h1 class="text-2xl font-bold text-slate-800 leading-none mb-8">
                    Recent Thoughts
                </h1>
                <div v-for="post in posts" :key="post.slug">
                    <PostPreview :post="post" />
                </div>
            </div>

            <div class="py-32">
                <p class="text-md text-cyan-600 font-bold tracking-tight uppercase">Projects</p>
                <h1 class="text-2xl font-bold text-slate-800 leading-none mb-8">
                    What I'm Working On
                </h1>
                <div class="grid grid-cols-2 gap-x-8">
                    <div v-for="project in projects" :key="project.slug">
                        <Link :href="project.link">
                            <div class="flex gap-x-6 bg-pink-100 backdrop-blur shadow bg-opacity-25 items-center p-4 mb-2 transition ease-in-out duration-50 hover:cursor-pointer hover:shadow-lg lg:p-8">
                                <img class="h-24 w-24" :src="project.logo" />
                                <div>
                                    <h3 class="text-lg leading-none font-black text-slate-900">
                                        {{ project.name }}
                                    </h3>
                                    <p class="mt-2 text-sm leading-tight">{{ project.summary }}</p>
                                </div>
                            </div>
                        </Link>
                        <Link :href="'/projects/' + project.slug" class="py-2 px-4 float-right inline-flex items-center font-bold bg-pink-100 backdrop-blur shadow bg-opacity-25 transition ease-in-out duration-50 hover:cursor-pointer hover:shadow-lg">
                            <div class="mr-2">Project Updates</div><ArrowRightIcon class="h-4"></ArrowRightIcon>
                        </Link>
                    </div>
                </div>
            </div>

        </div>
    </Layout>
</template>