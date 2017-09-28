<?php
/**
 * Azza-IO\'s JobsBoard functions and definitions
 *
*/
function enqueue_mystyles() {
    wp_enqueue_style("bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
    wp_enqueue_style("customtheme-style", get_stylesheet_uri());
}
add_action ("wp_enqueue_scripts", "enqueue_mystyles");

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
        'post_status' => 'draft',
        'post_title' => $_POST['fields']['field_59cb86f0e7ee5'],
        'post_type' => 'available_jobs'
    );
    $post_id = wp_insert_post($post);
    $_POST['return'] = add_query_arg( array('post_id' => $post_id), $_POST['return'] );
    return $post_id;
}
add_filter('acf/pre_save_post' , 'my_pre_save_post' );
