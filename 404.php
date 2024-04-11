    <?php get_header() ?>
    <h2>404.php</h2>
    <div id="entete" class="global clr-primaire-100 bck-primaire-400 entete__404">
        <div class="div__404">
            <section class="entete__header"> 
                <h1 class="bgc-text">Erreur 404</h1>
                <h3 class="bgc-text">Vous essayez d'accéder à une page qui n'existe pas.</h3>
                <h3 class="bgc-text">Pour revenir à la page d'accueil, cliquez sur le lien suivant :</h3>
                <!-- Bouton -->
                <a href="/4w4_clovis/">
                    <button class="btn">Explorez le monde</button>
                </a>
                <!-- Barre de recherche -->
                <div class="_404"><?php get_search_form(); ?></div>
                <!-- Catégories -->
                <div class="cats">
                    <?php
                        $categories = get_categories();
                        foreach ($categories as $cat) :
                    ?>
                    <a href="<?= "category/".$cat->name; ?>"><?= $cat->name; ?></a>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
        <img class="image__404" src="<?= get_template_directory_uri() . '/images/vague_feuille_verte.png' ?>" alt="image feuille verte">
    </div>
<?php get_footer() ?>