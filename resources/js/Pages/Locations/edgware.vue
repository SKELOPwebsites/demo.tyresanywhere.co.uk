<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Edgware. Fast and expert tyre repairs or replacements at your home, work, or roadside. Call 07442 980101 for quick service!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Edgware. Fast and expert tyre repairs or replacements at your home, work, or roadside. Call 07442 980101 for quick service!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title><span class="text-wheelfit-300">Tyres Anywhere</span> -  Mobile Tyre Fitting in Edgware</template>
        <template v-slot:subtitle>Convenient, Professional Tyre Solutions at Your Location</template>

        <template v-slot:title1>On-Demand Mobile Tyre Fitting in Edgware</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere brings top-tier mobile tyre fitting services directly to you, ensuring that whether you're at home, at work, or on the road in Edgware, we’ve got your tyre needs covered. Edgware is a vibrant area known for its mix of residential and commercial activity, and our mobile service is designed to fit into your busy lifestyle. Whether you’re parked on Edgware High Street, stuck with a flat tyre near Broadfields, or driving along the A41, our 24/7 mobile tyre fitting service ensures fast, expert solutions, wherever you are.
            </p>
            <p>
                Forget the hassle of going to a garage. Tyres Anywhere brings the garage to you, allowing for quick and efficient tyre repairs, replacements, or maintenance without disrupting your day. We prioritize convenience and quality, so your vehicle is back on the road as quickly and safely as possible.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} is the Top Choice for Edgware Drivers</template>
        <template v-slot:content2>
            <p class="mt-4">
                Edgware drivers trust Tyres Anywhere for professional, efficient, and hassle-free tyre services. Here’s why:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Tyre issues don’t always happen during business hours. We’re available day and night to assist with any tyre emergencies you face.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        We pride ourselves on quick service, ensuring minimal waiting time no matter where you are in Edgware.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Solutions:</span>
                        Avoid the inconvenience of visiting a garage—our mobile service comes to you with fully equipped vans for all tyre needs.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Certified Experts:</span>
                        Our experienced technicians provide safe and professional tyre services, ensuring the job is done right every time.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Range:</span>
                        From high-performance tyres to budget options, we have tyres for all vehicles and preferences.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Our mobile tyre fitting services are tailored to fit the needs of drivers in Edgware. Whether you need a quick tyre replacement or a more comprehensive repair, our mobile units are equipped to handle all tyre-related issues directly at your location.
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
                    Our mobile tyre fitting service brings new tyres to you, wherever your vehicle is. Whether you're near Edgware Station or parked outside your home in Canons Park, we’ll fit and balance new tyres on-site. Our service ensures that your car is road-ready in no time, without the hassle of visiting a workshop.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every tyre issue means a full replacement. If you’ve got a puncture or slow leak, our mobile repair service can often fix the problem on the spot, saving you time and money. Whether you're out near Edgwarebury Park or visiting friends in nearby Stanmore, we’ll assess the tyre and, if possible, repair it on-site, so you can continue your day without disruption.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For Edgware businesses relying on vans or commercial vehicles, a tyre issue can lead to costly delays. Our mobile tyre fitting service for commercial vehicles provides fast and reliable solutions, ensuring your fleet stays on the road. We offer a wide range of tyres for commercial use, and we’ll come to your business location or wherever your van is parked to perform repairs or replacements quickly and efficiently.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre emergencies don’t follow a schedule, which is why our 24/7 mobile tyre service is always available in Edgware. Whether you’re driving along the busy A41 or stranded near Edgware Hospital, we’ll arrive promptly to repair or replace your tyre and get you back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Proper tyre pressure and wheel balance are key to vehicle performance and safety. As part of our mobile tyre fitting service, we offer tyre pressure checks and wheel balancing to ensure your tyres wear evenly and your vehicle runs smoothly. This service helps extend the life of your tyres and improves fuel efficiency.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Areas We Serve in Edgware</template>
        <template v-slot:content4>
            <p class="mt-4">
                Edgware is a bustling area with a mix of busy streets, residential neighbourhoods, and commercial hubs. Tyres Anywhere provides mobile tyre fitting services across all parts of Edgware, ensuring quick and reliable assistance wherever you are. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Edgware Town Centre
                    </span>
                    <br>
                    If you're shopping or working in Edgware town centre, we provide mobile tyre services that come to you, ensuring any tyre issues are resolved quickly.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Canons Park & Broadfields
                    </span>
                    <br>
                    For drivers living in Canons Park or Broadfields, our mobile tyre service offers convenient on-site repairs and replacements, right at your doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Stanmore & Burnt Oak
                    </span>
                    <br>
                    Whether you're in Stanmore or Burnt Oak, our mobile units are ready to handle any tyre problems, ensuring minimal disruption to your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A41 & M1 Motorway
                    </span>
                    <br>
                    Busy routes like the A41 and M1 are often used by Edgware drivers. If you face a tyre issue on these roads, our team will offer fast roadside assistance to get you moving again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/stanmore">Stanmore</Link> and
                    <Link class="text-blue-600 underline" href="/locations/harrow">Harrow</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyre problems can happen anytime, but with Tyres Anywhere’s mobile service, you’re never far from help. Some of the common tyre issues we handle in Edgware include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A puncture from nails or road debris can often be repaired on-site, saving you from needing a full replacement. We’ll patch the tyre if it’s safe to do so.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A sudden tyre blowout is dangerous and requires immediate replacement. Our technicians will arrive quickly to replace the blown tyre and get you back on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn tyres reduce grip and increase the risk of accidents, especially in wet conditions. We provide tyre replacements to ensure your vehicle is safe and roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak could be caused by a minor puncture or valve issue. We’ll inspect your tyre and repair the leak to prevent further problems.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Improper alignment or incorrect tyre pressure can cause uneven wear. We’ll replace worn tyres and help you maintain them for better performance and safety.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting Edgware Drivers
            </p>

            <p class="mt-2">
                Edgware is a busy and growing area, and Tyres Anywhere is proud to offer fast, reliable mobile tyre services to its residents and businesses. Whether you're commuting, running errands, or operating a business fleet, our service is designed to minimize downtime and ensure your tyres are always in optimal condition.
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
