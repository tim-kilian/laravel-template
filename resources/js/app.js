window._ = require('lodash');
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import Vue from 'vue';

import ExampleComponent from './components/ExampleComponent';

import store from './store';

window.Vue = Vue;

Vue.component('example-component', ExampleComponent);

const app = new Vue({
    el: '#app',
    store,
});
