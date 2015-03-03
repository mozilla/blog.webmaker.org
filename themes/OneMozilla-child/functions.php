<?php

  if ( ! function_exists( 'onemozilla_header_style' ) ) :
  /**
   * Styles the header image on the blog
   * (this overrides what's in the OneMozilla theme)
   */
  function onemozilla_header_style() {
    if (get_header_image()) :
  ?>
    <style type="text/css">
      #masthead { background-image: none;) }
    </style>
  <?php
    endif;
  }
  endif; // onemozilla_header_style

?>
