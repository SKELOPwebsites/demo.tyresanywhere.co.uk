<template>
    <Head>
        <meta name="description" content="Fast 24/7 mobile tyre fitting in Ilford. Get expert tyre repairs or replacements at your home, work, or roadside. Call 07442 980101 for immediate service!">
        <meta property="og:description" content="Fast 24/7 mobile tyre fitting in Ilford. Get expert tyre repairs or replacements at your home, work, or roadside. Call 07442 980101 for immediate service!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>24/7 Mobile Tyre Services in Ilford – Fast, Convenient, and Delivered to You</template>

        <template v-slot:title1>Professional Tyre Services on Your Schedule</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere offers reliable mobile tyre fitting services throughout Ilford and the surrounding areas. Whether you need a fast tyre replacement, a puncture repair, or a scheduled tyre check, we bring expert solutions directly to your location. Ilford, known for its diverse residential areas, bustling high street, and busy roads, demands a tyre service that’s efficient and convenient. Whether you’re parked near Ilford Lane, at home in a residential area, or commuting along the A12, our 24/7 mobile tyre service ensures that tyre trouble won’t disrupt your day.
            </p>
            <p>
                Skip the wait at a garage or the inconvenience of roadside delays. Our mobile units are equipped to handle tyre replacements, repairs, and maintenance wherever you are, ensuring you get back on the road quickly and safely.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Ilford drivers rely on Tyres Anywhere for quick, professional, and hassle-free service. Here’s why:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Available 24/7:</span>
                        Our mobile tyre service operates around the clock, providing assistance when you need it most.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Quick Response:</span>
                        We focus on reaching you quickly, minimizing delays and getting your vehicle back on the road as soon as possible.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Service:</span>
                        Whether it’s a tyre replacement or repair, we handle everything at your location, saving you time and the need for a garage visit.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Certified Technicians:</span>
                        Our experienced team ensures all tyre services are performed to the highest standards, keeping your vehicle safe and road-ready.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Range:</span>
                        From premium brands to more affordable options, we offer tyres to fit all types of vehicles and budgets.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Our mobile tyre services are designed to meet the diverse needs of drivers in Ilford. Whether it’s an emergency repair, a routine tyre check, or a new tyre fitting, we bring expert solutions to you.
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
                    If your tyres need replacing, our mobile tyre fitting service brings a wide selection of tyres to your location. Whether you’re parked near Valentines Park or along Ilford High Road, our technicians will fit and balance your new tyres on-site, ensuring your car is ready for the road without the hassle of visiting a garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every tyre problem requires a full replacement. Our mobile tyre repair service can fix punctures and slow leaks on-site, saving you time and money. Whether you’re near the Exchange Ilford or in a quieter residential area, we’ll assess the tyre damage and, if possible, repair it on the spot, ensuring you can continue your journey safely.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Ilford that rely on vans and commercial vehicles, tyre issues can lead to costly delays. Our mobile tyre fitting service for commercial vehicles ensures your fleet remains operational. We carry a range of tyres designed for heavy-duty vehicles and provide fast, efficient service to keep your business moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre emergencies can happen at any time, but our 24/7 mobile tyre service ensures you’re never stranded. Whether you’re stuck with a flat tyre on the A12 or need a tyre replaced in Ilford town centre, our team will arrive quickly to repair or replace your tyre, getting you back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining correct tyre pressure and balanced wheels is crucial for safety and vehicle performance. As part of our mobile tyre fitting service, we offer tyre pressure checks and wheel balancing to ensure your vehicle operates smoothly. This service helps extend the life of your tyres and improves overall fuel efficiency.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Ilford is a large and busy area, and Tyres Anywhere provides mobile tyre services across the entire town. Whether you’re in a residential neighbourhood or on a busy road, we bring expert tyre solutions to your location. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Ilford Town Centre
                    </span>
                    <br>
                    Whether you're shopping or working near the town centre, our mobile tyre fitting service provides quick assistance wherever you are.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Valentines Park & Cranbrook Road
                    </span>
                    <br>
                    If you’re enjoying the greenery of Valentines Park or parked nearby, our mobile tyre team will come to your location for on-site repairs or replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A12 & A406 Routes
                    </span>
                    <br>
                    These busy routes see heavy commuter traffic, and if you experience tyre trouble on the A12 or A406, our mobile service provides fast roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Residential Areas (Seven Kings, Barkingside, Gants Hill)
                    </span>
                    <br>
                    Whether you’re at home in Seven Kings, Barkingside, or Gants Hill, our mobile tyre fitting service offers convenient, on-site tyre repairs and replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/barking">Barking</Link> and
                    <Link class="text-blue-600 underline" href="/locations/stratford">Stratford</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                    <br><br>
                    We also serve the whole of <Link class="text-blue-600 underline" href="/locations/london">London</Link>.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyre issues can occur at any time, but Tyres Anywhere is always ready to help. Some common tyre problems we handle in Ilford include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Road debris or nails can cause punctures, but our technicians can often repair these on-site, saving you the cost of a full replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout is a serious tyre issue that requires immediate attention. Our team will replace the blown tyre and ensure your vehicle is safe to drive again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn tyres reduce traction and safety, especially in wet conditions. We provide replacements to ensure your vehicle remains roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow air leak could be caused by a faulty valve or minor puncture. We’ll inspect and repair the tyre to prevent further damage.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Improper tyre pressure or alignment can cause uneven wear. We’ll replace worn tyres and offer advice on maintaining proper tyre care.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting the {{ location }} Community
            </p>

            <p class="mt-2">
                Ilford is a vibrant and growing area, and Tyres Anywhere is proud to support local drivers with reliable mobile tyre services. Whether you're commuting, running errands, or managing a business fleet, our mobile tyre fitting service ensures that your tyres are always in top condition without the hassle of visiting a garage.
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
