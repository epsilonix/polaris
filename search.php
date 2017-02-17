<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Polaris
 
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<!--<section class="image-header">
</section>-->

<div id="main-wrap">
	
	<!-- Center Content -->
	<div id="primary">
		<?php
		
		$s = get_search_query();
		$args = array(
						's' =>$s
					);
		// The Query
		$the_query = new WP_Query( $args );
		?>
		
		<?php if ( have_posts()): ?>
		
		<h2> Search results for: <?php the_search_query();?></h2>
		
		<?php
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
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
	
	<!-- Left Sidebar -->
	<div id="tertiary" role="complementary">
		
	</div>
	
</div>		

