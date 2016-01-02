<?php
/**
 * The template for displaying all full width pages.
 * Template Name: Full Width
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

<?php 
/**
 *
 * Advanced Custom Fields Variables
 *
 */
$contact_page_title = get_field( 'contact_page_title' );
$contact_page_subtitle = get_field( 'contact_page_subtitle' );
$left_pane_content = get_field( 'left_pane_content' );
$contact_form_shortcode = get_field( 'contact_form_shortcode' );


?>

<section class="content-wrapper">

	<div class="page-header-container">
		
		<header class="page-header container">
		
			<h1> <?php wp_title(); ?></h1>

		</header>

	</div>

	<section class="contact-content">

		<section class="header-txt">
		  <div class="pg-header-txt">
		  	<h2><?php echo $contact_page_title; ?></h2>
		  	<h4><em><?php echo $contact_page_subtitle; ?></em></h4>
		  </div>
		</section>
		
		<div class="container">

			<article class="col-content col-sm-6 col-md-6 col-lg-6">
				
				<?php echo $left_pane_content; ?>

			</article>

			<article class="col-form col-sm-6 com-md-6 col-lg-6">
				
				<div class="contact-header-txt">
				  	<h3>Contact Us</h3>
				</div>

				      
		   		<?php echo do_shortcode( $contact_form_shortcode ); ?>   
				

			</article>

		</div>


	</section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				the_content();

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->


	</div><!-- #primary -->

</section> <!-- End content-wrapper -->


<?php
get_footer();
