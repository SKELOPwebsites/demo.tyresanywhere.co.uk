<template>
    <Head>
        <meta name="description" content="Fast 24/7 mobile tyre fitting in Isleworth. On-site tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 for quick help today!">
        <meta property="og:description" content="Fast 24/7 mobile tyre fitting in Isleworth. On-site tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 for quick help today!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Convenient Mobile Tyre Services at Isleworth</template>

        <template v-slot:title1>Mobile Tyre Fitting in Isleworth</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere offers professional mobile tyre fitting services throughout Isleworth and surrounding areas. Whether you need an emergency tyre replacement, a puncture repair, or routine tyre maintenance, we bring the service directly to your doorstep. Isleworth, with its mix of residential areas, scenic riverside views, and busy roads, requires a reliable and fast tyre service. Whether you’re parked near Syon Park, in a residential street, or commuting along the A315, our 24/7 mobile tyre service ensures that tyre issues don’t ruin your day.
            </p>
            <p>
                Skip the inconvenience of visiting a garage or waiting for roadside assistance. Our mobile units are fully equipped to handle all your tyre needs on-site, ensuring you get back on the road quickly and safely.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Isleworth drivers rely on Tyres Anywhere for fast, professional, and convenient service. Here’s why:
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
                At Tyres Anywhere, we provide a comprehensive range of mobile tyre services designed to meet the needs of Isleworth drivers. Whether it’s an emergency repair, routine tyre maintenance, or a full tyre replacement, we bring our services directly to you.
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
                    If you need new tyres, our mobile tyre fitting service ensures that we come to your location, whether you’re at home, work, or parked on the roadside. We’ll fit and balance your new tyres on-site, ensuring your vehicle is ready to drive without the hassle of visiting a garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    A flat tyre doesn’t always mean a full replacement is needed. Our mobile tyre repair service can often fix punctures and slow leaks on-site, saving you time and money. Whether you're near Osterley Park or along the A315, we’ll assess and repair the tyre if it’s safe to do so, ensuring you can continue your day.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Isleworth, tyre issues can cause costly delays. Our mobile tyre fitting service for vans and commercial vehicles ensures your fleet stays on the road. We provide a wide range of tyres for commercial use and offer fast, efficient service to keep your business running smoothly.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre emergencies can occur at any time, but with our 24/7 mobile tyre service, you’ll never be left stranded. Whether it’s a flat tyre on the A4 or a blowout near Isleworth town centre, our team will arrive quickly to repair or replace your tyre and get you back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Driving with properly inflated tyres and balanced wheels is essential for safety and vehicle performance. As part of our mobile service, we provide tyre pressure checks and wheel balancing to ensure your tyres wear evenly and your vehicle runs smoothly. This service helps extend tyre life and improve fuel efficiency.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Isleworth is a mix of residential streets, riverside areas, and busy commuter routes, and Tyres Anywhere offers mobile tyre services across all parts of the town. Whether you’re at home, work, or out enjoying the local sights, we bring expert tyre services directly to your location. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Syon Park & Surrounding Areas
                    </span>
                    <br>
                    Whether you're visiting or working near Syon Park, our mobile tyre fitting service offers quick on-site assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A315 & A4 Routes
                    </span>
                    <br>
                    If you’re commuting along these major roads and experience tyre trouble, our mobile service provides fast roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Osterley Park & National Trust Area
                    </span>
                    <br>
                    For drivers in the Osterley Park area, we offer on-site tyre repairs and replacements, ensuring minimal disruption to your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Residential Areas (Thornbury, Worton, Spring Grove
                    </span>
                    <br>
                    Whether you're at home in Thornbury, Worton, or Spring Grove, our mobile tyre fitting service comes directly to your location for convenient tyre repairs and replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/southall">Southall</Link> and
                    <Link class="text-blue-600 underline" href="/locations/heathrow">Heathrow</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                    <br><br>
                    We also serve the whole of <Link class="text-blue-600 underline" href="/locations/london">London</Link>.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyre issues can occur without warning, but Tyres Anywhere is always ready to help. Some common tyre problems we handle in Isleworth include:
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
                Isleworth is a vibrant area with scenic views and bustling roads, and Tyres Anywhere is proud to support its drivers with reliable, convenient mobile tyre services. Whether you're commuting, running errands, or managing a fleet, our mobile tyre fitting service ensures your tyres are in top condition without the hassle of visiting a garage.
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
