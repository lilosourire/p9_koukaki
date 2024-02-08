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

            <!-- ici début du menue hanburger -->
            <div class="boutonMenu">
            <span> </span>    
<!-- 
1 suprimer le menue original
2 création du menue burger cf js : Au clic sur le burger, le reste de l’écran est recouvert par le menu -->

<!-- nouvelle navigation -->
</nav><!-- #site-navigation -->
<!-- les sections du menu -->
<section class="menu-items MenuFull">
    <div class="menu-items__container">
<!-- mise en place du logo + image -->
          <img class="logoMenu"         src="<?php echo get_stylesheet_directory_uri() . '/asset/images/logo-en-paralax.png'; ?>" alt="logo menu en parallaxe">		      
<!-- ici mise en placce des autres images, classe + appel + alt -->
        <img id="catMenuBleu"         src="<?php echo get_stylesheet_directory_uri() . '/asset/images/bluecat.png'; ?>" alt="Chat violet">
        <img id="catMenuBlack"        src="<?php echo get_stylesheet_directory_uri() . '/asset/images/blackcat.png'; ?>" alt="Chat noir">
        <img id="catMenuOrange"       src="<?php echo get_stylesheet_directory_uri() . '/asset/images/orangecat.png'; ?>" alt="Chat orange">
        <img id="fleurMenuSunFlower"  src="<?php echo get_stylesheet_directory_uri() . '/asset/images/Sunflower.png'; ?>" alt="marguerite blanche">
        <img id="fleurMenuOrchid"     src="<?php echo get_stylesheet_directory_uri() . '/asset/images/orchid.png'; ?>" alt="Orchidée violette">
        <img id="fleurMenuHibiscus"   src="<?php echo get_stylesheet_directory_uri() . '/asset/images/hibiscus_footer.png'; ?>" alt="Hibiscus">
        <img id="fleurMenuRandom"     src="<?php echo get_stylesheet_directory_uri() . '/asset/images/random_flower.png'; ?>" alt="petite Fleur violette">
        <img id="fleurMenuFlower"     src="<?php echo get_stylesheet_directory_uri() . '/asset/images/flower.png'; ?>" alt="petite Fleur orange">

        <!-- Liste des éléments du menu avec des liens la classe permet le fade-->

        <ul class="liste">
            <li><a href="#story"><span class="Animetitre">Histoire</span></a></li>
            <li><a href="#characters"><span class="Animetitre">Personnages</span></a></li>
            <li><a href="#place"><span class="Animetitre">Lieu</span></a></li>
            <li><a href="#studio"><span class="Animetitre">Studio KOUKAKI</span></a></li>
        </ul>
        <!-- mise en place du paragraphe niveau menu -->
        <p class="menuParagraphe">STUDIO KOUKAKI</p>
    <!--menu-item_container  -->
    </div>
<!-- menu-items MenuFull -->
</section>

            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->
