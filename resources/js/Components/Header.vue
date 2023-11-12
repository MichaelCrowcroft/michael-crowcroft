<script setup>
import { Link } from '@inertiajs/vue3';
import { ArrowUturnLeftIcon } from '@heroicons/vue/24/solid'

</script>

<template>
    <div class="mb-20 mt-8 sticky top-0">
        <Link href="/">
            <div class="bg-pink-100 backdrop-blur shadow bg-opacity-25 py-4 px-4 w-16 transition ease-in-out duration-50 hover:cursor-pointer hover:shadow-lg">
                <ArrowUturnLeftIcon class="h-8 w-8 fill-cyan-600" />
            </div>
        </Link>
    </div>
</template>