<template>
    <div class="flex relative items-center justify-between px-8 py-2 max-w-[1596px] mx-auto">

        <div class="flex items-center gap-3 lg:gap-6 relative w-full">
            <!-- Company Logo -->
            <div class="flex-shrink-0">
                <Link href="/">
                    <img
                        src="/assets/images/main/tyresanywhere.webp"
                        srcset="/assets/images/main/tyresanywhere.webp 300w,
                                /assets/images/main/tyresanywhere-250.webp 250w"
                        class="h-16 sm:h-20 w-auto object-contain"
                        width="300"
                        height="100"
                        alt="Tyres Anywhere Group">
                </Link>
            </div>

            <!-- NavBar -->
            <div class="w-full md:w-auto mt-0 md:mt-4 flex justify-end">
                <Navbar/>
            </div>
        </div>

        <!-- Call Us CTA: Hidden on Mobile -->
        <div class="hidden md:block">
            <a class="whitespace-nowrap flex items-center text-white bg-wheelfit-300 rounded-full px-6 py-3 shadow-lg text-base lg:text-lg font-semibold z-10 hover:bg-wheelfit-400 hover:scale-105 transition-all duration-300" href="tel:07442980101" title="Phone Number">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-6 lg:w-6 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M21.384,17.752a2.108,2.108,0,0,1-.522,3.359,7.543,7.543,0,0,1-5.476.642C10.5,20.523,3.477,13.5,2.247,8.614a7.543,7.543,0,0,1,.642-5.476,2.108,2.108,0,0,1,3.359-.522L8.333,4.7a2.094,2.094,0,0,1,.445,2.328A3.877,3.877,0,0,1,8,8.2c-2.384,2.384,5.417,10.185,7.8,7.8a3.877,3.877,0,0,1,1.173-.781,2.092,2.092,0,0,1,2.328.445Z"/></svg>
                07442 980101
            </a>
        </div>
    </div>

</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import Container from "./Container.vue";
import Navbar from "./Navbar.vue"
import { onMounted } from 'vue';

</script>

<style scoped>
.text-shadow{
    text-shadow: 2px 2px 2px rgba(255,112,112,0.3);
}

</style>
