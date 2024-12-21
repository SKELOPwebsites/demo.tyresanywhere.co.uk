<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Banbury. Fast, expert tyre repairs and replacements at your home, work, or roadside. Call Tyres Anywhere for reliable service today!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Banbury. Fast, expert tyre repairs and replacements at your home, work, or roadside. Call Tyres Anywhere for reliable service today!" />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Mobile Tyres</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we offer fast, efficient, and professional mobile tyre fitting services across Banbury and its surrounding areas.
                Whether you're dealing with a <b class="font-semibold">puncture, a flat tyre, or need a full replacement</b>, our fully-equipped mobile units come directly
                to your location to provide expert tyre services. Known for its rich history, Banbury is a busy market town where convenience is key.
                Whether you're parked at the Castle Quay Shopping Centre, traveling along the M40, or enjoying the historic Banbury Cross,
                <b class="font-semibold">we provide 24/7 mobile tyre fitting</b> to ensure your vehicle stays on the move.
            </p>
            <p>
                We take pride in offering a comprehensive range of mobile tyre services, from quick puncture repairs to emergency roadside assistance, so that you can carry on with your day without worrying about tyre problems. No matter where you are in Banbury, we’re just a phone call away, ready to get you back on the road.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                Tyre problems can happen at any time, often when least expected. Here’s why Banbury motorists trust Tyres Anywhere for their mobile tyre needs:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Our mobile tyre fitting service is available around the clock, ensuring that you’re never left stranded with a flat or damaged tyre, no matter the time.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Quick Response Times:</span>
                        We understand how inconvenient a tyre issue can be. That’s why we strive to reach your location as quickly as possible, whether you’re in the town centre or along the M40.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Convenience:</span>
                        Forget the hassle of driving to a garage — we come to you. Whether you’re at home, work, or stuck roadside, we’ll handle everything on-site, saving you time and stress.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Skilled Technicians:</span>
                        Our fully trained technicians provide safe and professional tyre fitting and repair services for cars, vans, and commercial vehicles.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Services:</span>
                        From emergency tyre replacements to routine tyre maintenance, we provide a wide range of mobile tyre services tailored to your needs.
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
                    Need new tyres? We stock a wide range of tyres suitable for all vehicles and budgets. Our mobile tyre fitting service brings everything you need to your location, fitting and balancing the tyres on-site for a smooth and safe ride.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every flat tyre requires a replacement. If you’ve experienced a puncture or other minor damage, we’ll inspect the tyre and, if it’s safe to do so, repair it on the spot, saving you money and getting you back on the road quickly.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For those who rely on vans for work or travel, a tyre issue can cause significant delays. Our mobile van tyre fitting service ensures minimal downtime, with our technicians providing expert tyre fitting or repairs right at your location.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre problems often occur at the worst times, which is why our emergency tyre service is available 24/7. Whether you’re facing a flat tyre on the M40 or a blowout in the town centre, we’ll arrive quickly to provide fast repairs or replacements.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Key Locations and Landmarks We Serve in Banbury</template>
        <template v-slot:content4>
            <p class="mt-4">
                Banbury is a historic town with a mix of bustling activity and scenic surroundings, and we proudly serve all areas of the town and its nearby regions. Some of the key locations we cover include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Banbury Cross
                    </span>
                    <br>
                    A famous landmark, Banbury Cross is a popular destination for both locals and visitors. If your vehicle experiences a tyre problem while visiting the area, we’ll come directly to you to handle the issue, allowing you to continue exploring this historic site.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Castle Quay Shopping Centre
                    </span>
                    <br>
                    Whether you’re shopping or running errands in Castle Quay, tyre issues can occur at any time. If you find yourself with a flat tyre in the car park, our mobile team will arrive quickly to replace or repair the tyre while you carry on with your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Spiceball Park
                    </span>
                    <br>
                    Enjoying a relaxing day at Spiceball Park doesn’t have to be ruined by a tyre problem. If you face any tyre issues, our mobile units can reach you swiftly to provide a repair or replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M40 and A361 Routes
                    </span>
                    <br>
                    As key routes for commuters and travelers, the M40 and A361 are busy roads where tyre issues can be particularly disruptive. If you experience a problem while driving on these major roads, we’ll provide quick roadside assistance to get you back on your journey.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Solve in Banbury</template>
        <template v-slot:content5>
            <p>
                Tyre problems can range from minor inconveniences to major disruptions. Here are some common tyre issues we handle and how we can help:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Punctures are one of the most common tyre problems and are often caused by sharp objects on the road. If the puncture is small and located in the tread, we can repair it on the spot, saving you the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout can be dangerous, especially at high speeds. If your tyre suffers a blowout, we’ll replace it quickly with a new one, ensuring your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Word Tread
                    </span>
                    <br>
                    Driving on tyres with worn tread can reduce traction and increase your risk of accidents. We’ll assess the tread depth of your tyres and provide replacements if necessary to ensure you’re driving safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Valve Leaks
                    </span>
                    <br>
                    A slow air leak may be caused by a faulty valve. Our mobile service will inspect and replace any faulty valves to keep your tyres properly inflated.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven tyre wear is often caused by misaligned wheels or improper tyre pressure. We’ll replace any worn tyres and provide advice on maintaining proper alignment and tyre pressure in the future.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Banbury Today</template>
        <template v-slot:content6>
            <p>
                Don’t let a flat or damaged tyre disrupt your day. With Tyres Anywhere, our mobile tyre fitting service in Banbury ensures that help is always nearby. Whether you need a quick repair, a full tyre replacement, or emergency roadside assistance, we’re here to get you back on the road safely and efficiently.
            </p>
            <p>
                To book your mobile tyre fitting service or request emergency assistance, call us now at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 to handle all your tyre needs in Banbury.
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
