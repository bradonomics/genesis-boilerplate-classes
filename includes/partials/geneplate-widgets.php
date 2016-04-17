<?php

/************* GENESIS WIDGETS *************/

//* Remove unused Genesis Widgets
  //* Add a comment to block or remove the line to add widgets you'd like to use.
// add_action( 'widgets_init', 'remove_genesis_widgets', 20 );
// function remove_genesis_widgets() {
    unregister_widget( 'Genesis_Featured_Page' );
    unregister_widget( 'Genesis_Featured_Post' );
    unregister_widget( 'Genesis_User_Profile_Widget' );
// }


/************* FOOTER WIDGETS *************/

//* Add 2, 3 or 4-Column Footer Widget Area.
// add_theme_support( 'genesis-footer-widgets', 3 );