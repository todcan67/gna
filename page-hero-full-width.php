<?php
/*
Template Name: hero Full Width Page
*/
?>

<?php get_header(); ?>
<div class="homePageHero">
 	<div class="inner cover">
 		<?php dynamic_sidebar('center-hero'); ?>
 		<p class="lead">
      		<a href="#" class="btn btn-lg btn-default amazon">Shop Amazon</a>
        </p>
  	</div>
</div>
<div class="homePagecontentWrapper">
	<div class="container">
		<div id="content" class="row">

			<div id="main" class="col-lg-12" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php simple_boostrap_display_post(false); ?>

				<?php comments_template(); ?>

				<?php endwhile; ?>

				<?php else : ?>

				<article id="post-not-found" class="block">
				    <p><?php _e("No pages found.", "simple-bootstrap"); ?></p>
				</article>

				<?php endif; ?>

			</div>

		</div>

	</div>



	<section class="featuredCategories"><!--bof post cats-->
		<div class="container">
			<h2>Featured Categories</h2>

				<?php foreach (get_categories() as $cat) :
					echo '<div class="col-sm-4 featuredPostImages">';
			        echo '<a href="' . get_category_link($cat->term_id) . '">' . '<div class="featuredPostImageTitles"><p>' . $cat->cat_name . '</p></a></div>';
			        echo '<a href="' . get_category_link($cat->term_id) . '" title="' . $cat->cat_name . '">';
			        echo '<img class="img-responsive" src="' . z_taxonomy_image_url($cat->term_id) . '"></a></div>';

		        endforeach; ?>

		</div>
	</section><!--eof post cats-->

	<section class="homePageSubscribe text-center"><!--bof homepage subscribe-->

		<div class="subscribeForm col-sm-6 col-sm-offset-3">
			<h2 class="white">Subscribe to get the latest updates</h2>
			<form class="form-group form-inline" name="subscribeForm" action=" ">
				<input type="text" class="form-control" name="subscribe" placeholder="Your email address"><button href="#" class=" btn  btn-info">Subscribe</button>
			</form>
		</div>

	</section><!--eof homepage subscribe-->

	<section class="featuredPosts"><!--bof recent posts-->
		<div class="container">
			<h2>Recent Posts</h2>

			<?php
			$posts = get_posts( array( 'posts_per_page' => 4 ) );
			foreach ( $posts as $_post ) {
				 if ( has_post_thumbnail( $_post->ID ) ) {
		        echo '<a href="' . get_permalink( $_post->ID ) . '">' . '<div class="col-sm-3 featuredPostImages">';
		        echo '<div class="featuredPostImageTitles"><p>' ;
		        echo get_the_title( $_post->ID );
		        echo '</p></div>';
		        echo '<a href="' . get_permalink( $_post->ID ) . '" title="' . esc_attr( $_post->post_title ) . '">';
		        echo  get_the_post_thumbnail( $_post->ID, 'full, img-responsive' ) ;
		        echo '</a></div>';

					 }
			}
			?>

		</div>
	</section><!--eof recent posts-->
	<section class="belowContentWidget">

		<div class="container">

                <?php dynamic_sidebar('bottom1'); ?>



        </div>


	</section>
</div>
<div class="container">
<?php get_footer(); ?>