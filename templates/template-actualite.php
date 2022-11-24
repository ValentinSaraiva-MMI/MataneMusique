<<?php /* Template Name: Gabarit Actualitée */?>

    <?php get_header(); ?>

    <div>
        <h3>
            <?php echo the_field('titre_') ?>
        </h3>
        <img src="<?php echo the_field('image_article_') ?>" alt="Image presentation article">
        <p>
            <?php echo the_field("paragraphe_actualite") ?>
        </p>

    </div>

    <?php get_footer() ?>

    <section class="flex">
        <h2 class="item-full">Nouvelles</h2>
        <?php
    $args = array(
        'post_type' => 'Enseignant',
        'category_name' => 'Enseignant'
    );
    $query = new WP_Query($args);
    ?>
        <?php if ($query->have_posts()): ?>
        <?php while ($query->have_posts()):
            $query->the_post(); ?>
        <article class="item-third">
            <h3>
                <?php the_title(); ?>
            </h3>
            <p>
                <?php the_excerpt(); ?>
            </p>
            <p><a href="<?php the_permalink(); ?>">En savoir plus </a></p>
        </article>
        <?php endwhile; ?>
        <?php endif;
    wp_reset_postdata();
    ?>

        <section>
            <?php
        $args = array(
            'post_type' => 'Widgets'
        );
        $query = new WP_query($args);
        ?>
        </section>
    </section>