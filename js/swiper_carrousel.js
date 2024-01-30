//console.log(" Message dans la console, pour vérifier que le JavaScript est fonctionnel ")
//console.log(" Message dans la console, pour vérifier que le JavaScript est fonctionnel ")
console.log(
  " le script javascript lancé se nomme swiper_carrousel.js et il est fonctionnel "
);

// const swiper = new Swiper(".swiper", {
//   effect: "coverflow",
//   grabcursor: true,
//   centeredSlides: true,
//   slidesPerView: "auto", // Réduisez cette valeur si nécessaire
//   slidesPerGroup: 1, // Réduisez cette valeur si nécessaire
//   direction: "horizontal",

//   coverflowEffect: {
//     rotate: 30,
//     stretch: 0,
//     depth: 50,
//     modifier: 1,
//     slideShadows: false,
//   },

//   loop: true,
//   loopedSlides: 3,
//   loopAdditionalSlides: 5,
//   autoplay: {
//     delay: 1000,
//     disableOnInteraction: false,
//   },

//   speed: 800,
// });

console.log("animationCarrousel.js en direct de la lune !");

const swiper = new Swiper(".swiper", {
  effect: "slide",
  grabcursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  direction: "horizontal",

  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 50,
    modifier: 1,
    slideShadows: false,
  },

  loop: true,
  loopedSlides: 3,
  loopAdditionalSlides: 0,
  autoplay: {
    delay: 1000,
    disableOnInteraction: false,
  },

  speed: 800,
});
