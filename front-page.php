<?php

get_header();
?>

    <main id="primary" class="site-main">
<!-- dans la section banner il y a : l'image + la vidéo + le logo avec flotement -->
        <section class="banner">
<!-- mise en place de la vidéo en lecture au pop de la page + mute + lecture en boucle + bonne taille-->
    <video class="videoBanner" autoplay muted loop  poster="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?>">
    <source src="<?php echo get_stylesheet_directory_uri() . '/videos/Koukaki_video.mp4'; ?>" type="video/mp4">
         <!-- imgage statique d'arrière plan -->
         <div class="imgBanner">  
         <img src="<?php echo get_template_directory_uri() . '/assets/images/banner.png'; ?> " alt="imagede: Fleurs d'oranger et chats errants">
         </div>
        </video> 
     <!--mise en place du logo et animatien en sus  +du parallaxe sur la div entière-->
      <div class="parallaxe">
  <img class="logoBanner" src="<?= get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants" data-0="transform: translateY(0%);" data-500="transform: translateY(-100%);">
</div>

        </section>

        <!-- section "histoire"  -->
        <section id="#story" class="story">
            <h2><span class="Animetitre">L'histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <article id="characters">
                <div class="main-character">
                    <h3><span class="Animetitre">Les personnages</span></h3>

                    
				<!---- Ajout template-sections Carroussel --->
				<?php get_template_part('template-parts/swiper'); ?>
				<!---- fin Ajout template-sections Carroussel --->
                </div>

            </article>
            <!-- section lieux -->
            <article id="place" class="story__place">
                <div>
                    <h3><span class="Animetitre">Le Lieux</span></h3>
                    <?php echo get_theme_mod('place'); ?></p> 
                </div>

                <div>
                    <img id="NuagesBleu" src="<?php echo get_stylesheet_directory_uri() . '/asset/images/nuages-bleu.png'; ?> " alt="Nuages Bleu">
                </div>
            </article>
        </section>

        <!-- section "studio" -->
        <section id="studio">
            <h2><span class="Animetitre">Studio Koukaki</span></h2>

            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

         <!-- ici ajout du code pour l'ajout de la section "oscar" -->
        <?php get_template_part('template-parts/oscar'); ?>
        <!-- Fin de la section "oscar" -->
       
    </main><!-- #main -->

<?php
get_footer();


