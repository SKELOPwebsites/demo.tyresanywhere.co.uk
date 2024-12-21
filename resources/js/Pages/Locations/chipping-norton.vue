<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in Chipping Norton. Professional tyre repairs, replacements at your home, work, or roadside. Call 07442 980101 for fast service today!">
        <meta property="og:description" content="24/7 mobile tyre fitting in Chipping Norton. Professional tyre repairs, replacements at your home, work, or roadside. Call 07442 980101 for fast service today!" />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – 24 Hour Tyre Services, Delivered To You</template>

        <template v-slot:title1>Mobile Tyre Fitting Service in {{ location }}</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere is proud to provide top-quality mobile tyre fitting services in Chipping Norton and its nearby villages. Whether you’re dealing with a puncture, require a tyre replacement, or need emergency roadside assistance, our expert technicians are ready to help. Chipping Norton, a charming market town nestled in the Cotswolds, is known for its beautiful landscapes and historic streets. With Tyres Anywhere’s 24/7 service, we ensure that any tyre issues are quickly resolved, whether you're in the town centre, parked near Chipping Norton Theatre, or driving along the A44.
            </p>
            <p>
                No more worrying about towing your vehicle or waiting for a garage appointment — our mobile service brings professional tyre fitting directly to your home, workplace, or wherever your vehicle may be stranded. Equipped with the latest tools and tyres, our mobile units guarantee prompt and reliable solutions to keep you on the move.
            </p>
        </template>

        <template v-slot:title2>Why Chipping Norton Trusts Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                We’re committed to delivering hassle-free tyre services that fit your schedule. Here’s why drivers in Chipping Norton choose us:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Service:</span>
                        We understand that tyre issues can strike at any moment. Whether it's day or night, we’ll arrive quickly to handle your tyre emergency.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Convenience:</span>
                        Avoid the inconvenience of leaving your car at a garage. We bring all the necessary equipment to your location and perform tyre fittings, repairs, and replacements on-site.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Experienced Technicians:</span>
                        Our team consists of skilled professionals with extensive experience in handling all types of tyre issues safely and efficiently.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Range</span>
                        From premium to budget-friendly tyres, our selection covers all major brands and vehicles, ensuring your tyre needs are met with precision.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Customer Satisfaction:</span>
                        We pride ourselves on excellent service, fast response times, and reliable solutions to keep you safely on the road.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in Chipping Norton</template>
        <template v-slot:content3>

            <p class="mt-4">
                Whether you need emergency repairs or routine tyre replacements, our mobile tyre fitting service in Chipping Norton offers everything you need to keep moving. With a fully equipped van and a team of professionals, we bring expert tyre services to you, eliminating the need to visit a garage.
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
                    Need a tyre change? Tyres Anywhere delivers high-quality tyres to your home, work, or roadside. Whether you’re near the historic Bliss Mill or parked outside your home in Over Norton, our expert technicians will fit and balance your new tyres on-site. Our service ensures that your vehicle is road-ready without you having to take time out of your day to visit a garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not every flat tyre needs to be replaced. Our mobile tyre repair service can patch up minor punctures and fix slow leaks, saving you time and money. Whether you’re parked at The Lido or just outside Chipping Norton, we’ll come to your location, assess the damage, and repair the tyre if possible.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses relying on vans in Chipping Norton, a tyre problem can disrupt your operations. Our van mobile tyre fitting service caters specifically to commercial vehicles, ensuring that your van is back on the road quickly. We carry a variety of tyres designed for commercial vans to suit all your business needs.
                </li>
                <li>
                    <span class="font-semibold text-lg">24/7 Emergency Mobile Tyre Services</span>
                    <br><br>
                    Whether you’re stranded on the A361 or facing a flat in Chipping Norton’s scenic outskirts, our 24/7 emergency mobile tyre service is here to help. No matter the time, we’ll come to your location with everything needed to repair or replace your tyres so you can continue your journey without unnecessary delays.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Driving with correct tyre pressure and balanced wheels is essential for safety and fuel efficiency. As part of our service, we offer tyre pressure checks and wheel balancing to ensure a smoother ride and prolong the life of your tyres.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Key Locations We Serve in Chipping Norton</template>
        <template v-slot:content4>
            <p class="mt-4">
                Chipping Norton offers a blend of historic charm and picturesque landscapes, and our mobile tyre fitting service covers all areas to ensure drivers have access to reliable and fast assistance. Key areas we serve include:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Chipping Norton Town Centre
                    </span>
                    <br>
                    Whether you’re visiting the local market or enjoying a performance at Chipping Norton Theatre, our mobile service can resolve any tyre issues quickly, letting you continue your day without disruptions.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Bliss Mill
                    </span>
                    <br>
                    This iconic landmark is a popular spot for both locals and visitors. If you encounter a flat tyre while exploring the area, we’ll come to you and provide fast, professional service.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A44 Route
                    </span>
                    <br>
                    A key road connecting Chipping Norton to other towns in the Cotswolds. If you experience a tyre issue while driving along this scenic route, we offer roadside assistance to get you moving again.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Chipping Norton Golf Club
                    </span>
                    <br>
                    For golfers enjoying a day on the greens, tyre trouble can be an unwelcome interruption. We’ll come to your location at the club and handle any tyre issues on-site, ensuring you can get back to your game.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Chadlington and Over Norton
                    </span>
                    <br>
                    For residents or workers in these nearby villages, our mobile tyre fitting service ensures you don’t have to travel far for expert help. We bring everything you need directly to your location.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Issues We Handle in Chipping Norton</template>
        <template v-slot:content5>
            <p>
                Tyre problems can happen when you least expect them, but with Tyres Anywhere, you’re never left stranded. Here are some of the common tyre issues we fix in Chipping Norton:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    From nails to sharp debris, punctures are a common cause of tyre damage. We can often repair the tyre on-site, saving you from needing a costly replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    Sudden tyre blowouts require immediate attention. Our mobile unit will replace the tyre quickly, ensuring your safety and preventing further damage to your vehicle.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tread Depth
                    </span>
                    <br>
                    Worn-out tyres reduce traction and increase your risk of accidents, particularly on wet roads. We’ll fit new tyres to ensure your vehicle remains safe and roadworthy.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Slow Leaks
                    </span>
                    <br>
                    If you’re losing air pressure slowly, it could be due to a small puncture or valve issue. We’ll identify and fix the problem so you can avoid an unexpected flat.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Uneven Wear
                    </span>
                    <br>
                    Improper alignment or inflation can cause uneven wear on your tyres. We’ll replace any worn tyres and provide advice on keeping your tyres in good condition.
                </li>
            </ol>

            <p class="font-semibold mt-6">
                Supporting the Community in Chipping Norton
            </p>

            <p class="mt-2">
                Chipping Norton is a town rich in history and community spirit, and Tyres Anywhere is proud to support its residents with reliable and convenient tyre services. Whether you're commuting to work, exploring the countryside, or simply enjoying a day in town, our mobile service ensures that any tyre issues are handled quickly and efficiently.
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
