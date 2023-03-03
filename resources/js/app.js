import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import MainLayout from './Layouts/MainLayout.vue'

createInertiaApp({
    resolve: async (name) => {
        const pages = import.meta.glob('./pages/**/*.vue')

        const page =  (await pages[`./pages/${name}.vue`]())

        page.default.layout = page.default.layout|| MainLayout

        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
})
