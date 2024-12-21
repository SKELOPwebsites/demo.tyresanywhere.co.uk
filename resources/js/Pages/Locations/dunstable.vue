<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Dunstable. Quick and professional tyre repairs and replacements delivered to your location. Call us now for expert service now!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Dunstable. Quick and professional tyre repairs and replacements delivered to your location. Call us now for expert service now!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Premier Mobile Tyre Fitting in {{ location }}</template>

        <template v-slot:title1>A Smarter Way to Manage Tyre Issues</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we redefine convenience with our professional mobile tyre fitting services across Dunstable. Whether you’re caught with a flat on the A5 or need a quick tyre replacement at home, we bring our expertise directly to you. Dunstable, with its rich heritage and proximity to scenic spots like the Dunstable Downs, is a busy town that deserves a tyre service that’s both flexible and reliable. No need to interrupt your day—our mobile units are fully equipped to handle tyre problems on the spot, letting you get back to your routine without delay.
            </p>
            <p>
                Tyres Anywhere eliminates the frustration of visiting a garage. We ensure that all tyre issues are addressed wherever you are, whether it’s at your home, workplace, or by the roadside. Our technicians are always ready to provide efficient, top-tier service to keep your vehicle in perfect driving condition.
            </p>
        </template>

        <template v-slot:title2>Why Choose Tyres Anywhere in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                We understand that time is precious, and our mobile tyre service is built around convenience, quality, and speed. Here’s what makes us stand out for Dunstable drivers:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Service Anytime, Anywhere:</span>
                        Whether it's a morning commute or late-night emergency, our 24/7 mobile service is designed to cater to your needs.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Swift Response:</span>
                        We know that tyre issues can disrupt your plans, so we focus on providing fast solutions with minimal downtime.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Solutions:</span>
                        Our mobile units bring the workshop to you, fully equipped to handle everything from puncture repairs to new tyre fittings.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Qualified Technicians</span>
                        Our team consists of qualified professionals who ensure every tyre service is completed to the highest standard.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        We offer a wide variety of tyres to suit every vehicle and budget, ensuring you get the best value for your money.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tyres Anywhere offers a comprehensive range of mobile tyre services to meet the needs of Dunstable’s drivers. From emergency roadside assistance to routine tyre changes, our fully equipped vans allow us to perform every service directly at your location.
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
                    Need new tyres? Whether you’re in the heart of Dunstable or out near the tranquil Dunstable Downs, our mobile tyre fitting service comes directly to you. Our expert technicians will arrive with a variety of tyre options suitable for your vehicle. We’ll install and balance your new tyres on-site, ensuring that your car is ready to go without the need for a garage visit.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Facing a puncture? Our mobile tyre repair service is the perfect solution for minor tyre damage. Whether you’re parked near the Grove Theatre or caught on a rural road outside Dunstable, our technicians can assess the damage and perform a repair on-site if it’s safe to do so. This service saves you the time and cost of a full tyre replacement.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses that rely on vans or commercial vehicles in Dunstable, tyre problems can result in costly downtime. Our mobile tyre fitting service for commercial vehicles ensures that your fleet is back in action as quickly as possible. We carry a range of tyres tailored for heavy-duty use, providing efficient, professional service wherever your vehicles are parked.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Unexpected tyre issues can strike anytime, but our 24/7 emergency mobile tyre service ensures you’re never left stranded. Whether you’re driving along the A505 or stuck near Dunstable’s Quadrant Shopping Centre, we’ll arrive quickly to repair or replace your tyre. Our emergency response means you can get back on the road with minimal delay, no matter the time of day.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    To ensure optimal performance and safety, maintaining correct tyre pressure and wheel balance is essential. As part of our service, we provide tyre pressure checks and wheel balancing to help improve fuel efficiency and extend the life of your tyres. This added service ensures your vehicle runs smoothly and safely.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Where We Serve in Dunstable</template>
        <template v-slot:content4>
            <p class="mt-4">
                Dunstable is a growing town with a mix of residential areas and busy roads, and Tyres Anywhere covers all corners to ensure drivers have access to fast, reliable tyre services. Key locations we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Dunstable Town Centre
                    </span>
                    <br>
                    Whether you're shopping or working in the centre, our mobile tyre service can meet you wherever you are to handle any tyre issue quickly.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Dunstable Downs
                    </span>
                    <br>
                    If you're enjoying a day outdoors and experience a flat tyre, we’ll come to you, providing roadside assistance in the surrounding countryside.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A5 & A505 Roads
                    </span>
                    <br>
                    Major routes like the A5 and A505 see significant traffic, and if you encounter tyre trouble, our mobile team will offer quick roadside assistance to get you moving again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/luton">Luton</Link> and
                    <Link class="text-blue-600 underline" href="/locations/leighton-buzzard">Leighton Buzzard</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyre issues can arise at any time, but with Tyres Anywhere, you’re always prepared. Our mobile tyre service addresses a variety of common tyre problems, including:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A puncture caused by sharp debris can often be repaired on-site. We’ll patch up the tyre if it’s safe, saving you the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout requires an immediate tyre replacement. Our technicians will replace the tyre on-site, ensuring your vehicle is safe to drive again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn tyres reduce road safety and increase the risk of accidents, particularly in wet conditions. We’ll replace worn tyres with new ones that offer better grip and performance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    Slow leaks, often caused by valve or minor puncture issues, can lead to flat tyres over time. We’ll identify the cause and fix the leak on-site.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven tyre wear can result from improper alignment or incorrect tyre pressure. We’ll replace the affected tyres and help you maintain optimal tyre care.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting the Dunstable Community
            </p>

            <p class="mt-2">
                As Dunstable grows and develops, Tyres Anywhere is proud to provide its residents and businesses with reliable and convenient mobile tyre services. Whether you’re a commuter, business owner, or visitor, our mobile tyre fitting service ensures that tyre issues don’t interrupt your day.
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
