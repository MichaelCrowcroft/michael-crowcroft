<script setup>
import BottomBlur from '@/Components/BottomBlur.vue';
import TopBlur from '@/Components/TopBlur.vue';
</script>

<template>
    <body class="font-sans antialiased">
        <div class="relative isolate">
            <TopBlur />
            <slot />
            <BottomBlur />
        </div>
    </body>
</template>
