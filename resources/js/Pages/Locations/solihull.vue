<template>
    <Head>
        <meta name="description" content="Solihull’s #1 mobile tyre fitting service. Fast on-site tyre repairs and replacements across Solihull and Birmingham. Call 07442 980101 for expert service today">
        <meta property="og:description" content="Solihull’s #1 mobile tyre fitting service. Fast on-site tyre repairs and replacements across Solihull and Birmingham. Call 07442 980101 for expert service today" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Fast, Reliable Mobile Tyre Services Delivered Across Solihull and Greater Birmingham</template>

        <template v-slot:title1>Solihull’s Leading Mobile Tyre Fitting</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere is proud to offer Solihull’s top-rated mobile tyre fitting service, delivering fast and efficient tyre repairs, replacements, and emergency callouts. As a major area within the wider Birmingham region, Solihull is known for its vibrant town centre, leafy suburbs, and excellent transport links. Whether you’re commuting via the A41, parked near Touchwood Shopping Centre, or driving along the M42, our mobile tyre-fitting vans bring expert tyre services directly to you.
            </p>
            <p>
                In addition to covering Solihull, our service extends throughout the wider Birmingham area, ensuring seamless mobile tyre fitting across the entire city and surrounding areas. Whether you’re at home, work, or roadside, Tyres Anywhere provides reliable on-site tyre services when you need them.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Solihull drivers trust Tyres Anywhere for our quick response times, professional service, and unmatched convenience. Here’s why we’re Solihull’s preferred mobile tyre service:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        We offer around-the-clock service, ensuring that you’re never left stranded with a tyre issue.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        Our technicians arrive within 60 minutes, providing prompt service across Solihull and Birmingham.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Solutions:</span>
                        From emergency tyre repairs to scheduled replacements, our vans are fully equipped to handle everything on the spot.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our expert team ensures that tyres are fitted or repaired to the highest safety standards.
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
                Tyres Anywhere provides a full range of mobile tyre services across Solihull and the wider Birmingham area, ensuring drivers have access to convenient, professional tyre care:
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
                    Our mobile tyre fitting service delivers new tyres directly to your home, workplace, or roadside location. Whether you’re near Tudor Grange Park, commuting on the M42, or parked at the NEC, our technicians will fit and balance your tyres on-site, ensuring your vehicle is road-ready. No need to visit a garage—Tyres Anywhere brings expert service to your door.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Punctures and minor tyre damage can disrupt your day, but our mobile puncture repair service ensures you’ll be back on the road quickly. Whether you’re in Shirley, Knowle, or near Solihull Hospital, we’ll come to your location, assess the damage, and repair the tyre if possible, saving you time and avoiding a costly replacement.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses operating in Solihull and Birmingham, keeping your fleet on the road is essential. Our mobile tyre fitting service for vans and commercial vehicles ensures that your operations continue with minimal downtime. We offer a range of commercial tyres suited for all types of business vehicles.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Tyre emergencies can happen anytime, but Tyres Anywhere is always ready to assist. Whether you’re stuck on the M42, driving through Solihull town centre, or near Birmingham Airport, our 24/7 emergency mobile tyre service ensures you get the help you need quickly. We’ll repair or replace your tyre on the spot, ensuring you get back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining proper tyre pressure and balanced wheels is vital for safety and tyre longevity. Our mobile tyre service includes tyre pressure checks and wheel balancing across Solihull and Birmingham, helping improve fuel efficiency and extend the life of your tyres.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Solihull is a key area in the West Midlands, surrounded by major roads and nearby towns that make it a vital hub for drivers. Our mobile tyre fitting service covers all areas of Solihull and extends to nearby locations such as:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Shirley & Knowle
                    </span>
                    <br>
                    We provide fast, reliable mobile tyre services in these residential suburbs, ensuring minimal disruption to your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Birmingham International & NEC
                    </span>
                    <br>
                    If you’re traveling near Birmingham Airport or visiting the NEC, our mobile tyre service offers quick on-site repairs and replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M42 & A41 Routes
                    </span>
                    <br>
                    Whether you’re commuting via the M42, A41, or driving along local roads like the A34, we ensure rapid roadside assistance across the area.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        <Link class="text-blue-600 underline" href="/locations/birmingham">Birmingham</Link> & Surrounding Towns
                    </span>
                    <br>
                    Our service reaches into Birmingham itself, offering coverage for drivers throughout the city, and nearby areas such as
                    <Link class="text-blue-600 underline" href="/locations/warwick">Warwick</Link> and
                    <Link class="text-blue-600 underline" href="/locations/royal-leamington-spa">Leamington Spa</Link>.
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
                Solihull is a vibrant part of the West Midlands, and Tyres Anywhere is proud to support its local drivers with fast, professional mobile tyre services. Whether you’re commuting to Birmingham, running errands in Solihull town centre, or enjoying a day at the NEC, our mobile tyre fitting service ensures that your tyres are always in top condition without the hassle of visiting a garage.
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
