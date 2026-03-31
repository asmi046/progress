import './bootstrap';
import './sliders/main-swiper';

import { createApp } from 'vue/dist/vue.esm-bundler'
import CookiesWarning from "./components/CookiesWarning.vue"

import axios from 'axios'
import VueAxios from 'vue-axios'

const global_app = createApp({
    components: {
        CookiesWarning,
    },
    setup() { }
})

global_app.use(VueAxios, axios)
global_app.mount("#modal_app");
