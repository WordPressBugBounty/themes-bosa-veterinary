<?php
$bosa_veterinary_page_one 	= get_theme_mod( 'bosa_veterinary_special_occasions_page_one', '' );
$bosa_veterinary_page_two 	= get_theme_mod( 'bosa_veterinary_special_occasions_page_two', '' );
$bosa_veterinary_page_three = get_theme_mod( 'bosa_veterinary_special_occasions_page_three', '' );
$bosa_veterinary_page_four  = get_theme_mod( 'bosa_veterinary_special_occasions_page_four', '' );
$bosa_veterinary_page_five  = get_theme_mod( 'bosa_veterinary_special_occasions_page_five', '');

$bosa_veterinary_page_array = array();
$bosa_veterinary_has_page = false;
$bosa_veterinary_has_array = false;
if( !empty( $bosa_veterinary_page_one ) ){
	$bosa_veterinary_has_page = true;	
}
if( !empty( $bosa_veterinary_page_two ) ){
	$bosa_veterinary_has_page = true;
	$bosa_veterinary_has_array = true;
	$bosa_veterinary_page_array['page_two'] = array(
		'ID' => $bosa_veterinary_page_two,
	);
}
if( !empty( $bosa_veterinary_page_three ) ){
	$bosa_veterinary_has_page = true;
	$bosa_veterinary_has_array = true;
	$bosa_veterinary_page_array['page_three'] = array(
		'ID' => $bosa_veterinary_page_three,
	);
}
if( !empty( $bosa_veterinary_page_four ) ){
	$bosa_veterinary_has_page = true;
	$bosa_veterinary_has_array = true;
	$bosa_veterinary_page_array['page_four'] = array(
		'ID' => $bosa_veterinary_page_four,
	);
}
if( !empty( $bosa_veterinary_page_five ) ){
	$bosa_veterinary_has_page = true;
	$bosa_veterinary_has_array = true;
	$bosa_veterinary_page_array['page_five'] = array(
		'ID' => $bosa_veterinary_page_five,
	);
}

if( !get_theme_mod( 'bosa_veterinary_disable_special_occasions_section', true ) && $bosa_veterinary_has_page ){ ?>
	<section class="section-special-occsaions-area">
		<?php if( !empty( $bosa_veterinary_page_one ) ){ ?>
			<div class="section-title-wrap text-center col-lg-6 offset-lg-3 col-md-8 offset-md-2">
				<h2 class="section-title">
					<a href="<?php echo esc_url( get_permalink( $bosa_veterinary_page_one ) ); ?>">
						<?php echo esc_html( get_the_title( $bosa_veterinary_page_one ) ); ?>
					</a>
				</h2>
				<p>
					<?php 
					$bosa_veterinary_excerpt = get_the_excerpt( $bosa_veterinary_page_one );
					$bosa_veterinary_result  = wp_trim_words( $bosa_veterinary_excerpt, 20, '' );
					echo esc_html( $bosa_veterinary_result );?>	
				</p>
			</div>
		<?php }
		if ( $bosa_veterinary_has_array ){ ?>
			<div class="row justify-content-center">
				<?php foreach( $bosa_veterinary_page_array as $bosa_veterinary_each_page ){ ?>
					<div class="col-md-6 px-lg-4">
						<article class="event-iconbox">
							<figure class="featured-image">
								<?php echo get_the_post_thumbnail( $bosa_veterinary_each_page[ 'ID' ], 'bosa-veterinary-420-380' ); ?>
							</figure>
							<div class="entry-content">
								<h4 class="entry-title">
									<a href="<?php echo esc_url( get_permalink( $bosa_veterinary_each_page[ 'ID' ] ) ); ?>">
										<?php echo esc_html( get_the_title( $bosa_veterinary_each_page[ 'ID' ] ) ); ?>
									</a>
								</h4>
								<div class="entry-text">
									<?php 
									$bosa_veterinary_excerpt = get_the_excerpt( $bosa_veterinary_each_page[ 'ID' ] );
									$bosa_veterinary_result  = wp_trim_words( $bosa_veterinary_excerpt, 10, '' );
									echo esc_html( $bosa_veterinary_result );
									?>
								</div>
								<a href="<?php echo esc_url( get_permalink( $bosa_veterinary_each_page[ 'ID' ] ) ); ?>" class="event-page-link">
									Learn More...
								</a>
							</div>
						</article>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</section>	
<?php }