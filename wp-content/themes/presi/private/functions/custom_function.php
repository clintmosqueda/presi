<?php

function string_limit($input, $length) {
  $result = '';
  $result = mb_strlen( $input ) > $length ? mb_substr($input, 0, $length) . '...' : $input;
  return $result;
}

function get_first_paragraph(){
  global $post;
  $str = wpautop( get_the_content() );
  $start = strpos($str, '<p>');
  $str = substr( $str, $start, strpos( $str, '</p>' ) + 4 );
  $str = strip_tags($str, '<a><strong><em>');
  return string_limit($str, 130);
}

function query_topics($item = 4) {
  $args = array(
    'orderby'        => 'post_date',
    'post_type'      => TOPICS_POST_TYPE,
    'post_status'    => 'publish',
    'posts_per_page' => $item,
    'order'          => 'DESC',
  );

  return new WP_Query( $args );
}

function get_pdf_link() {
  $document = get_field('pdf', 'option');
  if(empty($document)) {
    return 'href="#"';
  } else {
    return 'href="'.$document.'" download';
  }
  // $pdf = empty($document) ?  '#' : $document;
  // return $pdf;
}

//hide default post in admin
add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
  remove_menu_page( 'edit.php' );
}

//remove <br> on single page
remove_filter( 'the_content', 'wpautop' );
function wpse_wpautop_nobr( $content ) {
  return wpautop( $content, false );
}

add_filter( 'the_content', 'wpse_wpautop_nobr' ); 

add_filter( 'body_class', 'slug_class_name' );
function slug_class_name( $classes ) {
  global $post;

  if(is_single()) {
    $classes[] = 'is-single';
    $classes[] = 'single-page-'.$post->ID;
  }
  elseif (is_archive()) {
    $classes[] = 'is-topic';
    $classes[] = 'topic-page-'.$post->ID;
  }
  else {
    $others =  $post->post_name .'-page';
    $classes[$others] = $others;
  }
  return $classes;

  // return the $classes array
}