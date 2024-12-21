<template>
    <Head>
        <meta name="description" content="Expert mobile tyre fitting in Walsall and the greater Birmingham area. 24/7 on-site tyre services at home, work, or roadside. Call Tyres Anywhere now.">
        <meta property="og:description" content="Expert mobile tyre fitting in Walsall and the greater Birmingham area. 24/7 on-site tyre services at home, work, or roadside. Call Tyres Anywhere now." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Your Premier Mobile Tyre Fitting Service in Walsall and Birmingham</template>

        <template v-slot:title1>Leading Mobile Tyre Fitting Across Walsall & Birmingham</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we provide top-tier mobile tyre fitting services throughout Walsall and the greater Birmingham area. Walsall, a bustling town in the West Midlands, is known for its rich industrial heritage and busy transport links, including the M6 motorway, A34, and A454. Whether you're stranded near the Walsall Arboretum, commuting through Birmingham city centre, or in a residential area like Darlaston, our state-of-the-art mobile tyre-fitting vans bring professional assistance right to your location.
            </p>
            <p>
                As we cover both Walsall and Birmingham, our focus is on delivering swift response times and exceptional service to all our clients. We also extend our services to surrounding areas such as Wolverhampton, West Bromwich, and Sutton Coldfield, ensuring that drivers across the West Midlands have access to reliable, on-the-spot tyre care. With Tyres Anywhere, there's no need to visit a garage—we bring the tyre experts directly to you.
            </p>
        </template>

        <template v-slot:title2>Why Choose Tyres Anywhere in {{ location }} and Birmingham?</template>
        <template v-slot:content2>
            <p class="mt-4">
                Motorists in Walsall and Birmingham choose Tyres Anywhere for our unparalleled convenience, expertise, and dedication to customer satisfaction. Here's what sets us apart:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8">
                        <path d="M6.41 0l-.69.72L2.94 3.5l-.81-.78L1.41 2l-1.41 1.41L1.72 4l1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 0z"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Round-the-Clock Service:</span>
                        Available 24/7, we're always ready to assist with emergency tyre replacements or scheduled fittings, day or night.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8">
                        <path d="M6.41 0l-.69.72L2.94 3.5l-.81-.78L1.41 2l-1.41 1.41L1.72 4l1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 0z"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Rapid Response Times:</span>
                        Operating locally in Walsall and Birmingham, we aim to reach you promptly, typically within an hour.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8">
                        <path d="M6.41 0l-.69.72L2.94 3.5l-.81-.78L1.41 2l-1.41 1.41L1.72 4l1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 0z"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-the-Spot Convenience:</span>
                        Our fully equipped vans handle everything from puncture repairs to new tyre installations wherever you are.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8">
                        <path d="M6.41 0l-.69.72L2.94 3.5l-.81-.78L1.41 2l-1.41 1.41L1.72 4l1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 0z"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Professional Technicians:</span>
                        Our team consists of skilled professionals committed to delivering high-quality tyre services safely and efficiently.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8">
                        <path d="M6.41 0l-.69.72L2.94 3.5l-.81-.78L1.41 2l-1.41 1.41L1.72 4l1.5 1.5.69.72.72-.72 3.5-3.5.72-.72L6.41 0z"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Extensive Tyre Selection:</span>
                        We offer a wide range of tyres from leading brands to budget-friendly options, suitable for all vehicle types and driving needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Our Mobile Tyre Services in {{ location }} and Birmingham</template>
        <template v-slot:content3>
            <p class="mt-4">
                Tyres Anywhere offers a comprehensive suite of mobile tyre services across Walsall and Birmingham, ensuring you stay safe on the road:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <Link href="/mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Premier Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-4 ml-1 mt-1" viewBox="0 0 24 24">
                            <path d="M8.25 3.75h11.25a.75.75 0 01.75.75v11.25a.75.75 0 01-1.5 0V6.31L5.03 20.03a.75.75 0 01-1.06-1.06L17.69 5.25H8.25a.75.75 0 010-1.5z"></path>
                        </svg>
                    </Link>
                    <br>
                    Our mobile tyre fitting service delivers new tyres directly to you, whether you're at home, at work, or roadside. From Walsall town centre to Birmingham's bustling streets, our technicians will fit and balance your tyres on-site, saving you time and hassle.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Efficient Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-4 ml-1 mt-1" viewBox="0 0 24 24">
                            <path d="M8.25 3.75h11.25a.75.75 0 01.75.75v11.25a.75.75 0 01-1.5 0V6.31L5.03 20.03a.75.75 0 01-1.06-1.06L17.69 5.25H8.25a.75.75 0 010-1.5z"></path>
                        </svg>
                    </Link>
                    <br>
                    Encountered a puncture? Our mobile tyre repair service comes to your aid swiftly. Whether you're near the New Art Gallery Walsall, navigating through Birmingham's Bullring, or by Walsall Manor Hospital, we'll assess and repair your tyre on the spot if possible.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Commercial & Van Tyre Services
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="size-4 ml-1 mt-1" viewBox="0 0 24 24">
                            <path d="M8.25 3.75h11.25a.75.75 0 01.75.75v11.25a.75.75 0 01-1.5 0V6.31L5.03 20.03a.75.75 0 01-1.06-1.06L17.69 5.25H8.25a.75.75 0 010-1.5z"></path>
                        </svg>
                    </Link>
                    <br>
                    For businesses operating in Walsall and Birmingham, vehicle downtime can be costly. Our mobile tyre fitting service for vans and commercial fleets ensures your operations run smoothly. We provide durable tyres suitable for commercial use, installed at your convenience.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Tyre Assistance 24/7</span>
                    <br><br>
                    Stuck on the M6 or caught in Birmingham's traffic with a flat tyre? Our 24-hour emergency callout service ensures you receive prompt assistance, getting you back on the road safely and swiftly.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Maintenance Services</span>
                    <br><br>
                    Regular tyre maintenance is crucial for safety and performance. We offer on-site tyre pressure checks, wheel balancing, and tread depth assessments throughout Walsall and Birmingham.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Proudly Serving {{ location }} & The Birmingham Area</template>
        <template v-slot:content4>
            <p class="mt-4">
                Our services cover the entirety of Walsall and extend throughout Birmingham, including:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Walsall Town Centre & Suburbs
                    </span>
                    <br>
                    Whether you're in Caldmore, Bloxwich, or Willenhall, we bring our mobile tyre services directly to you.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Birmingham City Centre & Surroundings
                    </span>
                    <br>
                    From the Jewellery Quarter to Edgbaston, we provide swift tyre services across Birmingham.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Major Roadways & Motorways
                    </span>
                    <br>
                    If you're traveling along the M6, A34, or A454, our mobile units can reach you for roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby Towns & Communities
                    </span>
                    <br>
                    We also serve areas like <Link class="text-blue-600 underline" href="/locations/wolverhampton">Wolverhampton</Link>, West Bromwich, and Sutton Coldfield.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Repair or Replace: Making the Right Tyre Decision</template>
        <template v-slot:content5>
            <p>
                Deciding between repairing or replacing a tyre depends on various factors, including the damage extent, location, and tyre condition.
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Evaluating the Damage
                    </span>
                    <br>
                    Not all tyre damages are repairable. Minor tread punctures may be fixed, but sidewall damages necessitate a replacement due to safety risks.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Damage Location Matters
                    </span>
                    <br>
                    Repair is generally possible for punctures within the central tread area. Damages near the shoulder or sidewall require tyre replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Size and Severity
                    </span>
                    <br>
                    Punctures larger than 6mm compromise the tyre's integrity and cannot be safely repaired.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Tyre Age and Wear
                    </span>
                    <br>
                    Older tyres or those with significant wear may not be worth repairing, as they may soon need replacement anyway.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Multiple Damages
                    </span>
                    <br>
                    Multiple punctures weaken the tyre structure. In such cases, replacement is the safer option.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Safety First
                    </span>
                    <br>
                    Your safety is paramount. When in doubt, opting for a tyre replacement ensures peace of mind.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Learn More
                    </span>
                    <br>
                    For detailed guidance, read our <Link class="text-blue-800 underline" href="/blog/how-to-check-if-my-tyre-is-repairable">comprehensive article on tyre repairability</Link>.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting the Walsall & Birmingham Community
            </p>

            <p class="mt-2">
                We take pride in serving the diverse and dynamic communities of Walsall and Birmingham. Whether you're a daily commuter, a local business owner, or a visitor exploring the region, Tyres Anywhere is dedicated to keeping you moving safely and efficiently.
            </p>
        </template>

        <template v-slot:title6>Get Back on the Road in {{ location }} Today</template>
        <template v-slot:content6>
            <p>
                Don't let tyre issues disrupt your day. With Tyres Anywhere, expert assistance is just a call away. We provide prompt, professional mobile tyre services across {{ location }} and Birmingham.
            </p>
            <p>
                To book a service or request immediate assistance, call us at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>. We're here 24/7 to meet all your tyre needs.
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
