<template>
    <div class="xl:px-11 sm:px-8 px-4">
        <h2 class="font-montserrat font-extrabold lg:text-4xl sm:text-2xl text-xl mb-2 uppercase"><slot name="title" /></h2>
        <h2 class="md:text-xl sm:text-lg text-base mb-10"><slot name="subtitle" /></h2>

        <div class="lg:grid grid-cols-12 gap-y-12 xl:gap-x-4 lg:gap-x-8 lg:space-y-0 sm:space-y-12 space-y-6 lg:mt-8 mt-4 sm:text-base text-sm">
            <div class="col-span-5 lg:p-4">
                <img
                    class="w-full object-cover"
                    src="/assets/images/pages/home/tyres-anywhere-van-375.webp"
                    srcset="/assets/images/pages/home/tyres-anywhere-van.webp 640w,
                                    /assets/images/pages/home/tyres-anywhere-van-500.webp 500w,
                                    /assets/images/pages/home/tyres-anywhere-van-375.webp 375w"
                    sizes="(max-width: 600px) 375px, (max-width: 768px) 500px, (max-width: 1024px) 640px, 500px"
                    loading="lazy"
                    alt="Tyres Anywhere mechanic in a van"
                >
            </div>
            <div class="col-span-7 lg:p-4 space-y-3">
                <h3 class="sm:text-2xl text-xl font-semibold"><slot name="title1" /></h3>

                <slot name="content1" />
            </div>

            <!--                    Why choose Tyres Anywhere for your tyre needs?-->
            <div class="col-span-12 lg:p-4">
                <h3 class="sm:text-2xl text-xl font-semibold"><slot name="title2" /></h3>

                <slot name="content2" />
            </div>

            <!--                    Our Mobile Tyre Services-->
            <div class="col-span-12 lg:p-4">
                <h3 class="sm:text-2xl text-xl font-semibold"><slot name="title3" /></h3>

                <slot name="content3" />
            </div>

            <!--                    benefits...?-->
            <div class="col-span-12 lg:p-4">
                <h3 class="sm:text-2xl text-xl font-semibold"><slot name="title4" /></h3>

                <slot name="content4" />
            </div>

            <div class="col-span-12 lg:p-4">
                <h3 class="sm:text-2xl text-xl font-semibold"><slot name="title5" /></h3>

                <slot name="content5" />
            </div>


            <!--                    book an appointment today-->
            <div class="col-span-7 lg:p-4 space-y-4">
                <h3 class="sm:text-2xl text-xl font-semibold"><slot name="title6" /></h3>

                <slot name="content6" />
            </div>

            <div class="col-span-5 lg:p-4">
                <img
                    class="w-full object-cover"
                    src="/assets/images/pages/home/mobile-tyre-fitting-375.webp"
                    srcset="/assets/images/pages/home/mobile-tyre-fitting.webp 640w,
                                    /assets/images/pages/home/mobile-tyre-fitting-500.webp 500w,
                                    /assets/images/pages/home/mobile-tyre-fitting-375.webp 375w"
                    sizes="(max-width: 600px) 375px, (max-width: 768px) 500px, (max-width: 1024px) 640px, 500px"
                    loading="lazy"
                    alt="Tyres Anywhere technician doing a mobile tyre replacement"
                >
            </div>

            <div class="col-span-12 lg:p-4">
                <FAQ />
            </div>
        </div>
    </div>
</template>

<script setup>
import FAQ from './FAQ.vue'
</script>

<style scoped>

</style>
