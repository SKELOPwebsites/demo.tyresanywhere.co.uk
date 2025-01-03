// import '../css/app.css'

import { createSSRApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import Layout from "./Shared/Layouts/Layout.vue";
import ScrollReveal from 'scrollreveal';

const app = createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        let page = pages[`./Pages/${name}.vue`]
        page.default.layout = page.default.layout || Layout
        return page
    },
    setup({ el, App, props, plugin }) {
        const sr = ScrollReveal({
            distance: '30px',
            duration: 500,
            easing: 'ease-out',
            opacity: 0,
            origin: 'bottom',
            reset: true,
        });

        const app = createSSRApp({ render: () => h(App, props) })
            .use(plugin);

        const PostcodeLookup = {
            data() {
                return {
                    postcode: '',
                    location: null,
                    error: null,
                };
            },
            methods: {
                async checkPostcode() {
                    // basic validation
                    if (!/^[A-Z0-9]{1,4} ?[A-Z0-9]{1,4}$/i.test(this.postcode)) {
                        this.error = 'Please enter a valid postcode.';
                        return;
                    }

                    try {
                        this.error = null;
                        this.location = null;

                        const response = await fetch(`/api/postcode-info?postcode=${this.postcode}`);
                        const data = await response.json();

                        if (data.valid) {
                            this.location = data;
                        } else {
                            this.error = data.error || 'Invalid postcode.';
                        }
                    } catch (err) {
                        this.error = 'An error occurred while checking the postcode.';
                    }
                },
            },
            template: `
                <div class="flex flex-col items-start gap-4">
                    <div class="relative">
                        <input
                            v-model="postcode"
                            type="text"
                            placeholder="Enter your postcode"
                            class="rounded-lg w-full py-3 pl-4 pr-20 border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-300"
                        >
                        <button
                            @click="checkPostcode"
                            class="absolute top-0 right-0 h-full w-16 bg-blue-500 text-white rounded-r-lg hover:bg-blue-600 transition"
                        >
                            Go
                        </button>
                    </div>
                    <p v-if="error" class="text-red-500">{{ error }}</p>
                    <div v-if="location" class="text-gray-700">
                        <p><strong>City:</strong> {{ location.city }}</p>
                        <p><strong>Latitude:</strong> {{ location.latitude }}</p>
                        <p><strong>Longitude:</strong> {{ location.longitude }}</p>
                    </div>
                </div>
            `,
        };

        app.component('postcode-lookup', PostcodeLookup);

        app.mount(el);

        sr.reveal('.reveal');
    },
})


