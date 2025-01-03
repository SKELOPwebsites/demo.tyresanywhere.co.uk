<template>
    <div class="flex flex-col lg:flex-row-reverse gap-8 bg-white rounded-xl shadow-md p-8 sm:p-12">
        <div class="flex-1 font-rubik">

            <div v-if="!location">
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-6">There is always a tyre expert near you</h2>
                <p class="text-sm sm:text-base font-light text-gray-700">
                    Our experienced tyre fitters operate nationwide. 
                    Whether you're in 
                    <Link href="/locations/london" class="underline">London</Link>,
                    <Link href="/locations/oxford" class="underline">Oxford</Link>,
                    <Link href="/locations/reading" class="underline">Reading</Link>,
                    or 
                    <Link href="/locations/high-wycombe" class="underline">High Wycombe</Link>,
                    we're here to provide fast, reliable service at home, work, or roadside.
                    Don't wait—enter your postcode to see if we're in your area.            
                </p>
            </div>

            <div v-else>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-6">How quickly can we reach you in {{ location }}?</h2>
                <p class="text-sm sm:text-base font-light text-gray-700">
                    Based in {{ location }}? Our mobile tyre experts are already nearby, 
                    ready to assist with fast and reliable service. 
                    Whether you need a quick puncture fix, a new tyre fitting, 
                    or emergency roadside help, we've got you covered in {{ location }} and the surrounding areas.
                </p>
            </div>

        </div>
    
        <!-- CTA Buttons -->
        <div class="flex flex-col flex-none w-full lg:w-1/3 items-center justify-center gap-4 z-10">
            <div class="flex flex-col w-full">
                <p class="text-sm sm:text-base text-gray-800 mb-1 font-semibold">Check Availability</p>

                <div class="relative">
                    <!-- Input Postcode -->
                    <input
                        v-model="postcode"
                        type="text"
                        placeholder="Enter your postcode"
                        autocomplete="postal-code"
                        class="text-sm sm:text-base rounded-lg w-full py-4 pl-4 pr-20 border border-gray-300 shadow-sm focus:outline-none focus:ring-1 focus:ring-wheelfit-300"
                    >
                    <button 
                        @click="checkPostcode"
                        class="flex items-center justify-center absolute top-0 right-0 h-full w-16 bg-wheelfit-300 text-white rounded-r-lg shadow-md hover:bg-wheelfit-400 transition duration-300"
                    >
                        <svg v-if="!loading" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 513.749 513.749"><g><path d="M504.352,459.061l-99.435-99.477c74.402-99.427,54.115-240.344-45.312-314.746S119.261-9.277,44.859,90.15   S-9.256,330.494,90.171,404.896c79.868,59.766,189.565,59.766,269.434,0l99.477,99.477c12.501,12.501,32.769,12.501,45.269,0   c12.501-12.501,12.501-32.769,0-45.269L504.352,459.061z M225.717,385.696c-88.366,0-160-71.634-160-160s71.634-160,160-160   s160,71.634,160,160C385.623,314.022,314.044,385.602,225.717,385.696z"/></g></svg>
                        <span v-else class="loader"></span>
                    </button>
                </div>

                <!-- Error Message -->
                <div v-if="error" class="text-red-500 mt-2">{{ error }}</div>

            </div>

            <div class="font-medium text-sm sm:text-base">or</div>

            <div class="flex items-center gap-3 w-full">
                <a href="tel:07442980101" class="text-sm sm:text-base w-full bg-wheelfit-300 text-white inline-flex items-center justify-center py-4 font-bold px-6 rounded-full shadow-lg transition duration-300 hover:bg-wheelfit-400 hover:scale-105">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M21.384,17.752a2.108,2.108,0,0,1-.522,3.359,7.543,7.543,0,0,1-5.476.642C10.5,20.523,3.477,13.5,2.247,8.614a7.543,7.543,0,0,1,.642-5.476,2.108,2.108,0,0,1,3.359-.522L8.333,4.7a2.094,2.094,0,0,1,.445,2.328A3.877,3.877,0,0,1,8,8.2c-2.384,2.384,5.417,10.185,7.8,7.8a3.877,3.877,0,0,1,1.173-.781,2.092,2.092,0,0,1,2.328.445Z"/></svg>
                    Call Us Now
                </a>
            </div>
            
        </div>

        <!-- Modal -->
        <div 
            v-if="showModal"
            class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50"
        >
            <div class="bg-white rounded-lg m-4 shadow-lg max-w-lg w-full font-rubik">

                <!-- Close Button -->
                <button @click="closeModal" class="pt-3 pr-3 w-full flex justify-end text-gray-600 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7">
                        <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                </button>

                <div class="pt-4 pb-8 px-6 sm:px-12">

                    <!-- Service Availability -->
                    <h2 class="text-3xl font-semibold">
                        Great News!
                    </h2>
                    <p v-if="!location" class="text-gray-700 font-light mb-3">
                        Our tyre experts are available in <span class="font-medium text-gray-800">{{ city }}</span> and nearby areas. 
                    </p>
                    <p v-else class="text-gray-700 font-light mb-6">
                        We have drivers nearby and ready to assist you in <span class="font-medium text-gray-800">{{ city }} ({{ postcode.toUpperCase() }}).</span>
                    </p>


                    <!-- Driver Available -->
                    <div class="flex items-start gap-3 mt-6 mb-2">
                        <div class="relative flex items-center justify-center pt-2">
                            <span class="h-4 w-4 bg-green-500 rounded-full animate-ping absolute"></span>
                            <span class="h-3 w-3 bg-green-500 bg-opacity-70 rounded-full relative"></span>
                        </div>

                        <p class="text-lg sm:text-xl font-semibold">{{ availability }}</p>
                    </div>

                    <!-- Estimated Time -->
                    <div class="bg-gray-100 p-4 rounded-xl flex justify-between">
                        <p class="font-medium">
                            Estimated time to reach you
                        </p>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 512 512"><path d="M256 73.825c-100.617 0-182.18 81.562-182.18 182.17a182.18 182.18 0 1 0 364.36 0c0-100.608-81.563-182.17-182.18-182.17zm79.558 249.213a15.729 15.729 0 0 1-21.462 5.96l-65.848-37.24c-.176-.096-.317-.238-.492-.343a14.239 14.239 0 0 1-1.337-.949c-.404-.307-.79-.615-1.16-.958a13.216 13.216 0 0 1-1.018-1.09 15.767 15.767 0 0 1-.994-1.186c-.29-.413-.545-.853-.8-1.284a14.547 14.547 0 0 1-.712-1.31 13.89 13.89 0 0 1-.553-1.459 13.4 13.4 0 0 1-.449-1.414 16.386 16.386 0 0 1-.254-1.486 12.73 12.73 0 0 1-.168-1.635c-.008-.202-.06-.396-.06-.597V149.428a15.75 15.75 0 0 1 31.5 0v119.435l57.848 32.712a15.742 15.742 0 0 1 5.96 21.463z" data-name="Time 4 O'clock"/></svg>
                            <p>{{ estimatedTime }}</p>
                        </div>
                    </div>

                    <!-- Map  -->
                    <div v-if="showMap && locationData?.latitude && locationData?.longitude" class="h-64 w-full mt-4">
                        <img
                            :src="`https://static-maps.yandex.ru/1.x/?ll=${locationData.longitude},${locationData.latitude}&spn=0.02,0.02&l=map&scale=1.5&size=600,300&lang=en_GB&pt=${locationData.longitude},${locationData.latitude},vkbkm`"
                            alt="Map showing location"
                            class="w-full h-full rounded-2xl shadow-lg object-cover"
                        >
                    </div>

                    <!-- Call Us -->
                    <div class="flex items-center justify-center gap-3 mt-4 w-full mb-4">
                        <a href="tel:07442980101" class="w-full text-lg bg-gray-800 text-white font-semibold inline-flex items-center justify-center py-4 px-6 rounded-full shadow-lg transition duration-300 hover:bg-gray-900 hover:scale-105">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M21.384,17.752a2.108,2.108,0,0,1-.522,3.359,7.543,7.543,0,0,1-5.476.642C10.5,20.523,3.477,13.5,2.247,8.614a7.543,7.543,0,0,1,.642-5.476,2.108,2.108,0,0,1,3.359-.522L8.333,4.7a2.094,2.094,0,0,1,.445,2.328A3.877,3.877,0,0,1,8,8.2c-2.384,2.384,5.417,10.185,7.8,7.8a3.877,3.877,0,0,1,1.173-.781,2.092,2.092,0,0,1,2.328.445Z"/></svg>
                            Call Us Now
                        </a>
                    </div>

                    <!-- Redirect to location page -->
                    <p v-if="redirectUrl" class="font-light text-gray-700 mt-10 text-center">
                        <i>Redirecting you to our 
                            <a 
                                :href="redirectUrl" 
                                class="underline text-blue-500 hover:text-blue-700"
                            >
                                {{ redirectCity }}
                            </a> page<span class="dots"></span>
                        </i>              
                    </p>
                    
                </div>

                
            </div>
        </div>
    </div>

</template>

<script setup>
import { ref } from 'vue';
import { Link } from "@inertiajs/vue3"

const loading = ref(false);

const postcode = ref('');
const city = ref('');
const redirectCity = ref('');
const estimatedTime = ref('');
const availability = ref('');

const locationData = ref(null);
const redirectUrl = ref(null);
const error = ref(null);
const showModal = ref(false);
const showMap = ref(false);

async function checkPostcode() {
    // Basic validation to ensure non-empty input
    if (!postcode.value.trim()) {
        error.value = 'Please enter a valid postcode.';
        return;
    }

    try {
        error.value = null; // Reset error
        loading.value = true; // Start loading
        const response = await fetch(`/api/postcode-info?postcode=${postcode.value}`);
        const data = await response.json();

        if (data.valid) {
            locationData.value = data; // Store the full API response

            city.value = cityOverrides[data.codes.admin_ward] || data.city;
            
            showMap.value = true;

            // Determine target slug/URL using fallbacks
            const citySlug = city.value.trim().toLowerCase().replace(/\s+/g, '-');

            let targetSlug = null;
            let targetUrl = locationPages[citySlug]?.url || null;

            if (!targetUrl) {
                const adminDistrict = data.admin_district || null;

                if(adminDistrict) {
                    const adminDistrictSlug = adminDistrict ? adminDistrict.trim().toLowerCase().replace(/\s+/g, '-') : null;
                    targetUrl = locationPages[adminDistrictSlug]?.url || null;

                    if(!targetUrl) {
                        const region = data.region || null;

                        if (region){
                            const regionSlug = region ? region.trim().toLowerCase().replace(/\s+/g, '-') : null;
                            targetSlug = regionSlug;
                            targetUrl = locationPages[regionSlug]?.url || null;
                        }

                    } else{
                        targetSlug = adminDistrictSlug;
                    }
                }
                
            } else {
                targetSlug = citySlug;
            }

            

            // If a page exits, check if already on page
            if(targetUrl != null){
                const currentPath = window.location.pathname;
                const targetPath = new URL(targetUrl).pathname;

                if(!currentPath.includes(targetPath)){

                    redirectCity.value = targetSlug
                        .replace(/-/g, ' ') // Replace dashes with spaces
                        .replace(/\b\w/g, char => char.toUpperCase()); // Capitalize words

                    redirectUrl.value = targetUrl;
                    setTimeout(() => redirectToCityPage(), 7500); // Redirect after delay
                }

            } else {
                redirectCity.value = null;
                redirectUrl.value = null;
            }

            estimatedTime.value = getEstimatedTime(targetSlug);
            availability.value = getAvailability(targetSlug);

            const minDelay = 1000; // Minimum delay 
            const maxDelay = 3000; // Maximum delay
            const randomDelay = Math.random() * (maxDelay - minDelay) + minDelay;

            setTimeout(() => {
                loading.value = false;
                showModal.value = true; 
            }, randomDelay); // Simulate a loading delay

        } else {
            error.value = data.error || 'No information available for this postcode.';
            locationData.value = null;
            city.value = '';
            loading.value = false; // Stop loading
        }
    } catch (err) {
        error.value = 'An error occurred while checking the postcode.';
        locationData.value = null;
        city.value = '';
        loading.value = false; // Stop loading
    }
}

function getEstimatedTime(citySlug){
    const location = locationPages[citySlug];

    if (location && location.zone) {
        if (location.zone === "zone1") {
            return "15-30 minutes";
        } else if (location.zone === "zone2") {
            return "30-45 minutes";
        }
    }

    // Default to Zone 3 (45-60 minutes)
    return "45-60 minutes";
}

function getAvailability(citySlug){
    const location = locationPages[citySlug];

    if (location && location.zone) {
        if (location.zone === "zone1") {
            return "Multiple drivers available nearby";
        } 
    }

    // Default availability
    return "A driver is currently available near you";
}

function redirectToCityPage() {
    if (redirectUrl.value) {
        console.log(`TESTING: Redirected to: ${redirectUrl.value}`);

        window.location.href = redirectUrl.value;
    }
}

function closeModal() {
  showModal.value = false;
}

defineProps({
    location: {
        type: String,
        required: false,
        default: null,
    },
}) 

const cityOverrides = {
    // use admin_ward to override cities if needed
    "E05013120": "High Wycombe",
};

const locationPages = {
    "abergavenny": { url: "https://tyresanywhere.co.uk/locations/abergavenny", zone: "zone3" },
    "abingdon": { url: "https://tyresanywhere.co.uk/locations/abingdon", zone: "zone2" },
    "addlestone": { url: "https://tyresanywhere.co.uk/locations/addlestone", zone: "zone2" },
    "aldershot": { url: "https://tyresanywhere.co.uk/locations/aldershot", zone: "zone2" },
    "amersham": { url: "https://tyresanywhere.co.uk/locations/amersham", zone: "zone1" },
    "ashford": { url: "https://tyresanywhere.co.uk/locations/ashford", zone: "zone3" },
    "atherstone": { url: "https://tyresanywhere.co.uk/locations/atherstone", zone: "zone3" },
    "aylesbury": { url: "https://tyresanywhere.co.uk/locations/aylesbury", zone: "zone1" },
    "bagshot": { url: "https://tyresanywhere.co.uk/locations/bagshot", zone: "zone2" },
    "baldock": { url: "https://tyresanywhere.co.uk/locations/baldock", zone: "zone3" },
    "banbury": { url: "https://tyresanywhere.co.uk/locations/banbury", zone: "zone2" },
    "barking": { url: "https://tyresanywhere.co.uk/locations/barking", zone: "zone3" },
    "basingstoke": { url: "https://tyresanywhere.co.uk/locations/basingstoke", zone: "zone2" },
    "bexleyheath": { url: "https://tyresanywhere.co.uk/locations/bexleyheath", zone: "zone3" },
    "bicester": { url: "https://tyresanywhere.co.uk/locations/bicester", zone: "zone2" },
    "birmingham": { url: "https://tyresanywhere.co.uk/locations/birmingham", zone: "zone3" },
    "borehamwood": { url: "https://tyresanywhere.co.uk/locations/borehamwood", zone: "zone2" },
    "bourne-end": { url: "https://tyresanywhere.co.uk/locations/bourne-end", zone: "zone1" },
    "brackley": { url: "https://tyresanywhere.co.uk/locations/brackley", zone: "zone2" },
    "bracknell": { url: "https://tyresanywhere.co.uk/locations/bracknell", zone: "zone2" },
    "brixton": { url: "https://tyresanywhere.co.uk/locations/brixton", zone: "zone3" },
    "buckingham": { url: "https://tyresanywhere.co.uk/locations/buckingham", zone: "zone2" },
    "camberley": { url: "https://tyresanywhere.co.uk/locations/camberley", zone: "zone2" },
    "cambridge": { url: "https://tyresanywhere.co.uk/locations/cambridge", zone: "zone3" },
    "cheltenham": { url: "https://tyresanywhere.co.uk/locations/cheltenham", zone: "zone3" },
    "chesham": { url: "https://tyresanywhere.co.uk/locations/chesham", zone: "zone1" },
    "chertsey": { url: "https://tyresanywhere.co.uk/locations/chertsey", zone: "zone2" },
    "chipping-norton": { url: "https://tyresanywhere.co.uk/locations/chipping-norton", zone: "zone2" },
    "coventry": { url: "https://tyresanywhere.co.uk/locations/coventry", zone: "zone3" },
    "crawley": { url: "https://tyresanywhere.co.uk/locations/crawley", zone: "zone3" },
    "croydon": { url: "https://tyresanywhere.co.uk/locations/croydon", zone: "zone3" },
    "dartford": { url: "https://tyresanywhere.co.uk/locations/dartford", zone: "zone3" },
    "didcot": { url: "https://tyresanywhere.co.uk/locations/didcot", zone: "zone2" },
    "dunstable": { url: "https://tyresanywhere.co.uk/locations/dunstable", zone: "zone2" },
    "ealing": { url: "https://tyresanywhere.co.uk/locations/ealing", zone: "zone2" },
    "edgware": { url: "https://tyresanywhere.co.uk/locations/edgware", zone: "zone2" },
    "enfield": { url: "https://tyresanywhere.co.uk/locations/enfield", zone: "zone3" },
    "epsom": { url: "https://tyresanywhere.co.uk/locations/epsom", zone: "zone2" },
    "feltham": { url: "https://tyresanywhere.co.uk/locations/feltham", zone: "zone2" },
    "flackwell-heath": { url: "https://tyresanywhere.co.uk/locations/flackwell-heath", zone: "zone1" },
    "gerrards-cross": { url: "https://tyresanywhere.co.uk/locations/gerrards-cross", zone: "zone1" },
    "greenford": { url: "https://tyresanywhere.co.uk/locations/greenford", zone: "zone2" },
    "greenwich": { url: "https://tyresanywhere.co.uk/locations/greenwich", zone: "zone3" },
    "guildford": { url: "https://tyresanywhere.co.uk/locations/guildford", zone: "zone2" },
    "harrow": { url: "https://tyresanywhere.co.uk/locations/harrow", zone: "zone2" },
    "hayes": { url: "https://tyresanywhere.co.uk/locations/hayes", zone: "zone2" },
    "heathrow": { url: "https://tyresanywhere.co.uk/locations/heathrow", zone: "zone2" },
    "henley-on-thames": { url: "https://tyresanywhere.co.uk/locations/henley-on-thames", zone: "zone2" },
    "high-wycombe": { url: "https://tyresanywhere.co.uk/locations/high-wycombe", zone: "zone1" },
    "hounslow": { url: "https://tyresanywhere.co.uk/locations/hounslow", zone: "zone2" },
    "ilford": { url: "https://tyresanywhere.co.uk/locations/ilford", zone: "zone3" },
    "ipswich": { url: "https://tyresanywhere.co.uk/locations/ipswich", zone: "zone3" },
    "isleworth": { url: "https://tyresanywhere.co.uk/locations/isleworth", zone: "zone2" },
    "kidderminster": { url: "https://tyresanywhere.co.uk/locations/kidderminster", zone: "zone3" },
    "kidlington": { url: "https://tyresanywhere.co.uk/locations/kidlington", zone: "zone2" },
    "leeds": { url: "https://tyresanywhere.co.uk/locations/leeds", zone: "zone3" },
    "leicester": { url: "https://tyresanywhere.co.uk/locations/leicester", zone: "zone3" },
    "leighton-buzzard": { url: "https://tyresanywhere.co.uk/locations/leighton-buzzard", zone: "zone2" },
    "liverpool": { url: "https://tyresanywhere.co.uk/locations/liverpool", zone: "zone3" },
    "london": { url: "https://tyresanywhere.co.uk/locations/london", zone: "zone3" },
    "loudwater": { url: "https://tyresanywhere.co.uk/locations/loudwater", zone: "zone1" },
    "luton": { url: "https://tyresanywhere.co.uk/locations/luton", zone: "zone2" },
    "maidenhead": { url: "https://tyresanywhere.co.uk/locations/maidenhead", zone: "zone1" },
    "manchester": { url: "https://tyresanywhere.co.uk/locations/manchester", zone: "zone3" },
    "marlow": { url: "https://tyresanywhere.co.uk/locations/marlow", zone: "zone1" },
    "milton-keynes": { url: "https://tyresanywhere.co.uk/locations/milton-keynes", zone: "zone2" },
    "mitcham": { url: "https://tyresanywhere.co.uk/locations/mitcham", zone: "zone3" },
    "northampton": { url: "https://tyresanywhere.co.uk/locations/northampton", zone: "zone3" },
    "oxford": { url: "https://tyresanywhere.co.uk/locations/oxford", zone: "zone2" },
    "peckham": { url: "https://tyresanywhere.co.uk/locations/peckham", zone: "zone3" },
    "peterborough": { url: "https://tyresanywhere.co.uk/locations/peterborough", zone: "zone3" },
    "pinner": { url: "https://tyresanywhere.co.uk/locations/pinner", zone: "zone2" },
    "potters-bar": { url: "https://tyresanywhere.co.uk/locations/potters-bar", zone: "zone3" },
    "princes-risborough": { url: "https://tyresanywhere.co.uk/locations/princes-risborough", zone: "zone1" },
    "reading": { url: "https://tyresanywhere.co.uk/locations/reading", zone: "zone2" },
    "richmond": { url: "https://tyresanywhere.co.uk/locations/richmond", zone: "zone2" },
    "romford": { url: "https://tyresanywhere.co.uk/locations/romford", zone: "zone3" },
    "royal-leamington-spa": { url: "https://tyresanywhere.co.uk/locations/royal-leamington-spa", zone: "zone3" },
    "ruislip": { url: "https://tyresanywhere.co.uk/locations/ruislip", zone: "zone2" },
    "sheffield": { url: "https://tyresanywhere.co.uk/locations/sheffield", zone: "zone3" },
    "slough": { url: "https://tyresanywhere.co.uk/locations/slough", zone: "zone1" },
    "solihull": { url: "https://tyresanywhere.co.uk/locations/solihull", zone: "zone3" },
    "southall": { url: "https://tyresanywhere.co.uk/locations/southall", zone: "zone2" },
    "st-albans": { url: "https://tyresanywhere.co.uk/locations/st-albans", zone: "zone2" },
    "staines-upon-thames": { url: "https://tyresanywhere.co.uk/locations/staines-upon-thames", zone: "zone2" },
    "stanmore": { url: "https://tyresanywhere.co.uk/locations/stanmore", zone: "zone2" },
    "stoke-on-trent": { url: "https://tyresanywhere.co.uk/locations/stoke-on-trent", zone: "zone3" },
    "stourbridge": { url: "https://tyresanywhere.co.uk/locations/stourbridge", zone: "zone3" },
    "stratford": { url: "https://tyresanywhere.co.uk/locations/stratford", zone: "zone3" },
    "sutton": { url: "https://tyresanywhere.co.uk/locations/sutton", zone: "zone3" },
    "swindon": { url: "https://tyresanywhere.co.uk/locations/swindon", zone: "zone3" },
    "thame": { url: "https://tyresanywhere.co.uk/locations/thame", zone: "zone2" },
    "tottenham": { url: "https://tyresanywhere.co.uk/locations/tottenham", zone: "zone3" },
    "tring": { url: "https://tyresanywhere.co.uk/locations/tring", zone: "zone2" },
    "uxbridge": { url: "https://tyresanywhere.co.uk/locations/uxbridge", zone: "zone1" },
    "wailingford": { url: "https://tyresanywhere.co.uk/locations/wailingford", zone: "zone3" },
    "walsall": { url: "https://tyresanywhere.co.uk/locations/walsall", zone: "zone3" },
    "warwick": { url: "https://tyresanywhere.co.uk/locations/warwick", zone: "zone3" },
    "watford": { url: "https://tyresanywhere.co.uk/locations/watford", zone: "zone2" },
    "watlington": { url: "https://tyresanywhere.co.uk/locations/watlington", zone: "zone2" },
    "wembley": { url: "https://tyresanywhere.co.uk/locations/wembley", zone: "zone2" },
    "west-drayton": { url: "https://tyresanywhere.co.uk/locations/west-drayton", zone: "zone2" },
    "wheatley": { url: "https://tyresanywhere.co.uk/locations/wheatley", zone: "zone2" },
    "windsor": { url: "https://tyresanywhere.co.uk/locations/windsor", zone: "zone1" },
    "witney": { url: "https://tyresanywhere.co.uk/locations/witney", zone: "zone2" },
    "wolverhampton": { url: "https://tyresanywhere.co.uk/locations/wolverhampton", zone: "zone3" },
    "worcester": { url: "https://tyresanywhere.co.uk/locations/worcester", zone: "zone3" }
};

</script>
    
<style scoped>
.loader {
    border: 2px solid #f3f3f3;
    border-top: 2px solid #3498db;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}


@keyframes ping {
    0% {
        transform: scale(1);
        opacity: 1;
    }
    75%,
    100% {
        transform: scale(2);
        opacity: 0;
    }
}

.dots::after {
  content: "";
  animation: dots-animation 1.5s linear infinite;
}

@keyframes dots-animation {
  0% {
    content: "";
  }
  25% {
    content: ".";
  }
  50% {
    content: "..";
  }
  75% {
    content: "...";
  }
  100% {
    content: "";
  }
}

.fixed{
    z-index: 9999;
}

</style>