<template>
    <Head>
        <title>Latest Blog Posts - Tyre Tips and Guides | Tyres Anywhere</title>
        <meta name="description" content="Explore our latest blog posts on tyre fitting, repairs, and vehicle maintenance. Stay updated with expert tips, industry news, and helpful guides.">
        <link rel="canonical" href="https://tyresanywhere.co.uk/blog">

        <meta property="og:title" content="Latest Blog Posts - Tyre Tips and Guides" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://tyresanywhere.co.uk/blog" />
        <meta property="og:image" content="https://tyresanywhere.co.uk/assets/images/pages/blogs/tyre-ratings-explained/quality-tyre.webp" />
        <meta property="og:description" content="Explore our latest blog posts on tyre fitting, repairs, and vehicle maintenance. Stay updated with expert tips, industry news, and helpful guides." />
        <meta property="og:site_name" content="Tyres Anywhere" />
    </Head>

    <Container class="sm:py-10 py-6">
        <h1 class="font-montserrat font-extrabold md:text-4xl sm:text-2xl text-xl mb-2 uppercase">Blog articles</h1>
        <h2 class="md:text-xl sm:text-lg text-base sm:mb-10 mb-4">Learn more about your tyres and mobile tyre fitting</h2>

        <div class="grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 md:gap-10 gap-6">
            <BlogCard v-for="blog in blogPosts" :img="blog.img" :alt="blog.alt" :href="blog.href" :date="formatDate(blog.date)">
                <template v-slot:title>{{ blog.title }}</template>
                <template v-slot:description>{{ blog.description }}</template>
            </BlogCard>
        </div>
    </Container>
</template>

<script setup>
import { Link, Head } from '@inertiajs/vue3'
import Container from '../Shared/Container.vue'
import BlogCard from '../Shared/Blog/BlogCard.vue'

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
</script>

<style scoped>

</style>
