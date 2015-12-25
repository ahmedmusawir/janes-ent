<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Janes_Enterprise
 */

get_header(); ?>

<section class="front-page-block-1">

	<header class="front-page-header">

		<img class="hidden-xs" src="http://janes/wp-content/uploads/2015/12/ERA_Version-1_351x400.png" alt="Janes Enterprise">
		<img class="hidden-sm hidden-md hidden-lg" src="http://janes/wp-content/uploads/2015/12/ERA_Version-1_250x285.png" alt="Janes Enterprise">

		<h1>Janes Enterprises</h1>
		<hr>
		<h4><em>Helping you to invest in your future ...</em></h4>
		<a href="#" title=""><h4><i class="fa fa-chevron-circle-down"></i></h4></a>
		
	</header>
	
</section>

<section class="front-page-block-2">
	
	<div class="service-area container">
		
		<article class="service-box col-md-4 col-lg-4">

			<div class="service-header">
				<h2><i class="fa fa-home fa-3x"></i></h2>
				<h2>Property Rental & Purchase</h2>
			</div>
			<div class="service-text">
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. 
				</p>
			</div>

			<p>
				<a href="#" class="btn btn-success" title="">Learn More</a>
			</p>
		
		</article>

		<article class="service-box col-md-4 col-lg-4">

			<div class="service-header">
				<h2><i class="fa fa-gavel fa-3x"></i></h2>
				<h2>Financial & Legal Services</h2>
			</div>
			<div class="service-text">
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. 
				</p>
			</div>

			<p>
				<a href="#" class="btn btn-success" title="">Learn More</a>
			</p>
		
		</article>

		<article class="service-box col-md-4 col-lg-4">

			<div class="service-header">
				<h2><i class="fa fa-truck fa-3x"></i></h2>
				<h2>Relocation or Transfer</h2>
			</div>
			<div class="service-text">
				
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. 
				</p>
			</div>

			<p>
				<a href="#" class="btn btn-success" title="">Learn More</a>
			</p>
		
		</article>

		

	</div>
</section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				// get_template_part( 'template-parts/content', 'page' );
				
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
