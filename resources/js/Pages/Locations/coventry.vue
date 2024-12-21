<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Coventry. Quick and expert tyre repairs or replacements at your home, work, or roadside. Call 07442 980101 for fast assistance today">
        <meta property="og:description" content="24/7 mobile tyre fitting in Coventry. Quick and expert tyre repairs or replacements at your home, work, or roadside. Call 07442 980101 for fast assistance today" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – Reliable 24/7 Tyre Services Brought to Your Location</template>

        <template v-slot:title1>Mobile Tyre Fitting Service in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we are proud to provide expert mobile tyre fitting services across Coventry and its surrounding areas. Whether you're dealing with a flat tyre, need a quick replacement, or require urgent roadside assistance, our team is ready to help. Coventry, a vibrant city with rich history and modern development, deserves a service that is as quick and efficient as the pace of the city itself. Whether you’re commuting on the busy A45 or parked near Coventry Cathedral, we’ll bring the solution to your tyre problems directly to your location.
            </p>
            <p>
                Say goodbye to the hassle of visiting a garage. Our mobile tyre fitting service eliminates the need for unnecessary trips. Our fully equipped vans bring the latest tools and a range of tyres right to your home, work, or roadside, ensuring a fast and stress-free solution to your tyre issues.
            </p>
        </template>

        <template v-slot:title2>Why Coventry Drivers Rely on Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Coventry drivers know they can count on Tyres Anywhere for reliable, professional, and convenient tyre services. Here’s why:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Tyre emergencies don’t operate on a schedule, and neither do we. Day or night, we’re ready to assist you wherever you are.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Quick Response:</span>
                        We understand that time is precious, especially when you’re dealing with a flat tyre. Our mobile units respond quickly to your call, ensuring minimal disruption to your day.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Service:</span>
                        Whether you’re at home, at work, or roadside, we come to you with everything needed to get you back on the road, so you never have to drive to a garage.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Skilled Technicians</span>
                        Our team of expert tyre fitters are trained to handle a wide variety of tyre issues with precision and safety.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        We carry an extensive selection of tyres to suit all vehicles, from high-performance cars to budget options, ensuring you find the right fit for your needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in Coventry</template>
        <template v-slot:content3>

            <p class="mt-4">
                Whether you need an urgent tyre repair or a scheduled tyre replacement, Tyres Anywhere brings a complete range of mobile tyre services to Coventry’s busy roads and neighbourhoods. Our fully equipped vans carry the tools, technology, and tyres needed to get your vehicle road-ready in no time.
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
                    If you need new tyres, we offer mobile tyre fitting services that bring your tyres directly to you. Whether you’re parked near the Ricoh Arena, in the heart of Coventry city centre, or on the outskirts near Allesley, our technicians will fit and balance your tyres on-site. With a wide range of tyre options available, you can rest assured that your car will be back on the road safely and swiftly.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If your tyre can be repaired, we’ll fix it on the spot. Our mobile tyre repair service is ideal for punctures, valve issues, or slow leaks, offering a quick and affordable solution. Whether you’re by the Coventry Canal or parked in a residential area like Earlsdon, we’ll assess the damage and repair your tyre, saving you the cost of a replacement.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Commercial vehicles can’t afford to be off the road for long. If you run a business in Coventry and depend on vans for deliveries or services, our mobile van tyre fitting service ensures minimal downtime. We’ll come to your business location or wherever the vehicle is parked and provide quick tyre replacements or repairs.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    No matter where you are in Coventry — whether it’s on the A444, navigating Coventry’s Ring Road, or heading into the city on the M6 — if you experience a tyre emergency, our 24/7 mobile tyre fitting service will respond quickly. With our around-the-clock availability, you’ll never have to wait long for assistance, even in the middle of the night.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Tyre pressure and balanced wheels are essential for safe driving and fuel efficiency. Our mobile service not only fits tyres but also provides tyre pressure checks and wheel balancing, ensuring your vehicle operates smoothly and your tyres last longer.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Key Locations We Serve in Coventry</template>
        <template v-slot:content4>
            <p class="mt-4">
                Coventry is a city of diverse neighbourhoods and busy roads, and our mobile tyre fitting service covers all areas to ensure that drivers can get fast and reliable tyre assistance wherever they are. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Coventry City Centre
                    </span>
                    <br>
                    Whether you’re enjoying a day out or working in the bustling city centre, we can handle any tyre issue on the spot, ensuring you get back to your routine without delays.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        University of Warwick
                    </span>
                    <br>
                    We offer mobile tyre services for staff and students alike, providing roadside repairs or tyre replacements right on campus or in nearby Canley.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Ricoh Arena & Arena Park Shopping Centre
                    </span>
                    <br>
                    If you find yourself with a flat while attending an event at the Ricoh Arena or shopping at Arena Park, our mobile units will arrive promptly to fix
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A45 & A46 Roads
                    </span>
                    <br>
                    Major roads like the A45 and A46 can be treacherous when facing a tyre problem. Our team is on hand to offer quick roadside assistance to get you moving again safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Coventry Transport Museum & Coventry Cathedral
                    </span>
                    <br>
                    Whether you're a visitor exploring Coventry’s rich history or a resident going about your day, our service is available throughout the city to ensure you’re never stuck with a tyre problem for long.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Issues We Handle in Coventry</template>
        <template v-slot:content5>
            <p>
                Tyre trouble can strike at any moment, but our mobile service is equipped to handle a wide range of tyre problems. Some of the most common issues we fix in Coventry include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Coventry’s busy roads can often result in punctures from debris. If the tyre is repairable, we’ll fix it quickly on-site, saving you time and money.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A tyre blowout is a serious problem that requires immediate replacement. Our technicians will arrive quickly to install a new tyre, ensuring your safety.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Driving on tyres with low tread can be dangerous, especially in wet weather. We’ll replace your worn tyres with new ones that provide better grip and safety.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    Whether caused by a faulty valve or a small puncture, slow leaks can lead to flat tyres over time. We’ll diagnose and repair the leak before it becomes a bigger issue.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Wear
                    </span>
                    <br>
                    Uneven wear on your tyres could indicate issues with alignment or tyre pressure. We’ll replace worn tyres and help you maintain proper tyre care moving forward.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting Coventry’s Community
            </p>

            <p class="mt-2">
                Coventry is a city known for its innovation and history, and Tyres Anywhere is proud to support its drivers with fast, reliable, and convenient mobile tyre services. From students and commuters to businesses and visitors, we provide professional tyre fitting and repairs that keep Coventry moving.
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
