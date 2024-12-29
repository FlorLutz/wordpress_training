<?php
/**
 * Plugin Name: WH Hello World
 * Description: Alert in Front- und Backend
 * Author: Florian Lutz
 * Version: 1.0.0
 */

 function wh_hello_world() {
    echo '<script>alert( "Hello world!" )</script>';
 }
 add_action( 'admin_head', 'wh_hello_world' );
 add_action( 'wp_head', 'wh_hello_world' );