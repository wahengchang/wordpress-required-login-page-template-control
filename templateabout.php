<?php
/**
 * Template Name: templateabout
 */
get_header();
?>

<?php if(is_user_logged_in()): ?>
	<?php the_content(); ?>
<?php else: ?>
	You can not view, required login.
<?php endif; ?> 

<?php get_footer(); ?>
