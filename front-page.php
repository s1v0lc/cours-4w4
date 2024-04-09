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
                    // print_r($cat);
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
    <div id="galerie" class="global diagonal">
        <section class="galerie__section">
            <h2>Galerie  (h2)</h2>
            <p>Lorem ipsum dolor sit amet,<a href="#">Lorem, ipsum.</a>  consectetur adipisicing elit. Minima <a href="#">Lorem, ipsum.</a>  velit qui unde odit quae, magni labore maiores facilis obcaecati dolore, ullam facere. Ducimus veniam reprehenderit, temporibus ab at possimus fugit?</p>
            <blockquote>Galerie ipsum, dolor sit amet consectetur adipisicing elit. Accusantium a, repellat alias qui ut in ratione optio quia quae minus repudiandae ducimus aliquid aperiam unde atque tempore non. Non, magnam.</blockquote>
        </section>
    </div>
    <div id="evenement" class="global">
        <section class="evenement__section">
            <h2>Événement</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#">Lorem, ipsum.</a>  Minima velit qui unde odit quae, <a href="#">Lorem, ipsum.</a>  magni labore maiores facilis obcaecati dolore, ullam facere. Ducimus veniam reprehenderit, temporibus ab at possimus fugit?</p>
             <blockquote>Événement ipsum, dolor sit amet consectetur adipisicing elit. Accusantium a, repellat alias qui ut in ratione optio quia quae minus repudiandae ducimus aliquid aperiam unde atque tempore non. Non, magnam.</blockquote>
        </section>
    </div>

    <?php  get_footer(); ?>
    