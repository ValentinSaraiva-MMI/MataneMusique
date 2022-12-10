<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>

<header class="banner">
    <?php
    echo do_shortcode('[smartslider3 slider="3"]');
    ?>
</header>

<section class="widget">
    <?php
    $args = array(
        'post_type' => 'Widget',
    );
    $query = new WP_Query($args);
    ?>
    <?php if ($query->have_posts()): ?>
    <?php while ($query->have_posts()):
            $query->the_post(); ?>
    <article class="item-third widget-accueil">
        <div>
            <img class="widget-img" src="<?php the_field('image_widget'); ?>" alt="">
            <h3>
                <?php the_field('titre_widget'); ?>
            </h3>
        </div>
        <div> 
            <a href="<?php the_field('lien_widget'); ?>">
                <?php the_field('nom_du_lien') ?>
            </a>
        </div>
    </article>
    <?php endwhile; ?>
    <?php endif;
    wp_reset_postdata();
    ?>
</section>

<section class="ecole"> 
    <?php
    $args = array(
        'post_type' => 'post',
        'tag' => 'ecole',
    );
    $query = new WP_Query($args);
    ?>
    <?php if ($query->have_posts()): ?>
        <?php while ($query->have_posts()): $query->the_post(); ?>
            <h2> <?php the_title(); ?> </h2>
            <div class="ecole-info"> <?php the_content(); ?> </div>
            <button class="btn-bordure"><a href="<?php echo esc_url(home_url('/notre-ecole')); ?>">Découvrir l'école</a></button>
            <!-- Test animation btn bordure 
            <div class="test-btn">
                <a href="">
                <svg>
                    <defs>
                        <linearGradient id="grad1">
                            <stop offset="0%" stop-color="#dc0019"/>
                            <stop offset="100%" stop-color="#ff8e01" />
                        </linearGradient>
                    </defs>
                    <rect x="5" y="5" rx="20" fill="none" stroke="url(#grad1)"></rect>
                </svg>
                    <span>Découvrir l'école</span>
                </a>
            </div>-->
        <?php endwhile; ?>
        <?php endif; ?>
</section>

<?php
$args = array(
    'post_type' => 'Actualités',
    'posts_per_page' => 3
);
$query = new WP_query($args);
?>
<div class="position-actu-evnmt">
    <section class="actualite">
        <h2>Actualités</h2>
        <div class="actu-section">
            <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()):
                $query->the_post(); ?>
            <article class="actu">
                <h3 class="actu-titre">
                    <?php the_field('titre_'); ?>
                </h3>
                <div class="actu-contient">
                    <?php $image=get_field('image_article_') ?>
                    <?php if(!empty($image)): ?>
                        <img src="<?php the_field('image_article_') ?>" alt="">
                    <?php endif; ?>
                    <div>
                        <?php the_field('paragraphe_actualite'); ?>
                    </div>
                </div>
                <hr class="header_hr">
            </article>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <?php
    $args = array(
        'post_type' => 'Evenement',
        'posts_per_page' => 3,
    );
    $query = new WP_query($args);
    ?>


    <section>
        <h2>Évenements à venir</h2>
        <div class="position-evenement">
            <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()):
                    $query->the_post(); ?>
            <article>
                <div class="evenement-position">
                    <img src="<?php the_field('image_evenement') ?>" alt="">
                    <div class="evenement">
                        <div class="evenement-infos">    
                            <div class="evenement-categorie">
                                <?php the_field('categorie_evenement_'); ?>
                            </div>
                            <p>
                                <?php the_field('paragraphe_evenement_'); ?>
                            </p>
                        </div>
                        <div class="date-lieu">
                            <div class="evenement-date">
                                <p> DATE </p>
                                <div>
                                    <?php the_field('date_evenement_'); ?>
                                </div>
                            </div>
                            <div class="evenement-lieu">
                                <p> LIEU </p>
                                <div>
                                    <?php the_field('lieu_evenement_'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </article>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <div class="position-btn">
        <button class="btn-bordure"><a href="<?php echo esc_url(home_url('/nouvelles')); ?>">Découvrir plus de nouvelles</a></button>
    </div>
    
</div>



<?php 
wp_reset_postdata(); 
get_footer(); ?>