<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Camberley. Fast and reliable tyre replacements or repairs at your location. Call Tyres Anywhere for professional tyre assistance.">
        <meta property="og:description" content="24/7 mobile tyre fitting in Camberley. Fast and reliable tyre replacements or repairs at your location. Call Tyres Anywhere for professional tyre assistance." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – Fast, Reliable 24/7 Mobile Tyre Solutions</template>

        <template v-slot:title1>Mobile Tyre Fitting Service Service in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we provide top-quality mobile tyre fitting services throughout Camberley and the surrounding areas. Whether you’re dealing with a puncture, need a full tyre replacement, or require roadside assistance, our mobile service brings tyre repairs and replacements directly to you. Camberley, a thriving town with busy roads like the A30 and the M3, offers the perfect setting for our mobile service. Whether you’re shopping at The Atrium, working in the town centre, or driving through the scenic Surrey Heath areas, our professional tyre technicians are available 24/7 to assist you.
            </p>
            <p>
                With our mobile tyre service, there’s no need to visit a garage or wait for long hours for a tow truck. We come to your location with fully equipped vans to handle any tyre issue, ensuring you get back on the road quickly and safely. Tyres Anywhere offers a hassle-free solution for drivers in Camberley, bringing expert tyre services to your doorstep.
            </p>
        </template>

        <template v-slot:title2>Why Choose Tyres Anywhere for Mobile Tyre Fitting in Camberley?</template>
        <template v-slot:content2>
            <p class="mt-4">
                At Tyres Anywhere, we understand the importance of reliable and convenient tyre services. Here’s why drivers in Camberley trust us with their tyre needs:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Service:</span>
                        Tyre emergencies don’t follow a schedule, and neither do we. Our mobile service is available 24/7 to provide assistance whenever you need it.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Quick Response:</span>
                        We aim to reach you as quickly as possible, whether you’re at home, at work, or stuck on the roadside, minimizing disruption to your day.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Solutions:</span>
                        Our mobile tyre fitting service eliminates the need for a garage visit. We bring all the necessary tools and tyres to your location, handling everything on the spot.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our technicians are experienced and trained to handle a wide range of tyre issues, ensuring professional and safe service every time.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Services</span>
                        From emergency repairs to routine tyre replacements, we offer a full range of mobile tyre services tailored to your specific needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Our Full Range of Mobile Tyre Services in Camberley</template>
        <template v-slot:content3>

            <p class="mt-4">
                At Tyres Anywhere, we provide a comprehensive range of mobile tyre services that cover all your tyre needs. Our fully-equipped vans allow us to handle any tyre-related issue on-site, ensuring fast and efficient service wherever you are.
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
                    Need new tyres? Our mobile tyre fitting service brings a wide selection of premium, mid-range, and budget tyres to your location. We cater to all types of vehicles, ensuring that your new tyres are fitted and balanced on-site. Whether you’re looking for high-performance tyres or a more affordable option, we’ve got you covered. Our expert technicians handle everything from removing the old tyres to fitting and balancing the new ones, ensuring a smooth, safe ride.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not all tyre issues require a replacement. If your tyre can be repaired, we’ll fix it on-site, saving you the cost and hassle of buying a new tyre. Our mobile tyre repair service covers punctures, slow leaks, and valve problems. We’ll assess the damage and, if repairable, patch it up and get you back on the road in no time.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For van drivers, a tyre problem can cause significant delays, especially if your van is essential for work. Our mobile van tyre fitting service ensures that you’re back on the road quickly, with minimal disruption. We carry a wide range of tyres suitable for vans and commercial vehicles, ensuring both safety and performance.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre emergencies can happen at any time, and when they do, you need help fast. Our 24/7 emergency mobile tyre service is available around the clock to provide immediate assistance. Whether you’re dealing with a flat tyre on the A30 or a blowout on the M3, we’ll arrive quickly to fix the issue and get you back on your way.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Balancing</span>
                    <br><br>
                    Proper tyre pressure is essential for safety, fuel efficiency, and tyre longevity. As part of our service, we provide tyre pressure checks to ensure your tyres are inflated to the correct level. We also offer wheel balancing to reduce vibrations and ensure a smooth, comfortable ride.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Areas and Landmarks We Serve in Camberley</template>
        <template v-slot:content4>
            <p class="mt-4">
                Camberley is a bustling town with a mix of residential, commercial, and green areas. We proudly serve drivers throughout the town and surrounding areas, including key locations such as:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        The Atrium & The Square
                    </span>
                    <br>
                    These busy shopping centres see a lot of traffic, and tyre issues can disrupt your plans. If you face a flat or puncture while shopping, our mobile team will come to you quickly to handle the repair or replacement on-site.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Frimley Park Hospital
                    </span>
                    <br>
                    Whether you’re visiting Frimley Park Hospital or work there, a tyre problem shouldn’t cause unnecessary delays. Our mobile service will come to your location to fix the issue so you can focus on more important matters.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M3 & A30 Routes
                    </span>
                    <br>
                    As major roads connecting Camberley to other parts of Surrey and London, the M3 and A30 see heavy traffic. If you experience tyre trouble while driving on these busy routes, we provide fast roadside assistance to get you back on track.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Camberley Theatre
                    </span>
                    <br>
                    Enjoying a show at Camberley Theatre? A tyre issue doesn’t have to spoil your night. Our mobile tyre service ensures that any problem is handled quickly, allowing you to continue your evening with minimal disruption.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Surrey Heath Areas
                    </span>
                    <br>
                    Whether you’re driving through the scenic areas of Surrey Heath or parked in a residential neighborhood, our mobile tyre service will reach you to fix any tyre issue you encounter.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in Camberley</template>
        <template v-slot:content5>
            <p>
                Tyre issues can arise unexpectedly, but with our mobile tyre service in Camberley, help is always nearby. Here are some common tyre problems we solve:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A puncture caused by nails, sharp objects, or road debris can often be repaired on-site. We’ll assess the damage and repair the tyre if possible, saving you from the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout can be dangerous and requires immediate attention. We’ll replace the blown tyre with a new one, ensuring your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn tyres reduce grip, increasing your risk of accidents, especially in wet conditions. We offer tyre replacements to keep your vehicle roadworthy and safe.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak may indicate a faulty valve or a minor puncture. Our mobile service will inspect and repair the leak on-site, preventing further damage.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven tyre wear can result from improper alignment or incorrect tyre pressure. We’ll replace worn tyres and advise on maintaining proper alignment and pressure to prevent future problems.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting Camberley’s Growing Community
            </p>

            <p class="mt-2">
                Camberley is a vibrant town with a growing community, and at Tyres Anywhere, we’re committed to keeping its drivers safe on the road. Whether you’re commuting, shopping, or simply enjoying a day out, our mobile tyre fitting service is designed to provide convenient, expert solutions that save you time and hassle.
            </p>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Camberley Today</template>
        <template v-slot:content6>
            <p>
                A flat tyre or blowout doesn’t have to ruin your day. With Tyres Anywhere, our mobile tyre fitting service in Camberley ensures fast, reliable assistance wherever you are. Whether you need a tyre repair, an emergency replacement, or routine maintenance, we’re here to get you back on the road safely and efficiently.
            </p>
            <p>
                To schedule your mobile tyre fitting or request emergency assistance, call us today at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 to handle all your tyre needs in Camberley.
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
