<?php

//* Include Google fonts, responsive menu icon and dashicons and remove comment-reply script.
add_action( 'wp_enqueue_scripts', 'geneplate_enqueue_scripts' );
function geneplate_enqueue_scripts() {
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Railway', array(), CHILD_THEME_VERSION );
    wp_enqueue_style( 'dashicons' );

    wp_dequeue_script ( 'comment-reply' );

    //* Move jQuery before closing body tag.
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );

    //* To use jQuery Migrate uncomment the wp_register_script & wp_enqueue_script lines.
    wp_deregister_script( 'jquery-ui' );
    // wp_enqueue_script( 'jquery-ui', includes_url( '/js/jquery/jquery-migrate.min.js' ), false, NULL, true );

    wp_enqueue_script( 'responsive-menu-icon', get_bloginfo( 'stylesheet_directory' ) . '/js/responsive-menu.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
}

//* TODO: Remove web fonts from local builds: http://dev-notes.eu/2016/04/remove-open-sans-wordpress-admin/

//* Move child theme stylesheet to the end of the line so it takes precedence over plugin stylesheets.
remove_action( 'genesis_meta', 'genesis_load_stylesheet' );
add_action( 'wp_enqueue_scripts', 'genesis_enqueue_main_stylesheet', 999 );


//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Remove Emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

//* Remove recent comment sytles from head when using widgets
add_action( 'widgets_init', 'remove_recent_comments_style' );
function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}

//* Remove WordPress version
remove_action( 'wp_head', 'wp_generator' );

//* Remove RSD Link in Header
remove_action( 'wp_head', 'rsd_link' );
