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
            <ul>
                <li>Cette activité consiste en un cours de musique privé avec un professeur.</li>
                <li>L’horaire est déterminé selon les disponibilités de l’élève et du professeur.</li>
                <li>L’enseignement est adapté selon l’âge, le niveau et les connaissances de l’élève.</li>
                <li>L’élève fait l’apprentissage d’un instrument et développe sa technique et sa musicalité.</li>
            </ul>
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

    <div class=tarif-ind>
    <h2 class="titre-cours-individuel"> Tarification individuelle </h2>
        <div class=table-tarif>
            <table>
                <tr>
                    <th>Étudiant</th>
                    <th>À la leçon</th>
                    <th>Adulte</th>
                    <th>À la leçon</th>
                </tr>

                <tr>
                    <td>40 minutes par semaine</td>
                    <td>23,60$</td>
                    <td>40 minutes par semaine</td>
                    <td>27,20$</td>
                </tr>
                <tr>
                    <td>50 minutes par semaine</td>
                    <td>29,50$</td>
                    <td>50 minutes par semaine</td>
                    <td>34,00$</td>
                </tr>
                <tr>
                    <td>60 minutes par semaine</td>
                    <td>35,40$</td>
                    <td>60 minutes par semaine</td>
                    <td>40,80$</td>
                </tr>
            </table>
        </div>
        <div class="text-tarif">
                     > 26,50$ / heure pour les élèves du niveau de base au niveau 4. <br> 

                    >  29,50$ / heure pour les élèves de niveau 5 et plus en instrument ou en chant. <br>

                    > Les élèves inscrits en instrument à vent ou à cordes (sauf guitare) pourraient avoir des frais de pianiste accompagnateur à l’occasion de classes d’ensemble, de pratiques, de concerts et d’examens instrumentaux.
        </div>
    </div>

</section>

<?php get_footer(); ?>