<template>
    <Head>
        <meta name="description" content="Emergency and Same Day mobile tyre fitting in Henley on Thames. Get quick and affordable emergency tyre services at your home, work or roadside. Call us now!">
        <meta property="og:description" content="Emergency and Same Day mobile tyre fitting in Henley on Thames. Get quick and affordable emergency tyre services at your home, work or roadside. Call us now!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>24/7 Mobile Tyre Services in Henley on Thames – Professional Tyre Solutions Delivered to Your Location</template>

        <template v-slot:title1>Mobile Tyre Fitting in Henley on Thames</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere offers expert mobile tyre fitting services across Henley on Thames and the surrounding areas.
                Whether you need a <b class="font-semibold">quick tyre replacement, a puncture repair, or a routine tyre check</b>, our mobile units bring
                the garage to you. Henley on Thames, with its scenic beauty and famous Regatta, attracts a mix of locals and
                visitors who need efficient, reliable tyre services. Whether you're parked near the River Thames, commuting along the <b class="font-semibold">A4155</b>,
                or at home in a residential area, our 24/7 mobile tyre service ensures you’re never left stranded.
            </p>
            <p>
                Skip the hassle of visiting a garage and waiting for roadside assistance. Our fully equipped mobile units arrive at your location,
                providing <b class="font-semibold">fast and professional</b> tyre services so you can get back on the road as soon as possible.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Henley drivers rely on Tyres Anywhere for convenient, reliable, and expert tyre services. Here’s why:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Callout:</span>
                        Tyre problems don’t wait, and neither do we. Our service is available day and night to assist you whenever needed.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        We prioritize fast response times, ensuring minimal delay so you can continue your journey without long waits.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Repairs and Fittings:</span>
                        Whether it’s a tyre repair, replacement, or pressure check, we handle it all at your location, saving you the trouble of visiting a garage.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Professional Technicians:</span>
                        Our team is skilled and experienced, ensuring all tyre services are carried out safely and professionally.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Range:</span>
                        From premium tyres to budget-friendly options, we offer a variety of tyres to suit your vehicle and driving needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Our mobile tyre services in Henley on Thames provide a full range of solutions to meet the needs of local drivers. Whether it’s an emergency tyre repair or scheduled maintenance, we bring expert tyre services directly to your location.
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
                    Need new tyres? Our mobile tyre fitting service brings a wide selection of tyres to your location. Whether you're at home near Henley Bridge, parked along Hart Street, or enjoying the countryside, our technicians will fit and balance your new tyres on-site, ensuring your car is ready to drive without the inconvenience of a garage visit.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every tyre issue requires a full replacement. If you’ve suffered a puncture or a slow leak, our mobile tyre repair service can often fix the issue on-site. Whether you’re near Mill Meadows or parked by the River Thames, we’ll assess the tyre damage and repair it if possible, saving you time and money.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Henley on Thames that rely on vans and commercial vehicles, tyre issues can lead to costly delays. Our mobile tyre fitting service for vans and commercial vehicles ensures that your fleet stays on the road. We carry a range of tyres for commercial use and provide fast, efficient service to minimize downtime and keep your business moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre emergencies can happen at any time, but our 24/7 mobile tyre service ensures you’re never left stranded. Whether you’re dealing with a flat tyre near the Henley Regatta course or need assistance on the A4155, our team will arrive promptly to repair or replace your tyre and get you back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining correct tyre pressure and balanced wheels is essential for vehicle safety and fuel efficiency. As part of our mobile tyre service, we offer tyre pressure checks and wheel balancing to ensure your tyres wear evenly and your vehicle runs smoothly. This service helps extend tyre life and improves overall driving comfort.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving Henley on Thames & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Henley on Thames is a beautiful and busy town, and Tyres Anywhere provides mobile tyre services across the entire area. Whether you’re at home, on a scenic drive, or commuting, we bring our services to your location. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Henley Town Centre
                    </span>
                    <br>
                    Whether you’re working, shopping, or enjoying the local sights, our mobile tyre service offers quick assistance in the heart of Henley.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Henley Bridge & River Thames Areas
                    </span>
                    <br>
                    If you’re parked near Henley Bridge or spending the day by the river, our mobile tyre team will come to your location and resolve any tyre issues quickly.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A4155 & A4130 Routes
                    </span>
                    <br>
                    Major routes like the A4155 and A4130 see heavy traffic, and if you encounter tyre problems while driving, we offer fast roadside assistance to minimize delays.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Henley Regatta Areas
                    </span>
                    <br>
                    Whether you’re attending the Regatta or visiting other local events, our mobile tyre service ensures you won’t miss out due to tyre trouble.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/high-wycombe">High Wycombe</Link> and
                    <Link class="text-blue-600 underline" href="/locations/reading">Reading</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyres Anywhere is equipped to handle a variety of common tyre issues, ensuring that Henley drivers get back on the road quickly. Some of the tyre problems we frequently address include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A puncture caused by sharp objects can often be repaired on-site, saving you the cost of a full tyre replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A sudden blowout requires an immediate tyre replacement. We’ll arrive quickly to fit a new tyre and ensure your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn-out tyres reduce road grip and increase the risk of accidents. We offer tyre replacements to keep your vehicle safe and roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    Slow leaks can lead to flat tyres over time. We’ll identify the issue and fix it on-site, preventing further damage.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Improper tyre pressure or alignment can cause uneven wear. We’ll replace any worn tyres and provide advice on maintaining proper tyre care in the future.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting Henley on Thames Drivers
            </p>

            <p class="mt-2">
                Henley on Thames is known for its scenic beauty and vibrant community, and Tyres Anywhere is proud to support local drivers with fast, reliable mobile tyre services. Whether you're commuting, exploring the countryside, or running a business fleet, we ensure that your tyres are always in top condition without the hassle of visiting a garage.
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
