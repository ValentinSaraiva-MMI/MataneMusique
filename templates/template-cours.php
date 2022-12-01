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

    <div class="">
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


    <h2 class="titre-cours-individuel"> Tarification individuelle </h2>
    <div class=tarif-ind>
        <div class=table-tarif>
            <table>

                <thead>
                    <tr class="titre-table">
                        <th><bold> Prix à la leçon</bold></th>
                        <th>40 minutes par semaine</th>
                        <th>50 minutes par semaine</th>
                        <th>60 minutes par semaine</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="text-table">
                        <td class="orange">Étudiant</td>
                        <td>23,60$</td>
                        <td>29,50$</td>
                        <td>35,40$</td>
                    </tr>
                    <tr>
                        <td class="orange">Adulte</td>
                        <td>27,20$</td>
                        <td>30,00$</td>
                        <td>40,80$</td>
                    </tr>
                </tbody>

            </table>
        </div>
        <div class="">
    <?php
        $args = array(
        'post_type' => 'post',
        'tag' => 'text-info-tarif-ind',
        );
        $querytarifind = new WP_Query($args);
        ?>
        <?php if ($querytarifind->have_posts()): ?>
        <?php while ($querytarifind->have_posts()): $querytarifind->the_post(); ?>
        <div class="">
            <h2>
                <?php the_title(); ?>
            </h2>
            <div class="text-tarif"> <?php the_content(); ?> </div>
        </div>
<?php endwhile; ?>
<?php endif; ?>
           
        </div>
    </div>

</section>

<?php get_footer(); ?>