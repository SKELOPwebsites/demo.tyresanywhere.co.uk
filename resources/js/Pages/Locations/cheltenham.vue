<template>
    <Head>
        <meta name="description" content="Mobile tyre fitting in Cheltenham. Fast tyre repairs or replacements at your home, work, or roadside. Call Tyres Anywhere for expert service today!">
        <meta property="og:description" content="Mobile tyre fitting in Cheltenham. Fast tyre repairs or replacements at your home, work, or roadside. Call Tyres Anywhere for expert service today!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Fast and Reliable Tyre Services Delivered to You</template>

        <template v-slot:title1>Mobile Tyre Fitting in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we understand the need for convenience and speed when it comes to tyre issues. That’s why we offer expert mobile tyre fitting services across Cheltenham and the surrounding areas, bringing the tyre shop directly to you. Whether you’re stuck with a flat tyre in the heart of town, need a tyre replaced at home, or require emergency assistance on the roadside, we’ve got you covered. Cheltenham, renowned for its Regency architecture and cultural events like the Cheltenham Festival, is a bustling town where time is precious — and we ensure tyre problems don’t get in the way.
            </p>
            <p>
                We operate 24/7, so no matter when you need assistance, we’ll be there quickly to get you back on the road. With Tyres Anywhere, you can avoid the hassle of driving to a garage or waiting long hours for help — our professional mobile tyre fitters come to you, providing fast and reliable service.
            </p>
        </template>

        <template v-slot:title2>Why Cheltenham Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                At Tyres Anywhere, we make tyre fitting and repair simple and convenient. Here’s why drivers in Cheltenham rely on our services:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        Whether it’s early morning or late at night, our mobile service is always available, ready to assist you with any tyre problem, wherever you are.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Rapid Response:</span>
                        We aim to be at your location as quickly as possible, ensuring minimal disruption to your plans, whether you’re at home, work, or on the roadside.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Solutions:</span>
                        Avoid the inconvenience of driving to a tyre shop. Our mobile units come fully equipped to handle everything from tyre replacements to puncture repairs on-site.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Professional Technicians:</span>
                        Our technicians are highly skilled and experienced, ensuring that every tyre issue is dealt with safely and professionally.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Complete Tyre Services</span>
                        From emergency repairs to fitting new tyres, we offer a comprehensive range of mobile tyre services tailored to your needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in Cheltenham</template>
        <template v-slot:content3>

            <p class="mt-4">
                At Tyres Anywhere, we provide a variety of mobile tyre services that cater to the specific needs of Cheltenham drivers. Whether it’s an emergency or a scheduled tyre replacement, our mobile team is ready to assist you wherever you are.
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
                    Need new tyres? We’ve got you covered. Our mobile tyre fitting service brings a wide selection of tyres — from premium options to budget-friendly choices — directly to your location. Whether you’re parked at home, at work, or out on the road, our expert technicians will fit and balance your tyres on-site. No need to disrupt your day with a trip to the garage; we bring everything to you and ensure your vehicle is road-ready in no time.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    A puncture or minor tyre damage doesn’t always mean you need a new tyre. Our mobile tyre repair service offers a quick, cost-effective solution to get you back on the road fast. We can handle most minor repairs, including punctures and valve issues, on-site. We’ll assess the damage and, if repairable, fix it there and then — saving you time and money.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For those who rely on vans for work or personal use, a tyre issue can cause major delays. Our mobile van tyre fitting service ensures that you’re back on the road swiftly, with minimal downtime. We carry a range of tyres designed specifically for vans and commercial vehicles, offering a service that is both quick and reliable, so your day doesn’t have to grind to a halt.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre problems can happen at the worst possible times. Whether you’re on your way to an important event or driving along the busy A40 or M5, our 24/7 emergency mobile tyre service ensures help is always on hand. If you find yourself stranded with a blown tyre or a flat in the middle of the night, our technicians will arrive promptly to repair or replace your tyre, ensuring you can continue your journey with minimal delay.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Balancing</span>
                    <br><br>
                    Maintaining the correct tyre pressure is essential for safety and longevity. Driving with the wrong pressure can lead to uneven wear, reduced fuel efficiency, and even tyre blowouts. As part of our service, we offer tyre pressure checks and adjustments, ensuring your tyres are correctly inflated. We also provide wheel balancing to ensure a smoother, safer drive, reducing vibrations and improving tyre performance.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving Key Areas of Cheltenham</template>
        <template v-slot:content4>
            <p class="mt-4">
                Cheltenham is a vibrant town with a mix of residential, commercial, and cultural hubs. We’re proud to serve drivers across all areas, including:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Cheltenham Town Centre
                    </span>
                    <br>
                    Whether you’re shopping in the bustling Promenade or running errands in the town centre, a flat tyre can ruin your plans. Our mobile tyre fitting service will come to you quickly, handling repairs or replacements on-site.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Pittville Park
                    </span>
                    <br>
                    Visiting Cheltenham’s famous Pittville Park or enjoying the nearby lakes? If you encounter tyre trouble while enjoying a day out, our mobile team will arrive promptly to fix the issue so you can continue your day without stress.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A40 & M5 Routes
                    </span>
                    <br>
                    As key commuting routes, the A40 and M5 see a lot of traffic from locals and visitors alike. If you experience a tyre issue while traveling on these roads, our mobile units provide fast roadside assistance to get you back on track.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Cheltenham Racecourse
                    </span>
                    <br>
                    Whether you’re attending one of the prestigious racing events or just passing through the area, our mobile tyre service ensures that any tyre problem is resolved quickly, so you don’t miss a moment of the action.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Montpellier District
                    </span>
                    <br>
                    If you’re parked in the chic Montpellier district, known for its stylish shops and cafes, and experience tyre trouble, we’ll come to your location and handle the repair or replacement on-site.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Issues We Solve in Cheltenham</template>
        <template v-slot:content5>
            <p>
                Tyre problems can happen unexpectedly, but our mobile tyre service in Cheltenham is here to help. We handle a wide range of common tyre issues, including:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Road debris such as nails, glass, or sharp objects can cause punctures. If the damage is repairable, we’ll fix it on-site, saving you from the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout can occur suddenly and requires immediate attention. We’ll replace the damaged tyre with a new one, ensuring your vehicle is safe to drive again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Driving on worn tyres reduces your vehicle’s grip and increases the risk of accidents. We offer tyre replacements to ensure your vehicle remains safe and roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak is often caused by a faulty valve or a small puncture. We’ll inspect the tyre, fix the leak, and ensure proper inflation to prevent further issues.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven tyre wear could indicate an alignment or tyre pressure problem. We’ll replace worn tyres and provide advice on maintaining proper tyre care to extend their life.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting Cheltenham’s Active Community
            </p>

            <p class="mt-2">
                Cheltenham is a town known for its culture, history, and active community. At Tyres Anywhere, we’re dedicated to supporting Cheltenham’s drivers with fast, reliable mobile tyre services. Whether you’re commuting, attending an event, or exploring the area’s parks and landmarks, our mobile tyre service is here to keep you on the road and safe.
            </p>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in {{ location }} Today</template>
        <template v-slot:content6>
            <p>
                A flat tyre or puncture doesn’t have to slow you down. With Tyres Anywhere, our mobile tyre fitting service in {{ location }} ensures that you get fast, professional assistance whenever and wherever you need it. Whether you need a tyre repair, an emergency replacement, or routine maintenance, we’re here to help you get back on the road safely.
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
