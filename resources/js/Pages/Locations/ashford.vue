<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Ashford. Fast tyre repairs or replacements at your home, work, or roadside. Call Tyres Anywhere for expert assistance now.">
        <meta property="og:description" content="24/7 mobile tyre fitting in Ashford. Fast tyre repairs or replacements at your home, work, or roadside. Call Tyres Anywhere for expert assistance now." />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Emergency Service</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we deliver reliable and professional <b class="font-semibold">mobile tyre fitting services</b> to the Ashford area.
                Whether you are at home, work, or stranded by the roadside, our fully-equipped mobile tyre units are ready to assist you.
                Ashford is known for its bustling town centre, historical landmarks, and vital transport links, and we’re proud to provide
                local drivers with a fast, convenient solution to tyre problems.
            </p>
            <p>
                Whether you’re near the Ashford Designer Outlet, taking a scenic drive through the Kent Downs, or commuting along the M20,
                we will come to your location and solve your tyre issues. From <b class="font-semibold">puncture repairs to complete tyre replacements</b>,
                our goal is to get you back on the road safely and quickly. We understand that a flat tyre can happen at the most inconvenient times,
                which is why we offer 24/7 emergency services to meet your needs.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                We understand how disruptive a tyre issue can be, and that’s why we provide a quick, efficient, and hassle-free service that comes to you wherever you are. Here’s why motorists in Ashford trust Tyres Anywhere for all their tyre needs:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Service:</span>
                        Day or night, our mobile tyre units are available around the clock, ready to assist you with emergency tyre repairs or replacements.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response Times:</span>
                        We aim to reach your location as quickly as possible, minimizing your downtime whether you're stuck in the heart of Ashford or along the busy M20.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Convenient Mobile Service</span>
                        No need to visit a garage. Our mobile service brings expert tyre fitting to your doorstep, office, or roadside.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Skilled Technicians:</span>
                        Our team of expert technicians are fully trained to handle all tyre types for cars and vans, ensuring a professional and safe service.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Services:</span>
                        From fitting new tyres to repairing punctures and more, we offer a wide range of mobile tyre services.
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
                    Need a new set of tyres? We provide a fast and efficient mobile tyre fitting service, bringing a wide selection of high-quality tyres directly to your location. Whether it's for your car, van, or commercial vehicle, our mobile units will replace your tyres and balance them on the spot, so you can get back on the road with confidence.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    A flat tyre doesn’t always mean it needs to be replaced. Our mobile tyre repair service offers solutions for punctures, slow leaks, and faulty valves, saving you the cost of a new tyre when possible.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If you rely on your van for work, tyre issues can disrupt your day. Our specialized van tyre fitting service ensures that your van tyres are replaced or repaired quickly, keeping your vehicle and business moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre problems can occur at any time, often when you least expect it. We provide 24/7 emergency mobile tyre services to help you wherever you are, whether you’re stuck at home or by the roadside.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Ashford Landmarks & Areas We Cover</template>
        <template v-slot:content4>
            <p class="mt-4">
                Ashford is a dynamic town with great transport connections, and we’re proud to serve the entire area. Here are some key landmarks and locations where we provide our mobile tyre fitting services:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Ashford Designer Outlet
                    </span>
                    <br>
                    A popular shopping destination for locals and visitors, the Designer Outlet is a bustling hub. If you’re shopping and experience a tyre issue in the parking area, we can assist you quickly, allowing you to continue your day with minimal disruption.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Kent Downs Area of Outstanding Natural Beauty
                    </span>
                    <br>
                    For those exploring the scenic Kent Downs, tyre issues in this rural area can be inconvenient. Our mobile units are fully equipped to reach you wherever you are, providing quick tyre repairs or replacements.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Ashford International Station
                    </span>
                    <br>
                    As a key transport hub connecting Ashford to the rest of the UK and Europe, many motorists rely on safe tyres for their journeys. If you find yourself with a flat tyre near the station, we can provide a fast, convenient service.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        M20 and A20 Routes
                    </span>
                    <br>
                    These major roads are vital routes for commuters and transport vehicles. If you encounter a tyre problem while traveling on the M20 or A20, our mobile tyre technicians are just a call away and will provide roadside assistance quickly and safely.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Issues We Solve in Ashford</template>
        <template v-slot:content5>
            <p>
                A tyre issue can happen at any time and can disrupt your plans or even leave you stranded. Here are some of the most common tyre problems we encounter and how we can help:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Whether caused by nails, debris, or other sharp objects, punctures are one of the most common tyre issues. Our technicians will assess the damage and, if possible, repair the puncture, getting you back on the road quickly.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout can occur unexpectedly, especially with older or under-inflated tyres. If your tyre suffers a blowout, we’ll replace it on-site with one from our stock to ensure you’re driving safely.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Driving on tyres with low tread can be dangerous, especially in wet conditions. We can assess your tyres’ tread and provide replacements if necessary, ensuring your vehicle meets UK road safety standards.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    Sometimes, a tyre can slowly lose pressure due to a faulty valve or a small puncture. We can inspect your tyre and repair any leaks to prevent further issues.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Wear
                    </span>
                    <br>
                    Uneven tyre wear is often caused by improper alignment or incorrect tyre pressure. If we find that your tyres are wearing unevenly, we’ll replace them and advise you on how to prevent future problems.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Ashford Today</template>
        <template v-slot:content6>
            <p>
                Don’t let a flat or damaged tyre disrupt your day. With Tyres Anywhere, our mobile tyre fitting service in Ashford ensures that no matter where you are or what time it is, you’re never far from expert assistance. From quick puncture repairs to emergency replacements, we’re here to help.
            </p>
            <p>
                To book an appointment or request emergency tyre assistance, give us a <a class="text-blue-600 underline" href="tel:07442980101">call</a>.
                We’re available 24/7 to provide fast, reliable mobile tyre services.
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
