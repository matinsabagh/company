<?php
/*
* Plugin Name: matin
* Plugin URI: https://matin.com
* Description: the best project
* Author: matin
 */
if(!('ABSPATH')){
    exit;
};
define('PRODUCT_VERSION','1.0.0');
define('PRODUCT_PATH',plugin_dir_path(__FILE__));
define('PRODUCT_URL',plugin_dir_url(__FILE__));
add_action('admin_menu','admin_page_menu')
function admin_page_menu (){

 add_menu_page(
        'کد محصولات',
        'کد محصولات',
        'manage_woo',
        'product-code',
        'product_code_page'
    );
}
?>
