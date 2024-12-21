<template>
    <Head>
        <meta name="description" content="Fast, reliable 24/7 mobile tyre fitting in Sutton. On-site tyre repairs and replacements at home, work, or roadside. Call 07442 980101 for expert tyre service.">
        <meta property="og:description" content="Fast, reliable 24/7 mobile tyre fitting in Sutton. On-site tyre repairs and replacements at home, work, or roadside. Call 07442 980101 for expert tyre service." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Fast, Reliable Mobile Tyre Repairs and Replacements in Sutton and South London</template>

        <template v-slot:title1>The #1 Mobile Tyre Fitting in Sutton</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere is proud to offer Sutton’s top-rated mobile tyre fitting service, delivering expert tyre repairs, replacements, and emergency callouts across the area. Sutton, located in South London, is a busy suburban town with major road links such as the A232 and A217. Whether you’re commuting along these routes, parked near Sutton High Street, or in a residential area, our fully equipped mobile tyre-fitting vans bring expert service directly to your location.
            </p>
            <p>
                Our service not only covers Sutton but extends across Greater London, ensuring drivers throughout South London have access to fast, reliable tyre care. With Tyres Anywhere, there’s no need to visit a garage—our mobile vans bring professional tyre services directly to you, wherever you are.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Drivers in Sutton trust Tyres Anywhere for our quick response times, professional service, and unmatched convenience. Here’s why we’re the #1 choice for mobile tyre fitting:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        We provide mobile tyre services around the clock, ensuring help is always available.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Rapid Response Times:</span>
                        We aim to arrive within 60 minutes, offering fast service across Sutton and South London.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Convenience:</span>
                        From puncture repairs to full tyre replacements, our mobile vans handle all tyre needs on the spot, saving you time.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our expert team ensures tyres are fitted or repaired to the highest safety standards.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        We stock a variety of tyres, from premium brands to budget-friendly options, suitable for every vehicle.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                At Tyres Anywhere, we offer a comprehensive range of mobile tyre services across Sutton, ensuring expert tyre care when and where you need it:
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
                    Our mobile tyre fitting service delivers new tyres directly to your home, workplace, or roadside location. Whether you’re commuting along the A217, parked near Sutton Common, or at home in Cheam, our technicians will fit and balance your tyres on-site, providing a hassle-free experience.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you’ve experienced a puncture, Tyres Anywhere provides fast, reliable on-site repairs. Whether you’re in Sutton town centre, driving near Rosehill Park, or heading along the A232, we’ll come to your location, assess the damage, and repair the tyre if possible, saving you from a costly replacement.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Sutton, keeping vehicles on the road is essential. Our mobile tyre fitting service for vans and commercial vehicles ensures minimal downtime. We offer a wide range of tyres suited for commercial use, providing expert service to keep your business moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Whether you’re stuck on the A232, driving through Sutton’s busy town centre, or near Belmont, our 24/7 emergency mobile tyre service ensures rapid assistance. From flat tyres to blowouts, we provide fast repairs and replacements, getting you back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining correct tyre pressure and balanced wheels is essential for vehicle safety and performance. Our mobile service includes tyre pressure checks and wheel balancing across Sutton, helping to extend tyre life and improve your vehicle’s performance.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Sutton is a busy suburban town in South London, surrounded by key routes and nearby areas. Our mobile tyre fitting service covers all parts of Sutton and extends to surrounding areas such as:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Sutton Town Centre
                    </span>
                    <br>
                    Whether you’re working or shopping in Sutton, we provide fast on-site tyre services to keep you moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Cheam & Belmont
                    </span>
                    <br>
                    We serve all residential areas in Sutton, offering convenient tyre fitting and repairs at your doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A217 & A232 Routes
                    </span>
                    <br>
                    If you’re commuting or traveling via the A217 or A232, our mobile service provides rapid roadside assistance along these major routes.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        <Link class="text-blue-600 underline" href="/locations/london">London</Link> & Surrounding Towns
                    </span>
                    <br>
                    Our service reaches into London itself, offering coverage for drivers throughout the city, and nearby areas such as
                    <Link class="text-blue-600 underline" href="/locations/croydon">Croydon</Link> and
                    <Link class="text-blue-600 underline" href="/locations/mitcham">Mitcham</Link>.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Should I repair or replace my tyre?</template>
        <template v-slot:content5>
            <p>
                The decision to repair or replace a tyre depends on the type and extent of the damage.
                Minor punctures can often be repaired, but damage to the sidewall or larger punctures usually require replacement.
                Age and wear of the tyre should also be considered when making the decision.
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Assessing the Damage
                    </span>
                    <br>
                    Not all tyre damage is created equal. Minor punctures in the tread can often be repaired, but certain types of damage—such as cuts,
                    cracks, or bulges on the sidewall—require a replacement. The sidewall is a critical structural part of the tyre, and damage there is not safe to repair.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Location of the Damage
                    </span>
                    <br>
                    The location of the puncture plays a big role in determining if the tyre can be repaired.
                    Generally, punctures located in the central three-quarters of the tread area are repairable.
                    However, punctures on the edge of the tread or on the sidewall cannot be safely repaired and should be replaced to prevent blowouts.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Size of the Puncture
                    </span>
                    <br>
                    Tyre repairs are only effective for punctures that are 6mm or smaller in diameter.
                    Any damage larger than this typically compromises the tyre’s structural integrity,
                    making it unsafe for future use. In such cases, replacing the tyre is the safest option.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Age and Wear
                    </span>
                    <br>
                    Even if a tyre puncture seems repairable, its age and overall wear should be considered.
                    Tyres that are older than 5-6 years, or those with significant tread wear, may not provide the same safety and performance,
                    even after a repair. If the tyre is close to its legal minimum tread depth (1.6mm in the UK), it's often better to opt for a replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Multiple Punctures
                    </span>
                    <br>
                    If your tyre has multiple punctures, especially in close proximity, a replacement is usually recommended.
                    Repairing multiple areas can weaken the tyre’s structure, reducing its overall strength and safety.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Is It Really Worth Repairing?
                    </span>
                    <br>
                    While a tyre repair can save you money, it’s only effective if the tyre is in otherwise good condition.
                    Replacing the tyre is a better option if it’s nearing the end of its lifespan, heavily worn,
                    or showing other signs of damage. After all, your safety on the road should always come first.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Want to Learn More?
                    </span>
                    <br>
                    For a detailed guide on when your tyre is repairable and when it needs to be replaced,
                    check out our <Link class="text-blue-800 underline" href="/blog/how-to-check-if-my-tyre-is-repairable">blog post on tyre repair-ability</Link> .
                    It covers everything you need to know about safe tyre repairs and when to consider a replacement.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting {{ location }}'s Community
            </p>

            <p class="mt-2">
                Sutton is a key suburban town in South London, and Tyres Anywhere is proud to support its local drivers with fast, professional mobile tyre services. Whether you’re commuting to nearby areas, running errands in the town centre, or managing a business fleet, our mobile tyre fitting service ensures that your tyres are always in top condition without the hassle of visiting a garage.
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
