<?php

function carrega_scripts(){
    // funçao para carregar os scripts
    
    wp_enqueue_style('bootstrap',
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
    array(),
    '3.3.7',
    'all');

    wp_enqueue_style('template',
    get_template_directory_uri() . '/css/template.css',
    array(),
    '1.0.0',
    'all');

    // wp_enqueue_script('jquery2', 
    // get_template_directory_uri() . '/js/jquery.min.js', 
    // array(),
    // '3.3.7',
    // true);

    wp_enqueue_script('template', 
    get_template_directory_uri() . '/js/template.js', 
    array(),
    null,
    true);

    wp_enqueue_script('bootstrap', 
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', 
    array('jquery'),
    '3.3.7',
    true);

    // wp_enqueue_script( 'slides', 
    // get_template_directory_uri() . '/assets/js/jquery.slides.min.js', 
    // array('jquery2'), null, true);
}

add_action( 'wp_enqueue_scripts', 'carrega_scripts' );

// Função para os menus

register_nav_menus( 
    array(
        'meu_menu_principal' => 'Menu Principal'
    )
);

// Adicionando features do theme support(personalização via painel)
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video','image'));

?>