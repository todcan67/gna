<?php get_header(); ?>
<div class="container">
<div id="content" class="row">
	<?php
		echo '<div class="topCatImageWrapper"><img class="topCatImage" src="';
		echo z_taxonomy_image_url($cat->term_id);
		echo '"></div>';
	?>
	<h1 class="text-center archive_title">
				<?php echo get_the_archive_title();?>
			</h1>
	<div id="main" class="<?php simple_boostrap_main_classes(); ?>" role="main">

		<div class="block block-title">

		</div>

		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<?php simple_boostrap_display_post(true); ?>

		<?php endwhile; ?>

		<?php simple_boostrap_page_navi(); ?>

		<?php else : ?>

		<article id="post-not-found" class="block">
		    <p><?php _e("No items found.", "simple-bootstrap"); ?></p>
		</article>

		<?php endif; ?>

	</div>

	<?php get_sidebar("left"); ?>
	<?php get_sidebar("right"); ?>

</div>

<?php get_footer(); ?>