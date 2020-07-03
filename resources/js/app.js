window.Vue = require('vue');

Vue.component('message-form', require('./components/MessageForm.vue').default);
Vue.component('heart', require('./components/HeartInTheChat.vue').default);

const app = new Vue({
    el: '#app',
});
