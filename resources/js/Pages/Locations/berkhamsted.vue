<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Berkhamsted. Fast tyre repairs or replacements at home, work, or roadside. Call Tyres Anywhere for quick, reliable service.">
        <meta property="og:description" content="24/7 mobile tyre fitting in Berkhamsted. Fast tyre repairs or replacements at home, work, or roadside. Call Tyres Anywhere for quick, reliable service." />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – Reliable 24/7 Tyre Services</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we provide fast, reliable, and convenient mobile tyre fitting services across Berkhamsted and its surrounding areas.
                Whether you're dealing with a <b class="font-semibold">flat tyre, need a full replacement, or have encountered a blowout</b>, our mobile service eliminates the
                hassle of visiting a garage. We come directly to your location, whether you're at home, work, or stranded on the roadside.
                Berkhamsted is known for its blend of historical charm and modern conveniences, and our service matches the pace of this
                bustling town. Whether you're exploring the iconic Berkhamsted Castle, navigating the busy High Street, or commuting along
                the A41, our mobile units are ready to assist you 24/7.
            </p>
            <p>
                Our fully-equipped mobile tyre vans allow us to carry out a range of services, from emergency tyre repairs to full replacements,
                ensuring you're back on the road quickly. No matter when or where your tyre issue occurs, our skilled technicians are on hand to help.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                Tyre trouble can strike at any time, but with Tyres Anywhere, help is always close by. Here’s why motorists in Berkhamsted rely on our mobile tyre fitting services:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Our service operates around the clock, meaning you're never left waiting, no matter when your tyre problem occurs.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Quick Response Times:</span>
                        We pride ourselves on getting to you as fast as possible, ensuring minimal disruption to your day or commute.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Service:</span>
                        We bring our mobile tyre workshop to your doorstep, workplace, or roadside, eliminating the need for towing or waiting at a garage.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Skilled Technicians:</span>
                        Our expert team is trained to handle a range of tyre-related issues, providing high-quality, professional service at all times.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Solutions:</span>
                        From emergency repairs to routine replacements, we offer a complete range of mobile tyre services tailored to your needs.
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
                    Need new tyres for your car or van? We stock a range of tyres to suit different budgets and vehicles. Our technicians will fit and balance your tyres on-site, ensuring a smooth, safe drive without the need for a trip to the garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every flat tyre needs to be replaced. Our mobile tyre repair service can handle punctures and other minor issues, saving you the cost of a new tyre if a repair is possible.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you rely on your van for work or personal use, a tyre issue can cause significant delays. Our mobile van tyre fitting service ensures that you’re back on the road quickly and with minimal disruption.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    Whether it’s a puncture in the middle of the night or a blowout during rush hour, our 24/7 emergency service ensures that help is always at hand. We come to your location anywhere in Berkhamsted to provide fast and efficient tyre repairs or replacements.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Berkhamsted Locations & Landmarks We Serve</template>
        <template v-slot:content4>
            <p class="mt-4">
                Berkhamsted is a beautiful, historic town with plenty to see and do. We proudly offer our mobile tyre fitting service across the entire area, including:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Berkhamsted Castle
                    </span>
                    <br>
                    A popular historic site, Berkhamsted Castle is a favorite for visitors and locals alike. If you experience a flat tyre while exploring the area, our technicians will come to you and fix the issue, so you can continue enjoying your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Berkhamsted High Street
                    </span>
                    <br>
                    Known for its vibrant shops, cafes, and restaurants, Berkhamsted’s High Street is a busy area. If your vehicle encounters a tyre issue while parked in town, our mobile units can reach you quickly and carry out repairs or replacements on the spot.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Ashridge Estate
                    </span>
                    <br>
                    The scenic routes around Ashridge Estate can be tricky if you run into tyre trouble. If you're enjoying a day out in the countryside and experience a flat or damaged tyre, our mobile tyre service will come to your location, no matter how remote.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A41 Route
                    </span>
                    <br>
                    As a key commuting route, the A41 sees a lot of traffic. If you experience a tyre issue while driving along this busy road, our team will provide prompt roadside assistance to get you moving again.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Issues We Solve in Berkhamsted</template>
        <template v-slot:content5>
            <p>
                Tyre issues can happen unexpectedly, and it’s important to address them quickly to avoid further damage. Here are some common problems we handle and how we can help:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Punctures caused by nails, sharp stones, or other debris can usually be repaired on-site. Our technicians will assess the damage and provide a quick, cost-effective fix where possible.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A tyre blowout can happen suddenly, especially at high speeds. We’ll arrive at your location promptly to replace the damaged tyre, ensuring your vehicle is safe to drive again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Driving on tyres with worn-out tread reduces traction and increases the risk of accidents, especially in wet conditions. We’ll replace worn tyres with new ones that meet UK road safety standards.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    If your tyre is losing air slowly, it could be due to a faulty valve or a small puncture. Our mobile team will identify the issue and repair the leak, preventing further tyre damage.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven tyre wear is often a sign of improper alignment or incorrect tyre pressure. We’ll replace worn tyres and provide advice on how to maintain proper alignment to avoid future problems.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Berkhamsted Today</template>
        <template v-slot:content6>
            <p>
                A flat or damaged tyre doesn’t have to ruin your day. With Tyres Anywhere, our mobile tyre fitting service in Berkhamsted ensures you receive fast, reliable help wherever you are. Whether it’s an emergency tyre replacement or a quick puncture repair, we’re here to get you back on the road safely.
            </p>
            <p>
                To schedule your mobile tyre fitting or request emergency assistance, call us now at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 to meet all your tyre needs in Berkhamsted
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
