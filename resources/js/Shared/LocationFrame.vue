<template>
    <div class="py-28 font-rubik">
        
        <h2 class="font-extrabold text-4xl mb-2 reveal"><slot name="title" /></h2>
        <h2 class="font-light md:text-xl sm:text-lg text-base mb-10"><slot name="subtitle" /></h2>

        <div class="lg:grid grid-cols-12 gap-y-12 xl:gap-x-4 lg:gap-x-8 lg:space-y-0 sm:space-y-12 space-y-6 sm:text-base text-sm">
            
            <div class="col-span-12 lg:col-span-5 flex items-center items-stretch lg:p-4 reveal">
                <img
                    class="w-full object-cover rounded-xl shadow-xl"
                    src="/assets/images/pages/home/tyres-anywhere-van-375.webp"
                    srcset="/assets/images/pages/home/tyres-anywhere-van.webp 640w,
                        /assets/images/pages/home/tyres-anywhere-van-500.webp 500w,
                        /assets/images/pages/home/tyres-anywhere-van-375.webp 375w"
                    sizes="(max-width: 600px) 375px, (max-width: 768px) 500px, (max-width: 1024px) 640px, 500px"
                    width="1024"
                    height="640"
                    loading="lazy"
                    alt="Tyres Anywhere mechanic in a van"
                >
            </div>

            <div class="col-span-7 lg:p-4 space-y-3">
                <h3 class="lg:text-3xl sm:text-2xl text-xl font-semibold mb-2 reveal"><slot name="title1" /></h3>

                <p class="font-light reveal"><slot name="content1" /></p>
            </div>

            <!--                    Why choose Tyres Anywhere for your tyre needs?-->
            <div class="col-span-12 lg:p-4">
                <h3 class="lg:text-3xl sm:text-2xl text-xl font-semibold mb-2 reveal"><slot name="title2" /></h3>

                <p class="font-light reveal"><slot name="content2" /></p>
            </div>

            <!--                    Our Mobile Tyre Services-->
            <div class="col-span-12 lg:p-4">
                <h3 class="lg:text-3xl sm:text-2xl text-xl font-semibold mb-2 reveal"><slot name="title3" /></h3>

                <p class="font-light reveal"><slot name="content3" /></p>
            </div>

            <!--                    benefits...?-->
            <div class="col-span-12 lg:p-4">
                <h3 class="lg:text-3xl sm:text-2xl text-xl font-semibold mb-2 reveal"><slot name="title4" /></h3>

                <p class="font-light reveal"><slot name="content4" /></p>
            </div>

            <div class="col-span-12 lg:p-4">
                <h3 class="lg:text-3xl sm:text-2xl text-xl font-semibold mb-2 reveal"><slot name="title5" /></h3>

                <p class="font-light reveal"><slot name="content5" /></p>
            </div>


            <!--                    book an appointment today-->
            <div class="col-span-7 lg:p-4 space-y-4">
                <h3 class="lg:text-3xl sm:text-2xl text-xl font-semibold mb-2 reveal"><slot name="title6" /></h3>

                <p class="font-light reveal"><slot name="content6" /></p>
            </div>

            <div class="col-span-12 lg:col-span-5 flex items-center items-stretch reveal">
                <img
                    class="w-full object-cover rounded-xl shadow-xl"
                    src="/assets/images/pages/home/mobile-tyre-fitting-375.webp"
                    srcset="/assets/images/pages/home/mobile-tyre-fitting.webp 640w,
                        /assets/images/pages/home/mobile-tyre-fitting-500.webp 500w,
                        /assets/images/pages/home/mobile-tyre-fitting-375.webp 375w"
                    sizes="(max-width: 600px) 375px, (max-width: 768px) 500px, (max-width: 1024px) 640px, 500px"
                    width="1024"
                    height="640"
                    loading="lazy"
                    alt="Tyres Anywhere technician doing a mobile tyre replacement"
                >
            </div>

        </div>
    </div>
</template>

<script setup>
</script>

<style scoped>

</style>
