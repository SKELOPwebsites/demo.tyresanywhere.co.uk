<template>
    <Head>
        <meta name="description" content="Mobile tyre services in Chesham. Fast tyre repairs and fitting at your home, work, or roadside. Call Tyres Anywhere at 07442 980101 for expert service today!">
        <meta property="og:description" content="Mobile tyre services in Chesham. Fast tyre repairs and fitting at your home, work, or roadside. Call Tyres Anywhere at 07442 980101 for expert service today!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Expert Tyre Services Delivered to Your Door</template>

        <template v-slot:title1>Mobile Tyre Fitting Service in {{ location }}</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere is proud to offer professional mobile tyre fitting services throughout Chesham and the surrounding areas.
                Whether you’ve experienced a <b class="font-semibold">flat tyre, need a quick replacement, or require urgent roadside assistance</b>,
                our mobile units bring expert tyre services directly to your location. Chesham is a historic market town surrounded
                by the beauty of the Chiltern Hills, where our 24/7 mobile tyre fitting service ensures that no tyre problem disrupts your day.
                Whether you’re at <b class="font-semibold">home, in the town centre, or driving along the A416</b>, we are here to assist you with fast, reliable tyre services.
            </p>
            <p>
                Avoid the inconvenience of driving to a garage or waiting for a tow truck — Tyres Anywhere comes to you, saving you time and hassle. Our fully equipped mobile vans ensure that your tyre problem is resolved quickly and efficiently.
            </p>
        </template>

        <template v-slot:title2>Why Chesham Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                At Tyres Anywhere, we’re dedicated to making tyre fitting and repairs as convenient as possible. Here’s why drivers in Chesham trust our mobile service:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Tyre problems can occur at any time, and our team is available day or night to provide fast assistance wherever you are.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        We pride ourselves on quick response times, ensuring minimal disruption to your day or commute.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Solutions:</span>
                        No need to visit a garage or wait around. We bring our mobile service to your doorstep, workplace, or roadside, handling tyre repairs and replacements on-site.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Skilled Technicians:</span>
                        Our technicians are trained to handle a wide range of tyre issues, ensuring that your vehicle is serviced safely and professionally.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Services</span>
                        From emergency repairs to routine tyre fitting, we offer a full range of mobile tyre services designed to meet your needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in Chesham</template>
        <template v-slot:content3>

            <p class="mt-4">
                Our mobile tyre fitting service offers everything from emergency tyre repairs to full replacements, ensuring your tyre issues are handled wherever you are in Chesham. We bring expert service and professional equipment directly to you, eliminating the need for a garage visit.
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
                    Need new tyres? Our mobile tyre fitting service delivers a wide selection of tyres, from premium to budget-friendly options, directly to your location. Whether you’re parked at home, at work, or roadside, our technicians will fit and balance your tyres on-site, ensuring your vehicle is safe and road-ready without the hassle of visiting a garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every tyre issue requires a replacement. If your tyre is repairable, we’ll fix it on-site, saving you time and money. Our mobile tyre repair service is perfect for dealing with punctures, slow leaks, or valve problems. We assess the damage and, if it’s safe to do so, repair the tyre so you can continue your journey without needing a full replacement.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For van drivers, tyre issues can lead to significant delays, especially if you rely on your van for work. Our mobile van tyre fitting service ensures that your van’s tyres are replaced or repaired quickly, allowing you to get back to business with minimal downtime. We carry a wide range of tyres specifically designed for vans and commercial vehicles, ensuring performance and safety.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre emergencies don’t follow a schedule, and when they occur, you need immediate assistance. Our 24/7 emergency mobile tyre service is available to provide quick response and expert repairs or replacements. Whether you’re stranded on the A416 or facing a flat tyre at home, we’ll arrive promptly and resolve the issue so you can continue your day with minimal interruption.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Balancing</span>
                    <br><br>
                    Driving with the correct tyre pressure is crucial for safety and efficiency. As part of our service, we provide tyre pressure checks and ensure your tyres are properly inflated. We also offer wheel balancing to ensure a smoother ride and to help prevent uneven tyre wear, extending the life of your tyres.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Key Locations We Serve in Chesham</template>
        <template v-slot:content4>
            <p class="mt-4">
                Chesham is a charming market town with scenic routes and busy streets, and our mobile tyre service covers all areas, ensuring drivers have access to quick and reliable tyre solutions. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Chesham Town Centre
                    </span>
                    <br>
                    Whether you’re shopping or working in the town centre, our mobile tyre fitting service ensures any tyre problem is handled quickly so you can continue your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Chiltern Hills AONB
                    </span>
                    <br>
                    If you’re exploring the Chiltern Hills Area of Outstanding Natural Beauty and encounter tyre trouble, our mobile team will come to your location and fix the issue, allowing you to continue enjoying the stunning scenery.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A416 & B485 Routes
                    </span>
                    <br>
                    These key roads see a lot of traffic from locals and commuters. If you face tyre trouble while driving on these routes, our mobile service provides fast roadside assistance to get you back on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Chesham Moor Gym & Swim
                    </span>
                    <br>
                    Whether you’re visiting Chesham Moor Gym & Swim or passing through, if a tyre issue arises, we’ll come to your location to provide quick repairs or replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Chesham Bois
                    </span>
                    <br>
                    If you live or work in the nearby village of Chesham Bois and experience tyre problems, our mobile tyre service ensures you won’t need to wait for long to have the issue resolved.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in Chesham</template>
        <template v-slot:content5>
            <p>
                Tyre issues can happen unexpectedly, but Tyres Anywhere is here to help. Here are some of the common tyre problems we handle in Chesham:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A puncture caused by debris or sharp objects can often be repaired on-site. If the damage is minor, we’ll patch up the tyre, saving you the cost of a new one.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout is a more serious issue that requires immediate attention. We’ll replace the blown tyre with a new one to ensure your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Worn Tyres
                    </span>
                    <br>
                    Worn tyres reduce grip and increase your risk of accidents. We offer tyre replacements to keep your vehicle roadworthy, especially in poor weather conditions.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak could be caused by a faulty valve or a minor puncture. We’ll inspect the tyre and repair the leak to prevent further damage.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven tyre wear could be caused by improper alignment or incorrect tyre pressure. We’ll replace worn tyres and offer advice on maintaining proper tyre care for the future.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting Chesham’s Community
            </p>

            <p class="mt-2">
                Chesham is a beautiful and historic town, and we’re proud to support its drivers with fast, reliable mobile tyre services. Whether you’re a local resident, commuter, or visitor, our mobile tyre fitting service ensures you can continue enjoying the town without the hassle of tyre trouble.
            </p>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in {{ location }} Today</template>
        <template v-slot:content6>
            <p>
                A flat tyre or puncture doesn’t have to slow you down. With Tyres Anywhere, our mobile tyre fitting service in {{ location }} ensures that you get fast, professional assistance whenever and wherever you need it. Whether you need a tyre repair, an emergency replacement, or routine maintenance, we’re here to help you get back on the road safely.
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
