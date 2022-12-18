<?php /* Template Name: template Emplois */?>
<?php get_header(); ?>
<section>
        <h1>Emplois</h1>
</section>


<div class="emploi-section">
        <?php
                $args = array(
                'post_type' => 'post',
                'category' => 'Emploi',
                );
                $query = new WP_Query($args);
        ?>
        <?php if ($query->have_posts()): ?>
                <?php while ($query->have_posts()):
                        $query->the_post(); ?>
                        <article class="post">
                                <h2 class="titre_emplois"><?php the_field('titre_de_lemploi_'); ?></h2>
                                <div class="div_paragraphe_emplois">
                                        <p class="p_emplois"> <?php the_field('presentation_de_lemploi_'); ?></p>
                                </div>
                        </article>
                <?php endwhile; 
        endif; ?>
</div>

<?php get_footer(); ?>