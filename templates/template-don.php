<?php /* Template Name: Gabarit Don */?>

<?php get_header(); ?>

<h1> Faire un don </h1>


<div class="faire-don">
    <?php
        $args = array(
        'post_type' => 'post',
        'tag' => 'don',
        );
        $query = new WP_Query($args);
    ?>
    <div class="position-don">
        <?php if($query -> have_posts()): $query->the_post(); ?>
            <?php if(has_post_thumbnail()) : ?> <!--Si le post à une image-->
                <div class="image-don">
                    <?php the_post_thumbnail();?> <!--Affiche l'image-->
                </div>
            <?php endif; ?>   
        <?php endif; ?>
        <?php
            $args = array(
            'post_type' => 'post',
            'tag' => 'don',
            );
            $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()): $query->the_post(); ?>
                <div class="un-service">
                    <div class="ecole-info don"> <?php the_content(); ?> </div>
                    <button class="btn-actu"><a> Soutenir l'école </a></button>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
