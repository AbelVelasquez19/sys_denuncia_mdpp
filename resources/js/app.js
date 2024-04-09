require('./bootstrap');
import 'leaflet/dist/leaflet.css';
import Vue from 'vue';
import EnviromentalComponent from './components/EnviromentalComponet.vue';
import InfringementComponent from './components/InfringementComponent.vue';
Vue.component('enviromental-component', EnviromentalComponent);
Vue.component('infringement-component', InfringementComponent);
const app = new Vue({
    el: '#app',
});

export default app;