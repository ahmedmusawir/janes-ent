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
			<?php the_post_thumbnail( 'full', array('class' => 'img-responsive img-featured'));  ?>
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
		<h3 class="text-center">Details</h3>
		<div class="table-responsive"><table class="table table-hover table-bordered table-striped"><thead><tr><th>CRITERION</th><th>DESCRIPTION</th></tr></thead><tbody><tr><td>LOCATION</td><td>Choa Chu Kang Ave 3</td></tr><tr><td>DEVELOPER</td><td>Sim Lian Group</td></tr><tr><td>TENURE OF LAND</td><td>Leasehold 99 years</td></tr><tr><td>TOTAL LAND SIZE</td><td>205,138</td></tr><tr><td>NO. OF UNITS</td><td>534 Units</td></tr><tr><td>UNIT DISTRIBUTION</td><td>3 bedroom, 3 bedroom Premium and 4 bedroom</td></tr><tr><td>NO. OF STOREYS</td><td>3 Blocks of 13 storey / 3 Blocks 15 storey / 3 blocks of 17 storeys</td></tr></tbody></table></div>
	</article>
</section>

<section class="single-description">
	<article class="container">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</article>
</section>
<section class="single-map">
	<article class="container">
		<?php $location = get_field('google_map'); if($location['address']) { ?>
		<div class="acf-map">
		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"  itemprop="map"></div>
		</div>
		<?php } ?>
		
	</article>
</section>










































