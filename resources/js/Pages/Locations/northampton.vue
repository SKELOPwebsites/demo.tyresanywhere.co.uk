<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Northampton. On-site tyre repairs and replacements at home, work, or roadside. Call Tyres Anywhere for fast service today.">
        <meta property="og:description" content="24/7 mobile tyre fitting in Northampton. On-site tyre repairs and replacements at home, work, or roadside. Call Tyres Anywhere for fast service today." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>24/7 Mobile Tyre Fitting in Northampton – Fast, Reliable On-Site Tyre Services for Emergency and Routine Repairs</template>

        <template v-slot:title1>Professional Tyre Solutions Delivered to Your Location</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we bring expert mobile tyre fitting services to Northampton, providing fast and efficient tyre replacements, puncture repairs, and 24/7 emergency callouts. Northampton’s busy roads and commuter routes, including the M1 and A45, mean that drivers often need fast, reliable tyre service, wherever they are. Whether you’re driving through the town centre, parked near Sixfields Stadium, or at home in residential areas like Duston or Abington, our mobile tyre vans are fully equipped to handle all your tyre needs.
            </p>
            <p>
                With Tyres Anywhere, you don’t need to take time out of your day to visit a garage. We come directly to you, ensuring quick, hassle-free service to keep you moving safely and smoothly around Northampton.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Northampton drivers trust Tyres Anywhere for our fast, convenient, and professional tyre service. Here’s why we stand out:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Callout:</span>
                        We provide tyre services at any time, whether it’s an emergency or a routine tyre change.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We aim to reach you within 60 minutes, getting you back on the road as quickly as possible.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Convenience:</span>
                        Whether at home, work, or on the roadside, our mobile service brings the garage to you.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our expert team ensures that tyres are fitted or repaired to the highest standards.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        We offer a variety of tyres, from premium brands to more affordable options, ensuring the right fit for your vehicle.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tyres Anywhere offers a full range of mobile tyre services across Northampton, ensuring drivers receive fast, professional service when they need it most:
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
                    Our mobile tyre fitting service brings new tyres directly to your home, work, or roadside location. Whether you’re near Northampton’s shopping district, driving through the M1, or parked in residential areas like Kingsthorpe or Hunsbury, our mobile vans will fit and balance your new tyres on-site, ensuring a smooth, hassle-free installation.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Tyre punctures are common, but with Tyres Anywhere, they don’t have to slow you down. Our mobile puncture repair service covers all areas of Northampton, whether you’re near Delapré Abbey or working in one of the town’s business parks. We’ll assess the damage and, if possible, repair the tyre on-site, saving you the time and cost of a replacement.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Northampton, keeping vehicles on the road is critical. Our mobile tyre fitting service for vans and commercial vehicles ensures minimal downtime, offering fast and professional tyre replacements or repairs at your location. We carry a wide selection of tyres for commercial use, ensuring that your fleet stays operational without delay.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Whether you’re driving through the M1, stuck on the A45, or in the quieter residential areas of Northampton, our 24/7 emergency tyre service ensures help is never far away. From flat tyres to blowouts, we’ll arrive quickly to repair or replace your tyres and get you back on the road safely, no matter the time of day or night.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining proper tyre pressure and ensuring your wheels are balanced is essential for safe driving and fuel efficiency. As part of our mobile service, we provide tyre pressure checks and wheel balancing throughout Northampton, helping to prolong the life of your tyres and ensure your vehicle performs at its best.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Our mobile tyre fitting service covers all areas of Northampton, from the busy town centre to the surrounding residential and business districts. Key areas we serve include:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Northampton Town Centre
                    </span>
                    <br>
                    Whether you’re shopping or working in Northampton’s town centre, we provide fast on-site tyre services.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Sixfields Stadium & Delapré Abbey
                    </span>
                    <br>
                    If you’re visiting these popular locations or nearby, our mobile service offers quick tyre assistance at your location.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Residential Areas (Kingsthorpe, Abington, Duston)
                    </span>
                    <br>
                    We serve all residential areas in Northampton, providing convenient tyre fitting and repairs right at your doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M1 & A45 Routes
                    </span>
                    <br>
                    Our mobile tyre service extends to major routes around Northampton, ensuring drivers on the M1, A45, and other key roads receive rapid roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/milton-keynes">Milton Keynes</Link> and
                    <Link class="text-blue-600 underline" href="/locations/buckingham">Buckingham</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Northampton drivers face a variety of tyre issues due to the town’s busy roads and surrounding motorways. At Tyres Anywhere, we solve these common problems quickly and professionally:
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
                Our mobile service ensures that no matter the issue, you’ll receive fast, effective solutions that keep you safely on the road.
            </p>

            <p class="font-semibold mt-6">
                Supporting {{ location }}'s Community
            </p>

            <p class="mt-2">
                Northampton is a thriving town with a strong community and business presence. Tyres Anywhere is proud to support local drivers with fast, reliable mobile tyre services that ensure their vehicles remain safe and roadworthy. Whether you’re commuting, running errands, or managing a business, our mobile tyre fitting service delivers the convenience and peace of mind you need to stay on the road.
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
