<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Bagshot. Fast, professional tyre repairs and replacements at your home, work, or roadside. Call Tyres Anywhere for expert service.">
        <meta property="og:description" content="24/7 mobile tyre fitting in Bagshot. Fast, professional tyre repairs and replacements at your home, work, or roadside. Call Tyres Anywhere for expert service." />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Emergency Assistance</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere offers expert mobile tyre fitting services throughout Bagshot and the surrounding areas.
                Whether you're dealing with a <b class="font-semibold">puncture, a flat tyre, or simply need a replacement</b>, our mobile service brings
                everything you need directly to you. No need to drive to a garage or wait for a tow truck — we come to you,
                <b class="font-semibold">whether you're at home, work, or roadside</b>.
            </p>
            <p>
                Bagshot, known for its village charm and close proximity to larger towns and transport links,
                is home to many drivers who rely on us for quick, convenient tyre services. From the peaceful
                Swinley Forest to the bustling roads near the M3, our mobile units cover every corner of Bagshot
                to ensure you never have to worry about a tyre issue slowing you down.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                We know how inconvenient tyre problems can be, and that’s why we’re committed to making the process as easy and stress-free as possible. Here’s why Bagshot residents and drivers trust Tyres Anywhere:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Our emergency service is available around the clock, so you’re never left stranded with a flat tyre, no matter the time of day or night.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We aim to reach you as quickly as possible, whether you’re at home or on the busy roads near the M3.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Convenient Service</span>
                        Forget about having to visit a garage. We come to you, saving you time and the hassle of moving your vehicle.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our experienced tyre fitters can handle all types of vehicles, providing professional and safe tyre replacements or repairs.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Solutions:</span>
                        From puncture repairs to new tyre fittings, we provide a full range of mobile tyre services to meet your needs.
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
                    Need new tyres for your car or van? We bring a wide selection of tyres directly to your location and handle the fitting on-site. Our technicians will install and balance your tyres quickly, ensuring you’re back on the road without delay.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not all flat tyres require replacement. If the damage is minor, such as a small puncture, we can repair it on-site and save you the cost of a new tyre.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you drive a van for work or personal use, tyre issues can cause major disruptions. Our mobile van tyre fitting service ensures that you’re back on the road as soon as possible, with minimal downtime.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    When you’re faced with an unexpected tyre problem, we’re just a call away. Our emergency service ensures that no matter where you are in Bagshot, we’ll arrive quickly and provide the necessary tyre repairs or replacements.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Areas and Landmarks We Cover in Bagshot</template>
        <template v-slot:content4>
            <p class="mt-4">
                Bagshot is a charming village surrounded by beautiful countryside, and we’re proud to serve drivers throughout the area. Our mobile tyre fitting services are available across Bagshot, including key landmarks and popular locations:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Swinley Forest
                    </span>
                    <br>
                    Whether you’re enjoying a day out in the stunning Swinley Forest or commuting through the area, tyre problems can be an unexpected hassle. We can reach you quickly and get you back on track, no matter where you are in the area.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Bagshot High Street
                    </span>
                    <br>
                    Busy with shoppers and local traffic, Bagshot’s high street is a central spot for many drivers. If you experience a flat tyre while parked in town, our mobile unit will come to you and handle the issue right there, allowing you to continue your day without delay.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M3 Motorway
                    </span>
                    <br>
                    As a major route near Bagshot, the M3 sees a lot of traffic, and tyre issues can strike at the worst time. If you find yourself with a tyre problem while on the motorway or nearby service areas, we’ll provide fast roadside assistance to get you moving again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Pennyhill Park
                    </span>
                    <br>
                    Whether visiting this luxury resort or simply driving through the surrounding area, a tyre emergency shouldn’t disrupt your plans. Our mobile service can reach you wherever you are, including the more remote areas around Pennyhill Park.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems in Bagshot</template>
        <template v-slot:content5>
            <p>
                Tyre problems can arise at any time, and knowing what to expect can help you prepare. Here are some of the most common tyre issues we encounter and how we can help:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Sharp objects on the road such as nails, glass, or stones can cause punctures. If your tyre has a minor puncture, we can often repair it on the spot, saving you from a full tyre replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Tyre Blowouts
                    </span>
                    <br>
                    A tyre blowout can be dangerous and is usually the result of under-inflation or significant wear. We’ll come to your location quickly and replace the blown tyre, ensuring your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Driving on worn tyres can reduce traction and increase your risk of accidents, especially in wet conditions. If your tyre tread is worn out, we can replace the tyres with new ones that meet UK safety standards.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow tyre leak may be caused by a faulty valve or a small puncture. We’ll inspect the tyre and repair any leaks, helping you avoid bigger problems down the road.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Bagshot Today</template>
        <template v-slot:content6>
            <p>
                A flat or damaged tyre doesn’t have to ruin your day. With Tyres Anywhere, we bring fast, reliable tyre services right to your location, saving you time and hassle. Whether you need a quick repair, emergency replacement, or a full set of new tyres, our mobile tyre fitting service in Bagshot has you covered.
            </p>
            <p>
                Call us at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a> to book your mobile tyre fitting or for emergency assistance. We’re available 24/7 to ensure you’re never left stranded.
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
