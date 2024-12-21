<template>
    <Head>
        <meta name="description" content="Emergency and Same Day mobile tyre fitting in Flackwell Heath. Get fast, reliable and affordable tyre services at your home, work or roadside. Call us now!">
        <meta property="og:description" content="Emergency and Same Day mobile tyre fitting in Flackwell Heath. Get fast, reliable and affordable tyre services at your home, work or roadside. Call us now!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>24/7 Mobile Tyre Services in Flackwell Heath – Professional Tyre Solutions Delivered to Your Location</template>

        <template v-slot:title1>Convenience at Your Doorstep</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere offers professional and reliable mobile tyre fitting services throughout Flackwell Heath and surrounding areas.
                Whether you need an <b class="font-semibold">urgent tyre replacement, a quick puncture repair, or routine tyre maintenance</b>, we bring expert tyre services
                directly to you. Flackwell Heath, a charming village near High Wycombe, is home to busy commuters and families who need
                convenient and efficient tyre solutions. Whether you’re parked at home in a quiet residential street,
                near Flackwell Heath Golf Club, or commuting on the <b class="font-semibold">A404</b>, our 24/7 mobile tyre fitting service ensures
                you’re never stranded with a flat tyre or other tyre issues.
            </p>
            <p>
                Say goodbye to the hassle of visiting a garage. With Tyres Anywhere, our mobile units are equipped to handle all your tyre needs right on-site, saving you time and getting you back on the road quickly and safely.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in Flackwell Heath rely on Tyres Anywhere for fast, convenient, and expert tyre services. Here’s why:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Available 24/7:</span>
                        Tyre issues don’t wait for business hours, and neither do we. Our service is available around the clock, ensuring you’re never stuck without assistance.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        We understand the need for speed, especially when you’re faced with an unexpected flat tyre. Our technicians respond quickly to your location.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Repairs and Fittings:</span>
                        Whether at home, work, or on the roadside, we bring the service to you, saving you the trouble of visiting a garage.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Certified Experts:</span>
                        Our team consists of skilled professionals who provide expert tyre repairs and replacements, ensuring your safety and satisfaction.
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
                At Tyres Anywhere, we provide a full range of mobile tyre services, designed to meet the needs of drivers in Flackwell Heath. From emergency repairs to scheduled tyre replacements, we come to you with all the necessary tools and expertise.
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
                    When it’s time for new tyres, our mobile tyre fitting service makes the process easy. Whether you’re parked at home in Flackwell Heath or commuting along the nearby A404, our technicians will arrive with a selection of tyres that suit your vehicle. We’ll fit and balance your tyres on-site, ensuring your car is road-ready without the hassle of going to a garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every flat tyre needs to be replaced. If you’ve experienced a puncture or slow leak, our mobile tyre repair service can often fix the problem on the spot. Whether you’re near Flackwell Heath Golf Club or enjoying a walk in a local park, we’ll assess the tyre damage and, if possible, repair it on-site, allowing you to continue your day with minimal disruption.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Businesses in and around Flackwell Heath that depend on vans or commercial vehicles can’t afford tyre problems slowing them down. Our mobile tyre fitting service for vans and commercial vehicles ensures your fleet stays operational with minimal downtime. We carry a wide selection of tyres designed for heavy-duty vehicles and provide expert fitting to keep your business moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    If you’re faced with a tyre emergency, whether it’s a flat tyre in the middle of the night or a blowout on the A404, our 24/7 emergency mobile tyre service is just a call away. We’ll arrive promptly to repair or replace your tyre and get you back on the road safely, no matter the time or location.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Driving with the correct tyre pressure and balanced wheels is crucial for both safety and vehicle performance. As part of our mobile service, we offer tyre pressure checks and wheel balancing to ensure your vehicle operates smoothly. This service helps extend the life of your tyres and improves fuel efficiency.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Areas We Serve in Flackwell Heath</template>
        <template v-slot:content4>
            <p class="mt-4">
                Flackwell Heath is a picturesque village, and Tyres Anywhere provides mobile tyre fitting services across the entire area. Whether you’re in a quiet residential neighbourhood or commuting along major routes, we’ve got you covered. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Flackwell Heath Village Centre
                    </span>
                    <br>
                    If you’re shopping, running errands, or enjoying a day out in the village centre, our mobile tyre fitting service offers quick assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Flackwell Heath Golf Club
                    </span>
                    <br>
                    Whether you’re playing a round of golf or relaxing at the club, we’ll come to your location and resolve any tyre issues while you enjoy your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A404 Route
                    </span>
                    <br>
                    If you’re commuting on the A404 and face a tyre problem, our mobile service provides fast roadside assistance, ensuring you don’t face unnecessary delays.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Heath End Road & Nearby Residential Areas
                    </span>
                    <br>
                    For residents in and around Heath End Road, our mobile tyre service offers convenient, on-site repairs and replacements, right at your doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/high-wycombe">High Wycombe</Link> and
                    <Link class="text-blue-600 underline" href="/locations/loudwater">Loudwater</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyre issues can arise at any time, but Tyres Anywhere is ready to handle them quickly and efficiently. Some common tyre problems we address in Flackwell Heath include:
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
                Supporting Flackwell Heath’s Community
            </p>

            <p class="mt-2">
                Flackwell Heath is a beautiful and close-knit community, and Tyres Anywhere is proud to support its drivers with reliable and convenient mobile tyre services. Whether you’re a local resident, a business owner, or simply passing through, we’re here to ensure that your tyres are always in top condition without the need for a garage visit.
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
