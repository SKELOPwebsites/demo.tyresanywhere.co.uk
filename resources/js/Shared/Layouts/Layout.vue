<template>
    <header class="bg-white">
        <Header />
        <Navbar />
    </header>

    <slot />

    <Footer />

    <WhatsappIcon name="Tyres Anywhere" phoneNumber="+447442980101"/>
</template>

<script setup>
import Header from "../Header.vue"
import Navbar from "../Navbar.vue"
import Footer from "../Footer.vue"
import WhatsappIcon from "../WhatsappIcon.vue"

</script>

<style scoped>

</style>
