<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Hounslow. Fast and expert tyre repairs and replacements at home, work, or roadside. Call 07442 980101 for immediate service!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Hounslow. Fast and expert tyre repairs and replacements at home, work, or roadside. Call 07442 980101 for immediate service!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>24/7 Mobile Tyre Services in Hounslow – Fast, Reliable, and Delivered to You</template>

        <template v-slot:title1>Expert Tyre Solutions at Your Convenience</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere offers fast and professional mobile tyre fitting services throughout Hounslow and the surrounding areas. Whether you need an emergency tyre replacement, a quick puncture repair, or regular tyre maintenance, we bring our fully equipped mobile service directly to you. Hounslow, with its bustling roads, busy commercial areas, and proximity to Heathrow Airport, demands a reliable and efficient tyre service. Whether you’re parked at home in a residential area, near Hounslow High Street, or commuting along the A4, our 24/7 mobile tyre service ensures that tyre problems don’t disrupt your day.
            </p>
            <p>
                Avoid the hassle of visiting a garage. Our mobile units are equipped to handle all your tyre needs on-site, ensuring you get back on the road quickly and safely.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Hounslow drivers trust Tyres Anywhere for fast, reliable, and professional service. Here’s why:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Available 24/7:</span>
                        We provide around-the-clock service, so whether it’s day or night, you’ll never be left waiting with a tyre problem.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Quick Response:</span>
                        We aim to get to your location quickly, providing immediate assistance and minimizing delays to your day.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Service:</span>
                        We handle everything at your location, from tyre repairs to replacements, saving you the inconvenience of visiting a garage.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our team is fully trained to handle all types of tyre issues, ensuring your vehicle is in safe hands.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        Whether you need premium or budget-friendly tyres, we offer a broad selection to suit your vehicle and driving needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                At Tyres Anywhere, we offer a comprehensive range of mobile tyre services to meet the diverse needs of drivers in Hounslow. From emergency repairs to scheduled tyre replacements, we bring the expertise to you.
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
                    Need new tyres? Our mobile tyre fitting service brings the tyres to your location, whether you’re parked near Hounslow High Street, in a residential area, or at your workplace. We fit and balance new tyres on-site, ensuring your car is road-ready without the hassle of a garage visit.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you’ve experienced a puncture or a slow air leak, our mobile tyre repair service can often fix the issue on-site, saving you time and money. Whether you're near Lampton Park or on the A4, we’ll assess the tyre and repair it if possible, ensuring you can continue your journey safely.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Hounslow that depend on vans or commercial vehicles, tyre problems can cause significant delays. Our mobile tyre fitting service for commercial vehicles ensures that your fleet stays operational with minimal downtime. We carry a variety of tyres suited for heavy-duty vehicles, ensuring fast, reliable service to keep your business moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre trouble can happen at any time, but with our 24/7 mobile tyre service, you’re never left stranded. Whether it’s a flat tyre on the A4 or a blowout near Hounslow West, we’ll arrive quickly to repair or replace your tyre and get you back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining proper tyre pressure and balanced wheels is crucial for vehicle safety and fuel efficiency. As part of our mobile tyre fitting service, we offer tyre pressure checks and wheel balancing to ensure your tyres wear evenly and your vehicle runs smoothly. This service helps improve fuel efficiency and extends the life of your tyres.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Hounslow is a busy and diverse area, and Tyres Anywhere provides mobile tyre services across all parts of the town. Whether you’re in a residential neighbourhood or on a busy commuter route, we bring expert tyre solutions directly to your location. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Hounslow Town Centre
                    </span>
                    <br>
                    Whether you're shopping or working in the town centre, our mobile tyre fitting service offers quick assistance at your location.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Lampton Park & Surrounding Areas
                    </span>
                    <br>
                    If you’re near Lampton Park or in the surrounding residential areas, our mobile tyre service provides convenient on-site repairs and replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A4 & Major Routes
                    </span>
                    <br>
                    Commuters travelling along the A4 and other major routes in Hounslow can rely on our fast roadside assistance for any tyre issues.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Hounslow West & Heathrow
                    </span>
                    <br>
                    For drivers near Hounslow West or those commuting to Heathrow Airport, our mobile tyre service ensures that you’re never far from expert help.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/heathrow">Heathrow</Link> and
                    <Link class="text-blue-600 underline" href="/locations/ealing">Ealing</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyre problems can happen without warning, but Tyres Anywhere is ready to help. Some common tyre issues we address in Hounslow include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A puncture caused by nails or debris can often be repaired on-site, saving you from needing a full replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A tyre blowout requires immediate attention. Our technicians will replace the damaged tyre and ensure your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn tyres reduce your vehicle’s grip and safety, especially in wet conditions. We provide replacements to ensure your car remains roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow air leak could be caused by a valve issue or minor puncture. We’ll inspect and repair the tyre before it causes further problems.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven wear can be caused by incorrect tyre pressure or alignment. We’ll replace worn tyres and provide advice on maintaining proper tyre care.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting the {{ location }} Community
            </p>

            <p class="mt-2">
                Hounslow is a vibrant area, and Tyres Anywhere is proud to support local drivers with fast, reliable mobile tyre services. Whether you’re commuting, running errands, or managing a business fleet, our mobile tyre fitting service ensures that your tyres are always in top condition without the need for a garage visit.
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
