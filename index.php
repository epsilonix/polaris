<!--
Author: Sam
Author URL: www.cerealcat.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
/* @package WordPress
 * @subpackage Polaris
 * @since Polaris 1
 */

get_header(); ?>

<div class="sticky-container">
<div class="sticky-wrap">

	<?php

		$sticky = get_option( 'sticky_posts' );
		rsort( $sticky );

		$args = array(
			'post__in' => $sticky,
			'posts_per_page' => 3
			);

		$sticky_query = new WP_Query( $args );

		while ( $sticky_query->have_posts() ) : $sticky_query->the_post(); ?>
		
			<?php get_template_part('content-sticky', get_post_format());?>
			
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>
</div>


<div class="main-wrap">
	
	<!-- Left Sidebar -->
	
	<div id="secondary" role="complementary">
	<?php get_sidebar();?>	
	</div>
	
	<!-- Center Content -->
	
	<div id="primary">
		<?php
		
		$args = array(
		'posts_per_page' => 10,
		'orderby' => 'most recent',
		);
		
		$the_query = new WP_Query( array( 'post__not_in' => get_option( 'sticky_posts') ) );
		?>
		
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
		<div class="post-holder" <?php post_class();?>>
			
			<div class="post-content dynamic">
			<?php get_template_part('content', get_post_format());?>
			</div>
			
			<div class="post-favs static">
			<label><?php echo the_time('F j,Y'); ?></label>
			</div>
			
		</div>
	
		<?php endwhile; else: ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		
	</div>		
</div>		

