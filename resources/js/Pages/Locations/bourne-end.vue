<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Bourne End. Fast and professional tyre repairs or replacements at home, work, or roadside. Call Tyres Anywhere for immediate service">
        <meta property="og:description" content="24/7 mobile tyre fitting in Bourne End. Fast and professional tyre repairs or replacements at home, work, or roadside. Call Tyres Anywhere for immediate service" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 On-Site Tyre Services</template>

        <template v-slot:title1>Tyres Anywhere - Your Mobile Tyre Solution in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we provide a professional and reliable mobile tyre fitting service in Bourne End and surrounding areas.
                Whether you’ve got a flat tyre, need an <b class="font-semibold">urgent replacement, or require regular tyre maintenance</b>, our mobile service ensures
                that your tyre issues are resolved wherever you are. Bourne End is known for its scenic riverside views and close-knit community,
                and our service is designed to keep you moving, <b class="font-semibold">whether you're at home, at work, or on the roadside</b>.
            </p>
            <p>
                With our fully equipped mobile tyre units, we handle everything from puncture repairs to full tyre replacements on-site.
                Available 24/7, our service guarantees that you won’t be left stranded, no matter when or where your tyre problems arise.
            </p>
        </template>

        <template v-slot:title2>Why Choose Tyres Anywhere for Your Mobile Tyre Fitting Needs in Bourne End?</template>
        <template v-slot:content2>
            <p class="mt-4">
                We understand that tyre trouble can happen at the worst times, but with Tyres Anywhere, you can count on prompt and professional service. Here’s why Bourne End drivers choose us:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Service:</span>
                        Tyre problems don’t follow a schedule, and neither do we. Our technicians are available around the clock to provide immediate assistance when you need it most.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We aim to reach you as quickly as possible, whether you’re near the riverside or further out in the countryside.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Convenience:</span>
                        Our mobile tyre service comes to you, so there’s no need to drive to a garage or wait for a tow truck. We handle tyre repairs and replacements at your location.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our experienced team ensures your tyres are fitted or repaired safely, getting you back on the road with minimal delay.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Services</span>
                        From fixing punctures to fitting new tyres, we offer a full range of mobile tyre services to suit your needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Our Comprehensive Range of Mobile Tyre Services in Bourne End</template>
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
                    Need new tyres? We’ve got you covered. Our mobile tyre fitting service is ideal for anyone who needs one or more tyres replaced but doesn’t want the inconvenience of visiting a garage. We bring a wide selection of tyres directly to your location, covering all types of vehicles, from cars and vans to commercial vehicles.
                    <br><br>
                    Whether you’re looking for premium tyres for enhanced performance or budget-friendly options, we have a range of brands and models to suit your needs. Our technicians will handle everything, from removing the old tyres to fitting and balancing the new ones, ensuring your vehicle is ready for the road in no time.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every tyre issue requires a replacement. If your tyre is repairable, we’ll fix it on-site, saving you the cost of buying a new tyre. Our mobile tyre repair service is perfect for handling punctures, slow leaks, or valve issues.
                    <br><br>
                    We use high-quality materials to patch and seal the tyre, ensuring it’s safe and ready for the road. If the damage is too severe for a repair, we’ll advise you on the best replacement options.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you drive a van for work or personal use, a tyre problem can cause significant delays, especially if you rely on your vehicle for business. Our mobile van tyre fitting service is designed to minimize downtime and get your van back on the road quickly.
                    <br><br>
                    We carry a range of van tyres, suitable for different load capacities and driving conditions, ensuring your van remains safe, efficient, and ready for the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre emergencies can happen at any time, often when it’s least convenient. Whether it’s a blowout on a country road, a flat tyre while you’re parked at home, or tyre damage on a busy motorway, our 24/7 emergency mobile tyre service is here to help.
                    <br><br>
                    We provide rapid response roadside assistance across Bourne End, ensuring that no matter where you are, help is just a phone call away. Our fully-equipped vans carry everything needed to repair or replace your tyre on the spot, so you can get back on the road as soon as possible.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Areas and Landmarks We Serve in Bourne End</template>
        <template v-slot:content4>
            <p class="mt-4">
                Bourne End is a picturesque riverside village with a thriving community. We proudly serve drivers across all areas, including key landmarks such as:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        River Thames
                    </span>
                    <br>
                    Whether you’re enjoying a scenic drive along the Thames or parked near the riverside, a tyre issue can spoil your day. Our mobile tyre service will come to you quickly to fix the problem on-site.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Bourne End Marina
                    </span>
                    <br>
                    If you encounter a flat tyre while visiting the marina or nearby areas, our technicians will arrive promptly to get you back on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A4094 Route
                    </span>
                    <br>
                    As a key commuting route connecting Bourne End to nearby towns, the A4094 sees heavy traffic. If you face tyre trouble while driving, we provide fast roadside assistance to ensure minimal disruption.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Wooburn Green
                    </span>
                    <br>
                    Whether you’re parked in the village or passing through, our mobile tyre fitting service will come to your location to provide fast and efficient service.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby Areas
                    </span>
                    <br>
                    We also serve surrounding areas, including Cookham, <Link class="text-blue-600 underline" href="/locations/flackwell-heath">Flackwell Heath</Link>,
                    and <Link class="text-blue-600 underline" href="/locations/marlow">Marlow</Link>,
                    ensuring that no matter where you are in the vicinity, you can rely on Tyres Anywhere for fast and efficient tyre services.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in Bourne End</template>
        <template v-slot:content5>
            <p>
                Tyre issues can disrupt your plans, but Tyres Anywhere is here to help you get back on track. Here are some common tyre problems we handle:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Punctures caused by nails, debris, or glass are common and can often be repaired. Our technicians will assess the damage and repair the puncture on-site, saving you from the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout can happen unexpectedly, especially on busy roads. We’ll replace your damaged tyre quickly and ensure your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Worn Tyres
                    </span>
                    <br>
                    Driving on tyres with low tread depth is unsafe and can lead to accidents. We offer tyre replacements to keep your vehicle roadworthy and safe.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak may be caused by a faulty valve or a small puncture. We’ll inspect your tyre and fix the issue to prevent further problems.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven tyre wear can indicate alignment issues or incorrect tyre pressure. We’ll replace worn tyres and advise on maintaining proper alignment and tyre care.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Bourne End Today</template>
        <template v-slot:content6>
            <p>
                A flat tyre or blowout doesn’t have to ruin your plans. With Tyres Anywhere, our mobile tyre fitting service in Bourne End ensures fast, reliable assistance wherever you are. Whether you need a quick puncture repair, emergency replacement, or regular tyre maintenance, we’re here to get you back on the road safely.
            </p>
            <p>
                To schedule your mobile tyre fitting or request emergency assistance, call us today at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 to handle all your tyre needs in Bourne End.
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
