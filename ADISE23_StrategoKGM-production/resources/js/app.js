import { createApp } from 'vue';



const app = createApp({});

import PlayButtonComponent from './components/PlayButtonComponent.vue';
app.component('play-button-component', PlayButtonComponent);


app.mount('#app');
