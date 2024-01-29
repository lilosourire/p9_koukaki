//console.log(" Message dans la console, pour vérifier que le JavaScript est fonctionnel ")
//console.log(" Message dans la console, pour vérifier que le JavaScript est fonctionnel ")
console.log(
  " le script javascript lancé se nomme swiper_carrousel.js et il est fonctionnel "
);

// Initialisation du Swiper

// const swiper = new Swiper(".swiper", {
//   effect: "coverflow",
//   grabcursor: true,
//   centeredSlides: true,
//   slidesPerView: "auto",
//   direction: "horizontal",

//   coverflowEffect: {
//     rotate: 70,
//     stretch: 0,
//     depth: 50,
//     modifier: 1,
//     slideShadows: false,
//     slidesPerView: 5, // ou ajustez selon votre besoin
//     slidesPerGroup: 5, // ou ajustez selon votre besoin
//   },

//   loop: "true",
//   loopedSlides: 3,
//   loopAdditionalSlides: 0,
//   autoplay: {
//     delay: 1000,
//     disableOnInteraction: false,
//   },

//   speed: 800,
// });

// Initialisation du Swiper

// const swiper = new Swiper(".swiper", {
//   effect: "coverflow",
//   grabcursor: true,
//   centeredSlides: true,
//   slidesPerView: "auto",
//   direction: "horizontal",

//   coverflowEffect: {
//     rotate: 70,
//     stretch: 0,
//     depth: 50,
//     modifier: 1,
//     slideShadows: false,
//   },

//   loop: true,
//   loopedSlides: 3,
//   loopAdditionalSlides: 0,
//   autoplay: {
//     delay: 1000,
//     disableOnInteraction: false,
//   },

//   speed: 800,

//   // Ajoutez les options de coverflow ici
//   coverflowEffect: {
//     rotate: 70,
//     stretch: 0,
//     depth: 50,
//     modifier: 1,
//     slideShadows: false,
//   },

//   // Ajoutez les options de boucle ici
//   loop: true,
//   loopedSlides: 3,
//   loopAdditionalSlides: 0,
//   autoplay: {
//     delay: 1000,
//     disableOnInteraction: false,
//   },

//   speed: 800,
// });

const swiper = new Swiper(".swiper", {
  effect: "coverflow",
  grabcursor: true,
  centeredSlides: true,
  slidesPerView: "auto", // Réduisez cette valeur si nécessaire
  slidesPerGroup: 1, // Réduisez cette valeur si nécessaire
  direction: "horizontal",

  coverflowEffect: {
    rotate: 30,
    stretch: 0,
    depth: 50,
    modifier: 1,
    slideShadows: false,
  },

  loop: true,
  loopedSlides: 3,
  loopAdditionalSlides: 5,
  autoplay: {
    delay: 1000,
    disableOnInteraction: false,
  },

  speed: 800,
});
