//console.log(" Message dans la console, pour vérifier que le JavaScript est fonctionnel ")
// console.log(" le script javascript lancé se nomme animationTitre.js ");

// <script>
// const observer = new IntersectionObserver(entries => {
//   entries.forEach(entry => {
//     const title = entry.target;

//     if (entry.isIntersecting) {
//       title.classList.add('animateTitle');
//     } else {
//       title.classList.remove('animateTitle');
//     }
//   });
// }, { threshold: 0.5 }); // Ajustez la valeur selon vos besoins

// const titles = document.querySelectorAll('.Animetitre');
// titles.forEach(title => {
//   observer.observe(title);
// });
// </script>

//console.log(" Message dans la console, pour vérifier que le JavaScript est fonctionnel ")
console.log(" le script javascript lancé se nomme animationTitre.js ");

// const observer = new IntersectionObserver((entries) => {
//   // Loop over the entries
//   entries.forEach((entry) => {
//     // si l'élément est visible
//     if (entry.isIntersecting) {
//       // ajouter classe
//       entry.target.classList.add("animateTitle");
//     } else {
//       // supprimer  classe
//       entry.target.classList.remove("animateTitle");
//     }
//   });
// });

// const sections = document.querySelectorAll(".Animetitre");
// sections.forEach((section) => {
//   observer.observe(section);
// });

// const observer = new IntersectionObserver((entries) => {
//   entries.forEach((entry) => {
//     const animeTitreElement = entry.target;

//     if (entry.isIntersecting) {
//       animeTitreElement.classList.add("fade-in"); // Ajoutez une classe pour déclencher l'effet de fondu
//       observer.unobserve(animeTitreElement); // Arrêtez l'observation après l'animation initiale
//     }
//   });
// });

// // Sélectionnez tous les éléments avec la classe "animeTitre" et observez-les
// document.querySelectorAll(".animeTitre").forEach((element) => {
//   observer.observe(element);
// });
Animetitre;

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    const AnimetitreElement = entry.target;

    if (entry.isIntersecting) {
      AnimetitreElement.classList.add("fade-in");
      observer.unobserve(AnimetitreElement);
    }
  });
});

document.querySelectorAll(".Animetitre").forEach((element) => {
  observer.observe(element);
});
