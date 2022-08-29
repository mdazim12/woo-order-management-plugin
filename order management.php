<?php
/**
 * Plugin Name:       Order Management for - WooCommerce
 * Plugin URI:        #
 * Description:       This plugin for order management
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            azim
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       #
 * Update URI:        #
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */


//  class order_management{
//     public function __construct(){
//         add_action('admin_menu', array($this,'create_admin_menu') );
//     }

//     public function create_admin_menu(){
//         $page_title     = 'Oderly';
//         $menu_title     = 'Orderly ';
//         $capability     = 'manage_options';
//         $slug           = 'custom_menu_page';
//         $callback       = array($this,'custom_setting_page');
//         $icon           = 'dashicons-admin-plugins';
//         $position       = 6;
//     add_menu_page( $page_title, $menu_title, $capability, $slug, $callback, $icon, $position);
//             $callback_sub       = array($this,'custom_setting_sub_page');
//     add_submenu_page( 'custom_menu_page', 'orderly', 'Custom Setting','manage_options', 'custom_menu_slug', $callback_sub );
    
//     }

    

    
   


   

//  }

//  new order_management();

function custom_seting_fields(){
    add_settings_section('custom_packet','Custom Setting Page','packet_calback','custom_menu_slug');
    add_settings_field('header_text','Header Text','header_calback','custom_menu_slug','custom_packet' );
    register_setting( 'custom_packet','header_text'  );
  }
  add_action('admin_init','custom_seting_fields');





 function header_calback(){
    echo '<input type="text" class="regular_text" name="header_text" value="'.get_option('header_text').'">';
 }










function add_menu_itmes(){
    add_menu_page( 'odderly', 'Oderly', 'manage_options', 'admin_menu_slug', 'add_menu_pages','dashicons-admin-plugins', 5 );
   
    function add_menu_pages(){ 
        require_once('admin.php');
     }

    add_submenu_page( 'admin_menu_slug', 'oderly', 'Custom Setting', 'manage_options', 'custom_menu_slug', 'custom_setting', );



     function packet_calback(){
        return;
     }




    function custom_setting(){ ?>
       <form action="options.php" method="POST">
       <?php
            settings_errors( );
            do_settings_sections( 'custom_menu_slug' );
            settings_fields('custom_packet' );
            submit_button();
       ?>
       </form>
   <?php }
}
add_action('admin_menu','add_menu_itmes' );








   

       









 









  













?>




































