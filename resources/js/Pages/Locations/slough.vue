<template>
    <Head>
        <meta name="description" content="Slough’s #1 mobile tyre fitting service. Fast and convenient mobile tyre repairs and replacements, 24/7. Call Tyres Anywhere for expert tyre care today.">
        <meta property="og:description" content="Slough’s #1 mobile tyre fitting service. Fast and convenient mobile tyre repairs and replacements, 24/7. Call Tyres Anywhere for expert tyre care today." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Slough’s Leading Mobile Tyre Fitting – On-Site Tyre Repairs and Replacements</template>

        <template v-slot:title1>Mobile Tyre Fitting in Slough</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere is proud to be <b class="font-semibold">Slough’s top-rated mobile tyre fitting service</b>,
                offering fast and professional <b class="font-semibold">tyre repairs, replacements, and emergency callouts</b>.
                Slough, with its busy urban roads, proximity to the M4, and thriving business community,
                is a key area for drivers in need of quick and convenient tyre services.
                Whether you’re commuting through the town centre, parked near Slough Trading Estate,
                or driving along the <b class="font-semibold">M4 or A4</b>, our mobile tyre vans will come to you, bringing the garage to your doorstep.
            </p>
            <p>
                As a local service, we understand the key spots around Slough where tyre issues are most likely to occur,
                from the busy Slough High Street to key commuter routes like the A355.
                Our coverage also extends to nearby towns such as
                <Link class="text-blue-600 underline" href="/locations/maidenhead">Maidenhead</Link>,
                <Link class="text-blue-600 underline" href="/locations/windsor">Windsor</Link>, and
                <Link class="text-blue-600 underline" href="/locations/uxbridge">Uxbridge</Link>,
                ensuring seamless service across the region.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Slough drivers trust Tyres Anywhere for our speed, convenience, and expertise. Here’s why we’re the #1 choice for mobile tyre fitting in the area:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Service:</span>
                        Whether it’s day or night, our team is always ready to assist you with any tyre issues.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We aim to reach you within 60 minutes, ensuring fast service anywhere in Slough or nearby areas.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Convenience:</span>
                        From puncture repairs to full tyre replacements, our mobile vans are equipped to handle everything on-site, saving you time and hassle.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Qualified Technicians:</span>
                        Our team is fully trained and certified to ensure your tyres are fitted or repaired to the highest safety standards.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        We stock a variety of tyres, from premium brands to budget-friendly options, ensuring we have the perfect tyres for your vehicle.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                At Tyres Anywhere, we offer a comprehensive range of mobile tyre services across Slough and surrounding areas. Whether it’s an emergency or routine maintenance, we’ve got you covered:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <Link href="/mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Slough’s Best Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Our mobile tyre fitting service delivers new tyres directly to your location, whether you’re at home, at work, or stuck on the roadside. Our technicians will come to you, fit and balance your new tyres, and get you back on the road quickly. Whether you’re in Slough town centre, near the Queensmere Shopping Centre, or commuting along the M4, our service ensures minimal disruption to your day.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Punctures can happen anytime, but with Tyres Anywhere, you won’t be left waiting. Our mobile puncture repair service ensures your tyre is repaired quickly and efficiently on-site, saving you the cost of a full replacement where possible. Whether you’re near the Slough Trading Estate or traveling on the A4, we’ll come to you and have you back on the road in no time.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Slough, vehicle downtime can lead to lost productivity. Our mobile tyre fitting service for vans and commercial vehicles ensures your fleet stays operational with minimal disruption. We offer a wide range of commercial tyres, ensuring fast, professional service for your business vehicles.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Whether you’re stuck on the M4, the A355, or in the town centre, our 24/7 emergency mobile tyre service ensures that help is always close at hand. From flat tyres to full replacements, we’ll arrive quickly to resolve your tyre issues and get you safely back on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining correct tyre pressure and balanced wheels is vital for vehicle safety and performance. Our mobile tyre service includes on-site tyre pressure checks and wheel balancing across Slough and nearby areas, helping to extend tyre life and improve fuel efficiency.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                As Slough’s leading mobile tyre fitting service, we cover all areas of the town and nearby locations, ensuring fast and reliable service:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Slough Town Centre
                    </span>
                    <br>
                    Whether you’re working or shopping in Slough’s town centre, we provide quick on-site tyre services to keep you moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slough Trading Estate
                    </span>
                    <br>
                    For businesses in Slough’s industrial hub, we offer professional tyre fitting and repairs to ensure your vehicles stay operational.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M4, A355, & A4 Routes
                    </span>
                    <br>
                    We provide rapid roadside assistance along Slough’s major routes, ensuring that drivers on the M4, A355, and A4 can quickly resolve tyre issues.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        <Link class="text-blue-600 underline" href="/locations/maidenhead">Maidenhead</Link>,
                        <Link class="text-blue-600 underline" href="/locations/windsor">Windsor</Link>, &
                        <Link class="text-blue-600 underline" href="/locations/uxbridge">Uxbridge</Link>
                    </span>
                    <br>
                    Our mobile service extends to nearby towns like Maidenhead, Windsor, and Uxbridge, providing full coverage for drivers across the region.
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
                Slough is a key commercial and commuter hub, and Tyres Anywhere is proud to support the local community with reliable mobile tyre services. Whether you’re commuting to nearby towns or running a business, our mobile tyre fitting service ensures that your tyres are in top condition without the hassle of visiting a garage.
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
