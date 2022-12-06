<?php
/*
Template Name: Page Membre
*/
?>

<?php get_header(); ?>
<h2>PAGE MEMBRE</h2>
<?php if(post_password_required()) : ?>

<?php echo get_the_password_form(); ?>

    

<?php else : ?>
<?php endif ?>
<?php 
wp_reset_postdata(); 
get_footer(); ?>