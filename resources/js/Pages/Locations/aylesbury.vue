<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Aylesbury. Fast tyre repairs or replacements at home, work, or roadside. Call Tyres Anywhere at 07442 980101 for expert service">
        <meta property="og:description" content="24/7 mobile tyre fitting in Aylesbury. Fast tyre repairs or replacements at home, work, or roadside. Call Tyres Anywhere at 07442 980101 for expert service" />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Emergency Assistance</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                Welcome to Tyres Anywhere, your go-to mobile tyre fitting service in Aylesbury.
                Whether you're <b class="font-semibold">stuck on the roadside</b> with a flat tyre, need  <b class="font-semibold">new tyres for your vehicle</b>,
                or require  <b class="font-semibold">urgent tyre repairs</b>, our mobile service brings everything you need right to your location.
                Aylesbury is known for its historic charm, vibrant town centre, and proximity to beautiful countryside.
                Whether you're visiting the iconic Aylesbury Waterside Theatre, shopping in Friars Square, or driving through the
                Chiltern Hills, our mobile tyre units are available to ensure your journey continues smoothly.
            </p>
            <p>
                We provide 24/7 mobile tyre fitting and repairs, saving you the inconvenience of having to visit a garage.
                Our experienced technicians can come to your home, office, or roadside anywhere in Aylesbury,
                bringing all the equipment necessary to replace or repair your tyres on the spot.
                Whether it's a puncture, worn-out tyre, or a complete blowout, we have you covered.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                We know that tyre problems can happen at the worst possible times, but Tyres Anywhere is designed to bring the solution directly to you. Here are a few reasons why Aylesbury drivers prefer our service:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Tyre emergencies don’t follow a schedule, and neither do we. Our mobile tyre service is available around the clock to handle your tyre issues, no matter the time.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Rapid Response:</span>
                        We understand that time is crucial when you’re dealing with a flat or damaged tyre. That’s why we aim to reach you as quickly as possible, whether you’re in the heart of Aylesbury or on the outskirts.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Convenient Service</span>
                        No need to waste time visiting a tyre shop. We bring our service to you, wherever you are — at home, at work, or even stuck on the roadside.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our fully trained technicians provide professional tyre fitting and repair services for all types of vehicles, ensuring safe, high-quality work every time.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Service Offering:</span>
                        From emergency roadside tyre replacements to routine tyre maintenance, we provide a wide range of mobile tyre services to meet your specific needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Our Mobile Tyre Services in <u>{{ location }}</u></template>
        <template v-slot:content3>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <Link href="/mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Whether you need one new tyre or a full set, our mobile tyre fitting service makes it easy. We stock tyres for cars, vans, and commercial vehicles, offering a wide range of brands and price points. Our technicians will come to your location, fit the tyres, and balance them on the spot to ensure a safe and smooth ride.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every flat tyre needs to be replaced. Our mobile tyre repair service covers punctures, slow leaks, and other minor tyre issues, saving you money by repairing the tyre when possible. We’ll assess the condition of your tyre and provide an efficient on-site repair if it’s safe to do so.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For those who rely on their vans for business or personal use, a tyre issue can cause major disruptions. We offer specialized van tyre fitting, ensuring that your vehicle is equipped with the right tyres to keep you on the move.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    When a tyre emergency strikes, our 24/7 emergency mobile tyre service is here to help. Whether you’ve experienced a blowout or a flat tyre, we’ll come to your location quickly, whether you’re near the town centre or on the A41, to provide a fast replacement or repair.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving Aylesbury and Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Aylesbury is a thriving town with a rich history and modern conveniences. Our mobile tyre fitting services cover the entire Aylesbury area and surrounding regions, ensuring that wherever you are, help is only a phone call away. Key landmarks and service areas include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Aylesbury Waterside Theatre
                    </span>
                    <br>
                    If you find yourself stuck with a flat tyre while attending an event at the Waterside Theatre, our team can be there quickly to get you back on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Friars Square Shopping Centre
                    </span>
                    <br>
                    Tyre issues can strike while you’re busy running errands. If you experience a problem in the Friars Square car park or elsewhere in town, we’ll handle it on-site so you can carry on with your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Chiltern Hills
                    </span>
                    <br>
                    For those exploring the scenic beauty of the Chiltern Hills, a tyre emergency in a rural or remote area can be particularly frustrating. Our mobile units are equipped to reach you no matter where you are, offering fast service to get you moving again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A41 & A418 Routes
                    </span>
                    <br>
                    Major roads like the A41 and A418 are vital routes for local and long-distance travelers. If you run into tyre trouble while driving on these busy routes, our mobile tyre service can assist you with quick roadside repairs or replacements.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Issues We Fix in Aylesbury</template>
        <template v-slot:content5>
            <p>
                Tyre issues can arise unexpectedly and cause significant disruptions to your journey. Here are some common tyre problems we encounter and how our mobile tyre service can help:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Punctures caused by debris like nails or sharp stones are among the most common tyre problems. Our technicians can quickly repair small punctures, saving you the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A tyre blowout can be a frightening and dangerous experience, especially at high speeds. If you suffer a blowout, we’ll come to your location to replace the damaged tyre with a new one.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Worn Tyres
                    </span>
                    <br>
                    Tyres with worn-out treads are unsafe, especially in wet or icy conditions. We can replace worn tyres with a range of premium and budget options that fit your vehicle and driving needs.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Valve Leaks
                    </span>
                    <br>
                    A slow leak can be caused by a faulty valve. If your tyre is consistently losing pressure, we’ll inspect the valve and replace it if necessary, keeping your tyres properly inflated.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven wear is often a sign of misalignment or improper tyre pressure. We’ll check your tyres and provide a replacement if necessary, while advising on how to prevent uneven wear in the future.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Aylesbury Today</template>
        <template v-slot:content6>
            <p>
                A flat or damaged tyre doesn’t have to derail your plans. With Tyres Anywhere, our mobile tyre fitting service in Aylesbury ensures that you’re never far from help. We offer fast, reliable tyre services that come directly to your location, saving you time and hassle.
            </p>
            <p>
                To book an appointment or for emergency tyre assistance, call us now at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 for all your tyre fitting and repair needs in Aylesbury.
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
