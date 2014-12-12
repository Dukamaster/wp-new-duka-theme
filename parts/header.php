<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
<title><?php echo get_bloginfo('name') ?> | <?php echo get_bloginfo ( 'description' );  ?> </title>

<link rel="author" href="https://plus.google.com/+C%E1%BA%A3nhTr%E1%BA%A7nDuy">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />

<?php	wp_head(); ?>
</head>
<body>
  <nav class="navbar navbar-inverse" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'navbar-header' ) ); ?>
  </nav>
