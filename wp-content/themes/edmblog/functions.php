<?php 
// Start buffering to output php to header
	ob_start();

// Load styles and scripts
	function styles_scripts(){
		wp_enqueue_style(
				'bootstrap-styles',
				get_template_directory_uri().'/css/bootstrap.min.css'
			);
		wp_enqueue_style(
				'main-styles',
				get_template_directory_uri().'/css/styles.css'
			);
		/*wp_enqueue_style(
				'clean-blog-styles',
				get_template_directory_uri().'/css/clean-blog.css'
			);*/
		wp_enqueue_script(
				'jquery',
				'http://code.jquery.com/jquery.min.js'
			);
		wp_enqueue_script(
				'bootstrap-scripts',
				get_template_directory_uri().'/js/bootstrap.min.js'
			);
	}
// Call styles and scripts
 	add_action('wp_enqueue_scripts', 'styles_scripts');


// Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');

//Register Main Navigation
 	register_nav_menus( array(
    	'primary' => __( 'Primary Menu', 'edmblog' ),
	) );

//Register sidebar args
	$args = array(
		'name'          => 'main-sidebar',
		'id'            => 'sidebar',
		'description'   => 'Main Sidebar for Blog and Post Pages',
		'class'         => 'sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	);
 	
//Register sidebar 	
 	register_sidebar( $args );

//Add thumbnails 
 	add_theme_support( 'post-thumbnails' );

//Comment template

 	function comment_feed($comment, $args, $depth){
 	$GLOBAL['comment'] = $comment;

?>
	<div class="reply">
		
		<a href="<?php get_comment_author_url(); ?>" class="pull-left">
			<?php echo get_avatar(get_the_author_meta('ID')); ?>
		</a>
		
		<div class="media-body">

			<h5 class="media-heading">
				<a href="<?php get_comment_author_url(); ?>">
					<?php echo get_comment_author(); ?>
				</a>
				<small><?php comment_date(); ?> at <?php comment_time(); ?></small>
			</h5>

			<?php comment_text(); ?>
			
		</div>
			<?php comment_reply_link( array_merge($args, array(
				'reply_text' => __('<btn class="btn btn-sm btn-primary pull-right">reply</btn>'),
				'depth'      => $depth,
				'max_depth'  => $args['max_depth']
			)) ); ?>
	</div>

<?php }

//Filter for adding class to avatar image
add_filter('get_avatar', 'add_avatar_class');

function add_avatar_class($class){
	$class = str_replace("class='avatar", "class='img-circle", $class);

	return $class;
}








 ?>




