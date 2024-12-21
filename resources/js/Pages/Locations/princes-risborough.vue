<template>
    <Head>
        <meta name="description" content="Expert mobile tyre fitting in Princes Risborough, available 24/7. Fast on-site tyre repairs and replacements, serving home, work, or roadside. Call now.">
        <meta property="og:description" content="Expert mobile tyre fitting in Princes Risborough, available 24/7. Fast on-site tyre repairs and replacements, serving home, work, or roadside. Call now." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Fast, Reliable 24/7 Mobile Tyre Fitting in Princes Risborough</template>

        <template v-slot:title1>Mobile Tyre Fitting in Princes Risborough</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere provides trusted mobile tyre fitting services in Princes Risborough,
                offering quick and reliable tyre repairs, replacements, and emergency callouts.
                Situated in the heart of Buckinghamshire, Princes Risborough is a picturesque town
                with access to key routes like the A4010 and B4009. Whether you’re exploring the Chiltern Hills,
                driving through Market Square, or commuting to nearby areas like Chinnor or <Link class="text-blue-600 underline" href="/locations/aylesbury">Aylesbury</Link>,
                our mobile tyre-fitting vans are ready to provide top-tier tyre services, wherever you are.
            </p>
            <p>
                Our service goes beyond Princes Risborough — we cover nearby towns and villages such as Longwick,
                <Link class="text-blue-600 underline" href="/locations/thame">Thame</Link>, and even extend to
                <Link class="text-blue-600 underline" href="/locations/oxford">Oxford</Link>.
                With Tyres Anywhere, you don’t need to visit a garage—we bring the garage to you,
                offering convenient, on-site solutions to all your tyre problems, 24/7.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in Princes Risborough trust Tyres Anywhere for our speed, convenience, and professional service. Here’s why we’re a top choice:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Callout:</span>
                        Whether it’s an emergency or a scheduled tyre replacement, we’re ready to assist day or night.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We aim to arrive within 60 minutes, providing fast service throughout Princes Risborough and surrounding areas.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Convenience:</span>
                        We bring the garage to you — whether at home, work, or roadside, our mobile vans are equipped to handle all tyre issues.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our team is highly trained, ensuring your tyres are fitted or repaired to the highest standards.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        From premium to budget-friendly brands, we stock a range of tyres to suit all vehicles and preferences.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tyres Anywhere offers a full range of mobile tyre services in Princes Risborough and nearby areas, ensuring quick and seamless service for all your tyre needs:
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
                    Our mobile tyre fitting service brings new tyres directly to your home, workplace, or roadside location. Whether you’re parked near Princes Risborough town centre, exploring Whiteleaf Cross, or living in nearby villages like Longwick, our technicians will come to you, fit your tyres on-site, and ensure they’re balanced for optimal performance. Skip the garage—Tyres Anywhere ensures hassle-free tyre fitting at your convenience.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you’ve experienced a puncture or slow air leak, our mobile tyre repair service will fix the problem on-site. Whether you’re in the town centre, parked by St Mary’s Church, or in the surrounding countryside, we’ll assess and repair your tyre, saving you time and money on replacements.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Princes Risborough, keeping your fleet on the road is critical. Our mobile tyre fitting service for vans and commercial vehicles ensures minimal downtime, offering fast, professional tyre replacements at your location. We carry a wide selection of commercial tyres, ensuring your fleet runs smoothly with minimal disruption.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Tyre emergencies can happen at any time, but Tyres Anywhere is always ready to help. Whether you’re stuck on the A4010, exploring the Chiltern Hills, or driving through nearby towns like Chinnor or Aylesbury, our 24/7 mobile tyre service ensures you’re never stranded. From flat tyres to blowouts, we’ll arrive quickly to resolve your tyre issues and get you back on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining correct tyre pressure and balanced wheels is crucial for safe driving. As part of our mobile service, we provide on-site tyre pressure checks and wheel balancing throughout Princes Risborough and surrounding areas, helping to extend the life of your tyres and improve vehicle performance.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Our mobile tyre service covers all parts of Princes Risborough and extends to nearby towns and villages, ensuring drivers across Buckinghamshire receive fast, professional tyre services:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Princes Risborough Town Centre
                    </span>
                    <br>
                    Whether you’re working or shopping in the town centre, we provide quick, on-site tyre services.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Whiteleaf Cross & Longwick
                    </span>
                    <br>
                    If you’re enjoying the scenery around Whiteleaf Cross or living in nearby villages like Longwick, we’ll come to your location to assist with tyre repairs or replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        <Link class="text-blue-600 underline" href="/locations/aylesbury">Aylesbury</Link> &
                        <Link class="text-blue-600 underline" href="/locations/thame">Thame</Link>
                    </span>
                    <br>
                    Our mobile tyre service covers Aylesbury, Thame, and other nearby towns, providing seamless coverage for drivers across the region.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A4010, M40 & B4009 Routes
                    </span>
                    <br>
                    If you encounter tyre trouble on these major routes, our mobile service provides rapid roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Chinnor & Bledlow
                    </span>
                    <br>
                    We also extend our services to villages like Chinnor and Bledlow, ensuring drivers in surrounding areas receive expert tyre services.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                From busy streets to scenic country roads, Princes Risborough’s drivers face a variety of tyre issues. At Tyres Anywhere, we solve these common problems efficiently:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    Punctures from road debris, nails, or sharp objects
                </li>
                <li>
                    Tyre blowouts caused by worn tread or over-inflation
                </li>
                <li>
                    Low tread depth, particularly dangerous in wet conditions
                </li>
                <li>
                    Slow leaks from faulty valves or minor punctures
                </li>
                <li>
                    Uneven tyre wear due to improper alignment or tyre pressure
                </li>
            </ol>

            <p class="mt-6">
                Our mobile team ensures that no matter the problem, you’ll receive fast and reliable solutions to keep you safely on the road.
            </p>

            <p class="font-semibold mt-6">
                Supporting {{ location }}'s Community
            </p>

            <p class="mt-2">
                Princes Risborough is a vibrant town surrounded by the natural beauty of the Chiltern Hills. Tyres Anywhere is proud to support the local community with our fast, reliable mobile tyre services. Whether you’re commuting, running errands, or exploring the countryside, our mobile tyre fitting service ensures that your tyres are in top condition without the hassle of visiting a garage.
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
