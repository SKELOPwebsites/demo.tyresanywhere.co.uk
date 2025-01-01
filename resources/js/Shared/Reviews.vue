<template>
    <div class="mt-20 font-rubik">
        <h2 class="text-center lg:text-4xl sm:text-3xl text-2xl font-bold mb-10">What Our Customers Are Saying</h2>

        <div>
            <Swiper
                :modules="[EffectCoverflow, Autoplay]"
                :loop="true"
                :effect="'coverflow'"
                :autoplay="{ delay: 5000, disableOnInteraction: false }"
                :centeredSlides="true"
                :slidesPerView="'auto'"
                :coverflowEffect="{
                rotate: 0,
                stretch: -10,
                depth: 0,
                modifier: 1,
                slideShadows: false,
                }"
                >

                <SwiperSlide>
                    <div class="review-container">
                        <div class="flex items-center">
                            <div class="profile-picture bg-[#AA47BC]">T</div>
                            <div>
                                <span class="font-medium">Tessa Parker</span>
                                <div class="stars flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-xl font-light">Great service! Turned up within 20 mins of the phone call and great tyre and friendly. Saved my Christmas plans 😁</p>
                    </div>
                </SwiperSlide>

                <SwiperSlide>
                    <div class="review-container">
                        <div class="flex items-center">
                            <div class="profile-picture bg-[#EF6C00]">C</div>
                            <div>
                                <span class="font-medium">Cicely Hamdard</span>
                                <div class="stars flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-xl font-light">Blew a tyre on the motorway, got a recovery truck to take me to a petrol station and Ali arrived promptly and was polite, fitted the new tyre within a matter of minutes. Highly recommend</p>
                    </div>
                </SwiperSlide>

                <SwiperSlide>
                    <div class="review-container">
                        <div class="flex items-center">
                            <div class="profile-picture bg-[#0088D1]">I</div>
                            <div>
                                <span class="font-medium">Ibrahim Yasin</span>
                                <div class="stars flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-xl font-light">Absolutely great job, have no complaints great service and both workers provided a great service highly recommended.</p>
                    </div>
                </SwiperSlide>

                <SwiperSlide>
                    <div class="review-container">
                        <div class="flex items-center">
                            <div class="profile-picture bg-[#8B6E63]">D</div>
                            <div>
                                <span class="font-medium">David Vachell</span>
                                <div class="stars flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-xl font-light">These guys provided an excellent out of hours service. I can't recommend them enough.</p>
                    </div>
                </SwiperSlide>

                <SwiperSlide>
                    <div class="review-container">
                        <div class="flex items-center">
                            <div class="profile-picture bg-[#BF360D]">C</div>
                            <div>
                                <span class="font-medium">Charlotte Garside</span>
                                <div class="stars flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-xl font-light">Clear and helpful communication and speedy resolution of flat tyre. Highly recommend!</p>
                    </div>
                </SwiperSlide>

                <SwiperSlide>
                    <div class="review-container">
                        <div class="flex items-center">
                            <div class="profile-picture bg-[#004C3E]">H</div>
                            <div>
                                <span class="font-medium">Hannah Corcoran</span>
                                <div class="stars flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m21.5 9.757-5.278 4.354 1.649 7.389L12 17.278 6.129 21.5l1.649-7.389L2.5 9.757l6.333-.924L12 2.5l3.167 6.333z"/></svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-xl font-light">Very efficient and a pleasure to do business with 😎</p>
                    </div>
                </SwiperSlide>
            </Swiper>
        </div>
    </div>
</template>

<script setup>
import { Swiper, SwiperSlide } from 'swiper/vue';
import { EffectCoverflow, Autoplay } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/effect-coverflow';


</script>

<style scoped>

.review-container{
    display: flex;
    flex-direction: column;
    gap: 30px;

    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.profile-picture{
    width: 50px;
    height: 50px;
    font-size: 22px;
    color: white;
    border-radius: 50%;

    display: flex;
    justify-content: center;
    align-items: center;
    margin-right: 20px;
}

.stars svg{
    width: 22px;
    height: 22px;
    fill: #FDCC0D;
}

.swiper-slide{
    width: 320px;
    height: auto;
    margin-top: 20px;
    margin-bottom: 20px;
}

</style>
