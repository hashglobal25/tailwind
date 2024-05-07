<?php 

function theme_enqueue_styles() {
    $parent_style = 'parent-style';
     //=============SLICK=========
//    wp_enqueue_style( 'slick', get_template_directory_uri() . '/api-blocks/slick/slick/slick.css' );
    wp_enqueue_style( 'output.css', get_template_directory_uri() . '/src/output.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    // wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
      wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    //=============FANCYBOX=========    
    // wp_enqueue_style( 'jquery.fancybox.css', get_template_directory_uri() . '/api-blocks/fancyapps/source/jquery.fancybox.css');
    // wp_enqueue_style( 'jquery.fancybox-buttons.css', get_template_directory_uri() . '/api-blocks/fancyapps/source/helpers/jquery.fancybox-buttons.css' );
    // wp_enqueue_style( 'jquery.fancybox-thumbs.css', get_template_directory_uri() . '/api-blocks/fancyapps/source/helpers/jquery.fancybox-thumbs.css');
    //  wp_enqueue_script('jquery');
    //  wp_enqueue_script( 'bootstrap.min.js','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array( 'jquery' ));
    //  //====SLICK JS=====
    //  wp_enqueue_script( 'slick.min.js',get_stylesheet_directory_uri() . '/api-blocks/slick/slick/slick.min.js', array( 'jquery' ));
    //=============FANCYBOX=========
     // wp_enqueue_script('jquery.mousewheel-3.0.6.pack.js',get_stylesheet_directory_uri() . '/api-blocks/fancyapps/lib/jquery.mousewheel-3.0.6.pack.js', array( 'jquery' ));
     // wp_enqueue_script('jquery.fancybox.pack.js',get_stylesheet_directory_uri() . '/api-blocks/fancyapps/source/jquery.fancybox.pack.js', array( 'jquery' ));
     // wp_enqueue_script('jquery.fancybox-buttons.js',get_stylesheet_directory_uri() . '/api-blocks/fancyapps/source/helpers/jquery.fancybox-buttons.js', array( 'jquery' ));
     // wp_enqueue_script('jquery.fancybox-media.js',get_stylesheet_directory_uri() . '/api-blocks/fancyapps/source/helpers/jquery.fancybox-media.js', array( 'jquery' ));
     // wp_enqueue_script('jquery.fancybox-thumbs.js',get_stylesheet_directory_uri() . '/api-blocks/fancyapps/source/helpers/jquery.fancybox-thumbs.js', array( 'jquery' ));
     // wp_enqueue_script( 'jquery-scripts.js',get_stylesheet_directory_uri() . '/js/jquery-scripts.js', array( 'jquery' ));
    }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


//=============SUPPORT OF THE  THEME MENUS==========
    add_action( 'after_setup_theme', 'my_setup' );
     if ( ! function_exists( 'my_setup' ) ) {
      function my_setup() {
       if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
        add_theme_support( 'post-thumbnails' );
       }

       add_theme_support( 'menus' );

       if ( function_exists( 'register_nav_menus' ) ) {
        register_nav_menus(
         array(
           'header_menu' => 'Header Menu',
           'footer_menu' => 'Footer Menu'
         )
        );
       }   
      }
     }
//=============SUPPORT OF THE THEME WIDGETS==========

     function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


// add_filter('woocommerce_enqueue_styles', '__return_empty_array');

// add_action('wp_enqueue_scripts', 'remove_woocommerce_styles', 100);

 // function remove_woocommerce_styles() {
 //     wp_dequeue_style('woocommerce-general'); // Remove WooCommerce's general stylesheet
 //     wp_dequeue_style('woocommerce-layout'); // Remove WooCommerce's layout stylesheet
 //     // Add more wp_dequeue_style() calls for other stylesheets you want to remove
 // }
