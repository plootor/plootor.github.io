<?php

add_shortcode( 'create_blockquote', 'create_blockquote_function' );

function create_blockquote_function() {
  $arg_list = func_get_args();
  if ( empty( $arg_list[0]["content"] ) || empty( $arg_list[0]["content"] ) ) {
    return "<p>please provide content and name params, ex: [create_blockquote content=\"some text\" name=\"Eleonora Duse\"]</p>";
  }

  return '<blockquote class="blockquote-conten">"' . $arg_list[0]["content"] . '"<footer class="quote-footer">' . $arg_list[0]["name"] . '</footer></blockquote>';
}

function create_onepage_gallery() {
  $arg_list = func_get_args();
  $string   = '';
  if ( ! empty( $arg_list[0]['ids'] ) ) {
    $ids    = explode( ',', $arg_list[0]['ids'] );
    $string = '<div class="row">';
    foreach ( $ids as $id ) {
      $string .= '<div class="col-md-6">'
                 . '<img class="img-responsive img-centered" src="' . wp_get_attachment_image_src( $id, 'big-featured-image' )[0] . '" alt="image">'
                 . '<div class="text-center small-gallery-title">Bouquet of flowers</div>'
                 . '</div>';
    }
    $string .= '</div>';
  }

  return $string;
}

add_shortcode( 'create_onepage_gallery', 'create_onepage_gallery' );

function create_grid_block() {
  $arg_list = func_get_args();
  $string   = '';
  if ( ! empty( $arg_list[0]['image_id'] ) ) {
    $string = '<div class="row">';

    if ( $arg_list[0]['image_position'] == 'right' ) {
      $string .= '<div class="col-md-6 modal-text-col">'
                 . '<h2>' . $arg_list[0]['text_big_title'] . '</h2>'
                 . '<h5>' . $arg_list[0]['text_title'] . '</h5>'
                 . '<p>' . $arg_list[0]['text_content'] . '</p>'
                 . '</div>'
                 . '<div class="col-md-6">'
                 . '<img class="img-responsive img-centered" src="' . wp_get_attachment_image_src( $arg_list[0]['image_id'], 'full' )[0] . '" alt="image">'
                 . '</div>';
    } else {
      $string .= '<div class="col-md-6">'
                 . '<img class="img-responsive img-centered" src="' . wp_get_attachment_image_src( $arg_list[0]['image_id'], 'full' )[0] . '" alt="image">'
                 . '</div>'
                 . '<div class="col-md-6 modal-text-col">'
                 . '<h2>' . $arg_list[0]['text_big_title'] . '</h2>'
                 . '<h5>' . $arg_list[0]['text_title'] . '</h5>'
                 . '<p>' . $arg_list[0]['text_content'] . '</p>'
                 . '</div>';
    }
    $string .= '</div>';
  }

  return $string;
}

add_shortcode( 'create_grid_block', 'create_grid_block' );