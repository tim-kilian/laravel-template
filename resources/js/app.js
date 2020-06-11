require('./bootstrap');

import Vue from 'vue';

import ExampleComponent from './components/ExampleComponent';

import store from './store';

window.Vue = Vue;

Vue.component('example-component', ExampleComponent);

const app = new Vue({
    el: '#app',
    store,
});
