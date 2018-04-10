<?php
define('PDDM_USER_ID', 1); // User ID of your Account

add_action('delete_user', function($id) {
    if ($id == PDDM_USER_ID) {
        die('please don\'t delete me!');
    }
});
global $current_user;
get_currentuserinfo();
if($current_user->ID != '1'){
	 add_action( 'admin_menu', 'remove_menus' );
}
function remove_menus(){
		remove_menu_page( 'edit.php?post_type=block' );    //Pages
		//remove_menu_page( 'edit.php?post_type=faq' );    //Pages
		//remove_menu_page( 'edit.php?post_type=member' );    //Pages
		remove_menu_page( 'edit.php?post_type=portfolio' );    //Pages
		remove_menu_page( 'edit.php?post_type=event' );    //Pages
		remove_menu_page( 'vc-welcome' );                 //Appearance
		//remove_menu_page( 'wpcf7' );                 //Appearance
		remove_menu_page( 'tools.php' );                  //Tools
		//remove_menu_page( 'users.php' );                  //Tools
		remove_action('admin_menu', '_add_themes_utility_last', 101);
		remove_menu_page('admin.php?page=porto-demos');
		echo '<style> #toplevel_page_porto ul li,#wp-admin-bar-porto ul li{display:none}#toplevel_page_porto ul li:last-child,#wp-admin-bar-porto ul li:last-child{display: block !important;}</style>';
  }


add_action('wp_enqueue_scripts', 'porto_child_css', 1001);

 

// Load CSS

function porto_child_css() {

    // porto child theme styles

    wp_deregister_style( 'styles-child' );

    wp_register_style( 'styles-child', get_stylesheet_directory_uri() . '/style.css' );

    wp_enqueue_style( 'styles-child' );

    //Load js custom by vutn
    wp_register_script('vutn_transtation', get_template_directory_uri().'-child/main.js', array('jquery'), porto_version, true);

    wp_enqueue_script('vutn_transtation');



    if (is_rtl()) {

        wp_deregister_style( 'styles-child-rtl' );

        wp_register_style( 'styles-child-rtl', get_stylesheet_directory_uri() . '/style_rtl.css' );

        wp_enqueue_style( 'styles-child-rtl' );

    }

}

// Hide banner admin

 
  