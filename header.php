<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?> ">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="Portée par le désir d’offrir une formation musicale de qualité et d’être une porte ouverte sur la culture, l’École de musique de Matane se veut un lieu vivant, inclusif et chaleureux. En tant qu’acteur clé du paysage culturel de La Matanie, l’École souhaite apporter sa contribution à la vie culturelle et citoyenne de la région en présentant à la population une variété de cours et d’activités musicales pour tous les âges et tous les goûts, qui sont autant de moyens de s’exprimer, de s’épanouir et de socialiser.">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">
    

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>



    <div class="div_header">
        <div> 
            <figure class="header_logo_column">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/images/logoEcoleDeMusique.png' ?> "
                        class="header_logo" alt="logo ecole de musique de Matane">
                </a>
                <figcaption>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="header_logo_description">
                        <?php bloginfo('name'); ?>
                    </a>
                </figcaption>
            </figure>
        </div>

        <!-- Menu mobile -->

        <div class="header_parent">
            <label class="toggle-button">
                <input type="checkbox">
                <span class="menu-burger">
                    <span class="bar"></span>
                </span>
                <div class="nav-container mobile">
                    <?php
                        $args = array(
                            'theme_location' => 'menu-principal'
                        );
                        wp_nav_menu($args);
                    ?>
                    <div class="mobile-nav">
                    <a href="<?php echo esc_url(home_url('/don')) ?>"> <button class="header_button_mobile">Faire un don</button> </a>
                    <a href="<?php echo esc_url(home_url('/formulaire-inscription')); ?>"> <button class="header_button_mobile">S’inscrire</button></a>
                        <button class="header_button_mobile" onclick="<?php echo esc_url(home_url('/membre')); ?>"> 
                            <img src="<?php echo get_template_directory_uri() . '/images/icons/profileicon.png' ?> " class="header_icons2" alt="icons profile"> 
                        </button>
                    </div>
                </div>
            </label>

            <!-- Menu desktop -->

            <div class="div_header_haut">
                <form action="<?php echo esc_url(home_url('/')) ?>" class="search-form" method="get">
                    <input type="text" class="search-input" name="s" placeholder="Rechercher">
                    <button type="submit" value="Rechercher" class="header_search"> <i
                            class="fa-solid fa-magnifying-glass"></i> </button>
                </form>
                <a href="<?php echo esc_url(home_url('/don')) ?>"> <button class="header_button">Faire un don</button> </a>
                <a href="<?php echo esc_url(home_url('/formulaire-inscription')); ?>"> <button class="header_button">S’inscrire</button></a>
                <a class="header_telephone" href="tel:+1-418-562-4212"> 418-562-4212</a>
                <a href="https://www.facebook.com/people/%C3%89cole-de-musique-de-Matane/100063641619675/"
                    target="_blank"> <img
                        src="<?php echo get_template_directory_uri() . '/images/icons/facebooklogo.png' ?> "
                        class="header_icons" alt="icons facebook"> </a>
                <a href="<?php echo esc_url(home_url('/membre')); ?>"> <img src="<?php echo get_template_directory_uri() . '/images/icons/profileicon.png' ?> "
                        class="header_icons2" alt="icons profile"> </a>
            </div>

            <nav>
                <div class="nav-container desktop">
                    <?php
                    $args = array(
                        'theme_location' => 'menu-principal'
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
                <hr class="header_hr anim-header">
            </nav>
        </div>
    </div>

    <main class="container">


<script>
    function page_active() {
        document.querySelector(".current-menu-item").style.color = "#dc0019"
    }
    page_active()
</script>