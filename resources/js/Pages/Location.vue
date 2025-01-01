<template>
    <Head>
        <title>Mobile Tyre Fitting in {{ location }} | Tyres Anywhere</title>
        <link rel="canonical" :href="'https://tyresanywhere.co.uk/locations/'+slug">

        <meta property="og:title" :content="`Mobile Tyre Fitting in ${location}`" />
        <meta property="og:type" content="website" />
        <meta property="og:url" :content="'https://tyresanywhere.co.uk/locations/'+slug" />
        <meta property="og:image" content="https://tyresanywhere.co.uk/assets/images/showcase/gallary/mobile-tyre-fitting-1.webp" />
        <meta property="og:site_name" content="Tyres Anywhere" />
    </Head>
    <Container>
        <div class="flex md:flex-row flex-col md:pt-12 sm:pt-6 xl:h-[340px] lg:h-[300px] md:h-[280px]">
            <div class="xl:w-[70%] md:w-[65%] w-full">
                
            </div>
            <div class="xl:w-[30%] md:w-[35%] w-full">
                <SearchTyre />
            </div>
        </div>
        <OurServices />

        <AreasWeCover :location="location"/>
    </Container>

    <Container>
        <Content>
            <component :is="currentLocation" :location="location"/>
        </Content>
    </Container>

    <OurQualities />
</template>

<script setup>
import {Link, Head, usePage} from '@inertiajs/vue3'
import Container from '../Shared/Container.vue'
import Content from '../Shared/Content.vue'
import SearchTyre from '../Shared/SearchTyre.vue'
import OurServices from '../Shared/OurServices.vue'
import OurQualities from '../Shared/OurQualities.vue'
import FAQ from '../Shared/FAQ.vue'
import {defineAsyncComponent} from "vue";
import AreasWeCover from '../Shared/AreasWeCover/Location.vue'

const props = defineProps({
    location: String,
    slug: String,
})

// Dynamically load the blog post component based on the slug

const currentLocation = defineAsyncComponent(() =>
    import(`./Locations/${props.slug}.vue`)
)

</script>

<style scoped>

</style>
