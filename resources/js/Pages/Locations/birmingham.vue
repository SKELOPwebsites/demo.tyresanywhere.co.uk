<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Birmingham. Fast tyre repairs or replacements at home, work, or roadside. Call Tyres Anywhere at 07442 980101 for quick service!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Birmingham. Fast tyre repairs or replacements at home, work, or roadside. Call Tyres Anywhere at 07442 980101 for quick service!" />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Professional Tyre Service</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere offers fast, reliable mobile tyre fitting services throughout Birmingham and its surrounding areas. Whether you’ve experienced a flat tyre, need an urgent replacement, or require regular tyre maintenance, our mobile service is designed to meet your needs wherever you are. With Birmingham being one of the UK’s busiest cities, navigating its roads can be challenging enough — let us handle your tyre problems so you don’t have to. Whether you’re at home, at work, or stranded roadside, we’ll come to you with our fully equipped mobile units to provide expert tyre care.
            </p>
            <p>
                Our technicians are available 24/7, providing emergency assistance to get you back on the road quickly. From puncture repairs to full tyre replacements, we bring everything necessary to your location and ensure your tyres are ready for any journey.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                We understand the frustration of tyre problems, but with Tyres Anywhere, you can rest easy. Here’s why drivers in Birmingham rely on our service:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        We’re always on hand to provide fast, professional tyre assistance, no matter what time of day or night you need help.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We aim to reach you as quickly as possible, whether you’re in the heart of the city, near the Bullring, or driving on the M6.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Convenience:</span>
                        Our mobile units come to your location — no need to visit a garage. We fit, repair, or replace tyres right where you are, ensuring maximum convenience.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Skilled Technicians:</span>
                        Our team of experienced technicians can handle a wide range of tyre issues, ensuring professional and safe service every time.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Services</span>
                        From emergency repairs to regular tyre changes, we offer a complete range of mobile tyre services tailored to your needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in <u>{{ location }}</u></template>
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
                    Whether you need one tyre or a full set, we bring high-quality tyres to your location. Our mobile tyre fitting service covers all vehicles, ensuring proper installation and balancing on-site.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you’ve suffered a puncture or a slow leak, our technicians can repair the tyre on-site, saving you time and money by avoiding a full replacement.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Van tyre problems can lead to delays, especially if you rely on your van for business. Our mobile van tyre fitting ensures that you’re back on the road quickly with minimal downtime.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    If you’re stranded on the roadside or dealing with an unexpected blowout, our 24/7 emergency service is available to help. We provide fast tyre repairs and replacements across Birmingham.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Locations and Landmarks We Serve in Birmingham</template>
        <template v-slot:content4>
            <p class="mt-4">
                Birmingham is a bustling city, and our mobile tyre fitting service covers all areas, including key landmarks such as:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Bullring & Grand Central
                    </span>
                    <br>
                    One of the busiest shopping destinations in the UK, the Bullring sees heavy traffic. If you experience tyre trouble while visiting, we’ll come to you for fast service.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Birmingham International Airport
                    </span>
                    <br>
                    If you’re heading to the airport and face a tyre issue, we can provide quick assistance to ensure you don’t miss your flight or pickup.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M6 Motorway
                    </span>
                    <br>
                    As a key route in and out of Birmingham, the M6 is often busy. If you face tyre trouble while driving, we offer roadside assistance to get you moving again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Edgbaston
                    </span>
                    <br>
                    Whether you’re visiting Edgbaston’s famous cricket grounds or simply passing through, our mobile tyre service can come to your location to resolve any tyre issues quickly.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Issues We Fix in Birmingham</template>
        <template v-slot:content5>
            <p>
                Tyre problems can arise unexpectedly, but we’re here to help. Here are some common tyre issues we handle in Birmingham:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Sharp objects like nails or glass can cause punctures. If the damage is minor, we’ll repair it on-site to save you the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A sudden blowout can be dangerous, especially on busy roads. We’ll replace your damaged tyre quickly to ensure your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Worn Tread
                    </span>
                    <br>
                    Worn tyres reduce grip, increasing your risk of accidents, particularly in poor weather. We offer tyre replacements to ensure your vehicle is roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak could indicate a valve issue or minor puncture. We’ll inspect the tyre and fix the issue on-site to prevent further damage.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven wear can be caused by improper alignment or incorrect tyre pressure. We’ll replace worn tyres and provide advice on maintaining proper tyre care.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Birmingham Today</template>
        <template v-slot:content6>
            <p>
                Don’t let a flat or damaged tyre ruin your plans. With Tyres Anywhere, our mobile tyre fitting service in Birmingham ensures that you get fast, reliable assistance wherever you are. Whether it’s a puncture repair, emergency replacement, or routine tyre change, we’re here to get you back on the road safely and efficiently.
            </p>
            <p>
                To book your mobile tyre fitting service or request emergency assistance, call us today at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 to meet all your tyre needs in Birmingham.
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
