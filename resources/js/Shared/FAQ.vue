<template>

    <h3 class="font-rubik lg:text-3xl sm:text-2xl text-xl font-semibold mb-4 reveal">Frequently Asked Questions</h3>

    <QuestionAnswer class="border-b">
        <template v-slot:default>What areas do you cover?</template>
        <template v-slot:answer>
            We provide <span class="font-semibold">mobile tyre fitting</span> across
            <Link href="/locations/high-wycombe" class="underline">High Wycombe</Link>,
            <Link href="/locations/london" class="underline">London</Link>,
            <Link href="/locations/birmingham" class="underline">Birmingham</Link>,
            <Link href="/locations/oxford" class="underline">Oxford</Link>,
            <Link href="/locations/reading" class="underline">Reading</Link>,
            and many other areas along the M40 corridor. 
            Whether you're in 
            <Link href="/locations/watford" class="underline">Watford</Link>,
            <Link href="/locations/milton-keynes" class="underline">Milton Keynes</Link>,
            <Link href="/locations/bicester" class="underline">Bicester</Link>,
            <Link href="/locations/aylesbury" class="underline">Aylesbury</Link>,
            <Link href="/locations/slough" class="underline">Slough</Link>,
            <Link href="/locations/uxbridge" class="underline">Uxbridge</Link>,
            or <Link href="/locations/maidenhead" class="underline">Maidenhead</Link>,
            our <span class="font-semibold">fully equipped vans</span> can come directly to you.
            If you're unsure about your location,
            <a class="text-blue-600 underline" href="tel:07442980101">give us a call</a>
            and we'll confirm our availability.

            <br><br>
            You can also find the full list of our coverage area <Link href="/sitemap" class="text-blue-700 underline">here</Link>.
        </template>
    </QuestionAnswer>

    <QuestionAnswer class="border-b">
        <template v-slot:default>Are you really available 24/7 for emergency tyre repairs?</template>
        <template v-slot:answer>
            <span class="font-semibold">Yes!</span> We offer 
            <Link href="/mobile-tyre-fitting" class="underline">24/7 emergency mobile tyre fitting</Link>
            and
            <Link href="/mobile-tyre-repair" class="underline">puncture repair services.</Link>
            Whether it's late at night or early morning, our team is on standby to 
            <span class="font-semibold">get you back on the road</span> as quickly as possible.
        </template>
    </QuestionAnswer>

    <QuestionAnswer class="border-b">
        <template v-slot:default>How soon can a technician arrive if I have a flat tyre?</template>
        <template v-slot:answer>
            In most cases, we aim to reach you <span class="font-semibold">within 60 minutes</span>, depending on your exact location and traffic conditions. 
            We prioritise <span class="font-semibold">emergency call-outs</span> to minimise any disruption to your schedule.
        </template>
    </QuestionAnswer>

    <QuestionAnswer class="border-b">
        <template v-slot:default>Can you repair a punctured tyre, or will it need replacing?</template>
        <template v-slot:answer>
            Our technicians will inspect your tyre to see if it's safely <Link href="/mobile-tyre-repair" class="underline">repairable</Link> according to 
            <span class="font-semibold">British Standard guidelines </span>
            (e.g., puncture is within the central ¾ of the tread and less than 6mm in diameter). 
            If it's beyond repair, we'll recommend a 
            <span class="font-semibold">replacement tyre</span>—and fit it <span class="font-semibold">on the spot</span> 
            if you approve.
        </template>
    </QuestionAnswer>

    <QuestionAnswer class="border-b">
        <template v-slot:default>Do you handle car, van, and commercial vehicle tyres?</template>
        <template v-slot:answer>
            <span class="font-semibold">Absolutely.</span> We carry a wide range of 
            <span class="font-semibold">car tyres</span>, 
            <span class="font-semibold">van tyres</span>, 
            and <span class="font-semibold">commercial vehicle tyres</span>—from 
            <span class="font-semibold">premium</span> to <span class="font-semibold">budget</span> brands. 
            Our team is experienced in working with <span class="font-semibold">all vehicle types</span>, 
            ensuring you get the <span class="font-semibold">best fit</span> for your needs.
        </template>
    </QuestionAnswer>

    <QuestionAnswer class="border-b">
        <template v-slot:default>Can you fit run-flat or specialty tyres?</template>
        <template v-slot:answer>
            Yes, we can <span class="font-semibold">fit and balance</span> 
            most <span class="font-semibold">run-flat</span> and <span class="font-semibold">specialty tyres</span>. 
            Please let us know your specific tyre requirements ahead of time 
            so we can ensure we have the 
            <span class="font-semibold">correct size and type</span> in stock.
        </template>
    </QuestionAnswer>

    <QuestionAnswer class="border-b">
    <template v-slot:default>What does the mobile tyre fitting process involve?</template>
    <template v-slot:answer>
        Our <span class="font-semibold">mobile tyre fitter</span> arrives at your 
        <span class="font-semibold">chosen location</span> (home, work, roadside) with all the 
        <span class="font-semibold">equipment</span> needed to remove your old tyre, fit and balance the new one, and perform any necessary checks. 
        You don't need to <span class="font-semibold">travel to a garage</span>—we bring the 
        <span class="font-semibold">service</span> to you.
    </template>
    </QuestionAnswer>

    <QuestionAnswer class="border-b">
        <template v-slot:default>Do you offer wheel alignment or just tyre fitting?</template>
        <template v-slot:answer>
            We primarily focus on <Link href="/mobile-tyre-fitting" class="underline">mobile tyre fitting</Link> and 
            <Link href="/mobile-tyre-repair" class="underline">puncture repairs</Link>. However, if you suspect alignment issues, let us know. 
            We may be able to <span class="font-semibold">recommend a local partner</span> for a full alignment service or discuss 
            <span class="font-semibold">in-van alignment options</span> if available.
        </template>
    </QuestionAnswer>

    <QuestionAnswer class="border-b">
        <template v-slot:default>Do I need to be present during the fitting?</template>
        <template v-slot:answer>
            It's <span class="font-semibold">ideal</span> if you can be there—especially if your vehicle has a 
            <span class="font-semibold">locking wheel nut</span> or if we need 
            <span class="font-semibold">secure access</span>. However, if you 
            <span class="font-semibold">can't be present</span>, just let us know where the 
            <span class="font-semibold">keys</span> and 
            <span class="font-semibold">locking wheel nut</span> are. 
            We aim to make it as convenient as possible for you.
        </template>
    </QuestionAnswer>

    <QuestionAnswer class="border-b">
        <template v-slot:default>How do I pay and what are your prices?</template>
        <template v-slot:answer>
            We offer <span class="font-semibold">transparent pricing</span> with 
            <span class="font-semibold">no hidden costs</span>. You can pay via 
            <span class="font-semibold">cash</span>, 
            <span class="font-semibold">credit/debit card</span>, or 
            <span class="font-semibold">bank transfer</span>—whichever suits you. Pricing varies based on 
            <span class="font-semibold">tyre brand</span>, 
            <span class="font-semibold">size</span>, and whether you require 
            <span class="font-semibold">emergency service</span> outside of normal hours. 
            <a class="text-blue-600 underline" href="tel:07442980101">Contact us</a>
            for an <span class="font-semibold">instant quote</span>.
        </template>
    </QuestionAnswer>

    <QuestionAnswer class="border-b">
        <template v-slot:default>What if I have multiple tyres that need changing?</template>
        <template v-slot:answer>
            No problem at all. Just let us know how many tyres you'd like replaced. 
            We'll bring the <span class="font-semibold">correct tyres</span> and ensure a 
            <span class="font-semibold">quick turnaround</span>, whether you’re in 
            <Link href="/locations/high-wycombe" class="underline">High Wycombe</Link>,
            <Link href="/locations/london" class="underline">London</Link>,
            <Link href="/locations/birmingham" class="underline">Birmingham</Link>, or any of our other 
            <span class="font-semibold">service areas</span>.
        </template>
    </QuestionAnswer>

    <QuestionAnswer class="border-b">
        <template v-slot:default>How do I book a mobile tyre fitting?</template>
        <template v-slot:answer>
            Simply <a class="text-blue-600 underline" href="tel:07442980101">call us</a> or 
            <a class="text-blue-600 underline" href="https://tyresanywhere.com/search-tyres">book online</a>. Have your 
            <span class="font-semibold">tyre size</span> and 
            <span class="font-semibold">vehicle details</span> handy if possible. 
            Our team will help you pick the <span class="font-semibold">right tyres</span> and schedule a convenient 
            <span class="font-semibold">appointment</span>—often the 
            <span class="font-semibold">same day</span> for urgent cases.
        </template>
    </QuestionAnswer>


    <div class="flex flex-col items-center justify-center p-6 mt-10 rounded-lg bg-gray-50 space-y-6 font-exo reveal">
        <img src="/assets/images/main/avatar-group.webp" alt="Avatar group image for contact page" class="w-28" width="126" height="60" loading="lazy">

        <div class="text-center">
            <p class="text-xl font-medium mb-2">Have more questions?</p>
            <p class="font-light text-gray-500 sm:text-base text-sm">
                Can't find the answer you're looking for? 
                Our <span class="font-medium">friendly team</span> is here to help—<span class="font-medium">24/7</span>.
            </p>
        </div>

        <div class="flex flex-col sm:flex-row space-x-0 sm:space-x-3">
            <!-- Chat with WhatsApp Button -->
            <button @click="emitWhatsAppToggle" class="inline-flex items-center mt-5 pr-7 pl-6 py-2.5 bg-green-500 text-white rounded-lg shadow-md hover:bg-green-600 hover:scale-105 transition duration-300">
                
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="h-6 w-6 mr-2">
                    <g><path style="fill-rule:evenodd;clip-rule:evenodd;" d="M20.463,3.488C18.217,1.24,15.231,0.001,12.05,0    C5.495,0,0.16,5.334,0.157,11.892c-0.001,2.096,0.547,4.142,1.588,5.946L0.057,24l6.304-1.654    c1.737,0.948,3.693,1.447,5.683,1.448h0.005c6.554,0,11.89-5.335,11.893-11.893C23.944,8.724,22.708,5.735,20.463,3.488z     M12.05,21.785h-0.004c-1.774,0-3.513-0.477-5.031-1.378l-0.361-0.214l-3.741,0.981l0.999-3.648l-0.235-0.374    c-0.99-1.574-1.512-3.393-1.511-5.26c0.002-5.45,4.437-9.884,9.889-9.884c2.64,0,5.122,1.03,6.988,2.898    c1.866,1.869,2.893,4.352,2.892,6.993C21.932,17.351,17.498,21.785,12.05,21.785z M17.472,14.382    c-0.297-0.149-1.758-0.868-2.031-0.967c-0.272-0.099-0.47-0.149-0.669,0.148s-0.767,0.967-0.941,1.166    c-0.173,0.198-0.347,0.223-0.644,0.074c-0.297-0.149-1.255-0.462-2.39-1.475c-0.883-0.788-1.48-1.761-1.653-2.059    s-0.018-0.458,0.13-0.606c0.134-0.133,0.297-0.347,0.446-0.521C9.87,9.97,9.919,9.846,10.019,9.647    c0.099-0.198,0.05-0.372-0.025-0.521C9.919,8.978,9.325,7.515,9.078,6.92c-0.241-0.58-0.486-0.501-0.669-0.51    C8.236,6.401,8.038,6.4,7.839,6.4c-0.198,0-0.52,0.074-0.792,0.372c-0.272,0.298-1.04,1.017-1.04,2.479    c0,1.463,1.065,2.876,1.213,3.074c0.148,0.198,2.095,3.2,5.076,4.487c0.709,0.306,1.263,0.489,1.694,0.626    c0.712,0.226,1.36,0.194,1.872,0.118c0.571-0.085,1.758-0.719,2.006-1.413c0.248-0.694,0.248-1.29,0.173-1.413    C17.967,14.605,17.769,14.531,17.472,14.382z"/></g>
                </svg>
                Chat with us
            </button>

            <!-- Call Us Button -->
            <a href="tel:07442980101" class="inline-flex items-center mt-5 pr-7 pl-6 py-2.5 bg-wheelfit-300 text-white rounded-lg shadow-md hover:bg-wheelfit-400 hover:scale-105 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="white" viewBox="0 0 24 24"><path d="M21.384,17.752a2.108,2.108,0,0,1-.522,3.359,7.543,7.543,0,0,1-5.476.642C10.5,20.523,3.477,13.5,2.247,8.614a7.543,7.543,0,0,1,.642-5.476,2.108,2.108,0,0,1,3.359-.522L8.333,4.7a2.094,2.094,0,0,1,.445,2.328A3.877,3.877,0,0,1,8,8.2c-2.384,2.384,5.417,10.185,7.8,7.8a3.877,3.877,0,0,1,1.173-.781,2.092,2.092,0,0,1,2.328.445Z"/></svg>
                Call us
            </a>
        </div>
    </div>

</template>

<script setup>
import QuestionAnswer from '../Shared/QuestionAnswer.vue'
import { Link } from "@inertiajs/vue3"

const emitWhatsAppToggle = () => {
    const event = new CustomEvent('toggle-whatsapp');
    window.dispatchEvent(event);
};

</script>

<style scoped>

</style>
