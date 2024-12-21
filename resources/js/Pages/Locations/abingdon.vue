<template>
    <Head>
        <meta name="description" content="Mobile tyre fitting in Abingdon with 24/7 emergency service. Fast, expert tyre repair or replacement at your location. Call Tyres Anywhere at 07442 980101 now.">
        <meta property="og:description" content="Mobile tyre fitting in Abingdon with 24/7 emergency service. Fast, expert tyre repair or replacement at your location. Call Tyres Anywhere at 07442 980101 now." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Emergency Service</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                Welcome to Tyres Anywhere, your trusted mobile tyre fitting service in Abingdon and the surrounding areas.
                Whether you’re in town, at work, or stuck on the side of the road, our highly trained mobile technicians are here to provide fast,
                efficient, and professional tyre services. We understand how important it is to keep your vehicle running smoothly,
                which is why we offer a wide range of services including <b class="font-semibold">mobile tyre fitting, tyre repair, and van tyre services</b>,
                ensuring you’re back on the road as quickly and safely as possible.
            </p>
            <p>
                Our mobile units are equipped to handle all types of tyre emergencies, whether you’re at home in North Abingdon, near the beautiful Abbey Gardens, or traveling along the busy A34 bypass. We specialize in emergency tyre services and can come to your location at any time of day or night, offering 24/7 availability.
            </p>
            <p class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span>Need urgent mobile tyre services? Call us now at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a></span>
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                At Tyres Anywhere, we know that tyre problems are not only inconvenient but can also be dangerous if left unresolved. This is why we offer a prompt, reliable, and comprehensive mobile tyre fitting service tailored to your needs.
            </p>
            <p class="mt-4">
                Here are some of the reasons why Abingdon locals and motorists trust us for their tyre issues:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Service:</span>
                        No matter what time of day or night you experience a tyre issue, we’re available around the clock to help. Whether you’ve got a puncture on your way to work or a flat tyre during a late-night drive, our team is ready to assist.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We understand how frustrating it can be to wait around for help, which is why we aim to reach your location as quickly as possible. Whether you’re near the Abingdon County Hall Museum or out by the Thames Path, we strive to minimize your downtime.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Location-Based Convenience</span>
                        Our mobile tyre fitting vans come to you, whether you’re at home, work, or stuck by the roadside. No need to waste time driving to a garage or waiting for a tow truck — we’ll handle everything on-site.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our team of technicians are fully trained and experienced in working with all types of vehicles, from cars to vans, ensuring that your tyres are handled professionally and safely.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Services:</span>
                        In addition to emergency tyre fitting, we offer a range of services including tyre repairs, tyre rotations, and van-specific tyre services, ensuring that all your tyre needs are met efficiently and effectively.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Explore Our Mobile Tyre Services in <u>{{ location }}</u></template>
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
                    Whether your tyres are worn out or you’ve experienced an unexpected blowout, our mobile tyre fitting service ensures that your new tyres are installed and balanced right where you are. We carry a wide selection of tyres, from premium to budget options, ensuring we have something to suit your vehicle and driving needs.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not all tyre issues require a full replacement. Our mobile tyre repair service covers puncture repairs, valve replacements, and other minor issues, allowing you to get more life out of your existing tyres. If the damage is repairable, we’ll fix it on the spot and get you back on the road.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For those who rely on their vans for work or travel, tyre issues can be especially disruptive. We offer specialized van tyre fitting services, bringing the right tools and tyres to your location to ensure minimal disruption to your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre trouble doesn’t follow a schedule, which is why our emergency mobile tyre fitting and repair services are available 24/7. Whether you’re stuck on a country road near Abingdon or in a busy part of town, our mobile team is just a phone call away and ready to assist.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Abingdon Landmarks & Local Knowledge</template>
        <template v-slot:content4>
            <p class="mt-4">
                At Tyres Anywhere, we pride ourselves on knowing the local area well, allowing us to provide quick and efficient service to customers across Abingdon. Some of the key landmarks and areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Abingdon Abbey
                    </span>
                    <br>
                    A historic site located just south of the town centre, the ruins of this ancient abbey are a popular spot for visitors and locals alike. If you find yourself stranded near this landmark, rest assured our mobile units can reach you swiftly.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Albert Park
                    </span>
                    <br>
                    A large, green space perfect for family outings and dog walks. If you run into tyre trouble while visiting this peaceful park, we can have you back on the road in no time.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Thames Street & Abingdon Bridge
                    </span>
                    <br>
                    Whether you’re taking a scenic drive along the river or commuting over the bridge, tyre issues can crop up at the most inconvenient moments. We’re here to provide on-the-spot service, even in these picturesque locations.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        The A34
                    </span>
                    <br>
                    One of the busiest roads near Abingdon, the A34 is a common route for commuters and commercial drivers. If you experience tyre trouble while driving this major road, our technicians are trained to provide quick and safe roadside assistance.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems and Solutions</template>
        <template v-slot:content5>
            <p>
                A flat or damaged tyre can happen at any time, often with little warning. It’s essential to address tyre issues promptly to ensure your safety on the road. Here are some of the most common tyre problems we handle and how we solve them:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Whether caused by sharp objects like nails or glass, punctures are one of the most common tyre issues. Our mobile technicians can assess the damage and, if repairable, patch the tyre on the spot, allowing you to continue your journey safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Sidewall Damage
                    </span>
                    <br>
                    Damage to the sidewall of a tyre is often more severe and may require a replacement. We carry a wide range of tyres in our vans, allowing us to replace your damaged tyre immediately, ensuring you’re back on the road as soon as possible.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Worn Tread
                    </span>
                    <br>
                    Tyres with low tread are dangerous and reduce your vehicle’s grip on the road, especially in wet or icy conditions. We provide tyre replacement services to ensure your tyres are roadworthy and compliant with UK safety standards.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Valve Leaks
                    </span>
                    <br>
                    A leaking tyre valve can cause your tyre to lose pressure slowly over time. Our technicians can replace faulty valves quickly, ensuring your tyre maintains proper pressure and extends its lifespan.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book an appointment for mobile tyre repair today</template>
        <template v-slot:content6>
            <p>
                Dealing with a flat or damaged tyre can be a frustrating and time-consuming experience. Whether you’re in Northcourt, Fitzharris, or anywhere in Abingdon, Tyres Anywhere is here to make the process as easy and stress-free as possible. Our mobile tyre service allows you to stay put while we come to you, saving you time and hassle.
            </p>
            <p>
                To book an appointment or for emergency tyre assistance, give us a <a class="text-blue-600 underline" href="tel:07442980101">call</a>.
                We’re available 24/7 to provide the best mobile tyre fitting and repair services in Abingdon.
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
