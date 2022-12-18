<?php
/*
Template Name: Page Membre
*/
?>

<?php get_header(); ?>
<div class="search-results membre">
    <section>
        <h1>Page membre</h1>
    </section>
    <section>
<?php if(post_password_required()) : ?>

<?php echo get_the_password_form(); ?>

<?php else : ?>
    <?php
        $args = array(
        'post_type' => 'Membre',
        'tag' => 'membre',
        );
        $query = new WP_Query($args);
    ?>

    <?php if ($query->have_posts()): ?>
        <?php while ($query->have_posts()): $query->the_post(); ?>
                <article>
                    <h3> 
                        <?php the_title(); ?> 
                    </h3>
                    <?php the_content(); ?>
                </article>
        <?php endwhile; ?>
    <?php endif; ?>
<?php endif ?>  

</section>
</div>
<?php 
wp_reset_postdata(); 
get_footer(); ?>
