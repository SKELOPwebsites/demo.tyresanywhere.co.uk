<template>
    <Head>
        <meta name="description" content="Emergency mobile tyre fitting in Pinner and London. Convenient tyre repairs and replacements for home, work, or roadside. Call 07442 980101 for expert service.">
        <meta property="og:description" content="Emergency mobile tyre fitting in Pinner and London. Convenient tyre repairs and replacements for home, work, or roadside. Call 07442 980101 for expert service." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>24/7 Mobile Tyre Fitting in Pinner & Greater London</template>

        <template v-slot:title1>Fast, Professional Tyre Repairs and Replacements</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we deliver top-notch mobile tyre fitting services to drivers in Pinner and the wider London area, providing fast tyre repairs, replacements, and emergency callouts. Pinner, located in North West London, is known for its picturesque residential areas and proximity to key routes like the A404. Whether you're parked near Pinner Memorial Park, driving through Eastcote, or commuting into central London, our fully equipped mobile vans bring tyre services directly to you. With Tyres Anywhere, you won’t need to visit a garage—we come to you with fast, reliable service.
            </p>
            <p>
                Beyond Pinner, we extend our services across Greater London, ensuring drivers throughout the city have access to our 24/7 mobile tyre service. From routine tyre changes to urgent roadside assistance, Tyres Anywhere is here to keep you moving.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Pinner and London drivers trust Tyres Anywhere for our quick, convenient, and professional tyre services. Here’s why we stand out:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Callout:</span>
                        We’re always ready, offering round-the-clock mobile tyre services for both emergencies and scheduled replacements.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Across London:</span>
                        We aim to reach you within 60 minutes, whether you’re in Pinner or anywhere else in London.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Convenience:</span>
                        Our vans come equipped with all the tools to handle tyre repairs and replacements on the spot, saving you a trip to the garage.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Certified Technicians:</span>
                        Our highly trained team delivers expert tyre care, ensuring your tyres are fitted or repaired to the highest standard.
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

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tyres Anywhere provides a full range of mobile tyre services across Pinner and London, from puncture repairs to complete tyre replacements. Our key services include:
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
                    Our mobile tyre fitting service brings new tyres directly to you, whether you’re at home in Pinner, working near Ruislip, or driving into Central London. No matter where you are, our technicians will fit and balance your tyres on-site, ensuring your vehicle is road-ready without the hassle of visiting a garage. We serve all parts of Pinner and London, ensuring quick, professional service.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you’ve got a puncture or a slow air leak, our mobile puncture repair service can fix the problem on-site. Whether you're near Pinner Village Hall, parked by the shops on Bridge Street, or driving along the A404, we’ll come to your location, assess the tyre damage, and repair it if possible—saving you the cost and time of a full replacement.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses operating in Pinner or the Greater London area, keeping your vehicles on the road is essential. Our mobile tyre fitting service for vans and commercial vehicles ensures minimal downtime, offering fast, professional tyre replacements at your location. We carry a wide selection of tyres designed for commercial use, ensuring your fleet remains operational.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Tyre emergencies can happen at any time, and our 24/7 mobile tyre service ensures that help is never far away. Whether you’re stuck on the A404, navigating the M25, or in a residential area like Hatch End, we’ll arrive quickly to repair or replace your tyre and get you back on the road safely. We provide fast, reliable service throughout Pinner and London, ensuring that drivers across the city have access to immediate assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining the correct tyre pressure and ensuring your wheels are properly balanced is crucial for safe driving and fuel efficiency. Our mobile service includes on-site tyre pressure checks and wheel balancing in Pinner and London, helping to prolong tyre life and improve vehicle performance.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Tyres Anywhere covers all parts of Pinner and extends our mobile tyre fitting services throughout Greater London. Key areas we serve include:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Pinner Town Centre
                    </span>
                    <br>
                    Whether you’re shopping or running errands in Pinner’s town centre, we provide fast on-site tyre services to keep you moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Pinner Memorial Park & Ruislip
                    </span>
                    <br>
                    Whether enjoying Pinner’s green spaces or commuting through Ruislip, our mobile tyre vans offer quick, convenient tyre assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Residential Areas (Eastcote, Hatch End, Harrow)
                    </span>
                    <br>
                    We serve all residential areas in and around Pinner, offering tyre fitting and repairs right at your doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Greater London
                    </span>
                    <br>
                    From Pinner to Central London and beyond, our mobile tyre fitting vans provide fast, reliable tyre services throughout the city.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A404 & M25 Routes
                    </span>
                    <br>
                    If you encounter tyre trouble while traveling through these busy routes, we provide rapid roadside assistance to get you back on your way.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/harrow">Harrow</Link> and
                    <Link class="text-blue-600 underline" href="/locations/watford">Watford</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                    <br><br>
                    We also serve the whole of <Link class="text-blue-600 underline" href="/locations/london">London</Link>.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyres Anywhere handles a variety of common tyre issues faced by drivers in Pinner and London. These include:
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
                Our mobile service offers quick and efficient solutions to these problems, ensuring that drivers in Pinner and across London stay safe on the road.
            </p>

            <p class="font-semibold mt-6">
                Supporting Pinner’s Community and London’s Drivers
            </p>

            <p class="mt-2">
                Pinner is a historic and picturesque area within Greater London, and Tyres Anywhere is proud to support local drivers with our fast, professional mobile tyre services. Whether you’re commuting into Central London, managing a business fleet, or simply running errands, our mobile tyre fitting service delivers the convenience and peace of mind you need without the hassle of visiting a garage.
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
