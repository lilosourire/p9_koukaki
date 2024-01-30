<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

    <!-- Définition des classes du corps de la page selon les paramètres WordPress -->
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <!-- Début du conteneur principal de la page -->
    <div id="page" class="site">
        <!-- Lien d'accès rapide pour les lecteurs d'écran -->
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

        <!-- En-tête du site -->
        <header id="masthead" class="site-header">
            <!-- Navigation principale du site -->
            <nav id="site-navigation" class="main-navigation">
                <!-- Bouton de bascule du menu pour les écrans mobiles -->
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </button>
                
                <!-- Liste des éléments de navigation -->
                <ul>
                    <li><a href="#story">Histoire</a></li>
                    <li><a href="#characters">Personnages</a></li>
                    <!-- Affichage du titre du site avec un lien vers la page d'accueil -->
                    <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
                    <li><a href="#place">Lieu</a></li>
                    <li><a href="#studio">Studio Koukaki</a></li>
                </ul>

                <?php
                // Vérifie si la fonction test_function est définie
                if (function_exists('test_function')) {
                    // Appelle la fonction de test
                    test_function();
                }
                ?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->
