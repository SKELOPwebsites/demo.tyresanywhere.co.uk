<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Basingstoke. Fast tyre repairs and replacements at your home, work, or roadside. Call Tyres Anywhere at for expert service today!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Basingstoke. Fast tyre repairs and replacements at your home, work, or roadside. Call Tyres Anywhere at for expert service today!" />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Emergency Service</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere is proud to offer expert mobile tyre fitting services in Basingstoke and its surrounding areas.
                Whether you're facing a <b class="font-semibold">flat tyre, need an urgent replacement, or require a puncture repair</b>,
                our mobile service brings tyre fitting straight to your location. From the bustling Festival Place
                shopping centre to the quieter outskirts near the North Wessex Downs, our team is on hand to help.
                We operate 24/7, ensuring that no matter when or where your tyre problem occurs, we can quickly come to your aid and get you back on the road.
            </p>
            <p>
                Basingstoke is known for its vibrant town centre and excellent transport links, including the M3,
                making it a key area for commuters and drivers. With our mobile tyre service, there’s no need to visit
                a garage or wait for roadside assistance — we come directly to you to provide a fast, convenient solution to your tyre problems.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                Tyres Anywhere is dedicated to making tyre replacement and repair as hassle-free as possible. Here’s why motorists in Basingstoke rely on us for their tyre needs:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Tyre issues don’t keep regular hours, and neither do we. Our mobile tyre fitting service is available 24/7, ensuring that help is always available when you need it.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Quick Response Times:</span>
                        We understand that a tyre emergency can disrupt your day. Our local team strives to reach you as quickly as possible, whether you're in the town centre or traveling on the M3.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Convenience:</span>
                        We bring the garage to you, eliminating the need to drive to a tyre shop or wait for a tow. We can fit or repair your tyres on-site, whether you’re at home, work, or roadside.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our technicians are fully trained to handle a wide range of tyre services, from puncture repairs to complete replacements, ensuring safe and professional service.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Services:</span>
                        From emergency repairs to routine replacements, we offer a full range of mobile tyre services to meet your specific needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in <u>{{ location }}</u></template>
        <template v-slot:content3>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <Link href="/mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Whether you need a single tyre replaced or a full set, our mobile tyre fitting service brings high-quality tyres to your location. We stock a wide range of tyre brands to suit different vehicle types and budgets, and our expert technicians will fit and balance them on-site.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not all tyre issues require a replacement. Our mobile tyre repair service covers punctures, slow leaks, and other minor issues, saving you the cost of a new tyre when a repair is possible. We’ll assess the condition of your tyre and provide an on-the-spot fix if it’s safe.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For those who depend on their vans for work or travel, a tyre problem can cause major delays. Our mobile van tyre fitting service ensures that your tyres are repaired or replaced quickly, so you can get back to business with minimal downtime.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    When a tyre emergency strikes, our 24/7 emergency mobile tyre service is ready to assist. Whether you’re facing a flat tyre at home or stranded on the roadside near Basingstoke’s key routes, we’ll arrive quickly to resolve the issue.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving Basingstoke and Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Basingstoke is a lively and expanding town, and we’re proud to serve drivers across all areas. Our mobile tyre fitting service covers Basingstoke and its surrounding locations, including:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Festival Place Shopping Centre
                    </span>
                    <br>
                    If you experience a tyre issue while shopping or parked at Festival Place, we’ll come to your location and provide fast, convenient service, allowing you to continue your day without disruption.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Basingstoke Leisure Park
                    </span>
                    <br>
                    Whether you’re enjoying a family day out or attending an event at the leisure park, a tyre emergency doesn’t have to ruin your plans. We’ll arrive promptly and fix the problem, ensuring you can continue enjoying your time.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M3 Motorway
                    </span>
                    <br>
                    As a major route connecting Basingstoke to London and the south, the M3 sees heavy traffic. If you experience tyre trouble while driving on the M3, our mobile service is equipped to handle roadside assistance quickly and safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        North Wessex Downs
                    </span>
                    <br>
                    If you’re exploring the scenic countryside around the North Wessex Downs and encounter a tyre issue, we’ll reach you no matter how remote the location, providing prompt and professional service.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Solve in Basingstoke</template>
        <template v-slot:content5>
            <p>
                Tyre problems can occur without warning and cause significant inconvenience. Here are some of the most common tyre issues we handle and how we can help:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Sharp objects like nails or debris on the road can cause punctures. Our technicians can repair small punctures on-site, saving you the cost of a new tyre when possible.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout can be dangerous and often occurs when a tyre is severely worn or under-inflated. We’ll replace your blown tyre quickly to ensure your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Worn Tread
                    </span>
                    <br>
                    Driving on worn tyres can increase the risk of accidents, especially in poor weather conditions. We’ll check your tyres’ tread depth and replace them if necessary to ensure your vehicle is roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak can often be traced to a faulty valve or small puncture. Our mobile service will inspect and repair the leak, ensuring your tyre maintains proper pressure.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Wear
                    </span>
                    <br>
                    Uneven tyre wear is usually a sign of improper wheel alignment or incorrect tyre pressure. We’ll replace worn tyres and advise on how to prevent future issues, helping you extend the life of your tyres.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Basingstoke Today</template>
        <template v-slot:content6>
            <p>
                A flat or damaged tyre doesn’t have to ruin your day. With Tyres Anywhere, our mobile tyre fitting service in Basingstoke ensures that help is always nearby. Whether you need a quick repair, an emergency tyre replacement, or regular tyre maintenance, we’re ready to get you back on the road safely and efficiently.
            </p>
            <p>
                To book your mobile tyre fitting service or request emergency assistance, call us now at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 to handle all your tyre needs in Basingstoke.
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
