<?php
  // add menus to wp
add_theme_support ('menus');
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'position'  => 20
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Header Default',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Footer Default',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
}

/////  ADD FONT /////
    wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

// CUSTOM POST TYPE
function create_posttype(){
  register_post_type('Cards',
      // CPT Options
      array(
          'labels' => array(
              'name' => __('Cards'),
              'singular_name' => __('Card')
          ),
          'menu_position' => 5,
          'supports' => array('title', 'editor', 'excerpt', 'page-attributes', 'category','thumbnail', 'custom-fields', 'post-formats'),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'post'),
      )
  );
}
add_action('init', 'create_posttype');

// add excerpt 
add_theme_support('post-thumbnails');

// enqueue scripts and styles
function theme_styles_scripts() {
	if (!is_admin()) {
		$theme_uri = get_stylesheet_directory_uri();
        $version_style   = time();
		/*
		** load css
		*/
        wp_enqueue_style('bootstrap-css', $theme_uri .'/css/assets/plugins/bootstrap.min.css', array(), null);
		wp_enqueue_style( 'normalize', $theme_uri .'/css/assets/plugins/normalize.css', array(), null );
        wp_enqueue_style( 'slick', $theme_uri .'/css/assets/plugins/slick.css', array(), null );
        wp_enqueue_style('theme-css', $theme_uri .'/css/theme.min.css', array(), $version_style);
		/*
		** load js
		*/
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', null, null, true);
		wp_enqueue_script('jquery-latest', 'https://code.jquery.com/jquery-latest.min.js', null, null, true);
        wp_enqueue_script('bootstrap-min', $theme_uri . '/js/assets/plugins/bootstrap.min.js', array(), null);
		wp_enqueue_script( 'slick', $theme_uri . '/js/assets/plugins/slick.min.js', array('jquery'), null );
		wp_enqueue_script( 'main', $theme_uri . '/js/assets/main.js', array('jquery'), null );
	}
}
add_action('wp_enqueue_scripts', 'theme_styles_scripts');