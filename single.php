<?php 
/**
 *  Modèle de base index.php 
 */
?>

<?php get_header(); ?>
<!-- Espace caché par le menu en tout temps -->
<div class="marge"></div>
<div id="accueil" class="global bck-primaire-400">  
    <section class="accueil__section ">
        <div class="section__titre clr-primaire-200">
            <h2> Destination </h2>
            <?php while(have_posts()): the_post(); ?>
                <?php $titre = get_the_title() ?>
            <?php endwhile; ?>
            <h1><?= $titre ?></h1>
        </div>
        <div class="section__single bck-primaire-400">
            <?php while(have_posts()): the_post(); ?>
                <div class="carte">
                    <h3><?= get_the_content() ?></h3>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
        </section>
        <?php  get_footer(); ?>
        