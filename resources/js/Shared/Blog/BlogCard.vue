<template>
    <article class="bg-white overflow-hidden rounded-xl shadow-lg transition hover:shadow-xl">
        <Link :href="href">
            <img
                :alt="alt"
                :src="img"
                class="md:h-56 h-40 w-full object-cover"
                loading="lazy"
            />

            <div class="p-4 md:p-6">
                <p class="font-light text-xs text-gray-400">Tyres Anywhere &bull; {{ date }}</p>
                <h3 class="font-medium mt-0.5 md:text-lg text-gray-900"><slot name="title"></slot></h3>

                <p class="font-light mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
                    <slot name="description"></slot>
                </p>
            </div>
        </Link>
    </article>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"

defineProps({
    date: {
        type: String,
        required: true,
    },
    href: {
        type: String,
        required: true,
    },
    img: {
        type: String,
        required: true,
    },
    alt: {
        type: String,
        required: true,
    }
})
</script>

<style scoped>

</style>
