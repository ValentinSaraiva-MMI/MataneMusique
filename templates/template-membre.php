<?php
/*
Template Name: Page Membre
*/
?>

<?php get_header(); ?>
<h2>PAGE MEMBRE</h2>
<?php if(post_password_required()) : ?>

<?php echo get_the_password_form(); ?>

<?php else : ?>
    <?php
        $args = array(
        'post_type' => 'post',
        'tag' => 'membre',
        );
        $query = new WP_Query($args);
    ?>
    <?php if ($query->have_posts()): ?>
        <?php while ($query->have_posts()): $query->the_post(); ?>
            <div>
                <h3> 
                    <?php the_title(); ?> 
                </h3>
                <div> 
                    <?php the_content(); ?> 
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php endif ?>
<?php 
wp_reset_postdata(); 
get_footer(); ?>