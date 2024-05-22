require('./bootstrap');
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css';
import 'leaflet/dist/leaflet.css';
import Vue from 'vue';

const options = {
    /* position: 'top-right', */
    duration: 3000,
    keepOnHover: true,
    theme: 'sugar',
};
Vue.use(VueToast,options);



import EnviromentalComponent from './components/EnviromentalComponet.vue';
import InfringementComponent from './components/InfringementComponent.vue';
import consultaExpedienteComponent from './components/consultaExpedienteComponent.vue';
Vue.component('enviromental-component', EnviromentalComponent);
Vue.component('infringement-component', InfringementComponent);
Vue.component('consulta-expediente-component', consultaExpedienteComponent);
const app = new Vue({
    el: '#app',
});

export default app;