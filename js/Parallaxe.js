//console.log(" Message dans la console, pour vérifier que le JavaScript est fonctionnel ")
console.log(" le script javascript lancé se nomme Parallaxe.js ");

// Sélection de l'élément HTML avec la classe 'parallaxe'
const effetParallaxe = document.querySelector(".parallaxe");

// Écouteur d'événement pour le défilement de la page
window.addEventListener("scroll", () => {
  // Récupération de la position de défilement verticale
  const scrollenY = window.scrollY;

  // Translation maximale autorisée sur l'axe Y (250 pixels)
  const maxTranslationY = 240;

  // Application de l'effet de parallaxe si la position de défilement est inférieure ou égale à la translation maximale
  if (scrollenY <= maxTranslationY) {
    // Déplacement vertical de l'élément '.parallaxe' en fonction de la position de défilement
    effetParallaxe.style.transform = `translateY(${scrollenY}px)`;
  }
});
