<?php 

function load_assets(){
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );

    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick.css' );

    wp_enqueue_script('js-script',get_template_directory_uri() .'/js/jquery.min.js', array(),false, true);

    wp_enqueue_script('slick',get_template_directory_uri() .'/js/slick.min.js', array('js-script'),false, true);

    wp_enqueue_script('main',get_template_directory_uri() .'/js/main.js', array('slick'), false, true);
}
add_action('wp_enqueue_scripts', 'load_assets');

