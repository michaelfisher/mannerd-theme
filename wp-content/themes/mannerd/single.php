<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>
				<div class="fb-like-single">
					<div class="fb-like" data-href="https://www.facebook.com/mannerdisms" data-layout="standard" data-action="like" data-width="275px" data-show-faces="true" data-share="false"></div>
					<div class="fb-like-caption">Like <a href="https://www.facebook.com/mannerdisms">Mannerd</a> on Facebook!</div>
				</div>
				<?php twentythirteen_post_nav(); ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>