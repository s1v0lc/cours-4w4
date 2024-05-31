<?php
if (function_exists( 'add_theme_support' )) {
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'menus' );
  add_theme_support('custom-logo');
}

/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principale
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas ci nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principale de WP
 */
function _4w4_modifie_requete_principale( $query ) {
  if ( $query->is_home() && $query->is_main_query() && ! is_admin() ) {
    $query->set( 'category_name', 'populaire' );
    $query->set( 'orderby', 'title' );
    $query->set( 'order', 'ASC' );
  }
}
add_action( 'pre_get_posts', '_4w4_modifie_requete_principale' );

// Importation des Script
function ajouterScriptRecherche() {
  wp_enqueue_script('recherche.js', get_template_directory_uri() . '/js/recherche.js', array('jquery'), null, true);
  wp_enqueue_script('filtres.js', get_template_directory_uri() . '/js/filtres.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'ajouterScriptRecherche');


