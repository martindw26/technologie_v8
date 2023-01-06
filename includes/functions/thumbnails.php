<?php
/* ------------------------------------------------
   *  Thumbnails
--------------------------------------------------- */

if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    add_image_size('post_grid', 200, 300, true);
    add_image_size('gallery-thumb_medium', 300, 300, true);
    add_image_size('archive_image', 635, 300, true);  
}
   /* End of Thumbnails */

?>