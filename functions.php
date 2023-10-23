<?php 
 define(E_ROOT,get_template_directory_uri());
 define(E_IMG_ROOT,get_template_directory_uri().'/images/');

function codex_custom_init() {
    $args = array(
      'public' => true,
      'label'  => 'Products'
    );
    register_post_type( 'product', $args );
}

add_action( 'init', 'codex_custom_init' );

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
	wp_enqueue_style( 'style-css', E_ROOT.'/css/style.css' );
	wp_enqueue_script( 'app-js', E_ROOT. '/js/app.js', array(), '1.0.0', true );

}
remove_filter( 'the_excerpt', 'wpautop' );

?>