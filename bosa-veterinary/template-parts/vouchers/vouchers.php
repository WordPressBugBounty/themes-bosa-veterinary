<?php
$bosa_veterinary_blog_voucher_image_one_ID 	 = get_theme_mod( 'bosa_veterinary_blog_voucher_image_one','');
$bosa_veterinary_blog_voucher_image_two_ID 	 = get_theme_mod( 'bosa_veterinary_blog_voucher_image_two','');       
$bosa_veterinary_blog_voucher_image_three_ID = get_theme_mod( 'bosa_veterinary_blog_voucher_image_three','');
$bosa_veterinary_blog_voucher_image_four_ID  = get_theme_mod( 'bosa_veterinary_blog_voucher_image_four','');
$bosa_veterinary_blog_voucher_one_ID 		 = get_theme_mod( 'bosa_veterinary_voucher_one','');
$bosa_veterinary_blog_voucher_two_ID 		 = get_theme_mod( 'bosa_veterinary_voucher_two','');
$bosa_veterinary_blog_voucher_three_ID 		 = get_theme_mod( 'bosa_veterinary_voucher_three','');
$bosa_veterinary_blog_voucher_four_ID 		 = get_theme_mod( 'bosa_veterinary_voucher_four','');

$bosa_veterinary_vouchers_array = array();
$bosa_veterinary_has_voucher_img = false;
$bosa_veterinary_has_voucher_txt = false;
if( !empty( $bosa_veterinary_blog_voucher_image_one_ID ) ){
	$bosa_veterinary_blog_voucher_one  = wp_get_attachment_image_src( $bosa_veterinary_blog_voucher_image_one_ID,'bosa-veterinary-420-300');
 	if ( is_array(  $bosa_veterinary_blog_voucher_one ) ){
 		$bosa_veterinary_has_voucher_img = true;
 		$bosa_veterinary_has_voucher_txt = true;
   	 	$bosa_veterinary_blog_vouchers_one = $bosa_veterinary_blog_voucher_one[0];
   	 	$bosa_veterinary_vouchers_array['image_one'] = array(
			'ID' => $bosa_veterinary_blog_vouchers_one,
			'txt' => $bosa_veterinary_blog_voucher_one_ID,
		);	
  	}
}
if( !empty( $bosa_veterinary_blog_voucher_image_two_ID ) ){
	$bosa_veterinary_blog_voucher_two = wp_get_attachment_image_src( $bosa_veterinary_blog_voucher_image_two_ID,'bosa-veterinary-420-300');
	if ( is_array(  $bosa_veterinary_blog_voucher_two ) ){
		$bosa_veterinary_has_voucher_img = true;
		$bosa_veterinary_has_voucher_txt = true;	
        $bosa_veterinary_blog_vouchers_two = $bosa_veterinary_blog_voucher_two[0];
        $bosa_veterinary_vouchers_array['image_two'] = array(
			'ID' => $bosa_veterinary_blog_vouchers_two,
			'txt' => $bosa_veterinary_blog_voucher_two_ID,
		);	
  	}
}
if( !empty( $bosa_veterinary_blog_voucher_image_three_ID ) ){	
	$bosa_veterinary_blog_voucher_three = wp_get_attachment_image_src( $bosa_veterinary_blog_voucher_image_three_ID,'bosa-veterinary-420-300');
	if ( is_array(  $bosa_veterinary_blog_voucher_three ) ){
		$bosa_veterinary_has_voucher_img = true;
		$bosa_veterinary_has_voucher_txt = true;
      	$bosa_veterinary_blog_vouchers_three = $bosa_veterinary_blog_voucher_three[0];
      	$bosa_veterinary_vouchers_array['image_three'] = array(
			'ID' => $bosa_veterinary_blog_vouchers_three,
			'txt' => $bosa_veterinary_blog_voucher_three_ID,
		);	
  	}
}
if( !empty( $bosa_veterinary_blog_voucher_image_four_ID ) ){	
	$bosa_veterinary_blog_voucher_four = wp_get_attachment_image_src( $bosa_veterinary_blog_voucher_image_four_ID,'bosa-veterinary-420-300');
	if ( is_array(  $bosa_veterinary_blog_voucher_four ) ){
		$bosa_veterinary_has_voucher_img = true;
		$bosa_veterinary_has_voucher_txt = true;
      	$bosa_veterinary_blog_vouchers_four = $bosa_veterinary_blog_voucher_four[0];
      	$bosa_veterinary_vouchers_array['image_four'] = array(
			'ID' => $bosa_veterinary_blog_vouchers_four,
			'txt' => $bosa_veterinary_blog_voucher_four_ID,
		);	
  	}
}

if( !get_theme_mod( 'bosa_veterinary_disable_voucher_section', true ) && $bosa_veterinary_has_voucher_img && $bosa_veterinary_has_voucher_txt ){ ?>
	<section class="section-vouchers-area">
		<div class="row">
			<?php foreach( $bosa_veterinary_vouchers_array as $bosa_veterinary_each_vouchers ){ ?>
				<div class="col-md-3 col-sm-6">
					<article class="voucher-code-content-wrap">
						<figure class= "featured-image">
							<img src="<?php echo esc_url( $bosa_veterinary_each_vouchers['ID'] ); ?>">
						</figure>
						<?php if( !empty( $bosa_veterinary_each_vouchers['txt'] ) ) { ?>
							<h4 class="redeem-voucher-txt">
								<?php
									echo esc_html( $bosa_veterinary_each_vouchers['txt'] );
								?>
							</h4>
						<?php } ?>
					</article>
				</div>
			<?php } ?>
		</div>	
	</section>
<?php }