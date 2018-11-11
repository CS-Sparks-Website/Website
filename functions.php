<?php

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');
add_theme_support( 'post-thumbnails' );


function add_style() {
	wp_enqueue_style('font', get_template_directory_uri() .'/https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic',false);
	
	wp_enqueue_style('landing', get_template_directory_uri() .'/vendor/bootstrap/css/bootstrap.min.css',false);
	
		wp_enqueue_style('landing', get_template_directory_uri() .'/css/landing-page.css',false);
	wp_enqueue_style('all.min', get_template_directory_uri() .'/vendor/fontawesome-free/css/all.min.css',false);

	wp_enqueue_style('misc', get_template_directory_uri() .'/vendor/simple-line-icons/css/simple-line-icons.css',false);
}
add_action('wp_enqueue_scripts','add_style');

add_filter( 'default_content', 'my_editor_content' );

function my_editor_content( $content ) {
	   ?>
    <div class="error notice">
        <p><?php _e( 'Remember to add a featured image. This theme does not support post with other images yet. Delete this message before publishing!'); ?></p>
    </div>
    <?php
}



?>