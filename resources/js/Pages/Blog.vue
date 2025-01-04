<template>
    <Head>
        <title>Latest Blog Posts - Tyre Tips and Guides | Tyres Anywhere</title>
        <meta name="description" content="Explore our latest blog posts on tyre fitting, repairs, and vehicle maintenance. Stay updated with expert tips, industry news, and helpful guides.">
        <link rel="canonical" href="https://tyresanywhere.co.uk/blog">

        <meta property="og:title" content="Expert Tyre Tips & Guides - Tyres Anywhere Blog" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://tyresanywhere.co.uk/blog" />
        <meta property="og:image" content="https://tyresanywhere.co.uk/assets/images/pages/blogs/tyre-ratings-explained/quality-tyre.webp" />
        <meta property="og:description" content="Get valuable insights into mobile tyre fitting, maintenance tips, and expert advice. Check out our blog for the latest updates!" />
        <meta property="og:site_name" content="Tyres Anywhere" />
    </Head>

    <Container class="sm:py-10 py-6 font-rubik">
        <HeaderSpace />

        <h1 class="font-bold md:text-4xl sm:text-2xl text-xl mb-2 uppercase">Blog articles</h1>
        <h2 class="font-light md:text-xl sm:text-lg text-base sm:mb-10 mb-4">Discover expert advice on 
            <a href="/mobile-tyre-fitting" class="underline">tyre fitting</a>, 
            <a href="/mobile-tyre-repair" class="underline">repairs</a>, 
            and vehicle maintenance. Read our latest blog posts to stay informed and keep your vehicle road-ready!</h2>

        <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 md:gap-10 gap-6">
            <BlogCard v-for="blog in blogPosts" :img="blog.img" :alt="blog.alt" :href="blog.href" :date="formatDate(blog.date)">
                <template v-slot:title>{{ blog.title }}</template>
                <template v-slot:description>{{ blog.description }}</template>
            </BlogCard>
        </div>

        <PostcodeSearch class="mt-4 sm:mt-10"/>
        <TrustSection />
    </Container>
</template>

<script setup>
import { Link, Head } from '@inertiajs/vue3'
import Container from '../Shared/Container.vue'
import BlogCard from '../Shared/Blog/BlogCard.vue'
import HeaderSpace from "../Shared/HeaderSpace.vue"
import PostcodeSearch from '../Shared/PostcodeSearch.vue'
import TrustSection from '../Shared/TrustSection.vue'
import { onMounted, onBeforeUnmount } from 'vue';

defineProps({
    blogPosts: {
        type: Object,
        required: true,
    }
})

const formatDate = (dateString) => {
    const date = new Date(dateString.split('/').reverse().join('-'));
    return date.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' });
}


// Function to inject JSON-LD
function injectJSONLD() {
    const script = document.createElement('script');
    script.type = 'application/ld+json';

    script.text = JSON.stringify({
        "@context": "https://schema.org",
        "@type": "CollectionPage",
        "name": "Tyre Tips and Guides",
        "description": "Explore expert tips on tyre fitting, mobile repairs, and vehicle maintenance. Discover the latest industry insights, guides, and advice to keep your vehicle in top condition.",
        "url": "https://tyresanywhere.co.uk/blog",
        "breadcrumb": {
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home",
                    "item": "https://tyresanywhere.co.uk"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Blog",
                    "item": "https://tyresanywhere.co.uk/blog"
                }
            ]
        },
        "publisher": {
            "@type": "Organization",
            "name": "Tyres Anywhere",
            "logo": {
                "@type": "ImageObject",
                "url": "https://tyresanywhere.co.uk/assets/images/main/tyresanywhere.webp"
            },
            "url": "https://tyresanywhere.co.uk"
        }
    });

    document.head.appendChild(script);
    return script;
}

let scriptElement;

onMounted(() => {
    // Inject JSON-LD when the component is mounted
    scriptElement = injectJSONLD();
});

onBeforeUnmount(() => {
    // Clean up the JSON-LD script when the component is unmounted
    if (scriptElement) {
        document.head.removeChild(scriptElement);
    }
});
</script>

<style scoped>

</style>
