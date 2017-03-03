<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_post_thumbnail('indexsticky');?>
		
		<hgroup class="entry-title">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		</hgroup>
		
	</header>
		
</article>