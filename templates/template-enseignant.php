<?php
/*
Template Name: Notre équipe
*/
?>

<section>
    <?php
    $args = array(
        'post_type' => 'Enseignant',
        'category_name' => 'Enseignant'
    );
    $query = new WP_query($args);
    ?>
    <h1>Notre équipe</h1>

    <!-- Affichage des logos des réseaux social -->
    <?php if ($query->have_posts()): ?>
    <?php while ($query->have_posts()):
            $query->the_post(); ?>
    <pre>
            <?php print_r($query); ?>
            </pre>
    <article>
        <img src="<?php the_field('photo_du_professeur_') ?>" alt="">
        <h3>
            <?php the_field('prenom_nom_enseignants_'); ?>
        </h3>
        <p>
            <?php the_field('instrument_professeur'); ?>
        </p>
        <button><a href="<?php the_permalink(); ?>">En savoir plus</a></button>
    </article>
    <?php endwhile; ?>
    <?php endif; ?>
</section>