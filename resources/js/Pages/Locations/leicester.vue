<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Leicester – fast service at home, work, or roadside. Call 07442 980101 for immediate tyre repairs or replacements today.">
        <meta property="og:description" content="24/7 mobile tyre fitting in Leicester – fast service at home, work, or roadside. Call 07442 980101 for immediate tyre repairs or replacements today." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>24/7 Mobile Tyre Services in Leicester – Quick Response, On-Site Tyre Fitting Anytime, Anywhere</template>

        <template v-slot:title1>Mobile Tyre Fitting in Leicester</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere brings expert mobile tyre fitting to the heart of Leicester, offering a full range of services delivered directly to your door. Whether you need a quick tyre replacement, an emergency repair, or scheduled tyre maintenance, our fully equipped vans ensure that you never have to worry about tyre issues. Leicester, a city known for its busy urban centers and surrounding motorways, is well served by our team of professionals who can reach you fast. Whether you're stuck near the National Space Centre, along the A6, or even in Leicester’s residential areas, we guarantee rapid, on-site assistance, minimizing the hassle of tyre troubles.
            </p>
            <p>
                Say goodbye to long waits at garages or roadside service delays. With Tyres Anywhere, you’ll enjoy seamless, hassle-free service wherever you are in Leicester.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Leicester drivers rely on Tyres Anywhere for our quick and professional mobile tyre fitting. Here's why we’re the trusted choice:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Round-the-Clock Service:</span>
                        Available 24/7, ensuring help whenever tyre issues arise.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Arrival Times:</span>
                        We typically reach our Leicester customers in under 60 minutes.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Convenient Mobile Service:</span>
                        Whether at work, home, or by the roadside, we come directly to you.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our team is certified and experienced in handling all types of tyre problems.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        From premium to budget-friendly options, we have tyres suited for all vehicle types.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Our mobile tyre services cater to both personal and commercial vehicles, providing a range of solutions tailored to your needs. Our key services include:
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
                    Whether you’re at your home in Leicester city center, parked at Highcross Shopping Centre, or driving along the M1 or A46, our mobile tyre fitting service ensures that you’re back on the road as quickly as possible. Our technicians will fit your new tyres on-site, ensuring balanced and roadworthy performance without the hassle of visiting a garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If your tyre has a slow leak or puncture, there’s no need to stress. Our mobile puncture repair service can come to you wherever you are, whether it’s near the King Power Stadium or a residential area like Oadby or Wigston. We assess the damage and carry out on-site repairs if the tyre can be salvaged, saving you the cost of a new one.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    We know that tyre issues can disrupt business operations. Our mobile tyre fitting for vans and commercial vehicles in Leicester ensures minimal downtime for your business. We come to your premises or your fleet’s location, providing rapid tyre replacements or repairs so your business keeps moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Tyre emergencies can happen at any time, and with our 24-hour service, Leicester drivers are never left stranded. Whether you’re stuck on the A50 or need a tyre replacement near the University of Leicester, we’ll be there fast to repair or replace your tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Proper tyre pressure and balanced wheels are key to safe driving. As part of our mobile service, we offer on-site tyre pressure checks and wheel balancing to ensure even tyre wear and optimum vehicle performance, helping you get the most out of your tyres.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Our mobile tyre fitting service covers all of Leicester and its surrounding areas, ensuring that no driver is left without quick assistance. Whether you're in the city or the surrounding towns, we’ve got you covered:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Leicester City Centre
                    </span>
                    <br>
                    We service drivers in the heart of Leicester, including popular spots like Highcross and the Curve Theatre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Knighton & Clarendon Park
                    </span>
                    <br>
                    Whether you’re at home or running errands in these busy areas, we’ll provide prompt service directly to your location.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Fosse Park & Meridian Leisure Park
                    </span>
                    <br>
                    Our technicians can assist while you shop or enjoy your time at Leicester’s major retail and entertainment hubs.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Surrounding Towns (Oadby, Wigston, Loughborough)
                    </span>
                    <br>
                    We extend our services to nearby towns like Oadby, Wigston, and Loughborough, ensuring drivers across Leicestershire have access to reliable mobile tyre fitting.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Leicester’s diverse roads and weather conditions can lead to a variety of tyre problems. At Tyres Anywhere, we’re prepared to handle them all:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    Punctures from road debris or sharp objects
                </li>
                <li>
                    Blowouts from worn tyres or high-speed driving on the M1
                </li>
                <li>
                    Low tread depth leading to reduced traction, especially in wet conditions
                </li>
                <li>
                    Slow leaks caused by minor damage or faulty valves
                </li>
                <li>
                    Uneven tyre wear from misaligned wheels
                </li>
            </ol>

            <p class="mt-6">
                By providing quick solutions to these common tyre problems, Tyres Anywhere keeps Leicester drivers safe and on the road.
            </p>

            <p class="font-semibold mt-6">
                Supporting the {{ location }} Community
            </p>

            <p class="mt-2">
                Leicester is a bustling city full of life, from its sports venues to its cultural landmarks. Tyres Anywhere is proud to support local drivers by offering reliable, professional tyre services that ensure they can travel confidently across the city and beyond. Our mobile service makes tyre care easy, convenient, and stress-free, allowing you to focus on what’s important.
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
