<template>
    <Head>
        <title></title>
        <meta name="description" content="">
    </Head>

    <Container class="pt-10 h-screen flex 2xl:space-x-16 xl:space-x-8 xl:flex-row flex-col">
        <div class="font-exo w-full">
            <div class="space-y-6">
                <div>
                    <h1 class="text-3xl font-bold text-secondary mb-4">{{ title }}</h1>
                    <h2 class="text-xl font-semibold">{{ description }}</h2>
                </div>
            </div>
        </div>
    </Container>
</template>

<script setup>
import { computed } from 'vue'
import { Link, Head } from "@inertiajs/vue3"
import Container from "../Shared/Container.vue"

const props = defineProps({ status: Number })

const title = computed(() => {
    return {
        503: '503: Service Unavailable',
        500: '500: Server Error',
        404: '404: Page Not Found',
        403: '403: Forbidden',
    }[props.status]
})

const description = computed(() => {
    return {
        503: 'Sorry, we are doing some maintenance. Please check back soon.',
        500: 'Whoops, something went wrong on our servers.',
        404: 'Sorry, the page you are looking for could not be found.',
        403: 'Sorry, you are forbidden from accessing this page.',
    }[props.status]
})
</script>

<style scoped>

</style>
