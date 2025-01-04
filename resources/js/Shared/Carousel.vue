<template>
    <div class="overflow-hidden flex items-center justify-center">
        <div class="flex flex-wrap-reverse md:flex-nowrap px-10 gap-4 md:gap-0 items-center justify-between w-full h-full max-w-6xl">
            <div class="overflow-hidden relative w-full md:w-1/2 h-full flex flex-col text-center md:text-left">
                <!-- Text Swiper -->
                <Swiper
                :modules="[EffectFade, Navigation, Controller, Autoplay]"
                :loop="true"
                :effect="'fade'"
                :fadeEffect="{ crossFade: true }"
                :autoplay="{ delay: 3000, disableOnInteraction: false }"
                :navigation="{
                    nextEl: '.arrow-left',
                    prevEl: '.arrow-right',
                }"
                @swiper="setFirstSwiper"
                :controller="{ control: secondSwiper }"
                @slideChange="restartAutoplay"
                @touchEnd="restartAutoplay"
                class="w-full h-full font-rubik"
                >
                    <!-- Slide 1 -->
                    <SwiperSlide>
                        <div class="flex flex-col justify-between gap-6">
                            <div>
                                <h1 v-if="!location" class="font-bold mb-4 text-3xl sm:text-4xl lg:text-5xl">Mobile Tyre Fitting, Delivered to Your Doorstep</h1>
                                <h1 v-else class="font-bold mb-4 text-3xl sm:text-4xl lg:text-5xl">Expert Mobile Tyre Fitting in {{location}}</h1>
                                <p class="text-gray-700 font-light text-base sm:text-lg lg:text-xl">
                                    Get professional tyre replacements and repairs wherever you are. 
                                    We come to you—saving you time and stress.
                                </p>
                            </div>
                        </div>
                    </SwiperSlide>

                    <!-- Slide 2 -->
                    <SwiperSlide>
                        <div class="flex flex-col justify-between gap-6">
                            <div class="flex-1">
                                <h2 class="font-bold mb-4 text-3xl sm:text-4xl lg:text-5xl">Rapid Response, 30-60 Minutes Guaranteed</h2>
                                <p class="text-gray-700 font-light text-base sm:text-lg lg:text-xl">
                                    Whether it's a puncture or a flat tyre, our rapid-response team 
                                    gets you rolling again—right at your home, work, or roadside.
                                </p>
                            </div>
                        </div>

                    </SwiperSlide>

                    <!-- Slide 3 -->
                    <SwiperSlide>
                        <div class="flex flex-col justify-between gap-6">
                            <div class="flex-1">
                                <h2 v-if="!location" class="font-bold mb-4 text-3xl sm:text-4xl lg:text-5xl">Same-Day Tyre Fitting & Repairs</h2>
                                <h2 v-else class="font-bold mb-4 text-3xl sm:text-4xl lg:text-5xl">Same-Day Tyre Fitting & Repairs in {{ location }}</h2>
                                <p class="text-gray-700 font-light text-base sm:text-lg lg:text-xl">
                                    Count on us for reliable tyre replacements or repairs the same day.
                                    We bring the service to you—no waiting around or towing needed.
                                </p>

                            </div>
                        </div>

                    </SwiperSlide>

                    <!-- Slide 4 -->
                    <SwiperSlide>

                        <div class="flex flex-col justify-between gap-6">
                            <div class="flex-1">
                                <h2 class="font-bold mb-4 text-3xl sm:text-4xl lg:text-5xl">Your Trusted Local Tyre Specialists</h2>
                                <p v-if="!location" class="text-gray-700 font-light text-base sm:text-lg lg:text-xl">
                                    Our experienced team handles punctures, balancing, and full 
                                    replacements—anywhere in the UK. Quality service is just a 
                                    call away.                            
                                </p>
                                <p v-else class="text-gray-700 font-light text-base sm:text-lg lg:text-xl">
                                    Proudly serving {{ location }} and surrounding areas. 
                                    From quick puncture fixes to complete tyre swaps, 
                                    our experts have you covered.                            
                                </p>
                            </div>
                        </div>

                    </SwiperSlide>

                    <!-- Slide 5 -->
                    <SwiperSlide>
                        <div class="flex flex-col justify-between gap-6">
                            <div class="flex-1">
                                <h2 v-if="!location" class="font-bold mb-4 text-3xl sm:text-4xl lg:text-5xl">Book Today & Drive With Confidence</h2>
                                <h2 v-else class="font-bold mb-4 text-3xl sm:text-4xl lg:text-5xl">Book Today in {{ location }} & Drive With Confidence</h2>
                                <p v-if="!location" class="text-gray-700 font-light text-base sm:text-lg lg:text-xl">
                                    Don't let a damaged tyre slow you down. Our mobile tyre experts 
                                    offer flexible appointments to keep you moving safely.                            
                                </p>
                                <p v-else class="text-gray-700 font-light text-base sm:text-lg lg:text-xl">
                                    In {{ location }}, we provide professional tyre services right 
                                    at your doorstep. Schedule an appointment today and hit 
                                    the road with total peace of mind.                            
                                </p>

                            </div>
                        </div>

                    </SwiperSlide>
                    
                </Swiper>

            </div>

            <div class="md:w-2/5 w-full px-2 sm:px-10 md:px-0">
                <!-- Image Swiper -->
                <Swiper
                :modules="[EffectCards, Controller, Autoplay]"
                :effect="'cards'"
                :slides-per-view="1"
                :loop="true"
                :grabCursor="true"
                :autoplay="{ delay: 3000, disableOnInteraction: false }"
                @swiper="setSecondSwiper"
                :controller="{ control: firstSwiper }"
                class="w-full swiper-3d"
                >
                    <SwiperSlide class="image-slide">
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

                    <SwiperSlide class="image-slide">
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

                    <SwiperSlide class="image-slide">
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

                    <SwiperSlide class="image-slide">
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

                    <SwiperSlide class="image-slide">
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

                <!-- Navigation Arrows -->
                <div class="w-full items-center justify-center gap-2 mt-3 flex text-gray-600 text-opacity-50 z-10">
                    <button class="arrow-right hover:text-gray-700 hover:scale-110 transform transition duration-300" aria-label="Previous slide">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19,11H9l3.29-3.29a1,1,0,0,0,0-1.42,1,1,0,0,0-1.41,0l-4.29,4.3A2,2,0,0,0,6,12H6a2,2,0,0,0,.59,1.4l4.29,4.3a1,1,0,1,0,1.41-1.42L9,13H19a1,1,0,0,0,0-2Z"/></svg>
                    </button>
                    <button class="arrow-left hover:text-gray-700 hover:scale-110 transform transition duration-300" aria-label="Next slide">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M18,12h0a2,2,0,0,0-.59-1.4l-4.29-4.3a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42L15,11H5a1,1,0,0,0,0,2H15l-3.29,3.29a1,1,0,0,0,1.41,1.42l4.29-4.3A2,2,0,0,0,18,12Z"/></svg>
                    </button>
                </div>
            </div>

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

const restartAutoplay = () => {
  if (firstSwiper.value?.autoplay) {
    firstSwiper.value.autoplay.start();

  }
  if (secondSwiper.value?.autoplay) {
    secondSwiper.value.autoplay.start();
  }
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
    will-change: transform, opacity;
    transform-style: preserve-3d;
    background-color: transparent;

    flex-shrink: 0;
    height: 100%;
}

.image-slide {
    border-radius: 1.2em;
}


</style>
