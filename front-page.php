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
            <!-- Affichage des destination populaires  -->
            <h2>
                Destinations Populaires
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="#353913" d="M159.3 5.4c7.8-7.3 19.9-7.2 27.7 .1c27.6 25.9 53.5 53.8 77.7 84c11-14.4 23.5-30.1 37-42.9c7.9-7.4 20.1-7.4 28 .1c34.6 33 63.9 76.6 84.5 118c20.3 40.8 33.8 82.5 33.8 111.9C448 404.2 348.2 512 224 512C98.4 512 0 404.1 0 276.5c0-38.4 17.8-85.3 45.4-131.7C73.3 97.7 112.7 48.6 159.3 5.4zM225.7 416c25.3 0 47.7-7 68.8-21c42.1-29.4 53.4-88.2 28.1-134.4c-4.5-9-16-9.6-22.5-2l-25.2 29.3c-6.6 7.6-18.5 7.4-24.7-.5c-16.5-21-46-58.5-62.8-79.8c-6.3-8-18.3-8.1-24.7-.1c-33.8 42.5-50.8 69.3-50.8 99.4C112 375.4 162.6 416 225.7 416z"/>
                </svg>
            </h2>
            <div class="section_pop">
                <?php if (have_posts()):
                    while(have_posts()): the_post();  
                    get_template_part( 'gabarit/categorie-carte');
                    ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- Affichage des catégories de voyages -->
            <h2>
                Catégories
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#353913" d="M3.9 54.9C10.5 40.9 24.5 32 40 32H472c15.5 0 29.5 8.9 36.1 22.9s4.6 30.5-5.2 42.5L320 320.9V448c0 12.1-6.8 23.2-17.7 28.6s-23.8 4.3-33.5-3l-64-48c-8.1-6-12.8-15.5-12.8-25.6V320.9L9 97.3C-.7 85.4-2.8 68.8 3.9 54.9z"/>
                </svg>
            </h2>
            <div class="section_cat">
                <?php
                    // Appel du shortcode directement dans le fichier front-page.php
                    echo do_shortcode('[em_destination]');
                ?>
            </div>
        </section>
</div>
    <?php  get_footer(); ?>
    