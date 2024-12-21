<template>
    <Head>
        <meta name="description" content="Expert mobile tyre fitting in Warwick. 24 hour emergency mobile tyre services at home, work or on the roadside. Call Tyres Anywhere now for prompt service!">
        <meta property="og:description" content="Expert mobile tyre fitting in Warwick. 24 hour emergency mobile tyre services at home, work or on the roadside. Call Tyres Anywhere now for prompt service!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Your Trusted Mobile Tyre Fitting Service in Warwick</template>

        <template v-slot:title1>Warwick’s Premier Mobile Tyre Fitting Solution</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere is proud to offer top-quality mobile tyre fitting services throughout Warwick and its surrounding areas. Warwick, renowned for its historic castle and picturesque scenery along the River Avon, is well-connected via the M40, A46, and A429. Whether you're parked near Warwick Castle, commuting along the M40, or in a residential area like Warwick Gates, our fully equipped mobile tyre-fitting vans deliver expert service directly to your location.
            </p>
            <p>
                Our proximity to Warwick allows us to provide quick response times and exceptional service for all local jobs. We also extend our coverage to nearby towns such as Leamington Spa, Kenilworth, and Stratford-upon-Avon, ensuring drivers across Warwickshire receive professional, timely tyre care. With Tyres Anywhere, there's no need to visit a garage—we bring the tyre specialists directly to you.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Rely on Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in Warwick choose Tyres Anywhere for our commitment to convenience, expertise, and customer satisfaction. Here's what makes us the preferred choice for mobile tyre services in the area:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8">
                        <path d="M6.41 0l-.69.72L2.94 3.5l-.81-.78L1.41 2l-1.41 1.41L1.72 4l1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 0z"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        We're available around the clock to assist with emergency tyre replacements or scheduled fittings, any time you need us.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8">
                        <path d="M6.41 0l-.69.72L2.94 3.5l-.81-.78L1.41 2l-1.41 1.41L1.72 4l1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 0z"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Local Response:</span>
                        Based near Warwick, we strive to reach you promptly, typically within 60 minutes.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8">
                        <path d="M6.41 0l-.69.72L2.94 3.5l-.81-.78L1.41 2l-1.41 1.41L1.72 4l1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 0z"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Convenience:</span>
                        From puncture repairs to new tyre installations, our mobile units handle everything wherever you are.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8">
                        <path d="M6.41 0l-.69.72L2.94 3.5l-.81-.78L1.41 2l-1.41 1.41L1.72 4l1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 0z"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our skilled team ensures your tyres are fitted or repaired to the highest safety standards.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8">
                        <path d="M6.41 0l-.69.72L2.94 3.5l-.81-.78L1.41 2l-1.41 1.41L1.72 4l1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 0z"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Tyre Selection:</span>
                        We stock a range of tyres from premium brands to budget options, suitable for all vehicles and driving preferences.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Comprehensive Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>
            <p class="mt-4">
                Tyres Anywhere offers a full suite of mobile tyre services across Warwick, ensuring you receive expert tyre care whenever and wherever you need it:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <Link href="/mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Warwick’s Trusted Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-4 ml-1 mt-1" viewBox="0 0 24 24">
                            <path d="M8.25 3.75h11.25a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5z"></path>
                        </svg>
                    </Link>
                    <br>
                    Our mobile tyre fitting service brings new tyres directly to your home, workplace, or roadside location. Whether you're in Warwick town centre, parked near St Nicholas Park, or commuting along the A46, our technicians will fit and balance your tyres on-site, saving you time and effort.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Prompt Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-4 ml-1 mt-1" viewBox="0 0 24 24">
                            <path d="M8.25 3.75h11.25a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5z"></path>
                        </svg>
                    </Link>
                    <br>
                    If you've suffered a puncture, our mobile tyre repair service provides quick and reliable solutions. Whether you're near Warwick Racecourse, driving through Leamington Spa, or close to Warwick Hospital, we'll assess the damage and repair your tyre if possible, getting you back on the road swiftly.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Commercial & Van Tyre Services
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-4 ml-1 mt-1" viewBox="0 0 24 24">
                            <path d="M8.25 3.75h11.25a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5z"></path>
                        </svg>
                    </Link>
                    <br>
                    For businesses in Warwick, we offer mobile tyre fitting services for vans and commercial vehicles, minimizing downtime and keeping your operations running smoothly. We provide durable tyres suitable for commercial use, installed at your convenience.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Tyre Assistance</span>
                    <br><br>
                    Whether you're stranded on the M40, traveling through Warwick town centre, or near Warwick Parkway Station, our 24-hour emergency callout service ensures you receive prompt assistance. From flat tyres to blowouts, we provide quick repairs and replacements when you need them most.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Maintenance & Safety Checks</span>
                    <br><br>
                    Regular tyre maintenance is essential for safety and performance. We offer on-site tyre pressure checks, wheel balancing, and tread depth assessments throughout Warwick.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Our mobile tyre fitting service covers all parts of Warwick and extends to nearby areas, including:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Warwick Town Centre & Suburbs
                    </span>
                    <br>
                    Whether you're in Emscote, Chase Meadow, or Warwick Gates, we provide fast on-site tyre services wherever you are.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Major Roads & Motorways
                    </span>
                    <br>
                    If you're traveling along the M40, A46, or A429, our mobile units can reach you quickly for roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby Towns
                    </span>
                    <br>
                    We also serve areas like <Link class="text-blue-600 underline" href="/locations/royal-leamington-spa">Leamington Spa</Link>, Kenilworth, and Stratford-upon-Avon, providing comprehensive tyre services across Warwickshire.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Repair or Replace: Making the Right Tyre Choice</template>
        <template v-slot:content5>
            <p>
                Deciding whether to repair or replace a tyre depends on the nature and extent of the damage. Minor punctures can often be repaired, but significant damage or wear may require a replacement for safety.
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Assessing Damage Severity
                    </span>
                    <br>
                    Not all tyre damage is repairable. Minor punctures in the tread area can often be fixed, but damage to the sidewall necessitates a replacement due to safety concerns.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Location of Damage
                    </span>
                    <br>
                    Punctures within the central tread area are usually repairable. However, damage near the shoulder or sidewall of the tyre is not safely repairable and requires a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Size Matters
                    </span>
                    <br>
                    Only punctures less than 6mm in diameter can be safely repaired. Larger punctures compromise the tyre's integrity and necessitate replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Tyre Age and Condition
                    </span>
                    <br>
                    If your tyre is old or shows significant wear, replacing it might be more cost-effective and safer in the long run, even if the damage is minor.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Multiple Damages
                    </span>
                    <br>
                    Tyres with multiple punctures, especially close together, should be replaced to ensure safety and performance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Safety First
                    </span>
                    <br>
                    When in doubt, opting for a replacement ensures your safety on the road. Our technicians can advise you on the best course of action.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Learn More
                    </span>
                    <br>
                    For more information, read our <Link class="text-blue-800 underline" href="/blog/how-to-check-if-my-tyre-is-repairable">detailed guide on tyre repairability</Link>.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Committed to the {{ location }} Community
            </p>

            <p class="mt-2">
                As a part of the Warwick community, Tyres Anywhere is dedicated to providing exceptional mobile tyre services to local drivers. Whether you're commuting to work, exploring the historic sites, or managing a business fleet, we're here to ensure your tyres are in optimal condition.
            </p>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Service in {{ location }} Today</template>
        <template v-slot:content6>
            <p>
                Don't let tyre issues disrupt your plans. With Tyres Anywhere, expert assistance is just a call away. We provide prompt, professional mobile tyre services across {{ location }}.
            </p>
            <p>
                To schedule a service or request emergency assistance, call us today at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>. We're available 24/7 for all your tyre needs in {{ location }}.
            </p>

            <p class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414L16.414 9.5a1 1 0 010 1.414L11.707 15.707a1 1 0 01-1.414 0z"></path>
                    <path d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 111.414-1.414L9.414 9.5a1 1 0 010 1.414L5.707 15.707a1 1 0 01-1.414 0z"></path>
                </svg>
                <span>Need immediate tyre assistance? Call us now at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a></span>
            </p>
        </template>
    </LocationFrame>
</template>

<script setup>
import { Link, Head } from '@inertiajs/vue3';
import LocationFrame from '../../Shared/LocationFrame.vue';

defineProps({
    location: String,
});
</script>

<style scoped>

</style>
