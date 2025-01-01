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

        createSSRApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)

        sr.reveal('.reveal');
    },
})


