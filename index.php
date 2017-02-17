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
	<div id="tertiary">
		
	</div>
	
	<div id="main-wrap">
	
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
		
		<div class="post-holder">
			<div class="left-content static">
				<label><?php echo the_time('F j,Y'); ?></label>
			</div>
			
			<div class="middle-content dynamic">
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<a href="<?php the_permalink(); ?>"><img src=<?php echo the_post_thumbnail('index-image');?></a>
					<h6><?php the_category(); ?></h6>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					
					<div class="excerpt"><?php the_excerpt(); ?><a href="" class="read">Read More</a>  </div>
					<div class="content"><?php the_content(); ?><a href="" class="read-less">Read Less</a></div>
					
				</article>
			</div>
			
			<div class="right-content static">
			
			</div>
		</div>
	
		<?php endwhile; else: ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
		
	</div>		
	
	<!-- Right Sidebar -->
	<div id="secondary" role="complementary">
		<?php get_sidebar();?>
			
	</div>
	

	
</div>		

