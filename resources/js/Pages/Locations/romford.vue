<template>
    <Head>
        <meta name="description" content="Reliable 24/7 mobile tyre fitting in Romford and London. On-site tyre repairs and replacements delivered to your home, work, or roadside. Call 07442 980101 now.">
        <meta property="og:description" content="Reliable 24/7 mobile tyre fitting in Romford and London. On-site tyre repairs and replacements delivered to your home, work, or roadside. Call 07442 980101 now." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in Romford & Greater London</template>

        <template v-slot:title1>Convenient, On-Site Tyre Services for Romford and Greater London</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we deliver expert mobile tyre fitting services throughout Romford and across Greater London, providing fast tyre repairs, replacements, and emergency callouts. Romford, known for its bustling town centre, historic market, and busy commuter routes like the A12 and M25, is a key service area for us. Whether you're parked near Romford Market, driving through the town centre, or commuting via Romford Station, our mobile tyre-fitting vans bring the garage to you, ensuring you receive fast and reliable service wherever you are.
            </p>
            <p>
                Our coverage extends beyond Romford, reaching drivers throughout East London and beyond. Whether you’re at home, work, or on the road, Tyres Anywhere provides seamless tyre services that keep you moving safely and efficiently.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in Romford and across Greater London rely on Tyres Anywhere for our professional and convenient tyre services. Here’s why we’re a top choice:
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
                        We aim to reach you within 60 minutes, offering quick service across Romford and the rest of East London.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Convenience:</span>
                        Our vans are equipped to handle all tyre repairs and replacements on-site, so you don’t have to visit a garage.
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
                Tyres Anywhere offers a full range of mobile tyre services across Romford and London. From puncture repairs to full tyre replacements, our mobile vans are ready to assist you:
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
                    Our mobile tyre fitting service brings new tyres directly to you, whether you’re at home in Gidea Park, working near Romford Market, or commuting through the A12. We’ll fit and balance your tyres on-site, ensuring that your vehicle is ready for the road without the hassle of visiting a garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you’ve got a puncture, our mobile tyre repair service ensures that you’re back on the road in no time. Whether you’re near Romford Shopping Hall or driving through Chadwell Heath, we’ll come to your location, assess the tyre damage, and repair it on-site if possible, saving you from costly replacements.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Romford, keeping your vehicles on the road is essential. Our mobile tyre fitting service for vans and commercial vehicles ensures minimal downtime. We carry a wide selection of tyres for commercial vehicles, providing quick, professional service to keep your fleet running smoothly.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Whether you’re stuck on the M25 or driving through the streets of Romford, our 24/7 mobile tyre service ensures you’re never stranded. From punctures to blowouts, we’ll arrive quickly to repair or replace your tyre, ensuring that you get back on the road safely, day or night.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining the correct tyre pressure and balanced wheels is key for safe driving. Our mobile service includes tyre pressure checks and wheel balancing in Romford and East London, helping to extend tyre life and improve vehicle performance.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Tyres Anywhere covers all parts of Romford and extends our mobile tyre fitting services across Greater London. Key areas we serve include:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Romford Town Centre
                    </span>
                    <br>
                    Whether you’re working, shopping, or running errands in the busy town centre, we provide fast on-site tyre services.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Gidea Park & Harold Wood
                    </span>
                    <br>
                    We offer tyre fitting and repairs for residential areas, delivering convenient service to your doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Romford Market & Shopping Hall
                    </span>
                    <br>
                    If you’re enjoying a day at Romford Market or shopping nearby, our mobile vans will come to your location for quick assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A12 & M25 Routes
                    </span>
                    <br>
                    Commuters traveling via Romford’s key routes receive rapid roadside assistance for tyre issues.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Greater London
                    </span>
                    <br>
                    From Romford to Central London and beyond, our mobile tyre fitting vans provide comprehensive tyre services throughout the capital.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/ilford">Ilford</Link> and
                    <Link class="text-blue-600 underline" href="/locations/barking">Barking</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                    <br><br>
                    We also serve the whole of <Link class="text-blue-600 underline" href="/locations/london">London</Link>.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                At Tyres Anywhere, we solve all common tyre problems for drivers in Romford and London, including:
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
                Our mobile team offers quick and reliable solutions to these issues, ensuring drivers in Romford and across London stay safe on the road.
            </p>

            <p class="font-semibold mt-6">
                Supporting Romford’s Community and London’s Drivers
            </p>

            <p class="mt-2">
                Romford is a lively and growing town within East London, and Tyres Anywhere is proud to support its drivers with fast, professional mobile tyre services. Whether you’re commuting, running errands, or managing a business, our mobile tyre fitting service ensures that your tyres are in top condition without the need to visit a garage.
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
