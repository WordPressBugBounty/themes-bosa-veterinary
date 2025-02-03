<?php
$bosa_veterinary_blog_team_one_ID 	= get_theme_mod( 'bosa_veterinary_blog_team_image_one','' );
$bosa_veterinary_blog_team_two_ID 	= get_theme_mod( 'bosa_veterinary_blog_team_image_two','' );       
$bosa_veterinary_blog_team_three_ID = get_theme_mod( 'bosa_veterinary_blog_team_image_three','' );
$bosa_veterinary_blog_team_four_ID 	= get_theme_mod( 'bosa_veterinary_blog_team_image_four','' );
$bosa_veterinary_blog_team_five_ID 	= get_theme_mod( 'bosa_veterinary_blog_team_image_five','' );
$bosa_veterinary_blog_team_six_ID 	= get_theme_mod( 'bosa_veterinary_blog_team_image_six','' );

$bosa_veterinary_team_array = array();
$bosa_veterinary_has_team = false;
if( !empty( $bosa_veterinary_blog_team_one_ID ) ){
	$bosa_veterinary_blog_team_one  = wp_get_attachment_image_src( $bosa_veterinary_blog_team_one_ID,'bosa-veterinary-420-380');
 	if ( is_array(  $bosa_veterinary_blog_team_one ) ){
 		$bosa_veterinary_has_team = true;
   	 	$bosa_veterinary_blog_team_one = $bosa_veterinary_blog_team_one[0];
   	 	$bosa_veterinary_team_array['image_one'] = array(
			'ID' => $bosa_veterinary_blog_team_one,
		);	
  	}
}
if( !empty( $bosa_veterinary_blog_team_two_ID ) ){
	$bosa_veterinary_blog_team_two = wp_get_attachment_image_src( $bosa_veterinary_blog_team_two_ID,'bosa-veterinary-420-380');
	if ( is_array(  $bosa_veterinary_blog_team_two ) ){
		$bosa_veterinary_has_team = true;	
        $bosa_veterinary_blog_team_two = $bosa_veterinary_blog_team_two[0];
        $bosa_veterinary_team_array['image_two'] = array(
			'ID' => $bosa_veterinary_blog_team_two,
		);	
  	}
}
if( !empty( $bosa_veterinary_blog_team_three_ID ) ){	
	$bosa_veterinary_blog_team_three = wp_get_attachment_image_src( $bosa_veterinary_blog_team_three_ID,'bosa-veterinary-420-380');
	if ( is_array(  $bosa_veterinary_blog_team_three ) ){
		$bosa_veterinary_has_team = true;
      	$bosa_veterinary_blog_team_three = $bosa_veterinary_blog_team_three[0];
      	$bosa_veterinary_team_array['image_three'] = array(
			'ID' => $bosa_veterinary_blog_team_three,
		);	
  	}
}
if( !empty( $bosa_veterinary_blog_team_four_ID ) ){	
	$bosa_veterinary_blog_team_four = wp_get_attachment_image_src( $bosa_veterinary_blog_team_four_ID,'bosa-veterinary-420-380');
	if ( is_array(  $bosa_veterinary_blog_team_four ) ){
		$bosa_veterinary_has_team = true;
      	$bosa_veterinary_blog_team_four = $bosa_veterinary_blog_team_four[0];
      	$bosa_veterinary_team_array['image_four'] = array(
			'ID' => $bosa_veterinary_blog_team_four,
		);	
  	}
}
if( !empty( $bosa_veterinary_blog_team_five_ID ) ){	
	$bosa_veterinary_blog_team_five = wp_get_attachment_image_src( $bosa_veterinary_blog_team_five_ID,'bosa-veterinary-420-380');
	if ( is_array(  $bosa_veterinary_blog_team_five ) ){
		$bosa_veterinary_has_team = true;
      	$bosa_veterinary_blog_team_five = $bosa_veterinary_blog_team_five[0];
      	$bosa_veterinary_team_array['image_five'] = array(
			'ID' => $bosa_veterinary_blog_team_five,
		);	
  	}
}
if( !empty( $bosa_veterinary_blog_team_six_ID ) ){	
	$bosa_veterinary_blog_team_six = wp_get_attachment_image_src( $bosa_veterinary_blog_team_six_ID,'bosa-veterinary-420-380');
	if ( is_array(  $bosa_veterinary_blog_team_six ) ){
		$bosa_veterinary_has_team = true;
      	$bosa_veterinary_blog_team_six = $bosa_veterinary_blog_team_six[0];
      	$bosa_veterinary_team_array['image_six'] = array(
			'ID' => $bosa_veterinary_blog_team_six,
		);	
  	}
}

if( !get_theme_mod( 'bosa_veterinary_disable_teams_section', true ) && $bosa_veterinary_has_team ){ ?>
	<section class="section-team-area">
		<?php foreach( $bosa_veterinary_team_array as $bosa_veterinary_each_team ){ ?>
			<article class="team-content-wrap">
				<figure class= "featured-image">
					<img src="<?php echo esc_url( $bosa_veterinary_each_team['ID'] ); ?>">
				</figure>
			</article>
		<?php } ?>
	</section>
<?php } 