<?php /* Template Name: Gabarit Actualitée */?>

    <?php get_header(); ?>

    
<?php
$args = array(
    'post_type' => 'Actualités',
    'posts_per_page' => 3
);
$query = new WP_query($args);
?>

<div class="position-actu-evnmt">
    <h1> Nouvelles </h1>
    <section class="actualite">
        <h2>Actualités</h2>
        <div class="actu-section">
            <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()):
                $query->the_post(); ?>
            <article class="actu">
                <h3 class="actu-titre">
                    <?php the_field('titre_'); ?>
                </h3>
                <div class="actu-contient">
                    <?php $image=get_field('image_article_') ?>
                    <?php if(!empty($image)): ?>
                        <img src="<?php the_field('image_article_') ?>" alt="">
                    <?php endif; ?>
                    <div>
                        <?php the_field('paragraphe_actualite'); ?>
                    </div>
                </div>
                <button class="btn-actu"><a href="<?php the_permalink(); ?>">En savoir plus</a></button>
                <hr class="header_hr">
            </article>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <!-- Test animation btn bordure -->
        <div class="test-btn">
                    <a href="http://marcel-pirnay.be/">
                    <svg>
                        <defs>
                            <linearGradient id="grad1">
                                <stop offset="0%" stop-color="#dc0019"/>
                                <stop offset="100%" stop-color="#ff8e01" />
                            </linearGradient>
                        </defs>
                        <rect x="5" y="5" rx="20" fill="none" stroke="url(#grad1)"></rect>
                    </svg>
                    <!--<span>Voir mes réalisations</span>-->
                        <span>Découvrir plus de nouvelles</span>
                    </a>
                </div>
    </section>

    <?php
    $args = array(
        'post_type' => 'Evenement',
        'posts_per_page' => 3,
    );
    $query = new WP_query($args);
    ?>


    <section>
        <h2>Évenements à venir</h2>
        <div class="position-evenement">
            <?php if ($query->have_posts()): ?>
            <?php while ($query->have_posts()):
                    $query->the_post(); ?>
            <article>
                <div class="evenement-position">
                    <img src="<?php the_field('image_evenement') ?>" alt="">
                    <div class="evenement">
                        <div class="evenement-infos">    
                            <div class="evenement-categorie">
                                <?php the_field('categorie_evenement_'); ?>
                            </div>
                            <div>
                                <?php the_field('paragraphe_evenement_'); ?>
                            </div>
                        </div>
                        <div class="date-lieu">
                            <div class="evenement-date">
                                <p> DATE </p>
                                <div>
                                    <?php the_field('date_evenement_'); ?>
                                </div>
                            </div>
                            <div class="evenement-lieu">
                                <p> LIEU </p>
                                <div>
                                    <?php the_field('lieu_evenement_'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </article>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
</div>