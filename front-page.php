<?php get_header(); ?>
<h2>Front-page.php</h2>
<div id="entete" class="global clr-primaire-100">
        <section class="entete__header">  
            <h1 class="bgc-text"><?= get_bloginfo('name'); ?></h1>
            <h3 class="bgc-text"><?= get_bloginfo('description'); ?></h3>
        </section>
    <?php get_template_part("gabarit/vague"); ?>
</div>
<div id="accueil" class="global bck-primaire-200 clr-primaire-400">
        <section class="accueil__section">
            <h2>Catégories</h2>
        <div class="section_cat">  
            <!-- Affichage des catégories de voyages -->
            <?php
                $categories = get_categories();
                foreach ($categories as $cat) {
                    $noms[] = $cat->name;
                    $desc[] = $cat->description;
                    $slug[] = $cat->slug;
                    $nb[] = $cat->count;
                }
                foreach($categories as $cat) : ?>
                <div class="carte">
                    <div class="titre">
                        <h3><?= $cat->name; ?></h3>
                        <p><a href="<?= "category/".$cat->slug; ?>">Lire Plus</a></p>
                    </div>
                    <p><?= wp_trim_words($cat->description, 10); ?></p>
                    <h4><?= $cat->count; ?> destinations</h4>
                </div>
                <?php endforeach; ?>
                <!-- Affichage des destination populaires  -->
        </div>
        <h2>Destinations Populaires</h2>
        <div class="section_pop">
            <?php if (have_posts()):
                // the_title() // echo du titre
                // get_the_title // string du titre
                while(have_posts()): the_post(); ?>
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
            <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
    <?php  get_footer(); ?>
    