<template>
    <Head>
        <meta name="description" content="Fast 24/7 mobile tyre fitting in Leighton Buzzard. On-site mobile tyre fitting or repair wherever you are. Call 07442 980101 for immediate assistance.">
        <meta property="og:description" content="Fast 24/7 mobile tyre fitting in Leighton Buzzard. On-site mobile tyre fitting or repair wherever you are. Call 07442 980101 for immediate assistance." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Fast, Reliable Mobile Tyre Fitting in Leighton Buzzard – Available 24/7 for Emergency and Scheduled Services</template>

        <template v-slot:title1>Expert Service at Your Location</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere provides top-quality mobile tyre fitting services across Leighton Buzzard and its surrounding areas. Whether you’re facing an unexpected puncture, need a tyre replacement, or simply require routine tyre maintenance, we’re here to help. Leighton Buzzard’s scenic roads and close proximity to major routes like the A4146 and A5 make it a hub for commuters and local drivers who rely on fast and efficient service. Whether you’re parked near the Grand Union Canal, at home, or caught with a flat tyre near Leighton Buzzard’s Market Square, our mobile tyre-fitting vans are equipped to handle all your tyre needs right on the spot.
            </p>
            <p>
                With Tyres Anywhere, you no longer have to worry about waiting at a garage or being stuck on the roadside. We bring the tyre services directly to you, making tyre care seamless and convenient.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Leighton Buzzard drivers trust Tyres Anywhere for our dedication to fast, reliable, and convenient service. Here’s why we’re the top choice:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        We’re here for you around the clock, no matter when tyre trouble strikes.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Quick Response Times:</span>
                        We aim to arrive within 60 minutes to get you back on the road as soon as possible.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Service to Any Location:</span>
                        Whether at home, work, or roadside, our mobile units provide on-site solutions.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Professional Technicians:</span>
                        Our team of certified technicians ensures the job is done efficiently and to a high standard.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        From high-end brands to budget options, we have tyres to suit all vehicles and price ranges.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tyres Anywhere offers a comprehensive range of mobile tyre services throughout Leighton Buzzard, ensuring that both individual drivers and businesses are covered. Our services include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <Link href="/mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Our mobile tyre fitting service allows us to fit your new tyres wherever you are in Leighton Buzzard. Whether you’re at your home in the city, parked near Rushmere Country Park, or stuck along the A4146, we’ll bring the tyres and install them on-site with precision. Our vans are equipped to handle all types of tyre changes, making the process quick and hassle-free.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you’ve got a puncture or your tyres are losing air, our mobile puncture repair service can come to your location in Leighton Buzzard. Whether you’re at home, at the supermarket, or near Tiddenfoot Waterside Park, we’ll assess the damage and repair the tyre if possible, ensuring a safe and efficient fix.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For local businesses in Leighton Buzzard, downtime due to tyre issues can be costly. Tyres Anywhere provides mobile tyre fitting for vans and commercial vehicles, ensuring that your business keeps moving without delays. We offer a wide range of tyres designed for commercial use and provide fast, professional service to minimize disruptions.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Flat tyre in the middle of the night? No problem. Our 24/7 emergency mobile tyre service ensures that you’re never left stranded in Leighton Buzzard. Whether you’re caught on the A5 or need assistance in town, we’ll be there to repair or replace your tyre and get you back on your journey safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining the right tyre pressure and ensuring balanced wheels are essential for safety and fuel efficiency. As part of our mobile service, we offer on-site tyre pressure checks and wheel balancing in Leighton Buzzard, helping to extend tyre life and improve vehicle performance.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                We provide mobile tyre fitting across all areas of Leighton Buzzard and the surrounding towns, ensuring no driver is left without support:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Leighton Buzzard Town Centre
                    </span>
                    <br>
                    If you’re shopping or working in the town center, we provide fast on-site tyre assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Rushmere Country Park
                    </span>
                    <br>
                    Whether you’re enjoying a day out or commuting nearby, we’ll come to you for prompt tyre services.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A5 & A4146 Routes
                    </span>
                    <br>
                    These key roads see plenty of traffic, and if you encounter tyre issues while driving, we’ll provide rapid roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/milton-keynes">Milton Keynes</Link> and
                    <Link class="text-blue-600 underline" href="/locations/luton">Luton</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyres Anywhere is equipped to handle a wide range of tyre issues commonly experienced by drivers in Leighton Buzzard. Here are some of the most frequent problems we solve:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    Punctures from road debris or sharp objects
                </li>
                <li>
                    Tyre blowouts due to worn-out tread or overinflation
                </li>
                <li>
                    Low tread depth leading to reduced traction, especially in wet conditions
                </li>
                <li>
                    Slow leaks caused by minor damage or faulty valves
                </li>
                <li>
                    Uneven tyre wear from misaligned wheels
                </li>
            </ol>

            <p class="mt-6">
                By addressing these common tyre problems quickly and efficiently, we help keep Leighton Buzzard’s drivers safe on the road.
            </p>

            <p class="font-semibold mt-6">
                Supporting the {{ location }} Community
            </p>

            <p class="mt-2">
                Leighton Buzzard is a vibrant market town with a strong sense of community, and Tyres Anywhere is proud to serve its local drivers. Whether you’re commuting to work, enjoying a day out at one of the town’s landmarks, or managing a business fleet, our mobile tyre service offers a stress-free solution to all your tyre needs. Our focus on convenience and fast response times ensures that Leighton Buzzard drivers can rely on us, no matter the situation.
            </p>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in {{ location }} Today</template>
        <template v-slot:content6>
            <p>
                Don’t let a flat tyre slow you down. Tyres Anywhere offers professional mobile tyre fitting in {{ location }}, ensuring you receive quick, expert assistance wherever you are. From emergency repairs to routine maintenance, we’ve got you covered.
            </p>
            <p>
                To schedule your mobile tyre fitting or request emergency assistance, call us today at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 for all your tyre needs in {{ location }}.
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
