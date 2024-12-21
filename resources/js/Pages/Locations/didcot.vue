<template>
    <Head>
        <meta name="description" content="Emergency mobile tyre fitting services in and around Didcot. Get quick and reliable tyre services at home, work or roadside. Call Tyres Anywhere today!">
        <meta property="og:description" content="Emergency mobile tyre fitting services in and around Didcot. Get quick and reliable tyre services at home, work or roadside. Call Tyres Anywhere today!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Services in {{ location }} - Fast, Reliable, and Delivered to Your Door</template>

        <template v-slot:title1>Mobile Tyre Fitting in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we are committed to providing professional mobile tyre fitting services throughout Didcot and the surrounding areas.
                Whether you need a <b class="font-semibold">tyre replacement, puncture repair, or urgent roadside assistance</b>, our expert technicians are here to help. Didcot,
                a growing town known for its close proximity to Oxford and its key transport links, demands a service that’s as fast and reliable as
                its bustling roads. Whether you're commuting on the <b class="font-semibold">A34</b>, parked at Orchard Centre, or driving through the scenic countryside,
                our 24/7 mobile tyre fitting service is always just a call away.
            </p>
            <p>
                No more waiting at a garage or needing to call for a tow truck. Tyres Anywhere brings the expertise and equipment to your location,
                <b class="font-semibold">making tyre repairs and replacements quick and convenient</b>.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Didcot drivers know they can trust Tyres Anywhere for fast, reliable, and professional mobile tyre services. Here’s why:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Tyre problems can happen any time of day or night. Our team is always ready to assist, offering round-the-clock service.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        We understand the importance of getting back on the road fast, and our technicians arrive promptly wherever you are in Didcot.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Service:</span>
                        Whether you're at home, work, or roadside, our fully equipped vans bring all the necessary tools and tyres to fix the issue on-site.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Qualified Technicians</span>
                        Our technicians are experienced and trained to handle all tyre-related problems, ensuring your safety and satisfaction.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        We carry tyres for all vehicles, from high-performance brands to budget-friendly options, so you’ll find the right fit for your car.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in Didcot</template>
        <template v-slot:content3>

            <p class="mt-4">
                Whether you need a quick puncture repair or a full tyre replacement, our mobile tyre services in Didcot offer everything you need to keep moving.
                Our technicians arrive with fully equipped mobile units, ready to handle any tyre issue on-site, saving you the inconvenience of visiting a garage.
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
                    If your tyres need replacing, our mobile tyre fitting service delivers and fits tyres wherever you are. Whether you're at the Orchard Centre, parked at home in Great Western Park, or anywhere in Didcot, we’ll fit and balance your tyres on-site. With a range of tyres to suit all vehicles, we ensure your car is road-ready without the hassle of a garage visit.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    A puncture or slow leak doesn’t always mean you need a new tyre. Our mobile tyre repair service assesses and fixes punctures on-site, saving you the cost of a full replacement. Whether you’re parked at Didcot Railway Station or visiting a local park, our mobile team will come to you and provide a quick, affordable solution.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Didcot that rely on vans or commercial vehicles, downtime due to tyre issues can impact operations. Our van mobile tyre fitting service ensures that your vehicles are back on the road with minimal delay. We carry tyres specifically designed for commercial vehicles and vans, providing expert fitting to keep your business running smoothly.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    No matter where you are in Didcot — whether you're stuck on the A4130, the A34, or anywhere in town — our 24/7 emergency mobile tyre service will come to you quickly. From tyre blowouts to sudden punctures, we handle all emergency tyre issues day or night, ensuring you're never left stranded.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining proper tyre pressure and balanced wheels is essential for both safety and fuel efficiency. As part of our mobile tyre service, we offer tyre pressure checks and wheel balancing to extend the life of your tyres and ensure a smooth driving experience.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Key Locations We Serve in Didcot</template>
        <template v-slot:content4>
            <p class="mt-4">
                Didcot is a growing town with many residential and commercial areas, and our mobile tyre fitting service covers all of them. Key locations we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Didcot Town Centre
                    </span>
                    <br>
                    Whether you’re shopping at Orchard Centre or parked nearby, our mobile tyre fitting service ensures any tyre issue is handled quickly and professionally.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Great Western Park
                    </span>
                    <br>
                    Residents in Great Western Park can take advantage of our mobile tyre service for fast, convenient tyre fitting or repairs right at their doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Didcot Railway Station
                    </span>
                    <br>
                    If you encounter tyre trouble near Didcot Station, our mobile units will arrive promptly to repair or replace your tyre, ensuring minimal disruption to your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A34 & A4130 Routes
                    </span>
                    <br>
                    Busy routes like the A34 and A4130 see a lot of traffic, and if you’re facing tyre issues on these roads, our mobile service provides rapid roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/abingdon">Abingdon</Link> and
                    <Link class="text-blue-600 underline" href="/locations/oxford">Oxford</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyre issues can occur without warning, but Tyres Anywhere is here to handle them efficiently. Some of the common tyre problems we address in Didcot include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Whether caused by nails or other sharp debris, punctures are a common problem. If the tyre is repairable, we’ll fix it on-site, saving you from needing a replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout is a more serious issue that requires immediate replacement. Our technicians will replace the tyre with a new one to ensure your vehicle is safe to drive again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn tyres can be dangerous, particularly in wet or icy conditions. We’ll fit new tyres to keep your vehicle safe and roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow air leak could be the result of a faulty valve or minor puncture. We’ll assess and repair the issue before it leads to a flat tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven wear can indicate improper alignment or incorrect tyre pressure. We’ll replace worn tyres and provide advice on maintaining proper tyre care moving forward.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting the Didcot Community
            </p>

            <p class="mt-2">
                As Didcot continues to grow, Tyres Anywhere is proud to support the local community with professional, reliable mobile tyre services. Whether you’re a resident, a commuter, or a business owner, our mobile tyre fitting service ensures you’re never far from expert help.
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
