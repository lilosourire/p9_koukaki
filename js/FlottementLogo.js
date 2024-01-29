//console.log(" Message dans la console, pour vérifier que le JavaScript est fonctionnel ")
console.log(" le script javascript lancé se nomme FlottementLogo.js ");

// document.addEventListener("DOMContentLoaded", function() {
//   // Une fois que la page HTML est totalement chargée, nous allons ajouter la classe CSS avec un délai de 3 secondes
//   setTimeout(function() {
//     var element = document.querySelector(".logoBanner"); // Sélectionnez l'élément que vous souhaitez modifier
//     element.classList.add("logoBannerFlottement"); // Ajoutez la classe CSS à l'élément
//   }, 1500); // Le délai est en millisecondes
// });

// // test 01

//  <script>

// &(document).ready(function() {
//   // Sélectionnez votre logo-bannière par son identifiant ou sa classe (par exemple avec l'id #logoBanner)
//   var logoBanner = $('.logoBanner');

//   // Définissez la position de départ du logo-bannière
//   logoBanner.css('left', '100%');

//   // Effet de flottement
//   function floatingEffect() {
//     logoBanner.animate({
//       left: '0%'
//     }, 3000, 'linear', function() {
//       logoBanner.animate({
//         left: '100%'
//       }, 3000, 'linear', floatingEffect); // Utilisez la récursivité pour créer un effet de boucle
//     });
//   }

//   // Lancez l'effet de flottement lorsque la page est chargée
//   floatingEffect();
// });

// </script>

console.log("Page JavaScript flotement du logo est appelée avec succès !");
document.addEventListener("DOMContentLoaded", function () {
  // Sélectionner l'élément avec la classe "logoBanner"
  let element = document.querySelector(".logoBanner");

  // Ajouter la classe "flottement" après 4 secondes
  setTimeout(function () {
    element.classList.add("flottement");
  }, 4000);
});

