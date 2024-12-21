<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Barking. Fast, expert tyre repairs or replacements at home, work, or roadside. Call Tyres Anywhere for professional assistance.">
        <meta property="og:description" content="24/7 mobile tyre fitting in Barking. Fast, expert tyre repairs or replacements at home, work, or roadside. Call Tyres Anywhere for professional assistance." />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Emergency Service</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere provides professional mobile tyre fitting services throughout Barking and its surrounding areas. Whether you need an emergency tyre repair, a full tyre replacement, or regular tyre maintenance, our mobile service ensures you don’t have to visit a garage — we come to you. Barking, a bustling town with excellent transport links to central London, is home to many busy motorists, and we’re here to make your life easier by offering convenient, on-site tyre services.
            </p>
            <p>
                Whether you're near Barking Park, navigating the busy streets of the town centre, or driving along the A13, our mobile tyre units are fully equipped to handle all your tyre needs. From punctures to blowouts, we provide 24/7 service, so no matter when or where your tyre issue occurs, we’ll be there to help.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                Tyres Anywhere is committed to providing Barking motorists with a fast, efficient, and reliable service. Here’s why drivers in Barking trust us for their tyre needs:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Whether it’s early morning or late at night, we’re available around the clock to handle any tyre emergencies you face.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Quick Response Times:</span>
                        We know how inconvenient a flat tyre can be, and that’s why we aim to reach you as quickly as possible, whether you’re in the town centre or along the A13.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Convenience:</span>
                        Forget the hassle of taking your vehicle to a garage. We come to you — at your home, work, or even roadside — to provide tyre repairs and replacements on the spot.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our fully trained technicians can handle all types of vehicles, ensuring safe and professional tyre fitting and repairs every time.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Services:</span>
                        From emergency tyre fittings to routine maintenance, we offer a full range of mobile tyre services to keep you on the road.
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
                    Whether you need one tyre replaced or a full set, our mobile tyre fitting service brings everything you need to your location. We stock a wide range of tyres to fit cars, vans, and commercial vehicles, and our technicians will fit and balance them on-site.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    A puncture doesn’t always mean you need a new tyre. Our mobile tyre repair service can handle minor punctures, valve issues, and other small repairs, saving you money and getting you back on the road quickly.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For those who rely on their vans for work, tyre problems can cause delays and disruptions. Our mobile van tyre fitting service ensures your vehicle is equipped with the right tyres to keep you moving without interruption.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre problems don’t always happen at convenient times, which is why we provide 24/7 emergency mobile tyre services. Whether you’re stuck on the roadside near Barking Abbey or on the busy A13, we’ll be there quickly to assist with fast tyre repairs or replacements.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Areas and Landmarks We Cover in Barking</template>
        <template v-slot:content4>
            <p class="mt-4">
                Barking is a vibrant and diverse town, and we’re proud to serve drivers across all areas. Our mobile tyre fitting service covers the entire town, including key locations and landmarks such as:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Barking Park
                    </span>
                    <br>
                    Whether you’re visiting Barking Park or just passing through, a flat tyre can be a hassle. Our mobile tyre units can meet you at the park or nearby, providing fast and convenient service to get you moving again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Barking Town Centre
                    </span>
                    <br>
                    With its shops, restaurants, and busy streets, Barking Town Centre is a central spot for many drivers. If you experience tyre trouble while parked in town, we’ll come directly to you and handle the issue so you can continue with your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A13 Route
                    </span>
                    <br>
                    As a major road connecting Barking to central London and the surrounding areas, the A13 is a vital route for commuters and transporters. If you face tyre trouble while driving on this busy road, we’ll provide fast roadside assistance to minimize your downtime.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Barking Abbey
                    </span>
                    <br>
                    A historic site, Barking Abbey is a popular destination for locals and visitors alike. If you experience a tyre issue while in the area, we’ll arrive quickly to handle the problem and ensure your vehicle is safe to drive.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Solve in Barking</template>
        <template v-slot:content5>
            <p>
                Tyre issues can occur at any time, and they often happen when you least expect them. Here are some of the most common tyre problems we handle and how we can help:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Whether caused by nails, glass, or debris on the road, punctures are one of the most common tyre problems. If the puncture is small and repairable, we’ll fix it on the spot, allowing you to avoid the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout can occur due to under-inflation, overloading, or severe wear. If your tyre blows out, we’ll come to your location and replace the damaged tyre with a new one to ensure your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Driving on tyres with low tread is unsafe, especially in wet or icy conditions. If your tyres are worn out, we’ll replace them with new ones that meet UK safety standards.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Valve Leaks
                    </span>
                    <br>
                    A slow leak may be caused by a faulty valve. If your tyre is losing air, we’ll inspect and replace any faulty valves to keep your tyres properly inflated.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven wear can result from improper wheel alignment or incorrect tyre pressure. We’ll inspect your tyres, replace any that are worn out, and advise you on maintaining proper alignment and tyre pressure.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Barking Today</template>
        <template v-slot:content6>
            <p>
                A flat or damaged tyre doesn’t have to ruin your day. With Tyres Anywhere, our mobile tyre fitting service in Barking ensures that help is never far away. Whether you need a quick repair, a full replacement, or emergency roadside assistance, our skilled technicians are ready to get you back on the road safely and efficiently.
            </p>
            <p>
                To book your mobile tyre fitting or request emergency assistance, call us now at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 to meet all your tyre needs in Barking.
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
