<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Amersham. Fast repairs or replacements at home, work, or roadside. Call Tyres Anywhere at 07442 980101 for quick service.">
        <meta property="og:description" content="24/7 mobile tyre fitting in Amersham. Fast repairs or replacements at home, work, or roadside. Call Tyres Anywhere at 07442 980101 for quick service." />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – Day & Night</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we provide professional mobile tyre fitting services in Amersham and the surrounding areas.
                Whether you’re at home, at work, or facing an unexpected roadside tyre emergency, we bring the tyre shop to you.
                Amersham, known for its beautiful blend of historic charm and modern living, deserves a tyre service that matches
                its unique pace. That’s where we come in — offering <b class="font-semibold">reliable, fast, and professional</b> mobile tyre solutions wherever you are.
            </p>
            <p>
                Whether you're visiting the historic Old Amersham, enjoying the scenic beauty of the Chiltern Hills, or commuting along the A413,
                we can come directly to you to handle all your tyre needs. From puncture repairs to full tyre replacements, we ensure you’re back on the road quickly and safely.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                We know how inconvenient a flat tyre can be, especially when you're pressed for time or stuck far from a garage. That’s why our mobile tyre fitting service is designed to meet you wherever you are, at a time that suits you. Here’s why residents and drivers in Amersham trust Tyres Anywhere:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Service:</span>
                        No matter the time, day or night, our mobile units are ready to provide fast and reliable tyre fitting and repairs.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We understand that time is of the essence. Our technicians are local to Amersham and will reach you quickly, reducing your downtime.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Location-Based Convenience</span>
                        Whether you're parked at home in Amersham, working in the town centre, or stuck near the picturesque River Misbourne, our mobile tyre vans come to you, providing stress-free service.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our highly skilled technicians are equipped to handle everything from puncture repairs to full tyre replacements, ensuring safe and professional service.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Services:</span>
                        From regular tyre fitting to emergency roadside assistance, we offer a comprehensive range of mobile tyre services tailored to your needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Our Mobile Tyre Services in <u>{{ location }}</u></template>
        <template v-slot:content3>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <Link href="/mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you need new tyres but don’t have time to visit a garage, we’ve got you covered. Our mobile tyre fitting service comes directly to your location, replacing your tyres on the spot. We carry a wide selection of tyres for cars, vans, and commercial vehicles, including premium brands and budget options.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Sometimes, a flat tyre can be repaired rather than replaced. Our mobile tyre repair service is ideal for fixing punctures, valve issues, and other minor problems that can extend the life of your tyres. We’ll assess the damage and repair it quickly if it’s safe to do so.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If your van experiences tyre trouble, it can seriously disrupt your day, especially if you rely on your vehicle for work. Our mobile van tyre fitting service ensures that your tyres are replaced or repaired quickly and efficiently, minimizing downtime.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre problems often strike when you least expect them. Whether you’re commuting along the A404 or visiting the Chiltern Open Air Museum, we offer 24/7 emergency tyre fitting and repair services to ensure you’re never stranded for long.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Amersham Landmarks & Local Service Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Amersham is a charming town with a rich history, beautiful countryside, and a thriving community. We proudly serve the entire Amersham area, including the following key locations:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Old Amersham
                    </span>
                    <br>
                    Known for its historic buildings and picturesque streets, Old Amersham is a popular spot for visitors and residents alike. If your vehicle encounters a tyre issue while in this quaint part of town, we can quickly provide on-the-spot tyre services.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Chiltern Hills
                    </span>
                    <br>
                    For those traveling through or exploring the nearby Chiltern Hills, tyre issues can be a real inconvenience. Our mobile units can easily reach you, no matter how remote the location.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Amersham on the Hill
                    </span>
                    <br>
                    The bustling town centre is a hub of activity, and we’re always available to assist customers in this area with their tyre needs. Whether you're parked outside a café or finishing up your shopping, we’ll handle your tyre issue while you go about your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A413 & A404 Routes
                    </span>
                    <br>
                    These busy routes are frequently used by commuters and travelers. If you experience a tyre problem while driving on these major roads, our mobile tyre vans can provide roadside assistance quickly and efficiently.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems and Solutions in Amersham</template>
        <template v-slot:content5>
            <p>
                Tyre problems can arise unexpectedly, and it’s important to know what to do when they occur. Here are some common tyre issues we solve and how our mobile service can help:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A puncture can happen at any time, whether caused by debris, nails, or other sharp objects. If the damage is minor, we’ll repair it on the spot to save you the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout can be dangerous, especially at high speeds. If you experience a blowout, we’ll replace your damaged tyre quickly and safely with one from our stock.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Tread Wear
                    </span>
                    <br>
                    If your tyre tread is worn down to the legal limit (1.6mm in the UK), it’s time for a replacement. We offer a wide selection of tyres to ensure your vehicle remains safe and compliant with UK road safety standards.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Valve Leaks
                    </span>
                    <br>
                    Slow air leaks can often be traced to a faulty tyre valve. Our technicians can replace leaking or damaged valves quickly to restore your tyre’s pressure.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Amersham Today</template>
        <template v-slot:content6>
            <p>
                A flat tyre can happen anytime, but with Tyres Anywhere, you’re never left without help. Our mobile tyre fitting service in Amersham ensures that no matter where you are or what time it is, we’ll be there to assist you. Whether it’s a quick tyre repair or an emergency tyre replacement, our expert technicians are ready to get you back on the road safely and efficiently.
            </p>
            <p>
                For fast and reliable mobile tyre fitting or repair services in Amersham, call us at <a class="text-blue-600 underline" href="tel:07442980101">07442980101</a>.
                We’re available 24/7 for all your tyre needs.
            </p>

            <p class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Need mobile tyre services ASAP?, please call us on <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a></span>
            </p>
        </template>
    </LocationFrame>
</template>

<script setup>
import {Link, Head} from '@inertiajs/vue3'
import LocationFrame from '../../Shared/LocationFrame.vue'

defineProps({
    location: String,
})
</script>

<style scoped>

</style>
