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
        <img class="widget-img" src="<?php the_field('image_widget'); ?>" alt="">
        <h3>
            <?php the_field('titre_widget'); ?>
        </h3>
        <a href="<?php the_field('lien_widget'); ?>">
            <?php the_field('nom_du_lien') ?>
        </a>
    </article>
    <?php endwhile; ?>
    <?php endif;
    wp_reset_postdata();
    ?>
</section>

<section> 
    <?php
    $args = array(
        'post_type' => 'post',
        'category_name' => 'Ecole',
    );
    $query = new WP_Query($args);
    ?>
    <?php if ($query->have_posts()): ?>
        <?php while ($query->have_posts()): $query->the_post(); ?>
            <h2> <?php the_title(); ?> </h2>
            <div class="ecole-info"> <?php the_content(); ?> </div>
            <button class="ecole-lien"><a href="">Découvrir l'école</a></button>
        <?php endwhile; ?>
        <?php endif; ?>
</section>

<?php
$args = array(
    'post_type' => 'Actualités'
);
$query = new WP_query($args);
?>


<h2>Actualités</h2>
<section class="actu-section">
    <?php if ($query->have_posts()): ?>
    <?php while ($query->have_posts()):
            $query->the_post(); ?>
    <article class="actu">
        <h3 class="actu-titre">
            <?php the_field('titre_'); ?>
        </h3>
        <div class="actu-contient">
            <img src="<?php the_field('image_article_') ?>" alt="">
            <div>
                <?php the_field('paragraphe_actualite'); ?>
            </div>
        </div>
        <button class="btn-actu"><a href="<?php the_permalink(); ?>">En savoir plus</a></button>
        <hr class="header_hr">
    </article>
    <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php
$args = array(
    'post_type' => 'Evenements'
);
$query = new WP_query($args);
?>
<h2>Évenements à venir</h2>
<section>
    <?php if ($query->have_posts()): ?>
    <?php while ($query->have_posts()):
            $query->the_post(); ?>
    <article>
        <h3>
            <?php the_field('titre_'); ?>
        </h3>
            <img src="<?php the_field('image_evenement') ?>" alt="">
                <?php the_field('paragraphe_evenement_'); ?>
                <?php the_field('date_evenement_'); ?>
                <?php the_field('lieu_evenement_'); ?>
                <?php the_field('categorie_evenement_'); ?>
    </article>
    <?php endwhile; ?>
    <?php endif; ?>
</section>



<?php get_footer(); ?>