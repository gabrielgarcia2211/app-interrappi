/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import "bootstrap";

import $ from 'jquery';
window.$ = window.jQuery = $;

window.Vue = require('vue').default;
window.axios = require('axios');
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Importar Estilos

// Modulo compartido
import shared from './components/shared'
// SWEET ALERT CSS
import VueSweetalert2 from 'vue-sweetalert2';


// AgGrip y Thema
import "ag-grid-community/dist/styles/ag-grid.css"; 
import "ag-grid-community/dist/styles/ag-theme-alpine.css";

// FONT AWESOME CSS
import "font-awesome/scss/font-awesome.scss";
import vmodal from 'vue-js-modal';

// Importar Estilos de SweetAlert2
import 'sweetalert2/dist/sweetalert2.min.css';

Vue.use(vmodal);
Vue.use(VueSweetalert2);

Vue.mixin(shared.AlertsComponent);
Vue.mixin(shared.ReadHttpStatusErrors);


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('dash-component', require('./components/admin/DashComponent.vue').default);
Vue.component('button-tasa-component', require('./components/tasa/ButtonTasaComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
