<template>
    <Head>
        <meta name="description" content="Need fast mobile tyre fitting in Tring? Tyres Anywhere offers 24/7 emergency tyre repairs within 60 minutes. Reliable and fully mobile service near you.">
        <meta property="og:description" content="Need fast mobile tyre fitting in Tring? Tyres Anywhere offers 24/7 emergency tyre repairs within 60 minutes. Reliable and fully mobile service near you." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in Tring – Convenient & Fast Service</template>

        <template v-slot:title1>Fast & Reliable Service</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we provide a fully mobile tyre fitting service across Tring, ensuring you never have to worry about being stranded with a flat or damaged tyre. Our expert team is available 24/7, offering rapid response times of under 60 minutes for both emergency and scheduled appointments. Whether you're at home, work, or on the road, we come to you, saving you time and hassle.
            </p>
            <p>
                Our service covers a wide range of vehicles, from cars to vans, making us the go-to solution for tyre fitting and repairs in Tring. With professional equipment and experienced technicians, we provide mobile tyre repair, van mobile tyre fitting, and emergency services that ensure you're never left waiting too long.
            </p>
        </template>

        <template v-slot:title2>Emergency Mobile Tyre Fitting in Tring – Response in Under 60 Minutes</template>
        <template v-slot:content2>
            <p class="mt-4">
                When a tyre emergency happens, you need help fast. At Tyres Anywhere, our emergency mobile tyre fitting service ensures that we reach you within 60 minutes or less. Whether you're driving down the A41, navigating the High Street, or taking a scenic route near Tring Reservoirs, we’ve got you covered.
            </p>
            <p class="mt-4">
                Our service is designed to be fast, efficient, and reliable, whether you're dealing with a puncture, flat tyre, or blowout. From Icknield Way to Brook Street, and even in quieter residential areas like Station Road, we can reach you no matter where you are in Tring. Let us take care of your tyre troubles so you can get back on the road as soon as possible.
            </p>
        </template>

        <template v-slot:title3>Supporting Tring’s Community with Our Mobile Tyre Services</template>
        <template v-slot:content3>

            <p class="mt-4">
                We’re proud to support the local community in Tring with our comprehensive mobile tyre services. Whether you're visiting popular spots like Tring Park, heading out for a stroll near the Natural History Museum, or driving through the picturesque Chiltern Hills, you can rely on Tyres Anywhere to provide quick and efficient tyre solutions.
            </p>
            <p class="mt-4">
                Our service also extends to nearby towns such as
                <Link class="text-blue-600 underline" href="/locations/aylesbury">Aylesbury</Link>,
                <Link class="text-blue-600 underline" href="/locations/berkhamsted">Berkhamsted</Link>,
                <Link class="text-blue-600 underline" href="/locations/chesham">Chesham</Link>, and Hemel Hempstead,
                offering the same high level of expertise and fast response times. By supporting Tring and its surrounding areas, we ensure that residents and businesses alike have access to the best mobile tyre fitting services.
            </p>
        </template>

        <template v-slot:title4>Serving Tring and Surrounding Areas – Always Within Reach</template>
        <template v-slot:content4>
            <p class="mt-4">
                Our service doesn't stop at Tring. We cover the surrounding areas to provide comprehensive mobile tyre fitting for all motorists. Whether you're travelling through Aylesbury, Berkhamsted, Aston Clinton, or along the A41, we are always within reach.
            </p>
            <p class="mt-4">
                Major roads like the A41 and B489 are part of our regular routes, so no matter where you are, we can respond quickly to your tyre needs. From residential streets in Tring to the busy dual carriageways of nearby towns, Tyres Anywhere is always ready to provide the tyre services you need.
            </p>
        </template>

        <template v-slot:title5>Should I repair or replace my tyre?</template>
        <template v-slot:content5>
            <p>
                The decision to repair or replace a tyre depends on the type and extent of the damage.
                Minor punctures can often be repaired, but damage to the sidewall or larger punctures usually require replacement.
                Age and wear of the tyre should also be considered when making the decision.
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Assessing the Damage
                    </span>
                    <br>
                    Not all tyre damage is created equal. Minor punctures in the tread can often be repaired, but certain types of damage—such as cuts,
                    cracks, or bulges on the sidewall—require a replacement. The sidewall is a critical structural part of the tyre, and damage there is not safe to repair.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Location of the Damage
                    </span>
                    <br>
                    The location of the puncture plays a big role in determining if the tyre can be repaired.
                    Generally, punctures located in the central three-quarters of the tread area are repairable.
                    However, punctures on the edge of the tread or on the sidewall cannot be safely repaired and should be replaced to prevent blowouts.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Size of the Puncture
                    </span>
                    <br>
                    Tyre repairs are only effective for punctures that are 6mm or smaller in diameter.
                    Any damage larger than this typically compromises the tyre’s structural integrity,
                    making it unsafe for future use. In such cases, replacing the tyre is the safest option.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Age and Wear
                    </span>
                    <br>
                    Even if a tyre puncture seems repairable, its age and overall wear should be considered.
                    Tyres that are older than 5-6 years, or those with significant tread wear, may not provide the same safety and performance,
                    even after a repair. If the tyre is close to its legal minimum tread depth (1.6mm in the UK), it's often better to opt for a replacement.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Multiple Punctures
                    </span>
                    <br>
                    If your tyre has multiple punctures, especially in close proximity, a replacement is usually recommended.
                    Repairing multiple areas can weaken the tyre’s structure, reducing its overall strength and safety.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Is It Really Worth Repairing?
                    </span>
                    <br>
                    While a tyre repair can save you money, it’s only effective if the tyre is in otherwise good condition.
                    Replacing the tyre is a better option if it’s nearing the end of its lifespan, heavily worn,
                    or showing other signs of damage. After all, your safety on the road should always come first.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Want to Learn More?
                    </span>
                    <br>
                    For a detailed guide on when your tyre is repairable and when it needs to be replaced,
                    check out our <Link class="text-blue-800 underline" href="/blog/how-to-check-if-my-tyre-is-repairable">blog post on tyre repair-ability</Link> .
                    It covers everything you need to know about safe tyre repairs and when to consider a replacement.
                </li>
            </ol>
        </template>


        <template v-slot:title6>Why Choose Tyres Anywhere for Mobile Tyre Fitting in Tring?</template>
        <template v-slot:content6>
            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        No matter what time of day or night, we’re on hand to provide immediate tyre fitting services.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        With a response time of under 60 minutes, you can rely on us for quick and efficient tyre fitting or repair.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Convenience:</span>
                        We come to your location, whether it's your home, work, or even the roadside, saving you the hassle of visiting a garage.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Team:</span>
                        With years of industry experience, our team handles all tyre issues with precision and care.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Coverage:</span>
                        In addition to Tring, we serve nearby towns like Aylesbury, Berkhamsted, and Chesham.
                    </p>
                </div>
            </div>

            <p class="mt-4">
                For fast, reliable, and convenient mobile tyre fitting in Tring, look no further than Tyres Anywhere. Whether it’s an emergency on the A41 or routine tyre maintenance at home, we’re the team you can trust to get the job done.
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
