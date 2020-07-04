require("typeface-montserrat")

window.Vue = require('vue');

Vue.component('message-form', require('./components/MessageForm.vue').default);

const app = new Vue({
    el: '#app',
});
