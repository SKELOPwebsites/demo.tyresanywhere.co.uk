// import '../css/app.css'

import { createSSRApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import Layout from "./Shared/Layouts/Layout.vue";

const app = createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        let page = pages[`./Pages/${name}.vue`]
        page.default.layout = page.default.layout || Layout
        return page
    },
    setup({ el, App, props, plugin }) {
        createSSRApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
})
