import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import MainLayout from './Layouts/MainLayout.vue';
import IndexLayout from './Layouts/IndexLayout.vue';

const appName = 'Sistema de coisa';

createInertiaApp({
    title: (title) => appName,
    resolve:async (name) =>{ 
        const pages = import.meta.glob('./Pages/**/*.vue')
        
        const page = await pages[`./Pages/${name}.vue`]();
        page.default.layout = page.default.layout || MainLayout;
        
        if (name === 'Index/Index') {
            page.default.layout = IndexLayout;
        } else {
            page.default.layout = page.default.layout || MainLayout;
        }
        
        return page
    },
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#0f9236',
    },
});
