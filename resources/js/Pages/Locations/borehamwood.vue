<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Borehamwood. Fast tyre repairs and replacements at your home, work, or roadside. Call Tyres Anywhere for expert service today!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Borehamwood. Fast tyre repairs and replacements at your home, work, or roadside. Call Tyres Anywhere for expert service today!" />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Professional Tyre Services</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we bring expert mobile tyre fitting services to Borehamwood and the surrounding areas. Whether you’re facing a flat tyre, need an urgent tyre replacement, or simply require tyre maintenance, our mobile service is designed to provide fast, reliable solutions right at your location. Borehamwood, known for its proximity to London and rich film history, is a bustling area where drivers need convenience. Whether you’re at home, at work, or stranded on the roadside, our mobile tyre fitting service ensures you don’t have to waste time at a garage — we come to you.
            </p>
            <p>
                We operate 24/7 to handle tyre emergencies, so no matter where or when you need assistance, Tyres Anywhere is here to help. From puncture repairs to full tyre replacements, we have the equipment and expertise to get you back on the road safely.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                Tyre problems are inconvenient, but with Tyres Anywhere, help is always nearby. Here’s why drivers in Borehamwood trust our mobile tyre fitting services:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Service:</span>
                        Our technicians are available around the clock to provide immediate assistance for any tyre emergency, day or night.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We aim to reach you as quickly as possible, whether you’re in the town centre, near Elstree Studios, or on the A1.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Convenience:</span>
                        No need to drive to a garage or wait for assistance. Our mobile service brings expert tyre care directly to your location.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our team is highly trained and experienced in handling all tyre-related issues, ensuring that your vehicle is safe to drive after any repair or replacement.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Services</span>
                        Whether you need a quick puncture repair or a complete tyre change, we offer a full range of mobile tyre services to meet your needs.
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
                    Whether you need one tyre replaced or an entire set, we bring a variety of premium and budget tyres to your location. Our mobile tyre fitting service covers all types of vehicles, ensuring safe and professional installation on-site.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you’ve suffered a puncture or slow leak, our technicians can repair your tyre on-site, saving you the cost and hassle of a full replacement if a repair is possible.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you rely on your van for work or personal use, a tyre issue can disrupt your plans. Our mobile van tyre fitting ensures that your vehicle is back on the road with minimal downtime.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    Facing a flat tyre or blowout on the road? Our 24/7 emergency mobile tyre service will come to your location quickly, whether you’re at home, work, or roadside.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Areas and Landmarks We Cover in Borehamwood</template>
        <template v-slot:content4>
            <p class="mt-4">
                Borehamwood is a lively area with strong ties to the film industry and easy access to major transport routes. We proudly serve drivers across all parts of Borehamwood, including key locations such as:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Elstree Studios
                    </span>
                    <br>
                    As one of the most iconic film studios in the UK, Elstree Studios is a busy hub of activity. If you encounter tyre trouble while in the area, we’ll arrive promptly to resolve the issue so you can get back to your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Borehamwood Shopping Park
                    </span>
                    <br>
                    Whether you’re shopping or dining at Borehamwood Shopping Park, tyre issues can be a hassle. Our mobile tyre service will come to your location and handle repairs or replacements quickly.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A1 Road & M25 Motorway
                    </span>
                    <br>
                    Borehamwood’s proximity to the A1 and M25 means many commuters and transporters pass through daily. If you face tyre trouble on these busy routes, our mobile units provide fast roadside assistance to get you moving again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Meadow Park
                    </span>
                    <br>
                    If you’re enjoying a day out at Meadow Park and experience tyre trouble, our mobile team will reach you quickly, ensuring your plans aren’t ruined by a flat or damaged tyre.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in Borehamwood</template>
        <template v-slot:content5>
            <p>
                Tyre problems can occur when you least expect them, but with our mobile tyre fitting service in Borehamwood, help is never far away. Here are some common tyre issues we handle:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Punctures caused by sharp objects like nails or debris can often be repaired on-site. We’ll assess the damage and, if possible, repair the tyre to save you from purchasing a new one.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout is a serious issue that requires immediate attention. Our mobile service will replace your blown tyre quickly, ensuring your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Driving on tyres with low tread increases your risk of accidents, especially in wet or icy conditions. We’ll provide replacement tyres to keep your vehicle roadworthy and safe.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak could indicate a valve issue or a minor puncture. Our mobile team will inspect the tyre, fix the leak, and ensure proper tyre pressure to prevent further problems.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven wear is often a sign of alignment or tyre pressure issues. We’ll replace worn tyres and advise on how to maintain proper tyre care in the future.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Borehamwood Today</template>
        <template v-slot:content6>
            <p>
                Don’t let a flat or damaged tyre ruin your plans. With Tyres Anywhere, our mobile tyre fitting service in Borehamwood ensures you receive fast, reliable assistance wherever you are. Whether you need a quick puncture repair, a full tyre replacement, or emergency roadside help, we’re here to get you back on the road swiftly.
            </p>
            <p>
                To schedule your mobile tyre fitting service or request emergency assistance, call us today at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 for all your tyre needs in Borehamwood.
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
