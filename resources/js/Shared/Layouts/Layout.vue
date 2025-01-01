<template>

    <header :class="{ 
        sticky : isSticky }" 
        class="absolute top-0 left-0 w-full z-50">
        <Header />
    </header>

    <slot />
    

    <Footer />

    <WhatsappIcon name="Tyres Anywhere" phoneNumber="+447442980101"/>
</template>

<script setup>
import Header from "../Header.vue"
import Footer from "../Footer.vue"
import WhatsappIcon from "../WhatsappIcon.vue"

import { ref, onMounted, onUnmounted } from "vue";

const isSticky = ref(false); // Becomes sticky after threshold
const scrollThreshold = 300; // Threshold for sticky behavior

const handleToggleWhatsApp = () => {
    document.getElementById('whatsapp-button')?.click();
};

const handleScroll = () => {
  isSticky.value = window.scrollY > scrollThreshold;
};


onMounted(() => {
  window.addEventListener("scroll", handleScroll);
  window.addEventListener('toggle-whatsapp', handleToggleWhatsApp);
});

onUnmounted(() => {
  window.removeEventListener("scroll", handleScroll);
  window.removeEventListener('toggle-whatsapp', handleToggleWhatsApp);
});

</script>

<style scoped>

header {
    transition: all 0.3s ease;
}

header.sticky {
    position: fixed; /* Make it fixed when sticky */
    background-color: #f9fafb; /* Add a background color for better visibility */
    animation: slideInFromTop 0.3s ease forwards; /* Animate the sticky header */

    margin-top: .5rem;
    border-radius: 50px; /* Add rounded corners */
    box-shadow: 0 4px 40px #00000014;
}

@media (max-width: 640px) {
    header.sticky {
        margin-top: 0; /* Remove margin-top for mobile */
        border-radius: 0; /* Remove rounded corners for mobile */
    }
}

@keyframes slideInFromTop {
    from {
        transform: translateY(-100%);
    }
    to {
        transform: translateY(0);
    }
}

</style>
