<?php

function carrega_scripts(){
   	// Enfileirando Bootstrap
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');
	wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);	
	// Enfileirando estilos e scripts próprios
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
	wp_enqueue_script( 'template', get_template_directory_uri(). '/js/template.js', array(), null, true);

}

add_action( 'wp_enqueue_scripts', 'carrega_scripts' );

// Função para os menus

register_nav_menus( 
    array(
        'meu_menu_principal' => 'Menu Principal',
		'menu_rodape' => 'Menu Rodapé'
    )
);

// Adicionando features do theme support(personalização via painel)
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('video','image'));

?>