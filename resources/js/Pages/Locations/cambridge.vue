<template>
    <Head>
        <meta name="description" content="Mobile tyre fitting in Cambridge. Fast, reliable tyre repairs or replacements at your home, work, or roadside. Call Tyres Anywhere for expert service now!">
        <meta property="og:description" content="Mobile tyre fitting in Cambridge. Fast, reliable tyre repairs or replacements at your home, work, or roadside. Call Tyres Anywhere for expert service now!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Expert Tyre Services at Your Location</template>

        <template v-slot:title1>Mobile Tyre Fitting in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we bring expert mobile tyre fitting services to Cambridge and the surrounding areas,
                ensuring that your tyre needs are met wherever you are. Whether you're dealing with a <b class="font-semibold">puncture, a flat tyre,
                or simply need a new set of tyres</b>,
                our fully-equipped mobile units allow us to bring tyre fitting and repair
                directly to your location. From the historic streets around the University of Cambridge to the busy A14 and M11 roads,
                we’re here to ensure that tyre trouble doesn’t interrupt your day.
            </p>
            <p>
                We provide <b class="font-semibold">24/7 service</b>, so no matter when or where you need tyre assistance in Cambridge, we’ll be there quickly to get you back on the road.
                With Tyres Anywhere, you can avoid the hassle of visiting a garage — our professional mobile tyre fitters come to you, saving you time and stress.
            </p>
        </template>

        <template v-slot:title2>Why Choose Tyres Anywhere for Mobile Tyre Fitting in Cambridge?</template>
        <template v-slot:content2>
            <p class="mt-4">
                We understand how disruptive tyre problems can be, and that’s why we focus on delivering fast, reliable, and convenient solutions. Here’s why drivers in Cambridge trust us:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Tyre problems can strike at any time, and our service is available around the clock to provide fast assistance.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We aim to reach you quickly, no matter where you are in Cambridge, minimizing your downtime and getting you back on the road as soon as possible.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Convenience:</span>
                        No need to drive to a garage or wait for a tow truck. We come to you, providing expert tyre fitting and repair services wherever your vehicle is parked.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our skilled technicians are fully trained to handle all types of tyre-related issues, ensuring safe and professional service.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Services</span>
                        Whether you need a quick puncture repair or a complete set of new tyres, we offer a full range of mobile tyre services tailored to your needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Our Mobile Tyre Services in Cambridge</template>
        <template v-slot:content3>

            <p class="mt-4">
                At Tyres Anywhere, we provide a comprehensive range of mobile tyre services that cater to all your tyre needs. From emergency roadside assistance to routine tyre maintenance, we handle everything on-site, ensuring you receive quick, expert service.
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
                    Need new tyres? Our mobile tyre fitting service brings a wide range of premium, mid-range, and budget tyres to your location. Whether you’re at home, work, or stuck on the roadside, our technicians will fit and balance your tyres on-site, ensuring your vehicle is ready for the road. We stock tyres for all vehicle types, and our expert technicians ensure precise fitting for a safe and smooth ride.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every tyre issue requires a replacement. If your tyre can be repaired, we’ll fix it on-site, saving you time and money. Our mobile tyre repair service is perfect for handling punctures, slow leaks, and valve problems. We’ll assess the damage and repair the tyre if it’s safe to do so, allowing you to continue your journey without the need for a new tyre.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For van drivers, a tyre issue can cause significant delays, especially if you rely on your van for work. Our mobile van tyre fitting service ensures that you’re back on the road quickly, minimizing downtime. We carry a range of tyres for vans and commercial vehicles, ensuring your vehicle is fitted with the right tyres for performance and safety.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre emergencies don’t always happen at convenient times. That’s why our emergency mobile tyre service is available 24/7 to provide immediate assistance wherever you are in Cambridge. Whether you’re dealing with a blowout on the M11 or a flat tyre in the city centre, we’ll arrive quickly to fix the issue and get you moving again.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Balancing</span>
                    <br><br>
                    Driving with the correct tyre pressure is essential for safety and performance. As part of our service, we provide tyre pressure checks to ensure your tyres are properly inflated. We also offer wheel balancing services to ensure a smoother ride and extend the life of your tyres.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving Cambridge and Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Cambridge is a vibrant city, and we’re proud to offer our mobile tyre fitting service across all its areas. Whether you’re parked near a university college or commuting on busy roads, we can assist you wherever you are, including:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        University of Cambridge
                    </span>
                    <br>
                    Whether you’re a student, staff member, or visitor, if you encounter tyre trouble while on campus, our mobile tyre service will come to you quickly, providing repairs or replacements on-site.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Cambridge Science Park
                    </span>
                    <br>
                    If you work at the Cambridge Science Park and experience a tyre issue while at work, our technicians can reach you promptly and handle any tyre problem you’re facing.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A14 & M11 Roads
                    </span>
                    <br>
                    As major routes connecting Cambridge to other cities, the A14 and M11 see a lot of traffic. If you experience tyre trouble while traveling on these busy roads, our mobile units provide fast roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        The Grafton Centre
                    </span>
                    <br>
                    Shopping at The Grafton Centre and facing a flat tyre? Our mobile team will come to your location, offering quick repairs or replacements so you can continue your day without delay.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Cambridge Market Square
                    </span>
                    <br>
                    Visiting the bustling Market Square or nearby shops and restaurants? If a tyre problem arises, we’ll come to you and fix the issue on-site.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in Cambridge</template>
        <template v-slot:content5>
            <p>
                Tyre issues can arise at any time, but with Tyres Anywhere, you’ll never be left stranded. Here are some common tyre problems we handle in Cambridge:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Punctures are common and can be caused by nails, glass, or other debris on the road. If the damage is minor, we’ll repair the tyre on-site, saving you the cost of a new one.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout can be dangerous, especially at high speeds. We’ll replace the blown tyre quickly, ensuring your vehicle is safe to drive again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Driving on worn tyres reduces traction and increases your risk of accidents, especially in wet or icy conditions. We offer tyre replacements to keep your vehicle roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak could be caused by a valve issue or a minor puncture. We’ll inspect your tyre and fix the leak, ensuring your tyres maintain proper pressure.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven tyre wear is often a sign of alignment or tyre pressure issues. We’ll replace worn tyres and advise on maintaining proper tyre care to extend the life of your tyres.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Serving Cambridge’s Growing Community
            </p>

            <p class="mt-2">
                Cambridge is a historic and thriving city, and we’re proud to support its growing community with fast, reliable mobile tyre services. Whether you’re commuting, studying, or enjoying the city’s rich culture, Tyres Anywhere is here to ensure your vehicle remains safe and road-ready.
            </p>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Cambridge Today</template>
        <template v-slot:content6>
            <p>
                Don’t let a flat tyre or blowout disrupt your day. With Tyres Anywhere, our mobile tyre fitting service in Cambridge ensures that you get fast, professional assistance whenever and wherever you need it. Whether it’s a tyre repair, an emergency replacement, or routine tyre maintenance, we’re here to get you back on the road safely and efficiently.
            </p>
            <p>
                To schedule your mobile tyre fitting or request emergency assistance, call us today at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 for all your tyre needs in Cambridge.
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
