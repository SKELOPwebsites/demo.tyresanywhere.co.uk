<template>
    <Head>
        <meta name="description" content="Mobile tyre fitting in Aldershot with 24/7 emergency service. Fast, reliable tyre repair or replacement at your location. Call Tyres Anywhere at 07442 980101.">
        <meta property="og:description" content="Mobile tyre fitting in Aldershot with 24/7 emergency service. Fast, reliable tyre repair or replacement at your location. Call Tyres Anywhere at 07442 980101." />
    </Head>
    <LocationFrame :location="location">

        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in {{ location }} – Your Tyre Fitters</template>

        <template v-slot:title1>Tyres Anywhere in {{ location }}</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we offer a trusted and <b class="font-semibold">comprehensive mobile tyre fitting service in Aldershot</b> and surrounding areas.
                Whether you're at home, work, or stranded on the roadside, our mobile units are fully equipped to provide expert tyre fitting,
                repair, and replacement services. Known for its military heritage and thriving community,
                Aldershot is a town where convenience matters, and we are here to ensure that you receive fast, professional service, no matter where you are.
            </p>
            <p>
                From Aldershot's bustling town centre to the scenic parks and nearby countryside,
                our mobile tyre fitting service is available 24/7 to get you back on the road.
                Whether you’re near the Aldershot Military Museum, at Manor Park, or commuting along the A331,
                our skilled technicians are ready to help you resolve your tyre issues quickly and safely.
            </p>
        </template>

        <template v-slot:title2>Why Choose Our Mobile Tyre Fitting Service in {{ location }}?</template>
        <template v-slot:content2>
            <p class="mt-4">
                Tyre issues can be unpredictable and stressful, but Tyres Anywhere is here to make sure you're never left stranded. Here’s why Aldershot residents and drivers trust our mobile tyre fitting services:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Emergency Service:</span>
                        Whether it’s a midday puncture or a flat tyre in the middle of the night, our emergency tyre services are available around the clock. No matter the time, we’re here to help.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Rapid Response:</span>
                        We understand the frustration of waiting for assistance. Our team aims to get to your location as quickly as possible, ensuring minimal disruption to your day.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Comprehensive Tyre Services</span>
                        Whether it’s fitting new tyres, repairing a puncture, or fixing a slow leak, we provide a wide range of mobile tyre services to cover all your needs.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Technicians:</span>
                        Our technicians are highly skilled and trained to work on all types of vehicles, ensuring a safe and professional service.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Convenience:</span>
                        We bring our services directly to your doorstep, workplace, or even roadside, saving you the time and hassle of visiting a garage. Stay comfortable while we handle your tyre issues on-site.
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
                    Need new tyres? We offer a fast, efficient mobile tyre fitting service, bringing a wide selection of tyres to your location. Whether it’s for your car, van, or commercial vehicle, we have tyres to fit your needs. We handle everything from installation to balancing, ensuring a smooth and safe drive.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    Not all tyre damage means you need a replacement. We offer mobile tyre repairs for punctures, slow leaks, and valve issues, providing cost-effective solutions to extend the life of your tyres.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    If your work van experiences tyre trouble, we understand the urgency of getting back on the road. Our specialized van tyre fitting service ensures that your van tyres are replaced or repaired quickly, minimizing downtime and keeping your business moving.
                </li>
                <li>
                    <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                    <br><br>
                    When a tyre emergency strikes, our team is ready to help. Whether you’re stuck on the roadside near Aldershot’s busy train station or on the A31, we provide swift and professional roadside tyre assistance.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Explore Aldershot: Key Landmarks and Service Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                As a town with a rich military history and a growing community, Aldershot offers a variety of landmarks and areas that we frequently serve. Here are some of the places where our mobile tyre fitting services are available:
            </p>
            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Aldershot Military Museum
                    </span>
                    <br>
                    Situated near the town’s military hub, this museum is a key landmark. If you’re visiting the museum or nearby areas and encounter tyre trouble, we’ll arrive swiftly to assist you.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Manor Park
                    </span>
                    <br>
                    A popular spot for family outings and dog walks, Manor Park’s serene environment is a beautiful place to spend time. However, should your vehicle have a tyre issue while you’re here, rest assured our mobile tyre fitting service can come to the rescue.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Princes Gardens
                    </span>
                    <br>
                    Located in the heart of Aldershot, Princes Gardens is a great place for locals and visitors alike. Whether you’re nearby for leisure or just passing through, we’re ready to help if you experience any tyre-related problems.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        A331 and A31 Routes
                    </span>
                    <br>
                    These major roads around Aldershot are frequently traveled by commuters and transporters. If you run into a flat tyre or blowout while driving on the A331 or A31, our mobile team can reach you quickly and provide on-the-spot assistance.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Issues We Solve in Aldershot</template>
        <template v-slot:content5>
            <p>
                Tyre problems can occur without warning and disrupt your plans. Here are some common issues we handle and how our mobile tyre fitting service in Aldershot can resolve them:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Punctures
                    </span>
                    <br>
                    A puncture can be caused by a variety of sharp objects on the road. If your tyre is punctured and the damage is small and repairable, our technicians will fix it quickly and have you back on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Blowouts
                    </span>
                    <br>
                    Tyre blowouts are dangerous and often occur when a tyre is severely worn or under-inflated. If you experience a blowout, we’ll replace your tyre immediately with one of the quality tyres we carry in our van.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Tread Wear
                    </span>
                    <br>
                    If your tyre’s tread has worn down to unsafe levels, it’s important to replace it as soon as possible to maintain safe driving conditions. We provide tyre replacements for worn-out tyres to ensure you’re driving safely on the roads.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Valve Leaks
                    </span>
                    <br>
                    A slow tyre leak can be caused by a faulty valve. Our mobile service can replace the valve quickly, ensuring your tyre maintains the correct pressure.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Low Tyre Pressure
                    </span>
                    <br>
                    Driving with low tyre pressure can cause uneven wear and reduce your vehicle’s efficiency. We can check and adjust your tyre pressure or replace the tyre if necessary.
                </li>
            </ol>
        </template>

        <template v-slot:title6>Book Your Mobile Tyre Fitting Service in Aldershot Today</template>
        <template v-slot:content6>
            <p>
                A flat or damaged tyre can happen at any time, but with Tyres Anywhere, you’re never far from help. Whether you’re in the heart of Aldershot or on the outskirts, our mobile tyre fitting service ensures fast, reliable assistance. We take pride in our swift response times, professional service, and commitment to getting you back on the road as soon as possible.
            </p>
            <p>
                To book an appointment or for emergency tyre assistance, give us a <a class="text-blue-600 underline" href="tel:07442980101">call</a>.
                We’re available 24/7 for all your mobile tyre needs in Aldershot.
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
