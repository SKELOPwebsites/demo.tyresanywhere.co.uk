<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Atherstone. Fast repairs or replacements at your home, work, or roadside. Call Tyres Anywhere for expert service and assistance.">
        <meta property="og:description" content="24/7 mobile tyre fitting in Atherstone. Fast repairs or replacements at your home, work, or roadside. Call Tyres Anywhere for expert service and assistance." />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Emergency Service</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we offer fast, convenient, and professional mobile tyre fitting services in Atherstone and surrounding areas.
                Whether you’re at home, work, or stuck on the roadside, our fully-equipped mobile units are here to assist you.
                Known for its charming market town feel and rich history, Atherstone is a community where convenience is essential,
                and we’re proud to provide the local area with tyre solutions that save you time and hassle.
            </p>
            <p>
                Whether you’re near Atherstone’s historic marketplace, along the scenic Coventry Canal, or traveling on the A5,
                our expert technicians can meet you wherever you are. We offer a wide range of services,
                from <b class="font-semibold">puncture repairs to complete tyre replacements</b>, ensuring you’re back on the road safely and quickly.
                Our 24/7 emergency service means that no matter the time or location, we’ve got you covered.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                When you face a tyre issue, the last thing you want is to be left waiting. Here’s why Atherstone residents and motorists trust Tyres Anywhere:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Service:</span>
                        Our team is available at any time of day or night to provide emergency mobile tyre fitting and repairs, ensuring you’re never left stranded.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We understand the urgency of a tyre issue, and that’s why we strive to reach you as quickly as possible, whether you’re in the town centre or on the outskirts.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Location-Based Convenience</span>
                        No need to visit a garage. Our mobile service comes directly to you, whether you’re at home, work, or on the roadside.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Skilled Technicians:</span>
                        Our technicians are experts in handling tyre replacements and repairs for all types of vehicles, from cars to commercial vans.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Services:</span>
                        From fitting new tyres to emergency roadside assistance, we provide a comprehensive range of mobile tyre services to meet your needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Our Mobile Tyre Services in <u>{{ location }}</u></template>
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
                    Whether you need new tyres for your car or van, our mobile tyre fitting service comes to your location and fits them on-site. We carry a wide selection of tyres to suit all vehicles and budgets, ensuring your new tyres are installed and balanced without the need for a garage visit.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    A flat tyre doesn’t always mean a replacement. Our mobile tyre repair service offers solutions for punctures, valve issues, and slow leaks, helping you extend the life of your tyres. If your tyre can be safely repaired, we’ll fix it on the spot and get you back on the road.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If your van experiences a tyre issue, it can disrupt your workday. We offer specialized mobile van tyre fitting to ensure minimal downtime. We bring the right tools and tyres to your location and get your vehicle back in action quickly.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    When tyre trouble strikes unexpectedly, our 24/7 emergency mobile tyre service is here to help. Whether you’re stuck in Atherstone or traveling on the A5 or M42, we’ll arrive promptly to fix or replace your tyre, so you can get back to driving safely.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Landmarks & Areas We Cover in Atherstone</template>
        <template v-slot:content4>
            <p class="mt-4">
                Atherstone is a historic market town with beautiful surroundings, and we proudly serve all areas of the town. Some key landmarks and areas where we provide our mobile tyre fitting services include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Atherstone Marketplace
                    </span>
                    <br>
                    The heart of the town, Atherstone Marketplace is bustling with activity. If you’re running errands and experience a tyre issue, we can arrive quickly and handle it while you continue with your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Coventry Canal
                    </span>
                    <br>
                    For those enjoying the scenic views along the Coventry Canal, a flat tyre can ruin the trip. Our mobile units can reach you wherever you are along the canal or nearby countryside, providing prompt tyre service.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A5 Route
                    </span>
                    <br>
                    Atherstone’s location along the A5 makes it a key route for many motorists and commercial drivers. If you experience tyre trouble while driving on this major road, our team can offer rapid roadside assistance to get you moving again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M42 Motorway
                    </span>
                    <br>
                    As a major connection route, the M42 is frequently traveled by commuters and transporters. If you face a tyre issue on this busy motorway, our mobile tyre service can provide quick and safe roadside help.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Solve in Atherstone</template>
        <template v-slot:content5>
            <p>
                Tyre issues can happen anytime, and they often occur when least expected. Here are some common tyre problems we handle and how our mobile tyre service in Atherstone can help:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A puncture is one of the most common tyre problems, typically caused by nails, glass, or other sharp objects. If the puncture is small and repairable, our mobile technicians will fix it quickly to save you the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout can be dangerous, particularly at high speeds. If you experience a blowout, our mobile service will replace the damaged tyre with a new one from our stock and get you back on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Worn Tread
                    </span>
                    <br>
                    Tyres with low tread depth can lead to unsafe driving conditions, especially in wet or icy weather. We’ll assess your tyres and provide replacements if necessary, ensuring they meet UK safety standards.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    Sometimes, a tyre can lose pressure gradually due to a faulty valve or a small puncture. We can inspect and repair slow leaks, preventing further tyre damage.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Tyre Misalignment
                    </span>
                    <br>
                    Uneven tyre wear is often caused by misaligned wheels. If we find that your tyres are wearing unevenly, we’ll advise you on proper alignment and replace the worn tyres to ensure safe driving.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Atherstone Today</template>
        <template v-slot:content6>
            <p>
                A flat or damaged tyre can happen at any time, but with Tyres Anywhere, you’re never far from help. Our mobile tyre fitting service ensures that no matter where you are in Atherstone, we can come to your location and resolve the issue quickly and efficiently. Whether it’s a quick puncture repair or an emergency tyre replacement, our expert technicians are ready to assist.
            </p>
            <p>
                To schedule a mobile tyre fitting or request emergency tyre assistance, call us now at <a class="text-blue-600 underline" href="tel:07442980101">07442980101</a>.
                We’re available 24/7 for all your tyre needs.
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
