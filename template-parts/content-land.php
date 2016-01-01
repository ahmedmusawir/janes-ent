<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Janes_Enterprise
 */

?>

<?php 
$land_price = get_field( 'land_price' );

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post row'); ?>>
	

	<?php if ( has_post_thumbnail() ) : ?> 

		<header class="entry-header">
			<?php
				if ( is_single() ) {
					the_title( '<h1 class="entry-title">', '</h1>' );
				} else {

					// echo "<div class='col-md-7'>";
			
				 	the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

					// echo "</div>";

					// echo "<div class='col-md-5'>";
					
					echo "<h4 class='text-right price-tag'>Price: $land_price</h4>";

					// echo "</div>";


				}

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php janes_ent_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->
		
		<div class="featured-img col-md-5 col-lg-5">
			<a href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail( 'full', array('class' => 'img-thumbnail'));  ?></a>
		</div>
		<div class="post-text  col-md-7 col-lg-7">

			<div class="entry-content">
				<?php
					the_excerpt( sprintf(
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'janes-ent' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
					
				?>
				<?php	

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'janes-ent' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
			
		</div>	
		<footer class="entry-footer col-md-12 col-lg-12">
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
		</footer><!-- .entry-footer -->

	<?php else: ?>

			<header class="entry-header">
				<?php
					if ( is_single() ) {
						the_title( '<h1 class="entry-title">', '</h1>' );
					} else {
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					}

				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php janes_ent_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content only-text">
				<?php
					the_excerpt( sprintf(
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'janes-ent' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
					

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'janes-ent' ),
						'after'  => '</div>',
					) );
				?>

			</div><!-- .entry-content -->

			<footer class="entry-footer only-text">
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
			</footer><!-- .entry-footer -->


	<?php endif; ?>
</article><!-- #post-## -->








































