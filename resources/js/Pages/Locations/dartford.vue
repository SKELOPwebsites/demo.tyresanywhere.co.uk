<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Dartford. Fast and reliable tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 today!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Dartford. Fast and reliable tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 today!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Reliable Mobile Tyre Fitting in Dartford</template>

        <template v-slot:title1>{{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we specialize in providing professional, mobile tyre fitting services throughout Dartford and the surrounding areas. Whether it’s a flat tyre, emergency replacement, or scheduled fitting, we bring expert tyre solutions directly to your home, workplace, or roadside. Dartford, with its rich history and bustling economy, is a strategic location for commuters and businesses alike. Whether you’re traveling on the M25, shopping at Bluewater, or navigating the Dartford Crossing, our 24/7 mobile tyre service ensures that any tyre issue is resolved quickly and effectively.
            </p>
            <p>
                We take the hassle out of tyre problems by bringing the garage to you. Our fully equipped mobile vans and skilled technicians ensure your tyre issue is addressed on-site, saving you time and getting you back on the road quickly.
            </p>
        </template>

        <template v-slot:title2>Why Dartford Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Dartford drivers rely on Tyres Anywhere for fast, reliable, and professional tyre fitting services. Here’s what sets us apart:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Tyre emergencies don’t follow a schedule, and neither do we. Our round-the-clock mobile tyre service is available anytime, day or night.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        Dartford’s busy roads demand fast service, and we ensure a prompt response to your location, whether you're on the M25 or parked at a shopping centre.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Service:</span>
                        Avoid the hassle of visiting a garage. We come to you with everything needed to fit, repair, or replace your tyres at your convenience.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Qualified Technicians</span>
                        Our team consists of experienced and certified tyre fitters who provide safe, professional services on-site.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        We offer tyres from premium brands to budget options, ensuring you find the perfect tyres to suit your vehicle and your budget.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Comprehensive Mobile Tyre Services in Dartford</template>
        <template v-slot:content3>

            <p class="mt-4">
                From emergency tyre replacements to routine fittings, Tyres Anywhere offers a wide range of mobile tyre services across Dartford. Our fully equipped mobile units allow us to address any tyre issue at your location, whether at home, work, or on the road.
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
                    Need new tyres? We offer mobile tyre fitting services that bring the tyres to you. Whether you're parked near Dartford Station, visiting Central Park, or at your home in a residential area like Wilmington, our technicians will arrive promptly, fit and balance your tyres on-site, and get you back on the road quickly.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every tyre needs to be replaced. If you’ve experienced a minor puncture or slow leak, our mobile tyre repair service can fix the problem on-site, saving you time and money. Whether you’re near Bluewater Shopping Centre or Dartford Heath, we’ll assess the damage and repair your tyre if possible.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Dartford that rely on commercial vehicles or vans, a tyre issue can cause serious delays. Our mobile tyre fitting service for vans ensures your fleet stays on the road with minimal disruption. We carry a wide selection of tyres designed for commercial vehicles and will come to your business or wherever your vehicle is parked to provide fast and efficient service.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    If you’re stranded with a flat tyre or blowout, our 24/7 emergency mobile tyre service is available to provide immediate assistance. Whether you're on the A282, the M25, or anywhere in Dartford, we’ll arrive quickly to repair or replace your tyre and get you back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Proper tyre pressure and wheel balancing are essential for safety and performance. As part of our mobile tyre fitting service, we offer tyre pressure checks and wheel balancing to ensure your vehicle operates smoothly and efficiently.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Key Locations We Serve in Dartford</template>
        <template v-slot:content4>
            <p class="mt-4">
                Dartford is a busy town with both residential and commercial areas, and our mobile tyre service covers all locations to ensure drivers have access to reliable tyre solutions. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Dartford Town Centre
                    </span>
                    <br>
                    Whether you're shopping, working, or enjoying a day out, our mobile tyre fitting service ensures any tyre problems are handled swiftly so you can continue your day without delays.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Bluewater Shopping Centre
                    </span>
                    <br>
                    One of the busiest shopping centres in the UK, Bluewater attracts thousands of drivers daily. If you encounter a tyre issue while shopping, our mobile team will arrive quickly to resolve the problem.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M25 & Dartford Crossing
                    </span>
                    <br>
                    As a key road network for commuters and businesses, the M25 and Dartford Crossing are essential routes. If you experience a tyre issue while on these roads, our mobile service offers fast roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Dartford Heath & Wilmington
                    </span>
                    <br>
                    Whether you’re exploring Dartford Heath or parked in the quiet residential areas of Wilmington, our mobile tyre fitting service covers all corners of Dartford, ensuring fast service wherever you are.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Crayford & Bexley
                    </span>
                    <br>
                    For those in nearby Crayford and Bexley, we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in Dartford</template>
        <template v-slot:content5>
            <p>
                Tyre issues can strike at the most inconvenient times, but Tyres Anywhere is here to provide quick and efficient solutions to keep you moving. Some of the common tyre problems we handle include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Dartford’s busy roads can sometimes cause tyre punctures from debris. We’ll repair your puncture on-site, if possible, saving you the cost of a replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A tyre blowout can be a dangerous issue. Our technicians will quickly replace the tyre, ensuring your vehicle is safe to drive again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Driving on worn tyres reduces your safety, especially in poor weather conditions. We’ll fit new tyres to improve your grip and overall safety on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    Slow leaks can be caused by faulty valves or minor punctures. We’ll assess and fix the leak before it leads to a flat tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven wear can indicate improper alignment or incorrect tyre pressure. We’ll replace any worn tyres and advise on how to prevent future issues.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting Dartford’s Community
            </p>

            <p class="mt-2">
                Dartford is a dynamic and growing town, and Tyres Anywhere is proud to support its residents and businesses with reliable, professional mobile tyre services. Whether you’re commuting, managing a business, or simply going about your day, our tyre fitting service is designed to keep you on the move.
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
