<?php 
/**
 *  Modèle de base pour l'affichage d'une liste d'article d'une certaine catégorie
 */
?>

<?php get_header(); ?>
<!-- Espace caché par le menu en tout temps -->
<div class="marge"></div>
<div id="accueil" class="global bck-primaire-400">
    <section class="section__category accueil__section">
        <div class="section__titre clr-primaire-200">
            <h2> Catégorie </h2>
            <?php while(have_posts()): the_post(); ?>
            <?php $cats = get_the_category(); ?>
            <?php $nomCats[] = $cats[0]->cat_name; ?>

            <?php endwhile; ?>
            <h1><?php print_r($nomCats[4]); ?></h1>
        </div>
        <div class="section_posts">
            <?php if (have_posts()):
                // the_title() // echo du titre
                // get_the_title // string du titre
                while(have_posts()): the_post(); ?>
                <?php $pos = strpos(get_the_title(), ",")?>
                <?php $titre = get_the_title() ?>
                <div class="carte">
                    <div class="titre">
                        <h3><?= $titre ?></h3>
                        <p><a href="<?= get_permalink(); ?>">Lire plus</a> </p>
                    </div>
                    <p><?= wp_trim_words(get_the_content(), 30); ?></p>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php  get_footer(); ?>
    