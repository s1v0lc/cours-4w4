<?php
/**
 * Gabarit pour afficher carte de destinations
 */
?>
<!-- cartes destinations pop -->
    <?php $pos = strpos(get_the_title(), ",")?>
    <?php $titre = substr(get_the_title(), 0, $pos) ?>
    <?php $endroit = substr(get_the_title(), 1+$pos) ?>
    <div class="carte">
        <div class="titre">
            <h3><?= $titre ?></h3>
            <p><a href="<?= get_permalink(); ?>">Lire plus</a> </p>
        </div>
        <?= the_post_thumbnail(); ?>
        <h4><?= $endroit ?></h4>
        <p><?= wp_trim_words(get_the_content(),10); ?></p>
        <?php the_category() ?>
    </div>