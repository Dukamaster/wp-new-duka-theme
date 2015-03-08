<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
<title><?php echo get_bloginfo('name') ?> | <?php echo get_bloginfo ( 'description' );  ?> </title>

<link rel="author" href="https://plus.google.com/+C%E1%BA%A3nhTr%E1%BA%A7nDuy">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
<?php	wp_head(); ?>
</head>
<body>
	<div class="header-panel shadow-z-2">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-4">
	        <h1>
	        	<a title="<?php bloginfo('name'); ?>" href="<?php echo get_option('home'); ?>">
	            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"/>
	          </a>
	         </h1>
        </div>
      </div>
    </div>
  </div>

	<div class="navbar navbar-default">
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	    </button>
	  </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <?php wp_nav_menu( array(
        'theme_location' => 'header-menu',
        'container' => 'none',
        'menu_class' => 'nav navbar-nav'
      ) ); ?>
    </div>
  </div>

