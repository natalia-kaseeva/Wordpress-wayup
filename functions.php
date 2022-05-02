<?php
/**
 * Wayup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wayup
 */

if ( ! function_exists( 'wayup_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wayup_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Wayup, use a find and replace
		 * to change 'wayup' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wayup', get_template_directory() . '/languages' );

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
			'menu-header' => esc_html__( 'Header Navigation', 'wayup' ),
			'menu-footer-1' => esc_html__( 'Footer Navigation 1', 'wayup' ),
			'menu-footer-2' => esc_html__( 'Footer Navigation 2', 'wayup' ),
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
		add_theme_support( 'custom-background', apply_filters( 'wayup_custom_background_args', array(
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

		/*Image size*/
		/*add_image_size(" $name", $width = 0, $height = 0, $crop = false )*/
     	add_image_size('testimonial-thumb', 225,231, true );
     	add_image_size('testimonial-vertical', 225,332, true );
     	add_image_size('feature-thumb', 438,455, true );
     	/*add_image_size('news-thumb', 733,9999, false);*/ //Only for width
     	add_image_size('news-thumb', 733,476, true);
     	add_image_size('news-home', 295,192, true);
	}
endif;
add_action( 'after_setup_theme', 'wayup_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wayup_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'wayup_content_width', 640 );
}
add_action( 'after_setup_theme', 'wayup_content_width', 0 );

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


/*Наш код ниже*/
require get_template_directory() . '/inc/functions/woo.php';
/**
 * Optional panel settings.
 */
require get_template_directory() . '/inc/options-panel-redux.php';
/**

/**
 * Breadcrumps
 */
require get_template_directory() . '/inc/breadcrumbs.php';
/**

/**
 * Metabox
 */
require get_template_directory() . '/inc/metaboxes/metaboxes.php';
require get_template_directory() . '/inc/metaboxes/register_metabox.php';

/**
/**

 * Social Share function
 */
require get_template_directory() . '/inc/social.php';
require get_template_directory() . '/inc/functions/contact.php';
require get_template_directory() . '/inc/functions/wpbakery.php';

/**
/**

* Social Widgets
 */
require get_template_directory() . '/inc/widgets/widgets.php';
require get_template_directory() . '/inc/widgets/widget-about.php';
require get_template_directory() . '/inc/widgets/widget-customcategory.php';
require get_template_directory() . '/inc/widgets/widget-subscribe.php';
require get_template_directory() . '/inc/widgets/widget-customsearch.php';
require get_template_directory() . '/inc/widgets/widget-filter.php';
require get_template_directory() . '/inc/widgets/widget-rating.php';
/**
/**

 * Enqueue scripts and styles.
 */
function wayup_scripts() {
	//Подключение CSS
	wp_enqueue_style( 'wayup-style', get_stylesheet_uri() );
	wp_enqueue_style( 'wayup-vendor', get_template_directory_uri().'/assets/css/vendor.min.css',array(),'1.0' );
	wp_enqueue_style( 'wayup-min', get_template_directory_uri().'/assets/css/main.min.css',array(),'1.0' );
	//END Подключение CSS

	//Подключение JS

	//Подключение jQuery
	//Deregister core jQuery
	wp_deregister_script('jquery');
	//Register
	wp_register_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js',array(),'3.3.1',true);
	//Полключаем jQuery
	wp_enqueue_script( 'jquery');
	//END Подключение jQuery

	wp_enqueue_script( 'wayup-vendor', get_template_directory_uri() . '/assets/js/vendor.min.js', array(), '1.0', true );
	wp_enqueue_script( 'wayup-common', get_template_directory_uri() . '/assets/js/common.min.js', array(), '1.0', true );
	wp_enqueue_script( 'wayup-svg-sprite', get_template_directory_uri() . '/assets/img/svg-sprite/svg-sprite.js', array(), '1.0', false);
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_register_script( 'wayup_woo_filter',get_template_directory_uri() . '/assets/js/woo_filter.js', array( 'jquery' ), '', true );
    wp_localize_script( 'wayup_woo_filter', 'wayup_settings', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    wp_enqueue_script( 'wayup_woo_filter' );
}
add_action( 'wp_enqueue_scripts', 'wayup_scripts' );


function wayup_admin_scripts($hook) {


	// Add scripts for metaboxes
  	if ( $hook == 'post.php' || $hook == 'post-new.php' || $hook == 'page-new.php' || $hook == 'page.php' ) {
  		wp_enqueue_style( 'wayup-metabox', get_template_directory_uri().'/assets/css/libs/metaboxes.css',array(),'1.0' );
		wp_enqueue_script( 'wayup_metaboxes', get_template_directory_uri() . '/assets/js/libs/metaboxes.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-datepicker', 'media-upload', 'thickbox') );
  	}
}
add_action( 'admin_enqueue_scripts', 'wayup_admin_scripts', 10 );


/*Класс на боди для специфической страницы*/
add_filter('body_class', 'wayup_body_class');

function wayup_body_class($classes) {
    if (is_page_template('template-home.php')){
    	$classes[]='is-home';
    } else {
    	$classes[]='inner-page';
    }
    return $classes;
}

/**
 * Register a custom post type for testimonials.
 *
 * @see get_post_type_labels() for label keys.
 */
function wayup_register_custom_post_type() {
    /*$labels = array(
        'name'                  => 'Отзывы',
        'singular_name'         => 'Отзыв',
        'add_new'               => 'Добавить новый',
    );*/
 
    register_post_type( 'testimonial', array(
        'labels'=> array(
	        'name'          => 'Отзывы',
	        'singular_name' => 'Отзыв',
	        'add_new'       => 'Добавить новый',
	    ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-format-quote',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    ));

    register_post_type( 'service', array(
        'labels'=> array(
	        'name'          => 'Услуги',
	        'singular_name' => 'Услуга',
	        'add_new'       => 'Добавить новую услугу',
	    ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-admin-tools',
        'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt' ),
    ));

    register_post_type( 'news', array(
        'labels'=> array(
	        'name'          => 'Новости',
	        'singular_name' => 'Новость',
	        'add_new'       => 'Добавить новую новость',
	    ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'news' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-format-aside',
        'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt' ),
    ));

    register_post_type( 'feature', array(
        'labels'=> array(
	        'name'          => 'Кейсы',
	        'singular_name' => 'Кейс',
	        'add_new'       => 'Добавить новый кейс',
	    ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'feature' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'			 => 'dashicons-dashboard',
        'supports'           => array( 'title', 'editor',  'thumbnail', 'excerpt' ),
    ));

//Register Taxonomy
	register_taxonomy(
		'service-type',
		'service',
		array(
			'label' => esc_html__( 'Service Type' ),
			'rewrite' => array( 'slug' => 'service-type' ),
			'hierarchical' => true,
		)
	);

	register_taxonomy(
		'news-category',
		'news',
		array(
			'label' => __( 'Категории новостей' ),
			'rewrite' => array( 'slug' => 'news-category' ),
			'hierarchical' => true,
		)
	);

	register_taxonomy(
		'feature-type',
		'feature',
		array(
			'label' => esc_html__( 'Case Type' ),
			'rewrite' => array( 'slug' => 'case-type' ),
			'hierarchical' => true,
		)
	);
}
 
add_action( 'init', 'wayup_register_custom_post_type' );


//Count of posts on archive page
function wayup_posts_per_archievpage( $query ) {
	global $wayup_options;
	$posts_per_page=-1;
	$posts_per_page_news=-1;
	if($wayup_options['testimonial_posts']) {$posts_per_page_testy=$wayup_options['testimonial_posts']; }
	if($wayup_options['newspostperpage']) {$posts_per_page_news=$wayup_options['newspostperpage']; }

	if(!is_admin()) {

	    if (is_post_type_archive('testimonial')) {
	        $query->set( 'posts_per_page', $posts_per_page_testy );
	    }

	    if (is_post_type_archive('news')) {
	    	$query->set( 'posts_per_page', $posts_per_page_news );
	    }
	}
}
add_action( 'pre_get_posts', 'wayup_posts_per_archievpage' );


/*Возвращает данные по ID картинки*/
function wayup_get_attachment( $attachment_id ) {

	$attachment = get_post( $attachment_id );
	return array(
		'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
		'caption' => $attachment->post_excerpt,
		'description' => $attachment->post_content,
		'href' => get_permalink( $attachment->ID ),
		'src' => $attachment->guid,
		'title' => $attachment->post_title
	);
}

function wayup_custom_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);

  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	

  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);

  return $excerpt;

}

/*function cleanup_shortcode_fix($content) {   
          $array = array (
            '<p>[' => '[', 
            ']</p>' => ']', 
            ']<br />' => ']',
            ']<br>' => ']'
          );
          $content = strtr($content, $array);
            return $content;
        }
        add_filter('the_content', 'cleanup_shortcode_fix',10);*/

function wayup_show_products() {
	
	$query_data=$_GET;

	$paged = (isset($query_data['paged']) ) ? intval($query_data['paged']) : 1;

	$posts_per_page=get_option('woocommerce_catalog_columns')*get_option('woocommerce_catalog_rows');

	//Filter by category id

	$cats = ($query_data['category']) ? explode(',',$query_data['category']) : false;

	$tax_query = ($cats) ? array( array(
	    'taxonomy' => 'product_cat',
	    'field' => 'id',
	    'terms' => $cats
	) ) : false;

	$args=array(
		'post_type'=>'product',
		'paged' =>$paged,
		'posts_per_page'=>$posts_per_page,
		'tax_query' => $tax_query,
		'meta_query' => array(
	    array(
	        'key' => '_price',
	        'value' => array($query_data['min'], $query_data['max']),
	        'compare' => 'BETWEEN',
	        'type' => 'NUMERIC'
	        ),
	    ),
	);

	$loop=new WP_Query($args);
	if($loop->have_posts()) {
		echo '<div class="products columns-3" id="products">';

		while($loop->have_posts()) : $loop->the_post();
			wc_get_template_part('content','product');
		endwhile;

		echo '</div>';

	?>
	<nav class="woocommerce-pagination">

	<?php if($loop->max_num_pages > 1) { ?>
		<nav class="pagination">
			<div class="nav-links">
				<?php 
					//Выводим левую стрелку для первой страницы
					if ($paged==0 || $paged==1) { ?>
						<span class="prev page-numbers"></span>
					<?php } ?>
					<?php 
					//Вывод стандартной пагинации
					$big = 999999999; // need an unlikely integer
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max(1, $paged ),
						'prev_text' => '',
						'next_text' => '',
						'total' => $loop->max_num_pages,
					) ); ?>
					<?php 
					//Выводим правую стрелку для последней страницы
					if ($paged==$loop->max_num_pages) { ?>
					<span class="next page-numbers"></span>
				<?php } ?>
			</div>
		</nav> 
	<?php } ?>
</nav>

<?php  
	} else {
		echo ('no product found');
	}

	wp_reset_postdata();

	die();
}

add_action('wp_ajax_wayup_filter', 'wayup_show_products');
add_action('wp_ajax_nopriv_wayup_filter', 'wayup_show_products');