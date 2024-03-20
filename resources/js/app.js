require('./bootstrap');
import 'leaflet/dist/leaflet.css';
import Vue from 'vue';
import EnviromentalComponent from './components/EnviromentalComponet.vue';
Vue.component('enviromental-component', EnviromentalComponent);
const app = new Vue({
    el: '#app',
});

export default app;