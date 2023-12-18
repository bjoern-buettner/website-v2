import {createApp, h} from 'vue';
import {createInertiaApp} from '@inertiajs/vue3';
import {ZiggyVue} from 'ziggy';
import AppLayout from '@/Layouts/AppLayout.vue';

import '../css/app.css';
import '../../node_modules/flowbite/dist/flowbite.min.css';
import '../../node_modules/flowbite/dist/flowbite.min.js';

createInertiaApp({
  resolve: (name) => {
    const pages = import.meta.glob('./Pages/**/*.vue', {eager: true});
    const page = pages[`./Pages/${name}.vue`];
    page.default.layout = page.default.layout || AppLayout;
    return page;
  },
  setup({el, App, props, plugin}) {
    createApp({render: () => h(App, props)})
        .use(plugin)
        .use(ZiggyVue)
        .mount(el);
  },
  progress: {
    delay: 0,
    color: '#34be00',
    includeCSS: true,
    showSpinner: true,
  },
});
