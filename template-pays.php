<?php
/**
 * Template name: Pays
 * url: http://localhost:8080/4w4_clovis/pays/
 */
?>
<!-- header -->
<?php get_header(); ?>
<!-- Main -->
<main class="page__pays">
    <!-- Titre -->
    <h1><?= get_the_title(); ?></h1>
    <!-- Vague -->
    <div class="vague__header">
        <?php get_template_part("gabarit/vague"); ?>
    </div>
    <!-- Contenu de la page -->
    <section class="section__contenu__pays">
        <?php the_content();?>
    </section>
    <!-- Vague -->
    <div class="vague__footer">
        <?php get_template_part("gabarit/vague"); ?>
    </div>
</main>
<!-- Footer -->
<?php get_footer(); ?>