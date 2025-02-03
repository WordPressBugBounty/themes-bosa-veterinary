<?php
$bosa_veterinary_posts_per_page_count = get_theme_mod( 'bosa_veterinary_feature_posts_posts_number', 6 );
$bosa_veterinary_feature_posts_id = get_theme_mod( 'bosa_veterinary_feature_posts_category', '' );

$bosa_veterinary_query = new WP_Query( apply_filters( 'bosa_veterinary_blog_args', array(
	'post_type'           => 'post',
	'post_status'         => 'publish',
	'posts_per_page'      => $bosa_veterinary_posts_per_page_count,
	'cat'                 => $bosa_veterinary_feature_posts_id,
	'offset'              => 0,
	'ignore_sticky_posts' => 1
)));

$bosa_veterinary_posts_array = $bosa_veterinary_query->get_posts();
$bosa_veterinary_show_feature_posts = count( $bosa_veterinary_posts_array ) > 0 && is_home();

if( !get_theme_mod( 'bosa_veterinary_disable_feature_posts_section', false ) && $bosa_veterinary_show_feature_posts ){
	$bosa_veterinary_feature_title_desc_align = get_theme_mod( 'bosa_veterinary_feature_posts_section_title_desc_alignment', 'left' );
	if ( $bosa_veterinary_feature_title_desc_align == 'left' ){
		$bosa_veterinary_feature_title_desc_align = 'text-left';
	}else if ( $bosa_veterinary_feature_title_desc_align == 'center' ){
		$bosa_veterinary_feature_title_desc_align = 'text-center';
	}else{
		$bosa_veterinary_feature_title_desc_align = 'text-right';
	} ?>
	<section class="section-feature-posts-area feature-posts-layout-one">
		<?php if( ( !get_theme_mod( 'bosa_veterinary_disable_feature_posts_section_title', true ) && get_theme_mod( 'bosa_veterinary_feature_posts_section_title', '' ) ) || ( !get_theme_mod( 'bosa_veterinary_disable_feature_posts_section_description', true ) && get_theme_mod( 'bosa_veterinary_feature_posts_section_description', '' ) ) ){ ?>
			<div class="section-title-wrap <?php echo esc_attr( $bosa_veterinary_feature_title_desc_align ); ?> ">
				<?php if( !get_theme_mod( 'bosa_veterinary_disable_feature_posts_section_title', true ) && get_theme_mod( 'bosa_veterinary_feature_posts_section_title', '' ) ) { ?>
					<h2 class="section-title"><?php echo esc_html( get_theme_mod( 'bosa_veterinary_feature_posts_section_title', '' ) ); ?></h2>
				<?php } 
				if(  !get_theme_mod( 'bosa_veterinary_disable_feature_posts_section_description', true ) && get_theme_mod( 'bosa_veterinary_feature_posts_section_description', '' ) ){ ?>
					<p><?php echo esc_html( get_theme_mod( 'bosa_veterinary_feature_posts_section_description', '' ) ); ?></p>
				<?php } ?>
			</div>
		<?php } ?>
		<div class="content-wrap">
			<div class="row">
			<?php

				while ( $bosa_veterinary_query->have_posts() ) : $bosa_veterinary_query->the_post();
				$bosa_veterinary_render_feature_post_image_size = get_theme_mod( 'bosa_veterinary_render_feature_post_image_size', 'bosa-veterinary-420-300' );
				$bosa_veterinary_image 							= get_the_post_thumbnail_url( get_the_ID(), $bosa_veterinary_render_feature_post_image_size );

				$bosa_veterinary_columns_class = '';
				if( get_theme_mod( 'bosa_veterinary_feature_posts_columns', 'three_columns' ) == 'one_column' ){
					$bosa_veterinary_columns_class = 'col-md-12';
				}elseif( get_theme_mod( 'bosa_veterinary_feature_posts_columns', 'three_columns' ) == 'two_columns' ){
					$bosa_veterinary_columns_class = 'col-md-6';
				}elseif( get_theme_mod( 'bosa_veterinary_feature_posts_columns', 'three_columns' ) == 'three_columns' ){
					$bosa_veterinary_columns_class = 'col-md-4';
				}elseif( get_theme_mod( 'bosa_veterinary_feature_posts_columns', 'three_columns' ) == 'four_columns' ){
					$bosa_veterinary_columns_class = 'col-md-3';
				}
				?>
					<div class="<?php echo esc_attr( $bosa_veterinary_columns_class ); ?>">
						<article class="post feature-posts-content-wrap <?php echo esc_attr( get_theme_mod( 'bosa_veterinary_feature_posts_text_alignment', 'text-left' ) ); ?>">
							<div class="feature-posts-image" style="background-image: url( <?php echo esc_url( $bosa_veterinary_image ); ?> );">
								<div class="feature-posts-content">
									<?php
									if( 'post' == get_post_type() ): 
										$bosa_veterinary_categories_list = get_the_category_list( ' ' );
										if( $bosa_veterinary_categories_list && !get_theme_mod( 'bosa_veterinary_hide_featured_posts_category', false ) ):
										printf( '<span class="cat-links">' . '%1$s' . '</span>', $bosa_veterinary_categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
										endif;
									endif;
									?>
									<?php 
										if( !get_theme_mod( 'bosa_veterinary_disable_feature_posts_title', false ) ){
											?>
											<h3 class="feature-posts-title">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h3>
											<?php
										}
									?>
									<div class="entry-meta">
										<?php
											if( !get_theme_mod( 'bosa_veterinary_hide_featured_posts_date', false ) ): ?>
												<span class="posted-on">
													<a href="<?php echo esc_url( bosa_veterinary_get_day_link() ); ?>" >
														<?php echo esc_html(get_the_date('M j, Y')); ?>
													</a>
												</span>
											<?php endif; 
											if( !get_theme_mod( 'bosa_veterinary_hide_featured_posts_author', false ) ): ?>
												<span class="byline">
													<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
														<?php echo esc_html( get_the_author() ) ?>
													</a>
												</span>
											<?php endif; 
											if( !get_theme_mod( 'bosa_veterinary_hide_featured_posts_comment', false ) ): ?>
												<span class="comments-link">
													<a href="<?php comments_link(); ?>">
														<?php echo absint( wp_count_comments( get_the_ID() )->approved ); ?>
													</a>
												</span>
											<?php endif; ?>
									</div>
								</div>
							</div>
						</article>
					</div>
				<?php
				endwhile; 
				wp_reset_postdata();
			?>
			</div>
		</div>
	</section>
<?php }