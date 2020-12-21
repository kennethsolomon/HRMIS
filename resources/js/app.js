/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import Chart from 'chart.js';
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

Vue.component('example-chart', require('./components/ExampleChart.vue').default);
Vue.component('example-component', require('./components/LineChart.vue').default);

//Top Bar Components
Vue.component('top-bar', require('./components/Topbar/Topbar.vue').default);
Vue.component('top-bar-message', require('./components/Topbar/TopbarMessage.vue').default);
Vue.component('top-bar-notification', require('./components/Topbar/TopBarNotification.vue').default);
Vue.component('top-bar-userinfo', require('./components/Topbar/TopBarUserInfo.vue').default);
Vue.component('top-bar-search', require('./components/Topbar/TopBarSearch.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#wrapper',
});
