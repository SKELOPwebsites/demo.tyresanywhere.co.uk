<template>
    <Head>
        <meta name="description" content="Same day mobile tyre fitting in High Wycombe. Get convenient and affordable tyre fitting at your home, work or on the M40 Junction 8. Call Tyres Anywhere Now!">
        <meta property="og:description" content="Same day mobile tyre fitting in High Wycombe. Get convenient and affordable tyre fitting at your home, work or on the M40 Junction 8. Call Tyres Anywhere Now!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Services in High Wycombe – Fast, Reliable, and Convenient</template>

        <template v-slot:title1>Mobile Tyre Fitting in High Wycombe</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we provide professional mobile tyre fitting services throughout High Wycombe and the surrounding areas.
                Whether you need an urgent <b class="font-semibold">tyre replacement, a puncture repair, or routine tyre maintenance</b>, we bring everything directly
                to your location. High Wycombe, known for its bustling town centre, commercial areas, and beautiful surrounding countryside,
                requires fast and reliable tyre solutions. Whether you’re parked near Eden Shopping Centre, driving through the Chiltern Hills,
                or commuting along the M40, our 24/7 mobile tyre service ensures that tyre problems never disrupt your day.
            </p>
            <p>
                No need to visit a garage or wait for roadside assistance. Our fully equipped mobile units come to you,
                handling all tyre issues <b class="font-semibold">quickly and efficiently</b>, ensuring you get back on the road without delay.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in High Wycombe choose Tyres Anywhere for convenience, speed, and professionalism. Here’s why:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Callout:</span>
                        Tyre problems don’t wait, and neither do we. Our service is available day and night to assist you whenever needed.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        We prioritize fast response times, ensuring minimal delay so you can continue your journey without long waits.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Repairs and Fittings:</span>
                        Whether it’s a tyre repair, replacement, or pressure check, we handle it all at your location, saving you the trouble of visiting a garage.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Professional Technicians:</span>
                        Our team is skilled and experienced, ensuring all tyre services are carried out safely and professionally.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Range:</span>
                        From premium tyres to budget-friendly options, we offer a variety of tyres to suit your vehicle and driving needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Our mobile tyre services are designed to meet the needs of drivers in High Wycombe. Whether you need an emergency tyre repair or a scheduled replacement, our mobile units are equipped to handle everything on the spot.
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
                    When it’s time for new tyres, our mobile tyre fitting service delivers them directly to your home, workplace, or roadside location in High Wycombe. Whether you’re near Wycombe Abbey, Eden Shopping Centre, or on the outskirts of town, our technicians will fit and balance your new tyres on-site, ensuring your vehicle is road-ready without the hassle of visiting a garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you’ve experienced a puncture or slow leak, our mobile tyre repair service can fix the problem on-site. Whether you're parked near the Rye or driving through the Chilterns, we’ll assess the damage and, if possible, repair the tyre, saving you from needing a full replacement.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in High Wycombe, tyre problems can lead to costly downtime. Our mobile tyre fitting service for commercial vehicles ensures that your fleet stays operational. We carry a range of tyres designed for vans and commercial use, and we provide fast, professional service to keep your business moving smoothly.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre emergencies can occur at any time, but with our 24/7 mobile tyre service, help is never far away. Whether you’re stuck with a flat on the M40 or need assistance while parked near the town centre, we’ll arrive quickly to repair or replace your tyre, ensuring you’re back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining correct tyre pressure and balanced wheels is crucial for vehicle safety and efficiency. As part of our mobile service, we offer tyre pressure checks and wheel balancing to ensure your tyres wear evenly and your vehicle runs smoothly. This helps prolong tyre life and improves fuel efficiency.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving High Wycombe & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                High Wycombe is a bustling town with a mix of residential areas, busy commercial zones, and scenic countryside. Tyres Anywhere provides mobile tyre services across all parts of High Wycombe, ensuring drivers have access to reliable tyre solutions wherever they are. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        High Wycombe Town Centre
                    </span>
                    <br>
                    Whether you're shopping or working in the town centre, our mobile tyre service ensures quick, on-site assistance when you need it.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Eden Shopping Centre & Surrounding Areas
                    </span>
                    <br>
                    For drivers near Eden Shopping Centre, our mobile tyre fitting service provides fast tyre replacements and repairs at your location.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Chiltern Hills & AONB
                    </span>
                    <br>
                    If you're enjoying the scenic beauty of the Chiltern Hills and encounter a tyre issue, our mobile team will come to you to resolve the problem quickly.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M40 & Major Routes
                    </span>
                    <br>
                    Commuters and drivers on the M40 can rely on our fast roadside assistance for any tyre-related issues while travelling through High Wycombe.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Residential Areas (Booker, Downley, Hazlemere)
                    </span>
                    <br>
                    Whether you're at home in Booker, Downley, or Hazlemere, our mobile tyre fitting service offers convenient, on-site repairs and replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/aylesbury">Aylesbury</Link> and
                    <Link class="text-blue-600 underline" href="/locations/maidenhead">Maidenhead</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyre problems can occur at any time, but Tyres Anywhere is always ready to help. Some common tyre issues we handle in High Wycombe include:
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
                Supporting the High Wycombe Community
            </p>

            <p class="mt-2">
                High Wycombe is a vibrant town, and Tyres Anywhere is proud to support its drivers with fast, reliable mobile tyre services. Whether you're a commuter, a business owner, or simply enjoying the local sights, we ensure that your tyres are always in top condition without the hassle of visiting a garage.
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
