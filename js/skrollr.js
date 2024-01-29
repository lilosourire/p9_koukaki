console.log(
  " le script javascript lancé se nomme skrollr.js et il est fonctionnel "
);
const initSkrollr = () => {
  skrollr.init({
    forceHeight: false,
  });
};

document.addEventListener("DOMContentLoaded", () => {
  setTimeout(() => {
    initSkrollr();
  }, 5000); // Démarrer Skrollr après 5 secondes
});
