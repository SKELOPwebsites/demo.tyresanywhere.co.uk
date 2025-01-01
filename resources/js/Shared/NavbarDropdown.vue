<template>
    <div @mouseover="open = true" @mouseleave="open = false">
        <slot name="trigger"></slot>
    </div>

    <div
        @mouseover="open = true" @mouseleave="open = false"
        class="absolute shadow-xl rounded-xl mt-4 z-50 left-0 bg-white p-4 transition-all duration-300 ease-in-out transform"
        :class="open ? 'visible opacity-100 scale-100' : 'invisible opacity-0 scale-95'"
    >
        <div
        class="absolute top-[-10px] left-[30px] transform w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[10px] border-b-white shadow-xl transition-all duration-300 ease-in-out"
        :class="open ? 'opacity-100 scale-100' : 'opacity-0 scale-95'">
        </div>

        <slot name="content"></slot>
    </div>
</template>

<script setup>
import { ref } from "vue";

const open = ref(false);

</script>

<style scoped>

</style>
