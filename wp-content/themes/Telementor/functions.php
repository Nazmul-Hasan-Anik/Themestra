<?php
//Basic Bootstrapping
function telementor_bootstrapping(){
  load_theme_textdomain('themestra');
  add_theme_support('post_formats');
  add_theme_support("post-thumbnails");
  add_theme_support("title-tag");
  add_theme_support("custom-logo");
}
add_action( 'after_setup_theme','telementor_bootstrapping','1');

function theme_assest(){
  wp_enqueue_style("main-css", get_template_directory_uri() . '/style.css',rand(111,9999));
}
add_action('wp_enqueue_scripts','theme_assest','1');
register_nav_menus([
            'primary_menu' => __( 'Primary Menu', 'themestra' ),
            'footer_menu'  => __( 'Footer Menu', 'themestra' ),
        ] );
