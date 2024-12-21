<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Bracknell. Fast tyre repairs and replacements at your home, work, or roadside. Call Tyres Anywhere for expert assistance now!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Bracknell. Fast tyre repairs and replacements at your home, work, or roadside. Call Tyres Anywhere for expert assistance now!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 On-Site Tyre Solutions for Fast, Reliable Service</template>

        <template v-slot:title1>Expert Mobile Tyre Fitting in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we offer a professional mobile tyre fitting service in Bracknell, ensuring that all your tyre-related needs are met quickly and efficiently. Whether it’s an unexpected flat, a puncture repair, or a full tyre replacement, our mobile service is designed to make tyre maintenance as convenient as possible. Bracknell is a growing, bustling town, with busy roads like the A322 and A329 connecting it to major cities. Whether you’re at work, at home, or experiencing a tyre emergency while driving through town, our mobile tyre experts are available to assist you anywhere in Bracknell.
            </p>
            <p>
                Our fully equipped mobile tyre units mean we come to your location, so you won’t need to visit a garage. With 24/7 availability, Tyres Anywhere is always ready to help, no matter the time or situation. From urgent roadside assistance to routine tyre replacements, we bring the tyre shop to you.
            </p>
        </template>

        <template v-slot:title2>Why Choose Tyres Anywhere for Mobile Tyre Fitting in Bracknell?</template>
        <template v-slot:content2>
            <p class="mt-4">
                Tyres Anywhere provides a customer-first approach, ensuring that all our services are not only fast but also reliable and tailored to your needs. Here’s why drivers in Bracknell trust us with their tyre issues:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Assistance:</span>
                        Our team is available at any time of day or night, ready to handle tyre emergencies, ensuring that help is just a phone call away.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Quick Response Times:</span>
                        We understand how stressful tyre problems can be, so we strive to reach you quickly, no matter where you are in Bracknell or its surrounding areas.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Service:</span>
                        No need to drive to a garage or wait for roadside assistance. Our mobile tyre service comes to you, providing repairs or replacements on-site.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Skilled Technicians:</span>
                        Our team of experienced technicians is fully equipped to handle all types of tyre issues, ensuring safe and professional service every time.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Solutions</span>
                        Whether you need a puncture repair or a full set of new tyres, we offer a wide range of services to cover all your tyre needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Our Full Range of Mobile Tyre Services in Bracknell</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tyres Anywhere is proud to offer a wide variety of mobile tyre services that cater to the diverse needs of drivers in Bracknell. Our fully-equipped vans allow us to handle any tyre-related problem on the spot, whether it’s an emergency situation or routine maintenance.
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
                    Need new tyres? Our mobile tyre fitting service brings a selection of premium, mid-range, and budget tyres to your location. We cater to all types of vehicles, ensuring that your new tyres are fitted and balanced right where you are, whether it’s your driveway, workplace, or on the roadside. Our technicians will handle everything from removing the old tyres to fitting and balancing the new ones, ensuring your vehicle is safe and ready for the road.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not all tyre issues require a full replacement. If your tyre can be repaired, we’ll fix it on-site, saving you both time and money. Our mobile tyre repair service covers punctures, slow leaks, and valve problems. We’ll assess the damage and, if repairable, patch it up and get you back on the road in no time.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you rely on your van for work or personal use, a tyre problem can disrupt your day and cost you valuable time. Our mobile van tyre fitting service ensures that your van tyres are replaced or repaired quickly, so you can get back on the road with minimal downtime. We carry a range of tyres specifically designed for vans, ensuring that your vehicle is fitted with the right tyres for safety and performance.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    A tyre emergency can occur at any time, and when it does, you need help fast. Our 24/7 emergency tyre service is available around the clock to provide quick, reliable assistance wherever you are in Bracknell. Whether you’re dealing with a flat tyre on the A322 or stuck on the roadside near Bracknell Forest, we’ll arrive promptly with the necessary equipment to get you back on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Balancing</span>
                    <br><br>
                    Keeping your tyres properly inflated is crucial for safety and efficiency. Driving with the wrong tyre pressure can lead to uneven wear, reduced fuel economy, and even blowouts. As part of our mobile tyre service, we offer tyre pressure checks to ensure that your tyres are inflated to the correct level. We also provide wheel balancing services to ensure a smooth ride, minimizing vibrations and extending the life of your tyres.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Local Areas and Landmarks We Serve in Bracknell</template>
        <template v-slot:content4>
            <p class="mt-4">
                Bracknell is a thriving town with a mix of residential areas, commercial hubs, and green spaces. We proudly serve drivers throughout Bracknell and its surrounding areas, including:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        The Lexicon Shopping Centre
                    </span>
                    <br>
                    If you’re shopping at The Lexicon and experience tyre trouble, our mobile tyre service will come to your location, providing quick and efficient repairs or replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Bracknell Forest
                    </span>
                    <br>
                    Whether you’re exploring the scenic routes of Bracknell Forest or enjoying a day outdoors, a tyre problem shouldn’t ruin your plans. Our mobile tyre service ensures that help is just a call away, wherever you are in the area.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A322 & A329 Roads
                    </span>
                    <br>
                    As major routes connecting Bracknell to nearby towns and cities, the A322 and A329 see a lot of traffic. If you face tyre trouble while commuting or traveling on these busy roads, our mobile units provide fast roadside assistance to get you back on track.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Bracknell Business Parks
                    </span>
                    <br>
                    For professionals working in Bracknell’s business parks, tyre problems can cause delays and interruptions. Our mobile tyre fitting service ensures that your vehicle is road-ready, allowing you to focus on your work.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        South Hill Park
                    </span>
                    <br>
                    If you’re visiting South Hill Park for a day of leisure and find yourself with a flat tyre, we’ll come to your location and handle the repair or replacement on-site.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in Bracknell</template>
        <template v-slot:content5>
            <p>
                Tyre issues can arise at any time, and our mobile tyre fitting service in Bracknell is here to help. Here are some of the common problems we handle:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Punctures caused by nails, sharp objects, or road debris are common. If the damage is minor, we’ll repair the tyre on-site, saving you from the cost of a new one.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A tyre blowout can be dangerous, especially at high speeds. If you experience a blowout, our mobile service will replace the damaged tyre quickly and ensure your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Driving on worn-out tyres reduces traction and increases the risk of accidents. We offer a range of replacement tyres to ensure your vehicle remains safe and roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak could be the result of a valve issue or a minor puncture. We’ll inspect your tyre, fix the leak, and make sure it’s properly inflated to prevent further issues.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven wear on tyres is often caused by alignment or pressure problems. We’ll replace worn tyres and provide advice on maintaining proper tyre care to extend their life.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting Bracknell’s Growing Community
            </p>

            <p class="mt-2">
                As Bracknell continues to expand, with more residential developments and businesses moving into the area, the need for fast, reliable tyre services is greater than ever.
                <br><br>
                At Tyres Anywhere, we’re dedicated to keeping Bracknell drivers safe on the road by providing convenient, expert tyre solutions that meet the needs of a busy town.
            </p>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Bracknell Today</template>
        <template v-slot:content6>
            <p>
                Don’t let a flat tyre or blowout ruin your day. With Tyres Anywhere, our mobile tyre fitting service in Bracknell ensures you get fast, professional assistance whenever and wherever you need it. Whether it’s a routine tyre change or an emergency repair, we’re here to get you back on the road safely and efficiently.
            </p>
            <p>
                To schedule your mobile tyre fitting or request emergency assistance, call us today at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 for all your tyre needs in Bracknell.
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
