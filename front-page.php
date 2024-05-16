<?php get_header(); ?>
<h2>Front-page.php</h2>
<div id="entete" class="global clr-primaire-100">
        <section class="entete__header">  
            <h1 class="bgc-text"><?= get_bloginfo('name'); ?></h1>
            <h3 class="bgc-text"><?= get_bloginfo('description'); ?></h3>
        </section>
    <?php get_template_part("gabarit/vague"); ?>
</div>
<div id="accueil" class="global bck-primaire-200 clr-primaire-400">
        <section class="accueil__section">
            <!-- Affichage des catégories de voyages -->
            <h2>Catégories</h2>
            <div class="section_cat">
            <?php
                // Appel du shortcode directement dans le fichier front-page.php
                echo do_shortcode('[em_destination]');
            ?>
            </div>
            <!-- Affichage des destination populaires  -->
            <h2>Destinations Populaires</h2>
            <div class="section_pop">
            <?php if (have_posts()):
                while(have_posts()): the_post();  
                $ma_categorie = "carte";
                if(in_category('galerie')) {
                    $ma_categorie = "galerie";
                }
                get_template_part( 'gabarit/categorie', $ma_categorie );
                ?>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>

</div>
    <?php  get_footer(); ?>
    