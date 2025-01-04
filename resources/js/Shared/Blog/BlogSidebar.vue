<template>
    <div>
        <h2 class="font-rubik text-xl font-semibold mb-8">Recent blog posts</h2>

        <div class="grid xl:grid-cols-1 lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-12">
            <template v-for="(post, index) in filteredBlogPosts">
                <Link :href="post.href" class="group hover:cursor-pointer">
                    <img :src="post.img" :alt="post.alt" class="mb-4 w-full h-[200px] object-cover rounded-xl shadow-lg" />
                    <div class="space-y-3">
                        <div class="font-light flex space-x-1 text-gray-400 font-montserrat">
                            <span class="text-sm">{{ post.author }}</span>
                            <span class="text-sm">&bull;</span>
                            <span class="text-sm">{{ formatDate(post.date) }}</span>
                        </div>
                        <div class="flex justify-between">
                            <h3 class="font-rubik font-semibold md:text-xl text-base group-hover:underline">{{ post.title }}</h3>

                            <div class="pt-1 pl-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                                    <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                        <p class="font-light text-slate-500 line-clamp-3 md:text-base text-sm">{{ post.description }}</p>
                    </div>
                </Link>
            </template>
        </div>
    </div>
</template>

<script setup>
import { Link, usePage } from '@inertiajs/vue3'

const { url, props } = usePage()

// Filter the blog posts to exclude the one with the current URL
const filteredBlogPosts = props.blogPosts.filter(post => post.href !== url)

const formatDate = (dateString) => {
    const date = new Date(dateString.split('/').reverse().join('-'));
    return date.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' });
}
</script>

<style scoped>

</style>
