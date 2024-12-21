<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Worcester. Get fast on-site tyre repairs and replacements delivered at home, work, or roadside. Call 07442 980101 for expert service">
        <meta property="og:description" content="24/7 mobile tyre fitting in Worcester. Get fast on-site tyre repairs and replacements delivered at home, work, or roadside. Call 07442 980101 for expert service" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Fast, Reliable Mobile Tyre Repairs and Replacements in Worcester and Surrounding Areas</template>

        <template v-slot:title1>Covering Worcester</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere is proud to provide Worcester with expert mobile tyre fitting services, delivering fast and reliable tyre repairs, replacements, and emergency callouts. Worcester, with its historic city centre and proximity to major routes like the M5 and A44, is a key service area for us. Whether you’re parked near Worcester Cathedral, commuting along the A4440, or in a residential area like St John’s, our fully equipped mobile tyre-fitting vans bring professional service directly to your location.
            </p>
            <p>
                Our service extends to nearby areas such as Droitwich, Malvern, and Pershore, ensuring drivers across Worcestershire receive fast and efficient tyre care. With Tyres Anywhere, there’s no need to visit a garage—we bring the garage to you, offering the most convenient mobile tyre fitting service available.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Rely on Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in Worcester trust Tyres Anywhere for quick response times, expert service, and on-site convenience. Here’s why we’re the #1 choice for mobile tyre fitting:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8">
                        <path d="M6.41 0l-.69.72L2.94 3.5l-.81-.78L1.41 2l-1.41 1.41L1.72 4l1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 0z"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Available 24/7:</span>
                        Whether it’s an emergency or routine tyre replacement, we’re available around the clock.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8">
                        <path d="M6.41 0l-.69.72L2.94 3.5l-.81-.78L1.41 2l-1.41 1.41L1.72 4l1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 0z"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Local Response Times:</span>
                        We aim to reach you as quickly as possible, usually within 60 minutes, for prompt service across Worcester.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8">
                        <path d="M6.41 0l-.69.72L2.94 3.5l-.81-.78L1.41 2l-1.41 1.41L1.72 4l1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 0z"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Convenience:</span>
                        From puncture repairs to full tyre replacements, our mobile vans handle everything on the spot.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8">
                        <path d="M6.41 0l-.69.72L2.94 3.5l-.81-.78L1.41 2l-1.41 1.41L1.72 4l1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 0z"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Certified Technicians:</span>
                        Our fully trained team ensures tyres are fitted or repaired to the highest safety standards.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8">
                        <path d="M6.41 0l-.69.72L2.94 3.5l-.81-.78L1.41 2l-1.41 1.41L1.72 4l1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 0z"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Tyre Selection:</span>
                        We offer a broad selection of premium and budget-friendly tyres to suit every vehicle.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }} and Worcestershire</template>
        <template v-slot:content3>
            <p class="mt-4">
                At Tyres Anywhere, we provide a full range of mobile tyre services in Worcester, ensuring that drivers receive expert tyre care when and where they need it:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <Link href="/mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Fitting Service
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-4 ml-1 mt-1" viewBox="0 0 24 24">
                            <path d="M8.25 3.75h11.25a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5z"></path>
                        </svg>
                    </Link>
                    <br>
                    Our mobile tyre fitting service delivers new tyres directly to your home, work, or roadside location. Whether you’re near Worcester city centre, driving along the M5, or in a residential area like Battenhall, our technicians will fit and balance your tyres on-site, ensuring your vehicle is road-ready without the hassle of visiting a garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-4 ml-1 mt-1" viewBox="0 0 24 24">
                            <path d="M8.25 3.75h11.25a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5z"></path>
                        </svg>
                    </Link>
                    <br>
                    If you’ve experienced a puncture, Tyres Anywhere provides fast, reliable on-site repairs. Whether you’re parked near the River Severn, driving through St Peter’s, or in Worcester’s busy town centre, we’ll come to your location, assess the damage, and repair the tyre if possible, saving you from unnecessary costs.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Commercial & Van Tyre Services
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-4 ml-1 mt-1" viewBox="0 0 24 24">
                            <path d="M8.25 3.75h11.25a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5z"></path>
                        </svg>
                    </Link>
                    <br>
                    For businesses in Worcester, keeping vehicles on the road is essential. Our mobile tyre fitting service for vans and commercial vehicles ensures minimal downtime. We carry a wide range of tyres designed for commercial use, ensuring your fleet stays operational.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Tyre Assistance</span>
                    <br><br>
                    Whether you’re stuck on the M5, driving through Worcester’s busy streets, or near Malvern, our 24/7 emergency mobile tyre service ensures rapid assistance. From flat tyres to blowouts, we provide fast repairs and replacements, getting you back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Maintenance & Safety Checks</span>
                    <br><br>
                    Maintaining correct tyre pressure and balanced wheels is essential for safety and performance. Our mobile service includes tyre pressure checks and wheel balancing throughout Worcester, helping extend tyre life and improve fuel efficiency.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Birmingham</template>
        <template v-slot:content4>
            <p class="mt-4">
                Worcester is a thriving city in Worcestershire, surrounded by key routes and nearby towns. Our mobile tyre fitting service covers all parts of Worcester and extends to nearby areas such as:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Worcester City Centre & St John’s
                    </span>
                    <br>
                    Whether you’re working or shopping in Worcester, we provide fast on-site tyre services to keep you moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Residential Areas (Battenhall, Warndon, St Peter’s)
                    </span>
                    <br>
                    We serve residential areas across Worcester, ensuring tyre fitting and repairs are done at your convenience.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M5 & A44 Routes
                    </span>
                    <br>
                    If you’re commuting or traveling along these major routes, our mobile service offers rapid roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Malvern, Droitwich & Pershore
                    </span>
                    <br>
                    Our service extends to nearby towns, ensuring drivers across Worcestershire receive expert tyre care.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Repair or Replace: Making the Right Tyre Choice</template>
        <template v-slot:content5>
            <p>
                The decision to repair or replace a tyre depends on the type and extent of the damage. Minor punctures can often be repaired, but damage to the sidewall or larger punctures usually require replacement. Age and wear of the tyre should also be considered when making the decision.
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
                Worcester is a vibrant part of Worcestershire, and Tyres Anywhere is proud to support local drivers with fast, professional mobile tyre services. Whether you’re commuting to nearby towns, running errands in the city, or managing a business fleet, our mobile tyre fitting service ensures that your tyres are always in top condition without the hassle of visiting a garage.
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
