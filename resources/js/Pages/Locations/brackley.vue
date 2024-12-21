<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Brackley. Fast and efficient tyre repairs and replacements at home, work, or roadside. Call Tyres Anywhere for immediate assistance.">
        <meta property="og:description" content="24/7 mobile tyre fitting in Brackley. Fast and efficient tyre repairs and replacements at home, work, or roadside. Call Tyres Anywhere for immediate assistance." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – Fast, Efficient, and 24/7 Mobile Tyre Services</template>

        <template v-slot:title1>Tyres Anywhere - Your Mobile Tyre Solution in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we are proud to offer comprehensive mobile tyre fitting services throughout Brackley and surrounding areas.
                Whether you're dealing with a flat tyre, need a full replacement, or require urgent roadside assistance,
                our mobile service brings expert tyre solutions directly to your location. Brackley,
                with its historic market town charm and proximity to key routes like the A43, is home to many drivers who value convenience.
                <br><br>
                Whether you're commuting to work, heading out for leisure, or dealing with an unexpected tyre issue,
                our mobile service makes tyre maintenance simple and hassle-free.
            </p>
            <p>
                We operate 24/7, ensuring that whenever you need tyre assistance — whether it's early morning or late at night — we’re available to help.
                With Tyres Anywhere, you’ll receive prompt service, professional repairs, and fast tyre replacements without the need for a garage visit.
            </p>
        </template>

        <template v-slot:title2>Why Choose Tyres Anywhere for Mobile Tyre Fitting in Brackley?</template>
        <template v-slot:content2>
            <p class="mt-4">
                We understand the stress and inconvenience that comes with tyre problems, but with Tyres Anywhere, you can rest easy knowing that help is on the way. Here’s why Brackley drivers trust us:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Assistance:</span>
                        We are available around the clock, providing fast, reliable tyre services whenever you need them.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Rapid Response:</span>
                        We strive to reach you as quickly as possible, ensuring minimal disruption to your day, whether you’re at home, work, or stuck on the roadside.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Tyre Solutions:</span>
                        There’s no need to visit a garage or wait for long periods of time. We bring our mobile tyre fitting service directly to you, handling repairs and replacements wherever your vehicle is parked.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our skilled and experienced technicians are equipped to deal with a wide range of tyre issues, ensuring a professional service every time.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Full Range of Services</span>
                        From tyre repairs to fitting new tyres, we offer a comprehensive set of mobile tyre solutions that cover all your needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Comprehensive Mobile Tyre Services in Brackley</template>
        <template v-slot:content3>

            <p class="mt-4">
                At Tyres Anywhere, we provide a wide variety of tyre services, all delivered by our mobile team to your location.
                No matter where you are in Brackley, our fully-equipped vans allow us to perform repairs and replacements on the spot, saving you time and keeping you on the move.
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

                    Need new tyres for your car or van? Our mobile tyre fitting service brings a wide selection of tyres directly to your location.
                    Whether you’re looking for premium tyres for top performance or budget-friendly options, we have tyres to suit all vehicle types and budgets.
                    <br><br>
                    Our expert technicians will fit and balance the tyres on-site, ensuring that your vehicle is safe and road-ready without the inconvenience of a garage visit.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every tyre problem requires a replacement. If your tyre can be repaired, we’ll fix it on-site, saving you money and getting you back on the road quickly. Whether you’re dealing with a puncture, slow leak, or valve issue, our mobile tyre repair service provides a fast and affordable solution.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For those who rely on their vans for business or personal use, a flat tyre can cause significant delays. Our mobile van tyre fitting service ensures that your van is back on the road quickly and efficiently. We carry a range of tyres for different types of vans, including commercial vehicles, and our service is designed to minimize downtime.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    A tyre emergency can happen at any time, and when it does, you need immediate assistance.
                    Our 24/7 emergency mobile tyre service is designed to provide quick, reliable help,
                    whether you’re stranded on the roadside or facing a tyre problem at home.
                    <br><br>
                    We’ll arrive promptly, repair or replace the damaged tyre, and ensure that your vehicle is ready for the road again.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Balancing</span>
                    <br><br>
                    Driving on under-inflated or over-inflated tyres can lead to uneven wear, reduced fuel efficiency, and dangerous driving conditions. As part of our mobile service, we offer tyre pressure checks to ensure that your tyres are properly inflated for optimal performance. We also provide wheel balancing services to ensure a smooth, comfortable ride after fitting new tyres.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Local Areas We Serve in Brackley</template>
        <template v-slot:content4>
            <p class="mt-4">
                Brackley is a historic town with a mix of residential, commercial, and rural areas, and we’re proud to serve drivers throughout the region. Whether you’re in the town centre or on the outskirts, our mobile tyre fitting service covers all locations, including:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Brackley Town Centre
                    </span>
                    <br>
                    Whether you're running errands or shopping, our mobile tyre service ensures that any tyre issue you face is resolved quickly and efficiently. No need to worry about getting stuck in town — we’ll come to you, wherever you are.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Brackley Leisure Centre
                    </span>
                    <br>
                    If you’re parked at the leisure centre and experience a flat or damaged tyre, our mobile team will handle the issue on-site so that you can continue with your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Silverstone Circuit
                    </span>
                    <br>
                    Brackley’s close proximity to Silverstone makes it a popular destination for motorsport fans. If you’re visiting the area and face tyre trouble, our mobile service is just a call away.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A43 Route
                    </span>
                    <br>
                    As a major route connecting Brackley to nearby towns and cities, the A43 sees plenty of traffic. If you face tyre trouble while commuting or traveling on the A43, our roadside assistance is available to get you back on track quickly.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Brackley Castle Site
                    </span>
                    <br>
                    If you’re exploring the historic Brackley Castle site or enjoying the surrounding areas, a tyre issue shouldn’t ruin your plans. Our mobile tyre fitting team can reach you quickly, providing on-site repairs or replacements.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Issues We Solve in Brackley</template>
        <template v-slot:content5>
            <p>
                Tyre problems can happen at any time, but Tyres Anywhere is here to make sure you’re never stranded. Our mobile tyre service in Brackley can solve a variety of common tyre issues, including:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Punctures caused by nails, debris, or sharp objects can often be repaired on-site. We’ll assess the damage and, if possible, repair the puncture quickly to save you the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout is a serious tyre issue that requires immediate attention. We’ll replace the damaged tyre quickly, ensuring that your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Driving on tyres with worn tread can increase the risk of accidents, especially in wet or icy conditions. We offer tyre replacements to ensure that your vehicle remains safe and roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    Slow leaks are often caused by faulty valves or small punctures. Our mobile team will inspect the tyre, repair the leak, and ensure proper inflation, preventing further issues.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven wear on your tyres could be a sign of improper alignment or tyre pressure. We’ll replace worn tyres and provide advice on how to maintain proper tyre care to extend the life of your tyres.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Serving Brackley’s Growing Community
            </p>

            <p class="mt-2">
                Brackley is a growing town, and with more drivers on the road, the need for quick, reliable tyre services is greater than ever.
                At Tyres Anywhere, we understand the importance of keeping your vehicle in top condition, and our mobile tyre fitting service is
                designed to offer both convenience and quality.
                <br><br>
                Whether you’re a local resident, commuter, or business owner,
                we provide tyre solutions that keep you safe and on the move.
            </p>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Brackley Today</template>
        <template v-slot:content6>
            <p>
                A flat tyre, puncture, or blowout doesn’t have to ruin your day. With Tyres Anywhere, our mobile tyre fitting service in Brackley ensures that help is always nearby. Whether you need a quick tyre repair, emergency roadside assistance, or a full replacement, we’re here to get you back on the road safely and efficiently.
            </p>
            <p>
                To book your mobile tyre fitting service or request emergency assistance, call us today at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 to handle all your tyre needs in Brackley.
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
