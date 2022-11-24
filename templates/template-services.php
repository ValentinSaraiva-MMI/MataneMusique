<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>


<section>
    <h2>Service</h2>
    <?php
    $args = array(
        'post_type' => 'Service',
    );
    $query = new WP_Query($args);
    ?>
    <?php if ($query->have_posts()): ?>
    <?php while ($query->have_posts()):
            $query->the_post(); ?>
    <article class="item-third">
        <img src="<?php the_field('image_du_services_'); ?>" alt="">
        <h3>
            <?php the_field('titre_service_'); ?>
        </h3>
        <p>
            <?php the_field('description_services_') ?>
        </p>
    </article>
    <?php endwhile; ?>
    <?php endif;
    wp_reset_postdata();
    ?>
</section>

<?php get_footer(); ?>