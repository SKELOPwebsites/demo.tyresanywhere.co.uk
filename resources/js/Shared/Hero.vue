<template>
    <div class="flex flex-col justify-center sm:h-auto lg:min-h-screen">

        <Container>
            <HeaderSpace />


            <div class="mb-4 md:mb-10">
                <Carousel class="w-full" :location="location" />
            </div>

            <PostcodeSearch :location="location" />

            <TrustSection :location="location" />

        </Container>
    </div>

</template>

<script setup>
import Container from "./Container.vue"
import TrustSection from "./TrustSection.vue";
import { onMounted, ref } from "vue";
import Carousel from "./Carousel.vue";
import HeaderSpace from "./HeaderSpace.vue";
import PostcodeSearch from "./PostcodeSearch.vue";

defineProps({
    location: {
        type: String,
        required: false,
        default: null,
    },
})

</script>

<style scoped>

</style>

