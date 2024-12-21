<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Croydon. Fast, reliable tyre repairs and replacements wherever you are. Call 07442 980101 for expert service now!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Croydon. Fast, reliable tyre repairs and replacements wherever you are. Call 07442 980101 for expert service now!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – Your Go-To Mobile Services</template>

        <template v-slot:title1>Hassle-Free Mobile Tyre Fitting in {{ location }}</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere is delighted to offer professional, mobile tyre fitting services across Croydon and surrounding South London areas. From emergency tyre replacements to scheduled fittings, our experienced technicians provide expert services directly at your home, office, or roadside location. Croydon, with its thriving commercial scene and busy residential areas, is a dynamic town that deserves a tyre service tailored for convenience and efficiency. Whether you’re driving down the bustling A23, parked near Centrale Shopping Centre, or facing tyre trouble in a quiet residential street, our 24/7 mobile tyre service ensures you’re back on the road in no time.
            </p>
            <p>
                Forget the hassle of waiting at a garage or dealing with tow trucks. Our mobile tyre service saves you time and stress, delivering fast solutions directly to your vehicle. With fully equipped vans and a wide selection of tyres, Tyres Anywhere guarantees a smooth, efficient service to meet all your tyre needs.
            </p>
        </template>

        <template v-slot:title2>Why Croydon Drivers Trust Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in Croydon rely on Tyres Anywhere for professional, reliable tyre services that prioritize convenience and safety. Here’s why:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Tyre issues can arise at any time. Our round-the-clock service ensures you receive prompt assistance, whether it’s the middle of the night or rush hour.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        We know how important it is to resolve tyre problems quickly, so our team is always ready to respond rapidly to your call.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Expertise:</span>
                        Our service brings professional equipment directly to your location, eliminating the need for you to visit a garage.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Certified Technicians</span>
                        Our team of experts is fully trained to handle all types of tyre issues, providing safe and efficient solutions on-site.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        From premium brands to affordable options, we carry a diverse selection of tyres to suit your vehicle and budget.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Comprehensive Mobile Tyre Services in Croydon</template>
        <template v-slot:content3>

            <p class="mt-4">
                Whether you need an emergency tyre repair or a full tyre replacement, Tyres Anywhere provides a range of mobile tyre services across Croydon, tailored to meet your needs. Our mobile units are fully equipped to handle everything from tyre repairs to new fittings, ensuring you’re back on the road with minimal disruption.
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
                    For drivers needing new tyres, our mobile tyre fitting service delivers and installs tyres directly at your location. Whether you’re in the heart of Croydon near the Whitgift Centre or parked in a quieter neighbourhood like Purley, our technicians will arrive promptly with a selection of tyres suited to your vehicle. We’ll fit and balance your new tyres on-site, ensuring a safe and efficient service without the need for you to visit a garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not all tyre issues require a replacement. If your tyre can be repaired, we’ll fix it on-site. Our mobile tyre repair service is perfect for dealing with punctures or slow leaks. Whether you’re parked outside Fairfield Halls or driving through South Norwood, we’ll assess the damage and, if safe, repair your tyre to get you back on the road quickly.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Croydon, downtime caused by tyre issues can be costly. Our mobile tyre fitting service for vans and commercial vehicles is designed to minimize disruption. We provide fast, reliable service to get your fleet back on the road as soon as possible. From industrial estates in Croydon to busy commercial zones, we cater to all areas, ensuring your vehicles are always road-ready.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    If you face a tyre emergency, whether it's a blowout on the A23 or a flat tyre in the quieter streets of South Croydon, our 24/7 emergency mobile tyre service is just a call away. Our technicians will arrive promptly to resolve the issue, whether it’s a repair or a full replacement, getting you back on track with minimal delay.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Proper tyre pressure and balanced wheels are essential for vehicle safety and performance. As part of our mobile tyre fitting service, we offer tyre pressure checks and wheel balancing to ensure your vehicle is in optimal condition. This service helps improve fuel efficiency, prolongs tyre life, and enhances driving comfort.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Areas We Serve in Croydon</template>
        <template v-slot:content4>
            <p class="mt-4">
                Croydon is a large, vibrant area with a diverse range of neighbourhoods, and Tyres Anywhere provides mobile tyre fitting services across all parts of the town. Whether you’re in a busy commercial district or a suburban neighbourhood, we’ve got you covered. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Croydon Town Centre
                    </span>
                    <br>
                    Whether you’re shopping, working, or enjoying a day out in the centre, our mobile tyre fitting service ensures you won’t be stranded with a tyre issue.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Purley and South Croydon
                    </span>
                    <br>
                    If you live in or around Purley or South Croydon, our mobile units will come directly to your home or workplace to fix any tyre problems.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        West Croydon
                    </span>
                    <br>
                    This busy area sees a lot of traffic, and if you find yourself with a flat tyre or blowout near West Croydon, we’ll provide prompt roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Addiscombe & Shirley
                    </span>
                    <br>
                    For those residing or working in Addiscombe and Shirley, we provide fast and reliable mobile tyre fitting, bringing expert services right to your door.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Wandle Park & Waddon
                    </span>
                    <br>
                    If you’re enjoying a day at Wandle Park or parked near Waddon Station, our mobile team will arrive quickly to resolve any tyre issues.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Issues We Fix in Croydon</template>
        <template v-slot:content5>
            <p>
                Tyre problems can happen at any time, but Tyres Anywhere is here to provide quick, effective solutions to get you back on the road. Some common tyre issues we handle include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Sharp objects on Croydon’s busy roads can cause punctures. If repairable, we’ll fix your tyre on-site, saving you from needing a replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    If you experience a blowout while driving, we’ll come to your location and replace the tyre, ensuring your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn tyres with insufficient tread can be dangerous. We’ll replace worn tyres with new ones that improve your grip and overall safety.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow air leak could be the result of a valve issue or minor puncture. We’ll inspect your tyre and fix the issue, preventing it from becoming a larger problem.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven wear is often caused by misaligned wheels or improper tyre pressure. We’ll replace worn tyres and provide advice on how to maintain them going forward.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting the Croydon Community
            </p>

            <p class="mt-2">
                As Croydon continues to grow and evolve, Tyres Anywhere is proud to support its community with reliable, convenient tyre services. Whether you’re a commuter, a business owner, or a resident, our mobile tyre fitting service is designed to keep you moving safely and efficiently.
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
