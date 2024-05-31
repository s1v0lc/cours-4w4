(function () {
    let conteneur = document.querySelector('.section_restapi'); // Sélection du conteneur
    conteneur.ouvert = false; // état d'ouverture du conteneur
    let boutons = document.querySelectorAll('.section_restapi .bouton__categorie'); // Sélection des boutons 
    if (boutons) { // Vérification
        for (const btn of boutons) {
            // Ajout d'un gestionnaire d'événement pour détecter un clic
            btn.addEventListener("click", afficherResultats);
        }
        function afficherResultats(evt) {
            for (const btn of boutons) {
                if (btn.classList.contains("clique")) {
                    btn.classList.remove("clique");
                }
            }
            evt.target.classList.add("clique"); // ajout de la classe animant le bouton
            if (evt.target.classList.contains("btnX") && conteneur.ouvert == true) {
                conteneur.ouvert = false;
                if(conteneur.classList.contains("afficherConteneur"))
                conteneur.classList.remove("afficherConteneur"); // retrait de la classe animant le conteneur
            } else if (!evt.target.classList.contains("btnX") && conteneur.ouvert == false) {
                conteneur.ouvert = true;
                conteneur.classList.add("afficherConteneur"); // ajout de la classe animant le conteneur
            }
        }
    }
})()