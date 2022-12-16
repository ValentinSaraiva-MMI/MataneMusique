<?php
/*
Template Name: Formulaire inscription
*/
?>


<?php get_header(); ?>

<section class="form-inscription">

    <h1><?php the_title(); ?></h1> 

    <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <article class="inscription-container">

            <div class="inscription-width">

                <p><?php the_content(); ?></p>

            </div>

        </article>

<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

</section>

<?php get_footer(); ?>