<?php get_header(); ?>
<h1>404</h1>
<p>La page que vous avez demandé est introuvable.</p>
<a href="<?php echo esc_url(home_url('/')); ?>">
               <button>Retour accueil </button>
                </a>
<?php get_footer(); ?>