<?php 

// Register Shortcode
function WPC_shortcode($atts){
	extract( shortcode_atts( array(
	
		'category' => '',
		'border_color' => '',
		'hover_color' => '',
		'title_color' => '',
		'title_font_size' => '',
		'button_color' => '',
		'button_hover_color' => '',
		'desc_text_color' => '',
		'other_text_color' => '',
		'google_font' => '',
		'btn_style' => '',
		'link_open' => '',
		
		
	), $atts) );
	
	
	    $q = new WP_Query(
        array('posts_per_page' => -1, 'post_type' => 'coupon', 'coupon_cat' => $category)
        );
	
		while($q->have_posts()) : $q->the_post();
		$id = get_the_ID();	


					
					
	$infos = vp_metabox('wpc.coupon', false);	
	$style = vp_metabox('meta_style.style-metabox.0.style', false);	
	
	

	
	$i = 0;
	
	if($style=="horizontal"){ 
	
		$output = '<div class="wrap-list">';
	
	foreach ($infos as $info) {	
	
		$output .= '<div class="coupons-code-item full flex" style="border: 3px solid #dddddd;">
						<div class="brand-logo thumb-left">
							<div class="wrap-logo">
								<div class="center-img">
									<span class="ver_hold"></span>
									<a href="'.$info['link'].'" target="'.$link_open.'" class="ver_container"><img src="'.$info['image'].'" alt="$COUPON_IMAGE"></a>
								</div>
							</div>
						</div>
						<div class="right-content flex-body">
							<p class="rs save-price"><a style="color: #0099FF !important; font-family: open sans; font-size:'.$title_font_size.'px;" href="'.$info['link'].'" target="'.$link_open.'">'.$info['title'].'</a></p>
							<p class="rs coupon-desc" style="margin-top:-20px;color:'.$desc_text_color.' !important; font-family: open sans;">'.$info['description'].'</p>
							<div class="bottom-action">
								<div class="left-vote">
									<span style="color:'.$other_text_color.' !important; font-family: open sans;" class="lbl-work">'.$info['othertext'].'</span>
								</div>
								<a class="btn btn-'.$btn_style.' btn-view-coupon" style="color:#fff; font-family: open sans; font-weight:bold;" href="'.$info['link'].'" target="'.$link_open.'">'.$info['btntext'].' </a>
							</div>
						</div>
					</div>'; 
	
	
	
	
		$i++;
	}
	
	
	}
		
		
	if($style=="vertical"){ 
	
	$output = '<style type="text/css">
				.coupon-item:hover .coupon-content{
					border-color: '.$hover_color.';
				}
				.coupon-item:hover .coupon-price{
				color: '.$hover_color.' !important;
				}
				.coupon-item:hover .time-left{
				color: '.$hover_color.' !important;
				}
	</style>';
	
	$output .= '<div class="tab-content-item active">';
	
	foreach ($infos as $info) {	
	
		$output .= '<h2>Please buy pro version to enable this style!</h2>'; 
	
	
	
	
		$i++;
	}
	
	
	}
	
	

		endwhile;
		$output .='</div>';	
		wp_reset_query();
		return $output;
}	

add_shortcode('coupon', 'WPC_shortcode');