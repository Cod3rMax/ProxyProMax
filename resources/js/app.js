/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

const app = createApp({});

import NewsLetterComponent from './components/NewsLetterComponent.vue';
app.component('newsletter-component', NewsLetterComponent);

import RegistrationComponent from "./components/Auth/RegistrationComponent.vue";
app.component('registration-component', RegistrationComponent);

import LoginComponent from "./components/Auth/LoginComponent.vue";
app.component('login-component', LoginComponent);

import UserConfirmationComponent from "./components/Auth/UserConfirmationComponent.vue";
app.component('userconfirmation-component', UserConfirmationComponent);


import AllProxiesComponent from "./components/ProxyList/AllProxiesComponent.vue";
app.component('allproxies-component', AllProxiesComponent);




const options = {

    toast: true,
    position: 'top',
    showConfirmButton: false,
    timer: 3500,
    timerProgressBar: true,

  };


app.use(VueSweetalert2, options);


app.mount('#app');
