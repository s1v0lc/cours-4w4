<?php
/**
 * Gabarit pour afficher les catégories de destinations
 */
?>
<div class="section_cat">  
    <?php
        $categories = get_categories();
        foreach ($categories as $cat) {
            $noms[] = $cat->name;
            $desc[] = $cat->description;
            $slug[] = $cat->slug;
            $nb[] = $cat->count;
        }
        foreach($categories as $cat) : ?>
        <?php if($cat->slug!="non-classe") :?>
        <div class="carte">
            <div class="titre">
                <h3><?= $cat->name; ?></h3>
                <p><a href="<?= "category/".$cat->slug; ?>">Lire Plus</a></p>
            </div>
            <p><?= wp_trim_words($cat->description, 10); ?></p>
            <h4><?= $cat->count; ?> destinations</h4>
        </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>