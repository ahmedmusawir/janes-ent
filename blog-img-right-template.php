<?php
/**
 * The main template file.
 * Template Name: Blog Image Right
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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

<!-- <h1>Right Page</h1> -->

<? query_posts('post_type=post&post_status=publish&posts_per_page=3&paged='. get_query_var('paged')); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main col-sm-7 col-md-8 col-lg-8" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'blog-right' );

			endwhile;

			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		<div class="nav-links clearfix">
			<div class="navigation">
			<div class="alignleft"><?php previous_posts_link( '&laquo; Previous Entries' ); ?></div>
			<div class="alignright"><?php next_posts_link( 'Next Entries &raquo;', '' ); ?></div>
			</div>
		</div>

		<?php wp_reset_query(); ?>

		</main><!-- #main -->

		<aside class="sidebar col-sm-5 col-md-4 col-lg-4"><?php get_sidebar(); ?></aside>
		
	</div><!-- #primary -->

</section> <!-- End content-wrapper -->
<?php

get_footer();
