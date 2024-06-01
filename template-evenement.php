<?php
/**
 * Template name: Evenement
 * url: http://localhost:8080/4w4_clovis/conference/
 */
?>

<?php get_header(); ?>
<main class="page_conference">
        <!-- Titre -->
        <h1><?= get_the_title(); ?></h1>
        <!-- Vague -->
        <div class="vague__header">
            <?php get_template_part("gabarit/vague"); ?>
        </div>
        <!-- Contenu de la page -->
        <div class="conference__contenu">
            <?php the_content();?>
            <!-- ACF -->
            <div class="conference__acf">
                <p>L'adresse de l'evénement: <?php the_field('adresse'); ?></p>
                <p>La date et l'heure de l'événement: <?php the_field('date_et_heure'); ?></p>     
            </div>
        </div>
    <!-- Vague -->
    <div class="vague__footer">
        <?php get_template_part("gabarit/vague"); ?>
    </div>
</main>
<?php
get_footer();