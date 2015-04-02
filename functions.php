<?php
/*
All the functions are in the PHP pages in the functions/ folder.
*/

require_once locate_template('/functions/enqueues.php');
require_once locate_template('/functions/navbar.php');
require_once locate_template('/functions/widgets.php');
require_once locate_template('/functions/pagination.php');
require_once locate_template('/functions/breadcrumb.php');

//Add featured image to post
add_theme_support( 'post-thumbnails' );
?>
