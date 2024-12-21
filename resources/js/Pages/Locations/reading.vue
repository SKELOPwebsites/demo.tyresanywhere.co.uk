<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Reading. Fast on-site tyre repairs and replacements at home, work, or roadside. Call 07442 980101 for expert tyre care today.">
        <meta property="og:description" content="24/7 mobile tyre fitting in Reading. Fast on-site tyre repairs and replacements at home, work, or roadside. Call 07442 980101 for expert tyre care today." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>The #1 Emergency Mobile Tyre Services in Reading</template>

        <template v-slot:title1>Mobile Tyre Fitting in Reading</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere provides top-quality mobile tyre fitting services in Reading, offering <b class="font-semibold">fast and efficient tyre repairs,
                replacements</b>, and emergency callouts wherever you are. Reading is a bustling town with a mix of residential,
                commercial, and commuter routes, making convenient, reliable tyre services essential.
                Whether you’re parked near The Oracle, commuting along the <b class="font-semibold">M4</b>, or exploring quieter neighborhoods like Caversham and Tilehurst,
                our mobile tyre vans are fully equipped to handle all your tyre needs.
            </p>
            <p>
                Our mobile service extends beyond Reading to cover nearby areas such as
                Wokingham,
                <Link class="text-blue-600 underline" href="/locations/henley-on-thames">Henley-on-Thames</Link>,
                and Newbury.
                At Tyres Anywhere, we bring the garage to you, offering on-site tyre services that save you time and ensure you stay safely on the road—24/7.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in Reading rely on Tyres Anywhere for our quick response times, professional service, and mobile convenience. Here’s why we’re a top choice for tyre services:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Callout:</span>
                        Whether it’s an emergency or routine tyre replacement, we’re available day or night to assist.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We aim to arrive within 60 minutes, providing fast service across Reading and nearby towns.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Convenience:</span>
                        We come to your location — whether at home, at work, or by the roadside—bringing the garage to you for hassle-free tyre care.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our experienced team ensures tyres are fitted or repaired to the highest standards for your safety.
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
                Tyres Anywhere offers a full range of mobile tyre services across Reading, from emergency callouts to scheduled tyre replacements:
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
                    Our mobile tyre fitting service brings new tyres directly to your home, office, or roadside location. Whether you’re near Reading’s city centre, parked at The Oracle Shopping Centre, or living in residential areas like Earley or Woodley, our technicians will come to you, fit your new tyres, and balance them for a smooth ride. No need to visit a garage—Tyres Anywhere provides a stress-free solution, wherever you are.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Punctures happen unexpectedly, but with Tyres Anywhere, you don’t have to worry. Our mobile puncture repair service is available throughout Reading, whether you’re driving through the town centre, parked near Reading Station, or at home in Caversham. We assess and repair punctures on-site, saving you time and avoiding the cost of a replacement where possible.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Reading, keeping your vehicles on the road is critical. Our mobile tyre fitting service for vans and commercial vehicles minimizes downtime and keeps your fleet running efficiently. We offer a wide range of commercial tyres, ensuring your business vehicles remain operational with minimal disruption.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Whether you’re stuck on the M4, the A33, or the A329, our 24/7 emergency tyre service ensures help is never far away. From flat tyres to blowouts, we arrive quickly to repair or replace your tyres and get you back on the road safely. Our emergency service covers all parts of Reading and surrounding areas, providing fast, reliable assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining proper tyre pressure and balanced wheels is crucial for safety and fuel efficiency. As part of our mobile service, we offer on-site tyre pressure checks and wheel balancing in Reading and surrounding areas, helping to prolong tyre life and improve vehicle performance.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Tyres Anywhere offers mobile tyre fitting services across Reading and the surrounding areas, ensuring fast and professional service for all drivers:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Reading City Centre
                    </span>
                    <br>
                    Whether you’re working or shopping in Reading’s busy city centre, we provide quick, on-site tyre services to keep you moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Caversham & Tilehurst
                    </span>
                    <br>
                    We serve all residential areas in Reading, providing convenient tyre fitting right at your doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        The Oracle Shopping Centre
                    </span>
                    <br>
                    If you’re visiting The Oracle, our mobile tyre service ensures you don’t have to worry about unexpected tyre issues.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M4, A33 & A329 Routes
                    </span>
                    <br>
                    We provide rapid roadside assistance on Reading’s main routes, ensuring commuters can quickly resolve tyre problems.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Wokingham,
                        <Link class="text-blue-600 underline" href="/locations/henley-on-thames">Henley-on-Thames</Link> &
                        Newbury
                    </span>
                    <br>
                    We also extend our service to nearby towns, ensuring that drivers in Wokingham, Henley, and Newbury have access to reliable mobile tyre fitting.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                From city roads to rural routes, drivers in Reading encounter a variety of tyre problems. At Tyres Anywhere, we handle all the most common issues quickly and professionally:
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
                Our mobile team ensures that these problems are solved efficiently, keeping drivers in Reading safe and secure on the road.
            </p>

            <p class="font-semibold mt-6">
                Supporting {{ location }}'s Community
            </p>

            <p class="mt-2">
                Reading is a lively and growing town, and Tyres Anywhere is proud to support its drivers with fast, professional mobile tyre services. Whether you’re commuting, running errands, or managing a business fleet, our mobile tyre fitting service provides the convenience and peace of mind you need to stay on the road without disruption.
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
