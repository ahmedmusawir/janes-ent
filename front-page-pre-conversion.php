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

<?php 
// FRONTPAGE BLOCK 1
$logo_desktop = get_field( 'logo_desktop' );
$logo_mobile	 = get_field( 'logo_mobile' );
$block1_title = get_field( 'block1_title' );
$block_1_subtitle = get_field( 'block_1_subtitle' );

// FRONTPAGE BLOCK 2
$slider_image_1 = get_field( 'slider_image_1' );
$slider_image_2 = get_field( 'slider_image_2' );
$slider_image_3 = get_field( 'slider_image_3' );

// FRONTPAGE BLOCK 3

// Service Left Box
$left_box_icon = get_field( 'left_box_icon' );
$left_box_title	 = get_field( 'left_box_title' );
$left_box_content = get_field( 'left_box_content' );
$left_box_button_text = get_field( 'left_box_button_text' );
$left_box_button_link = get_field( 'left_box_button_link' );

// Service MIddle Box
$middle_box_icon = get_field( 'middle_box_icon' );
$middle_box_title	 = get_field( 'middle_box_title' );
$middle_box_content = get_field( 'middle_box_content' );
$middle_box_button_text = get_field( 'middle_box_button_text' );
$middle_box_button_link = get_field( 'middle_box_button_link' );

// Service Right Box
$right_box_icon = get_field( 'right_box_icon' );
$right_box_title	 = get_field( 'right_box_title' );
$right_box_content = get_field( 'right_box_content' );
$right_box_button_text = get_field( 'right_box_button_text' );
$right_box_button_link = get_field( 'right_box_button_link' );

// FRONTPAGE BLOCK 4

// Featued Block Background
$featured_block_background_image = get_field( 'featured_block_background_image' );

// Featued Box 1
$box_1_image = get_field( 'box_1_image' );
$box_1_title	 = get_field( 'box_1_title' );
$box_1_sub_title = get_field( 'box_1_sub_title' );
$box_1_content = get_field( 'box_1_content' );
$box_1_button_text = get_field( 'box_1_button_text' );
$box_1_button_link = get_field( 'box_1_button_link' );

// Featued Box 2
$box_2_image = get_field( 'box_2_image' );
$box_2_title	 = get_field( 'box_2_title' );
$box_2_sub_title = get_field( 'box_2_sub_title' );
$box_2_content = get_field( 'box_2_content' );
$box_2_button_text = get_field( 'box_2_button_text' );
$box_2_button_link = get_field( 'box_2_button_link' );

// Featued Box 3
$box_3_image = get_field( 'box_3_image' );
$box_3_title	 = get_field( 'box_3_title' );
$box_3_sub_title = get_field( 'box_3_sub_title' );
$box_3_content = get_field( 'box_3_content' );
$box_3_button_text = get_field( 'box_3_button_text' );
$box_3_button_link = get_field( 'box_3_button_link' );

// Featued Box 4
$box_4_image = get_field( 'box_4_image' );
$box_4_title	 = get_field( 'box_4_title' );
$box_4_sub_title = get_field( 'box_4_sub_title' );
$box_4_content = get_field( 'box_4_content' );
$box_4_button_text = get_field( 'box_4_button_text' );
$box_4_button_link = get_field( 'box_4_button_link' );

// FRONTPAGE BLOCK 4
$callout_content = get_field( 'callout_content' );




?>

<section class="front-page-block-1">

	<header class="front-page-header">

		<img class="hidden-xs wow slideInDown"  data-wow-duration="2s" data-wow-delay="0.5s" src="http://janesnew/wp-content/uploads/2015/12/Original_Janes_logo_final_transparent_E_350.png" alt="Janes Enterprise">
		<img class="hidden-sm hidden-md hidden-lg wow slideInDown"  data-wow-duration="2s" data-wow-delay="0.5s" src="http://janesnew/wp-content/uploads/2015/12/Original_Janes_logo_final_transparent_E_250.png" alt="Janes Enterprise">

		<h1 class="wow slideInLeft" data-wow-duration="2s" data-wow-delay="0.5s">Janes Enterprises</h1>
		<hr>
		<h4 class="wow slideInRight" data-wow-duration="2s" data-wow-delay="0.5s"><em>Helping you to invest in your future ...</em></h4>

		<button type="button" class="btn btn-success btn-xs google-tran " data-toggle="modal" data-target="#myModal">Translate Site</button>
		<a href="#block3" title="" class="mPS2id-clicked" rel='m_PageScroll2id'><h4 class="animated infinite bounce"><i class="fa fa-chevron-circle-down"></i></h4></a>
		
	</header>
	
</section>



<section id="block3" class="front-page-block-3 mPS2id-target">

	<atricle class="slider">

			<div id="fp-carousel" class="carousel slide container" data-ride="carousel">

			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#fp-carousel" data-slide-to="0" class="active"></li>
			    <li data-target="#fp-carousel" data-slide-to="1"></li>
			    <li data-target="#fp-carousel" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img class="img-responsive" src="wp-content/uploads/2015/12/slider1.jpg" alt="...">
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			    <div class="item">
			      <img class="img-responsive" src="wp-content/uploads/2015/12/slider2.jpg" alt="...">
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			    <div class="item">
			      <img class="img-responsive" src="wp-content/uploads/2015/12/slide3.jpg" alt="...">
			      <div class="carousel-caption">
			        
			      </div>
			    </div>
			    
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#fp-carousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#fp-carousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>

			</div>
		
	</atricle>
</section>

<section id="block2" class="front-page-block-2">
	
	<div class="service-area container">
		
		<article id="left" class="service-box col-md-4 col-lg-4 wow slideInLeft">

			<div class="service-header">
				<h2><i class="fa fa-home fa-3x"></i></h2>
				<h2>Property Rental & Purchase</h2>
			</div>
			<div class="service-text">
				
				<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore molestias tenetur dignissimos provident unde quo dolorum quam, asperiores, maiores, facilis similique amet possimus vel odio harum. Ex, corrupti? Pariatur earum molestiae, corporis, fugiat cum corrupti laboriosam voluptatem quod mollitia adipisci sint nisi reiciendis itaque repudiandae sed laborum quos, nesciunt quasi?
				</p>
			</div>

			<p>
				<a href="#" class="btn btn-success" title="">Learn More</a>
			</p>
		
		</article>

		<article id="middle" class="service-box col-md-4 col-lg-4">

			<div class="service-header">
				<h2><i class="fa fa-gavel fa-3x"></i></h2>
				<h2>Financial & Legal Services</h2>
			</div>
			<div class="service-text">
				
				<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore molestias tenetur dignissimos provident unde quo dolorum quam, asperiores, maiores, facilis similique amet possimus vel odio harum. Ex, corrupti? Pariatur earum molestiae, corporis, fugiat cum corrupti laboriosam voluptatem quod mollitia adipisci sint nisi reiciendis itaque repudiandae sed laborum quos, nesciunt quasi?
				</p>
			</div>

			<p>
				<a href="#" class="btn btn-success" title="">Learn More</a>
			</p>
		
		</article>

		<article id="right" class="service-box col-md-4 col-lg-4 wow slideInRight">

			<div class="service-header">
				<h2><i class="fa fa-truck fa-3x"></i></h2>
				<h2>Relocation or Transfer</h2>
			</div>
			<div class="service-text">
				
				<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore molestias tenetur dignissimos provident unde quo dolorum quam, asperiores, maiores, facilis similique amet possimus vel odio harum. Ex, corrupti? Pariatur earum molestiae, corporis, fugiat cum corrupti laboriosam voluptatem quod mollitia adipisci sint nisi reiciendis itaque repudiandae sed laborum quos, nesciunt quasi?
				</p>
			</div>

			<p>
				<a href="#" class="btn btn-success" title="">Learn More</a>
			</p>
		
		</article>

		

	</div>
</section>

<style type="text/css" media="screen">

	.front-page-block-4 {
		background: url(http://janesnew/wp-content/uploads/2015/12/featured-box-bg.jpg) no-repeat center center fixed; 
		-webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
	
</style>


<section class="front-page-block-4">
	
	<div class="featured-block container">

	  	<div class="row">

			<article class="featured-box col-md-6 col-lg-6">

				<div class="featured-content wow slideInLeft" data-wow-duration="2s" data-wow-delay="0.5s">

					<div class="fearured-img">
						<img src="wp-content/uploads/2015/12/featured-1.jpg" alt="">
					</div>
					
					<div class="featured-header">
						<h2>Lake Views</h2>
						<h4><em>5 Bedrooms / 600sqm / $70000</em></i></h4>

					</div>
					<div class="featured-text">
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. 
						</p>
					</div>

					<p>
						<a href="#" class="btn btn-danger" title="">Learn More</a>
					</p>

				</div>

			</article>

			<article class="featured-box col-md-6 col-lg-6">

				<div class="featured-content wow slideInRight" data-wow-duration="2s" data-wow-delay="0.5s">

					<div class="fearured-img">
						<img src="wp-content/uploads/2015/12/featured-2.jpg" alt="">
					</div>
					
					<div class="featured-header">
						<h2>Lake Views</h2>
						<h4><em>5 Bedrooms / 600sqm / $70000</em></i></h4>

					</div>
					<div class="featured-text">
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. 
						</p>
					</div>

					<p>
						<a href="#" class="btn btn-danger" title="">Learn More</a>
					</p>

				</div>

			</article>

		</div>	<!-- row end -->

		<div class="row">

			
			<article class="featured-box col-md-6 col-lg-6">

				<div class="featured-content  wow slideInLeft" data-wow-duration="2s" data-wow-delay="0.5s">

					<div class="fearured-img">
						<img src="wp-content/uploads/2015/12/featured-3.jpg" alt="">
					</div>
					
					<div class="featured-header">
						<h2>Lake Views</h2>
						<h4><em>5 Bedrooms / 600sqm / $70000</em></i></h4>

					</div>
					<div class="featured-text">
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. 
						</p>
					</div>

					<p>
						<a href="#" class="btn btn-danger" title="">Learn More</a>
					</p>

				</div>

			</article>

			<article class="featured-box col-md-6 col-lg-6">

				<div class="featured-content  wow slideInRight" data-wow-duration="2s" data-wow-delay="0.5s">

					<div class="fearured-img">
						<img src="wp-content/uploads/2015/12/featured-4.jpg" alt="">
					</div>
					
					<div class="featured-header">
						<h2>Lake Views</h2>
						<h4><em>5 Bedrooms / 600sqm / $70000</em></i></h4>

					</div>
					<div class="featured-text">
						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. 
						</p>
					</div>

					<p>
						<a href="#" class="btn btn-danger" title="">Learn More</a>
					</p>

				</div>

			</article>

		</div>  <!-- row end -->	
		
	</div>

</section>

<section class="front-page-block-5">
	
	<article class="callout-box">
	
		<h2 id="interest">Interested?</h2>
		<h2>Call Us at 1.404.218.1998</h2>
		<h2>Visit Our Office at</h2>
		<h3>2657 Ashleigh Lane, STE 300, Alpharetta, GA 30004</h3>

	</article>

</section>


	<div id="primary" class="">
		<main id="main" class="" role="main">

			<?php
			while ( have_posts() ) : the_post();

				// get_template_part( 'template-parts/content', 'page' );
				the_content();
				
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
