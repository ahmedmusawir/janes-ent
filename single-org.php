<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Janes_Enterprise
 */

get_header(); ?>

<section class="content-wrapper">

	<div class="page-header-container">
		
		<header class="page-header container">
		
			<h1> <?php wp_title(); ?></h1>

		</header>

	</div>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main col-md-8 col-lg-8" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

			the_post_navigation();
			

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		

		endwhile; // End of the loop.
		?>

		

		</main><!-- #main -->

		<aside class="sidebar col-md-4"><?php get_sidebar(); ?></aside>

	</div><!-- #primary -->

</section> <!-- End content-wrapper -->


<?php
get_footer();
