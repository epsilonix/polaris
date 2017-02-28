<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_post_thumbnail('indexmain');?>
	<h6><?php the_category(); ?></h6>
	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

	<div class="excerpt"><?php the_excerpt(); ?><a href="" class="read">Read More</a>  </div>
	<div class="content"><?php the_content(); ?><a href="" class="read-less">Read Less</a></div>
</article>