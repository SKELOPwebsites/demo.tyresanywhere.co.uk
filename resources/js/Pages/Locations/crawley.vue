<template>
    <Head>
        <meta name="description" content="Emergency mobile tyre fitting in Crawley and Gatwick. Fast and expert tyre repairs or replacements at your home, work, or roadside. Call 07442 980101 today!">
        <meta property="og:description" content="Emergency mobile tyre fitting in Crawley and Gatwick. Fast and expert tyre repairs or replacements at your home, work, or roadside. Call 07442 980101 today!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – Professional Tyre Services Delivered to Your Location</template>

        <template v-slot:title1>Mobile Tyre Fitting Service in {{ location }}</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere proudly serves Crawley and the surrounding West Sussex areas with professional, convenient mobile tyre fitting services. Whether you need a tyre replacement, puncture repair, or roadside assistance, we bring expert tyre services directly to your door. Crawley, a town known for its proximity to Gatwick Airport and as a key transport hub in the South East, demands quick and reliable service to keep its drivers moving. Whether you're on the busy M23 or parked in the town centre near County Mall, our 24/7 mobile tyre service ensures that tyre troubles won’t disrupt your day.
            </p>
            <p>
                Gone are the days of waiting at a garage or arranging for a tow — with Tyres Anywhere, our mobile units come equipped with the latest tools and tyres to provide on-the-spot solutions, ensuring fast and hassle-free tyre fitting.
            </p>
        </template>

        <template v-slot:title2>Why Crawley Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in Crawley trust Tyres Anywhere for reliable, professional service. Here’s why:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Tyre problems can occur at any hour, and we’re ready to help day or night with our fast-response mobile tyre service.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Quick Response:</span>
                        With quick access to Crawley’s major roads and neighbourhoods, our technicians arrive promptly to ensure minimal downtime.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Service:</span>
                        Whether at home, at work, or roadside, our mobile vans are fully equipped to handle everything from tyre repairs to full replacements.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians</span>
                        Our team of experts has the skills and experience to resolve tyre issues efficiently and safely.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        We offer tyres from leading brands as well as budget-friendly options, ensuring you receive the best solution for your vehicle.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in Crawley</template>
        <template v-slot:content3>

            <p class="mt-4">
                We offer a full range of mobile tyre services to cover any tyre issues you encounter in Crawley. Whether you need an emergency repair or a scheduled replacement, we’ll bring the service directly to you, saving you the time and inconvenience of a garage visit.
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
                    If your tyres need replacing, our mobile tyre fitting service delivers and fits new tyres at your location. Whether you’re parked outside Tilgate Park or near Gatwick Airport, our technicians will arrive with a selection of tyres suited to your vehicle, fitting and balancing them on-site. You’ll be back on the road in no time, without the hassle of driving to a garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If a puncture or slow leak has interrupted your day, our mobile tyre repair service can fix the problem on-site. Whether it’s a minor puncture or a valve issue, we’ll assess the damage and repair your tyre if possible. From the neighbourhoods of Three Bridges to Langley Green, we cover all of Crawley’s areas to ensure you get fast and affordable tyre repairs.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Businesses in Crawley rely on vans for deliveries and services, and tyre issues can cause major delays. Our van mobile tyre fitting service is designed to get commercial vehicles back on the road quickly. We offer a wide range of tyres suitable for vans and commercial vehicles, ensuring minimal downtime for your business.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre problems don’t always happen at convenient times, which is why our 24/7 emergency mobile tyre service is available across Crawley. Whether you’re driving on the M23, near Gatwick, or anywhere in town, we’ll arrive quickly to repair or replace your tyre. With our round-the-clock service, you’ll never be left stranded.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining the right tyre pressure and balanced wheels is crucial for safe driving and fuel efficiency. As part of our service, we offer tyre pressure checks and wheel balancing to ensure that your vehicle is operating smoothly and that your tyres last longer.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Key Locations We Serve in Crawley</template>
        <template v-slot:content4>
            <p class="mt-4">
                Crawley is a bustling town with a variety of key locations, and our mobile tyre fitting service covers all areas to ensure you’re never left stranded. Key locations we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Crawley Town Centre
                    </span>
                    <br>
                    If you’re shopping at County Mall or dining in the town centre, our mobile tyre fitting service can handle any tyre issues while you go about your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Gatwick Airport
                    </span>
                    <br>
                    Crawley’s proximity to Gatwick makes it a busy area for travellers. If you encounter a tyre problem near the airport, our mobile team will arrive promptly to get you back on your journey.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Tilgate Park
                    </span>
                    <br>
                    Enjoying the beautiful surroundings of Tilgate Park? Don’t let a flat tyre ruin your day — we’ll come to you and fix the problem while you relax.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Three Bridges & Ifield
                    </span>
                    <br>
                    From residential areas like Three Bridges to historic Ifield, we provide mobile tyre services to all of Crawley’s neighbourhoods, ensuring fast and efficient tyre solutions.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Manor Royal Business District
                    </span>
                    <br>
                    If your vehicle has a tyre issue while working or visiting Manor Royal, we’ll come directly to your business location to provide tyre repairs or replacements on-site.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Issues We Fix in Crawley</template>
        <template v-slot:content5>
            <p>
                Crawley’s busy roads and heavy traffic mean that tyre problems can arise unexpectedly. Tyres Anywhere is equipped to handle a wide range of issues quickly and professionally. Some common tyre problems we handle include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    From debris on the road to sharp objects, punctures are a common issue. Our technicians can often repair punctures on-site, saving you the expense of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    If you experience a blowout while driving, we’ll replace the tyre immediately, ensuring your vehicle is safe to drive once again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn-out tyres reduce your vehicle’s grip on the road, increasing the risk of accidents. We’ll replace your tyres with new ones to keep you safe, especially in wet conditions.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    If you notice a slow air leak, it could be due to a minor puncture or valve issue. We’ll inspect the tyre and repair it to prevent further damage.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven wear can result from improper alignment or incorrect tyre pressure. We’ll replace the worn tyres and provide advice on maintaining proper tyre care moving forward.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting Crawley’s Community
            </p>

            <p class="mt-2">
                Crawley is a growing town with a strong community spirit, and we’re proud to support local drivers with fast, reliable tyre services. Whether you’re a commuter, a business owner, or a visitor passing through, our mobile tyre fitting service is designed to keep you moving with minimal disruption to your day.
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
