<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Liverpool. Fast mobile tyre repairs and replacements at home, work, or roadside. Call Tyres Anywhere for immediate service.">
        <meta property="og:description" content="24/7 mobile tyre fitting in Liverpool. Fast mobile tyre repairs and replacements at home, work, or roadside. Call Tyres Anywhere for immediate service." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Fast, Reliable 24/7 Mobile Tyre Services in Liverpool – Quick Response, Delivered Directly to You</template>

        <template v-slot:title1>Convenient, On-Site Tyre Care in Liverpool</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we bring expert mobile tyre fitting services to Liverpool, providing professional solutions whenever and wherever you need them. Whether you’re facing a flat tyre on a busy city street, need a puncture repair at home, or require scheduled tyre maintenance, our mobile service ensures you never have to worry. Liverpool’s diverse cityscape, from the bustling docks to the busy roads like the M62 and A561, means drivers often need a fast and efficient service. Whether you’re near Liverpool ONE, on the road to Anfield Stadium, or parked in a residential area like Toxteth or Wavertree, our 24/7 mobile tyre fitting vans can assist you swiftly and efficiently.
            </p>
            <p>
                No more waiting at a garage or being stuck by the roadside for hours. Tyres Anywhere brings the garage to you, offering fast and hassle-free tyre care across Liverpool.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Liverpool drivers trust Tyres Anywhere for our fast, reliable, and convenient mobile tyre services. Here’s why we’re the go-to choice:
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
                Our comprehensive mobile tyre fitting service in Liverpool covers everything from emergency repairs to routine tyre replacements. We offer the following key services:
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
                    Wherever you are in Liverpool, our mobile tyre fitting vans can reach you. Whether you’re parked by the iconic Albert Dock, commuting on the A59, or stuck near the University of Liverpool, our mobile units bring new tyres to your vehicle and fit them on-site. No need to wait around at a garage – we come to you, making tyre fitting fast and hassle-free.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Punctures can happen anywhere, from city streets to quiet residential roads. Our mobile tyre repair service can come to your location in Liverpool, whether you’re near Sefton Park or shopping at Liverpool ONE. We’ll assess the damage and carry out on-site repairs if possible, saving you the cost of a replacement.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Liverpool, tyre issues can cause unwanted delays. Our mobile tyre fitting service for vans and commercial vehicles ensures your fleet remains operational. We offer a wide range of tyres for commercial vehicles and provide fast, efficient service, reducing downtime and keeping your business moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Flat tyre at 2 AM on the M62? Don’t worry – our 24/7 emergency mobile tyre service is just a call away. We offer rapid response across Liverpool, from the city center to the outskirts, ensuring that help is never far away. Whether you need a repair or a full tyre replacement, we’ll get you back on the road safely and quickly.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining proper tyre pressure and wheel balance is essential for safe driving. As part of our mobile service, we offer on-site tyre pressure checks and wheel balancing in Liverpool, helping to ensure even tyre wear, better fuel efficiency, and improved vehicle handling.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Our mobile tyre fitting service covers all areas of Liverpool, including the city center and surrounding towns. Wherever you are, we’re ready to provide fast and reliable tyre assistance:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Liverpool City Centre
                    </span>
                    <br>
                    We offer mobile tyre services in the heart of Liverpool, near key locations like Liverpool ONE, St George’s Hall, and the Albert Dock.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Anfield & Goodison Park
                    </span>
                    <br>
                    Whether you’re near the famous football stadiums or in the surrounding neighborhoods, we’ll reach you quickly for on-site tyre repairs or replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Sefton Park & Aigburth
                    </span>
                    <br>
                    If you’re enjoying the green spaces of Sefton Park or commuting through Aigburth, we’re just a call away for any tyre issues.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/manchester">Manchester</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Liverpool’s roads and weather can lead to various tyre issues, but Tyres Anywhere is ready to solve them all. Here are some of the common problems we fix:
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
                By addressing these common issues quickly and effectively, we ensure that Liverpool’s drivers remain safe and confident on the road.
            </p>

            <p class="font-semibold mt-6">
                Supporting the {{ location }} Community
            </p>

            <p class="mt-2">
                Liverpool is a city full of character, from its historic waterfront to its vibrant cultural scene. At Tyres Anywhere, we are proud to serve the community with reliable mobile tyre services that keep local drivers on the move. Whether you’re commuting, running errands, or managing a business fleet, our mobile tyre fitting service provides the convenience and peace of mind you need.
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
