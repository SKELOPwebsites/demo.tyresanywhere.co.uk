<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Sheffield. Fast on-site tyre repairs and replacements at home, work, or roadside. Call 07442 980101 for expert service.">
        <meta property="og:description" content="24/7 mobile tyre fitting in Sheffield. Fast on-site tyre repairs and replacements at home, work, or roadside. Call 07442 980101 for expert service." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>24/7 Mobile Tyre Fitting in Sheffield – Fast, Professional Tyre Repairs and Replacements Delivered to Your Door</template>

        <template v-slot:title1>Expert Tyre Services at Your Convenience</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere provides reliable and professional mobile tyre fitting services in Sheffield, offering fast tyre repairs, replacements, and emergency callouts. Known for its industrial history, thriving city centre, and proximity to the Peak District, Sheffield’s drivers need quick, convenient tyre solutions. Whether you’re parked near Meadowhall, driving along the A61, or enjoying the beauty of Endcliffe Park, our mobile vans bring the garage to you. We ensure all your tyre needs are handled efficiently and without hassle.
            </p>
            <p>
                Our service extends beyond Sheffield to nearby areas such as Rotherham, Barnsley, and Chesterfield. With Tyres Anywhere, you’ll receive fast, seamless on-site tyre services, no matter where you are.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in Sheffield rely on Tyres Anywhere for speed, convenience, and professionalism. Here’s why we’re the top choice for mobile tyre services:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Whether it’s an emergency or routine tyre replacement, we’re available day or night.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Rapid Response Times:</span>
                        We aim to arrive within 60 minutes, offering fast service across Sheffield and surrounding areas.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Convenience:</span>
                        We come to you—whether you’re at home, work, or roadside—saving you the hassle of visiting a garage.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Certified Technicians:</span>
                        Our experienced team ensures that your tyres are fitted or repaired to the highest standards.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        From premium brands to affordable options, we stock tyres suitable for every vehicle and budget.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tyres Anywhere offers a full range of mobile tyre services designed to meet the needs of Sheffield’s drivers. From emergency tyre repairs to scheduled replacements, we’re ready to assist you:
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
                    Our mobile tyre fitting service brings new tyres directly to your location, whether you’re parked near the Sheffield Cathedral, at home in Hillsborough, or commuting along the A61. Our technicians will fit your tyres on-site and ensure they’re balanced, so you don’t have to waste time visiting a garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Tyre punctures can happen at the most inconvenient times, but our mobile puncture repair service comes to you. Whether you’re at work in the city centre, near Sheffield Hallam University, or enjoying the parks in Nether Edge, we’ll repair your tyre on-site, saving you time and avoiding unnecessary replacements.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Sheffield, vehicle downtime can be costly. Our mobile tyre fitting service for vans and commercial vehicles ensures your fleet stays on the road with minimal disruption. We carry a wide selection of tyres suited for commercial vehicles, providing fast, reliable service.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Whether you’re stuck on the M1, the A57, or near Meadowhall, our 24/7 emergency tyre service ensures you’ll never be stranded. From punctures to blowouts, we provide quick, efficient tyre repairs and replacements to get you back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining correct tyre pressure and balanced wheels is crucial for safety and fuel efficiency. Our mobile service includes tyre pressure checks and wheel balancing throughout Sheffield, ensuring your tyres last longer and perform better.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Tyres Anywhere covers all parts of Sheffield and extends our services to nearby towns and villages. Key areas we serve include:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Sheffield City Centre
                    </span>
                    <br>
                    Whether you’re working or shopping in the heart of Sheffield, we provide fast, on-site tyre services.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Hillsborough & Nether Edge
                    </span>
                    <br>
                    We serve all residential areas in Sheffield, offering convenient tyre fitting and repairs right at your doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Meadowhall & Endcliffe Park
                    </span>
                    <br>
                    Whether shopping at Meadowhall or enjoying the outdoors at Endcliffe Park, our mobile vans come to you for quick tyre assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A61 & M1 Routes
                    </span>
                    <br>
                    We offer rapid roadside assistance along major routes in Sheffield, ensuring that drivers on the A61, A57, and M1 receive fast service.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Rotherham, Barnsley & Chesterfield
                    </span>
                    <br>
                    Our mobile service extends to nearby towns, providing full coverage for drivers across South Yorkshire.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Sheffield drivers face various tyre issues due to the mix of urban roads and nearby rural routes. At Tyres Anywhere, we handle all common tyre problems quickly and efficiently:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    Punctures caused by debris, nails, or sharp objects
                </li>
                <li>
                    Tyre blowouts from worn tread or over-inflation
                </li>
                <li>
                    Low tread depth, especially dangerous in wet conditions
                </li>
                <li>
                    Slow leaks from damaged valves or minor punctures
                </li>
                <li>
                    Uneven tyre wear caused by improper alignment or incorrect tyre pressure
                </li>
            </ol>

            <p class="mt-6">
                Our mobile team ensures that these issues are resolved quickly, keeping Sheffield drivers safe on the road.
            </p>

            <p class="font-semibold mt-6">
                Supporting Sheffield’s Community
            </p>

            <p class="mt-2">
                Sheffield is a vibrant city known for its industrial past and green spaces, and Tyres Anywhere is proud to support its drivers with reliable mobile tyre services. Whether you’re commuting, running errands, or managing a business, our mobile tyre fitting service delivers the convenience and peace of mind you need without the hassle of visiting a garage.
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
