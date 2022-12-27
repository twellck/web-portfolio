import './bootstrap';

import anime from 'animejs';
import Rellax from 'rellax'

window.swiper_photoswipe_loop_setting = true;

import.meta.glob([
    '../images/**',
    '../fonts/**',
]);

console.log('Hey There! \nWelcome to the console, you should not see any errors or warnings here :)');

window.addEventListener('DOMContentLoaded', ()=> {

    //Init Rellax (Parallax Animation)
    new Rellax('.rellax');

    // Individually wrap Animated Title's letters in span
    let animatedTitles = document.querySelectorAll('.animated-title');
    animatedTitles.forEach((el) => {
        el.innerHTML = el.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    });

    // Animate "Animated Titles" using AnimeJS
    anime.timeline()
        .add({
            targets: "#profile-picture",
            translateY: [6,0],
            opacity: [0,1],
            easing: "easeOutExpo",
            duration: 1400,
        })
        .add({
            targets: '.animated-title .letter',
            translateX: [40,0],
            translateZ: 0,
            opacity: [0,1],
            easing: "easeOutExpo",
            duration: 1250,
            delay: (el, i) => 30 * i
        }).add({
        targets: '#scroll-down',
        translateX: 0,
        translateY: [8, 0],
        opacity: [0,1],
        easing: "easeOutExpo",
        duration: 800,
    }, '-=600');
});

//Start the animaton of the "My Work" Section
window.myWorkTitleAnimation = function (){
    anime.timeline().add({
        targets: '#project-title',
        translateX: [40,0],
        translateZ: 0,
        opacity: [0,1],
        easing: "easeOutExpo",
        duration: 1250,
        delay: (el, i) => 250 + 30 * i
    });
}
