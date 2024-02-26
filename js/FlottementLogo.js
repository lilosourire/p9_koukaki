//console.log(" Message dans la console, pour vérifier que le JavaScript est fonctionnel ")

console.log("Page JavaScript flotement du logo est appelée avec succès !");
document.addEventListener("DOMContentLoaded", function () {
  // Sélectionner l'élément avec la classe "logoBanner"
  let element = document.querySelector(".logoBanner");

  // Ajouter la classe "flottement" après 4 secondes
  setTimeout(function () {
    element.classList.add("flottement");
  }, 4000);
});
