<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Janes_Enterprise
 */

?>

<style type="text/css">
/*.acf-map {
	width: 100%;
	height: 400px;
	border: #ccc solid 1px;
	margin: 20px 0;
}*/

/* fixes potential theme css conflict */
/*.acf-map img {
   max-width: inherit !important;
}*/
</style>



<?php 
$land_price = get_field( 'land_price' );
$land_map = get_field( 'land_map' );
		// echo $land_map;
$google_map = get_field( 'google_map' );
// echo $google_map;

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-page'); ?>>
	<header class="entry-header">
		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<h2 class="text-right">
			<?php //janes_ent_entry_footer(); 

			$terms = get_the_terms($post->ID, 'category' );
			if ($terms && ! is_wp_error($terms)) :
				$term_slugs_arr = array();
				foreach ($terms as $term) {
				    $term_slugs_arr[] = $term->slug;
				}
				$terms_slug_str = join( " ", $term_slugs_arr);
			endif;
			echo $terms_slug_str;

		?>
		</h2>
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) : ?> 

		<div class="featured-img">
			<?php //the_post_thumbnail( 'full', array('class' => 'img-responsive img-featured'));  ?>
		</div>
	<?php endif; ?>


	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'janes-ent' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'janes-ent' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
		
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<section class="single-details">
	<article class="container">

		<h2 class="text-center">Details</h2>
		<div class="table-responsive">
		   <table class="table table-hover table-bordered table-striped">
		      <thead>
		         <tr>
		            <th>QUESTIONS</th>
		            <th>ANSWERS</th>
		         </tr>
		      </thead>
		      <tbody>
		         <tr>
		            <td>PRICE</td>
		            <td>$4,995</td>
		         </tr>
		         <tr>
		            <td>PROPERTY ADDRESS</td>
		            <td>807 Badem Powel Rd, , Hawthorne, 32640</td>
		         </tr>
		         <tr>
		            <td>PROPERTY TYPE</td>
		            <td>Residential</td>
		         </tr>
		         <tr>
		            <td>UNIT #</td>
		            <td>204</td>
		         </tr>
		         <tr>
		            <td>BEDROOMS</td>
		            <td>8</td>
		         </tr>
		         <tr>
		            <td>BEDROOMS</td>
		            <td>4</td>
		         </tr>
		         <tr>
		            <td>YEAR BUILT</td>
		            <td>1998</td>
		         </tr>
		         <tr>
		            <td>SQUARE FOOTAGE</td>
		            <td>752</td>
		         </tr>
		         <tr>
		            <td>TAXES</td>
		            <td>$728</td>
		         </tr>
		         <tr>
		            <td>PARCEL NUMBER</td>
		            <td>11-10-23-9303-0050-0030</td>
		         </tr>
		        <tr>
		            <td>HOA</td>
		            <td>$174</td>
		         </tr>
		      </tbody>
		   </table>
		</div>
		
	</article>
</section>

<section class="single-description">
	<article class="container">

		<h2 class="text-center">Description</h2>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>	
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>	
	</article>
</section>
<section class="single-map">
	<article class="container">

		<?php $location = get_field('property_map'); ?>
		<?php if ($location) : ?>
			<?php	if($location['address']) : ?>
				<div class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"  itemprop="map"></div>
				</div>

			<?php endif;?>
		<?php endif; ?>
		
	</article>
</section>










































