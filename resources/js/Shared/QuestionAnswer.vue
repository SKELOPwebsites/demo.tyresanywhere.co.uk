<template>
    <div class="py-4 reveal">
        <div
            class="flex justify-between font-rubik py-2 cursor-pointer select-none"
            @click="$emit('toggle')"
        >
            <p class="font-medium sm:text-lg text-base"><slot /></p>

            <svg v-if="!isOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 shrink-0 text-secondary">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <svg v-else xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 shrink-0 text-secondary">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </div>

        <transition name="dropdown">
            <div
                v-if="isOpen"
                class="font-light text-gray-700 pl-4 border-l border-dashed mt-2 overflow-hidden"
            >
                <p class="sm:text-base text-sm"><slot name="answer" /></p>
            </div>
        </transition>
       
    </div>
</template>

<script setup>
import { defineProps, defineEmits } from 'vue';

defineProps({
    isOpen: Boolean, 
});

defineEmits(['toggle']); 

</script>

<style scoped>

.dropdown-enter-active {
    transition: all 0.3s ease;
}

.dropdown-enter-from {
    opacity: 0;
    transform: translateY(-10px); 
}

.dropdown-enter-to {
    opacity: 1;
    transform: translateY(0); 
}

</style>
