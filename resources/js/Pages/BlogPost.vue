<template>
    <Container class="sm:py-10 py-6 flex xl:flex-row flex-col gap-x-12 gap-y-12">
        <component :is="currentBlogPost" :date="formatHumanReadableDate(props.currentPost.date)" :dateISO="formatISODate(props.currentPost.date)" />

        <div class="shrink-0 xl:w-96 w-full">
            <BlogSidebar />
        </div>
    </Container>
</template>

<script setup>
import { Link, Head, usePage } from '@inertiajs/vue3'
import Container from '../Shared/Container.vue'
import BlogSidebar from '../Shared/Blog/BlogSidebar.vue'
import { defineAsyncComponent } from 'vue'

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
</script>

<style scoped>

</style>
