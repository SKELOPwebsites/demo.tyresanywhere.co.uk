<template>
    <div class="relative flex flex-col justify-center">

        <div class="hero-background">
            <HeaderSpace />

            <div class="mt-4 sm:mt-10">
                <Carousel :location="location" />
            </div>

            <Container>
                <div class="mt-4 sm:mt-10">
                    <PostcodeSearch :location="location" />
                </div>
            </Container>
        </div>

        <Container>
            
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
// CDE7F0
// B0C4DE   
// AFCBD6
defineProps({
    location: {
        type: String,
        required: false,
        default: null,
    },
})

</script>

<style scoped>
.hero-background{
    background: linear-gradient(to bottom, #CDE7F0, #f9fafb);
}

</style>

