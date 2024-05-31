<?php
/**
 * Template name: Pays
 * url: http://localhost:8080/4w4_clovis/pays/
 */
?>
<!-- header -->
<?php get_header(); ?>
<!-- Contenu -->
<main class="site__main">
    <h1><?= get_the_title(); ?></h1>
    <?php
        // Requête pour obtenir le post de la galerie à partir de son template
        $args = array(
            'post_type' => 'post',
            'name' => 'galerie-destinations-populaires'
        );
        $query = new WP_Query( $args );
        // Affichage du post
        if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : ?>
                <?php $query->the_post(); ?>
                <figure><?php get_template_part( 'gabarit/categorie-galerie' ); ?></figure>
            <?php endwhile; ?>
        <?php endif; ?>
</main>
<!-- Footer -->
<?php get_footer(); ?>