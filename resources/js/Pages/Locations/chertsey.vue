<template>
    <Head>
        <meta name="description" content="Mobile tyre fitting in Chertsey. Fast tyre repairs and replacements at your home, work, or roadside. Call Tyres Anywhere at 07442 980101 for expert service now!">
        <meta property="og:description" content="Mobile tyre fitting in Chertsey. Fast tyre repairs and replacements at your home, work, or roadside. Call Tyres Anywhere at 07442 980101 for expert service now!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Tyre Repairs and Replacements Delivered to You</template>

        <template v-slot:title1>Mobile Tyre Fitting Service in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we bring expert mobile tyre fitting to Chertsey and surrounding areas, offering convenience and fast service right at your location. Whether you need a tyre replacement, have suffered a puncture, or require emergency assistance, we’re equipped to handle all your tyre needs on-site. Chertsey, with its rich history and proximity to key routes like the M25 and A320, is a busy area for drivers, and tyre issues shouldn’t disrupt your day. Whether you’re at home, at work, or stuck on the roadside, our professional mobile technicians are available 24/7 to assist you.
            </p>
            <p>
                Our fully-equipped vans come directly to your location, ensuring that you receive expert tyre fitting or repair without the need for a garage visit. Whether it’s early morning or late at night, Tyres Anywhere offers the flexibility and speed that Chertsey drivers rely on.
            </p>
        </template>

        <template v-slot:title2>Why Chertsey Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                We focus on delivering professional and convenient tyre services that keep you moving. Here’s why Chertsey drivers trust us:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Our mobile service operates around the clock, ensuring you have access to expert tyre fitting whenever you need it.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Rapid Response:</span>
                        We aim to reach your location quickly, reducing your downtime whether you’re at home, at work, or on the road.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Solutions:</span>
                        Avoid the inconvenience of going to a garage. We handle everything at your location, providing tyre replacements, repairs, and more right where you are.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Professional Technicians:</span>
                        Our expert technicians are skilled in handling all types of tyre issues, providing safe, reliable service every time.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Complete Tyre Services</span>
                        From puncture repairs to full tyre replacements, we offer a wide range of mobile tyre services tailored to your needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in Chertsey</template>
        <template v-slot:content3>

            <p class="mt-4">
                Our range of mobile tyre services in Chertsey covers everything from emergency tyre repairs to routine tyre fitting. No matter where you are, our team will come to you with the right tools and tyres to get the job done efficiently.
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
                    Need new tyres? Our mobile tyre fitting service ensures your tyres are replaced quickly and professionally, without the hassle of visiting a garage. We carry a wide selection of tyres for all vehicle types and budgets, and we’ll bring them to your location. Whether you’re at home, at the office, or on the side of the road, we fit and balance your tyres on-site to get you back on the road safely.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    A punctured tyre doesn’t always mean a replacement is needed. Our mobile tyre repair service offers a fast, cost-effective solution for minor tyre damage, saving you time and money. We handle everything from puncture repairs to valve issues, ensuring your tyre is repaired on-site whenever possible.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For van drivers, a tyre issue can cause significant delays, particularly if your van is essential for work. Our mobile van tyre fitting service ensures your tyres are replaced or repaired with minimal disruption, allowing you to get back on the road quickly. We carry a range of tyres specifically designed for vans and commercial vehicles, offering quick, reliable service wherever you are.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre trouble can strike at any time, and when it does, you need immediate assistance. Our 24/7 emergency mobile tyre service is available to help you get back on the road quickly. Whether you’re dealing with a blowout on the M25 or a flat tyre near Chertsey’s town centre, our technicians will arrive promptly, fix the issue, and ensure you can continue your journey with minimal delay.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Balancing</span>
                    <br><br>
                    Proper tyre pressure is crucial for both safety and fuel efficiency. As part of our mobile service, we offer tyre pressure checks and adjustments, ensuring that your tyres are correctly inflated for optimal performance. Additionally, we provide wheel balancing to reduce vibrations and ensure a smoother, more comfortable drive.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving Chertsey and Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Chertsey is a busy town with a rich history, and our mobile tyre service is available across all areas, ensuring drivers have access to fast and reliable tyre support wherever they are. Key locations we cover include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Chertsey Town Centre
                    </span>
                    <br>
                    Whether you’re shopping or working in Chertsey’s town centre, our mobile tyre fitting service can come to you quickly, handling tyre repairs or replacements while you carry on with your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Thorpe Park Resort
                    </span>
                    <br>
                    If you’re visiting Thorpe Park and encounter a tyre problem, our mobile team will arrive at your location to fix the issue on-site, so you don’t miss out on any fun.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Chertsey Bridge & River Thames Area
                    </span>
                    <br>
                    Whether you’re enjoying a scenic drive near the River Thames or parked close to Chertsey Bridge, our mobile service ensures that tyre trouble won’t slow you down.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M25 & A320 Routes
                    </span>
                    <br>
                    These key roads see a lot of commuter traffic, and if you experience tyre trouble while driving on the M25 or A320, our mobile tyre team can provide fast roadside assistance to get you moving again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Chertsey Meads
                    </span>
                    <br>
                    If you’re spending time near Chertsey Meads or other local green spaces and run into a tyre issue, our technicians will come to you quickly to handle any repairs or replacements.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Solve in Chertsey</template>
        <template v-slot:content5>
            <p>
                Tyre issues can occur unexpectedly, but Tyres Anywhere is here to help. We solve a wide range of common tyre problems, including:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A blowout can be dangerous and requires immediate attention. We’ll replace the damaged tyre quickly, ensuring your vehicle is safe to drive again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout can occur suddenly and requires immediate attention. We’ll replace the damaged tyre with a new one, ensuring your vehicle is safe to drive again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Worn Tread
                    </span>
                    <br>
                    Driving on worn tyres is dangerous, especially in wet or slippery conditions. We offer tyre replacements to ensure your vehicle meets safety standards.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak could indicate a valve issue or a minor puncture. We’ll inspect the tyre and repair the leak on-site to prevent further damage.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven tyre wear is often caused by incorrect tyre pressure or alignment issues. We’ll replace worn tyres and advise on how to maintain proper tyre care to extend their lifespan.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting Chertsey’s Drivers
            </p>

            <p class="mt-2">
                Chertsey is a thriving town with busy roads, and Tyres Anywhere is dedicated to supporting its drivers with fast, reliable mobile tyre services. Whether you’re commuting, visiting local landmarks, or exploring the surrounding countryside, our mobile tyre fitting service ensures that you stay safe and mobile.
            </p>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in {{ location }} Today</template>
        <template v-slot:content6>
            <p>
                A flat tyre or puncture doesn’t have to slow you down. With Tyres Anywhere, our mobile tyre fitting service in {{ location }} ensures that you get fast, professional assistance whenever and wherever you need it. Whether you need a tyre repair, an emergency replacement, or routine maintenance, we’re here to help you get back on the road safely.
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
