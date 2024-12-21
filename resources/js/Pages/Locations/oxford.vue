<template>
    <Head>
        <meta name="description" content="Oxford’s 24/7 mobile tyre fitting service. Fast on-site tyre repairs and replacements for home, work, or roadside. Call 07442 980101 for expert service today.">
        <meta property="og:description" content="Oxford’s 24/7 mobile tyre fitting service. Fast on-site tyre repairs and replacements for home, work, or roadside. Call 07442 980101 for expert service today." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Oxford’s Leading 24/7 Mobile Tyre Fitting – Reliable Services Across the City and Beyond</template>

        <template v-slot:title1>Mobile Tyre Fitting in Oxford</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere is proud to offer top-tier mobile tyre fitting services in Oxford, bringing fast,
                reliable solutions directly to your home, workplace, or roadside. As a city known for its historic charm,
                bustling academic life, and high volumes of traffic, Oxford’s drivers demand convenient, efficient tyre services.
                Whether you’re navigating the busy streets near Oxford University, driving along the <b class="font-semibold">A34</b>,
                or parked in quieter areas like Headington or Summertown,
                our expert mobile tyre-fitting vans are fully equipped to handle your needs.
                We offer <b class="font-semibold">same-day tyre fitting, 24/7 emergency repairs, and on-the-spot solutions</b> for any tyre issues.
            </p>
            <p>
                Oxford is one of our primary service areas, but we extend our reach to nearby towns such as
                <Link class="text-blue-600 underline" href="/locations/abingdon">Abingdon</Link>,
                <Link class="text-blue-600 underline" href="/locations/kidlington">Kidlington</Link>, and
                <Link class="text-blue-600 underline" href="/locations/witney">Witney</Link>.
                With Tyres Anywhere, you’ll never have to worry about a tyre problem disrupting your day—we’ll come to you, saving you time and ensuring your vehicle stays roadworthy.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Oxford drivers choose Tyres Anywhere for speed, convenience, and professional expertise. Here’s why we’re the go-to mobile tyre service in the region:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Callout:</span>
                        No matter the time, we provide mobile tyre services around the clock, ensuring you’re never left stranded.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We aim to reach you within 60 minutes, offering fast service anywhere in Oxford or surrounding towns.
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
                Tyres Anywhere offers a full range of mobile tyre services tailored to Oxford’s drivers. From routine tyre changes to emergency callouts, we provide seamless, professional solutions:
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
                    Our mobile tyre fitting service brings new tyres directly to your location, whether you’re parked near the Radcliffe Camera, at a business park in Cowley, or enjoying the scenery in Port Meadow. No matter where you are in Oxford, our technicians will come to you, fit your tyres on-site, and balance them for optimal performance. With Tyres Anywhere, you don’t have to waste time visiting a garage—we take care of everything while you carry on with your day.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you’ve experienced a puncture or slow air leak, our mobile puncture repair service ensures that you won’t be stuck waiting for a replacement. We cover all areas of Oxford, from the city centre to the surrounding villages. Whether you’re parked near the Oxford Castle or in quieter residential areas like Iffley or Marston, we’ll assess the damage and, if possible, repair the tyre on-site, saving you the cost of a full replacement.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Oxford’s businesses and trades rely on their vehicles to stay operational. Our mobile tyre fitting service for vans and commercial vehicles ensures that your fleet remains on the road with minimal downtime. We offer a wide selection of tyres suited for commercial use, and our mobile units are equipped to handle large and small vehicle tyres, ensuring quick service for your business.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Tyre emergencies don’t wait for the right time, and neither do we. Whether you’re stuck on the A34, the A40, or in Oxford’s busy town centre, our 24/7 emergency tyre service ensures help is always nearby. From flat tyres to blowouts, we’ll arrive quickly to repair or replace your tyre, ensuring you’re back on the road safely, day or night.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Keeping your tyres properly inflated and your wheels balanced is crucial for safety, fuel efficiency, and tyre longevity. Our mobile tyre service in Oxford includes tyre pressure checks and wheel balancing, helping to extend the life of your tyres and improve your vehicle’s performance. We’ll visit you wherever you are, providing quick and professional care.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Our mobile tyre fitting service covers all parts of Oxford, from the historic city centre to its surrounding villages and towns. We also extend our services to nearby areas, ensuring full coverage across the region:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Oxford City Centre
                    </span>
                    <br>
                    Whether you’re near the Oxford University campus, the Ashmolean Museum, or shopping along Cornmarket Street, we offer fast on-site tyre services.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Cowley, Headington & Summertown
                    </span>
                    <br>
                    We provide quick tyre assistance for drivers in Oxford’s key residential and commercial districts.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Abingdon & Kidlington
                    </span>
                    <br>
                    Drivers in Abingdon and Kidlington can rely on us for fast, reliable tyre services, with our mobile vans available to serve the nearby towns.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Witney & Bicester
                    </span>
                    <br>
                    We also extend our coverage to towns like <Link class="text-blue-600 underline" href="/locations/witney">Witney</Link> and
                    <Link class="text-blue-600 underline" href="/locations/bicester">Bicester</Link>,
                    ensuring that drivers across Oxfordshire have access to professional mobile tyre fitting.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A34, A40 & M40 Routes
                    </span>
                    <br>
                    Whether commuting through Oxford’s main routes or traveling on the M40, we offer rapid roadside assistance for tyre issues.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Oxford’s roads, with a mix of urban traffic, historic cobblestone streets, and fast-moving motorways, can create various tyre problems. At Tyres Anywhere, we solve these common issues with speed and professionalism:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    Punctures from nails, debris, or sharp objects on Oxford’s roads
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
                No matter the issue, our mobile team provides quick, effective solutions to keep Oxford’s drivers safe and secure on the road.
            </p>

            <p class="font-semibold mt-6">
                Supporting {{ location }}'s Community
            </p>

            <p class="mt-2">
                Oxford is a city steeped in history, education, and culture, and we’re proud to support its community with reliable, professional mobile tyre services. Whether you’re commuting to work, running errands, or exploring the beautiful surrounding areas like Abingdon or Witney, Tyres Anywhere is here to ensure your tyres are in top condition without the inconvenience of a garage visit.
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
