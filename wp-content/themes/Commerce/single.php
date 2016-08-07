<?php get_header() ?>

<!--Content -->

<main class="content-main">
	<div class="content">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="post-main ">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title( );  ?></a></h1><span>(<?php the_time('j.m.Y' ); ?>)</span>
				<div class="post ">
					<?php the_post_thumbnail('full', 'class=imgstyle' ); ?>
					<?php the_content( ); ?>
				</div>	
				
		</div>
			
		<?php comments_template( ); ?>	
			
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?> 
        
	</div>
	
	<br>

	<?php get_sidebar( ); ?>

	</main>


<?php get_footer( ); ?>