<?php
/*
Template Name: Formulaire Inscription
*/
?>


<?php get_header(); ?>

<?php if (have_posts()) : ?>



<?php while (have_posts()) : the_post(); ?>



    <article class="inscription-container">

        <div class="inscription-width">

            <h2><?php the_title(); ?></h2>

            <p><?php the_content(); ?></p>

        </div>

    </article>



<?php endwhile; ?>



<?php else : ?>



<?php endif; ?>

<?php get_footer(); ?>