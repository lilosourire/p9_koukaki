<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du style.css du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Chargement du style.css du thème enfant
    //wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/sass/style.css', array());
    $file_name = '/sass/style.css'; // Nom du fichier CSS
	$style_path =  get_stylesheet_directory() . $file_name; // Chemin vers votre fichier CSS
	wp_enqueue_style(
        'theme-style', // Identifiant unique pour votre style
        get_stylesheet_directory_uri(). $file_name,
        array(), // Dépendances, le cas échéant
        file_exists($style_path) ? filemtime($style_path) : false // Version du fichier basée sur la date de dernière modification ( pour les probleme de cache)
    );
}


function carrousel() {
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js', array('jquery'), '10.3.1', true);
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css', array(), '10.3.1');
}
add_action( 'wp_enqueue_scripts', 'carrousel' );


function script_JS_Custo()
{
    // wp_enqueue_script('fadein-script', get_stylesheet_directory_uri() . '/js/scroll-fadePage.js', array('jquery'), '1.0', true);
    // appel de la page du flottement du logo:
    wp_enqueue_script('flottement-logo-script', get_stylesheet_directory_uri() . '/js/FlottementLogo.js', array('jquery'), '1.0', true);
    // Gestion des Animation des Titres
    wp_enqueue_script('custom-scripts', get_stylesheet_directory_uri() . '/js/animationTitre.js', array(), '1.0.0', true);
    // Parallaxe
    wp_enqueue_script('parallaxe-script', get_stylesheet_directory_uri() . '/js/Parallaxe.js', array('jquery'), '1.0', true);
    // Gestion des d�placements des Nuages
    wp_enqueue_script('Nuage-script', get_stylesheet_directory_uri() . '/js/animation_nuage.js', array('jquery'), '1.0.0', true);
    // Gestion du Menu Burger
    wp_enqueue_script('Burger-script', get_stylesheet_directory_uri() . '/js/menuBurger.js', array('jquery'), '1.0.0', true);
    // Gestion du Carrousel grace à la librairie Swiper
    wp_enqueue_script('Swiper-script', get_stylesheet_directory_uri() . '/js/swiper_carrousel.js', array('jquery'), '1.0.0', true);

    //appel de la page su scrollr
}
add_action('wp_enqueue_scripts', 'script_JS_Custo');

// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}
