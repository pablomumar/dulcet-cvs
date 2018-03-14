<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package dulcet-figmenta
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,800,900" rel="stylesheet">
    <!-- ! Fonts -->

    <!-- Style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/dulcet-style.css" type="text/css">

    <!-- WP styles and scripts of theme -->
	<?php wp_head(); ?>
    <!-- ! Style -->
</head>

<header>
    <div class="container-fluid marco-header">

        <!-- header navigation -->
        <div class="row-wrapper">
            <div class="row">
                <div class="div-logo">
                    <a href="<?php echo get_home_url(); ?>" class="nav-logo"><img class="nav-logo-img" src="<?php echo get_template_directory_uri();?>/images/logo.png"></a>
                </div>
                <?php wp_nav_menu(); ?>
            </div>
        </div>
        <!-- ! header navigation -->

    </div>
</header>

<body>
	<div id="content" class="site-content">
