(function () {
    console.log("le script fonctionne!");
    let loupe = document.querySelector('.loupe');
    loupe.addEventListener("mouseover", afficherBarreRecherche);
    function afficherBarreRecherche() {
        console.log("barre affichée");
        loupe.removeEventListener("mouseover", afficherBarreRecherche);
        loupe.classList.add("survol");
    }

    console.log(loupe);
})()