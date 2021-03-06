import jQuery from 'jquery';
window.jQuery = window.$ = jQuery;


require('picturefill');
require('lazysizes');


/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

const tokenName = document.head.querySelector('meta[name="csrf-token-name"]');
const token = document.head.querySelector('meta[name="csrf-token"]');

if (token && tokenName) {
    window.axios.defaults.headers.common[tokenName.content] = token.content;
} else {
    // eslint-disable-next-line no-console
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}