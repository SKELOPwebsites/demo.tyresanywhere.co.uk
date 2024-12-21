<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Luton. Quick on-site mobile tyre repairs and replacements at home, work, or roadside. Call 07442 980101 for fast service today">
        <meta property="og:description" content="24/7 mobile tyre fitting in Luton. Quick on-site mobile tyre repairs and replacements at home, work, or roadside. Call 07442 980101 for fast service today" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>24/7 Mobile Tyre Fitting Services in Luton – On-Site Tyre Replacement, Emergency Callouts, and Fast Response Times</template>

        <template v-slot:title1>Tyre Services Delivered Directly to You</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere is your trusted mobile tyre fitting service in Luton, providing fast, efficient tyre solutions at your location, whether it’s at home, work, or by the roadside. Luton is a busy town with a range of commercial, residential, and motorway routes, making fast tyre service essential for drivers in the area. From Luton’s industrial parks to its surrounding suburbs and roads like the M1 and A505, our team of expert technicians is ready to assist with any tyre needs. Whether you’re parked near The Mall Luton, working in Capability Green Business Park, or living in a nearby area like Leagrave or Stopsley, we offer swift, professional service 24/7.
            </p>
            <p>
                With Tyres Anywhere, you won’t need to take time out of your day to visit a garage. We bring the garage to you, offering a full range of mobile tyre services to keep you on the move.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Luton drivers rely on Tyres Anywhere for convenience, speed, and quality service. Here’s why our mobile tyre fitting service stands out:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Day or night, our team is ready to assist with any tyre-related issues.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We prioritize speed, reaching you typically within 60 minutes.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Solutions:</span>
                        From tyre repairs to replacements, we bring all the necessary equipment to your location.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Certified Technicians:</span>
                        Our team is skilled and trained to provide high-quality tyre fitting and repair services.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        We stock tyres from premium brands to budget-friendly options, suited to all vehicle types.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tyres Anywhere offers a complete range of mobile tyre services to suit all types of vehicles in Luton. From emergency callouts to routine replacements, we ensure a smooth, hassle-free process:
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
                    Our mobile tyre fitting service allows you to have new tyres installed at your location, whether you’re at home, work, or stuck on the roadside. Whether you’re driving near Stockwood Park, parked at The Mall Luton, or on the M1 heading out of town, our technicians will come to you with new tyres, installing them on-site and ensuring everything is balanced and ready for the road.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    A punctured tyre can ruin your day, but with Tyres Anywhere, it doesn’t have to. Our mobile tyre repair service covers all areas of Luton, whether you’re near Luton Airport, Dunstable Road, or somewhere more rural like Streatley or Barton-le-Clay. We’ll assess the damage and, if possible, repair your tyre on-site, saving you the cost of a replacement.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses in Luton, keeping your vehicles on the road is essential. Our mobile tyre fitting for vans and commercial vehicles ensures minimal downtime and fast, professional service. We carry a wide selection of commercial tyres, suitable for vans and trucks, and our expert team will get your fleet back on the road quickly.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Whether you’ve broken down on the A505 or are stuck in a residential area with a flat tyre, Tyres Anywhere is here to help. Our 24-hour emergency tyre service covers all parts of Luton, ensuring that no matter where you are, help is never far away. From tyre repairs to full replacements, we’ll get you back on the road safely, any time of day or night.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining proper tyre pressure and wheel balance is crucial for safe driving and fuel efficiency. As part of our mobile tyre service, we provide tyre pressure checks and wheel balancing in Luton, helping you extend tyre life and ensure your vehicle runs smoothly.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Our mobile tyre fitting service covers all areas of Luton, including residential, commercial, and motorway zones, ensuring fast assistance wherever you are:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Luton Town Centre
                    </span>
                    <br>
                    Whether you’re shopping or working in the town centre, we offer fast, on-site tyre services to keep you moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Capability Green & Luton Airport
                    </span>
                    <br>
                    For professionals working near Capability Green Business Park or Luton Airport, our mobile service is designed to meet your needs quickly and efficiently.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Residential Areas (Leagrave, Stopsley, Wigmore)
                    </span>
                    <br>
                    We serve all of Luton’s residential areas, providing convenient tyre repairs or replacements right at your doorstep.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M1 & A505 Routes
                    </span>
                    <br>
                    If you encounter tyre issues while driving on the M1, A505, or A6, our mobile tyre fitting service will reach you fast to provide roadside assistance.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Nearby & Surrounding Areas
                    </span>
                    <br>
                    For those in nearby towns such as <Link class="text-blue-600 underline" href="/locations/dunstable">Dunstable</Link> and
                    <Link class="text-blue-600 underline" href="/locations/st-albans">St Albans</Link>,
                    we provide mobile tyre services that bring expert fitting and repair directly to your doorstep or business location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                From congested town roads to long commutes, Luton’s drivers face a variety of tyre challenges. At Tyres Anywhere, we’re prepared to solve the most common tyre problems:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    Punctures from road debris, nails, or sharp objects
                </li>
                <li>
                    Blowouts due to worn tyres or sudden pressure changes
                </li>
                <li>
                    Low tread depth, especially hazardous during wet conditions
                </li>
                <li>
                    Slow leaks from faulty valves or small punctures
                </li>
                <li>
                    Uneven tyre wear from improper tyre pressure or alignment issues
                </li>
            </ol>

            <p class="mt-6">
                We provide fast, efficient solutions to these problems, ensuring that Luton drivers can travel safely and confidently.
            </p>

            <p class="font-semibold mt-6">
                Supporting {{ location }}'s Community
            </p>

            <p class="mt-2">
                Luton is a vibrant town with a strong industrial presence and a growing residential population. Tyres Anywhere is proud to support the local community by providing reliable and professional mobile tyre services. Whether you’re commuting to work, managing a fleet of vehicles, or enjoying time with family, our mobile tyre fitting service ensures that your tyres are in top condition, with minimal disruption to your day.
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
