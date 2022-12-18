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
                    <hr class="header_hr">
                </article>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <button id="btn-plus-actu" class="btn-bordure btn-plus-actu">Découvrir plus d'actualités</button>
    </section>

    <?php
        $args = array(
            'post_type' => 'Evenement',
        );
        $query = new WP_query($args);
    ?>

    <section>
        <h2>Évènements</h2>
        <div class="position-evenement">
            <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()): $query->the_post(); ?>
                    <article class="plus-evenmt">
                        <div class="evenement-position">
                            <img src="<?php the_field('image_evenement') ?>" alt="">
                            <div class="evenement">
                                <div class="evenement-infos">    
                                    <p class="evenement-categorie">
                                        <?php the_field('categorie_evenement_'); ?>
                                    </p>
                                    <p>
                                        <?php the_field('paragraphe_evenement_'); ?>
                                    </p>
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
        <div class="position-btn">
            <button id="btn-plus-evenement" class="btn-bordure btn-plus-evenement">Découvrir plus d'évènements</button>
        </div>
    </section>
</div>

<script>
    /* Afficher plus d'actu et d'évènements aaffiche les 3 premiers qui ont été écrits et non les 3 derniers, je n'ai pas réussi à le faire correctement */

    /* Actu */
    let btn_actu = document.querySelector("#btn-plus-actu");
    console.log(btn_actu)
    btn_actu.addEventListener("click", affiche_plus);

    let nb_actualite = document.querySelectorAll(".actu").length;
    let actu = document.querySelector(".actu");
    
    function compte() {
        for (let i = 0; i < nb_actualite; i++) {
            if (i >= 3) {
                console.log("encore mieux")
                actu.style.display="none";
                btn_actu.style.display = "block"
            } else {
                btn_actu.style.display = "none"
            }
        }
    }
    compte()

    function affiche_plus() {
        actu.style.display = "block";
    }  


    /* Evenement */

    let btn_evenement = document.querySelector("#btn-plus-evenement");
    btn_evenement.addEventListener("click", affiche_plus_evenement);

    let nb_evenement = document.querySelectorAll(".plus-evenmt").length;
    let evnmt = document.querySelector(".plus-evenmt");
    
    function compte_evenement() {
        for (let i = 0; i < nb_evenement; i++) {
            if (i >= 3) {
                evnmt.style.display="none";
                btn_evenement.style.display = "block"
            } else {
                btn_evenement.style.display = "none"
            }
        }
    }

    compte_evenement()

    function affiche_plus_evenement() {
        evnmt.style.display="block";
    } 
</script>

<?php get_footer(); ?>