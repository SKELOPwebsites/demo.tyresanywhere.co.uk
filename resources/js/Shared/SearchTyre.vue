<template>
    <div class="flex flex-col sm:flex-row h-full bg-wheelfit-300 p-5 sm:p-10 gap-8 mt-8">
        <div class="flex-1 flex flex-col justify-between gap-4 text-white font-rubik py-5">
            <div>
                <h2 class="uppercase text-2xl sm:text-3xl lg:text-4xl font-bold reveal">Find your tyres</h2>
                <p class="lg:text-lg text-base font-light text-gray-100 reveal">Use our tyre size search to find the perfect fit for your vehicle today.</p>
            </div>

            <div class="flex flex-col text-sm lg:text-base lg:flex-row items-start gap-0 lg:gap-1 mt-auto font-medium reveal">
                <p>Need Help?</p>
                <button type="button" class="underline cursor-pointer text-left font-extralight" @click="openModal">
                    How to check your vehicle's tyre size
                </button>
            </div>
        </div>

        <div v-if="isModalOpen"
            @click.self="closeModal"
            class="fixed inset-0 bg-black bg-opacity-50 overflow-hidden flex justify-center items-center z-50">

            <div class="bg-white p-5 rounded-lg w-5/6 lg:w-2/3 font-rubik flex flex-col items-center">
                <h2 class="font-medium pt-5 text-2xl sm:text-3xl mb-4 text-wheelfit-300 text-center">How to check your vehicle's tyre size</h2>
                <p class="text-center text-sm sm:text-base font-light text-gray-600 px-5">To find your car's tyre size, check the sidewall of your current tyres. You'll see three numbers that represent the width, profile, and rim size (e.g., 205/55 R16). You can also find this information in your vehicle's handbook or on a sticker inside the door jam or fuel cap door. Make sure to match these numbers when buying new tyres for the best fit.</p>
                <img
                class="w-2/3 h-auto mx-auto"
                src="/assets/images/main/tyre-size-gd-trn.webp"
                srcset="/assets/images/main/tyre-size-gd-trn.webp 720w,
                            /assets/images/main/tyre-size-gd-trn-500.webp 500w,
                            /assets/images/main/tyre-size-gd-trn-300.webp 300w,
                            /assets/images/main/tyre-size-gd-trn-150.webp 150w"
                sizes="(max-width: 576px) calc(100vw - 65px),(max-width: 768px) 500px, (max-width: 992px) 320px, (max-width: 1200px) 344px, (max-width: 1400px) 359px, 356px"
                alt="Tyre Size Guide"
                loading="lazy"
                />
                <div class="w-full mt-5 border-b border-gray-300"></div>
                <button class="mt-4 bg-red-500 text-white py-4 px-14 rounded-lg hover:bg-wheelfit-400 transition duration-300" @click="closeModal">CLOSE</button>
            </div>
        </div>

        <div class="flex-1 flex justify-center flex-col bg-white gap-4 lg:gap-8 p-2 sm:p-6 rounded-md shadow-lg reveal">
            <img
                class="w-full lg:px-5"
                src="/assets/images/main/tyre-size-gd-trn.webp"
                srcset="/assets/images/main/tyre-size-gd-trn.webp 720w,
                            /assets/images/main/tyre-size-gd-trn-500.webp 500w,
                            /assets/images/main/tyre-size-gd-trn-300.webp 300w,
                            /assets/images/main/tyre-size-gd-trn-150.webp 150w"
                            sizes="(max-width: 576px) calc(100vw - 65px),
                                    (max-width: 768px) 500px,
                                    (max-width: 992px) 400px,
                                    (max-width: 1200px) 344px,
                                    (max-width: 1400px) 356px,
                                    356px"
                width="720"
                height="300"
                alt="Tyre Size Guide"
                loading="lazy"
            />

            <a href="https://tyresanywhere.com/search-tyres" class="text-white bg-wheelfit-300 w-auto lg:mx-5 lg:h-12 h-10 rounded-lg cursor-pointer flex items-center justify-center hover:bg-wheelfit-400 transition duration-300 hover:scale-105">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="white" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 513.749 513.749"><g><path d="M504.352,459.061l-99.435-99.477c74.402-99.427,54.115-240.344-45.312-314.746S119.261-9.277,44.859,90.15   S-9.256,330.494,90.171,404.896c79.868,59.766,189.565,59.766,269.434,0l99.477,99.477c12.501,12.501,32.769,12.501,45.269,0   c12.501-12.501,12.501-32.769,0-45.269L504.352,459.061z M225.717,385.696c-88.366,0-160-71.634-160-160s71.634-160,160-160   s160,71.634,160,160C385.623,314.022,314.044,385.602,225.717,385.696z"/></g></svg>
                Search tyres
            </a>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const isModalOpen = ref(false);

const openModal = () => {
  isModalOpen.value = true; 
};

const closeModal = () => {
  isModalOpen.value = false;
 
};
</script>

<style scoped>

</style>
