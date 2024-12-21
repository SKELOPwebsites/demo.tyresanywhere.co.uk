<template>
    <Head>
        <meta name="description" content="Fast, expert tyre repairs or replacements at home, work, or roadside. Available 24/7 for emergency callouts in Bicester. Call Tyres Anywhere for your tyre needs">
        <meta property="og:description" content="Fast, expert tyre repairs or replacements at home, work, or roadside. Available 24/7 for emergency callouts in Bicester. Call Tyres Anywhere for your tyre needs" />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Fast & Reliable Tyre Service</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere offers expert mobile tyre fitting services throughout Bicester, bringing convenience and speed to drivers facing tyre issues.
                Whether you’ve suffered a <b class="font-semibold">puncture, need an urgent tyre replacement, or simply want to fit new tyres</b>, our mobile service is designed to come
                directly to you — no need to visit a garage. Bicester is known for its mix of modern living and historical charm, with attractions like
                Bicester Village and its easy access to the M40. Whether you’re near the famous shopping outlet, at home, or on the go, our mobile units
                ensure you’re back on the road in no time.
            </p>
            <p>
                Our skilled technicians are <b class="font-semibold">available 24/7 to handle tyre emergencies, repairs, and replacements</b>,
                allowing you to carry on with your day with minimal disruption.
                From puncture repairs to fitting new tyres, we bring everything needed to your location, ensuring fast, professional service every time.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                At Tyres Anywhere, we aim to make tyre issues a thing of the past with our quick and convenient mobile service. Here’s why Bicester drivers trust us:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Service:</span>
                        No matter when your tyre problem strikes, our mobile service is available around the clock to provide fast assistance.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Quick Response:</span>
                        We understand that tyre trouble can disrupt your day. Our team reaches you quickly, whether you're in the town centre, near Bicester Village, or on the M40.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Convenience:</span>
                        No need to leave your vehicle. Our mobile units come directly to your location, so you can stay home, at work, or continue with your plans while we handle your tyres.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our skilled and trained technicians can handle all types of tyre issues, from punctures to full replacements, ensuring professional and safe service.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyre Services</span>
                        Whether it’s a minor repair or fitting new tyres, we offer a comprehensive range of mobile tyre services designed to meet your specific needs.
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
                    Need new tyres? We bring a selection of premium, mid-range, and budget tyres to your location, fitting and balancing them for a safe and smooth ride. Our mobile tyre fitting service covers cars, vans, and commercial vehicles, all at your convenience.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not all tyre problems require a full replacement. If you’ve experienced a puncture, slow leak, or valve issue, our mobile tyre repair service can provide an affordable solution by fixing the problem on-site.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you rely on your van for work, a tyre issue can lead to delays. Our mobile van tyre fitting service ensures minimal downtime by providing quick replacements or repairs wherever you are.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    Facing an unexpected tyre issue on the road? Our 24/7 emergency tyre service will come to you wherever you are in Bicester or the surrounding areas, offering fast and professional roadside assistance.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Key Locations We Serve in Bicester</template>
        <template v-slot:content4>
            <p class="mt-4">
                Bicester is a thriving town with a mix of residential, commercial, and scenic areas. Our mobile tyre service covers all locations, including:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Bicester Village
                    </span>
                    <br>
                    As one of the most popular shopping destinations in the UK, Bicester Village sees a lot of traffic. If you encounter tyre trouble while visiting the outlet, our mobile units can arrive quickly and resolve the issue on-site, so you can continue shopping.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Bicester Heritage
                    </span>
                    <br>
                    If you’re visiting or working at Bicester Heritage and find yourself with a flat tyre, our mobile tyre fitting service will reach you promptly and get you back on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M40 Motorway
                    </span>
                    <br>
                    As a major route connecting Bicester to other parts of the UK, the M40 is a busy road for commuters and travelers. If you face tyre trouble while driving on the M40, we’ll provide roadside assistance to minimize your downtime.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Graven Hill
                    </span>
                    <br>
                    If you're at home or working in the Graven Hill area and experience a tyre problem, we’ll come to you and offer a quick, convenient solution, from puncture repairs to full replacements.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in Bicester</template>
        <template v-slot:content5>
            <p>
                Tyre issues can arise without warning, but our mobile tyre fitting service in Bicester is here to help. We handle a wide range of tyre problems, including:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A puncture can be caused by sharp objects such as nails or glass. If the damage is minor, we’ll repair the tyre on-site, saving you the cost of a new one.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A tyre blowout can be dangerous, especially at high speeds. We’ll come to your location quickly to replace the damaged tyre, ensuring your vehicle is safe to drive again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Driving on tyres with worn tread is unsafe and increases the risk of accidents. We offer new tyre replacements to ensure your vehicle meets safety standards.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak is often caused by a valve issue or a minor puncture. Our mobile team will inspect the tyre, fix the leak, and ensure your tyre is properly inflated.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    If your tyres are wearing unevenly, it could be due to improper alignment or tyre pressure. We’ll replace worn tyres and advise on how to maintain proper tyre care to prevent future wear.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Bicester Today</template>
        <template v-slot:content6>
            <p>
                A flat tyre or blowout doesn’t have to disrupt your day. With Tyres Anywhere, our mobile tyre fitting service in Bicester ensures you receive fast, reliable assistance wherever you are. Whether you need a quick puncture repair, emergency replacement, or routine tyre fitting, we’re here to get you back on the road safely.
            </p>
            <p>
                To schedule your mobile tyre fitting service or request emergency assistance, call us today at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 to meet all your tyre needs in Bicester.
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
