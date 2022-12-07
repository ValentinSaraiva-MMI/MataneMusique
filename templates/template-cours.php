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
    <!-- Cours individuels -->
    <div>
        <!-- description générale des cours individuels -->
        <div class="description-cours">
            <?php
                $args = array(
                'post_type' => 'post',
                'tag' => 'description_cours_individuel',
                );
                $querycours = new WP_Query($args);
            ?>
            <?php if ($querycours->have_posts()): ?>
                <?php while ($querycours->have_posts()): $querycours->the_post(); ?>
                <div class="">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <div class="text-cours-ind"> <?php the_content(); ?> </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <button class="btn-bordure"><a href="">S'inscrire</a></button>
        </div>

        <!-- grille de cours individuels -->
        <div class="grid-cours">
            <?php
                $args = array(
                'post_type' => 'Cours',
                'category_name' => 'Cours_individuels',
                );
                $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()): $query->the_post(); ?>
                    <article class="article-cours">
                        <h2 class="titre-cours">
                            <?php the_field('titre_du_cour'); ?>
                        </h2>
                        <div class="ombre-cours">
                            <img class="img-cours" src="<?php the_field('image_du_cours_') ?>" alt="">
                        </div>
                        <button class="btn-cours"><a href="<?php the_permalink(); ?>">En savoir plus</a></button>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <h2 class="titre-cours-individuel"> Tarification individuelle </h2>

    <div class=tarif-ind>
        <!-- tableau tarif individuel-->
        <div class=table-tarif>    
            <?php
                $args = array(
                'post_type' => 'post',
                'tag' => 'description-cours-groupe',
                );
                $querycours = new WP_Query($args);
            ?>
            <?php if ($querycours->have_posts()): ?>
                <?php while ($querycours->have_posts()): $querycours->the_post(); ?>
                <div class="">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <div class="text-cours-ind"> <?php the_content(); ?> </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <button class="btn-bordure"><a href="">S'inscrire</a></button>
        </div>

        <!-- grille de cours de groupe -->
        <div class="grid-cours">
            <?php
                $args = array(
                'post_type' => 'Cours',
                'category_name' => 'Cours_groupe',
                );
                $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()): $query->the_post(); ?>
                    <article class="article-cours">
                        <h2 class="titre-cours">
                            <?php the_field('titre_du_cour'); ?>
                        </h2>
                        <div class="ombre-cours">
                            <img class="img-cours" src="<?php the_field('image_du_cours_') ?>" alt="">
                        </div>
                        <button class="btn-cours"><a href="<?php the_permalink(); ?>">En savoir plus</a></button>
                    </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class=tarif-ind>
            <!-- tableau tarif groupe -->
            <div class=table-tarif>    
                <?php
                    $args = array(
                    'post_type' => 'post',
                    'tag' => 'table_cours_groupe',
                    );
                    $querytabletarif = new WP_Query($args);
                ?>
                <?php if ($querytabletarif->have_posts()): ?>
                    <?php while ($querytabletarif->have_posts()): $querytabletarif->the_post(); ?>
                        <div class="">
                            <div class="text-tarif"> <?php the_content(); ?> </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        
            <!-- texte tarif groupe -->
            <div class="">
                <?php
                    $args = array(
                    'post_type' => 'post',
                    'tag' => 'text-info-tarif-groupe',
                    );
                    $querytarifind = new WP_Query($args);
                ?>
                <?php if ($querytarifind->have_posts()): ?>
                    <?php while ($querytarifind->have_posts()): $querytarifind->the_post(); ?>
                        <div class="frais-accompagnement">
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <div class="text-tarif"> <?php the_content(); ?> </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>   
            </div>
        </div>
    </div>

    <!-- Tableau tarif groupe -->

    <div class=table-tarif>    
            <?php
                $args = array(
                'post_type' => 'post',
                'tag' => 'table_tarif_groupe',
                );
                $querytabletarif = new WP_Query($args);
            ?>
            <?php if ($querytabletarif->have_posts()): ?>
                <?php while ($querytabletarif->have_posts()): $querytabletarif->the_post(); ?>
                    <div class="">
                        <div class="text-tarif"> <?php the_content(); ?> </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>


</section>

<?php get_footer(); ?>