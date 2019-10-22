<?php

function nom_scripts() {
    wp_enqueue_style('boostrap',get_template_directory_uri().'/assets/css/bootstrap.css',array(),'1.0.0','all');
    wp_enqueue_style('theme_style',get_template_directory_uri().'/assets/css/style.css',array("boostrap"),'1.0.0','all');
    wp_enqueue_script('bootstrapScript',get_template_directory_uri().'/assets/js/bootstrap.bundle.js',array('jquery'),'1.0.0',false);
}
    add_action('wp_enqueue_scripts','nom_scripts');

    function wpb_custom_new_menu() {
        register_nav_menus(
          array(
            'my-custom-menu' => __( 'My Custom Menu' ),
            'extra-menu' => __( 'Extra Menu' )
          )
        );
      }
      add_action( 'init', 'wpb_custom_new_menu' );

    add_image_size( 'my-custom-size', 1500, 1250, true );