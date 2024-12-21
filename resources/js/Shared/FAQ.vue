<template>

    <h3 class="text-2xl font-semibold">FAQs</h3>

    <QuestionAnswer class="border-b">
        <template v-slot:default>Can Tyres Anywhere technicians repair punctured tyres?</template>
        <template v-slot:answer>
            Tyres Anywhere will assess your tyre to determine whether it can be safely <Link href="/mobile-tyre-repair" class="text-blue-700 underline">repaired</Link>.
            If the puncture is within the <span class="font-semibold">central ¾ of the tyre tread and less than 6mm in diameter</span>,
            we can likely repair it following British Standard guidelines.
            However, if the damage is outside this area or too extensive, we will recommend replacing the tyre.
        </template>
    </QuestionAnswer>
    <QuestionAnswer class="border-b">
        <template v-slot:default>How long does a mobile tyre fitting take?</template>
        <template v-slot:answer>
            In most cases, a mobile tyre fitting can be completed <span class="font-semibold">within 30 to 60 minutes</span>, depending on the complexity of the issue.
            We aim to get you back on the road as quickly as possible without sacrificing quality or safety.
        </template>
    </QuestionAnswer>
    <QuestionAnswer class="border-b">
        <template v-slot:default>What areas do you cover?</template>
        <template v-slot:answer>
            We offer mobile tyre fitting across a wide service area, including
            <Link href="/locations/oxford" class="text-blue-700 underline">Oxford</Link>,
            <Link href="/locations/high-wycombe" class="text-blue-700 underline">High Wycombe</Link>
            and <Link href="/locations/beaconsfield" class="text-blue-700 underline">Beaconsfield</Link>
            <br><br>
            Additionally, we can extend our services to larger cities such as

            <Link href="/locations/birmingham" class="text-blue-700 underline">Birmingham</Link>,
            and <Link href="/locations/london" class="text-blue-700 underline">London</Link>

            for more extensive coverage.
            <br><br>
            You can find the full list of our coverage area <Link href="/sitemap" class="text-blue-700 underline">here</Link>.
        </template>
    </QuestionAnswer>
    <QuestionAnswer class="border-b">
        <template v-slot:default>Can you fit all types of tyres?</template>
        <template v-slot:answer>
            Yes, our mobile service can fit a wide range of tyres, including <span class="font-semibold">car, van, and 4x4 tyres</span>.
            We stock various brands and tyre types, from premium to budget, to suit your specific vehicle and requirements.
        </template>
    </QuestionAnswer>
    <QuestionAnswer class="border-b">
        <template v-slot:default>What should I do if I get a flat tyre at night?</template>
        <template v-slot:answer>
            Our <span class="font-semibold">emergency mobile tyre fitting</span> service is available <span class="font-semibold">24/7</span>, ensuring help is just a phone call away no matter the time of day or night.
            We'll dispatch a technician to your location as soon as possible to assist with your tyre issue.
        </template>
    </QuestionAnswer>
    <QuestionAnswer class="border-b">
        <template v-slot:default>How do I know when my tyres need replacing?</template>
        <template v-slot:answer>
            Tyres must legally have at least <span class="font-semibold">1.6mm of tread depth</span> across the central three-quarters of the tyre.
            If your tread is worn below this level, your tyres need replacing.
            <br><br>
            Additionally, look out for signs of damage, such as cuts, bulges,
            or sidewall cracking, which may also indicate the need for a replacement.
        </template>
    </QuestionAnswer>
    <QuestionAnswer class="border-b">
        <template v-slot:default>Do I need to be present for the tyre fitting?</template>
        <template v-slot:answer>
            You don’t necessarily need to be present for the tyre fitting, as long as we have clear access to your vehicle and any necessary keys or
            locking wheel nuts. When booking the service, you can provide us with instructions on where the vehicle is located and how to access it.
            <br><br>
            However, if you'd prefer to be there, you're more than welcome to stay during the fitting.
            Our goal is to make the process as convenient as possible for you.
        </template>
    </QuestionAnswer>


    <div class="flex flex-col items-center justify-center p-6 rounded-lg bg-gray-50 space-y-6">
        <img src="/assets/images/main/avatar-group.webp" alt="Avatar group image for contact page" class="w-28">

        <div class="text-center">
            <p class="font-montserrat text-xl font-medium mb-2">Still have questions?</p>
            <p class="text-gray-500 sm:text-base text-sm">Can’t find the answer you’re looking for? Please chat to our friendly team.</p>
        </div>

        <Link href="/contact-us" class="bg-gray-300 font-medium text-sm cursor-pointer px-5 py-2.5 rounded hover:underline transition duration-300">Get in touch</Link>
    </div>

</template>

<script setup>
import QuestionAnswer from '../Shared/QuestionAnswer.vue'
import { Link } from "@inertiajs/vue3"
</script>

<style scoped>

</style>
