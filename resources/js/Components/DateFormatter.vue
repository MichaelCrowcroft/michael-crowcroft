<script setup>
import { parse, format } from 'date-fns';

const props = defineProps({
    date: String
});

const date = parse(props.date);
</script>

<template>
    <time dateTime="date">{{ format(date, 'LLLL	d, yyyy') }}</time>
</template>