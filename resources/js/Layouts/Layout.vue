<script setup>
import BottomBlur from '@/Components/BottomBlur.vue';
import Nav from '@/Components/Nav.vue';
import TopBlur from '@/Components/TopBlur.vue';
</script>

<template>
    <body class="font-sans antialiased">
        <div class="relative isolate">
            <TopBlur />
            <!-- <Nav /> -->
            <slot />
            <BottomBlur />
        </div>
    </body>
</template>
