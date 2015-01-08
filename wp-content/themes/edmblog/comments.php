<?php if ( 'open' == $post->comment_status ) : ?>

<div id="respond">
	<div class="row">
		<div class="col-md-8 comment-form">

			<!-- Comments Header -->
			<h4>Leave a Comment:</h4>

			<?php cancel_comment_reply_link(); ?>


			<!-- If user is not registered, give login message -->
			<?php if ( get_option( 'comment_registration' ) && !$user_ID ) : ?>
				
				<!-- Login message -->
				<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>

			<?php else : ?>

			<!-- If user is logged in, give comment form -->
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

				<!-- If user ID, Display it, and give Logout Button -->
				<?php if ( $user_ID ) : ?>
					
					<!-- Display User Name -->
					<p>Logged in as <a class="btn btn-small btn-info" href="<?php echo get_option( 'siteurl' ); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>

					<!-- Display Logout Button -->
					<a class="btn btn-small btn-danger"href="<?php echo wp_logout_url( get_permalink() ); ?>" title="Log out of this account">Log out &raquo;</a></p>

				<!-- Display Comment Form if user is logged in -->
				<?php else : ?>
				
					<!-- Name Text Field -->
					<div class="form-group">
						<input type="text" name="author" class="form-control" id="author" placeholder="Name <?php if ( $req ) echo '( required )'; ?>" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
					</div>

					<!-- Email Text Field -->
					<div class="form-group">
						<input type="text" name="email" id="email" class="form-control" placeholder="Email ( <?php if ( $req ) echo 'required, '; ?>never shared )" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
					</div>

					<!-- Website Text Field -->
					<div class="form-group">
						<input type="text" name="url" id="url" class="form-control" placeholder="Website (optional)" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
					</div>
						
				<?php endif; ?>

					<!-- Comment Text Area -->
					<div class="form-group">
						<textarea name="comment" id="comment" class="form-control" cols="100%" rows="10" tabindex="4"></textarea>
					</div>

				<!-- Submit Btn -->
				<input name="submit" class="btn btn-primary" type="submit" id="submit" tabindex="5" value="Submit Comment" />
				
				<!-- Submit Comment-->
				<?php do_action( 'comment_form', $post->ID ); comment_id_fields(); ?>

			</form>

			<?php endif; // If registration required and not logged in ?>
		</div>


<?php endif; // If comments are open: delete this and the sky will fall on your head ?>





		<div class="col-md-12">
		<h4>Comments: <?php comments_number( $zero = ' Be the first to comment!', $one = '(1)', $more = '(%)' ); ?></h4>
<?php 		
//List comment feed
			wp_list_comments(
				array(
					'type'      => 'comment',
					'callback'  => 'comment_feed'
					)
			 );

 ?>
		</div>

	</div><!-- /.row -->
</div><!-- /.respond -->


