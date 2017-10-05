<?php
/**
 * Azza-IO\'s JobsBoard functions and definitions
 *
*/
function enqueue_mystyles() {

	wp_enqueue_style('bootstrapcss',"//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
  wp_enqueue_style("customtheme-style", get_stylesheet_uri());
	wp_enqueue_style( 'ionicons', '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css');
	wp_enqueue_style( 'hamburgercss', get_template_directory_uri() . '/css/hamburgers.min.css');
}
add_action ("wp_enqueue_scripts", "enqueue_mystyles");

function enqueue_myfonts() {
	wp_enqueue_style('roboto', '//fonts.googleapis.com/css?family=Roboto|Roboto+Mono');
}
add_action ("wp_enqueue_scripts",'enqueue_myfonts');

function enqueue_myscripts() {
	wp_enqueue_script('custome-js', get_template_directory_uri() . '/js/jobs-wp-theme-script.js');
}
add_action ("wp_enqueue_scripts",'enqueue_myscripts');

function azza_io_register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
    )
  );
}
add_action( 'init', 'azza_io_register_my_menus' );


// Create the frontend form
// Create the frontend form
function my_pre_save_post( $post_id ) {
	if ( $post_id != 'new' ) {
		return $post_id;
    }
    $post = array(
        'post_status' => 'publish',
        'post_title' => $_POST['fields']['field_59cb86f0e7ee5'],
        'post_type' => 'available_jobs',
				'post_content' => $_POST['fields']['field_59cf06e27e0a3']
    );
    $post_id = wp_insert_post($post);
    $_POST['return'] = add_query_arg( array('post_id' => $post_id), $_POST['return'] );
    return $post_id;
}
add_filter('acf/pre_save_post' , 'my_pre_save_post' );
