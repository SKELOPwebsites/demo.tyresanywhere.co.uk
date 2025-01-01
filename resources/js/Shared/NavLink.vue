<template>
    <Link :href="href" class="font-medium font-rubik text-gray-800 whitespace-nowrap lg:text-sm text-[13px] block hover:text-wheelfit-300 hover:font-medium transition duration-300 ease-in-out">
        <slot></slot>
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    href: String
})

</script>

<style scoped>

</style>
