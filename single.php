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
                    <?php the_content() ?>
                    <div class="champs">
                        <p>Température minimum <?php the_field('temperature_minimum'); ?>°C<span class="material-symbols-outlined">thermometer_minus</span></p>
                        <p>Température maximum <?php the_field('temperature_maximum'); ?>°C<span class="material-symbols-outlined">thermometer_gain</span></p>
                        <p>Humidité <?php the_field('humidite'); ?><span class="material-symbols-outlined">humidity_percentage</span></p>
                        <p>Ville avoisinante <?php the_field('ville_avoisinante'); ?><span class="material-symbols-outlined">near_me</span></p>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        </div>
        </section>
        <?php  get_footer(); ?>
        