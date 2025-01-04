<template>
    <HeaderSpace />
    <Container class="font-rubik sm:py-10 py-6 flex xl:flex-row flex-col gap-x-12 gap-y-12">

        <component :is="currentBlogPost" :date="formatHumanReadableDate(props.currentPost.date)" :dateISO="formatISODate(props.currentPost.date)" />

        <div class="shrink-0 xl:w-96 w-full">
            <BlogSidebar />
        </div>

    </Container>

    <Container>
        <PostcodeSearch class="mt-4 sm:mt-10"/>
        <TrustSection />
    </Container>
</template>

<script setup>
import { Link, Head, usePage } from '@inertiajs/vue3'
import HeaderSpace from "../Shared/HeaderSpace.vue"
import Container from '../Shared/Container.vue'
import BlogSidebar from '../Shared/Blog/BlogSidebar.vue'
import { onMounted, onBeforeUnmount, defineAsyncComponent } from 'vue'
import PostcodeSearch from '../Shared/PostcodeSearch.vue'
import TrustSection from '../Shared/TrustSection.vue'

// Get the slug passed from the server
const { props } = usePage()
const slug = props.slug
const date = props.currentPost.date

// Dynamically load the blog post component based on the slug
const currentBlogPost = defineAsyncComponent(() =>
    import(`./BlogPosts/${date}-${slug}.vue`)
)


function formatISODate(dateString) {
    // Convert '28/09/2024' to '2024-09-28'
    const date = new Date(dateString.split('/').reverse().join('-'));
    return date.toISOString().slice(0, 10); // Returns YYYY-MM-DD
}

function formatHumanReadableDate(dateString) {
    // Convert '28/09/2024' to '28 Sept 2024'
    const date = new Date(dateString.split('/').reverse().join('-'));
    return date.toLocaleDateString('en-GB', {
        day: 'numeric',
        month: 'short', // 'short' for 'Sept'
        year: 'numeric',
    });
}


// Dynamically create JSON-LD file for each blog post (fix)
function injectJSONLD(post, slug) {
    if (!post || !slug) {
        console.error("No blog post data available for JSON-LD.");
        return null;
    }

    const script = document.createElement('script');
    script.type = 'application/ld+json';

    // Create the JSON-LD structure
    script.text = JSON.stringify({
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "headline": post.title, 
        "description": post.description, 
        "image": `https://tyresanywhere.co.uk${post.img}`, 
        "author": {
            "@type": "Person",
            "name": "Tyres Anywhere Team",
            "url": "https://tyresanywhere.co.uk"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Tyres Anywhere",
            "logo": {
                "@type": "ImageObject",
                "url": "https://tyresanywhere.co.uk/assets/images/main/tyresanywhere.webp"
            },
            "url": "https://tyresanywhere.co.uk"
        },
        "datePublished": post.dateISO, 
        "dateModified": post.dateISO,
        "url": `https://tyresanywhere.co.uk/blog/${slug}`, 
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": `https://tyresanywhere.co.uk/blog/${slug}`
        }
    });

    document.head.appendChild(script);
    return script;
}

// Inject and cleanup JSON-LD
let scriptElement;

onMounted(() => {
    scriptElement = injectJSONLD(props.currentPost, slug);
});

onBeforeUnmount(() => {
    if (scriptElement) {
        document.head.removeChild(scriptElement);
    }
});

</script>

<style scoped>

</style>
