<template>
    <Head>
        <meta name="description" content="Reliable 24/7 mobile tyre fitting in Greenford. Fast, on-site tyre repairs and replacements at your home, office, or roadside. Call Tyres Anywhere now!">
        <meta property="og:description" content="Reliable 24/7 mobile tyre fitting in Greenford. Fast, on-site tyre repairs and replacements at your home, office, or roadside. Call Tyres Anywhere now!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>24/7 Mobile Tyre Services in Greenford – Convenient, Fast, and Reliable Tyre Solutions</template>

        <template v-slot:title1>Expert Service at Your Location</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere offers premium mobile tyre fitting services throughout Greenford and surrounding areas.
                Whether you need a tyre replacement, an urgent repair, or routine tyre maintenance, our expert technicians
                bring everything directly to you. Greenford, with its bustling commercial areas and residential neighbourhoods,
                needs a service that’s efficient and quick. Whether you're parked at home near Greenford Quay, working in the industrial areas,
                or commuting along the A40, our 24/7 mobile tyre service ensures that tyre issues don’t stop your day.
            </p>
            <p>
                No need for a garage visit – we bring the garage to you. Our mobile units are fully equipped to handle tyre repairs, replacements, or checks, providing an efficient solution wherever you are in Greenford.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Trust Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Tyres Anywhere delivers convenience, speed, and professional service. Here’s why Greenford drivers choose us for their tyre needs:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Available 24/7:</span>
                        Tyre issues don’t wait for business hours, and neither do we. Our service is available around the clock, ensuring you’re never stuck without assistance.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        We understand the need for speed, especially when you’re faced with an unexpected flat tyre. Our technicians respond quickly to your location.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Repairs and Fittings:</span>
                        Whether at home, work, or on the roadside, we bring the service to you, saving you the trouble of visiting a garage.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Certified Experts:</span>
                        Our team consists of skilled professionals who provide expert tyre repairs and replacements, ensuring your safety and satisfaction.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Range:</span>
                        From premium tyres to budget-friendly options, we offer a variety of tyres to suit your vehicle and driving needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Our full suite of mobile tyre services ensures that every tyre issue you face is addressed right at your location. Whether you need emergency assistance or scheduled maintenance, we come to you with all the necessary tools.
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
                    Our mobile tyre fitting service brings tyres directly to your home, workplace, or roadside location in Greenford. Whether you're near Greenford Broadway or tucked away in a quieter part of town, our technicians will fit and balance your new tyres on-site, ensuring your vehicle is road-ready without the inconvenience of a garage visit.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every flat tyre needs a full replacement. If you’ve experienced a puncture or a slow leak, our mobile tyre repair service can fix the issue on the spot. Whether you're near Greenford Green or driving through Perivale, we’ll assess the damage and repair the tyre if it’s safe, saving you time and money.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Greenford, tyre problems can lead to costly downtime. Our mobile tyre fitting service for commercial vehicles ensures that your vans and fleet vehicles stay on the road. We provide a wide range of tyres specifically designed for heavy-duty use and offer fast, efficient service to keep your business running smoothly.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre trouble can strike at any time, but our 24/7 mobile tyre service ensures you’re never left stranded. Whether it’s a blowout on the A40 or a flat tyre in the industrial estates near Greenford Quay, we’ll come to your location promptly to repair or replace your tyre and get you back on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Driving with properly inflated tyres and balanced wheels is essential for vehicle safety and performance. As part of our mobile service, we provide tyre pressure checks and wheel balancing to ensure that your car operates smoothly. This service improves fuel efficiency and prolongs the life of your tyres.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Key Areas We Serve in Greenford</template>
        <template v-slot:content4>
            <p class="mt-4">
                Greenford is a busy area with a mix of residential, commercial, and industrial zones. Tyres Anywhere provides mobile tyre services across all of Greenford to ensure drivers receive quick, professional help when they need it. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Greenford Broadway & Greenford Quay
                    </span>
                    <br>
                    Whether you’re shopping or working near these key areas, our mobile tyre fitting service offers quick assistance at your location.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Perivale & Westway Cross Retail Park
                    </span>
                    <br>
                    For drivers in Perivale or those visiting Westway Cross, we provide convenient, on-site tyre repairs and replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A40 & Western Avenue Routes
                    </span>
                    <br>
                    If you’re commuting along these busy routes and experience tyre issues, our mobile service offers rapid roadside assistance to ensure you’re back on the road quickly.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Greenford Green & Residential Areas
                    </span>
                    <br>
                    For those living in and around Greenford Green, we bring tyre services directly to your doorstep, ensuring you get fast, reliable service without leaving home.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/uxbridge">Uxbridge</Link> and
                    <Link class="text-blue-600 underline" href="/locations/wembley">Wembley</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyres Anywhere is equipped to handle a variety of common tyre issues, ensuring Greenford drivers can get back on the road quickly. Some of the tyre problems we frequently address include:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A puncture caused by sharp objects can often be repaired on-site, saving you the cost of a full tyre replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A sudden blowout requires an immediate tyre replacement. We’ll arrive quickly to fit a new tyre and ensure your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn-out tyres reduce road grip and increase the risk of accidents. We offer tyre replacements to keep your vehicle safe and roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    Slow leaks can lead to flat tyres over time. We’ll identify the issue and fix it on-site, preventing further damage.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Improper tyre pressure or alignment can cause uneven wear. We’ll replace any worn tyres and provide advice on maintaining proper tyre care in the future.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting Greenford’s Community
            </p>

            <p class="mt-2">
                Greenford is a vibrant and diverse area, and Tyres Anywhere is proud to provide fast, reliable mobile tyre services to its residents and businesses. Whether you're commuting, managing a fleet, or running errands around town, we ensure your tyres are always in top condition, without the need to visit a garage.
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
