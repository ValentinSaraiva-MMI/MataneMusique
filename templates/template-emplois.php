<?php /* Template Name: template Emplois */?>
<?php get_header(); ?>
<h1>Emplois</h1>

<div class="actu-section">
            <?php if ($query->have_posts()):?>
            <?php while ($query->have_posts()): $query->the_post(); ?>
                <article>
                    <h3>
                        <?php the_field('titre_de_lemploi_'); ?>
                    </h3>
                    <div>            
                        <div>
                            <?php the_field('presentation_de_lemploi_'); ?>
                        </div>
                    </div>
                    <hr class="header_hr">
                </article>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>


<?php get_footer(); ?>