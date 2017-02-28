<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage cerealcat
 * @since cerealcat 1.1.6
 */

get_header(); ?>
		
		
		
		<div class="main-wrap">

			<?php
				/* Start the Loop */
				if( have_posts() ) : the_post(); ?>
				 <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="single-top">
				<img class="img-responsive" src="<?php echo the_post_thumbnail('full'); ?>">
				<p><?php the_content(); ?></p>
				<?php endif; ?>
				</div>
				</div>
				
				
			<?php	if ( comments_open() || get_comments_number() ) :
						comments_template();
						endif;
			?>

		<?php get_sidebar(); ?>
		
		</div>

<?php get_footer(); ?>

