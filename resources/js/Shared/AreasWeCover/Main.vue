<template>
    <div class="pt-20 px-20 lg:mt-0 sm:mt-6 mt-4 flex items-start relative gap-10">
        <div class="lg:w-full w-full font-exo">
            <img src="/assets/images/coverage.webp" alt="Tyres Anywhere Coverage Zone Map" class="absolute w-full h-full inset-0 object-cover lg:hidden block brightness-[0.35]" loading="lazy">

            <div class="relative z-10 mt-5">
                <h3 class="xl:text-3xl text-2xl font-rubik uppercase font-bold mb-2 lg:text-black text-white lg:text-left text-center reveal">Areas we Cover</h3>
                <p class="xl:text-xl text-lg lg:text-gray-500 text-white font-rubik font-light lg:text-left text-center reveal">With over 100 mobile units, we provide convenient tyre fitting services nationwide.</p>

                <div class="w-full grid grid-cols-2 mt-10 lg:text-secondary-500 text-stone-200 sm:text-base text-sm gap-y-4 lg:px-0 md:px-32 sm:px-20 px-6 reveal">
                    <Link
                        :href="'/locations/'+slugify(area)" v-for="(area, index) in areas"
                        class="lg:w-full w-40 flex items-center hover:underline"
                        :class="{'justify-self-end': index % 2 !== 0}"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="sm:size-5 size-4 mr-2">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                        </svg>
                        <span class="font-rubik font-light">{{ area }}</span>
                    </Link>

                    <div class="col-span-1 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="sm:size-5 size-4 mr-2">
                            <path fill-rule="evenodd" d="M19.916 4.626a.75.75 0 0 1 .208 1.04l-9 13.5a.75.75 0 0 1-1.154.114l-6-6a.75.75 0 0 1 1.06-1.06l5.353 5.353 8.493-12.74a.75.75 0 0 1 1.04-.207Z" clip-rule="evenodd" />
                        </svg>
                        <Link href="/sitemap" class="font-exo underline">and Beyond</Link>
                    </div>
                </div>
            </div>
        </div>
        <div class="shrink-0 lg:block hidden reveal">
            <img src="/assets/images/coverage.webp" alt="Tyres Anywhere Coverage Zone Map" class="rounded-3xl" loading="lazy">
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3"

const areas = ['London', 'Birmingham', 'Oxford', 'Reading', 'High Wycombe', 'Watford', 'Milton Keynes', 'Bicester', 'Aylesbury', 'Slough', 'Uxbridge', 'Maidenhead']

function slugify(text) {
    return text
        .toString()                      // Convert to string
        .normalize('NFD')                // Normalize to decomposed form
        .replace(/[\u0300-\u036f]/g, '') // Remove diacritics
        .toLowerCase()                   // Convert to lowercase
        .trim()                          // Remove leading and trailing spaces
        .replace(/[^a-z0-9\s-]/g, '')    // Remove non-alphanumeric characters
        .replace(/\s+/g, '-')            // Replace spaces with hyphens
        .replace(/-+/g, '-');            // Replace multiple hyphens with a single hyphen
}
</script>

<style scoped>

</style>
