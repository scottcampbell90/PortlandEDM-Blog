<?php get_header(); ?>

	<div class="container">
		
		<div class="row">
			
			<div class="col-md-8 col-lg-9 content">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php the_title( $before = '<h3>', $after = '</h3>', $echo = true); ?>

					<div class="post-image">
						<?php the_post_thumbnail(); ?>
					</div>
					
					<div class="post-content">
						<?php the_content(); ?>
					</div>
					
					<div class="post-comments">
						<?php comments_template(); ?>
					</div>
					

				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>

			</div>

			<div class="col-md-4 col-lg-3">
				
				<?php get_sidebar(); ?>

			</div>	

		</div>

	</div>

<?php get_footer(); ?>