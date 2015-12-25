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

		<img src="http://janes/wp-content/uploads/2015/12/ERA_Version-1_351x400.png" alt="Janes Enterprise">

		<h1>Janes Enterprises</h1>
		<hr>
		<h4><em>Helping you to invest in your future ...</em></h4>
		<h4><i class="fa fa-chevron-circle-down"></i></h4>
		
	</header>
	
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
