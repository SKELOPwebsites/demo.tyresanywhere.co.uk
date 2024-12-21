<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Mitcham and London. Fast on-site tyre repairs and replacements for homes, work, or roadside. Call 07442 980101 for quick service.">
        <meta property="og:description" content="24/7 mobile tyre fitting in Mitcham and London. Fast on-site tyre repairs and replacements for homes, work, or roadside. Call 07442 980101 for quick service." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Fast, Professional Tyre Repairs and Replacements Across Mitcham and London</template>

        <template v-slot:title1>24/7 Mobile Tyre Fitting in Mitcham</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we provide professional mobile tyre fitting services across Mitcham and the wider London area, delivering fast, convenient tyre replacements, repairs, and emergency callouts. Mitcham, situated in South London, is known for its bustling streets and easy access to major routes like the A217 and A236. Whether you’re located near Mitcham Common, driving through Colliers Wood, or commuting into Central London, our fully equipped mobile vans ensure that all your tyre needs are met quickly and efficiently.
            </p>
            <p>
                We service the entire London region, meaning you can rely on Tyres Anywhere no matter where you are, from Mitcham’s quieter suburban roads to London’s busiest streets. With 24/7 availability, we offer same-day tyre fitting and emergency repairs, providing a hassle-free solution to tyre problems at home, work, or roadside.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in Mitcham and throughout London trust Tyres Anywhere for our reliable and fast mobile tyre service. Here’s why we’re the go-to choice for drivers across the capital:
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
                        We reach you quickly, typically within 60 minutes, whether you’re in Mitcham, Central London, or other parts of Greater London.
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
                Tyres Anywhere offers a comprehensive range of mobile tyre services across Mitcham and the wider London area. From routine tyre replacements to emergency callouts, our mobile vans are equipped to handle all types of tyre issues:
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
                    Our mobile tyre fitting service brings new tyres directly to your location, whether you’re at home, work, or on the roadside. Whether you’re in Mitcham near the London Road, shopping at Colliers Wood, or traveling through other London boroughs, our technicians will fit and balance your tyres on-site, ensuring everything is road-ready without the need for a garage visit.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Punctures can happen at the most inconvenient times, but our mobile puncture repair service makes them less of a hassle. Whether you’re parked near Mitcham Junction Station or driving through busy London streets, we’ll assess the damage and repair your tyre if possible, getting you back on the road safely and efficiently.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses operating in Mitcham and Greater London, keeping your vehicles on the road is critical. Our mobile tyre fitting service for vans and commercial vehicles ensures minimal disruption, providing fast tyre replacements or repairs at your location. We carry a wide range of tyres for commercial vehicles, ensuring quick service to keep your fleet operational.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Tyre emergencies can happen at any time, and our 24-hour mobile tyre service ensures that you’re never left stranded in Mitcham or anywhere in London. Whether you’re stuck on the A217, navigating the M25, or in a residential area, we’ll arrive quickly to repair or replace your tyre and get you back on your journey.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Proper tyre pressure and balanced wheels are essential for vehicle safety and performance. As part of our mobile service, we offer tyre pressure checks and wheel balancing throughout Mitcham and London, helping to prolong tyre life and improve your vehicle’s handling.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Our mobile tyre fitting service covers all parts of Mitcham and the greater London area, ensuring drivers across the city have access to reliable tyre services:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Mitcham Town Centre
                    </span>
                    <br>
                    Whether you’re shopping, working, or running errands in Mitcham’s town centre, we provide fast on-site tyre services.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Mitcham Common & Colliers Wood
                    </span>
                    <br>
                    Whether you’re enjoying the open spaces near Mitcham Common or parked near Colliers Wood, our mobile tyre vans can assist with tyre repairs or replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Residential Areas (Tooting, Wimbledon, Streatham)
                    </span>
                    <br>
                    We serve all residential areas in and around Mitcham, providing convenient mobile tyre fitting right at your doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Greater London
                    </span>
                    <br>
                    From Central London to the surrounding boroughs, our mobile tyre service ensures quick, professional tyre fitting throughout the city.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M25, A3 & A217 Routes
                    </span>
                    <br>
                    Whether commuting into London or traveling through the city’s main roadways, our mobile tyre service offers rapid roadside assistance on key routes.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/croydon">Croydon</Link> and
                    <Link class="text-blue-600 underline" href="/locations/brixton">Brixton</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                    <br><br>
                    We also serve the whole of <Link class="text-blue-600 underline" href="/locations/london">London</Link>.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                From Mitcham’s local streets to London’s busy motorways, drivers face a range of tyre challenges. Tyres Anywhere is equipped to solve the most common problems:
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
                Our mobile team provides fast, effective solutions to these issues, ensuring drivers across Mitcham and London can travel safely and confidently.
            </p>

            <p class="font-semibold mt-6">
                Supporting {{ location }} and London's Community
            </p>

            <p class="mt-2">
                Mitcham is a vibrant part of South London, and Tyres Anywhere is proud to support the local community with our fast, reliable mobile tyre services. Our coverage extends across Greater London, ensuring that drivers in all parts of the city have access to convenient tyre solutions. Whether you’re commuting, running a business, or exploring the city, Tyres Anywhere ensures your tyres are in top condition, without the need for a garage visit.
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
