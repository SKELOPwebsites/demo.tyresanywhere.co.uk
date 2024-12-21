<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Heathrow. Fast tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 for expert on-site service today!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Heathrow. Fast tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 for expert on-site service today!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Emergency Mobile Tyre Services in Heathrow – Delivered to Your Location</template>

        <template v-slot:title1>Mobile Tyre Fitting in Heathrow</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere provides top-notch mobile tyre fitting services in Heathrow and surrounding areas. Whether you’re dealing with a flat tyre, need an urgent replacement, or simply want a tyre check-up before heading off on a long journey, we bring expert services to your doorstep. Heathrow, a hub for business travelers and commuters, requires a service that is quick and efficient. Whether you’re at home in a residential area, near Heathrow Airport, or driving along the M4 or A30, our 24/7 mobile tyre service ensures you’re back on the road without delay.
            </p>
            <p>
                Forget about waiting for garage appointments or dealing with roadside assistance delays. Tyres Anywhere delivers professional tyre solutions at your location, saving you time and stress.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Heathrow drivers choose Tyres Anywhere for fast, reliable, and professional service. Here’s why we’re trusted across the area:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Available 24/7:</span>
                        Tyre issues don’t follow a schedule, so we’re ready to assist you day or night, whenever you need it.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Rapid Response:</span>
                        Our team prioritizes quick response times, ensuring you aren’t delayed by tyre problems for long.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Service:</span>
                        We bring all the equipment needed to repair, replace, or maintain your tyres on the spot, eliminating the need for a garage visit.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our team is fully trained to handle all types of tyre issues, ensuring your vehicle is in safe hands.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        Whether you need premium or budget-friendly tyres, we offer a broad selection to suit your vehicle and driving needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tyres Anywhere provides a full range of mobile tyre services to meet the needs of drivers around Heathrow. From emergency repairs to scheduled replacements, we bring the garage to you, ensuring convenience and safety.
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
                    Need new tyres? We bring a wide selection of tyres to your location, wherever you are in Heathrow. Whether you're parked at home, near Heathrow Airport, or at a business park, our expert technicians will fit and balance your tyres on-site, getting your vehicle ready for the road quickly and safely.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every flat tyre requires a full replacement. Our mobile tyre repair service can fix punctures and slow leaks on-site, saving you both time and money. Whether you’re near Harmondsworth or parked at a hotel near the airport, we’ll assess the tyre damage and repair it if possible, ensuring you can continue your journey without delay.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses operating near Heathrow Airport or along key routes like the A4 and M25, tyre issues can result in costly downtime. Our mobile tyre fitting service for vans and commercial vehicles ensures your fleet stays on the road. We carry a wide range of tyres designed for commercial use and provide fast, efficient service to minimize disruption to your business.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre emergencies can happen at any time, but with our 24/7 mobile tyre service, help is never far away. Whether you're stuck with a flat on the M4 or need a tyre replaced before a flight from Heathrow, our team will arrive quickly to repair or replace your tyre and get you back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Driving with properly inflated tyres and balanced wheels is essential for safety and efficiency. As part of our mobile tyre service, we provide tyre pressure checks and wheel balancing to ensure your vehicle runs smoothly. This service also helps prolong tyre life and improves fuel efficiency.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Heathrow is a busy and dynamic area, and Tyres Anywhere provides mobile tyre services across the entire region. Whether you’re in a residential neighbourhood or a commercial hub, we bring expert tyre solutions to your location. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Heathrow Airport & Surrounding Hotels
                    </span>
                    <br>
                    Whether you’re a frequent traveler or a business operating near Heathrow Airport, we provide quick, on-site tyre services for drivers in these high-traffic areas.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M4 & M25 Motorways
                    </span>
                    <br>
                    Major routes like the M4 and M25 are essential for commuters and businesses. If you encounter tyre trouble while driving along these roads, our mobile service offers fast roadside assistance to ensure minimal delays.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Bath Road & Business Parks
                    </span>
                    <br>
                    For those working in the Heathrow business parks or driving along Bath Road, our mobile tyre fitting service provides convenient on-site repairs and replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Harmondsworth & Cranford
                    </span>
                    <br>
                    Residents in these nearby villages can rely on our mobile tyre service to come directly to their homes, ensuring fast, efficient tyre solutions.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/hayes">Hayes</Link> and
                    <Link class="text-blue-600 underline" href="/locations/slough">Slough</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyres Anywhere is equipped to handle a variety of tyre issues, ensuring that Heathrow drivers can get back on the road quickly. Some common tyre problems we address include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Whether caused by debris or nails, punctures can often be repaired on-site, saving you from needing a replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout is a more serious issue requiring immediate attention. Our technicians will arrive quickly to replace the blown tyre, ensuring your vehicle is safe to drive again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn tyres reduce your vehicle’s grip and safety, especially in wet conditions. We provide replacements to ensure your car remains roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow air leak could be caused by a faulty valve or minor puncture. We’ll inspect and repair the tyre before it leads to further problems.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Improper tyre pressure or misalignment can cause uneven wear. We’ll replace worn tyres and provide advice on how to maintain proper tyre care.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting the {{ location }} Community
            </p>

            <p class="mt-2">
                Heathrow is a thriving hub for both local residents and businesses, and Tyres Anywhere is proud to support drivers with reliable mobile tyre services. Whether you're a traveler, a commuter, or a business owner, we ensure your tyres are always in top condition without the hassle of visiting a garage.
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
