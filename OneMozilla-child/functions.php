<?php

  if ( ! function_exists( 'onemozilla_header_style' ) ) :

  define( 'HEADER_IMAGE_WIDTH', apply_filters( 'onemozilla_header_image_width', 500 ) );
  define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'onemozilla_header_image_height', 155 ) );
  /**
   * Styles the header image on the blog
   * (this overrides what's in the OneMozilla theme)
   */
  function onemozilla_header_style() {
    if (get_header_image()) :
?>
<?php
    endif;
  }
  endif; // onemozilla_header_style
?>
