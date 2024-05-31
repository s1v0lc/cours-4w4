(function () {
    let loupe = document.querySelector('.loupe'); // Sélection de l'image de la loupe
    let barreRecherche = document.querySelector('.recherche'); // Sélection de la barre de recherche
    if (loupe) { // Vérification
        // Ajout d'un gestionnaire d'événement pour détecter un survol
        loupe.addEventListener("mouseover", afficherBarreRecherche);
        function afficherBarreRecherche() {
            loupe.removeEventListener("mouseover", afficherBarreRecherche); // retrait du gestionnaire d'événement
            loupe.classList.add("survol"); // ajout de la classe animant la loupe
            barreRecherche.classList.add("afficher")// affichage de la barre de recherche
        }
    }
})()