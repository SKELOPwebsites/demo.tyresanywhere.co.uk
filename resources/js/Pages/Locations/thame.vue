<template>
    <Head>
        <meta name="description" content="Need mobile tyre fitting in Thame? Tyres Anywhere offers 24/7 emergency tyre fitting and repairs in under 60 mins. Fast, reliable, and fully mobile service.">
        <meta property="og:description" content="Need mobile tyre fitting in Thame? Tyres Anywhere offers 24/7 emergency tyre fitting and repairs in under 60 mins. Fast, reliable, and fully mobile service." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>Thame's Leading Local Mobile Tyre Fitting Services</template>

        <template v-slot:title1>Mobile Tyre Fitting in Thame – Fast & Reliable Service</template>
        <template v-slot:content1>
            <p>
                At <b class="font-semibold">Tyres Anywhere</b>, we bring expert tyre services directly to you in <b class="font-semibold">Thame</b>.
                We understand how inconvenient a flat tyre can be, especially when you're on the go.
                That’s why we offer <b class="font-semibold">24/7 mobile tyre fitting</b>, ensuring that you’re never stuck for long.
                Whether it’s at your home, workplace, or on the roadside,
                our team will arrive within <b class="font-semibold">60 minutes</b> to get you back on the road as quickly as possible.
                Our services are designed to fit around your schedule, so you don't have to waste time at a garage.
            </p>
            <p>
                Our fully mobile service covers all tyre fitting needs, including <b class="font-semibold">emergency mobile tyre fitting</b>,
                <b class="font-semibold">mobile tyre repairs</b>, and <b class="font-semibold">van mobile tyre fitting</b>. With top-quality equipment and a professional team,
                you can count on us for fast, efficient service anywhere in <b class="font-semibold">Thame</b>.
            </p>
        </template>

        <template v-slot:title2>Emergency Mobile Tyre Fitting in Thame – Rapid Response in Under 60 Minutes</template>
        <template v-slot:content2>
            <p class="mt-4">
                Punctured or blown-out tyre in Thame? Our emergency tyre fitting service is designed to reach you quickly—often within 60 minutes or less. Whether you're stuck on the A418, travelling down Kingsey Road, or near the busy Thame Bypass, we'll come to you. From common roads like Wenman Road or even quieter residential streets in Leach Road or Cuttle Brook, no location is too remote for us to reach promptly.
            </p>
            <p class="mt-4">
                We offer mobile tyre fitting for cars, vans, and other vehicles, ensuring that whatever situation you're in, you'll be back on your journey in no time. Our experts work around the clock, so whether it’s the middle of the night or a busy afternoon, you can count on Tyres Anywhere.
            </p>
        </template>

        <template v-slot:title3>Supporting Thame’s Community with Our Mobile Tyre Services</template>
        <template v-slot:content3>

            <p class="mt-4">
                We take pride in supporting the local community in Thame and surrounding areas. Thame is known for its vibrant market town atmosphere, with a rich history and friendly locals. Whether you're near the Thame Market or just enjoying a day at Cuttle Brook Nature Reserve, rest assured that Tyres Anywhere is just a phone call away when tyre trouble strikes.
            </p>
            <p class="mt-4">
                Not only do we provide essential roadside assistance, but our mobile tyre services also extend to surrounding areas such as Haddenham,
                Long Crendon, Chinnor, and <Link class="text-blue-600 underline" href="/locations/princes-risborough">Princes Risborough</Link>.
                By serving these nearby towns, we ensure a comprehensive coverage across the local area,
                allowing our customers in Thame to stay connected with their broader communities.
            </p>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                Our service is not limited to Thame alone. We also serve the wider region,
                ensuring that motorists in towns like Haddenham, Long Crendon, Chinnor, and
                <Link class="text-blue-600 underline" href="/locations/wheatley">Wheatley</Link> have access to fast,
                professional mobile tyre services. Major routes like the A329 and A418 are well within our reach,
                and we regularly cover roads like Tiddington Road and Thame Bypass to ensure you’re never too far from help.
            </p>
            <p class="mt-4">
                By being strategically located, we can quickly attend to emergencies across Oxfordshire, delivering services that are both fast and reliable. You can expect the same high level of professionalism regardless of whether you’re in the heart of Thame or the nearby villages.
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


        <template v-slot:title6>Why Choose Tyres Anywhere for Mobile Tyre Fitting in Thame?</template>
        <template v-slot:content6>
            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        We’re always on call, no matter the time of day or night.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Fast Response:</span>
                        We’ll reach you within 60 minutes, no matter where you are in Thame.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Mobile Convenience:</span>
                        We come to you, whether you’re at home, work, or on the roadside.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Expert Team:</span>
                        With years of experience, our technicians handle all tyre issues with care and precision.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Coverage:</span>
                        Our service extends across Thame, including surrounding towns like Haddenham, Chinnor, and Wheatley.
                    </p>
                </div>
            </div>

            <p class="mt-4">
                With our customer-first approach and industry expertise, Tyres Anywhere is your go-to solution for all things tyres in Thame and beyond. Get in touch with us for all your tyre needs today!
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
