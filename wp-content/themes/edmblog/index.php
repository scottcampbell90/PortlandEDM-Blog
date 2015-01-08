<?php get_header(); ?>

    <!-- Main Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview content">

                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <a href="<?php the_permalink(); ?>">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                        </a>
                        <p class="text-muted">Posted By: <?php the_author(); ?> on <?php the_time(); ?></p>
                        
                        <div class="post-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                    
                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                        


                    <?php endwhile; ?>
                        <!-- post navigation -->
                    <?php else: ?>
                        <!-- no posts found -->
                    <?php endif; ?>
                
                </div>
                <hr> 
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    
    <?php get_footer(); ?>

    </body>
</html>
    