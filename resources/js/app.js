import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
const btn = document.getElementById('menu-btn');
const nav = document.getElementById('menu');

btn.addEventListener('click',() => {
    btn.classList.toggle('open')
    nav.classList.toggle('flex')
    nav.classList.toggle('hidden')
})

const popup = document.getElementById('popup');
window.addEventListener('scroll',function() {
    if(this.window.scrollY > 100) {
        popup.classList.remove('hidden')
        popup.classList.add('flex')
    }
    else{
        popup.classList.add('hidden')
        popup.classList.remove('flex')
    }
})