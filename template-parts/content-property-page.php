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

$property_price = get_field( 'property_price' );
$property_address = get_field( 'property_address' );
$property_property_type = get_field( 'property_property_type' );
$property_unit_number = get_field( 'property_unit_number' );
$property_bathrooms = get_field( 'property_bathrooms' );
$property_bedrooms = get_field( 'property_bedrooms' );
$property_year_built = get_field( 'property_year_built' );
$property_square_footage = get_field( 'property_square_footage' );
$property_taxes = get_field( 'property_taxes' );
$property_parcel_number = get_field( 'property_parcel_number' );
$property_hoa = get_field( 'property_hoa' );
$property_description = get_field( 'property_description' );
$location = get_field( 'property_map' );
$property_spanish_page_link = get_field( 'property_spanish_page_link' );

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
		            <td><?php echo $property_price;  ?></td>
		         </tr>
		         <tr>
		            <td>PROPERTY ADDRESS</td>
		            <td><?php echo $property_address; ?></td>
		         </tr>
		         <tr>
		            <td>PROPERTY TYPE</td>
		            <td><?php echo $property_property_type;  ?></td>
		         </tr>
		         <tr>
		            <td>UNIT #</td>
		            <td><?php echo $property_unit_number;  ?></td>
		         </tr>
		         <tr>
		            <td>BEDROOMS</td>
		            <td><?php echo $property_bedrooms;  ?></td>
		         </tr>
		         <tr>
		            <td>BATHROOMS</td>
		            <td><?php echo $property_bathrooms;  ?></td>
		         </tr>
		         <tr>
		            <td>YEAR BUILT</td>
		            <td><?php echo $property_year_built;  ?></td>
		         </tr>
		         <tr>
		            <td>SQUARE FOOTAGE</td>
		            <td><?php echo $property_square_footage;  ?></td>
		         </tr>
		         <tr>
		            <td>TAXES</td>
		            <td><?php echo $property_taxes;  ?></td>
		         </tr>
		         <tr>
		            <td>PARCEL NUMBER</td>
		            <td><?php echo $property_parcel_number;  ?></td>
		         </tr>
		         <tr>
		            <td>HOA</td>
		            <td><?php echo $property_hoa; ?></td>
		         </tr>
		      </tbody>
		   </table>
		</div>
		
	</article>
</section>

<section class="single-description">
	<article class="container">

		<h2 class="text-center">Description</h2>
		
		<?php echo $property_description; ?>

	</article>
</section>
<section class="single-map">
	<article class="container">

		<?php if ($location) : ?>
			<?php	if($location['address']) : ?>
				<div class="acf-map">
				<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"  itemprop="map"></div>
				</div>

			<?php endif;?>
		<?php endif; ?>
		
	</article>
</section>










































