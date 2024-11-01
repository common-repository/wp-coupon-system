<?php
/*
Plugin Name: WP Coupon System
Plugin URI: http://www.wpvalueclub.com/
Description: Super modern wordpress coupon system plugin
Author: Noor-E-Alam
Author URI: http://www.wpvalueclub.com/
Version: 1.0
*/

//Loading CSS and JS
function wp_coupon_scripts() {
	
	wp_enqueue_style('acb_buttons_main_css', plugins_url( '/css/coupon.css' , __FILE__ ) );

}

add_action( 'wp_enqueue_scripts', 'wp_coupon_scripts' );



if(!class_exists('WPC_AutoLoader')){
// Setup Contants
defined( 'VP_WPC_VERSION' ) or define( 'VP_WPC_VERSION', '2.0' );
defined( 'VP_WPC_URL' )     or define( 'VP_WPC_URL', plugin_dir_url( __FILE__ ) );
defined( 'VP_WPC_DIR' )     or define( 'VP_WPC_DIR', plugin_dir_path( __FILE__ ) );
defined( 'VP_WPC_FILE' )    or define( 'VP_WPC_FILE', __FILE__ );


// Lood Bootstrap
require 'framework/bootstrap.php';

}



// add Google Web font
$font_face = vp_option('logo_font_face');
$font_weight = vp_option('vp_get_gwf_weight');
$font_style = vp_option('logo_font_style');
VP_Site_GoogleWebFont::instance()->add($font_face, $font_weight, $font_style);
// embed font function
function mytheme_embed_fonts()
{
// you can directly enqueue and register
VP_Site_GoogleWebFont::instance()->register_and_enqueue();
// or register and get the handler to be used as dependency
VP_Site_GoogleWebFont::instance()->register();
wp_register_style('mystyle', 'path_to_style.css', VP_Site_GoogleWebFont::instance()->get_names());
wp_enqueue_style('mystyle');
}
add_action('wp_enqueue_scripts', 'mytheme_embed_fonts');
	
	
// Registering Custom Post
add_action( 'init', 'WPC_custom_post' );
function WPC_custom_post() {
	register_post_type( 'coupon',
		array(
			'labels' => array(
				'name' => __( 'Coupons' ),
				'singular_name' => __( 'Coupon' ),
				'add_new_item' => __( 'Add New Coupon' )
			),
			'public' => true,
			'supports' => array('title'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'coupon'),
			'menu_icon' => '',
			'menu_position' => 20,
		)
	);
	
}

// Registering Custom post's category
add_action( 'init', 'WPC_custom_post_taxonomy'); 
function WPC_custom_post_taxonomy() {
	register_taxonomy(
		'coupon_cat',  
		'coupon',
		array(
			'hierarchical'          => true,
			'label'                         => 'Coupon Category',
			'query_var'             => true,
			'show_admin_column'             => true,
			'rewrite'                       => array(
				'slug'                  => 'coupon-category',
				'with_front'    => true
				)
			)
	);
}

// Load Metaboxes 

new VP_Metabox(array
(
			'id'          => 'meta_style',
			'types'       => array('coupon'),
			'title'       => __('Coupon Style', 'vp_textdomain'),
			'priority'    => 'high',
			'template' => VP_WPC_DIR . '/admin/style-metabox.php'
));

new VP_Metabox(array
(
			'id'          => 'wpc',
			'types'       => array('coupon'),
			'title'       => __('Coupon Info', 'vp_textdomain'),
			'priority'    => 'high',
			'template' => VP_WPC_DIR . '/admin/metabox.php'
));



require 'admin/icon.php';

require_once(VP_WPC_DIR . 'admin/shortcodes.php');

//Shortcode Generator 
    function acb_init_shortcodegenerator()
    {
    // Built path to shortcode generator template array file
    //$sg_path = VP_TEAM_DIR() . '/admin/shortcode.php';
    // Initialize the ShortcodeGenerator's object
    $tmpl_sg = array(
    'name' => 'sg_1',
    'template' => VP_WPC_DIR . '/admin/shortcode-functions.php',
    'modal_title' => __( 'Coupon Shortcode', 'vp_textdomain'),
    'button_title' => __( 'Coupon Shortcode', 'vp_textdomain'),
    'types' => array( 'post', 'page' ),
    'main_image' => VP_WPC_URL . '/img/coupon.png',
    'sprite_image' => VP_WPC_URL . '/img/coupon.png',
    //'included_pages' => array( 'appearance_page_vpt_option' ),
    );
    
	$sg = new VP_ShortcodeGenerator($tmpl_sg);
    
	}
	
    // the safest hook to use, since Vafpress Framework may exists in Theme or Plugin
    add_action( 'after_setup_theme', 'acb_init_shortcodegenerator' )



?>