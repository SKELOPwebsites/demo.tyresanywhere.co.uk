<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Epping. Fast, professional tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 for expert service today">
        <meta property="og:description" content="24/7 mobile tyre fitting in Epping. Fast, professional tyre repairs and replacements at your home, work, or roadside. Call 07442 980101 for expert service today" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Emergency Mobile Tyre Fitting in Epping</template>

        <template v-slot:title1>Reliable, Fast and Convenient</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere is proud to offer our top-tier mobile tyre fitting services throughout Epping and its surrounding areas. Whether you’re dealing with a flat tyre, need an emergency replacement, or simply want the convenience of new tyres fitted at home, our expert team is here to help. Epping, with its mix of historic charm and modern living, deserves a service that is as flexible as its busy streets and scenic surroundings. Whether you’re parked near Epping Forest or commuting on the M11, our 24/7 mobile tyre fitting service ensures that you’re never left stranded with tyre trouble.
            </p>
            <p>
                No need to waste time at a garage or deal with the hassle of waiting for a tow. Tyres Anywhere brings the solution to you, offering fast and efficient on-site tyre repairs, replacements, or checks wherever you are in Epping.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Epping drivers trust Tyres Anywhere for convenience, professionalism, and speed. Here’s why our service stands out:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Service:</span>
                        Tyre emergencies can happen at any time. Our service is available day or night, ensuring you’re never stuck with a flat for long.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        We prioritize speed and efficiency, responding quickly to your tyre issues to minimize any disruption to your day.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Repairs and Fittings:</span>
                        Our mobile service eliminates the need for garage visits. We come to your location with fully equipped vans to handle any tyre issue on the spot.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our team consists of highly skilled professionals who provide top-quality service and ensure your vehicle is safe and ready to go.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Range:</span>
                        We offer a wide range of tyres, from premium brands to affordable options, ensuring the perfect fit for your vehicle.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Our mobile tyre services are designed to cater to the specific needs of drivers in Epping. From emergency tyre replacements to scheduled fittings, we provide a full range of services directly at your location.
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
                    Our mobile tyre fitting service brings new tyres directly to your home, workplace, or roadside. Whether you’re near Epping Forest or parked in the town centre, our technicians will arrive with a selection of tyres suitable for your vehicle. We’ll install and balance your new tyres on-site, ensuring that your vehicle is road-ready without the hassle of a garage visit.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you have a flat tyre or slow leak, it doesn’t always mean a full replacement is necessary. Our mobile tyre repair service can fix minor punctures on-site, saving you both time and money. Whether you’re near Copped Hall or parked outside a local café, we’ll assess the damage and repair your tyre if possible.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Epping that rely on vans or commercial vehicles, tyre problems can cause significant downtime. Our mobile tyre fitting service for commercial vehicles provides fast, efficient solutions that minimize disruption. We carry tyres specifically designed for vans and heavy-duty vehicles, ensuring your fleet stays on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    If you find yourself stuck with a flat tyre on the M25 or M11, our 24/7 emergency mobile tyre service is just a call away. We’ll come to your location and provide quick repairs or replacements, getting you back on the road safely and without delay. Whether it’s early morning or late at night, our team is ready to help.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining the correct tyre pressure and balanced wheels is essential for safe driving and optimal vehicle performance. As part of our service, we offer tyre pressure checks and wheel balancing to ensure your car runs smoothly, improving both safety and fuel efficiency.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Areas We Serve in Epping</template>
        <template v-slot:content4>
            <p class="mt-4">
                Epping is a town with a rich blend of scenic beauty and urban activity, and our mobile tyre service covers all areas to ensure you have access to reliable tyre solutions. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Epping Town Centre
                    </span>
                    <br>
                    Whether you’re working, shopping, or relaxing in the town centre, our mobile tyre fitting service ensures quick, on-site assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Epping Forest
                    </span>
                    <br>
                    If you’re exploring the beauty of Epping Forest and encounter tyre trouble, we’ll come to your location and resolve the issue swiftly.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Theydon Bois & Thornwood
                    </span>
                    <br>
                    For residents and businesses in these areas, our mobile tyre service offers convenient, expert solutions right at your doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M11 & M25 Motorways
                    </span>
                    <br>
                    These busy motorways are crucial for commuters and travellers. If you experience tyre trouble on the M11 or M25, our mobile service offers rapid roadside assistance to get you moving again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        North Weald & Coopersale
                    </span>
                    <br>
                    Whether you’re based in North Weald or Coopersale, our mobile tyre fitting and repair services extend across the Epping area, ensuring help is always nearby.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyre problems can happen unexpectedly, but Tyres Anywhere ensures that help is always available. Some of the common tyre issues we handle in Epping include:
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
                Supporting the Epping Community
            </p>

            <p class="mt-2">
                Epping is a town full of history and scenic routes, and Tyres Anywhere is proud to support its drivers with fast, reliable mobile tyre services. Whether you’re a local resident, a business owner, or a visitor, our mobile tyre fitting service ensures you’re never far from expert help.
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
