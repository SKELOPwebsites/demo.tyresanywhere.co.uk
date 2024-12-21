<template>
    <Head>
        <meta name="description" content="Reliable 24/7 mobile tyre fitting in Ruislip and London. Fast on-site tyre repairs and replacements delivered to your location. Call 07442 980101 today.">
        <meta property="og:description" content="Reliable 24/7 mobile tyre fitting in Ruislip and London. Fast on-site tyre repairs and replacements delivered to your location. Call 07442 980101 today." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in Ruislip & Greater London</template>

        <template v-slot:title1>Emergency Mobile Tyres Across Ruislip and London</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere provides expert mobile tyre fitting services throughout Ruislip and across Greater London, delivering fast and reliable tyre repairs, replacements, and emergency callouts. Ruislip, known for its suburban charm, leafy parks, and proximity to major routes like the A40 and M25, is a key area we serve. Whether you’re parked near Ruislip Lido, driving through the town centre, or commuting to Central London, our fully equipped mobile tyre-fitting vans are ready to assist you wherever you are.
            </p>
            <p>
                Our mobile tyre services extend beyond Ruislip, covering the wider London area. Tyres Anywhere brings the garage to you, ensuring fast, professional service for both emergencies and scheduled tyre changes at your home, work, or roadside.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in Ruislip and across London trust Tyres Anywhere for our fast, convenient, and expert tyre services. Here’s why we’re the preferred choice:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Our mobile tyre services are available day or night, ensuring help whenever you need it.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Across London:</span>
                        We aim to reach you within 60 minutes, providing fast service across Ruislip and Greater London.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Convenience:</span>
                        Our mobile vans are fully equipped to handle tyre repairs and replacements on the spot, eliminating the need for a garage visit.
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
                At Tyres Anywhere, we offer a complete range of mobile tyre services across Ruislip and London, from puncture repairs to full tyre replacements:
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
                    Our mobile tyre fitting service brings new tyres directly to you, whether you’re at home in Ruislip, working near the town centre, or parked near Ruislip Lido. Our technicians will come to your location, fit your tyres on-site, and balance them for optimal performance. With Tyres Anywhere, there’s no need to visit a garage—we ensure hassle-free service wherever you are.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you’ve experienced a puncture or slow air leak, our mobile puncture repair service will fix the problem on-site. Whether you’re driving through the Ruislip High Street, near Ruislip Manor Station, or on the A40, we’ll assess the damage and repair your tyre if possible, saving you time and money.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Ruislip and across London, keeping your fleet on the road is crucial. Our mobile tyre fitting service for vans and commercial vehicles ensures minimal downtime and fast service at your location. We carry a wide range of tyres designed for commercial use, ensuring your business vehicles remain operational.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Tyre emergencies can happen at any time, but with Tyres Anywhere, you’ll never be stranded. Whether you’re stuck on the A40 or traveling through quieter areas like Ickenham, our 24/7 emergency tyre service ensures rapid assistance. From punctures to blowouts, we’ll arrive quickly to repair or replace your tyres and get you back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining proper tyre pressure and balanced wheels is essential for safe driving and fuel efficiency. Our mobile service includes on-site tyre pressure checks and wheel balancing throughout Ruislip and London, helping to extend tyre life and improve vehicle performance.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Tyres Anywhere covers all parts of Ruislip and Greater London, ensuring drivers across the city have access to reliable mobile tyre services:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Ruislip Town Centre
                    </span>
                    <br>
                    Whether you’re shopping, working, or dining in Ruislip’s town centre, we provide fast, on-site tyre services to keep you moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Ruislip Lido & Ickenham
                    </span>
                    <br>
                    Whether enjoying the green spaces around Ruislip Lido or driving through Ickenham, our mobile tyre service will come to you for prompt tyre assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Residential Areas (Ruislip Manor, Eastcote, Ruislip Gardens)
                    </span>
                    <br>
                    We serve all residential areas in and around Ruislip, offering convenient tyre fitting and repairs at your doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A40 & M25 Routes
                    </span>
                    <br>
                    If you encounter tyre trouble while traveling along these key routes, our mobile service provides rapid roadside assistance to get you back on your journey.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Greater London
                    </span>
                    <br>
                    From Ruislip to Central London, our mobile tyre vans cover all areas of the capital, ensuring comprehensive tyre service across the city.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/uxbridge">Uxbridge</Link> and
                    <Link class="text-blue-600 underline" href="/locations/pinner">Pinner</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                    <br><br>
                    We also serve the whole of <Link class="text-blue-600 underline" href="/locations/london">London</Link>.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyres Anywhere is equipped to solve all common tyre problems faced by drivers in Ruislip and London, including:
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
                Our mobile service provides quick and effective solutions to these problems, ensuring drivers in Ruislip and across London remain safe on the road.
            </p>

            <p class="font-semibold mt-6">
                Supporting Ruislip’s Community and London’s Drivers
            </p>

            <p class="mt-2">
                Ruislip is a vibrant area with a rich history, and Tyres Anywhere is proud to support its drivers with fast, reliable mobile tyre services. Whether you’re commuting into London, running errands locally, or managing a business fleet, our mobile tyre fitting service ensures your tyres are always in top condition without the inconvenience of visiting a garage.
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
