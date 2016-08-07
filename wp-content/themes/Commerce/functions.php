<?php 

/**
*загружаємо стилі і скрипти
**/

    /**
	 * Enqueue scripts
	 *
	 * @param string $handle Script name
	 * @param string $src Script url
	 * @param array $deps (optional) Array of script names on which this script depends
	 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
	 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
	 */
	function load_style_script() {

		wp_enqueue_script('formh', get_template_directory_uri() . '/js/bootstrap-formhelpers.js' );
		wp_enqueue_style('style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style('forms', get_template_directory_uri() . '/css/forms.css' );
		// wp_enqueue_style('screen', get_template_directory_uri() . '/css/css/screen.css');
		wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css' );
		wp_enqueue_style('form', get_template_directory_uri() . '/css/bootstrap-formhelpers.min.css' );
		wp_enqueue_style('map', get_template_directory_uri() . '/css/maps.css' );
		wp_enqueue_style('blueimp', get_template_directory_uri() . '/css/blueimp-gallery.min.css' );
		// wp_enqueue_style('default-skin', get_template_directory_uri() . '/css/default-skin/default-skin.css' );

		wp_enqueue_script('jquery' );
		wp_enqueue_script('script', get_template_directory_uri() . '/js.js');
		wp_enqueue_script('tlt', get_template_directory_uri() . '/js/jquery.lettering.js' );
		wp_enqueue_script('tlt1', get_template_directory_uri() . '/js/jquery.textillate.js' );
		wp_enqueue_script('my', get_template_directory_uri() . '/js/wow.min.js' );
		wp_enqueue_script('blueimp_js', get_template_directory_uri() . '/js/blueimp-gallery.min.js' );
		// wp_enqueue_script('photoswipe-ui-default', get_template_directory_uri() . '/js/photoswipe-ui-default.min.js' );
		// wp_enqueue_script('index', get_template_directory_uri() . '/js/index.js' );
		
	}

	add_action( 'wp_enqueue_scripts', 'load_style_script' );
 

/**
*Мініатюри
**/

add_theme_support( 'post-thumbnails' );


/**
*Меню   
**/

register_nav_menu('Menu', 'Меню' );


/**
*Sidebar
**/

   /**
	* Creates a sidebar
	* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
	*/
	$args = array(
		'name'          => __( 'Vidget sidebar', 'theme_text_domain' ),
		'id'            => 'sidebar',
		'description'   => 'Тут розміщуєте віджети sidebar',
		'class'         => '',
		'before_widget' => '<div class="vidget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
	);

	register_sidebar( $args );



/**
*REDIRECT AFTER LOGIN
**/


// function custom_admin_default_page() {
//   // Направляємо користувача на потрібну сторінку
//    http://www.example.com/custom-user-dashboard.
// global $current_user;
// get_currentuserinfo();

//   return 'real?'.$current_user->user_login;
// }
// add_filter('login_redirect', 'custom_admin_default_page');







 ?>
