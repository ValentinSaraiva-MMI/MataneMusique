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

      
<!-- --> 
    </article>

  <?php endwhile; endif; ?>
        </div>


<?php get_footer(); ?>