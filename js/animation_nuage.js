//console.log(" Message dans la console, pour vérifier que le JavaScript est fonctionnel ")
console.log(
  " le script javascript lancé se nomme animation_nuage.js et il est fonctionnel "
);

// Fonction pour déplacer les nuages au scroll
function scrollNuage() {
  const scrollY = window.scrollY;
  const NuagesBleu = document.getElementById("NuagesBleu");

  // Parametre pour régler les préférences (Position nuage et Vitesse de déplacement)
  const NuagesBleuVitesse = 0.3;
  // const NuagesBleuPosition = 100;
  const NuagesBleuPosition = window.innerHeight / 2 - 40;
  // Nouvelles positions nuage en fonction du défilement
  const NuagesBleuX = -scrollY * NuagesBleuVitesse + NuagesBleuPosition;
  NuagesBleu.style.transform = `translateX(${NuagesBleuX}px)`;
}

// écouteur d'événement pour défilement nuage
window.addEventListener("scroll", scrollNuage);

// function calculerSomme(a, b) {
//     let somme = a + b;
//     console.log("La somme de", a, "+", b, "est égale à", somme);
//     return somme;
//   }
