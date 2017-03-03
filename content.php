<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-body has-thumbnail">
		
		<div class="index-post-thumbnail">
			<?php the_post_thumbnail('indexmain');?>
		</div>
	
	<div class="entry-content">
		<header class="entry-header has-thumbnail">
			<hgroup class="entry-title">
				<h5 class="category-title">
					<a href="<?php get_category_link();?>"><?php echo the_category(); ?></a>
				</h5>
			
				<h1>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h1>
			</hgroup>
		</header>
		
		<div class="entry-text">
			<div class="excerpt"><?php the_excerpt(); ?><a href="" class="read">Read More</a>  </div>
			<div class="content"><?php the_content(); ?><a href="" class="read-less">Read Less</a></div>
		</div>
	</div>
	
	<div class="entry-meta has-thumbnail">
		<div class="posted-author">
			<time datetime="2014-09-20" class="icon">
			  <em>Saturday</em>
			  <strong>September</strong>
			  <span>20</span>
			</time>
		</div>
	</div>
</article>