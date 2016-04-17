<?php

//* Custom footer text and copyright info.
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'geneplate_footer' );
function geneplate_footer() { ?>
    <p><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> &copy; <?php echo date('Y') ?> &middot; <a href="http://github.com/bradonomics/genesis-boilerplate/" rel="nofollow">Built using Genesis Boilerplate</a></p><?php
}