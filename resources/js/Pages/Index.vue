<template>
    <Head>
        <title>Mobile Tyre Fitting - 24 Hour Emergency Line | Tyres Anywhere</title>
        <meta name="description" content="24/7 emergency mobile tyre fitting service at home, work, or roadside. Fast, reliable repairs and tyre replacements for cars and vans. Call Tyres Anywhere now!">
        <link rel="canonical" href="https://tyresanywhere.co.uk/">

        <meta property="og:title" content="Mobile Tyre Fitting - 24 Hour Emergency Line" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://tyresanywhere.co.uk" />
        <meta property="og:image" content="https://tyresanywhere.co.uk/assets/images/showcase/gallary/mobile-tyre-fitting-1.webp" />
        <meta property="og:description" content="24/7 emergency mobile tyre fitting service at home, work, or roadside. Fast, reliable repairs and tyre replacements for cars and vans. Call Tyres Anywhere now!" />
        <meta property="og:site_name" content="Tyres Anywhere" />
    </Head>

    <Container>
        <div class="flex md:flex-row flex-col md:pt-12 sm:pt-6 xl:h-[340px] lg:h-[300px] md:h-[280px]">
            <div class="xl:w-[70%] md:w-[65%] w-full">
                <MainCarousel />
            </div>
            <div class="xl:w-[30%] md:w-[35%] w-full">
                <SearchTyre />
            </div>
        </div>
        <OurServices />

        <AreasWeCover />
    </Container>


    <Container>
        <Content>
            <div class="xl:px-11 sm:px-8 px-4">
                <h2 class="font-montserrat font-extrabold lg:text-4xl sm:text-2xl text-xl mb-2 uppercase">Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></h2>
                <h2 class="md:text-xl sm:text-lg text-base mb-10">Mobile Tyre Fitting Services - Convenient, Fast, and Professional</h2>

                <div class="lg:grid grid-cols-12 gap-y-12 xl:gap-x-4 lg:gap-x-8 lg:space-y-0 sm:space-y-12 space-y-6 lg:mt-8 mt-4 sm:text-base text-sm">
                    <div class="col-span-5 lg:p-4">
                        <img
                            class="w-full object-cover"
                            src="/assets/images/pages/home/tyres-anywhere-van-375.webp"
                            srcset="/assets/images/pages/home/tyres-anywhere-van.webp 640w,
                                    /assets/images/pages/home/tyres-anywhere-van-500.webp 500w,
                                    /assets/images/pages/home/tyres-anywhere-van-375.webp 375w"
                            sizes="(max-width: 600px) 375px, (max-width: 768px) 500px, (max-width: 1024px) 640px, 500px"
                            alt="Tyres Anywhere mechanic in a van"
                        >
                    </div>
                    <div class="col-span-7 lg:p-4 space-y-3">
                        <h3 class="sm:text-2xl text-xl font-semibold">Tyres Anywhere</h3>

                        <p>
                            Welcome to Tyres Anywhere, your trusted provider of <span class="font-semibold">mobile tyre fitting</span> services.
                            We understand the inconvenience of a flat or damaged tyre and offer a <span class="font-semibold">hassle-free solution</span>
                            to get you back on the road quickly and safely. Whether you’re looking for <span class="font-semibold">mobile tyre repair</span>,
                            <span class="font-semibold">van mobile tyre fitting</span>, or a complete tyre replacement, our expert team is here to help—wherever you are.
                        </p>
                        <p>
                            Our mobile tyre fitting van will meet you at your desired location, whether your at home, work, roadside or on the hard-shoulder.
                        </p>
                        <p class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Need mobile tyre services ASAP?, please call us on <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a></span>
                        </p>
                    </div>

                    <!--                    Why choose Tyres Anywhere for your tyre needs?-->
                    <div class="col-span-12 lg:p-4">
                        <h3 class="sm:text-2xl text-xl font-semibold">Why choose Tyres Anywhere for your mobile tyre fitting?</h3>

                        <div class="flex flex-col space-y-4 mt-6">
                            <div class="flex space-x-2.5">
                                <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                                </svg>
                                <p>
                                    <span class="font-medium">Convenient and Time-Saving:</span>
                                    We come to you, saving you time and eliminating the stress of travelling to a garage.
                                </p>
                            </div>
                            <div class="flex space-x-2.5">
                                <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                                </svg>
                                <p>
                                    <span class="font-medium">Fast Response Times:</span>
                                    We understand how important it is to stay on schedule, so we offer same-day service to get your tyres fitted quickly.
                                </p>
                            </div>
                            <div class="flex space-x-2.5">
                                <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                                </svg>
                                <p>
                                    <span class="font-medium">Wide Range of Tyres:</span>
                                    From standard passenger cars to vans and commercial vehicles, we carry a wide selection of tyres to meet your specific needs.
                                </p>
                            </div>
                            <div class="flex space-x-2.5">
                                <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                                </svg>
                                <p>
                                    <span class="font-medium">Professional Technicians:</span>
                                    Our experienced tyre fitters ensure that every job is done safely and professionally, whether it’s a simple repair or a full replacement.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!--                    Our Mobile Tyre Services-->
                    <div class="col-span-12 lg:p-4">
                        <h3 class="sm:text-2xl text-xl font-semibold">We offer a comprehensive range of mobile tyre services, including:</h3>

                        <ol class="list-decimal pl-5 space-y-6 mt-6">
                            <li>
                                <Link href="/mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                                    Mobile Tyre Fitting
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                                        <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                                    </svg>
                                </Link>
                                <br>
                                Our mobile tyre fitting service allows you to have your tyres replaced at your convenience.
                                Whether you need new tyres for your car, van, or commercial vehicle, we provide a fast and reliable service,
                                ensuring that your new tyres are fitted and balanced on the spot.
                            </li>
                            <li>
                                <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                                    Mobile Tyre Repair
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                                        <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                                    </svg>
                                </Link>
                                <br>
                                A flat tyre doesn’t always mean you need a replacement.
                                Our mobile tyre repair service covers puncture repairs, valve replacements,
                                and other minor fixes that can extend the life of your tyres. If the tyre is repairable,
                                we’ll get it back in working condition in no time.
                            </li>
                            <li>
                                <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                                    Van Mobile Tyre Fitting
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                                        <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                                    </svg>
                                </Link>
                                <br>
                                For those who rely on their vans for work, we offer specialized van mobile tyre fitting services.
                                Whether your van needs tyre replacements or repairs,
                                we’ll come to your location with the right tyres and tools to get you back on the road fast.
                            </li>
                            <li>
                                <span class="font-semibold text-lg">Emergency Mobile Tyre Services</span>
                                <br>
                                Tyre problems often strike at the worst possible time.
                                That’s why we offer <span class="font-semibold">emergency mobile tyre fitting and repair services</span>,
                                so you’re never left stranded. Our technicians are on call to help you with your tyre emergencies, wherever you are.
                            </li>
                        </ol>
                    </div>

                    <!--                    Why choose Tyres Anywhere for your tyre needs?-->
                    <div class="col-span-12 lg:p-4">
                        <h3 class="sm:text-2xl text-xl font-semibold">Benefits of choosing our mobile tyre services</h3>

                        <div class="flex flex-col space-y-4 mt-6">
                            <div class="flex space-x-2.5">
                                <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                                </svg>
                                <p>
                                    <span class="font-medium">24/7 Availability:</span> No matter the time, day or night, our mobile tyre fitters are ready to assist you.
                                    Whether you’re in a hurry or stranded in the middle of nowhere, we ensure a rapid response to get you back on the road.
                                </p>
                            </div>
                            <div class="flex space-x-2.5">
                                <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                                </svg>
                                <p>
                                    <span class="font-medium">Fast Response Times:</span> Our experienced tyre technicians can reach most locations within an hour.
                                    We understand the urgency of your situation and prioritize emergencies to minimize downtime.
                                </p>
                            </div>
                            <div class="flex space-x-2.5">
                                <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                                </svg>
                                <p>
                                    <span class="font-medium">On-the-Spot Tyre Fitting:</span> Our vans are equipped with the latest technology and tools, enabling us to replace or repair your tyre on the spot.
                                    No need for towing or long wait times – we’ll come directly to you and handle everything efficiently.
                                </p>
                            </div>
                            <div class="flex space-x-2.5">
                                <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                                </svg>
                                <p>
                                    <span class="font-medium">Competitive Prices:</span> We offer affordable and transparent pricing for all emergency mobile tyre fitting services, ensuring no hidden costs.
                                    You’ll know exactly what you’re paying for before we start.
                                </p>
                            </div>
                            <div class="flex space-x-2.5">
                                <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                                </svg>
                                <p>
                                    <span class="font-medium">Wide Range of Tyres:</span> Whether you need premium brands, mid-range, or budget tyres, we carry a wide selection to suit your vehicle and needs.
                                    From car tyres to van tyres, we’ve got it all.
                                </p>
                            </div>
                        </div>
                    </div>


                    <!--                    book an appointment today-->
                    <div class="col-span-7 lg:p-4 space-y-4">
                        <h3 class="sm:text-2xl text-xl font-semibold">Book an appointment for mobile tyre repair today</h3>
                        <p>
                            Experiencing a flat tyre can be incredibly frustrating, and we understand how it can disrupt your day. Not only does it consume valuable time,
                            but it can also create a major hassle when you’re already on a tight schedule, possibly making you late for work or other important commitments.
                        </p>
                        <p>
                            To book your vehicle in for a mobile tyre repair, we recommend to give us a <a class="text-blue-600 underline" href="tel:07442980101">call</a>.
                            This is so we can ensure you are getting the right service for the tyre issues you are encountering.
                        </p>

                        <p class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.293 15.707a1 1 0 010-1.414L14.586 10l-4.293-4.293a1 1 0 111.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                <path fill-rule="evenodd" d="M4.293 15.707a1 1 0 010-1.414L8.586 10 4.293 5.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>Need mobile tyre services ASAP?, please call us on <a class="text-blue-600 underline" href="tel:07442980101">07442 980101</a></span>
                        </p>
                    </div>
                    <div class="col-span-5 lg:p-4">
                        <img
                            class="w-full object-cover"
                            src="/assets/images/pages/home/mobile-tyre-fitting-375.webp"
                            srcset="/assets/images/pages/home/mobile-tyre-fitting.webp 640w,
                                    /assets/images/pages/home/mobile-tyre-fitting-500.webp 500w,
                                    /assets/images/pages/home/mobile-tyre-fitting-375.webp 375w"
                            sizes="(max-width: 600px) 375px, (max-width: 768px) 500px, (max-width: 1024px) 640px, 500px"
                            alt="Tyres Anywhere technician doing a mobile tyre replacement"
                        >
                    </div>

                    <div class="col-span-12 lg:p-4">
                        <FAQ />
                    </div>
                </div>
            </div>
        </Content>
    </Container>


    <OurQualities />
</template>

<script setup>
import { Link, Head } from '@inertiajs/vue3'
import Container from '../Shared/Container.vue'
import Content from '../Shared/Content.vue'
import MainCarousel from '../Shared/Carousel/MainCarousel.vue'
import SearchTyre from '../Shared/SearchTyre.vue'
import OurServices from '../Shared/OurServices.vue'
import OurQualities from '../Shared/OurQualities.vue'
import FAQ from '../Shared/FAQ.vue'
import AreasWeCover from '../Shared/AreasWeCover/Main.vue'
</script>

<style scoped>

</style>
