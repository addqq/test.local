<?php 
/*
Plugin Name: ts-playground
Plugin URI: http://test.local/
Description: First attemp at testing JS TypeScript
Version: 0.0.1
Author: addqq
Author URI: https://automattic.com/wordpress-plugins/
*/

add_shortcode( 'play-with-ts', 'initTS' );


function initTS() {
    echo 45;
}