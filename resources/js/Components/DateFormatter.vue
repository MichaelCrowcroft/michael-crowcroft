<script setup>
import { parseISO, format } from 'date-fns';

const props = defineProps({
    date: String
});

const date = parseISO(props.date);
</script>

<template>
    <time dateTime="date">{{ format(date, 'LLLL	d, yyyy') }}</time>
</template>