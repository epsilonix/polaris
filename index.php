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

<!--<section class="image-header">
</section>-->

		<!-- Left Sidebar -->
	<div id="left-wrap">
		
	</div>
	
	<div class="main-wrap">
	
	
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
		
		$the_query = new WP_Query( $args );
		?>
		
		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
		<div class="post-holder" <?php post_class();?>>
			<div class="post-time static">
				<label><?php echo the_time('F j,Y'); ?></label>
			</div>
			
			<div class="post-content dynamic">
			<?php get_template_part('content', get_post_format());?>
			</div>
		</div>
	
		<?php endwhile; else: ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		
	</div>		
	
	<!-- Right Sidebar -->

	

	
</div>		

