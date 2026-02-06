import './bootstrap';

import { createApp } from 'vue';
import WebNav from './components/WebNav.vue';

const app = createApp({});

app.component('web-nav', WebNav);

app.mount('#app');
