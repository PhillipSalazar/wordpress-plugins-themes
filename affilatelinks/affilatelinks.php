<?php
/**
 * Plugin Name: affliate links short codes
 * Plugin URI: https://www.makentastes,com
 * Description: to add affliate links to your post through short codes
 * Version: 1.0
 * Author: Your Phillip
 * Author URI: http://www.makentastes.com
 */
 add_action('admin_menu', 'test_plugin_setup_menu');

 function test_plugin_setup_menu(){
         add_menu_page( 'Test Plugin Page', 'Test Plugin', 'manage_options', 'test-plugin', 'test_init' );
 }

 function display_template( $plugin_name ,$temp )
 {
   $data = file_get_contents('./../wp-content/plugins/' . $plugin_name . '/' . $temp . '.php');
   echo $data;
 }
 function test_init(){
        // echo "<h1>Short code creator</h1>";
    //    $data = file_get_contents('./../wp-content/plugins/affilatelinks/page.php');
  //  $data = getcwd();//$_SERVER['DOCUMENT_ROOT'];
      //  echo $data;
      display_template("affilatelinks", "page");
 }


function foobar_func( $atts ){
return '<br><a href="//drizly.sjv.io/c/1436538/574518/9425"><img src="//a.impactradius-go.com/display-ad/9425-574518" border="0" alt="" width="320" height="100"/></a><img height="0" width="0" src="//imp.pxf.io/i/1436538/574518/9425" style="position:absolute;visibility:hidden;" border="0" />';

}
add_shortcode( 'link', 'foobar_func' );
