<?php /* Template Name: Gabarit Actualitée */?>

<?php get_header(); ?>
    
<?php
    $args = array(
        'post_type' => 'Actualités',
    );
    $query = new WP_query($args);
?>

<div class="position-actu-evnmt nouvelles">
    <section>
        <h1> Nouvelles </h1>
    </section>
    <section class="actualite">
        <h2>Actualités</h2>
        <div class="actu-section">
            <?php if ($query->have_posts()):?>
            <?php while ($query->have_posts()): $query->the_post(); ?>
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
            <a class="btn-plus-actu" href="#">
                <svg>
                    <defs>
                        <linearGradient id="grad1">
                            <stop offset="0%" stop-color="#dc0019"/>
                            <stop offset="100%" stop-color="#ff8e01" />
                        </linearGradient>
                    </defs>
                    <rect x="5" y="5" rx="20" fill="none" stroke="url(#grad1)"></rect>
                </svg>
                <span> Découvrir plus d'actualités </span>
            </a>
        </div>
    </section>

    <?php
        $args = array(
            'post_type' => 'Evenement',
        );
        $query = new WP_query($args);
    ?>

    <section>
        <h2>Évenements à venir</h2>
        <div class="position-evenement">
            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()): $query->the_post(); ?>
                    <article class="plus-evenmt">
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
        <div class="test-btn">
            <a class="btn-plus-evenement" href="#">
                <svg>
                    <defs>
                        <linearGradient id="grad1">
                            <stop offset="0%" stop-color="#dc0019"/>
                            <stop offset="100%" stop-color="#ff8e01" />
                        </linearGradient>
                    </defs>
                    <rect x="5" y="5" rx="20" fill="none" stroke="url(#grad1)"></rect>
                </svg>
                <span> Découvrir plus d'actualités </span>
            </a>
        </div>
    </section>
</div>
<script>
    
    /* Actu */

    let btn_actu = document.querySelector(".btn-plus-actu");
    console.log(btn_actu)
    btn_actu.addEventListener("click", affiche_plus);

    let nb_actualite = document.querySelectorAll(".actu").length;
    let actu = document.querySelector(".actu");
    
    function compte() {
        console.log("compte")
        for (let i = 0; i < nb_actualite; i++) {
            console.log("ca marche");
            if (i >= 3) {
                console.log("encore mieux")
                actu.style.display="none";
            }
        }
    }

    compte()

    function affiche_plus() {
        actu.style.display="block";
    }  


    /* Evenement */

    let btn_evenement = document.querySelector(".btn-plus-evenement");
    btn_evenement.addEventListener("click", affiche_plus_evenement);

    let nb_evenement = document.querySelectorAll(".plus-evenmt").length;
    let evnmt = document.querySelector(".plus-evenmt");
    
    function compte_evenement() {
        for (let i = 0; i < nb_evenement; i++) {
            if (i >= 3) {
                evnmt.style.display="none";
            }
        }
    }

    compte_evenement()

    function affiche_plus_evenement() {
        evnmt.style.display="block";
    } 

</script>

<?php get_footer(); ?>

