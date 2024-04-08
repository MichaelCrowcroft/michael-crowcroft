---
title: 'Making a Star Rating Component in Vue'
slug: 'star-rating-vue-component'
published_at: '2024-04-07'
category: 'programming'
---

I've been building a product review site. For the most part this is a straight forward CRUD app, but I've been looking to create a non-standard input for users to attach star ratings to their reviews. In addition we need to display the star ratings on reviews and products.

# The Scope

We need to create two Vue components.

1. A 'StarInput' Component

Functioning as an input field that binds to a form.

2. A 'Stars' Component

To display the number of stars a review or product has – needs to be able to display partial stars because on aggregate a product might have partial stars (like a 3.5 rating).

# Star Input Component

We loop through a template five times which creates five stars (using heroicons stars).

As a user hovers over stars, the stars will fill in yellow based on the number of stars being moused over. If a user doesn't select a rating, then when they move the mouse away fromt the component the stars revert to being transparent.

If a user selects a star rating then those stars will become colored, even after a user moves their mouse away from the component to indicate that a rating has been selected. Mousing over more stars will highlight them, but only the selected stars will remain yellow when the mouse leaves.

We also watch the model value that is passed to the component, in the event the form is updated from the parent component we want to make sure the correct model value is reflected in the rating associated with the input.

``` vue
<script setup>
import { StarIcon } from '@heroicons/vue/24/outline'
import { ref, watch } from 'vue';

const model = defineModel({
    type: Number,
    required: true,
});

const rating = ref(0);

watch(() => model.value, (value) => rating.value = value);
</script>

<template>
    <div class="flex">
        <template v-for="count in 5">
            <StarIcon
                class="h-8 w-8" :class="{ 'fill-yellow-400': model >= count || rating >= count }"
                @mouseover="rating = count"
                @mouseleave="rating = model"
                @click="model = count"
            />
        </template>
    </div>
</template>
```

We can use this input as a component in a form.

``` vue
<StarInput v-model="form.stars" />
```

# Displaying the Stars

We pass a float (five or less) as a prop to the component which is used as the rating in the component.

This is broken down into three seperate numbers:

* The trailing 'remainder' of stars that don't make up a whole star. Eg. if a rating of 3.5 is passed to the component the remainder is 0.5.
* The number of 'whole stars' (being the stars value passed to the prop, less the remainder).
* The fraction (of a star) to show – representing the remainder as a fraction with a denominator of twelve this represents the numerator. Eg. if there is a remainder of 0.5 then the fractionToShow would be 6, 6/12 = 0.5.

Similar to the input component we loop over five stars, however this time we nest the stars in two divs.

``` vue
<script setup>
import { StarIcon } from '@heroicons/vue/24/outline';

const props = defineProps({
    stars: Number,
});
const remainder = props.stars % 1;
const fractionToShow = Math.round(remainder/10*12*10);
</script>

<template>
    <div class="flex">
        <template v-for="count in 5">
            <div class="h-6 w-6">
                <div class="overflow-hidden" :class="{
                    'w-1/12' : fractionToShow == 1 & stars - remainder + 1  == count,
                    'w-2/12' : fractionToShow == 2 & stars - remainder + 1  == count,
                    'w-3/12' : fractionToShow == 3 & stars - remainder + 1  == count,
                    'w-4/12' : fractionToShow == 4 & stars - remainder + 1  == count,
                    'w-5/12' : fractionToShow == 5 & stars - remainder + 1  == count,
                    'w-6/12' : fractionToShow == 6 & stars - remainder + 1  == count,
                    'w-7/12' : fractionToShow == 7 & stars - remainder + 1  == count,
                    'w-8/12' : fractionToShow == 8 & stars - remainder + 1  == count,
                    'w-9/12' : fractionToShow == 9 & stars - remainder + 1  == count,
                    'w-10/12' : fractionToShow == 10 & stars - remainder + 1  == count,
                    'w-11/12' : fractionToShow == 11 & stars - remainder + 1  == count,
                    'w-12/12' : fractionToShow == 12 & stars - remainder + 1  == count,
                }">
                    <StarIcon
                        class="h-6 w-6"
                        :class="{
                            'fill-yellow-400': stars - remainder + 1  == count,
                            'hidden': stars + 1  <= count
                        }"
                    />
                </div>
            </div>
        </template>
    </div>
</template>
```

We create five stars in a loop, and color them yellow based on the rating passed to the component. We round the rating up to the next full number to get the number of yellow stars we want to display. Eg. if we pass 3.5 to the component, we want to show four yellow stars and set the fifth star to hidden.

``` vue
<StarIcon
    class="h-6 w-6"
    :class="{
        'fill-yellow-400': stars - remainder + 1  >= count,
        'hidden': stars + 1  <= count
    }"
/>
```

If we are only passing a fraction of a star (taking the 3.5 example), we don't want to show the entire fourth star, we only want to show half of it. This is where the divs come in to play.

The first div is always the size of a full star, the second div changes and acts as a mask to hide parts of the star inside thanks to the overflow-hidden class.

``` vue
<div class="overflow-hidden" :class="{
    'w-1/12' : fractionToShow == 1 & stars - remainder + 1  == count,
    'w-2/12' : fractionToShow == 2 & stars - remainder + 1  == count,
    'w-3/12' : fractionToShow == 3 & stars - remainder + 1  == count,
    'w-4/12' : fractionToShow == 4 & stars - remainder + 1  == count,
    'w-5/12' : fractionToShow == 5 & stars - remainder + 1  == count,
    'w-6/12' : fractionToShow == 6 & stars - remainder + 1  == count,
    'w-7/12' : fractionToShow == 7 & stars - remainder + 1  == count,
    'w-8/12' : fractionToShow == 8 & stars - remainder + 1  == count,
    'w-9/12' : fractionToShow == 9 & stars - remainder + 1  == count,
    'w-10/12' : fractionToShow == 10 & stars - remainder + 1  == count,
    'w-11/12' : fractionToShow == 11 & stars - remainder + 1  == count,
    'w-12/12' : fractionToShow == 12 & stars - remainder + 1  == count,
}">
```

This can probably be simplified a lot, but essentially we are looking to see if we are displaying the final star, and if we are we are then looking to see how much of the star we should show. We are using Tailwind classes that are a fraction of 12, and so this is where the fractionToShow variable is used.

Of course there's lots of different ways to approach this, and we need to add some extra polish to the input component so that it can be controlled with a keyboard and is accessible for screen readers, but I think this is a good start. The most challenging part is definitely displaying the partial star!