import './bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

import MainLayout from "./Layouts/MainLayout.vue";

import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.es'
import { Ziggy } from './ziggy.js';


createInertiaApp({
    resolve: (name) => {
        let page = require(`./Pages/${name}.vue`).default;
        
        if(page.layout == null){
            page.layout = MainLayout 
        }

        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el)
    },
})