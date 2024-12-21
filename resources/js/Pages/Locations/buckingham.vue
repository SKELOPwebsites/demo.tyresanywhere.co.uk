<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Buckingham. Quick tyre repairs and replacements at your home, work, or roadside. Call Tyres Anywhere for expert service today!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Buckingham. Quick tyre repairs and replacements at your home, work, or roadside. Call Tyres Anywhere for expert service today!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24/7 Professional Tyre Services at Your Location</template>

        <template v-slot:title1>Mobile Tyre Fitting Service in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we offer fast, reliable, and comprehensive mobile tyre fitting services across Buckingham and the surrounding areas. Whether you're dealing with a puncture, flat tyre, or need an urgent replacement, our mobile tyre service is designed to bring everything directly to you — no need to drive to a garage or wait for a tow truck. Buckingham, a historic market town with a vibrant community, sees a lot of traffic on its roads, and tyre issues shouldn’t cause unnecessary delays. Whether you’re near Buckingham University, shopping in the town centre, or driving through on the A421, our expert technicians are available 24/7 to help.
            </p>
            <p>
                Our fully-equipped mobile tyre units allow us to handle tyre repairs and replacements on-site, ensuring that you’re back on the road quickly and safely. Tyres Anywhere brings professional service and expertise right to your location, so you can get back to your day without the hassle of visiting a garage.
            </p>
        </template>

        <template v-slot:title2>Why Choose Tyres Anywhere for Mobile Tyre Fitting in Buckingham?</template>
        <template v-slot:content2>
            <p class="mt-4">
                At Tyres Anywhere, we prioritize convenience, reliability, and safety. Here’s why drivers in Buckingham trust us with their tyre needs:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Service:</span>
                        Tyre problems can happen at any time, and we’re available 24/7 to provide fast, professional assistance whenever you need it.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Rapid Response:</span>
                        We understand that time is valuable, and that’s why we aim to reach your location as quickly as possible, minimizing the impact of your tyre issue.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Solutions:</span>
                        No need to visit a garage or wait for a tow. Our mobile tyre fitting service brings all the tools and expertise to your location, whether you’re at home, work, or stranded on the roadside.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our skilled technicians are trained to handle a wide range of tyre issues, ensuring safe and professional service with every job.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Full Range of Services</span>
                        From emergency tyre repairs to routine replacements, we offer a complete set of mobile tyre services designed to meet all your needs.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in Buckingham</template>
        <template v-slot:content3>

            <p class="mt-4">
                Our mobile tyre fitting service covers everything from tyre repairs to replacements, ensuring that all your tyre needs are handled on the spot. Here’s a closer look at the services we offer:
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
                    Whether you need a single tyre replaced or a full set, our mobile tyre fitting service brings a wide selection of premium, mid-range, and budget tyres directly to your location. We cater to all types of vehicles, ensuring that your new tyres are fitted and balanced on-site, so you can drive away with confidence. Whether you’re looking for high-performance tyres or a more affordable option, we’ve got you covered.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    A puncture or slow leak doesn’t always mean you need a new tyre. If your tyre can be repaired, our technicians will handle the job on-site, saving you the cost of a full replacement. Our mobile tyre repair service is ideal for handling punctures, valve issues, and other minor tyre damage. We’ll assess the problem, provide a reliable repair, and get you back on the road quickly.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For van drivers, a tyre issue can cause major delays, especially if you rely on your van for work. Our mobile van tyre fitting service ensures that your van tyres are replaced or repaired with minimal downtime. We carry a wide range of tyres suitable for vans and commercial vehicles, ensuring your vehicle is fitted with the right tyres for optimal performance and safety.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Tyre emergencies often happen when you least expect them, and when they do, you need help fast. Our 24/7 emergency mobile tyre service is available to provide immediate assistance no matter where you are in Buckingham. Whether it’s a blowout on the A421 or a flat tyre in the town centre, we’ll arrive quickly and resolve the issue, ensuring you can get back on the road as soon as possible.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Balancing</span>
                    <br><br>
                    Driving with the correct tyre pressure is crucial for safety, performance, and fuel efficiency. As part of our mobile service, we provide tyre pressure checks to ensure your tyres are properly inflated. We also offer wheel balancing services to minimize vibrations, extend tyre life, and ensure a smoother ride.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Key Locations & Landmarks We Serve in Buckingham</template>
        <template v-slot:content4>
            <p class="mt-4">
                Buckingham is a historic town with a rich heritage and a mix of busy roads, scenic routes, and quiet neighborhoods. Our mobile tyre service covers all areas of Buckingham, including:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Buckingham Town Centre
                    </span>
                    <br>
                    Whether you’re shopping or running errands in the town centre, a tyre issue can cause delays. Our mobile tyre fitting service ensures that any tyre problem you encounter is resolved quickly, so you can get back to your day without hassle.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        University of Buckingham
                    </span>
                    <br>
                    If you’re a student or staff member at the University of Buckingham and experience a flat tyre while on campus, our mobile service will come to you to fix the problem on-site.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A421 & A422 Routes
                    </span>
                    <br>
                    As key roads connecting Buckingham to other towns and cities, the A421 and A422 are often busy with traffic. If you experience tyre trouble while driving on these routes, our mobile tyre service provides fast roadside assistance to minimize your downtime.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Stowe Gardens & Stowe School
                    </span>
                    <br>
                    Visiting the beautiful gardens at Stowe or dropping someone off at Stowe School? If you face a tyre problem while in the area, our technicians will arrive promptly to handle the repair or replacement, allowing you to continue enjoying your day.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Silverstone Circuit
                    </span>
                    <br>
                    Just a short drive from Buckingham, Silverstone is a popular destination for motorsport enthusiasts. If you experience a tyre issue while visiting or driving to the circuit, our mobile tyre fitting service is just a phone call away.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in Buckingham</template>
        <template v-slot:content5>
            <p>
                Tyre issues can occur when you least expect them, but Tyres Anywhere is here to help you get back on the road. Here are some common tyre problems we handle:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    Punctures caused by nails, glass, or other road debris are common. If the damage is minor, we can repair the tyre on-site, saving you the cost of a new tyre.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    A blowout can happen without warning, and it requires immediate attention. We’ll replace your blown tyre with a new one, ensuring your vehicle is safe to drive.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Driving on tyres with worn tread is unsafe, especially in wet or icy conditions. We offer tyre replacements to keep your vehicle roadworthy and safe.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    A slow leak may be caused by a valve issue or a small puncture. We’ll inspect the tyre, fix the leak, and ensure that your tyre is properly inflated to prevent further issues.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Tyre Wear
                    </span>
                    <br>
                    Uneven tyre wear could be a sign of improper alignment or tyre pressure. We’ll replace worn tyres and provide advice on maintaining proper alignment and tyre care.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting Buckingham’s Community
            </p>

            <p class="mt-2">
                Buckingham is a town with a rich history, and we’re proud to serve its residents with fast, reliable mobile tyre services. Whether you’re commuting, exploring the countryside, or running errands in town, Tyres Anywhere is here to keep you safe on the road. Our mobile tyre fitting service is designed to provide expert tyre solutions with minimal disruption to your day.
            </p>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Buckingham Today</template>
        <template v-slot:content6>
            <p>
                A flat tyre or blowout doesn’t have to ruin your day. With Tyres Anywhere, our mobile tyre fitting service in Buckingham ensures that you receive fast, reliable assistance whenever and wherever you need it. Whether it’s a tyre repair, emergency replacement, or routine tyre maintenance, we’re here to get you back on the road quickly and safely.
            </p>
            <p>
                To schedule your mobile tyre fitting or request emergency assistance, call us today at <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a>.
                We’re available 24/7 for all your tyre needs in Buckingham.
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
