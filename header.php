<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Janes_Enterprise
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



<?php wp_head(); ?>
</head>

<?php 
/**
 *
 * ACF Background Img Variable
 *
 */

$site_background_image = get_field( 'site_background_image', 2 );

?>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'janes-ent' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<!-- <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<!-- <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p> -->
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  		  <div class="container">

		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>

		    	<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Janes Enterprises<img src="<?php echo $siteLogo_mobile;  ?>" alt=""></a>
		    	<div class="google-tran">
		        	<?php //echo do_shortcode('[prisna-google-website-translator]'); ?>
		        </div>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse navbar-ex1-collapse">

		    	<div class="logo hidden-sm hidden-xs hidden-md">
		        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $siteLogo_desktop;  ?>" alt=""></a>
		      	</div>
		        <?php
			        wp_nav_menu( array(
			            'theme_location' => 'primary',
			            'depth' => 2,
			            'container' => false,
			            'menu_class' => 'nav navbar-nav navbar-right',
			            'fallback_cb' => 'wp_page_menu',
			            //Process nav menu using our custom nav walker
			            'walker' => new wp_bootstrap_navwalker())
			        );
		        ?>
		        <!-- Button trigger modal -->
				
		        
		    </div><!-- /.navbar-collapse --> 

		    <!-- <button type="button" class="btn btn-primary btn-xs pull-right google-tran" data-toggle="modal" data-target="#myModal"> -->
		    <button type="button" class="btn btn-primary btn-xs pull-right google-tran hide" data-toggle="modal" data-target="">
				  <!-- Translate Site -->
		        	<?php //echo do_shortcode('[prisna-google-website-translator]'); ?>

			</button>

  		  </div><!-- /.container-fluid -->

		</nav>
	</header><!-- #masthead -->



	<!-- Translate Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Select A Language</h4>
	      </div>
	      <div class="modal-body">
	        <?php echo do_shortcode('[prisna-google-website-translator]'); ?>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
	      </div>
	    </div>
	  </div>
	</div>

	<style type="text/css">

		html {
			
		}
		
		#content {
			font-family: 'Raleway', sans-serif;
			margin-top: 50px;
			background: url(<?php echo $site_background_image; ?>) no-repeat center center fixed; 
			  -webkit-background-size: cover;
			  -moz-background-size: cover;
			  -o-background-size: cover;
			  background-size: cover;

			display: none;
			
		}

	</style>

	<div id="content" class="site-content">

