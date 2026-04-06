import "./bootstrap";
import { createApp, h } from "vue";
import { createInertiaApp, Link } from "@inertiajs/vue3";
import { ZiggyVue } from "ziggy-js";
import MasterLayout from "./Pages/MasterLayout.vue";

createInertiaApp({
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
        const page = pages[`./Pages/${name}.vue`];
        page.default.layout = page.default.layout || MasterLayout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .component("Link", Link)
            .mount(el);
    },
    progress: {
        color: "#009ed8",
    },
});
