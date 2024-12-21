<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Bexleyheath. Fast tyre repairs or replacements at your home, work, or roadside. Call Tyres Anywhere for expert, fast service!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Bexleyheath. Fast tyre repairs or replacements at your home, work, or roadside. Call Tyres Anywhere for expert, fast service!" />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Tyre Services at Your Location</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we provide convenient and reliable mobile tyre fitting services across Bexleyheath and its nearby areas. Whether you’re facing a flat tyre, need an emergency replacement, or simply require new tyres, our mobile service is designed to come to your location — no garage visit necessary. Bexleyheath, known for its vibrant shopping centres and close proximity to central London, is home to many busy drivers. Whether you’re parked near Broadway Shopping Centre, commuting along the A2, or at home, our mobile units can reach you quickly to resolve your tyre issues.
            </p>
            <p>
                Our expert technicians bring the tools and tyres directly to you, providing everything from quick puncture repairs to full tyre replacements. We operate 24/7 to ensure that no matter when you need assistance, Tyres Anywhere is ready to help.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                Tyre problems are inconvenient, but with Tyres Anywhere, you don’t have to worry. Here’s why motorists in Bexleyheath trust us for their tyre needs:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Whether it’s the middle of the night or during the day, we’re available around the clock to provide emergency tyre services.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We understand that time is valuable, which is why we aim to reach your location as quickly as possible, whether you're at home, work, or on the roadside.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Services:</span>
                        No need to visit a garage or wait for a tow truck. We bring our mobile tyre service to you, fixing or replacing your tyres on the spot.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our technicians are fully trained to handle all tyre-related issues, from punctures to full replacements, ensuring professional and safe service.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Solutions</span>
                        From minor repairs to fitting new tyres, we offer a complete range of mobile tyre services, tailored to your specific needs.
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
                    Need new tyres for your vehicle? We bring a selection of high-quality tyres to your location and fit them on-site. Our mobile tyre fitting service ensures your new tyres are installed and balanced for safe driving, without you needing to leave home.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    A puncture doesn’t always mean you need a replacement. Our mobile tyre repair service covers punctures and other minor tyre damage, saving you time and money when a repair is possible.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you drive a van for business or personal use, a tyre issue can cause major delays. Our mobile van tyre fitting ensures your vehicle is ready for the road with minimal downtime.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre trouble can strike at the worst times, which is why our 24/7 emergency mobile tyre service is ready to assist you. Whether you’re dealing with a flat or a blowout, we’ll come to your location quickly to get you moving again.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Locations & Landmarks We Serve in Bexleyheath</template>
        <template v-slot:content4>
            <p class="mt-4">
                Bexleyheath is a bustling town with a mix of residential, commercial, and scenic areas, and we serve drivers throughout the region. Our mobile tyre service covers all areas of Bexleyheath, including key locations like:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Broadway Shopping Centre
                    </span>
                    <br>
                    Bexleyheath’s main shopping destination is a busy hub for locals and visitors. If you encounter tyre trouble while parked here, our mobile units will arrive swiftly to handle repairs or replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Danson Park
                    </span>
                    <br>
                    Known for its beautiful lake and open green spaces, Danson Park is a popular spot for relaxation and outdoor activities. If your tyre issue arises while you’re enjoying the park, we’ll come to you and provide on-site service.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A2 & A207 Routes
                    </span>
                    <br>
                    Bexleyheath is well-connected by major roads like the A2 and A207, both of which are heavily trafficked by commuters. If you experience a tyre problem while driving along these routes, we’ll provide quick roadside assistance to ensure you’re not stranded for long.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Bexleyheath Clock Tower
                    </span>
                    <br>
                    As a local landmark and meeting point, the Clock Tower area sees plenty of vehicle traffic. If you face a tyre issue in this central spot, our technicians can provide a fast and efficient service.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Solve in Bexleyheath</template>
        <template v-slot:content5>
            <p>
                Tyre issues can disrupt your plans, but with our mobile tyre service, you’ll be back on the road in no time. Here are some of the common tyre problems we handle:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Sharp objects on the road can cause punctures. If the damage is minor, we’ll repair the puncture on-site, saving you the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout can occur due to under-inflation or excessive wear. We’ll replace your damaged tyre quickly and ensure your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Driving on tyres with worn tread is dangerous, especially in wet or icy conditions. We offer replacements to keep your vehicle compliant with UK road safety standards.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak could be due to a small puncture or faulty valve. Our technicians will inspect your tyre and fix the issue to prevent further problems.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven wear can result from misalignment or improper tyre pressure. We’ll replace worn tyres and provide advice on maintaining proper tyre care.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Bexleyheath Today</template>
        <template v-slot:content6>
            <p>
                A flat or damaged tyre doesn’t have to ruin your day. With Tyres Anywhere, our mobile tyre fitting service in Bexleyheath ensures that help is never far away. Whether you need a quick puncture repair, a full tyre replacement, or emergency roadside assistance, we’re here to get you back on the road swiftly and safely.
            </p>
            <p>
                To book your mobile tyre fitting service or request emergency assistance, call us now at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 to handle all your tyre needs in Bexleyheath.
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
