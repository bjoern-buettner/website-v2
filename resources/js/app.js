import {createApp, h} from 'vue';
import {createInertiaApp} from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

createInertiaApp({
  resolve: (name) => {
    const pages = import.meta.glob('./Pages/**/*.vue', {eager: true});
    const page = pages[`./Pages/${name}.vue`];
    page.default.layout = AppLayout;
    return page;
  },
  setup({el, App, props, plugin}) {
    createApp({render: () => h(App, props)})
        .use(plugin)
        .mount(el);
  },
  progress: {
    delay: 0,
    color: '#34be00',
    includeCSS: true,
    showSpinner: true,
  },
});
