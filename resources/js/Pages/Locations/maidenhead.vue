<template>
    <Head>
        <meta name="description" content="Professional mobile tyre fitting in Maidenhead. 24/7 on-site tyre services for fast replacements and repairs. Call 07442 980101 for same-day assistance.">
        <meta property="og:description" content="Professional mobile tyre fitting in Maidenhead. 24/7 on-site tyre services for fast replacements and repairs. Call 07442 980101 for same-day assistance." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Reliable 24/7 Mobile Tyre Fitting in Maidenhead – Fast On-Site Tyre Replacements and Emergency Repairs</template>

        <template v-slot:title1>Mobile Tyre Fitting in Maidenhead</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere provides top-tier mobile tyre fitting services across Maidenhead,
                ensuring that local drivers can get quick, reliable help whenever they need it.
                Maidenhead, known for its riverside scenery and busy commuter routes, is home to
                drivers who demand fast and efficient tyre services. Whether you’re driving along the <b class="font-semibold">A4</b>,
                parked near Maidenhead’s shopping district, or relaxing at home in areas like Pinkneys Green or Cox Green,
                our mobile tyre fitting vans will meet you where you are. We offer <b class="font-semibold">same-day tyre fitting,
                puncture repairs, and 24/7 emergency callouts</b> to ensure you’re never left stranded.
            </p>
            <p>
                Skip the hassle of visiting a garage. At Tyres Anywhere, we bring the garage to you, making tyre care simple, fast, and stress-free for Maidenhead drivers.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Maidenhead drivers choose Tyres Anywhere for our speed, convenience, and professionalism. Here’s what sets us apart:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        We’re available any time, day or night, to handle your tyre needs.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We prioritize getting to you quickly - typically within 60 minutes of your call.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Convenience:</span>
                        Whether at work, home, or roadside, we deliver mobile tyre fitting directly to you.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our team of certified professionals ensures your tyres are fitted or repaired with care and precision.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        We stock a variety of tyres for all vehicle types, from premium brands to more affordable options.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tyres Anywhere provides a full range of mobile tyre services to meet the needs of Maidenhead drivers. From emergency repairs to scheduled tyre replacements, we’ve got you covered:
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
                    Our mobile tyre fitting service brings new tyres directly to your location, whether you’re at home, in a commercial area, or on the roadside. Whether you’re parked near Maidenhead’s High Street, commuting on the A404(M), or in a quieter neighborhood like Cookham, we’ll come to you with your new tyres and fit them on-site. Our technicians ensure a smooth, balanced installation, so you can get back on the road quickly and safely.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you’ve got a flat tyre or slow air leak, our mobile puncture repair service can fix the problem on-site. Whether you’re in Maidenhead’s town centre, at Ockwells Park, or parked in areas like Furze Platt, we’ll assess the damage and repair your tyre whenever possible. Our service helps you avoid the cost of a full tyre replacement and saves time.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Maidenhead, vehicle downtime due to tyre issues can impact operations. Our mobile tyre fitting for vans and commercial vehicles ensures minimal disruption, allowing your fleet to stay on the road. We provide fast and professional service for commercial vehicles, offering a wide range of tyres designed for heavy-duty use.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Flat tyre in the middle of the night? Tyres Anywhere has you covered with our 24/7 emergency mobile tyre service. Whether you’re stuck on the M4 or parked near Maidenhead Riverside, we’ll arrive quickly to repair or replace your tyre, ensuring you can get back on the road as soon as possible.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Proper tyre pressure and balanced wheels are key to safe driving and fuel efficiency. Our mobile service includes on-site tyre pressure checks and wheel balancing to help prolong the life of your tyres and improve vehicle performance. We provide this service throughout Maidenhead to help you maintain your tyres in top condition.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Our mobile tyre fitting service covers all parts of Maidenhead, ensuring that drivers in residential, commercial, and commuter areas receive fast, professional service:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Maidenhead Town Centre
                    </span>
                    <br>
                    Whether you’re working or shopping in Maidenhead’s busy town centre, we offer fast, on-site tyre assistance to keep you moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Maidenhead Riverside & Bray
                    </span>
                    <br>
                    If you’re spending time by the riverside or near Bray, we’ll come to you for convenient tyre services, whether it’s a repair or replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Residential Areas (Furze Platt, Cox Green, Pinkneys Green)
                    </span>
                    <br>
                    We provide mobile tyre fitting to all residential areas of Maidenhead, ensuring drivers can get their tyres replaced or repaired without the hassle of leaving home.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A404(M), A4 & M4 Routes
                    </span>
                    <br>
                    f you encounter tyre trouble while commuting on these major routes, we provide rapid roadside assistance to keep your journey smooth.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/bourne-end">Bourne End</Link> and
                    <Link class="text-blue-600 underline" href="/locations/marlow">Marlow</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                From local roads to busy motorways, Maidenhead drivers encounter a variety of tyre issues. At Tyres Anywhere, we solve these problems quickly and effectively:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    Punctures from road debris, nails, or sharp objects
                </li>
                <li>
                    Blowouts due to worn tyres or sudden pressure changes
                </li>
                <li>
                    Low tread depth, especially hazardous during wet conditions
                </li>
                <li>
                    Slow leaks from faulty valves or small punctures
                </li>
                <li>
                    Uneven tyre wear from improper tyre pressure or alignment issues
                </li>
            </ol>

            <p class="mt-6">
                By providing fast, on-site solutions to these common problems, we help keep Maidenhead’s drivers safe and secure on the road.
            </p>

            <p class="font-semibold mt-6">
                Supporting {{ location }}'s Community
            </p>

            <p class="mt-2">
                Maidenhead is a vibrant town with a strong community spirit, and Tyres Anywhere is proud to support local drivers with reliable, professional mobile tyre services. Whether you’re commuting to London, managing a fleet of vehicles, or enjoying time in Maidenhead’s town centre, our mobile tyre fitting service offers the convenience you need, without the hassle of visiting a garage.
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
