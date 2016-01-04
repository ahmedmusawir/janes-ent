<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Janes_Enterprise
 */

?>

<section class="no-results not-found content-wrapper">
	
	<div class="page-header-container">
		
		<header class="page-header container">
		
			<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'janes-ent' ); ?></h1>

		</header>

	</div>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main col-sm-7 col-md-8 col-lg-8" role="main">
			
			<?php
				if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

					<p class="none-found"><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'janes-ent' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

				<?php elseif ( is_search() ) : ?>

					<p class="none-found"><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'janes-ent' ); ?></p>
					<?php
						get_search_form();

				else : ?>

					<p class="none-found"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'janes-ent' ); ?></p>
					<?php
						get_search_form();

				endif; 
			?>			
					

			</main><!-- #main -->

		<aside class="sidebar col-sm-5 col-md-4 col-lg-4"><?php get_sidebar(); ?></aside>
		
	</div><!-- #primary -->	

</section><!-- .no-results -->
