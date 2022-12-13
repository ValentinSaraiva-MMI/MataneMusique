<?php get_header(); ?>
<section class="page-404">

<h1 class="h1-404">404</h1>
<p class="p-404">La page que vous avez demandé est introuvable.</p>
<a href="<?php echo esc_url(home_url('/')); ?>">
               <button class="btn-404">RETOUR À L'ACCUEIL </button>
                </a>
</section>
<?php get_footer(); ?>