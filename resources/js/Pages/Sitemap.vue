<template>
    <Head>
        <title>Sitemap - Explore Our Website | Tyres Anywhere</title>
        <meta name="description" content="Easily navigate Tyres Anywhere with our sitemap. Find pages for mobile tyre fitting, repairs, services, and more. Explore all our offerings in one place.">
        <link rel="canonical" href="https://tyresanywhere.co.uk/sitemap">

        <meta property="og:title" content="Sitemap - Explore Our Website" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://tyresanywhere.co.uk/sitemap" />
        <meta property="og:image" content="https://tyresanywhere.co.uk/assets/images/showcase/gallary/mobile-tyre-fitting-3.webp" />
        <meta property="og:description" content="Easily navigate Tyres Anywhere with our sitemap. Find pages for mobile tyre fitting, repairs, services, and more. Explore all our offerings in one place." />
        <meta property="og:site_name" content="Tyres Anywhere" />
    </Head>

    <HeaderSpace />

    <Container>
        <div class="sm:px-8 px-2 pt-8 pb-8">
            <h1 class="sm:text-3xl text-2xl sm:mb-12 mb-6">Tyres Anywhere LTD Site Map</h1>

            <div class="grid grid-cols-12 items-start justify-start sm:gap-x-4 gap-x-2 gap-y-8">
                <div class="xl:col-span-3 col-span-6">
                    <p class="md:text-lg text-base font-semibold">Tyres Anywhere LTD</p>
                    <div class="flex flex-col items-start mt-4 space-y-2">
                        <Link href="/" class="md:text-base text-sm text-blue-600 hover:underline">Home</Link>
                        <Link href="/mobile-tyre-fitting" class="md:text-base text-sm text-blue-500 hover:underline">Mobile Tyre Fitting</Link>
                        <Link href="/mobile-tyre-repair" class="md:text-base text-sm text-blue-600 hover:underline">Mobile Tyre Repair</Link>
                        <Link href="/van-mobile-tyre-fitting" class="md:text-base text-sm text-blue-600 hover:underline">Van Mobile Tyre Fitting</Link>
                        <Link href="/breakdown-recovery" class="md:text-base text-sm text-blue-600 hover:underline">Breakdown Recovery</Link>
                        <Link href="/contact-us" class="md:text-base text-sm text-blue-600 hover:underline">Contact Us</Link>
                    </div>
                </div>
                <div class="xl:col-span-3 col-span-6">
                    <p class="md:text-lg text-base font-semibold">Service</p>
                    <div class="flex flex-col items-start mt-4 space-y-2">
                        <a href="https://tyresanywhere.com/search-tyres" class="md:text-base text-sm text-blue-600 hover:underline">Search Tyres</a>
                    </div>
                </div>
                <div class="xl:col-span-6 col-span-12">
                    <p class="md:text-lg text-base font-semibold">Coverage (expand sections)</p>

                    <div v-for="(areaGroup, letter) in areas" :key="letter" class="mt-4">
                        <button
                            @click="toggleSection(letter)"
                            class="flex justify-between items-center w-full border p-3"
                        >
                            <span>{{ letter }}</span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                :class="{'rotate-180': openSections.includes(letter)}"
                                class="size-6 transition"
                            >
                                <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <!-- Area Links, only visible if section is open -->
                        <div v-show="openSections.includes(letter)" class="grid grid-cols-12 gap-2 items-start mt-4 px-2">
                            <div
                                v-for="area in areaGroup"
                                :key="area.slug"
                                class="col-span-4"
                            >
                                <Link
                                    :href="'/locations/' + area.slug"
                                    class="md:text-base text-sm text-blue-600 hover: capitalize"
                                    v-text="area.area"
                                ></Link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Container>
</template>


<script setup>
import { ref } from "vue";
import { Link, Head } from "@inertiajs/vue3";
import Container from "../Shared/Container.vue";
import HeaderSpace from "../Shared/HeaderSpace.vue";

defineProps({
    areas: Object,
})

// Open sections tracking
const openSections = ref([]);

// Toggle section visibility
const toggleSection = (letter) => {
    if (openSections.value.includes(letter)) {
        openSections.value = openSections.value.filter(l => l !== letter);
    } else {
        openSections.value.push(letter);
    }
};
</script>

<style scoped>

</style>
