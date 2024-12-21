<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Ipswich. Fast and expert tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 for quick service today!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Ipswich. Fast and expert tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 for quick service today!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Same Day Mobile Tyre Services in Ipswich – Fast, Reliable, and Delivered to Your Location</template>

        <template v-slot:title1>Convenient Tyre Solutions at Your Doorstep</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere offers fast and professional mobile tyre fitting services throughout Ipswich and the surrounding areas. Whether you need a tyre replacement, urgent puncture repair, or routine tyre maintenance, we bring our expert services directly to you. Ipswich, known for its historic architecture, bustling waterfront, and busy roads, requires efficient and reliable tyre services. Whether you’re parked at home, near Ipswich Waterfront, or commuting along the A14, our 24/7 mobile tyre service ensures that you’re never stuck with tyre problems for long.
            </p>
            <p>
                Skip the inconvenience of visiting a garage or waiting for assistance. Our mobile units are fully equipped to handle tyre replacements, repairs, and checks, so you can get back on the road quickly and safely.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Ipswich drivers rely on Tyres Anywhere for our reliable, fast, and convenient services. Here’s why:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Available 24/7:</span>
                        Our mobile tyre service operates around the clock, providing assistance when you need it most.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Quick Response:</span>
                        We focus on reaching you quickly, minimizing delays and getting your vehicle back on the road as soon as possible.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Service:</span>
                        Whether it’s a tyre replacement or repair, we handle everything at your location, saving you time and the need for a garage visit.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Certified Technicians:</span>
                        Our experienced team ensures all tyre services are performed to the highest standards, keeping your vehicle safe and road-ready.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Range:</span>
                        From premium brands to more affordable options, we offer tyres to fit all types of vehicles and budgets.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                At Tyres Anywhere, we provide a comprehensive range of mobile tyre services tailored to the needs of Ipswich drivers. Whether it’s an emergency or routine service, we come fully equipped to your location.
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
                    If you need new tyres, our mobile tyre fitting service brings the tyres to your location, whether you're near Ipswich town centre, your home, or work. Our technicians will fit and balance your new tyres on-site, ensuring your car is ready for the road without a garage visit.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every tyre issue requires a full replacement. Our mobile tyre repair service can often fix punctures or slow leaks on-site, saving you both time and money. Whether you're parked near Ipswich Waterfront or at Chantry Park, we’ll assess the damage and repair it on the spot if possible.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Ipswich, tyre issues can disrupt operations and lead to downtime. Our mobile tyre fitting service for vans and commercial vehicles ensures your fleet remains operational. We carry a wide range of tyres suited for commercial use, offering fast and efficient service to keep your business running smoothly.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre emergencies can occur at any time, but our 24/7 mobile tyre service ensures that help is always nearby. Whether you’re dealing with a flat tyre on the A14 or need a replacement in the town centre, we’ll arrive quickly to repair or replace your tyre and get you back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Driving with properly inflated tyres and balanced wheels is essential for safety and performance. As part of our mobile service, we offer tyre pressure checks and wheel balancing to ensure your vehicle runs smoothly, helping extend tyre life and improve fuel efficiency.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Ipswich is a thriving area with a mix of busy roads, residential streets, and commercial zones. Tyres Anywhere provides mobile tyre services across all parts of Ipswich, ensuring drivers have access to quick and reliable tyre solutions wherever they are. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Ipswich Town Centre
                    </span>
                    <br>
                    Whether you're shopping or working in the heart of Ipswich, our mobile tyre fitting service provides quick assistance at your location.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Ipswich Waterfront & Surrounding Areas
                    </span>
                    <br>
                    If you’re near the waterfront or enjoying a day out, our mobile tyre service will come to you for fast on-site repairs or replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A14 & Major Routes
                    </span>
                    <br>
                    Commuters and drivers travelling on the A14 or other major routes can rely on our mobile tyre fitting service for rapid roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Chantry Park & Residential Areas
                    </span>
                    <br>
                    For those living in or near Ipswich’s residential areas, we bring expert tyre services directly to your home, providing convenient, on-site solutions.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Ransomes Industrial Estate
                    </span>
                    <br>
                    Businesses in Ransomes and other commercial areas of Ipswich can trust our mobile tyre service to keep their commercial vehicles operational with minimal downtime.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyre issues can arise unexpectedly, but Tyres Anywhere is ready to help. Some common tyre problems we address in Ipswich include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Road debris or nails can cause punctures, but our technicians can often repair these on-site, saving you the cost of a full replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout is a serious tyre issue that requires immediate attention. Our team will replace the blown tyre and ensure your vehicle is safe to drive again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn tyres reduce traction and safety, especially in wet conditions. We provide replacements to ensure your vehicle remains roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow air leak could be caused by a faulty valve or minor puncture. We’ll inspect and repair the tyre to prevent further damage.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Improper tyre pressure or alignment can cause uneven wear. We’ll replace worn tyres and offer advice on maintaining proper tyre care.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting the {{ location }} Community
            </p>

            <p class="mt-2">
                Ipswich is a busy and growing town, and Tyres Anywhere is proud to support its drivers with fast, reliable mobile tyre services. Whether you’re commuting, managing a business, or exploring the town, we ensure your tyres are always in top condition, without the need for a garage visit.
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
