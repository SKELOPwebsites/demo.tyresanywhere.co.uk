<template>
    <div class="flex flex-wrap-reverse md:flex-nowrap items-start lg:items-start sm:items-center justify-center gap-8 md:gap-16 px-12 md:px-20 py-8 max-w-6xl mx-auto h-full">
        <div class="relative md:w-1/2 w-full h-full flex flex-col text-center md:text-left"> 
            <!-- Text Swiper -->
            <Swiper 
            :modules="[EffectFade, Navigation, Controller, Autoplay]"
            :loop="true"
            :effect="'fade'"
            :fadeEffect="{ crossFade: true }"
            :autoplay="{ delay: 5000, disableOnInteraction: false }"
            :navigation="{
                nextEl: '.arrow-left',
                prevEl: '.arrow-right',
            }"
            @swiper="setFirstSwiper"
            :controller="{ control: secondSwiper }"
            class="w-full h-full font-rubik"
            >
                <!-- Slide 1 -->
                <SwiperSlide>
                    <div class="flex flex-col justify-between gap-6">
                        <div>
                            <h1 v-if="!location" class="font-semibold mb-4 text-3xl sm:text-4xl">Mobile Tyre Fitting, Delivered to Your Doorstep</h1>
                            <h1 v-else class="font-semibold mb-4 text-3xl sm:text-4xl">Mobile Tyre Fitting in {{location}}</h1>
                            <p class="text-gray-800 font-light text-base sm:text-lg lg:text-xl">Experience the ultimate convenience with our expert mobile tyre fitting service.</p>
                        </div>

                        <div class="h-6"></div>
                    </div>
                </SwiperSlide>

                <!-- Slide 2 -->
                <SwiperSlide>
                    <div class="flex flex-col justify-between gap-6">
                        <div class="flex-1">
                            <h2 v-if="!location" class="font-semibold mb-4 text-3xl sm:text-4xl">Fast & Reliable Mobile Tyre Fitting</h2>
                            <h2 v-else class="font-semibold mb-4 text-3xl sm:text-4xl">We Come To You!</h2>
                            <p class="text-gray-800 font-light text-base sm:text-lg lg:text-xl">Same-day service for punctures, replacements, and more.</p>
                        </div>

                        <div class="h-6"></div>
                    </div>
                
                </SwiperSlide>

                <!-- Slide 3 -->
                <SwiperSlide>
                    <div class="flex flex-col justify-between gap-6">
                        <div class="flex-1">
                            <h2 v-if="!location" class="font-semibold mb-4 text-3xl sm:text-4xl">Rapid Response, 30-60 Minutes Guaranteed</h2>
                            <h2 v-else class="font-semibold mb-4 text-3xl sm:text-4xl">Mobile Tyre Repair in {{ location }}</h2>
                            <p class="text-gray-800 font-light text-base sm:text-lg lg:text-xl">Stranded? We'll be there in 30-60 minutes to get you back on track.</p>
                        </div>

                        <div class="h-6"></div>
                    </div>
                    
                </SwiperSlide>

                <!-- Slide 4 -->
                <SwiperSlide>
                    <div class="flex flex-col justify-between gap-6">
                        <div class="flex-1">
                            <h2 class="font-semibold mb-4 text-3xl sm:text-4xl">Mobile Tyre Experts at Your Location</h2>
                            <p class="text-gray-800 font-light text-base sm:text-lg lg:text-xl">Enjoy stress-free tyre services anywhere, anytime.</p>
                        </div>

                        <div class="h-6"></div>
                    </div>
                    
                </SwiperSlide>

                <!-- Slide 5 -->
                <SwiperSlide>

                    <div class="flex flex-col justify-between gap-6">
                        <div class="flex-1">
                            <h2 v-if="!location" class="font-semibold mb-4 text-3xl sm:text-4xl">Professional Mobile Tyre Fitting Services</h2>
                            <h2 v-else class="font-semibold mb-4 text-3xl sm:text-4xl">Mobile Tyre Fitting in {{ location }}</h2>
                            <p class="text-gray-800 font-light text-base sm:text-lg lg:text-xl">Book today for fast, expert tyre services wherever you are.</p>
                        </div>

                        <div class="h-6"></div>
                    </div>
                    
                </SwiperSlide>
            </Swiper>
            <div class="z-10 flex flex-col gap-6">
                
                <!-- CTA Buttons -->
                <div class="flex justify-center md:justify-start gap-4">
                    <a href="tel:07442980101" class="bg-wheelfit-300 text-white inline-flex items-center justify-center py-3 px-6 rounded-full shadow-xl transition duration-300 hover:bg-wheelfit-400 hover:scale-105">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M21.384,17.752a2.108,2.108,0,0,1-.522,3.359,7.543,7.543,0,0,1-5.476.642C10.5,20.523,3.477,13.5,2.247,8.614a7.543,7.543,0,0,1,.642-5.476,2.108,2.108,0,0,1,3.359-.522L8.333,4.7a2.094,2.094,0,0,1,.445,2.328A3.877,3.877,0,0,1,8,8.2c-2.384,2.384,5.417,10.185,7.8,7.8a3.877,3.877,0,0,1,1.173-.781,2.092,2.092,0,0,1,2.328.445Z"/></svg>
                        Call Us Now
                    </a>
                    <a href="https://tyresanywhere.com/search-tyres" class="text-wheelfit-300 inline-flex items-center justify-center transition duration-300 hover:transform hover:translate-x-1">
                        Find tyres
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="currentColor" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 513.749 513.749"><g><path d="M504.352,459.061l-99.435-99.477c74.402-99.427,54.115-240.344-45.312-314.746S119.261-9.277,44.859,90.15   S-9.256,330.494,90.171,404.896c79.868,59.766,189.565,59.766,269.434,0l99.477,99.477c12.501,12.501,32.769,12.501,45.269,0   c12.501-12.501,12.501-32.769,0-45.269L504.352,459.061z M225.717,385.696c-88.366,0-160-71.634-160-160s71.634-160,160-160   s160,71.634,160,160C385.623,314.022,314.044,385.602,225.717,385.696z"/></g></svg>
                    </a>
                </div>

                <!-- Navigation Arrows -->
                <div class="justify-center md:justify-start flex gap-2 text-wheelfit-300 text-opacity-50">
                    <button class="arrow-left px-6 py-1 rounded-full border border-wheelfit-300 border-opacity-50 hover:bg-wheelfit-300 hover:text-white transition duration-300" aria-label="Previous slide">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M15.293 3.293 6.586 12l8.707 8.707 1.414-1.414L9.414 12l7.293-7.293-1.414-1.414z"/></svg>
                    </button>
                    <button class="arrow-right px-6 py-1 rounded-full border border-wheelfit-300 border-opacity-50 hover:bg-wheelfit-300 hover:text-white transition duration-300" aria-label="Next slide">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M7.293 4.707 14.586 12l-7.293 7.293 1.414 1.414L17.414 12 8.707 3.293 7.293 4.707z"/></svg>
                    </button>
                </div>
            </div>
            
        </div>

        <div class="md:w-5/12 w-full px-4 sm:px-20 md:px-0">
            <!-- Image Swiper -->
            <Swiper 
            :modules="[EffectCards, Controller, Autoplay]"
            :effect="'cards'"
            :slides-per-view="1"
            :loop="true"
            :grabCursor="true"
            :autoplay="{ delay: 5000, disableOnInteraction: false }"
            @swiper="setSecondSwiper"
            :controller="{ control: firstSwiper }"
            class="w-full max-w-full overflow-hidden swiper-3d"
            >
                <SwiperSlide>
                    <div>
                        <img
                        src="/assets/images/showcase/gallary/mobile-tyre-fitting-1-300.webp"
                        srcset="/assets/images/showcase/gallary/mobile-tyre-fitting-1.webp 1080w,
                                    /assets/images/showcase/gallary/mobile-tyre-fitting-1-500.webp 500w,
                                    /assets/images/showcase/gallary/mobile-tyre-fitting-1-300.webp 300w"
                        class="w-full h-full object-cover"
                        alt="Tyres Anywhere LTD Mobile Tyres Van"
                        sizes="(min-width: 1536px) 413px,
                                (min-width: 1280px) 413px,
                                (min-width: 1024px) 360px,
                                (min-width: 768px) 560px,
                                (min-width: 640px) 432px,
                                300px"
                        loading="eager"
                        fetchpriority="high"
                        >
                    </div>
                </SwiperSlide>

                <SwiperSlide>
                    <div>
                        <img
                        src="/assets/images/showcase/gallary/mobile-tyre-fitting-2.webp"
                        srcset="/assets/images/showcase/gallary/mobile-tyre-fitting-2.webp 1080w,
                                    /assets/images/showcase/gallary/mobile-tyre-fitting-2-500.webp 500w,
                                    /assets/images/showcase/gallary/mobile-tyre-fitting-2-300.webp 300w"
                        class="w-full h-full object-cover"
                        sizes="(min-width: 1536px) 413px,
                        (min-width: 1280px) 413px,
                        (min-width: 1024px) 360px,
                        (min-width: 768px) 560px,
                        (min-width: 640px) 432px,
                        300px"
                        alt="Mobile Tyre Fitting"
                        loading="lazy"
                        >
                    </div>
                </SwiperSlide>

                <SwiperSlide>
                    <div>
                        <img
                            src="/assets/images/showcase/gallary/mobile-tyre-fitting-3.webp"
                            srcset="/assets/images/showcase/gallary/mobile-tyre-fitting-3.webp 1080w,
                                        /assets/images/showcase/gallary/mobile-tyre-fitting-3-500.webp 500w,
                                        /assets/images/showcase/gallary/mobile-tyre-fitting-3-300.webp 300w"
                            alt="Mobile tyre puncture repair"
                            sizes="(min-width: 1536px) 413px,
                                (min-width: 1280px) 413px,
                                (min-width: 1024px) 360px,
                                (min-width: 768px) 560px,
                                (min-width: 640px) 432px,
                                300px"
                            class="w-full h-full object-cover"
                            loading="lazy"
                        >
                    </div>
                </SwiperSlide>

                <SwiperSlide>
                    <div>
                        <img
                            src="/assets/images/showcase/gallary/mobile-tyre-fitting-4.webp"
                            srcset="/assets/images/showcase/gallary/mobile-tyre-fitting-4.webp 1080w,
                                        /assets/images/showcase/gallary/mobile-tyre-fitting-4-500.webp 500w,
                                        /assets/images/showcase/gallary/mobile-tyre-fitting-4-300.webp 300w"
                            class="w-full h-full object-cover"
                            sizes="(min-width: 1536px) 413px,
                                (min-width: 1280px) 413px,
                                (min-width: 1024px) 360px,
                                (min-width: 768px) 560px,
                                (min-width: 640px) 432px,
                                300px"
                            alt="Tyres Anywhere LTD Mobile Tyres Van"
                            loading="lazy"
                        >
                    </div>
                </SwiperSlide>

                <SwiperSlide>
                    <div>
                        <img
                            src="/assets/images/showcase/gallary/mobile-tyre-fitting-5.webp"
                            srcset="/assets/images/showcase/gallary/mobile-tyre-fitting-5.webp 1080w,
                                        /assets/images/showcase/gallary/mobile-tyre-fitting-5-500.webp 500w,
                                        /assets/images/showcase/gallary/mobile-tyre-fitting-5-300.webp 300w"
                            class="w-full h-full object-cover"
                            sizes="(min-width: 1536px) 413px,
                                (min-width: 1280px) 413px,
                                (min-width: 1024px) 360px,
                                (min-width: 768px) 560px,
                                (min-width: 640px) 432px,
                                300px"
                            alt="Mobile Tyre Fitting"
                            loading="lazy"
                        >
                    </div>
                </SwiperSlide>
            </Swiper>
        </div>

    </div>

</template>
  
<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue'; 
import { EffectFade, EffectCards, Navigation, Controller, Autoplay } from 'swiper/modules';
import { ref } from 'vue';

import 'swiper/css';
import 'swiper/css/effect-fade';
import 'swiper/css/effect-cards';
import 'swiper/css/navigation';

const firstSwiper = ref(null);   
const secondSwiper = ref(null);

const setFirstSwiper = (swiper) => {
  firstSwiper.value = swiper;
};

const setSecondSwiper = (swiper) => {
  secondSwiper.value = swiper;
};

defineProps({
    location: {
        type: String,
        required: false,
        default: null,
    },
})

</script>

<style scoped>
.swiper-3d {
  perspective: 1200px; /* Adjust the perspective value */
}

.slide-description{
    font-size: clamp(1rem, 2vw, 1.5rem);
    text-align: left;
    font-weight: 300; 
    max-width: 65ch; 
    line-height: 1.2;

    /* Responsive Styles */
    @media (min-width: 640px) { 
        font-size: 1.25rem; 
    }
}
.swiper-slide{
    transform-style: preserve-3d;
    background-color: transparent;

    flex-shrink: 0;

    border-radius: 1.2em;
    height: 100%;
}


</style>
  