<template>
    <Container class="px-10 pt-3 select-none relative flex md:flex-row flex-col items-center md:justify-between justify-center md:pb-5 pb-3 bg-secondary-400">
        <div class="sm:w-[300px] w-[250px]">
            <Link href="/">
                <img
                    src="/assets/images/main/tyresanywhere.webp"
                    srcset="/assets/images/main/tyresanywhere.webp 300w,
							/assets/images/main/tyresanywhere-250.webp 250w"
                    sizes="(max-width: 576px) 250px, 300px"
                    height="100"
                    width="250"
                    alt="Tyres Anywhere Group">
            </Link>
        </div>
        <div class="md:absolute relative md:left-1/2 md:top-1/2 bottom-auto md:-translate-y-1/2 md:-translate-x-1/2 md:mt-0 mt-3">
            <p class="xl:text-4xl lg:text-3xl lg:block md:hidden font-semibold whitespace-nowrap text-white">
                <span class="fade-in-word mr-2" style="animation-delay: 0s;">WE </span>
                <span class="fade-in-word mr-2" style="animation-delay: 0.5s;">COME </span>
                <span class="fade-in-word mr-2" style="animation-delay: 1s;">TO </span>
                <span class="text-wheelfit-300 fade-in-word" style="animation-delay: 1.5s;">YOU</span>
            </p>
        </div>
        <div class="md:block hidden font-montserrat">
            <p class="mb-1 text-3xl font-extrabold text-white">Need HELP?</p>
            <span class="font-extrabold text-xl text-white">
                CALL US ON
                <a class="text-xl text-wheelfit-300 text-shadow" href="tel:07442980101" title="Phone Number">07442 980101</a>
            </span>
        </div>
    </Container>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import Container from "./Container.vue";

</script>

<style scoped>
.text-shadow{
    text-shadow: 2px 2px 2px rgba(255,112,112,0.3);
}

.fade-in-word {
    display: inline-block;
    opacity: 0;
    animation: fade-in-word 1s ease-in-out forwards;
}

@keyframes fade-in-word {
    0% {
        opacity: 0;
        transform: translateY(10px); 
    }
    100% {
        opacity: 1;
        transform: translateY(0); 
    }
}

</style>
