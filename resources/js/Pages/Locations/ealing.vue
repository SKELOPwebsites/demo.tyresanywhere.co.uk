<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Ealing. Fast and professional tyre repairs and replacements delivered to your location. Call 07442 980101 for expert service today!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Ealing. Fast and professional tyre repairs and replacements delivered to your location. Call 07442 980101 for expert service today!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Convenient Mobile Tyre Fitting in {{ location }}</template>

        <template v-slot:title1>Efficient Mobile Tyre Fitting Service in Ealing</template>
        <template v-slot:content1>
            <p>
                Welcome to Tyres Anywhere, your trusted mobile tyre fitting service in Ealing. Whether you’re dealing with a flat tyre, need urgent replacement, or just want the convenience of new tyres fitted at home or work, we’ve got you covered. Ealing is known for its vibrant mix of residential and commercial areas, and our mobile service ensures you don’t have to waste time visiting a garage. From the busy streets near Ealing Broadway to the quieter residential areas like Pitshanger, our 24/7 mobile tyre fitting service brings quick, expert assistance wherever you are.
            </p>
            <p>
                At Tyres Anywhere, we understand how important it is to keep your vehicle in top condition, and that’s why we come to you. No need to book time off or wait around at a workshop  -  our mobile units are fully equipped with everything needed to get you back on the road swiftly.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Our commitment to quality, convenience, and speed sets us apart. Here’s why Tyres Anywhere is the preferred choice for tyre fitting in Ealing:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Available 24/7:</span>
                        Whether it’s an early morning emergency or a late-night blowout, we’re always on hand to help with our round-the-clock service.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Quick, On-Site Repairs:</span>
                        We understand that time is precious, so we come to your location and complete tyre services on-site, whether at home, work, or on the roadside.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our team of expert technicians is trained to provide efficient, safe, and professional tyre services tailored to your vehicle's needs.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        We offer a broad selection of tyres for all vehicles and budgets, ensuring that you get the best option for your driving requirements.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Our mobile tyre fitting service is designed to meet the varied needs of Ealing’s drivers. Whether it’s an emergency tyre replacement or routine tyre maintenance, our fully equipped mobile vans can handle all your tyre needs on the spot.
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
                    If your tyres need replacing, our mobile tyre fitting service makes the process easy. Whether you’re parked at Ealing Broadway, along Uxbridge Road, or in a quiet residential area, we’ll come to your location, fit and balance new tyres, and ensure your vehicle is road-ready in no time. We carry a wide range of tyres, from premium brands to budget options, to meet your specific needs.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every tyre issue requires a replacement. Our mobile tyre repair service can fix punctures and slow leaks on-site, saving you time and money. Whether you’re at home in Ealing Common or parked near Walpole Park, our technicians will assess the damage and, if possible, repair the tyre so you can continue your journey without needing a new one.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses that rely on vans or commercial vehicles, tyre problems can cause costly downtime. Our mobile tyre fitting service for vans and commercial vehicles in Ealing ensures minimal disruption to your operations. We provide fast, reliable tyre solutions tailored to the needs of commercial fleets, getting your business back on the road swiftly.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre problems can strike when you least expect them, which is why our 24/7 emergency mobile tyre service is always available in Ealing. Whether you’ve experienced a blowout on the North Circular or a flat near Ealing Broadway Shopping Centre, we’ll arrive promptly to repair or replace your tyre, ensuring you’re back on the road safely and quickly.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Driving with the correct tyre pressure and balanced wheels is essential for safety and vehicle efficiency. As part of our mobile tyre fitting service, we offer tyre pressure checks and wheel balancing to ensure your car is operating at its best. This service helps extend the life of your tyres and improves overall fuel efficiency.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Key Areas We Serve in Ealing</template>
        <template v-slot:content4>
            <p class="mt-4">
                Ealing is a large borough with a diverse range of neighbourhoods, and our mobile tyre service covers all areas to ensure drivers have access to quick, reliable tyre solutions. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Ealing Broadway
                    </span>
                    <br>
                    Whether you’re shopping, dining, or commuting, we can provide mobile tyre fitting right in the heart of Ealing Broadway, ensuring any tyre issues are resolved quickly.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Acton
                    </span>
                    <br>
                    Our service extends to Acton, offering mobile tyre fitting and repairs in this busy, vibrant area.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Hanwell
                    </span>
                    <br>
                    For drivers in Hanwell, our mobile tyre fitting service comes to your home or business, providing efficient, on-site tyre solutions.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Ealing Common & South Ealing
                    </span>
                    <br>
                    Whether you’re visiting local parks or commuting from Ealing Common, our mobile tyre service ensures you’re never far from expert help.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/greenford">Greenford</Link> and
                    <Link class="text-blue-600 underline" href="/locations/ruislip">Ruislip</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyre problems can happen at any time, but with Tyres Anywhere, you can rest easy knowing help is never far away. Some of the common tyre issues we handle in Ealing include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A puncture from nails or road debris can often be repaired on-site, saving you from needing a full replacement. We’ll patch the tyre if it’s safe to do so.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A sudden tyre blowout is dangerous and requires immediate replacement. Our technicians will arrive quickly to replace the blown tyre and get you back on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn tyres reduce grip and increase the risk of accidents, especially in wet conditions. We provide tyre replacements to ensure your vehicle is safe and roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak could be caused by a minor puncture or valve issue. We’ll inspect your tyre and repair the leak to prevent further problems.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Improper alignment or incorrect tyre pressure can cause uneven wear. We’ll replace worn tyres and help you maintain them for better performance and safety.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting Ealing’s Drivers
            </p>

            <p class="mt-2">
                As Ealing continues to grow and thrive, Tyres Anywhere is proud to support its drivers with fast, professional mobile tyre services. Whether you’re a commuter, a business owner, or a family on the go, we’re here to ensure your tyres are always in top condition without the need for inconvenient garage visits.
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
