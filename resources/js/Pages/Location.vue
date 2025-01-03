<template>
    <Head>
        <title>Mobile Tyre Fitting in {{ location }} | Tyres Anywhere</title>
        <link rel="canonical" :href="'https://tyresanywhere.co.uk/locations/'+slug">

        <meta property="og:title" :content="`Mobile Tyre Fitting in ${location}`" />
        <meta property="og:type" content="website" />
        <meta property="og:url" :content="'https://tyresanywhere.co.uk/locations/'+slug" />
        <meta property="og:image" content="https://tyresanywhere.co.uk/assets/images/showcase/gallary/mobile-tyre-fitting-1.webp" />
        <meta property="og:site_name" content="Tyres Anywhere" />
    </Head>

    <Hero :location="location"/>

    <Container>
        
        <Reviews />

        <OurServices />

        <div class="pt-20">
            <FAQ />
        </div>

        <div class="mt-20">
            <SearchTyre />
        </div>

        <AreasWeCover :location="location"/>

    </Container>

    <div class="relative bg-[#E3E9F1] sm:mt-20">
        <div class="custom-shape-divider-top-1735170425">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>

        <Container>
            <Content>
                <component :is="currentLocation" :location="location"/>
            </Content>
        </Container>

        <div class="custom-shape-divider-bottom-1735171033">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </div>
    
    <OurQualities />
</template>

<script setup>
import {Link, Head, usePage} from '@inertiajs/vue3'
import Container from '../Shared/Container.vue'
import Content from '../Shared/Content.vue'
import SearchTyre from '../Shared/SearchTyre.vue'
import OurServices from '../Shared/OurServices.vue'
import OurQualities from '../Shared/OurQualities.vue'
import FAQ from '../Shared/FAQ.vue'
import Hero from '../Shared/Hero.vue'
import { onMounted, onBeforeUnmount, defineAsyncComponent } from "vue";
import AreasWeCover from '../Shared/AreasWeCover/Location.vue'
import Reviews from '../Shared/Reviews.vue'

const props = defineProps({
    location: String,
    slug: String,
})

// Dynamically load the location component based on the slug
const currentLocation = defineAsyncComponent(() =>
    import(`./Locations/${props.slug}.vue`)
)

// Dynamically create JSON-LD file for each location
function injectJSONLD(location, slug) {
    const locationInfo = locationData[slug];

    if (!locationInfo) {
        console.warn(`No location data found for slug: ${slug}`);
        return null;
    }

    const script = document.createElement('script');
    script.type = 'application/ld+json';

    script.text = JSON.stringify({
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": `Tyres Anywhere - ${location}`,
        "image": "https://tyresanywhere.co.uk/assets/images/showcase/gallary/mobile-tyre-fitting-3.webp",
        "url": `https://tyresanywhere.co.uk/locations/${slug}`,
        "telephone": "+44 7442 980101",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": location,
            "addressRegion": locationInfo.addressRegion,
            "addressCountry": "GB"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": locationInfo.latitude,
            "longitude": locationInfo.longitude
        },
        "openingHours": "Mo-Su 00:00-23:59",
        "priceRange": "$",
        "serviceArea": {
            "@type": "Place",
            "name": `${locationInfo.serviceArea} and surrounding areas`
        }
    });

    document.head.appendChild(script);
    return script;
}

// Inject and cleanup JSON-LD
let scriptElement;

onMounted(() => {
    scriptElement = injectJSONLD(props.location, props.slug);
});

onBeforeUnmount(() => {
    if (scriptElement) {
        document.head.removeChild(scriptElement);
    }
});

const locationData = {
  "abergavenny": {
    "addressRegion": "Monmouthshire",
    "latitude": "51.8241",
    "longitude": "-3.0181",
    "serviceArea": "Abergavenny, Brecon, Crickhowell"
  },
  "abingdon": {
    "addressRegion": "Oxfordshire",
    "latitude": "51.6711",
    "longitude": "-1.2828",
    "serviceArea": "Abingdon, Didcot, Wantage"
  },
  "addlestone": {
    "addressRegion": "Surrey",
    "latitude": "51.3711",
    "longitude": "-0.4919",
    "serviceArea": "Addlestone, Weybridge, Chertsey"
  },
  "aldershot": {
    "addressRegion": "Hampshire",
    "latitude": "51.2481",
    "longitude": "-0.758",
    "serviceArea": "Aldershot, Farnborough, Fleet"
  },
  "amersham": {
    "addressRegion": "Buckinghamshire",
    "latitude": "51.6741",
    "longitude": "-0.607",
    "serviceArea": "Amersham, Chesham, High Wycombe"
  },
  "ashford": {
    "addressRegion": "Kent",
    "latitude": "51.1485",
    "longitude": "0.8701",
    "serviceArea": "Ashford, Canterbury, Maidstone"
  },
  "atherstone": {
    "addressRegion": "Warwickshire",
    "latitude": "52.5748",
    "longitude": "-1.5473",
    "serviceArea": "Atherstone, Nuneaton, Tamworth"
  },
  "aylesbury": {
    "addressRegion": "Buckinghamshire",
    "latitude": "51.8156",
    "longitude": "-0.8084",
    "serviceArea": "Aylesbury, Tring, Wendover"
  },
  "bagshot": {
    "addressRegion": "Surrey",
    "latitude": "51.3639",
    "longitude": "-0.6884",
    "serviceArea": "Bagshot, Camberley, Lightwater"
  },
  "baldock": {
    "addressRegion": "Hertfordshire",
    "latitude": "51.9896",
    "longitude": "-0.188",
    "serviceArea": "Baldock, Letchworth, Hitchin"
  },
  "banbury": {
    "addressRegion": "Oxfordshire",
    "latitude": "52.0629",
    "longitude": "-1.3398",
    "serviceArea": "Banbury, Bicester, Brackley"
  },
  "barking": {
    "addressRegion": "Greater London",
    "latitude": "51.5405",
    "longitude": "0.0803",
    "serviceArea": "Barking, Dagenham, Ilford"
  },
  "basingstoke": {
    "addressRegion": "Hampshire",
    "latitude": "51.2665",
    "longitude": "-1.0924",
    "serviceArea": "Basingstoke, Hook, Tadley"
  },
  "bexleyheath": {
    "addressRegion": "Greater London",
    "latitude": "51.456",
    "longitude": "0.1472",
    "serviceArea": "Bexleyheath, Sidcup, Welling"
  },
  "bicester": {
    "addressRegion": "Oxfordshire",
    "latitude": "51.8986",
    "longitude": "-1.1521",
    "serviceArea": "Bicester, Banbury, Kidlington"
  },
  "birmingham": {
    "addressRegion": "West Midlands",
    "latitude": "52.4862",
    "longitude": "-1.8904",
    "serviceArea": "Birmingham, Solihull, Sutton Coldfield"
  },
  "borehamwood": {
    "addressRegion": "Hertfordshire",
    "latitude": "51.6545",
    "longitude": "-0.2775",
    "serviceArea": "Borehamwood, Elstree, Barnet"
  },
  "bourne-end": {
    "addressRegion": "Buckinghamshire",
    "latitude": "51.5773",
    "longitude": "-0.7094",
    "serviceArea": "Bourne End, Marlow, Cookham"
  },
  "brackley": {
    "addressRegion": "Northamptonshire",
    "latitude": "52.0309",
    "longitude": "-1.1491",
    "serviceArea": "Brackley, Banbury, Towcester"
  },
  "bracknell": {
    "addressRegion": "Berkshire",
    "latitude": "51.416",
    "longitude": "-0.7539",
    "serviceArea": "Bracknell, Wokingham, Ascot"
  },
  "brixton": {
    "addressRegion": "Greater London",
    "latitude": "51.4613",
    "longitude": "-0.1157",
    "serviceArea": "Brixton, Clapham, Stockwell"
  },
  "buckingham": {
    "addressRegion": "Buckinghamshire",
    "latitude": "51.9956",
    "longitude": "-0.9867",
    "serviceArea": "Buckingham, Winslow, Brackley"
  },
  "camberley": {
    "addressRegion": "Surrey",
    "latitude": "51.3402",
    "longitude": "-0.7412",
    "serviceArea": "Camberley, Frimley, Bagshot"
  },
  "cambridge": {
    "addressRegion": "Cambridgeshire",
    "latitude": "52.2053",
    "longitude": "0.1218",
    "serviceArea": "Cambridge, St Neots, Ely"
  },
  "cheltenham": {
    "addressRegion": "Gloucestershire",
    "latitude": "51.8994",
    "longitude": "-2.0783",
    "serviceArea": "Cheltenham, Gloucester, Tewkesbury"
  },
  "chesham": {
    "addressRegion": "Buckinghamshire",
    "latitude": "51.7046",
    "longitude": "-0.6118",
    "serviceArea": "Chesham, Amersham, Berkhamsted"
  },
  "chertsey": {
    "addressRegion": "Surrey",
    "latitude": "51.3874",
    "longitude": "-0.5076",
    "serviceArea": "Chertsey, Addlestone, Weybridge"
  },
  "chipping-norton": {
    "addressRegion": "Oxfordshire",
    "latitude": "51.9417",
    "longitude": "-1.5441",
    "serviceArea": "Chipping Norton, Burford, Charlbury"
  },
  "coventry": {
    "addressRegion": "West Midlands",
    "latitude": "52.4068",
    "longitude": "-1.5197",
    "serviceArea": "Coventry, Leamington Spa, Kenilworth"
  },
  "crawley": {
    "addressRegion": "West Sussex",
    "latitude": "51.1091",
    "longitude": "-0.1872",
    "serviceArea": "Crawley, Gatwick, Horsham"
  },
  "croydon": {
    "addressRegion": "Greater London",
    "latitude": "51.3762",
    "longitude": "-0.0982",
    "serviceArea": "Croydon, Purley, South Norwood"
  },
  "dartford": {
    "addressRegion": "Kent",
    "latitude": "51.4462",
    "longitude": "0.2169",
    "serviceArea": "Dartford, Gravesend, Bexleyheath"
  },
  "didcot": {
    "addressRegion": "Oxfordshire",
    "latitude": "51.6062",
    "longitude": "-1.2434",
    "serviceArea": "Didcot, Abingdon, Wallingford"
  },
  "dunstable": {
    "addressRegion": "Bedfordshire",
    "latitude": "51.8862",
    "longitude": "-0.5189",
    "serviceArea": "Dunstable, Luton, Leighton Buzzard"
  },
  "ealing": {
    "addressRegion": "Greater London",
    "latitude": "51.5138",
    "longitude": "-0.3043",
    "serviceArea": "Ealing, Acton, Greenford"
  },
  "edgware": {
    "addressRegion": "Greater London",
    "latitude": "51.6131",
    "longitude": "-0.2752",
    "serviceArea": "Edgware, Stanmore, Mill Hill"
  },
  "enfield": {
    "addressRegion": "Greater London",
    "latitude": "51.6521",
    "longitude": "-0.0815",
    "serviceArea": "Enfield, Cheshunt, Waltham Cross"
  },
  "epsom": {
    "addressRegion": "Surrey",
    "latitude": "51.3305",
    "longitude": "-0.2701",
    "serviceArea": "Epsom, Ewell, Banstead"
  },
  "feltham": {
    "addressRegion": "Greater London",
    "latitude": "51.4455",
    "longitude": "-0.4092",
    "serviceArea": "Feltham, Hounslow, Ashford"
  },
  "flackwell-heath": {
    "addressRegion": "Buckinghamshire",
    "latitude": "51.6049",
    "longitude": "-0.6957",
    "serviceArea": "Flackwell Heath, High Wycombe, Bourne End"
  },
  "gerrards-cross": {
    "addressRegion": "Buckinghamshire",
    "latitude": "51.5885",
    "longitude": "-0.5554",
    "serviceArea": "Gerrards Cross, Chalfont St Peter, Denham"
  },
  "greenford": {
    "addressRegion": "Greater London",
    "latitude": "51.5289",
    "longitude": "-0.3550",
    "serviceArea": "Greenford, Ealing, Northolt"
  },
  "greenwich": {
    "addressRegion": "Greater London",
    "latitude": "51.4826",
    "longitude": "0.0077",
    "serviceArea": "Greenwich, Deptford, Blackheath"
  },
  "guildford": {
    "addressRegion": "Surrey",
    "latitude": "51.2362",
    "longitude": "-0.5704",
    "serviceArea": "Guildford, Godalming, Woking"
  },
  "harrow": {
    "addressRegion": "Greater London",
    "latitude": "51.5806",
    "longitude": "-0.3416",
    "serviceArea": "Harrow, Pinner, Wealdstone"
  },
  "hayes": {
    "addressRegion": "Greater London",
    "latitude": "51.5035",
    "longitude": "-0.4204",
    "serviceArea": "Hayes, Southall, Uxbridge"
  },
  "heathrow": {
    "addressRegion": "Greater London",
    "latitude": "51.4700",
    "longitude": "-0.4543",
    "serviceArea": "Heathrow, Hounslow, Feltham"
  },
  "henley-on-thames": {
    "addressRegion": "Oxfordshire",
    "latitude": "51.5350",
    "longitude": "-0.9028",
    "serviceArea": "Henley-on-Thames, Marlow, Reading"
  },
  "high-wycombe": {
    "addressRegion": "Buckinghamshire",
    "latitude": "51.6286",
    "longitude": "-0.7482",
    "serviceArea": "High Wycombe, Loudwater, Flackwell Heath"
  },
  "hounslow": {
    "addressRegion": "Greater London",
    "latitude": "51.4717",
    "longitude": "-0.3567",
    "serviceArea": "Hounslow, Isleworth, Feltham"
  },
  "ilford": {
    "addressRegion": "Greater London",
    "latitude": "51.5588",
    "longitude": "0.0832",
    "serviceArea": "Ilford, Barking, Romford"
  },
  "ipswich": {
    "addressRegion": "Suffolk",
    "latitude": "52.0567",
    "longitude": "1.1482",
    "serviceArea": "Ipswich, Woodbridge, Felixstowe"
  },
  "isleworth": {
    "addressRegion": "Greater London",
    "latitude": "51.4740",
    "longitude": "-0.3352",
    "serviceArea": "Isleworth, Hounslow, Richmond"
  },
  "kidderminster": {
    "addressRegion": "Worcestershire",
    "latitude": "52.3874",
    "longitude": "-2.2498",
    "serviceArea": "Kidderminster, Stourport-on-Severn, Bewdley"
  },
  "kidlington": {
    "addressRegion": "Oxfordshire",
    "latitude": "51.8236",
    "longitude": "-1.2883",
    "serviceArea": "Kidlington, Yarnton, Oxford"
  },
  "leeds": {
    "addressRegion": "West Yorkshire",
    "latitude": "53.8008",
    "longitude": "-1.5491",
    "serviceArea": "Leeds, Headingley, Horsforth"
  },
  "leicester": {
    "addressRegion": "Leicestershire",
    "latitude": "52.6369",
    "longitude": "-1.1398",
    "serviceArea": "Leicester, Wigston, Oadby"
  },
  "leighton-buzzard": {
    "addressRegion": "Bedfordshire",
    "latitude": "51.9150",
    "longitude": "-0.6612",
    "serviceArea": "Leighton Buzzard, Linslade, Dunstable"
  },
  "liverpool": {
    "addressRegion": "Merseyside",
    "latitude": "53.4084",
    "longitude": "-2.9916",
    "serviceArea": "Liverpool, Bootle, Birkenhead"
  },
  "london": {
    "addressRegion": "Greater London",
    "latitude": "51.5074",
    "longitude": "-0.1278",
    "serviceArea": "London, Westminster, Southwark"
  },
  "loudwater": {
    "addressRegion": "Buckinghamshire",
    "latitude": "51.6135",
    "longitude": "-0.7115",
    "serviceArea": "Loudwater, High Wycombe, Flackwell Heath"
  },
  "luton": {
    "addressRegion": "Bedfordshire",
    "latitude": "51.8787",
    "longitude": "-0.4200",
    "serviceArea": "Luton, Dunstable, Harpenden"
  },
  "maidenhead": {
    "addressRegion": "Berkshire",
    "latitude": "51.5225",
    "longitude": "-0.7173",
    "serviceArea": "Maidenhead, Cookham, Windsor"
  },
  "manchester": {
    "addressRegion": "Greater Manchester",
    "latitude": "53.4808",
    "longitude": "-2.2426",
    "serviceArea": "Manchester, Salford, Stockport"
  },
  "marlow": {
    "addressRegion": "Buckinghamshire",
    "latitude": "51.5711",
    "longitude": "-0.7766",
    "serviceArea": "Marlow, Bourne End, Henley-on-Thames"
  },
  "milton-keynes": {
    "addressRegion": "Buckinghamshire",
    "latitude": "52.0406",
    "longitude": "-0.7594",
    "serviceArea": "Milton Keynes, Bletchley, Newport Pagnell"
  },
  "mitcham": {
    "addressRegion": "Greater London",
    "latitude": "51.4030",
    "longitude": "-0.1683",
    "serviceArea": "Mitcham, Croydon, Wimbledon"
  },
  "northampton": {
    "addressRegion": "Northamptonshire",
    "latitude": "52.2405",
    "longitude": "-0.9027",
    "serviceArea": "Northampton, Towcester, Daventry"
  },
  "oxford": {
    "addressRegion": "Oxfordshire",
    "latitude": "51.7520",
    "longitude": "-1.2577",
    "serviceArea": "Oxford, Kidlington, Abingdon"
  },
  "peckham": {
    "addressRegion": "Greater London",
    "latitude": "51.4746",
    "longitude": "-0.0678",
    "serviceArea": "Peckham, Camberwell, Dulwich"
  },
  "peterborough": {
    "addressRegion": "Cambridgeshire",
    "latitude": "52.5725",
    "longitude": "-0.2449",
    "serviceArea": "Peterborough, Stamford, Whittlesey"
  },
  "pinner": {
    "addressRegion": "Greater London",
    "latitude": "51.5933",
    "longitude": "-0.3821",
    "serviceArea": "Pinner, Harrow, Ruislip"
  },
  "potters-bar": {
    "addressRegion": "Hertfordshire",
    "latitude": "51.6943",
    "longitude": "-0.1778",
    "serviceArea": "Potters Bar, Barnet, Hatfield"
  },
  "princes-risborough": {
    "addressRegion": "Buckinghamshire",
    "latitude": "51.7235",
    "longitude": "-0.8321",
    "serviceArea": "Princes Risborough, Thame, Aylesbury"
  },
  "reading": {
    "addressRegion": "Berkshire",
    "latitude": "51.4543",
    "longitude": "-0.9781",
    "serviceArea": "Reading, Wokingham, Henley-on-Thames"
  },
  "richmond": {
    "addressRegion": "Greater London",
    "latitude": "51.4613",
    "longitude": "-0.3037",
    "serviceArea": "Richmond, Twickenham, Kew"
  },
  "romford": {
    "addressRegion": "Greater London",
    "latitude": "51.5752",
    "longitude": "0.1843",
    "serviceArea": "Romford, Dagenham, Ilford"
  },
  "royal-leamington-spa": {
    "addressRegion": "Warwickshire",
    "latitude": "52.2901",
    "longitude": "-1.5359",
    "serviceArea": "Leamington Spa, Warwick, Kenilworth"
  },
  "ruislip": {
    "addressRegion": "Greater London",
    "latitude": "51.5730",
    "longitude": "-0.4235",
    "serviceArea": "Ruislip, Uxbridge, Harrow"
  },
  "sheffield": {
    "addressRegion": "South Yorkshire",
    "latitude": "53.3811",
    "longitude": "-1.4701",
    "serviceArea": "Sheffield, Rotherham, Chesterfield"
  },
  "slough": {
    "addressRegion": "Berkshire",
    "latitude": "51.5105",
    "longitude": "-0.5954",
    "serviceArea": "Slough, Windsor, Maidenhead"
  },
  "solihull": {
    "addressRegion": "West Midlands",
    "latitude": "52.4128",
    "longitude": "-1.7782",
    "serviceArea": "Solihull, Shirley, Birmingham"
  },
  "southall": {
    "addressRegion": "Greater London",
    "latitude": "51.5080",
    "longitude": "-0.3749",
    "serviceArea": "Southall, Greenford, Ealing"
  },
  "st-albans": {
    "addressRegion": "Hertfordshire",
    "latitude": "51.7500",
    "longitude": "-0.3360",
    "serviceArea": "St Albans, Harpenden, Hatfield"
  },
  "staines-upon-thames": {
    "addressRegion": "Surrey",
    "latitude": "51.4351",
    "longitude": "-0.5118",
    "serviceArea": "Staines, Egham, Ashford"
  },
  "stanmore": {
    "addressRegion": "Greater London",
    "latitude": "51.6182",
    "longitude": "-0.3030",
    "serviceArea": "Stanmore, Edgware, Harrow"
  },
  "stoke-on-trent": {
    "addressRegion": "Staffordshire",
    "latitude": "53.0027",
    "longitude": "-2.1794",
    "serviceArea": "Stoke-on-Trent, Newcastle-under-Lyme, Crewe"
  },
  "stourbridge": {
    "addressRegion": "West Midlands",
    "latitude": "52.4564",
    "longitude": "-2.1432",
    "serviceArea": "Stourbridge, Dudley, Halesowen"
  },
  "stratford": {
    "addressRegion": "Greater London",
    "latitude": "51.5406",
    "longitude": "-0.0015",
    "serviceArea": "Stratford, Hackney, Bow"
  },
  "sutton": {
    "addressRegion": "Greater London",
    "latitude": "51.3618",
    "longitude": "-0.1934",
    "serviceArea": "Sutton, Cheam, Epsom"
  },
  "swindon": {
    "addressRegion": "Wiltshire",
    "latitude": "51.5558",
    "longitude": "-1.7797",
    "serviceArea": "Swindon, Wroughton, Cricklade"
  },
  "thame": {
    "addressRegion": "Oxfordshire",
    "latitude": "51.7481",
    "longitude": "-0.9761",
    "serviceArea": "Thame, Haddenham, Princes Risborough"
  },
  "tottenham": {
    "addressRegion": "Greater London",
    "latitude": "51.5882",
    "longitude": "-0.0696",
    "serviceArea": "Tottenham, Edmonton, Wood Green"
  },
  "tring": {
    "addressRegion": "Hertfordshire",
    "latitude": "51.7931",
    "longitude": "-0.6610",
    "serviceArea": "Tring, Berkhamsted, Wendover"
  },
  "uxbridge": {
    "addressRegion": "Greater London",
    "latitude": "51.5462",
    "longitude": "-0.4796",
    "serviceArea": "Uxbridge, Hillingdon, Ruislip"
  },
  "wailingford": {
    "addressRegion": "Oxfordshire",
    "latitude": "51.5995",
    "longitude": "-1.1253",
    "serviceArea": "Wallingford, Didcot, Benson"
  },
  "walsall": {
    "addressRegion": "West Midlands",
    "latitude": "52.5862",
    "longitude": "-1.9829",
    "serviceArea": "Walsall, Willenhall, Aldridge"
  },
  "warwick": {
    "addressRegion": "Warwickshire",
    "latitude": "52.2819",
    "longitude": "-1.5900",
    "serviceArea": "Warwick, Leamington Spa, Kenilworth"
  },
  "watford": {
    "addressRegion": "Hertfordshire",
    "latitude": "51.6565",
    "longitude": "-0.3903",
    "serviceArea": "Watford, Bushey, Rickmansworth"
  },
  "watlington": {
    "addressRegion": "Oxfordshire",
    "latitude": "51.6441",
    "longitude": "-1.0090",
    "serviceArea": "Watlington, Chinnor, Wallingford"
  },
  "wembley": {
    "addressRegion": "Greater London",
    "latitude": "51.5528",
    "longitude": "-0.2960",
    "serviceArea": "Wembley, Harrow, Greenford"
  },
  "west-drayton": {
    "addressRegion": "Greater London",
    "latitude": "51.5050",
    "longitude": "-0.4729",
    "serviceArea": "West Drayton, Hayes, Uxbridge"
  },
  "wheatley": {
    "addressRegion": "Oxfordshire",
    "latitude": "51.7466",
    "longitude": "-1.1353",
    "serviceArea": "Wheatley, Headington, Thame"
  },
  "windsor": {
    "addressRegion": "Berkshire",
    "latitude": "51.4839",
    "longitude": "-0.6044",
    "serviceArea": "Windsor, Eton, Maidenhead"
  },
  "witney": {
    "addressRegion": "Oxfordshire",
    "latitude": "51.7850",
    "longitude": "-1.4863",
    "serviceArea": "Witney, Carterton, Burford"
  },
  "wolverhampton": {
    "addressRegion": "West Midlands",
    "latitude": "52.5862",
    "longitude": "-2.1282",
    "serviceArea": "Wolverhampton, Walsall, Bilston"
  },
  "worcester": {
    "addressRegion": "Worcestershire",
    "latitude": "52.1920",
    "longitude": "-2.2200",
    "serviceArea": "Worcester, Droitwich, Malvern"
  }
}

</script>

<style scoped>

.custom-shape-divider-top-1735170425 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
}

.custom-shape-divider-top-1735170425 svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 59px;
}

.custom-shape-divider-top-1735170425 .shape-fill {
    fill: #F9FAFB;
}

.custom-shape-divider-bottom-1735171033 {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
    line-height: 0;
    transform: rotate(180deg);
}

.custom-shape-divider-bottom-1735171033 svg {
    position: relative;
    display: block;
    width: calc(100% + 1.3px);
    height: 59px;
}

.custom-shape-divider-bottom-1735171033 .shape-fill {
    fill: #F9FAFB;
}
</style>
