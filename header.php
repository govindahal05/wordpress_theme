<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Codeilo
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

<?php wp_head(); ?>
</head>	

<body <?php body_class(); ?>>
	<div id="wrapper">
	<?php
		if (is_page( 'home' ) ){?>
			<div class="hero_top_holder hero_top_home">
		<?php }
		else {?>
			<div class="hero_top_holder">
		<?php } ?>		
		    <header id="header">
		        <div class="container-fluid">
		            <div class="row">
		                <div class="col-sm-12">
		                    <div class="header-holder">
		                        <div class="main-nav">
		                            <div class="button_container" id="toggle">
		                                <span class="top"></span>
		                                <span class="middle"></span>
		                                <span class="bottom"></span>
		                            </div>
		                            <div class="overlay" id="overlay">
		                                <nav class="overlay-menu">
		                                    <?php
		                                    	wp_nav_menu( array(
		                                    	    'menu' => 'menu-1'
		                                    	) );
		                                    ?>
		                                </nav>
		                            </div>
		                        </div>
		                        <div class="logo-holder">
		                            <a href="index.html" title="">
		                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="CODEILO" class="img-responsive">
		                            </a>
		                        </div>
		                        <div class="quote-holder">
		                            <!-- <a href="#" class="btn btn-primary"> get a quote </a> -->
		                            <a class="btn btn-primarybg" data-toggle="modal" href='#modalQuote'>get a quote </a>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </header>
		   
