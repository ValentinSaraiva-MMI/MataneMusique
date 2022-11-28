<?php
/*
Template Name: Cours
*/
?>

<?php get_header(); ?>

<section>
    <?php
    $args = array(
        'post_type' => 'Cours', 
    );
    $query = new WP_query($args);
    ?>
    <h1>Nos cours</h1>

    <h2 class="titre-cours-individuel"> Cours en individuel </h2>
    <div class="text-cours-ind">
        <p>
            <li>Cette activité consiste en un cours de musique privé avec un professeur.<li>
            <li>L’horaire est déterminé selon les disponibilités de l’élève et du professeur.<li>
            <li>L’enseignement est adapté selon l’âge, le niveau et les connaissances de l’élève.<li>
            <li>L’élève fait l’apprentissage d’un instrument et développe sa technique et sa musicalité.<li>
        </p>

    </div>
    <div class="grid-cours">
        <?php if ($query->have_posts()): ?>
        <?php while ($query->have_posts()):
                $query->the_post(); ?>
        <article class="article-cours">
            <h2 class="titre-cours">
                <?php the_field('titre_du_cour'); ?>
            </h2>
            <img class="img-cours" src="<?php the_field('image_du_cours_') ?>" alt="">
            <button class="btn-cours"><a href="<?php the_permalink(); ?>">En savoir plus</a></button>
        </article>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>