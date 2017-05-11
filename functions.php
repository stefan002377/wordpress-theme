<?php
/**
 * Wysdom functions and definitions
 *
 * @package Wysdom
 */
 
/*
 * Loads the Options Panel
 *
 */

/*----------------------------*/
/*	Adding customizer with kirki 
/*----------------------------*/ 
include_once( dirname( __FILE__ ) . '/lib/customizer.php' );
include_once( dirname( __FILE__ ) . '/lib/kirki/kirki.php' );
 
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @see http://developer.wordpress.com/themes/content-width/Enqueue
 */
 
if ( ! isset( $content_width ) ) {
	$content_width = 1170; /* pixels */
}


/**
 * Theme support and thumbnail sizes
*/
 
if( ! function_exists( 'wysdom_theme_setup' ) ) {

	function wysdom_theme_setup() {
	
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on BuildPress, use a find and replace
		 */
		 
		load_theme_textdomain( 'wysdom', get_template_directory() . '/lang' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Custom Backgrounds
		add_theme_support( 'custom-background', array(
			'default-color' => 'ffffff',
		) );
		
		// Add default title support
		add_theme_support( 'title-tag' ); 		

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		 
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size( 150, 150, true);
		add_image_size('wysdom-news-box', 220, 154, true);
		add_image_size('wysdom-slider-box', 531, 428, true);

		// Menus
		add_theme_support( 'menus' );
		register_nav_menu( 'main-menu', _x( 'Main Menu', 'backend', 'wysdom' ) );
		register_nav_menu( 'footer-menu-1', _x( 'Footer Menu 1', 'backend', 'wysdom' ) );
		register_nav_menu( 'footer-menu-2', _x( 'Footer Menu 2', 'backend', 'wysdom' ) );		
		// Add theme support for Semantic Markup
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );

		// Add CSS for the TinyMCE editor
		add_editor_style();
	}
	add_action( 'after_setup_theme', 'wysdom_theme_setup' );
}


/**
 * Enqueue CSS stylesheets
 */
 
if( ! function_exists( 'wysdom_enqueue_styles' ) ) {
	function wysdom_enqueue_styles() {

        wp_enqueue_style( 'wysdom-css-themify', get_template_directory_uri() . '/css/themify-icons.css', array(), '1.0' );
        wp_enqueue_style( 'wysdom-css-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0' );
        wp_enqueue_style( 'wysdom-css-flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '1.0' );
        wp_enqueue_style( 'wysdom-css-lightbox', get_template_directory_uri() . '/css/lightbox.min.css', array(), '1.0' );
        wp_enqueue_style( 'wysdom-css-ytplayer', get_template_directory_uri() . '/css/ytplayer.css', array(), '1.0' );
        wp_enqueue_style( 'wysdom-css-nearblack', get_template_directory_uri() . '/css/theme-nearblack.css', array(), '1.0' );
        wp_enqueue_style( 'wysdom-css-custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0' );
        wp_enqueue_style( 'wysdom-css-lato', 'http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600', array(), '1.0' );
        wp_enqueue_style( 'wysdom-css-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:100,300,400,600,700', array(), '1.0' );
        wp_enqueue_style( 'wysdom-css-opensans', get_template_directory_uri() . '/css/font-opensans.css', array(), '1.0' );
	    wp_enqueue_style( 'wysdom-style', get_stylesheet_uri() );
		
	}
	add_action( 'wp_enqueue_scripts', 'wysdom_enqueue_styles' );
}

// Custom CSS Output

if (!function_exists('causes_custom_styles')) { 

		function causes_custom_styles() {
			
			echo '<style type="text/css">'. "\n";
			echo '.nav-1 { margin: 32px auto 0; } ';		 
			echo "</style>". "\n";
			
		}

}

if ( is_user_logged_in() ) { 
   	add_action('wp_head', 'causes_custom_styles');
} 

/**
 * Enqueue JS scripts
 */
 
if( ! function_exists( 'wysdom_enqueue_scripts' ) ) {
	function wysdom_enqueue_scripts() {
		
		
	    wp_enqueue_script( 'wysdom-js-jquery', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), null );
        wp_enqueue_script( 'wysdom-js-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null );
        wp_enqueue_script( 'wysdom-js-flexslider', get_template_directory_uri() . '/js/flexslider.min.js', array('jquery'), null );
        wp_enqueue_script( 'wysdom-js-lightbox', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), null );
        wp_enqueue_script( 'wysdom-js-masonry', get_template_directory_uri() . '/js/masonry.min.js', array('jquery'), null );
        wp_enqueue_script( 'wysdom-js-twitterfetcher', get_template_directory_uri() . '/js/twitterfetcher.min.js', array('jquery'), null );
        wp_enqueue_script( 'wysdom-js-spectragram', get_template_directory_uri() . '/js/spectragram.min.js', array('jquery'), null );
        wp_enqueue_script( 'wysdom-js-ytplayer', get_template_directory_uri() . '/js/ytplayer.min.js', array('jquery'), null );
        wp_enqueue_script( 'wysdom-js-countdown', get_template_directory_uri() . '/js/countdown.min.js', array('jquery'), null );
        wp_enqueue_script( 'wysdom-js-scroll', get_template_directory_uri() . '/js/smooth-scroll.min.js', array('jquery'), null );
        wp_enqueue_script( 'wysdom-js-parallax', get_template_directory_uri() . '/js/parallax.js', array('jquery'), null );
        wp_enqueue_script( 'wysdom-js-scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null );		
		
		// for nested comments
		if ( is_singular() && comments_open() ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'wysdom_enqueue_scripts' );
}

/**
 * Register sidebars for Wysdom
 *
 * @package Wysdom
 */

function wysdom_sidebars() {

	// Blog Sidebar
	
	register_sidebar(array(
		'name' => __( 'Blog Sidebar', "wysdom"),
		'id' => 'blog-sidebar',
		'description' => __( 'Sidebar on the blog layout.', "wysdom"),
		'before_widget' => '<div id="%1$s" class="widget %2$s">', 
		'after_widget' => '</div>',
		'before_title' => '<h6 class="title">',
		'after_title' => '</h6><hr>'
	));	

	// Footer Sidebar
	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 1', "wysdom"),
		'id' => 'footer-widget-area-1',
		'description' => __( 'The footer widget area 1', "wysdom"),
		'before_widget' => '<div id="%1$s" class="widget %2$s"> ',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="title">',
		'after_title' => '</h6><hr>'
	));	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 2', "wysdom"),
		'id' => 'footer-widget-area-2',
		'description' => __( 'The footer widget area 2', "wysdom"),
		'before_widget' => '<div id="%1$s" class="widget %2$s"> ',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="title">',
		'after_title' => '</h6><hr>'
	));	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 3', "wysdom"),
		'id' => 'footer-widget-area-3',
		'description' => __( 'The footer widget area 3', "wysdom"),
		'before_widget' => '<div id="%1$s" class="widget %2$s"> ',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="title">',
		'after_title' => '</h6><hr>'
	));	
}

add_action( 'widgets_init', 'wysdom_sidebars' );

/**
 * Custom Commets
 *
 */

function wysdom_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
	<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="blog-comment">
	<?php endif; ?>
	<div class="avatar">
	<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, 120 ); ?>
	</div>
	<div class="comment">
			<?php printf( __( '<span class="uppercase">%s</span>, ' ), get_comment_author() ); ?>
			<span class="uppercase"><?php printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' ); ?></span>
			<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?> 
			<?php if ( $comment->comment_approved == '0' ) : ?><p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></p><?php endif; ?>
			<?php comment_text(); ?>
	</div>	
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php
}
?>