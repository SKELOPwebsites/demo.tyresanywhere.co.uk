<template>
    <Head>
        <meta name="description" content="Fast and reliable mobile tyre fitting in Tottenham and North London. 24/7 emergency service, tyre repairs, and van fitting within 60 minutes. Trusted by locals.">
        <meta property="og:description" content="Fast and reliable mobile tyre fitting in Tottenham and North London. 24/7 emergency service, tyre repairs, and van fitting within 60 minutes. Trusted by locals." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Mobile Tyre Fitting in Tottenham and London – Always Ready, Always Nearby</template>

        <template v-slot:title1>Fast & Reliable Service</template>
        <template v-slot:content1>
            <p>
                At Tyres Anywhere, we provide fast, reliable mobile tyre fitting services across Tottenham and the greater London area. Whether you're dealing with a flat tyre at home, work, or on the roadside, we can be there in under 60 minutes to get you back on your way. Our 24/7 service means you don’t need to wait until morning or lose valuable time heading to a garage. We come to you, fitting or repairing tyres for cars, vans, and commercial vehicles.
            </p>
            <p>
                Tottenham is a bustling part of North London, known for its vibrant community and proximity to central London. Whether you’re near Tottenham High Road, the A10, or White Hart Lane, you’ll benefit from our swift, expert tyre services. From emergency repairs to van mobile tyre fitting, we’ve got Tottenham and London covered.
            </p>
        </template>

        <template v-slot:title2>Emergency Mobile Tyre Fitting in Tottenham – Less than 60 Minutes Away</template>
        <template v-slot:content2>
            <p class="mt-4">
                Don’t let a puncture or flat tyre in Tottenham slow you down. Our emergency mobile tyre fitting service is designed to get to you quickly—often within the hour. Whether you’re stuck on busy roads like the A503, A10, or Tottenham High Road, we’re just a phone call away. We also cover quieter streets like Bruce Grove, Philip Lane, or even residential areas near Tottenham Hale.
            </p>
            <p class="mt-4">
                We know London traffic can be unpredictable, and that’s why our mobile tyre fitters are strategically placed to reach you no matter where you are in North London. We bring all the tools and expertise to repair or replace your tyre on the spot, minimizing any disruption to your day.
            </p>
        </template>

        <template v-slot:title3>Supporting Tottenham’s Community with Our Mobile Tyre Services</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tottenham is not just part of our service area, it’s a community we’re proud to support. From the bustling markets near Tottenham Green to the iconic Tottenham Hotspur Stadium, we know how important it is for residents and visitors to get back on the road quickly when tyre troubles arise.
            </p>
            <p class="mt-4">
                We also serve nearby areas, including Wood Green, Edmonton, Seven Sisters, and Harringay. Whether you’re shopping at Tottenham Hale Retail Park or travelling along the A406 North Circular Road, you can rely on Tyres Anywhere to provide top-notch mobile tyre services across North London.
            </p>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Our service in Tottenham extends beyond the borough, covering the wider London area. Whether you're in North London or venturing further across the city, we provide consistent, reliable mobile tyre fitting and repair services. Popular routes like the A10, A406 North Circular, and the A503 are part of our daily coverage.
            </p>
            <p class="mt-4">
                By operating in key areas of <Link class="text-blue-600 underline" href="/locations/london">London</Link>, we’re able to respond quickly to tyre emergencies in surrounding towns and boroughs such as
                <Link class="text-blue-600 underline" href="/locations/enfield">Enfield</Link>, Hackney, and Islington. Wherever you are, whether commuting into central London or navigating through Tottenham, we’ll be there when you need us most.
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


        <template v-slot:title6>Why Choose Tyres Anywhere for Mobile Tyre Fitting in Tottenham and London?</template>
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
                        Our technicians arrive within 60 minutes or less, making us the go-to choice for emergency mobile tyre fitting in Tottenham and London.
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
                        Covering not only Tottenham, but also nearby areas in North London, including Wood Green, Seven Sisters, and Edmonton.
                    </p>
                </div>
            </div>

            <p class="mt-4">
                When it comes to reliable, mobile tyre services in Tottenham and across London, Tyres Anywhere is the name you can trust. Whether you're dealing with a flat tyre on White Hart Lane or need an emergency fitting near the A406 North Circular, we’ll be there fast and fully prepared.
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
