<template>
    <Head>
        <meta name="description" content="Reliable 24/7 mobile tyre fitting in Richmond and London. Fast on-site tyre repairs and replacements delivered to your home or work. Call 07442 980101 now.">
        <meta property="og:description" content="Reliable 24/7 mobile tyre fitting in Richmond and London. Fast on-site tyre repairs and replacements delivered to your home or work. Call 07442 980101 now." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in Richmond & Greater London</template>

        <template v-slot:title1>Convenient Tyre Services for Richmond and Greater London</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we bring professional mobile tyre fitting services directly to drivers in Richmond and across the Greater London area. Whether you need an emergency tyre repair, a scheduled replacement, or routine maintenance, we deliver fast, reliable tyre solutions right to your location. Richmond, known for its scenic riverside views, bustling town centre, and expansive green spaces like Richmond Park, is a key area for our service. Whether you’re parked near Richmond Green, commuting on the A316, or enjoying a day in Kew Gardens, our mobile tyre vans are ready to assist you wherever you are.
            </p>
            <p>
                Our service extends throughout London, meaning whether you’re in Richmond or traveling further into the city, Tyres Anywhere ensures you have quick, professional tyre service when you need it.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in Richmond and across London trust Tyres Anywhere for our fast, convenient, and expert tyre services. Here’s why we’re the preferred choice:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        We offer round-the-clock mobile tyre services for both emergencies and scheduled replacements.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Across London:</span>
                        We aim to arrive within 60 minutes, providing fast service across Richmond and Greater London.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Convenience:</span>
                        Our mobile vans are equipped to handle tyre repairs and replacements on-site, so there’s no need for a garage visit.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Certified Technicians:</span>
                        Our experienced team ensures that your tyres are fitted or repaired to the highest standard, ensuring road safety.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        We stock a variety of tyres from premium to budget-friendly brands, ensuring we have the right tyres for every vehicle.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }} and London</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tyres Anywhere offers a full range of mobile tyre services across Richmond and the wider London area. From puncture repairs to full tyre replacements, we’ve got you covered:
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
                    Our mobile tyre fitting service brings new tyres directly to you, wherever you are in Richmond or London. Whether you’re at home in Richmond Hill, parked near the River Thames, or commuting through Sheen, we’ll come to your location, fit your new tyres, and balance them for optimal performance. Tyres Anywhere ensures that you get back on the road quickly and safely, without the hassle of visiting a garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you’ve experienced a puncture or slow air leak, our mobile puncture repair service ensures that you don’t have to worry. Whether you're near Richmond Park, at work in Kew, or driving along the A316, we’ll come to your location, assess the damage, and repair the tyre if possible. Our team saves you the time and cost of a replacement when a repair is feasible.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Richmond and Greater London, keeping your vehicles on the road is essential. Our mobile tyre fitting service for vans and commercial vehicles ensures minimal disruption, offering fast tyre replacements and repairs at your location. We stock a wide selection of tyres suited for commercial vehicles, ensuring your fleet stays operational.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Tyre emergencies don’t wait for a convenient time, but with Tyres Anywhere, you’ll never be left stranded. Whether you’re stuck on the A316, driving through Twickenham, or parked near Richmond Station, our 24/7 emergency service ensures rapid assistance. We provide fast and reliable service across Richmond and London, ensuring you get back on the road safely, day or night.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining correct tyre pressure and balanced wheels is key for safe driving and fuel efficiency. Our mobile service includes on-site tyre pressure checks and wheel balancing in Richmond and London, helping to extend the life of your tyres and improve your vehicle’s performance.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Tyres Anywhere covers all parts of Richmond and the Greater London area, ensuring drivers throughout the city have access to reliable tyre services:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Richmond Town Centre
                    </span>
                    <br>
                    Whether you’re shopping, working, or dining in Richmond’s town centre, we provide fast, on-site tyre services to keep you moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Richmond Park & Kew Gardens
                    </span>
                    <br>
                    Whether you’re enjoying the natural beauty of Richmond Park or visiting Kew Gardens, our mobile tyre service will meet you wherever you are.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Residential Areas (Richmond Hill, Sheen, Twickenham)
                    </span>
                    <br>
                    We serve all residential areas in Richmond and the surrounding neighborhoods, offering tyre fitting and repairs at your doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Greater London
                    </span>
                    <br>
                    From Richmond to Central London, our mobile tyre vans provide fast, reliable tyre services across the capital.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A316 & South Circular Routes
                    </span>
                    <br>
                    If you encounter tyre trouble while traveling along these busy routes, our mobile service provides quick roadside assistance to get you back on your way.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/hounslow">Hounslow</Link> and
                    <Link class="text-blue-600 underline" href="/locations/ealing">Ealing</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                    <br><br>
                    We also serve the whole of <Link class="text-blue-600 underline" href="/locations/london">London</Link>.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                At Tyres Anywhere, we’re equipped to handle a variety of common tyre issues faced by drivers in Richmond and London:
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
                Our mobile team ensures that these problems are fixed efficiently, keeping drivers in Richmond and across London safe on the road.
            </p>

            <p class="font-semibold mt-6">
                Supporting Richmond’s Community and London’s Drivers
            </p>

            <p class="mt-2">
                Richmond is known for its historic charm, vibrant community, and beautiful green spaces, and Tyres Anywhere is proud to support local drivers with our fast, professional mobile tyre services. Whether you’re commuting into Central London, running errands in Richmond, or managing a business fleet, our mobile tyre fitting service provides the convenience and peace of mind you need without the hassle of visiting a garage.
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
