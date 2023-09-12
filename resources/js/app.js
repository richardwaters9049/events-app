import './bootstrap';
import Swiper from 'swiper/bundle';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const swiper = new Swiper('.swiper-container', {
    // Optional Swiper configuration options here
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});



