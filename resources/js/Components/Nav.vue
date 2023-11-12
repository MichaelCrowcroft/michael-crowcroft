<script setup>
import { Link } from '@inertiajs/vue3';
import { HomeIcon } from '@heroicons/vue/24/solid'

</script>

<template>
    <nav class="sticky top-0 z-10" aria-label="Global">
        <div class="mx-auto divide-slate-900 bg-white bg-opacity-10 backdrop-blur-sm shadow">
            <div class="flex justify-center py-4 max-w-4xl">
                <Link href="/" class="mx-4 text-md font-bold leading-6 text-cyan-700"><HomeIcon class="h-8 w-8" /></Link>
            </div>
        </div>
    </nav>
</template>