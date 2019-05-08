require('./bootstrap');
window.Vue = require('vue');

Vue.component('mail-app', require('./components/App.vue'));

const mailApp = new Vue({
    el: '#mail-app'
});
