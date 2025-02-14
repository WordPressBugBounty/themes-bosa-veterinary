<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Bosa Veterinary
 */

get_header();
?>
<div id="content" class="site-content">
	<div class="container">
		<div class="wrap-detail-page">
			<?php
				bosa_veterinary_blog_page_title();
				if( !get_theme_mod( 'bosa_veterinary_breadcrumbs_controls', 'show_in_all_page_post' ) == 'disable_in_all_pages' || get_theme_mod( 'bosa_veterinary_breadcrumbs_controls', 'show_in_all_page_post' ) == 'show_in_all_page_post' ){
					bosa_veterinary_breadcrumb_wrap();
				}
			?>
			<div class="search-post-wrap">
				<?php if ( have_posts() ) : ?>
				<div class="row masonry-wrapper">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile; ?>
					</div>
						<?php
							if( !get_theme_mod( 'bosa_veterinary_disable_pagination', false ) ):
								the_posts_pagination( array(
									'next_text' => '<span>'.esc_html__( 'Next', 'bosa-veterinary' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Next page', 'bosa-veterinary' ) . '</span>',
									'prev_text' => '<span>'.esc_html__( 'Prev', 'bosa-veterinary' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Previous page', 'bosa-veterinary' ) . '</span>',
									'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'bosa-veterinary' ) . ' </span>',
								) );
							endif;
						?>
					<?php
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
		</div>
	</div><!-- #container -->
</div><!-- #content -->
<?php
get_footer();
