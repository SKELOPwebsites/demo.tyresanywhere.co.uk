<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Baldock. Fast, reliable tyre repairs or replacements at home, work, or roadside. Call Tyres Anywhere for expert assistance today!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Baldock. Fast, reliable tyre repairs or replacements at home, work, or roadside. Call Tyres Anywhere for expert assistance today!" />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Emergency Service</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere provides fast, convenient, and expert mobile tyre fitting services throughout Baldock and its surrounding areas.
                Whether you're dealing with a <b class="font-semibold">flat tyre, need emergency roadside assistance, or simply require new tyres</b>, our mobile service is
                designed to come directly to your location, saving you time and the hassle of visiting a garage. We offer 24/7 availability,
                ensuring that no matter when or where your tyre issue occurs, our skilled technicians are ready to assist.
            </p>
            <p>
                Baldock, with its historic market town charm and modern amenities, is home to a bustling community of drivers.
                Whether you’re parked in the town centre, near the charming St Mary’s Church, or commuting along the A1,
                our mobile tyre service is here to provide fast, professional assistance wherever you are.
                We aim to get you back on the road <b class="font-semibold">quickly and safely</b>, with minimal disruption to your day.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                Tyre issues can happen without warning, but with Tyres Anywhere, help is always nearby. Here’s why Baldock drivers trust our mobile tyre fitting service:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        No matter what time it is, day or night, our mobile tyre technicians are available to provide emergency service.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Quick Response Times:</span>
                        We understand that time is of the essence when you’re dealing with a flat or damaged tyre. Our local team aims to reach you as quickly as possible.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Convenience:</span>
                        No need to visit a garage — we come directly to your location, whether you’re at home, at work, or stranded on the roadside.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our team is fully trained to handle all types of tyre issues, from simple repairs to full replacements, ensuring a professional service every time.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Solutions:</span>
                        From emergency tyre repairs to new tyre fittings, we offer a wide range of mobile tyre services to meet your needs.
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
                    If you need new tyres for your car or van, our mobile tyre fitting service brings the tyres directly to you. We stock a wide range of tyre brands to suit all vehicles and budgets, and our technicians will fit and balance the tyres on-site, ensuring you’re back on the road without any delays.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    A flat tyre doesn’t always require a full replacement. Our mobile tyre repair service handles punctures and minor damage, saving you money by repairing the tyre if it’s safe to do so.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For those who rely on their vans for work or personal use, a tyre issue can cause major delays. Our mobile van tyre fitting service is designed to get your van back on the road quickly, minimizing downtime and ensuring you stay on schedule.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    When an unexpected tyre problem strikes, our emergency mobile tyre service is available 24/7 to provide fast, professional assistance wherever you are. Whether it’s a blowout or a puncture, we’ll come to your location and resolve the issue efficiently.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Areas We Serve in Baldock</template>
        <template v-slot:content4>
            <p class="mt-4">
                Baldock is a picturesque market town with a rich history and modern conveniences, and we’re proud to serve drivers throughout the area. Our mobile tyre fitting service covers all of Baldock and nearby locations, including:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Baldock Town Centre
                    </span>
                    <br>
                    Whether you’re shopping, dining, or running errands in the town centre, a tyre issue can disrupt your day. Our mobile units will come to your location and resolve the issue, allowing you to get back to your plans without delay.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        St Mary’s Church & Surrounding Areas
                    </span>
                    <br>
                    As one of Baldock’s most iconic landmarks, the area around St Mary’s Church sees a lot of local and visitor traffic. If you experience a flat tyre while visiting this historic area, we’ll handle the problem quickly so you can continue exploring.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A1 & A505 Routes
                    </span>
                    <br>
                    Baldock’s proximity to the A1 and A505 makes it a key route for commuters and travelers. If you face tyre trouble while driving on these busy roads, we’ll provide fast roadside assistance to get you moving again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Ivel Springs Nature Reserve
                    </span>
                    <br>
                    Enjoying a peaceful day out at Ivel Springs? A tyre emergency doesn’t have to ruin your plans. Our mobile tyre fitting service can come to you, even in more remote areas around the nature reserve.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Issues We Solve in Baldock</template>
        <template v-slot:content5>
            <p>
                Tyre problems can arise unexpectedly, and knowing what to expect can help you prepare. Here are some common tyre issues we handle and how we can help:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Sharp objects on the road such as nails or glass can cause punctures. If your tyre has a minor puncture, our mobile technicians can often repair it on the spot, saving you the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout can occur due to under-inflation or wear and tear, and it can be dangerous, especially at high speeds. If you experience a blowout, we’ll replace the damaged tyre quickly and ensure your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Tyres with worn tread can be unsafe, especially in wet or icy conditions. We can assess the tread depth of your tyres and provide replacements if necessary to ensure your vehicle meets UK safety standards.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak can be caused by a small puncture or a faulty valve. Our mobile service will inspect the tyre and fix any leaks to prevent further issues.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    If your tyres are wearing unevenly, it could be a sign of misaligned wheels or incorrect tyre pressure. We can replace worn tyres and provide advice on how to prevent uneven wear in the future.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Repair or Replace? What’s the Best Option for Your Tyre?</template>
        <template v-slot:content6>
            <p>
                A flat or damaged tyre doesn’t have to disrupt your day. With Tyres Anywhere, our mobile tyre fitting service in Baldock ensures that you get fast, reliable assistance no matter where you are. From puncture repairs to emergency replacements, we’re here to help.
            </p>
            <p>
                To schedule a mobile tyre fitting or request emergency assistance, call us now at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 to meet all your tyre needs in Baldock.
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
