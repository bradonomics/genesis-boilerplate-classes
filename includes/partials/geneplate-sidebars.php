<?php

/************* LAYOUTS *************/

//* Unregister Sidebars
  //* Remove the comment line to remove the sidebar if you don't intend to use one.
// unregister_sidebar( 'sidebar' );
unregister_sidebar( 'sidebar-alt' );
unregister_sidebar( 'header-right' );


/************* SIDEBARS *************/

//* Add wrap inside sidebar div.
add_action( 'genesis_before_sidebar_widget_area', 'sidebar_wrap_open' );
add_action( 'genesis_after_sidebar_widget_area', 'sidebar_wrap_close' );
function sidebar_wrap_open() {
    echo '<div class="wrap">';
}
function sidebar_wrap_close() {
    echo '</div>';
}
