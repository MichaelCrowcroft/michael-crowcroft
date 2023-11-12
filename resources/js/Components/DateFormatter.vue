<script setup>
import { parse, format } from 'date-fns';

const props = defineProps({
    date: String
});

const date = parse(props.date, 'yyyy-MM-dd', new Date());
</script>

<template>
    <time dateTime="date">{{ format(date, 'LLL	d, yyyy') }}</time>
</template>