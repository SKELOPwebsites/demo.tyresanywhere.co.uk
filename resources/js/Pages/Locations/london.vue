<template>
    <Head>
        <meta name="description" content="24/7 mobile tyre fitting in London. Fast on-site repairs and replacements at home, work, or roadside. Call 07442 980101 for immediate service across London.">
        <meta property="og:description" content="24/7 mobile tyre fitting in London. Fast on-site repairs and replacements at home, work, or roadside. Call 07442 980101 for immediate service across London." />
    </Head>
    <LocationFrame :location="location">
        <template v-slot:title>Welcome to <span class="text-wheelfit-300">Tyres Anywhere</span></template>
        <template v-slot:subtitle>London’s Fastest 24/7 Mobile Tyre Fitting – On-Site Service, Emergency Callouts, and Same-Day Tyre Replacements</template>

        <template v-slot:title1>Convenient, Reliable Tyre Services Across the Capital</template>
        <template v-slot:content1>
            <p>
                Tyres Anywhere is proud to offer London’s most reliable mobile tyre fitting service, delivering expert solutions directly to your door,
                whether you’re at <b class="font-semibold">home, work, or by the roadside</b>. As one of the busiest and most diverse cities in the world,
                London’s drivers face constant challenges, from congested streets to long commutes on the <b class="font-semibold">M25</b>.
                We’re here to make tyre care one less thing to worry about.
                Whether you’re in the heart of the city near landmarks like the Shard and Buckingham Palace,
                or further out in areas like <Link class="text-blue-600 underline" href="/locations/ealing">Ealing</Link>,
                <Link class="text-blue-600 underline" href="/locations/greenwich">Greenwich</Link>, or Wimbledon,
                our fleet of mobile tyre-fitting vans is ready to provide fast, professional service.
            </p>
            <p>
                Our fully equipped vans are like mobile garages, capable of fitting new tyres, repairing punctures,
                and performing tyre maintenance—all without you needing to visit a garage. With rapid response times,
                especially in central and high-traffic areas, <b class="font-semibold">we aim to reach you within 60 minutes</b>, ensuring you’re never left stranded.
            </p>
        </template>

        <template v-slot:title2>Why {{ location }} Drivers Choose Tyres Anywhere</template>
        <template v-slot:content2>
            <p class="mt-4">
                Londoners trust Tyres Anywhere for convenience, speed, and quality service. Here’s why we’re the top choice for mobile tyre fitting across the capital:
            </p>

            <div class="flex flex-col space-y-4 mt-6">
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">24/7 Availability:</span>
                        London is a city that never sleeps, and we’re available around the clock to handle your tyre emergencies.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Rapid Response Times:</span>
                        We aim to reach our customers across London in under 60 minutes, no matter where you are.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">On-Site Service:</span>
                        We bring the garage to you—whether you’re at home, at work, or on a busy street, we provide efficient on-site tyre fitting and repairs.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Certified Technicians:</span>
                        Our team of highly trained professionals ensures that your tyres are fitted or repaired to the highest standards.
                    </p>
                </div>
                <div class="flex space-x-2.5">
                    <svg class="w-5 h-5 fill-secondary-500 shrink-0" viewBox="0 0 8 8" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.41 0l-.69.72-2.78 2.78-.81-.78-.72-.72-1.41 1.41.72.72 1.5 1.5.69.72.72-.72 3.5-3.5.72-.72-1.44-1.41z" transform="translate(0 1)"></path>
                    </svg>
                    <p>
                        <span class="font-medium">Wide Range of Tyres:</span>
                        From premium to budget-friendly options, we stock a wide variety of tyres to suit every vehicle and price range.
                    </p>
                </div>
            </div>
        </template>

        <template v-slot:title3>Mobile Tyre Services in {{ location }}</template>
        <template v-slot:content3>

            <p class="mt-4">
                Tyres Anywhere offers a comprehensive range of mobile tyre services across London, tailored to meet the diverse needs of drivers in the city. From emergency callouts to scheduled maintenance, our services are designed for maximum convenience and efficiency.
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
                    London’s busy streets and heavy traffic mean drivers need a tyre service that comes to them. Our mobile tyre fitting vans cover the entire city, from the West End to the outer boroughs. Whether you’re parked near Big Ben, along Oxford Street, or by Canary Wharf, we’ll arrive with your new tyres and install them on-site. Our technicians ensure your tyres are fitted, balanced, and ready for the road without the hassle of visiting a garage.
                </li>
                <li>
                    <Link href="/mobile-tyre-repair" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Mobile Tyre Repair
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    With London’s bustling roads and high foot traffic, punctures are a common occurrence. Our mobile puncture repair service can come to you wherever you are in the city. Whether you’ve hit a pothole in Shoreditch or run over debris in South Kensington, we can assess the damage and, if possible, repair your tyre on the spot, saving you the cost of a replacement.
                </li>
                <li>
                    <Link href="/van-mobile-tyre-fitting" class="font-semibold text-lg flex items-center text-blue-800 underline">
                        Van Mobile Tyre Fitting
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 ml-1 mt-1">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </Link>
                    <br>
                    For businesses operating in London, downtime due to tyre issues can be costly. Our mobile tyre fitting service for vans and commercial vehicles ensures that your fleet stays operational with minimal disruption. We carry a wide selection of tyres suitable for vans, trucks, and other commercial vehicles, and our mobile team works quickly to reduce any delays.
                </li>
                <li>
                    <span class="font-semibold text-lg">24-Hour Emergency Callout</span>
                    <br><br>
                    Tyre issues don’t follow a 9-to-5 schedule, and neither do we. Our 24/7 emergency mobile tyre service ensures that London’s drivers are never left stranded, whether you’re on the M25, the A40, or in a quieter residential area like Richmond. From flat tyres to blowouts, we’ll be there quickly to get you back on the road.
                </li>
                <li>
                    <span class="font-semibold text-lg">Tyre Pressure Checks & Wheel Balancing</span>
                    <br><br>
                    Maintaining proper tyre pressure and ensuring that your wheels are correctly balanced is crucial for safe driving, particularly in a city like London where road conditions vary. As part of our mobile tyre service, we offer tyre pressure checks and wheel balancing to improve vehicle performance, increase fuel efficiency, and prolong tyre life.
                </li>
            </ol>
        </template>

        <template v-slot:title4>Serving {{ location }} & Surrounding Areas</template>
        <template v-slot:content4>
            <p class="mt-4">
                As one of the largest cities in the world, London is made up of diverse neighborhoods, each with its own unique character. Tyres Anywhere provides full coverage across all areas of London, ensuring drivers from all parts of the city can access fast, reliable tyre services. Our key service areas include:
            </p>

            <ul class="list-disc pl-5 space-y-6 mt-6">
                <li>
                    <span class="font-semibold text-lg">
                        Central London
                    </span>
                    <br>
                    We cover key central areas including the City of London, Westminster, and Covent Garden. Whether you're stuck near the London Eye or need assistance by Trafalgar Square, we’ll be there quickly to replace or repair your tyres.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        West London
                    </span>
                    <br>
                    From busy towns like Kensington and Chelsea to Hammersmith and Chiswick,
                    and quieter towns like <Link class="text-blue-600 underline" href="/locations/harrow">Harrow</Link>,
                    <Link class="text-blue-600 underline" href="/locations/heathrow">Heathrow</Link> and
                    <Link class="text-blue-600 underline" href="/locations/uxbridge">Uxbridge</Link>,
                    our mobile tyre vans serve drivers throughout West London,
                    offering fast service even in high-traffic areas.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        East London
                    </span>
                    <br>
                    Whether you’re in <Link class="text-blue-600 underline" href="/locations/stratford">Stratford</Link>,
                    <Link class="text-blue-600 underline" href="/locations/barking">Barking</Link> or
                    <Link class="text-blue-600 underline" href="/locations/ilford">Ilford</Link>,
                    we provide swift and reliable mobile tyre services to keep you moving through East London’s busy streets.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        South London
                    </span>
                    <br>
                    We cover popular areas like <Link class="text-blue-600 underline" href="/locations/brixton">Brixton</Link>, and
                    <Link class="text-blue-600 underline" href="/locations/croydon">Croydon</Link>,
                    ensuring that South London drivers have access to on-site tyre fitting and repairs.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        North London
                    </span>
                    <br>
                    From Camden to Islington and further out to <Link class="text-blue-600 underline" href="/locations/enfield">Enfield</Link>,
                    our mobile tyre vans are ready to serve North London drivers,
                    providing everything from puncture repairs to emergency callouts.
                </li>
                <li>
                    <span class="font-semibold text-lg">
                        Greater London & Surrounding Boroughs
                    </span>
                    <br>
                    We also extend our services to Greater London areas such as <Link class="text-blue-600 underline" href="/locations/richmond">Richmond</Link>, Kingston,
                    <Link class="text-blue-600 underline" href="/locations/ealing">Ealing</Link>, and beyond.
                    No matter where you are in the city, Tyres Anywhere has you covered.
                </li>
            </ul>
        </template>

        <template v-slot:title5>Common Tyre Problems We Fix in {{ location }}</template>
        <template v-slot:content5>
            <p>
                London’s complex road network, from cobblestone streets to high-speed motorways, creates a variety of tyre challenges. Here are some of the most common tyre problems we solve for London’s drivers:
            </p>
            <ol class="list-decimal pl-5 space-y-6 mt-6">
                <li>
                    Punctures from debris on congested roads or high foot-traffic areas
                </li>
                <li>
                    Blowouts due to prolonged driving at high speeds on the M25 or A406
                </li>
                <li>
                    Low tread depth from constant stop-and-go traffic, especially in wet conditions
                </li>
                <li>
                    Slow leaks caused by damage to valves or minor punctures
                </li>
                <li>
                    Uneven tyre wear from frequent braking or poor road surfaces
                </li>
            </ol>

            <p class="mt-6">
                At Tyres Anywhere, we handle all these issues and more, providing fast, on-site solutions to ensure that London’s drivers remain safe and mobile.
            </p>

            <p class="font-semibold mt-6">
                Supporting {{ location }}'s Diverse Community
            </p>

            <p class="mt-2">
                London is a vibrant, bustling city filled with commuters, tourists, and residents navigating the busy streets every day. At Tyres Anywhere, we take pride in supporting the city’s drivers with our fast and efficient mobile tyre services. From major business hubs like Canary Wharf to residential neighborhoods in Wimbledon, we ensure that drivers in all parts of London have access to reliable tyre care. Our commitment to convenience and quality means that London’s roads are safer and drivers can enjoy a smoother experience, wherever they’re headed.
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
