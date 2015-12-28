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

<section class="content-wrapper">

	<div class="page-header-container">
		
		<header class="page-header container">
		
			<h1> <?php wp_title(); ?></h1>

		</header>

	</div>

	<section class="contact-content">

		<section class="header-txt">
		  <div class="pg-header-txt">
		  	<h2>Get in touch with us</h2>
		  	<h4><em>Don't be shy ...</em></h4>
		  </div>
		</section>
		
		<div class="container">

			<article class="col-content com-md-6 col-lg-6">
				<div class="contact-header-txt">
		  			<h3>Our Office</h3>
			  	</div>
			
				<div class="address-text">
					<p>198  West 21th Street, Suite 721</p>
					<p>New York, NY 10010</p>
					<p><i class="fa fa-envelope"></i> Email: youremail@yourdomain.com</p>
					<p><i class="fa fa-phone-square"></i> Phone: +88 (0) 101 0000 000</p>
					<p><i class="fa fa-fax"></i> Fax: +88 (0) 202 0000 001</p>
				</div>

			  <div class="contact-header-txt">
	              <h3>Let's Socialize</h3>
			  </div>

				<div class="contact-social">
					<span><a href="#"><i class="fa fa-twitter fa-3x"></i></a></span>				
					<span><a href="#"><i class="fa fa-facebook fa-3x"></i></a></span>				
					<span><a href="#"><i class="fa fa-google-plus fa-3x"></i></a></span>				
					<span><a href="#"><i class="fa fa-instagram fa-3x"></i></a></span>				
					<span><a href="#"><i class="fa fa-pinterest fa-3x"></i></a></span>				
				</div>

			</article>
			<article class="col-form com-md-6 col-lg-6">
				
				<div class="contact-header-txt">
				  	<h3>Contact Us</h3>
				</div>

				      
				<form class="contact-form">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputFile">File input</label>
				    <input type="file" id="exampleInputFile">
				    <p class="help-block">Example block-level help text here.</p>
				  </div>
				  <div class="checkbox">
				    <label>
				      <input type="checkbox"> Check me out
				    </label>
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>

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
