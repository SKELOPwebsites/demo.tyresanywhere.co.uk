<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Enfield. Fast and expert tyre repairs and replacements delivered to your location. Call 07442 980101 for immediate assistance!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Enfield. Fast and expert tyre repairs and replacements delivered to your location. Call 07442 980101 for immediate assistance!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Professional Mobile Tyre Fitting in Enfield</template>

        <template v-slot:title1>Convenience at Your Doorstep</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we take pride in providing expert mobile tyre fitting services throughout Enfield. Whether you need a tyre replaced, repaired, or checked, our team brings the garage to you, offering a fast, convenient solution. Enfield, known for its blend of suburban charm and bustling streets, is home to a wide variety of drivers. Whether you’re parked at home in Palmers Green, commuting along the A10, or shopping in Enfield Town, our 24/7 mobile tyre service ensures that tyre issues don’t disrupt your day.
            </p>
            <p>
                Gone are the days of waiting for hours at a garage or needing to arrange for a tow. Our mobile units are equipped with all the necessary tools and tyres to offer quick, on-site repairs and replacements, no matter where you are in Enfield.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Trust Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Tyres Anywhere offers Enfield drivers a service that is built around speed, convenience, and professionalism. Here’s why we’re the go-to choice for mobile tyre services:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Service:</span>
                        Whether it’s an emergency at night or a flat tyre during your commute, our round-the-clock service ensures you get the help you need, when you need it.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        With a focus on quick service, we aim to minimize any downtime caused by tyre issues. Our technicians arrive promptly at your location, fully equipped to resolve the problem.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Repairs and Fittings:</span>
                        No more wasting time at the garage. We bring the service to you, offering tyre fitting, repairs, and maintenance on-site.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our skilled and certified technicians handle all tyre-related issues with professionalism, ensuring your vehicle is safe and roadworthy.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        From premium brands to cost-effective options, we have tyres for every type of vehicle and budget.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tyres Anywhere offers a comprehensive range of mobile tyre services in Enfield, ensuring that all your tyre-related needs are met at your location. Whether it’s an emergency replacement or a routine tyre check, we bring the expertise to you.
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
                    Need new tyres? Our mobile tyre fitting service ensures that you don’t need to visit a garage. Whether you're at home in Bush Hill Park or parked near Enfield Town Park, we’ll arrive with a variety of tyres suited to your vehicle. Our technicians will install and balance your new tyres on-site, getting your car road-ready without the hassle of leaving your location.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    A flat tyre doesn’t always mean you need a new one. If your tyre is punctured or has a slow leak, we can often repair it on the spot. Our mobile tyre repair service comes to you, whether you’re near Forty Hall Estate or driving along the A105, to fix the tyre and get you back on the road quickly and affordably.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Businesses in Enfield rely on their commercial vehicles, and tyre issues can lead to costly delays. Our mobile tyre fitting service for vans and commercial vehicles ensures that your fleet stays on the road. We offer a range of tyres designed for commercial use and provide fast, efficient service wherever your vehicles are based.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre problems don’t follow a schedule, but with our 24/7 emergency mobile tyre service, you’ll never be left stranded. Whether you’re dealing with a flat tyre on the M25 or a blowout near Enfield Town Centre, our team is ready to provide fast, expert assistance, ensuring you’re back on the road as soon as possible.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Driving with the correct tyre pressure and balanced wheels is crucial for safety and fuel efficiency. As part of our mobile service, we provide tyre pressure checks and wheel balancing to ensure that your vehicle is operating smoothly. This not only enhances driving comfort but also extends the life of your tyres.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Areas We Serve in Enfield</template>
        <template v-slot:content4>
            <p class="mt-4">
                Enfield is a large borough with a diverse mix of residential, commercial, and rural areas. Tyres Anywhere covers all corners of Enfield, ensuring that no matter where you are, expert tyre services are just a call away. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Enfield Town Centre
                    </span>
                    <br>
                    Whether you’re shopping or working in the heart of Enfield, we provide mobile tyre fitting and repair services right at your location.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Bush Hill Park & Palmers Green
                    </span>
                    <br>
                    For drivers in these residential areas, our mobile tyre fitting service offers quick, convenient solutions at your home or workplace.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Southgate & Winchmore Hill
                    </span>
                    <br>
                    Whether you’re commuting or running errands in Southgate and Winchmore Hill, we’ll come to you with fast, on-site tyre solutions.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A10 & M25 Routes
                    </span>
                    <br>
                    If you’re facing tyre trouble on these busy routes, our mobile tyre team provides rapid roadside assistance, getting you back on the road safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Enfield Lock & Ponders End
                    </span>
                    <br>
                    From Enfield Lock to Ponders End, our mobile tyre services extend across the borough, ensuring you get professional help when you need it.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                Tyre problems can occur at any time, but with Tyres Anywhere, you’re never far from expert help. Some common tyre issues we handle in Enfield include:
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
                Supporting Enfield’s Community
            </p>

            <p class="mt-2">
                As Enfield continues to grow and thrive, Tyres Anywhere is proud to support the local community with reliable, convenient mobile tyre services. Whether you’re commuting to work, running errands, or managing a business fleet, our mobile tyre fitting service is designed to meet your needs efficiently.
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
