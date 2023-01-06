<?php

/* ------------------------------------------------
   *  Registers menus
--------------------------------------------------- */

function swt_menues() {
      
        $locations = array(
          'primary' => "Desktop Primary Top",
          'footer_one' => "Footer Menu one",
          'footer_two' => "Footer Menu two"
         );

     register_nav_menus($locations);
}

add_action('init','swt_menues');

/* End of Registers menus */

?>