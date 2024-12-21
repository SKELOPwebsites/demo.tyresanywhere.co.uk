<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Brixton. Fast tyre repairs or replacements at your home, work, or roadside. Call Tyres Anywhere for expert, reliable service today!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Brixton. Fast tyre repairs or replacements at your home, work, or roadside. Call Tyres Anywhere for expert, reliable service today!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Availability</template>

        <template v-slot:title1>Expert Mobile Tyre Fitting in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we offer comprehensive mobile tyre fitting services throughout Brixton and the surrounding areas. Whether you’re dealing with a flat tyre, need a quick replacement, or are facing an emergency roadside situation, we bring the solution directly to you. Brixton, known for its vibrant culture and bustling streets, is a busy area where drivers need quick and convenient service. Whether you’re near Electric Avenue, navigating through Brixton Market, or commuting along the A23, our expert mobile tyre technicians are available 24/7 to help you wherever you are.
            </p>
            <p>
                Our mobile tyre fitting service means that you don’t have to visit a garage or wait for towing. We come to your location, fully equipped to handle any tyre issue, and ensure that you’re back on the road quickly. With Tyres Anywhere, you get reliable, professional tyre services when and where you need them.
            </p>
        </template>

        <template v-slot:title2>Why Choose Tyres Anywhere for Mobile Tyre Fitting in Brixton?</template>
        <template v-slot:content2>
            <p class="mt-4">
                Tyres Anywhere takes the stress out of dealing with tyre problems. We provide fast, reliable service tailored to your needs. Here’s why drivers in Brixton trust us with their tyre issues:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Assistance:</span>
                        No matter the time of day or night, our technicians are available around the clock to assist with any tyre emergency.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Rapid Response Times:</span>
                        We understand how inconvenient a tyre issue can be, which is why we aim to reach your location as quickly as possible, minimizing disruption to your day.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Tyre Solutions:</span>
                        We bring the garage to you, handling everything from repairs to replacements on-site, so you don’t have to worry about driving to a workshop.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Professional Technicians:</span>
                        Our skilled technicians are trained to handle all tyre-related issues, ensuring your vehicle is serviced safely and efficiently.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyre Services:</span>
                        From puncture repairs to full replacements, we offer a variety of mobile tyre services designed to meet your specific needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Comprehensive Mobile Tyre Services in Brixton</template>
        <template v-slot:content3>

            <p class="mt-4">
                At Tyres Anywhere, we provide a wide range of tyre services, all delivered by our mobile team to your location. Whether you’re at home, at work, or on the roadside, we’re equipped to handle any tyre issue on-site.
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
                    Need new tyres? Our mobile tyre fitting service ensures that your vehicle gets the tyres it needs without the hassle of visiting a garage. We carry a range of tyres suitable for all types of vehicles and budgets, from premium brands to more economical options. Our technicians will fit and balance your tyres on-site, making sure your vehicle is ready for a safe and smooth drive.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If your tyre can be repaired, our mobile tyre repair service offers a fast and affordable solution. Whether it’s a puncture, a slow leak, or a valve issue, we’ll assess the damage and fix it on-site, saving you the cost of a new tyre when possible.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For van drivers, a tyre problem can cause significant delays, especially if your van is crucial for work. Our mobile van tyre fitting service ensures that you’re back on the road quickly, with minimal downtime. We carry tyres designed specifically for vans and commercial vehicles, ensuring both safety and performance.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre emergencies don’t follow a schedule, and when they occur, you need fast help. Our 24/7 emergency mobile tyre service is available to provide immediate assistance wherever you are in Brixton. Whether you’ve experienced a blowout on the A23 or are stuck with a flat tyre near Brixton Academy, we’ll be there quickly to resolve the issue and get you moving again.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Balancing</span>
                    <br><br>
                    Driving with the correct tyre pressure is essential for safety, fuel efficiency, and preventing uneven tyre wear. As part of our service, we provide tyre pressure checks and adjustments, ensuring your tyres are properly inflated. Additionally, we offer wheel balancing to reduce vibrations and ensure a smoother ride.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Local Areas and Landmarks We Serve in Brixton</template>
        <template v-slot:content4>
            <p class="mt-4">
                Brixton is a vibrant, bustling area, and we’re proud to serve drivers across all its locations. Whether you’re parked at a local hotspot or driving through the busy streets, our mobile tyre fitting service covers every corner of Brixton, including:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Electric Avenue
                    </span>
                    <br>
                    Famous for its markets and energy, Electric Avenue is a busy area for locals and visitors alike. If you experience tyre trouble while exploring this iconic spot, we’ll provide fast and efficient service on-site.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Brixton Market
                    </span>
                    <br>
                    If you’re shopping at Brixton Market and encounter tyre trouble, our mobile team can come to your location and handle the issue, whether it’s a repair or a full replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A23 & A2217 Routes
                    </span>
                    <br>
                    Brixton’s location along major roads like the A23 makes it a key commuting route. If you experience tyre trouble while driving on these busy roads, we provide fast roadside assistance to get you back on track.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Brixton Academy
                    </span>
                    <br>
                    Whether you’re visiting Brixton Academy for a show or passing through the area, a flat tyre doesn’t have to ruin your night. Our mobile tyre service ensures that any tyre problem is solved quickly, allowing you to continue with your plans.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Brockwell Park
                    </span>
                    <br>
                    If you’re enjoying a day at Brockwell Park and find yourself with a flat tyre, our technicians will arrive promptly to repair or replace your tyre on-site, ensuring minimal disruption to your day.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in Brixton</template>
        <template v-slot:content5>
            <p>
                Tyre issues can arise unexpectedly, but our mobile tyre service in Brixton is here to help. Here are some common tyre problems we handle:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A sharp object like a nail or glass can cause a puncture. If the puncture is repairable, we’ll fix it on-site, saving you the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A tyre blowout is a serious issue that requires immediate attention. We’ll replace the blown tyre quickly and ensure your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Worn Tyres
                    </span>
                    <br>
                    Driving on tyres with low tread is unsafe and can lead to accidents, especially in poor weather. We offer replacements to keep your vehicle roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak may be caused by a minor puncture or a faulty valve. We’ll inspect your tyre and repair the leak on-site to prevent further issues.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven wear is often caused by alignment or pressure issues. We’ll replace worn tyres and advise on how to maintain proper tyre care for future use.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting Brixton’s Dynamic Community
            </p>

            <p class="mt-2">
                Brixton is a vibrant area, full of life and energy, and with a busy urban environment, the need for reliable and fast tyre services is essential.
                At Tyres Anywhere, we’re committed to supporting Brixton’s dynamic community with convenient, expert tyre solutions that keep you safe on the road.
                <br><br>
                Whether you’re a commuter, business owner, or just passing through, our mobile tyre fitting service is designed to meet your needs quickly and professionally.
            </p>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Brixton Today</template>
        <template v-slot:content6>
            <p>
                Don’t let a flat tyre or blowout disrupt your day. With Tyres Anywhere, our mobile tyre fitting service in Brixton ensures that you get fast, reliable assistance no matter where you are. Whether you need a tyre repair, an emergency replacement, or routine maintenance, we’re here to get you back on the road safely and efficiently.
            </p>
            <p>
                To schedule your mobile tyre fitting or request emergency assistance, call us today at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 for all your tyre needs in Brixton.
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
