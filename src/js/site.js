require('./bootstrap');

const $ = window.$;

$(function () {
    $('header').css('margin-top', $('nav').height());

});

import FontAwesomeIcon from '@fortawesome/vue-fontawesome';
import fontawesome from '@fortawesome/fontawesome';
import allRegularFree from '@fortawesome/fontawesome-free-regular';
import allSolid from '@fortawesome/fontawesome-free-solid';
import { faFacebookSquare, faTwitter, faYoutube, faInstagram, faLinkedinIn } from '@fortawesome/fontawesome-free-brands';
import vClickOutside from 'v-click-outside';
import Slick from 'vue-slick';

const Vue = require('vue');
window.Vue = Vue;

Vue.use(vClickOutside);

fontawesome.library.add(
    allRegularFree, allSolid, faFacebookSquare, faTwitter, faYoutube, faInstagram, faLinkedinIn,
);

Vue.component('font-awesome-icon', FontAwesomeIcon);

new Vue({
    el: '#site',
    components: { Slick },
    data: {
        menuOpen: false,
        slickTeamOptions: {
            centerMode: true,
            autoplay: true,
            mobileFirst: true,
            prevArrow: '<div class="flex-none px-2 md:px-4 cursor-pointer"><svg width="20" height="34" xmlns="http://www.w3.org/2000/svg"><path d="M7.28 16.985l11.837 11.838a3.015 3.015 0 1 1-4.264 4.264L.883 19.117a3.015 3.015 0 0 1 0-4.264L14.853.883a3.015 3.015 0 0 1 4.264 4.264L7.279 16.985z" fill="#2A343E" fill-rule="nonzero"/></svg></div>',
            nextArrow: '<div class="flex-none px-2 md:px-4 cursor-pointer"><svg width="20" height="34" xmlns="http://www.w3.org/2000/svg"><path d="M12.706 17L.868 5.162A3.015 3.015 0 0 1 5.132.898l13.97 13.97a3.015 3.015 0 0 1 0 4.264l-13.97 13.97a3.015 3.015 0 1 1-4.264-4.264L12.706 17z" fill="#2A343E" fill-rule="nonzero"/></svg></div>',
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        arrows: true,
                        slidesToShow: 4,
                    },
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        arrows: true,
                    },
                },
                {
                    breakpoint: 960,
                    settings: {
                        slidesToShow: 3,
                        arrows: true,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        arrows: false,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                    },
                },
                {
                    breakpoint: 320,
                    settings: {
                        slidesToShow: 1,
                        arrows: false,
                    },
                },
            ],
        },
        slickGalleryOptions: {
            centerMode: false,
            autoplay: true,
            mobileFirst: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 4,
                    },
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 960,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    },
                },
                {
                    breakpoint: 320,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
        },
    },
});