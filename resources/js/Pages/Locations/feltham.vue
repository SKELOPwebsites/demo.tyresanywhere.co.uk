<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Feltham. Fast, reliable tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 for expert service now!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Feltham. Fast, reliable tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 for expert service now!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in Feltham</template>

        <template v-slot:title1>Fast, Convenient, and Delivered to Your Location</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere offers professional mobile tyre fitting services across Feltham and its surrounding areas. Whether you need an emergency tyre replacement, a puncture repair, or a scheduled fitting, we bring expert services directly to your doorstep. Feltham, known for its close proximity to Heathrow Airport and its bustling residential and commercial areas, requires quick, reliable solutions for busy drivers. Whether you’re parked at home in Hanworth, commuting along the A312, or working near Feltham Arena, our 24/7 mobile tyre service ensures you’re never stuck with a tyre problem.
            </p>
            <p>
                Forget the inconvenience of visiting a garage or arranging for a tow. Tyres Anywhere brings fully equipped mobile units to your location, handling all your tyre needs on the spot and saving you time and hassle.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Tyres Anywhere is the preferred choice for drivers in Feltham looking for convenience, speed, and quality. Here’s why:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Available 24/7:</span>
                        Whether it’s early in the morning or late at night, our mobile tyre service is available to assist you whenever tyre trouble strikes.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        We prioritize fast service, ensuring minimal waiting time and disruption to your day.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Repairs and Fittings:</span>
                        We handle everything on-site, whether it’s fitting new tyres or repairing punctures, so you don’t have to visit a garage.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our team of skilled technicians ensures that all tyre services are done safely and professionally, right at your location.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Range:</span>
                        We carry a wide range of tyres, from premium to budget-friendly options, so you can choose the best fit for your vehicle and budget.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Our comprehensive mobile tyre services in Feltham are designed to meet the diverse needs of drivers in the area. From emergency tyre repairs to routine maintenance, we bring the service to your location.
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
                    Need new tyres? Our mobile tyre fitting service ensures that we come to you, wherever you are in Feltham. Whether you’re at home in Hanworth, working near Feltham Green, or parked near the High Street, our technicians will bring new tyres suited to your vehicle. We’ll fit and balance your tyres on-site, saving you time and making sure your vehicle is road-ready without the hassle of visiting a garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not all tyre issues require replacements. If you’ve experienced a puncture or slow leak, our mobile tyre repair service can often fix the problem on the spot. Whether you’re near Feltham Park or along the A316, we’ll assess the damage and, if safe to do so, repair the tyre to get you back on the road quickly.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Feltham that rely on vans and commercial vehicles, tyre issues can lead to costly downtime. Our mobile tyre fitting service for commercial vehicles ensures that your fleet stays operational with minimal disruption. We provide fast and efficient tyre replacements or repairs, so your business continues running smoothly.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre trouble can happen at any time, but with our 24/7 mobile tyre service, you’ll never be stranded for long. Whether you’re facing a flat tyre on the A312 or a blowout near Heathrow Airport, our emergency mobile tyre team will arrive promptly to repair or replace your tyre and get you back on your way safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining proper tyre pressure and balanced wheels is crucial for safety and efficiency. As part of our mobile service, we offer tyre pressure checks and wheel balancing, ensuring your vehicle operates smoothly and your tyres last longer. This service also helps improve fuel efficiency and driving comfort.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Areas We Serve in Feltham</template>
        <template v-slot:content4>
            <p class="mt-4">
                Feltham is a bustling town with a mix of residential neighbourhoods, commercial areas, and major roadways. Tyres Anywhere offers mobile tyre services across all parts of Feltham, ensuring that drivers have access to fast, reliable tyre solutions. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Feltham Town Centre
                    </span>
                    <br>
                    Whether you’re shopping or working in the heart of Feltham, our mobile tyre service provides quick assistance right where you are.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Hanworth & Feltham Green
                    </span>
                    <br>
                    For drivers living in Hanworth or near Feltham Green, we offer convenient, on-site tyre repairs and replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Heathrow Airport Area
                    </span>
                    <br>
                    If you work or travel near <Link class="underline text-blue-600" href="/locations/heathrow">Heathrow</Link> Airport and experience tyre trouble, our mobile service ensures you won’t be delayed for long.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A316 & A312 Routes
                    </span>
                    <br>
                    These major roads see heavy traffic, and if you encounter tyre problems while commuting, our mobile team provides rapid roadside assistance to get you back on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Feltham Arenas & Leisure Areas
                    </span>
                    <br>
                    Whether you’re enjoying a day out at Feltham Arenas or nearby leisure spots, our mobile units will come to your location and resolve any tyre issues on the spot.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyre problems can arise unexpectedly, but Tyres Anywhere is always ready to help. Some of the common tyre issues we address in Feltham include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A puncture caused by sharp objects can often be repaired on-site, saving you the cost of a full tyre replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A sudden blowout requires an immediate tyre replacement. We’ll arrive quickly to fit a new tyre and ensure your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn-out tyres reduce road grip and increase the risk of accidents. We offer tyre replacements to keep your vehicle safe and roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    Slow leaks can lead to flat tyres over time. We’ll identify the issue and fix it on-site, preventing further damage.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Improper tyre pressure or alignment can cause uneven wear. We’ll replace any worn tyres and provide advice on maintaining proper tyre care in the future.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting the Feltham Community
            </p>

            <p class="mt-2">
                Feltham is a busy and growing community, and Tyres Anywhere is proud to support local drivers with reliable, professional mobile tyre services. Whether you’re commuting, running a business, or travelling near Heathrow, our mobile tyre fitting service ensures you’re never far from expert help.
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
