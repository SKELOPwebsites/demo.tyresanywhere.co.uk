<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Beaconsfield. Fast tyre repairs and replacements at home, work, or roadside. Call Tyres Anywhere for prompt expert service!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Beaconsfield. Fast tyre repairs and replacements at home, work, or roadside. Call Tyres Anywhere for prompt expert service!" />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Tyre Replacement & Repair</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we offer a professional mobile tyre fitting service that operates throughout Beaconsfield and its surrounding areas.
                Whether you’ve encountered a <b class="font-semibold">flat tyre, need a new set of tyres, or have experienced a blowout on the road</b>, our mobile service is
                designed to come directly to you. Whether you're at home, at work, or stuck on the roadside, our expert technicians will be there to help.
                Beaconsfield is known for its charming market town atmosphere and its picturesque location in the Chiltern Hills,
                and we understand the need for fast, reliable service in this community.
            </p>
            <p>
                Our <b class="font-semibold">fully-equipped mobile tyre units</b> allow us to handle all types of tyre issues on-site,
                saving you the hassle of visiting a garage. We provide 24/7 assistance, ensuring that you
                can continue your day without unnecessary delays. Whether you’re near the historic Beaconsfield Old Town,
                the Bekonscot Model Village, or traveling along the M40, we’ll come to you to provide fast and convenient tyre services.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                When you’re facing tyre trouble, the last thing you want is to be stranded. Here’s why Beaconsfield drivers trust Tyres Anywhere for quick, hassle-free mobile tyre fitting:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Service:</span>
                        Whether it’s late at night or during the busiest time of day, we’re always available to provide emergency mobile tyre repair and replacement.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We know that time is valuable, so we aim to reach you as quickly as possible, whether you’re in the heart of Beaconsfield or on the outskirts.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Convenience at Your Location:</span>
                        No need to disrupt your day by visiting a garage. We come directly to you — at home, at work, or even on the roadside.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our skilled technicians are trained to handle all types of vehicles and tyre-related issues, providing expert service on the spot.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyre Services:</span>
                        From replacing damaged tyres to quick puncture repairs, we offer a full range of mobile tyre services that cater to your specific needs.
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
                    Need a new tyre or a full set? We stock a wide selection of tyres to fit various vehicle types, from cars to vans. Our mobile tyre fitting service brings everything to your location and ensures that your tyres are installed and balanced for a smooth ride.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not all tyre problems require a full replacement. If you’ve experienced a puncture or a minor leak, our mobile tyre repair service can quickly fix the issue, saving you money on a new tyre.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For those using vans for work or personal use, a flat tyre can lead to major disruptions. Our mobile van tyre fitting ensures that you’re back on the road quickly, with minimal interruption to your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    Whether you’re stranded on the M40 or experiencing a flat tyre in Beaconsfield’s Old Town, our 24/7 emergency mobile tyre services ensure that help is just a call away.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Beaconsfield Locations & Landmarks We Serve</template>
        <template v-slot:content4>
            <p class="mt-4">
                Beaconsfield is a stunning town with a mix of modern amenities and historical charm. We proudly serve all areas of Beaconsfield, including key landmarks and popular locations such as:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Beaconsfield Old Town
                    </span>
                    <br>
                    With its historic buildings and traditional market town feel, Beaconsfield Old Town is a popular spot. If you encounter a tyre issue while exploring the area, we’ll provide fast and efficient service to get you moving again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Bekonscot Model Village
                    </span>
                    <br>
                    A family-favourite destination, Bekonscot Model Village attracts many visitors. If you’re visiting with your family and experience a tyre problem, our mobile units will arrive quickly to fix the issue while you enjoy your visit.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M40 Motorway
                    </span>
                    <br>
                    As one of the key routes connecting Beaconsfield to London and beyond, the M40 sees heavy traffic. If you experience tyre trouble while traveling this busy motorway, our mobile tyre service is equipped to provide quick roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Chiltern Hills
                    </span>
                    <br>
                    Whether you’re exploring the scenic Chiltern Hills or commuting through the area, we’ll reach you no matter where you are, ensuring that your tyre issues are resolved quickly and safely.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in Beaconsfield</template>
        <template v-slot:content5>
            <p>
                Tyre issues can be unexpected and cause major disruptions to your plans. Here are some common tyre problems we solve and how our mobile tyre service can help:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Punctures caused by nails, stones, or other road debris are common. Our technicians will inspect and repair small punctures on-site, saving you the cost of a new tyre when a repair is possible.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A sudden blowout can be dangerous, especially at high speeds. We’ll replace the damaged tyre with a new one, ensuring that your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Worn Tyres
                    </span>
                    <br>
                    Worn tyres reduce your vehicle’s traction, increasing the risk of accidents. We offer a range of replacement tyres to suit all budgets and vehicles, ensuring your car meets UK road safety standards.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak might not always be obvious but can cause your tyre to lose pressure over time. We’ll inspect the tyre and replace faulty valves or patch any small leaks.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven tyre wear is often caused by improper alignment or incorrect tyre pressure. We can replace worn tyres and advise on how to prevent future tyre wear issues.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Beaconsfield Today</template>
        <template v-slot:content6>
            <p>
                A flat tyre doesn’t have to ruin your plans. With Tyres Anywhere, our mobile tyre fitting service in Beaconsfield ensures that you receive fast, reliable help wherever you are. Whether you need a quick repair, a full tyre replacement, or emergency assistance, we’re here to get you back on the road safely and efficiently.
            </p>
            <p>
                To book your mobile tyre fitting or request emergency tyre service, call us today at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 for all your tyre needs in Beaconsfield.
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
