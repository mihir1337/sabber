<?php
/**
 * Portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Portfolio
 */

if ( ! function_exists( 'portfolio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function portfolio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Portfolio, use a find and replace
		 * to change 'portfolio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'portfolio', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu' => esc_html__( 'Primary', 'portfolio' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'portfolio_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function portfolio_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function portfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'portfolio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'portfolio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'portfolio_widgets_init' );


// custom posts register
add_action( 'init', 'portfolio_custom_post' );
function portfolio_custom_post() {
    register_post_type( 'portfolio',
        array(
            'menu_icon' => 'dashicons-portfolio',
            'labels' => array(
                'name'               => __( 'All portfolios', 'portfolio' ),
		        'singular_name'      => __( 'portfolio', 'portfolio' ),
		        'add_new'            => _x( 'Add new', 'portfolio', 'portfolio' ),
		        'add_new_item'       => __( 'Add new', 'portfolio' ),
		        'edit_item'          => __( 'Edit', 'portfolio' ),
		        'new_item'           => __( 'New', 'portfolio' ),
		        'view_item'          => __( 'View', 'portfolio' )
            ),
			'supports' => array('title', 'tag', 'editor', 'thumbnail', 'page-attributes'),
            'public'    => false,
            'show_ui'   => true
        )
	);
	
    register_post_type( 'pricing',
        array(
            'menu_icon' => 'dashicons-portfolio',
            'labels' => array(
                'name'               => __( 'All pricing', 'portfolio' ),
		        'singular_name'      => __( 'pricing', 'portfolio' ),
		        'add_new'            => _x( 'Add new pricing', 'portfolio', 'portfolio' ),
		        'add_new_item'       => __( 'Add new pricing', 'portfolio' ),
		        'edit_item'          => __( 'Edit pricing', 'portfolio' ),
		        'new_item'           => __( 'New pricing', 'portfolio' ),
		        'view_item'          => __( 'View pricing', 'portfolio' )
            ),
			'supports' => array('title', 'editor', 'page-attributes'),
            'public'    => false,
            'show_ui'   => true
        )
	);
	
	register_post_type( 'testimonial',
        array(
            'menu_icon' => 'dashicons-portfolio',
            'labels' => array(
                'name'               => __( 'All testimonials', 'portfolio' ),
		        'singular_name'      => __( 'portfolio', 'testimonial' ),
		        'add_new'            => _x( 'Add new testimonial', 'portfolio', 'portfolio' ),
		        'add_new_item'       => __( 'Add new testimonial', 'portfolio' ),
		        'edit_item'          => __( 'Edit testimonial', 'portfolio' ),
		        'new_item'           => __( 'New testimonial', 'portfolio' ),
		        'view_item'          => __( 'View testimonial', 'portfolio' )
            ),
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public'    => false,
            'show_ui'   => true
        )
	);
}

//Custom Taxonomy for portfolio
function infolook_portfolio_taxonomy() {
	register_taxonomy( 
		'portfolio_categories', 
		'portfolio', 

		array(
        'hierarchical' => true, 
        'label' => 'Portfolio Categories', 
        'singular_label' => 'Portfolio Category', 
        'query_var' => true,
        'show_admin_column' => true,
        'rewrite' => array( 
        	'slug' => 'portfolio-categories', 
        	'with_front'=> true 
        	)
        )
    );
}
add_action( 'init', 'infolook_portfolio_taxonomy');
// END Portfolio TAXONOMY

/**
 * Enqueue scripts and styles.
 */
function portfolio_scripts() {

	wp_enqueue_style( 'app', get_template_directory_uri() . '/assets/src/app/css/app.css' );
	wp_enqueue_style( 'uikit', get_template_directory_uri() . '/assets/src/app/css/uikit-custom.min.css' );
	wp_enqueue_style( 'portfolio-style', get_stylesheet_uri() );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'portfolio-app', get_template_directory_uri() . '/assets/src/app/js/app.js', array(), rand(), false );
	wp_enqueue_script( 'portfolio-min', get_template_directory_uri() . '/assets/src/app/js/plugins.min.js', array(), rand(), false );

	wp_enqueue_script( 'portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'portfolio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );

function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-2.2.4.min.js", array(), '2.2.4' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load Cs framework
 */
require get_template_directory() . '/lib/csframework/cs-framework.php';
require get_template_directory() . '/inc/theme-options.php';


/**
 * Custom walker class.
 */
class MainMenu_Walker extends Walker_Nav_Menu {

    /**
     * Starts the list before the elements are added.
     *
     * Adds classes to the unordered list sub-menus.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        // Depth-dependent classes.
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'sub-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );

        // Build HTML for output.
        $output .= "\n" . $indent . '<ul class="uk-navbar-nav ' . $class_names . '" >' . "\n";
    }

    /**
     * Start the element output.
     *
     * Adds main/sub-classes to the list items and links.
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // Depth-dependent classes.
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // Passed classes.
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

        // Build HTML.
        $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';

        // Link attributes.
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $attributes .= ' class="menu-link yb-inner-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

        // Build HTML output and pass through the proper filter.
        $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $args->before,
            $attributes,
            $args->link_before,
            apply_filters( 'the_title', $item->title, $item->ID ),
            $args->link_after,
            $args->after
        );
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}


function my_custom_mime_types( $mimes ) {
 
// New allowed mime types.
$mimes['svg'] = 'image/svg+xml';
$mimes['svgz'] = 'image/svg+xml';
$mimes['doc'] = 'application/msword';
 
// Optional. Remove a mime type.
unset( $mimes['exe'] );
 
return $mimes;
}
add_filter( 'upload_mimes', 'my_custom_mime_types' );