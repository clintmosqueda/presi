<?php

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'MVスライド',
		'menu_title'	=> 'MVスライド',
		'menu_slug' 	=> 'mv slides',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'update_button' => 'Update',
    'icon_url' => 'dashicons-format-gallery',
  ));

	acf_add_options_page(array(
		'page_title' 	=> '連載',
		'menu_title'	=> '連載',
		'menu_slug' 	=> 'series',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'update_button' => 'Update',
    'icon_url' => 'dashicons-list-view',
  ));

	acf_add_options_page(array(
		'page_title' 	=> 'Recommended Features',
		'menu_title'	=> 'Recommended Features',
		'menu_slug' 	=> 'recommended features',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'update_button' => 'Update',
    'icon_url' => 'dashicons-star-filled',
  ));

	acf_add_options_page(array(
		'page_title' 	=> 'Other Features',
		'menu_title'	=> 'Other Features',
		'menu_slug' 	=> 'other features',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'update_button' => 'Update',
    'icon_url' => 'dashicons-superhero-alt',
  ));

	// acf_add_options_page(array(
	// 	'page_title' 	=> 'Recommend',
	// 	'menu_title'	=> 'Recommend',
	// 	'menu_slug' 	=> 'recommend',
	// 	'capability'	=> 'edit_posts',
	// 	'redirect'		=> false,
  //   'update_button' => 'Update',
  //   'icon_url' => 'dashicons-thumbs-up',
  // ));

	acf_add_options_page(array(
		'page_title' 	=> 'Recommend Life Style',
		'menu_title'	=> 'Recommend Life Style ',
		'menu_slug' 	=> 'recommend life style',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'update_button' => 'Update',
    'icon_url' => 'dashicons-thumbs-up',
  ));

	acf_add_options_page(array(
		'page_title' 	=> 'Recommend Food',
		'menu_title'	=> 'Recommend Food ',
		'menu_slug' 	=> 'recommend food',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'update_button' => 'Update',
    'icon_url' => 'dashicons-thumbs-up',
  ));

	acf_add_options_page(array(
		'page_title' 	=> 'Recommend Beauty',
		'menu_title'	=> 'Recommend Beauty ',
		'menu_slug' 	=> 'recommend beauty',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
    'update_button' => 'Update',
    'icon_url' => 'dashicons-thumbs-up',
  ));
}

//Populate series(repeater) values into series(select)
function acf_load_series_choices( $field ) {
    // reset choices
    $field['choices'] = array();
		if( have_rows('series', 'option') ) {
			while( have_rows('series', 'option') ) {
				the_row(); 
				$value = get_sub_field('series_title');
				$field['choices'][ $value ] = $value;   
			}
		}
		return $field;
}
add_filter('acf/load_field/name=series_name', 'acf_load_series_choices');

//Auto add and update Title field:
function my_post_title_updater( $post_id ) {

	$my_post = array();
	$my_post['ID'] = $post_id;

	if ( get_post_type() == 'rich' ) {
		$my_post['post_title'] = get_field('post_title');
	}
	if ( get_post_type() == 'regular' ) {
		$my_post['post_title'] = get_field('post_title');
	}
	// Update the post into the database
	wp_update_post( $my_post );
}
// run after ACF saves the $_POST['fields'] data
add_action('acf/save_post', 'my_post_title_updater', 20);

// //populate select tag choices
// function acf_load_post_author_choices( $field ) {
// 	// reset choices
// 	$field['choices'] = array();
// 	// get the textarea value from options page without any formatting
// 	$users = get_users();
// 	// loop through array and add to field 'choices'
// 	if( is_array($users) ) {	
// 			foreach( $users as $user ) {
// 					$field['choices'][ $user->ID ] = $user->display_name;
// 			}
// 	}
// 	// return the field
// 	return $field;
// }
// add_filter('acf/load_field/name=writer', 'acf_load_post_author_choices');

function my_acf_save_author( $post_id ) {
	// get new value
	$userID = get_field( 'writer' );
	
	if( $userID ) {
		wp_update_post( array( 'ID'=>$post_id, 'post_author'=>$userID) ); 
	}
}
add_action('acf/save_post', 'my_acf_save_author', 20);