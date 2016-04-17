<?php

//* Remove Edit Post Link
add_filter( 'edit_post_link', '__return_false' );

//* Add a 'iframe-embed' div around videos for responsive designs.
add_filter('the_content', 'iframe_responsive_wrapper');
function iframe_responsive_wrapper($content) {

    $pattern = '~<iframe.*</iframe>|<embed.*</embed>~';
    preg_match_all($pattern, $content, $matches);

    foreach ($matches[0] as $match) {
        $wrappedframe = '<div class="wrap"><div class="iframe-embed">' . $match . '</div></div>';
        $content = str_replace($match, $wrappedframe, $content);
    }

    return $content;

}

//* Add wrap around tables.
add_filter('the_content', 'table_responsive_wrapper');
function table_responsive_wrapper($content) {

    $pattern = '/<table.*?<\/table>/si';
    preg_match_all($pattern, $content, $matches);

    foreach ($matches[0] as $match) {
        $wrappedframe = '<div class="wrap">' . $match . '</div>';
        $content = str_replace($match, $wrappedframe, $content);
    }

    return $content;

}

//* Add support for after entry widget.
//add_theme_support( 'genesis-after-entry-widget-area' );
