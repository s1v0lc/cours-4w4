<?php 
/**
 *  Modèle de base pour l'affichage d'une liste d'article d'une certaine catégorie
 */
?>

<?php get_header(); ?>
<!-- Espace caché par le menu en tout temps -->
<div class="marge"></div>
<div id="accueil" class="global bck-primaire-400">
    <section class="accueil__section">
    <div class="section__cat">        
        <?php if (have_posts()):
            while(have_posts()): the_post(); ?>
            <div class="carte">
                <h4><?php the_title() ?></h4>
                <p><?= get_the_content(); ?></p>
                <p><a href="<?php echo get_permalink(); ?>">La suite</a> </p>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>

<?php  get_footer(); ?>
    