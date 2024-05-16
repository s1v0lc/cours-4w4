<?php
/**
 * Gabarit pour afficher carte de destinations
 */
?>
<!-- Cartes catégories front-page -->
<!-- <?php
    $categories = get_categories();
    foreach ($categories as $cat) {
        $noms[] = $cat->name;
        $desc[] = $cat->description;
        $slug[] = $cat->slug;
        $nb[] = $cat->count;
    }
?>
<?php foreach($categories as $cat) : ?>
    <div class="carte">
        <div class="titre">
            <h3><?= $cat->name; ?></h3>
            <p><a href="<?= "category/".$cat->slug; ?>">Lire Plus</a></p>
        </div>
        <p><?= wp_trim_words($cat->description, 10); ?></p>
        <h4><?= $cat->count; ?> destinations</h4>
    </div>
<?php endforeach; ?> -->

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