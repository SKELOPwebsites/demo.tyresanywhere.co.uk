<template>
    <Head>
        <meta name="description" content="Reliable 24/7 mobile tyre fitting in Marlow. On-site mobile tyre repairs and replacements delivered fast. Call Tyres Anywhere for quick tyre service today.">
        <meta property="og:description" content="Reliable 24/7 mobile tyre fitting in Marlow. On-site mobile tyre repairs and replacements delivered fast. Call Tyres Anywhere for quick tyre service today." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>24/7 Mobile Tyre Fitting in Marlow – Fast, Professional Tyre Replacements and Repairs Delivered to Your Door</template>

        <template v-slot:title1>Mobile Tyre Fitting in Marlow</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we deliver expert mobile tyre fitting services throughout Marlow, <b class="font-semibold">offering reliable,
                on-site tyre replacements, repairs, and emergency services</b>. Marlow’s picturesque riverside setting and
                proximity to key commuter routes like the <b class="font-semibold">A404</b> make it a hub for drivers who need efficient,
                professional tyre care. Whether you’re parked near Marlow High Street, commuting along the Thames,
                or at home in areas like Bisham or Little Marlow, our mobile vans are fully equipped to handle all your tyre needs, 24 hours a day, 7 days a week.
            </p>
            <p>
                Forget the hassle of visiting a garage - Tyres Anywhere brings the garage to you.
                Our mobile service allows you to focus on your day while we take care of your tyres quickly and efficiently, anywhere in Marlow.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in Marlow rely on Tyres Anywhere for our fast, convenient, and professional service. Here’s why we stand out:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Whether it's an emergency or a scheduled appointment, we’re ready to assist you at any time.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We aim to reach you quickly—usually within 60 minutes—no matter where you are in Marlow.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Convenience:</span>
                        From tyre replacements to repairs, we provide full mobile services directly at your location.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our team of certified professionals ensures your tyres are fitted or repaired with care and precision.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        We stock a variety of tyres for all vehicle types, from premium brands to more affordable options.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tyres Anywhere offers a full suite of mobile tyre services across Marlow. From puncture repairs to full tyre replacements, we make the process seamless and stress-free:
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
                    Our mobile tyre fitting service brings your new tyres directly to your location, whether you’re at home, work, or on the road. Whether you’re driving along the A404, parked near Higginson Park, or living in surrounding areas like Little Marlow, we provide on-site tyre fitting and balancing, ensuring you’re ready to hit the road without the hassle of a garage visit.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you experience a puncture, our mobile puncture repair service can often fix the problem on-site, saving you the cost of a new tyre. Whether you're near Marlow Bridge, at a local restaurant, or enjoying a day by the Thames, we’ll assess and repair your tyre whenever possible, providing a quick solution to get you back on your way.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Marlow, keeping vehicles operational is key. Our mobile tyre fitting service for vans and commercial vehicles ensures that your fleet stays on the road with minimal disruption. We offer a wide range of tyres for commercial vehicles and provide fast, professional service to keep your business running smoothly.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Tyre problems can happen at any time, but with our 24/7 emergency mobile tyre service, you’re never left stranded. Whether you're stuck on the A404, near Marlow’s bustling town centre, or at home in the surrounding villages, our mobile service ensures quick assistance to get you back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining proper tyre pressure and ensuring that your wheels are balanced is essential for safe driving. As part of our mobile service, we provide tyre pressure checks and wheel balancing to help prolong the life of your tyres and improve vehicle performance across Marlow.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Our mobile tyre fitting service covers all parts of Marlow, from the town centre to the surrounding countryside. Key areas we serve include:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Marlow Town Centre
                    </span>
                    <br>
                    Whether you’re shopping, working, or running errands in Marlow’s busy centre, we provide on-site tyre services to keep you moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Marlow Bridge & Higginson Park
                    </span>
                    <br>
                    If you're enjoying time by the riverside or parked near Marlow’s historic landmarks, we bring mobile tyre fitting right to your location.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Residential Areas (Bisham, Little Marlow, Bourne End)
                    </span>
                    <br>
                    We serve all residential areas in and around Marlow, offering fast, convenient tyre fitting at your doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A404 & M40 Routes
                    </span>
                    <br>
                    For drivers commuting via the A404 or M40, our mobile tyre service ensures rapid roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/maidenhead">Maidenhead</Link> and
                    <Link class="text-blue-600 underline" href="/locations/high-wycombe">High Wycombe</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                At Tyres Anywhere, we handle a wide range of tyre issues faced by Marlow’s drivers. Here are some of the most common problems we solve:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    Punctures from road debris, nails, or sharp objects
                </li>
                <li>
                    Blowouts due to worn tyres or sudden pressure changes
                </li>
                <li>
                    Low tread depth, especially hazardous during wet conditions
                </li>
                <li>
                    Slow leaks from faulty valves or small punctures
                </li>
                <li>
                    Uneven tyre wear from improper tyre pressure or alignment issues
                </li>
            </ol>

            <p class="mt-6">
                Our mobile team provides quick, effective solutions to these common tyre issues, ensuring Marlow’s drivers stay safe on the road.
            </p>

            <p class="font-semibold mt-6">
                Supporting {{ location }}'s Community
            </p>

            <p class="mt-2">
                Marlow is a beautiful riverside town with a vibrant community, and Tyres Anywhere is proud to serve its drivers with reliable, professional mobile tyre services. Whether you're commuting, enjoying Marlow’s natural beauty, or managing a business, our mobile tyre fitting service ensures that your tyres are always in top condition, without the need for a garage visit.
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
