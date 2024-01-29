//console.log(" Message dans la console, pour vérifier que le JavaScript est fonctionnel ")
// console.log(" le script javascript lancé se nomme animationTitre.js ");

//console.log(" Message dans la console, pour vérifier que le JavaScript est fonctionnel ")
console.log(" le script javascript lancé se nomme animationTitre.js ");

const observer = new IntersectionObserver((entries) => {
  // Loop over the entries
  entries.forEach((entry) => {
    // si l'élément est visible
    if (entry.isIntersecting) {
      // ajouter classe
      entry.target.classList.add("animateTitle");
    } else {
      // supprimer  classe
      entry.target.classList.remove("animateTitle");
    }
  });
});

const sections = document.querySelectorAll(".Animetitre");
sections.forEach((section) => {
  observer.observe(section);
});
