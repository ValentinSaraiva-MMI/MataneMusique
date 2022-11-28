<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>


<section>
    <h2>Services</h2>
    <div> 
        <?php
        $args = array(
        'post_type' => 'post',
        'tag_name' => 'services',
        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()): $query->the_post(); ?>
                <div class="ecole-info"> <?php the_content(); ?> </div>
            <?php endwhile; ?>
            <?php endif; ?>
    </div>
    <div>
    <div class="widget services">
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
    </div>
        <div>
        <?php
        $args = array(
        'post_type' => 'post',
        'tag_name' => 'imageservices',
        );
        $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()): $query->the_post(); ?>
                <div class="ecole-info"> <?php the_content(); ?> </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>