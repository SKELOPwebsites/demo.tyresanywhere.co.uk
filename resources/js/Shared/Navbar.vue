<template>
    <nav class="select-none relative flex items-center justify-start">
        <div class="md:block hidden relative">
            <div class="flex items-center">
                <ul class="flex gap-4 lg:gap-8 list-none">

                    <li class="font-rubik">
                        <NavbarDropdown>
                            <template v-slot:trigger>
                                <span class="font-medium text-gray-800 cursor-pointer flex items-center lg:text-sm text-[13px] block hover:text-wheelfit-300 hover:font-medium transition duration-300 ease-in-out">
                                    Services
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16px" width="16px" class="ml-1" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                            </template>

                            <template v-slot:content>
                                <div class="flex m-0 p-4 whitespace-nowrap gap-4">
                                    <div class="flex-grow pr-8 border-r border-gray-300">
                                        <p class="text-sm font-semibold mb-6 text-gray-900 ">Services</p>
                                        <div class="text-xs flex flex-col gap-4">
                                            <Link class="block w-full text-gray-500 hover:text-gray-800" href="/mobile-tyre-fitting" title="Mobile Tyre Fitting">Mobile Tyre Fitting</Link>
                                            <Link class="block w-full text-gray-500 hover:text-gray-800" href="/mobile-tyre-repair" title="Mobile Tyre Repair">Mobile Tyre Repair</Link>
                                            <Link class="block w-full text-gray-500 hover:text-gray-800" href="/van-mobile-tyre-fitting" title="Van Mobile Tyre Fitting">Van Mobile Tyre Fitting</Link>
                                        </div>
                                    </div>
                                    <div class="flex-grow pr-8 border-r border-gray-300">
                                        <p class="text-sm font-semibold mb-6 text-gray-900">Book a Tyre</p>
                                        <div class="text-xs flex flex-col gap-4">
                                            <a class="block w-full text-gray-500 hover:text-gray-800" href="https://tyresanywhere.com/search-tyres" title="Search Tyres">Search Tyres</a>
                                        </div>
                                    </div>
                                    <div class="flex-grow">
                                        <p class="text-sm font-semibold mb-6 text-gray-900">Help</p>
                                        <div class="text-xs flex flex-col gap-4">
                                            <Link class="block w-full text-gray-500 hover:text-gray-800" href="/contact-us" title="Contact Us">Contact Us</Link>
                                            <a class="block w-full text-gray-500 hover:text-gray-800" href="tel:07442980101">
                                                07442 980101
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </template>

                        </NavbarDropdown>
                    </li>

                    <li>
                        <a href="https://tyresanywhere.com/search-tyres" class="font-medium font-rubik text-gray-800 whitespace-nowrap lg:text-sm text-[13px] block hover:text-wheelfit-300 hover:font-medium transition duration-300 ease-in-out" title="Search Tyres">Search Tyres</a>
                    </li>
                    <li>
                        <NavLink href="/blog" title="Blog Posts">Blog</NavLink>
                    </li>
                    <li>
                        <NavLink href="/contact-us" title="Contact Us">Contact Us</NavLink>
                    </li>
                    <li v-if="showFAQLink" class="hidden lg:block">
                        <NavLink href="#faq" title="FAQ">FAQ</NavLink>
                    </li>
                </ul>
            </div>
        </div>

        <!--Mobile Navigation-->
        <div class="md:hidden block w-full flex items-center justify-center h-[3.5rem]">
            <button @click="toggleMobileNav()" class="h-10 w-10 text-xl flex items-center justify-end transition duration-150" aria-label="Toggle mobile menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>

        <transition name="mobile-nav">
            <div v-show="mobileNavShow" class="md:hidden block mobile-nav font-rubik w-72 fixed top-0 right-0 z-50">
                <div class="relative h-screen">
                    <div class="w-full flex border-b items-center justify-between pr-4 h-14 my-4">
                        <NavLinkMob href="/" component="Index" class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                            HOME
                        </NavLinkMob>

                        <button @click="hideMobileNav" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex flex-col">
                        <NavLinkMob href="/mobile-tyre-fitting" component="MobileTyreFitting" title="Mobile Tyre Fitting">Mobile Tyre Fitting</NavLinkMob>
                        <a href="https://tyresanywhere.com/search-tyres" title="Search Tyres" class="w-full py-4 pl-6 text-sm font-medium">Search Tyres</a>
                        <div class="w-full py-4 pl-6 text-sm text-gray-700">
                            <span @click="otherServicesOpen = !otherServicesOpen" class="flex items-center font-medium">
                                Other Services
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <div v-show="otherServicesOpen" class="flex flex-col mt-2 ml-2 border-l-2 border-dotted">
                                <NavLinkMob href="/mobile-tyre-repair" component="MobileTyreRepair" title="Mobile Tyre Repair">Mobile Tyre Repair</NavLinkMob>
                                <NavLinkMob href="/van-mobile-tyre-fitting" component="VanMobileTyreFitting" title="Van Mobile Tyre Fitting">Van Mobile Tyre Fitting</NavLinkMob>
                            </div>
                        </div>
                        <NavLinkMob href="/blog" component="Blog" title="Blog Posts">Blog</NavLinkMob>
                        <NavLinkMob href="/contact-us" component="ContactUs" title="Contact Us">Contact Us</NavLinkMob>
                    </div>

                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 mb-16">
                        <a class="whitespace-nowrap flex items-center justify-center text-white bg-wheelfit-300 rounded-full px-6 py-3 shadow-lg text-base lg:text-lg font-medium z-10 hover:bg-wheelfit-400 hover:scale-105 transition-all duration-300" href="tel:07442980101" title="Phone Number">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 lg:h-6 lg:w-6 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M21.384,17.752a2.108,2.108,0,0,1-.522,3.359,7.543,7.543,0,0,1-5.476.642C10.5,20.523,3.477,13.5,2.247,8.614a7.543,7.543,0,0,1,.642-5.476,2.108,2.108,0,0,1,3.359-.522L8.333,4.7a2.094,2.094,0,0,1,.445,2.328A3.877,3.877,0,0,1,8,8.2c-2.384,2.384,5.417,10.185,7.8,7.8a3.877,3.877,0,0,1,1.173-.781,2.092,2.092,0,0,1,2.328.445Z"/></svg>
                            07442 980101
                        </a>
                    </div>

                </div>
            </div>
        </transition>
    </nav>
</template>

<script setup>
import { onBeforeUnmount, onMounted, ref, watch} from "vue"
import { Link, usePage } from "@inertiajs/vue3";
import NavbarDropdown from "./NavbarDropdown.vue"
import Container from "./Container.vue"
import NavLink from "./NavLink.vue"
import NavLinkMob from "./NavLinkMob.vue"

const page = usePage()

watch(() => page.props, () => {
    hideMobileNav();
})

onMounted(() => {
    hideMobileNav()
})

const otherServicesOpen = ref(false)
const mobileNavShow = ref(false)
const sliding = ref(false)

function toggleMobileNav(){
    if(sliding.value) return;
    mobileNavShow.value = !mobileNavShow.value;
    setSliding();
}
function hideMobileNav(){
    if(sliding.value) return;
    mobileNavShow.value = false;
    setSliding();
}
function setSliding() {
    sliding.value = true;
    setTimeout(() => {
        sliding.value = false;
    }, 500)
}

const showFAQLink = ref(false);

// Function to check if the #faq element exists on the current page (fix this)
function checkFAQAvailability() {
  const faqElement = document.querySelector("#faq");
  showFAQLink.value = !!faqElement;
}

onMounted(() => {
  checkFAQAvailability();
});

</script>

<style scoped>
@keyframes bg-animation{
    0%{
        background-position: left;
    }
    100%{
        background-position: right;
    }
}

.nav-link-gradient-animation{
    background-size: 400px !important;
    border: none !important;
    animation: bg-animation 25s infinite alternate;
}
.nav-link-gradient-1{
    background: linear-gradient(-45deg, #F09821, #E1F328, #85F758, #23E566);
    color: #000 !important;
}
.nav-link-gradient-2{
    background: linear-gradient(45deg,#ee7752,#e73c7e,#23a6d5,#23d5ab);
    color: #fff;
}

.mobile-nav{
    background: linear-gradient(to right, #ffffff 72%, #ebebeb 100%);
}

.color-anim{
    animation: color-anim 1.5s infinite;
}

@keyframes color-anim {
    0%{ color: #fff }
    50%{ color: #ff3333 }
    100%{ color: #fff }
}

.mobile-nav-enter-active{
    animation: navInAnimation 0.3s ease;
}
.mobile-nav-leave-active{
    animation: navOutAnimation 0.3s ease;
}

@keyframes navInAnimation {
    from { transform: translateX(100%); }
    to { transform: translateX(0) }
}
@keyframes navOutAnimation {
    from { transform: translateX(0); }
    to { transform: translateX(100%) }
}
</style>
