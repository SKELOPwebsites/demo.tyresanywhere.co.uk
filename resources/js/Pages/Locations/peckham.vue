<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Peckham and Greater London. Fast on-site tyre repairs and replacements for home, work, or roadside. Call us now for expert service.">
        <meta property="og:description" content="24/7 mobile tyre fitting in Peckham and Greater London. Fast on-site tyre repairs and replacements for home, work, or roadside. Call us now for expert service." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Emergency Mobile Tyre Fitting in Peckham & Greater London</template>

        <template v-slot:title1>Mobile Tyre Fitting in Peckham</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere provides reliable mobile tyre fitting services in Peckham and the wider London area, offering fast tyre repairs, replacements, and emergency callouts. Peckham is known for its vibrant atmosphere and bustling streets, but whether you’re navigating the busy high street or commuting through South London, tyre issues can arise at any time. Our fully equipped mobile tyre vans ensure you’ll receive the assistance you need, no matter where you are—whether you’re parked near Peckham Rye Park, driving through Queens Road, or working in the heart of London.
            </p>
            <p>
                Our service extends beyond Peckham, reaching drivers across the Greater London area. With 24/7 availability, we provide same-day tyre replacements and rapid emergency repairs, so you never have to wait long for help. Whether you're in Peckham or traveling through London, Tyres Anywhere has you covered.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in Peckham and across London rely on Tyres Anywhere for our convenient and professional service. Here’s why we’re the preferred choice for mobile tyre fitting:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Callout:</span>
                        We offer around-the-clock tyre services, ensuring help is available whenever you need it.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Across London:</span>
                        We aim to arrive within 60 minutes, whether you’re in Peckham or anywhere in London.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Convenience:</span>
                        Our mobile vans bring all the equipment needed to fit or repair tyres on the spot, saving you the trouble of visiting a garage.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our team is highly trained, ensuring all work is done to the highest standards.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        We stock a large selection of tyres, from premium brands to more affordable options, ensuring the right fit for every vehicle and budget.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                At Tyres Anywhere, we provide a comprehensive range of mobile tyre services, from routine replacements to urgent repairs. Our services cover both Peckham and the entire London area:
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
                    Our mobile tyre fitting service brings new tyres to you, wherever you are. Whether you’re at home in Peckham, parked near Rye Lane, or commuting through central London, our technicians will come to your location to fit and balance your new tyres. No matter where you are in the city, we ensure that your tyres are road-ready without the hassle of a garage visit.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you’re dealing with a puncture, our mobile tyre repair service will come to you and fix the problem on-site. Whether you're near the Peckhamplex Cinema or parked along the Old Kent Road, we’ll assess the damage and repair your tyre if possible, saving you the cost of a replacement. We cover all parts of Peckham and London, ensuring fast, efficient service when you need it.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses operating in Peckham or across Greater London, vehicle downtime due to tyre issues can be costly. Our mobile tyre fitting service for vans and commercial vehicles ensures that your fleet remains operational with minimal disruption. We carry a wide range of tyres for commercial use and provide quick service to keep your business running smoothly.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Tyre emergencies can happen at any time, and our 24/7 emergency mobile tyre service ensures you’re never left stranded. Whether you’re on the A202, the South Circular, or a quieter residential street, we’ll arrive quickly to repair or replace your tyre, getting you back on the road safely. We provide rapid service throughout Peckham and Greater London, ensuring help is always nearby.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining correct tyre pressure and balanced wheels is vital for safe driving and fuel efficiency. As part of our mobile service, we offer on-site tyre pressure checks and wheel balancing in Peckham and London, helping to extend the life of your tyres and improve vehicle performance.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Our mobile tyre fitting service covers all areas of Peckham and extends across Greater London, ensuring drivers throughout the city receive quick and reliable tyre assistance:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Peckham Town Centre
                    </span>
                    <br>
                    We provide fast on-site tyre services for drivers shopping or working in Peckham’s bustling town centre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Peckham Rye Park & Nunhead
                    </span>
                    <br>
                    If you’re spending time near Peckham Rye or in nearby Nunhead, we’ll come to you for prompt tyre repairs or replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Residential Areas (Queens Road, Bellenden Road)
                    </span>
                    <br>
                    We serve all residential areas in Peckham, offering convenient tyre fitting and repairs at your doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Greater London
                    </span>
                    <br>
                    From Peckham to Central London and beyond, our mobile tyre vans provide comprehensive tyre services throughout the capital.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A202, A2 & South Circular Routes
                    </span>
                    <br>
                    Whether commuting through these busy London roads or traveling into the city, our mobile tyre service offers rapid roadside assistance for tyre issues.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/brixton">Brixton</Link> and
                    <Link class="text-blue-600 underline" href="/locations/greenwich">Greenwich</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                    <br><br>
                    We also serve the whole of <Link class="text-blue-600 underline" href="/locations/london">London</Link>.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyres Anywhere is equipped to handle a variety of tyre issues commonly faced by drivers in Peckham and London. Here are some of the problems we solve:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    Punctures from debris, nails, or sharp objects on London’s roads
                </li>
                <li>
                    Tyre blowouts from worn tread or over-inflation
                </li>
                <li>
                    Low tread depth, especially hazardous in wet conditions common to London
                </li>
                <li>
                    Slow leaks from damaged valves or minor punctures
                </li>
                <li>
                    Uneven tyre wear caused by improper alignment or incorrect tyre pressure
                </li>
            </ol>

            <p class="mt-6">
                Our mobile team offers fast, reliable solutions to these problems, ensuring that Peckham and London’s drivers remain safe and secure on the road.
            </p>

            <p class="font-semibold mt-6">
                Supporting Peckham’s Growing Community and London’s Drivers
            </p>

            <p class="mt-2">
                Peckham is a lively area with a rich history and vibrant community, and Tyres Anywhere is proud to support local drivers with fast, professional mobile tyre services. Whether you’re commuting into Central London, running errands in Peckham, or managing a business fleet, our mobile tyre fitting service ensures that your tyres are always in top condition without the inconvenience of visiting a garage.
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
