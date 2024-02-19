<script setup>
import Layout from '@/Layouts/Layout.vue';
import Container from '@/Components/Container.vue';
import Header from '@/Components/Header.vue';
import { Head, Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const marbles = ref([]);
const bag = ref([]);

const resetGame = (bag, marbles) => {
    bag.length = 0;
    marbles.length = 0;

    while(bag.length < 20) {
        let marble = Math.random() < 0.5 ? 'red' : 'blue';
        bag.push(marble);
    };
};

const drawMarble = (bag, marbles) => {
    let marble = Math.floor(Math.random() * (bag.length + 1)) - 1;
    marbles.push(bag.splice(marble, 1).toString());
};

const bagProbability = (bag, marbles) => {
    let red = bag.length / 2 / 20 * 100 + marbles.filter(marble => marble === 'red').length * 5;
    let blue = bag.length / 2 / 20 * 100 + marbles.filter(marble => marble === 'blue').length * 5;
    return 'Best guess is bag is ' + red + '% red and ' + blue + '% blue.';
};
</script>

<template>
    <Head>
        <title>Probability | Michael</title>
        <link rel="canonical" href="https://www.michaelcrowcroft.com/probability/"  />
    </Head>

    <Layout>
        <Container>
            <Header />
                <article class="mb-32 mx-auto max-w-4xl">
                    <h1 class="text-4xl font-bold text-slate-800 text-center leading-tight">
                        Probability
                    </h1>
                    <div class="max-w-2xl mx-auto">
                        <p>sfd</p>
                        <p>{{ marbles }}</p>
                        <p>{{ bag }}</p>
                        <button @click="resetGame(bag, marbles)">Reset the Game</button> <br />
                        <button @click="drawMarble(bag, marbles)">Draw a Marble from the Bag</button>
                        <p>{{ bagProbability(bag, marbles) }}</p>
                    </div>
                </article>
        </Container>
    </Layout>
</template>