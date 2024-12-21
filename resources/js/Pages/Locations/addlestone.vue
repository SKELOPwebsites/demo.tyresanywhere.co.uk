<template>
    <Head>
        <meta name="description" content="Mobile tyre fitting in Addlestone, 24/7 emergency service. Fast, reliable tyre repair or replacement at your location. Call Tyres Anywhere at 07442 980101 now.">
        <meta property="og:description" content="Mobile tyre fitting in Addlestone, 24/7 emergency service. Fast, reliable tyre repair or replacement at your location. Call Tyres Anywhere at 07442 980101 now." />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Emergency Service</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we provide prompt, convenient, and professional <b class="font-semibold">mobile tyre fitting services across Addlestone</b> and its nearby areas.
                Whether you're in need of emergency roadside assistance, at home, or at work, our fully equipped mobile tyre service van is ready to come
                to your location and handle all your tyre-related issues. We understand that a flat tyre can happen at any time, and that's why we offer
                24/7 emergency services to ensure you’re back on the road quickly and safely.
            </p>
            <p>
                Addlestone, a vibrant town with its mix of suburban comfort and proximity to larger urban centers,
                is a key area for our mobile tyre services. Whether you're near the historic Crouch Oak Tree,
                shopping at The Runnymede Centre, or traveling along the M25, our expert team is always ready to assist you.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                When it comes to tyre emergencies, timing and convenience are everything.
                Here’s why residents and motorists in Addlestone trust us for their tyre fitting and repair needs:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Whether it's the middle of the day or night, we’re available around the clock to assist with any tyre emergencies. You can rely on us for swift and efficient service no matter where you are.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We understand how frustrating a tyre issue can be. That's why we strive to get to your location as quickly as possible, whether you’re near Addlestone railway station or stuck along the A320.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Services</span>
                        From tyre replacements to puncture repairs and valve changes, we offer a full range of mobile tyre services. Our mobile vans are fully stocked with high-quality tyres and the latest tools to handle any tyre emergency.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our team of highly skilled and trained technicians is capable of dealing with all types of vehicles, from small cars to large vans. They work efficiently and professionally, ensuring that your tyres are handled with care.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Convenience:</span>
                        No need to take time out of your busy day to visit a garage. We bring our services directly to you, whether you're at home, at work, or even at the supermarket. You can carry on with your day while we get your tyres sorted.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Our Mobile Tyre Services in <u>{{ location }}</u></template>
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
                    Need to replace worn-out or damaged tyres? We offer fast and reliable mobile tyre fitting services at your location. Whether you drive a car, van, or commercial vehicle, we have a wide selection of tyres to suit your needs, from premium brands to budget options. Once on-site, we’ll replace and balance your tyres quickly and efficiently.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not all tyre problems require a complete replacement. If you’ve had a puncture or other minor tyre issue, our mobile tyre repair service can help. We can repair punctures, replace faulty valves, and fix other small issues that may otherwise shorten your tyre's lifespan.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    We understand how crucial it is to keep your van on the road, especially if you rely on it for work. That’s why we provide specialized mobile tyre fitting services for vans, ensuring minimal downtime. We’ll come to your location with the right tyres and tools to get your van back up and running as soon as possible.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    When tyre issues strike unexpectedly, our emergency mobile tyre fitting and repair services are here to help. Whether you’re stuck on the side of the road near Weybridge or traveling on the M25, our team can come to you quickly and provide the assistance you need.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Local Knowledge – Landmarks and Areas We Serve in Addlestone</template>
        <template v-slot:content4>
            <p class="mt-4">
                Addlestone is a charming town in Surrey, rich in history and conveniently located near major roads like the M25. Our mobile tyre fitting services cover the whole town and beyond. Some of the key landmarks and locations we regularly serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Crouch Oak Tree
                    </span>
                    <br>
                    As one of Addlestone’s most famous landmarks, the ancient Crouch Oak Tree is a popular spot. If you're in this area and experience a flat tyre, don’t worry — we can reach you quickly and get you back on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Runnymede Centre
                    </span>
                    <br>
                    A busy shopping destination, we often receive calls from motorists who find themselves with a puncture while visiting the Runnymede Centre. With our mobile service, you can continue shopping while we sort out your tyre issues in the parking lot.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        St. George’s College
                    </span>
                    <br>
                    Whether you’re a student, teacher, or parent on the go, a flat tyre can disrupt your day. We can come to you quickly, whether you’re on campus or heading to school activities.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M25 and A320 Routes
                    </span>
                    <br>
                    Addlestone's proximity to the M25 and A320 means a lot of drivers rely on these routes for commuting or travel. If you experience a tyre issue along these busy roads, our technicians are trained to provide roadside assistance quickly and safely.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Issues We Handle in Addlestone</template>
        <template v-slot:content5>
            <p>
                Tyre problems can happen unexpectedly, and knowing what to expect can help you decide whether you need a repair or replacement. Here are some of the most common tyre issues we deal with in Addlestone:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    One of the most common tyre issues, punctures can be caused by sharp objects like nails or debris on the road. If the damage is repairable, we’ll patch it up quickly, saving you the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Tyre Blowouts
                    </span>
                    <br>
                    A blowout can be dangerous, especially at high speeds. If your tyre has completely deflated or burst, we can replace it on the spot with one of the high-quality tyres from our stock.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    If your tyres are showing signs of wear, such as reduced tread depth, they could be dangerous, especially in wet or icy conditions. We’ll assess your tyre’s tread and replace them if necessary to ensure your vehicle remains safe on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    This can be caused by misaligned wheels or incorrect tyre pressure. If your tyres are wearing out unevenly, we’ll inspect them and make the necessary adjustments or replacements to ensure your vehicle drives smoothly and safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    Sometimes, a tyre may slowly lose air due to a small puncture or a faulty valve. If your tyre is losing pressure but doesn’t seem to have a major issue, we can investigate and repair the problem.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book an appointment for mobile tyre repair today</template>
        <template v-slot:content6>
            <p>
                A flat or damaged tyre doesn’t have to ruin your day. At Tyres Anywhere, we’re dedicated to providing fast, reliable, and professional mobile tyre services throughout Addlestone. Whether you're visiting local landmarks or commuting along the busy roads, you can count on us to get you back on the road swiftly and safely.
            </p>
            <p>
                To book an appointment or for emergency tyre assistance, give us a <a class="text-blue-600 underline" href="tel:07442980101">call</a>.
                We’re here to help 24/7 with expert tyre fitting, repairs, and more.
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
