<?php /* Template Name: template Emplois */?>
<?php get_header(); ?>
<h1>Emplois</h1>

<div class="emploi-section">
<?php

        $args = array(

        'post_type' => 'post',

        'tag' => 'Emploi',

        );

        $query = new WP_Query($args);

    ?>


<?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()):
                    $query->the_post(); ?>
    
    <article class="post">
      <?php the_post_thumbnail(); ?>

      <h2><?php the_field('titre_de_lemploi_'); ?></h2>



      <div class="post__content">
        <?php the_field('presentation_de_lemploi_'); ?>
      </div>
    </article>

  <?php endwhile; endif; ?>
        </div>


<?php get_footer(); ?>