<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Epsom. Fast and professional tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 for expert service!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Epsom. Fast and professional tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 for expert service!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Reliable Mobile Tyre Fitting in Epsom</template>

        <template v-slot:title1>Hassle-Free Tyre Solutions at Your Location</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere is your go-to solution for mobile tyre fitting services across Epsom. Whether you need a fast tyre replacement, an emergency repair, or a scheduled fitting, our expert team brings professional tyre services directly to you. Epsom, known for its rich history and proximity to Epsom Downs, is a town that values convenience and efficiency. Whether you’re at home in Ewell Village, working in the town centre, or enjoying a day at the racecourse, our 24/7 mobile tyre fitting service ensures you’re back on the road quickly and safely.
            </p>
            <p>
                We eliminate the hassle of visiting a garage or waiting for roadside assistance. With Tyres Anywhere, our mobile units arrive fully equipped to handle any tyre-related issues, ensuring minimal disruption to your day.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Epsom drivers choose Tyres Anywhere for convenience, speed, and expertise. Here’s what makes us the top choice for mobile tyre services:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Service:</span>
                        Tyre emergencies can happen at any time. Our service is available day or night, ensuring you’re never stuck with a flat for long.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        We prioritize speed and efficiency, responding quickly to your tyre issues to minimize any disruption to your day.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Repairs and Fittings:</span>
                        Our mobile service eliminates the need for garage visits. We come to your location with fully equipped vans to handle any tyre issue on the spot.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our team consists of highly skilled professionals who provide top-quality service and ensure your vehicle is safe and ready to go.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Range:</span>
                        We offer a wide range of tyres, from premium brands to affordable options, ensuring the perfect fit for your vehicle.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tyres Anywhere provides a full range of mobile tyre services designed to meet the needs of drivers in Epsom. From emergency repairs to routine tyre maintenance, we come to your location to deliver expert tyre solutions.
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
                    If you need new tyres, our mobile tyre fitting service brings them directly to your location, whether you’re parked at home in Epsom Downs or enjoying the town centre. We carry a variety of tyres for all vehicle types, and our technicians will fit and balance your new tyres on-site, ensuring your car is road-ready without the need for a garage visit.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you’ve experienced a puncture or slow leak, our mobile tyre repair service can often fix the issue without replacing the tyre. Whether you’re near Rosebery Park or out near Horton Country Park, we’ll assess the damage and, if safe, repair the tyre so you can continue your day without delay.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Businesses in Epsom that rely on vans and commercial vehicles can’t afford downtime caused by tyre problems. Our mobile tyre fitting service for commercial vehicles ensures your fleet stays on the road. We provide fast, professional service to minimize any disruption to your business, offering a wide range of tyres designed for heavy-duty use.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre emergencies don’t follow a schedule, and our 24/7 mobile tyre service ensures you’re never left stranded in Epsom. Whether you’re facing a flat tyre on the A24 or driving through the quieter streets of Ewell, we’ll arrive promptly to repair or replace your tyre and get you back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining correct tyre pressure and balanced wheels is essential for vehicle safety and performance. As part of our mobile service, we offer tyre pressure checks and wheel balancing, ensuring your tyres are properly inflated and your vehicle runs smoothly. This helps improve fuel efficiency and extends the life of your tyres.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Areas We Serve in Epsom</template>
        <template v-slot:content4>
            <p class="mt-4">
                Epsom is a town with a variety of residential, commercial, and rural areas, and Tyres Anywhere covers all locations to ensure drivers have access to quick, professional tyre services. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Epsom Town Centre
                    </span>
                    <br>
                    Whether you’re shopping, working, or enjoying a day out, our mobile tyre fitting service provides quick, on-site assistance to resolve any tyre issues.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Epsom Downs & Ewell Village
                    </span>
                    <br>
                    From the famous racecourse at Epsom Downs to the residential streets of Ewell Village, our mobile units bring expert tyre services right to your door.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A24 & Epsom Bypass
                    </span>
                    <br>
                    For those commuting along these busy routes, we offer fast roadside assistance, ensuring tyre issues don’t cause long delays.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Horton Country Park & Rosebery Park
                    </span>
                    <br>
                    If you’re enjoying the outdoor spaces around Epsom and experience tyre trouble, we’ll come to you and fix the issue quickly.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Langley Vale & Ashtead
                    </span>
                    <br>
                    Residents and businesses in the outskirts of Epsom, including Langley Vale and Ashtead, can rely on our mobile tyre services for fast, convenient solutions.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyres Anywhere is equipped to handle a variety of common tyre issues. Some of the problems we frequently address in Epsom include:
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
                Supporting the Epsom Community
            </p>

            <p class="mt-2">
                Epsom is a historic town with a vibrant community, and Tyres Anywhere is proud to support its residents and businesses with fast, reliable mobile tyre services. Whether you’re a daily commuter, a business owner, or just enjoying Epsom’s scenic beauty, we ensure your tyres are always in great condition without the inconvenience of a garage visit.
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
