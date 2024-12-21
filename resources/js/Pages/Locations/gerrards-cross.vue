<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Gerrards Cross. Fast, expert tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 for quick service now!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Gerrards Cross. Fast, expert tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 for quick service now!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>24/7 Mobile Tyre Services in Gerrards Cross – Fast, Convenient, and Delivered to Your Location</template>

        <template v-slot:title1>Professional Tyre Solutions on Your Schedule</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere offers premium mobile tyre fitting services across Gerrards Cross and the surrounding areas.
                Whether you're dealing with a <b class="font-semibold">flat tyre, require an urgent replacement, or need routine tyre maintenance</b>,
                our expert team brings the garage to you. Gerrards Cross, known for its beautiful residential streets and
                proximity to <b class="font-semibold">major routes like the M40</b>, requires fast and efficient solutions to keep drivers on the road.
                Whether you're at home in a quiet cul-de-sac, parked near Gerrards Cross Common, or commuting along the A40,
                our 24/7 mobile tyre service ensures you never face a tyre problem alone.
            </p>
            <p>
                Gone are the days of waiting at a garage. With Tyres Anywhere, our mobile units are fully equipped to handle tyre replacements, repairs, and checks right at your location, saving you time and hassle.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Rely on Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                We understand the needs of busy drivers in Gerrards Cross, and our service is designed to offer fast, professional tyre solutions wherever you are. Here's why local drivers trust us:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Available 24/7:</span>
                        Tyre issues don’t wait for business hours, and neither do we. Our service is available around the clock, ensuring you’re never stuck without assistance.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        We understand the need for speed, especially when you’re faced with an unexpected flat tyre. Our technicians respond quickly to your location.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Repairs and Fittings:</span>
                        Whether at home, work, or on the roadside, we bring the service to you, saving you the trouble of visiting a garage.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Certified Experts:</span>
                        Our team consists of skilled professionals who provide expert tyre repairs and replacements, ensuring your safety and satisfaction.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Range:</span>
                        From premium tyres to budget-friendly options, we offer a variety of tyres to suit your vehicle and driving needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Whether you need an emergency tyre repair, a new set of tyres, or regular maintenance, Tyres Anywhere provides a full range of mobile tyre services in Gerrards Cross. We come to you with all the necessary tools and equipment to ensure your tyres are road-ready.
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
                    Our mobile tyre fitting service is designed for convenience. Whether you’re parked at home, outside a shop, or at your workplace in Gerrards Cross, we’ll come to you with a range of tyre options suitable for your vehicle. Our technicians will fit and balance your new tyres on-site, ensuring your car is road-ready without the inconvenience of a garage visit.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not all tyre problems require a replacement. If you’ve experienced a puncture or slow leak, our mobile tyre repair service can often fix the issue on-site. Whether you’re near Gerrards Cross Station or enjoying a day at West Common, we’ll arrive quickly, assess the damage, and, if possible, repair the tyre to get you back on the road safely.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Gerrards Cross that rely on vans or commercial vehicles, tyre issues can cause significant delays. Our mobile tyre fitting service for commercial vehicles ensures that your fleet stays operational with minimal downtime. We provide a wide range of tyres for vans and heavy-duty vehicles and offer fast, efficient service to keep your business moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre trouble can strike at any time, but our 24/7 emergency mobile tyre service ensures you’re never left stranded in Gerrards Cross. Whether you’ve experienced a flat tyre on the A40 or a blowout on Packhorse Road, our team will arrive promptly to provide a quick repair or replacement, ensuring you can continue your journey safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Correct tyre pressure and balanced wheels are essential for safety and fuel efficiency. As part of our mobile service, we offer tyre pressure checks and wheel balancing to ensure your vehicle runs smoothly. This helps prolong tyre life and improve overall vehicle performance.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving Gerrards Cross</template>
        <template v-slot:content4>
            <p class="mt-4">
                Gerrards Cross is a beautiful and affluent area, and Tyres Anywhere provides mobile tyre services across the entire town. Whether you’re in a residential neighbourhood or driving along a busy route, we bring expert tyre solutions to your location. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Gerrards Cross Town Centre
                    </span>
                    <br>
                    Whether you’re shopping or working in the town centre, our mobile tyre service offers quick and convenient assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        West Common & East Common Club
                    </span>
                    <br>
                    If you’re enjoying the outdoors or parked near the commons, we’ll arrive quickly to repair or replace your tyre on the spot.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A40 & M40 Routes
                    </span>
                    <br>
                    These major routes see a lot of traffic from local commuters. If you encounter tyre trouble on these roads, we provide rapid roadside assistance to ensure you’re not delayed for long.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Bulstrode Park & Nearby Areas
                    </span>
                    <br>
                    Residents and visitors in and around Bulstrode Park can rely on our mobile tyre fitting service for fast and efficient tyre solutions.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/beaconsfield">Beaconsfield</Link> and
                    <Link class="text-blue-600 underline" href="/locations/uxbridge">Uxbridge</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyre issues can happen without warning, but Tyres Anywhere ensures you’re never left without help. Some common tyre problems we handle in Gerrards Cross include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A puncture caused by sharp objects can often be repaired on-site, saving you the cost of a full tyre replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A sudden blowout requires an immediate tyre replacement. We’ll arrive quickly to fit a new tyre and ensure your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn-out tyres reduce road grip and increase the risk of accidents. We offer tyre replacements to keep your vehicle safe and roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    Slow leaks can lead to flat tyres over time. We’ll identify the issue and fix it on-site, preventing further damage.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Improper tyre pressure or alignment can cause uneven wear. We’ll replace any worn tyres and provide advice on maintaining proper tyre care in the future.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting the Gerrards Cross Community
            </p>

            <p class="mt-2">
                Gerrards Cross is a vibrant town with a strong community spirit, and Tyres Anywhere is proud to support its drivers with fast, reliable mobile tyre services. Whether you’re commuting, running errands, or managing a business fleet, our mobile tyre fitting service ensures your tyres are always in top condition.
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
