window.Vue = require('vue');
window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js').default;
require('bootstrap');

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import App from './views/App';

const app = new Vue({
    el: '#app',
    render: h => h(App)
});

