<template>
    <div ref="heroSection" class="hero-container flex flex-col justify-center sm:h-auto lg:h-screen">
        
        <svg class="hero-background lg:block hidden" viewBox="0 0 782.32 440.055" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"><rect class="bg" id="bg" x="0" y="0" width="782.32" height="440.055" fill="#f9fafb"></rect><circle cx="-312.92800000000005" cy="220.0275" r="782.32" fill="#FDE9EA" stroke="none" stroke-width="10"></circle></svg>        
        <div class="hero-background-mobile lg:hidden"></div> 

        <HeaderSpace />

        <div class="mb-10">
            <Carousel2 class="w-full"/>
        </div>

        <TrustSection class="mb-10" />
        
        <button
        class="absolute bottom-0 left-1/2 transform -translate-x-1/2"
        @click="scrollToNextSection"
        aria-label="Scroll to next section"
        >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-8 h-8 text-wheelfit-300 animate-bounce"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="1"
        >
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
        </svg>
        </button>
    </div>

</template>

<script setup>
import TrustSection from "./TrustSection.vue";
import { onMounted, ref } from "vue";
import Carousel2 from "./Carousel2.vue";
import HeaderSpace from "./HeaderSpace.vue";

const headerSpace = ref(null);

onMounted(() => {
    const header = document.querySelector("header"); // Select the header element
    if (header && headerSpace.value) {
        headerSpace.value.style.height = `${header.offsetHeight}px`;
    }
});

const heroSection = ref(null);

const scrollToNextSection = () => {
    if (heroSection.value) {
        const heroHeight = heroSection.value.offsetHeight;
        window.scrollTo({
            top: heroHeight, 
            behavior: "smooth",
        });
    }
};

</script>

<style scoped>

.hero-container{
    position: relative;
    width: 100vw; /* Full viewport width */
    overflow: hidden;
}

.hero-background{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
    pointer-events: none; 
}

.hero-background-mobile {
    background-color: #FDE9EA;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}


</style>

