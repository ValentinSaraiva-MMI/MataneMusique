<?php
/*
Template Name: Notre école
*/
?>

<?php get_header(); ?>

<section>
    <h1>Notre école</h1>
</section>

<section>
    <h2>Mission & Historique</h2>
    <div class="services-position">
        <div service-img>
            <?php
                $args = array(
                'post_type' => 'post',
                'tag' => 'services',
                );
                $query = new WP_Query($args);
            ?>
            <?php if($query -> have_posts()): $query->the_post(); ?>
                <?php if(has_post_thumbnail()) : ?> <!--Si le post à une image-->
                    <div class="services-image">
                        <?php the_post_thumbnail();?> <!--Affiche l'image-->
                    </div>
                <?php endif; ?>   
            <?php endif; ?>   
        </div>
        <div class="nos-services">
            <?php
                $args = array(
                'post_type' => 'post',
                'tag' => 'mission_et_historique',
                );
                $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()): $query->the_post(); ?>
                    <div class="un-service">
                        <h2> 
                            <?php the_title(); ?> 
                        </h2>
                        <div class="services-infos"> <?php the_content(); ?> </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>    
    </div>
</section>

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

<?php get_footer(); ?>