<?php

return array(
// menus
'Coupon Shortcode Settings' => array(
	// shortcodes collection in this menu
	'elements' => array(

			// shortcode with attribute
			'c_horizontal' => array(
			'title' => __('Coupon Horizontal Style', 'qualia_td'),
			'code' => '[coupon]',
			'attributes' => array(
			
					array(
						'type' => 'notebox',
						'name' => 'nb_1',
						'label' => __('Author Comment', 'vp_textdomain'),
						'description' => __('If you want to enable these awesome features, you need to buy pro version from here <a href="http://demo.wpvalueclub.com/wp-coupon-system/">WP Coupon System Pro</a>', 'vp_textdomain'),
						'status' => 'error',
						),
					array(
						'type'  => 'textbox',
						'name'  => 'category',
						'label' => __('Category Name', 'vp_textdomain'),


					),

					array(
						'type'  => 'color',
						'name'  => 'border_color',
						'label' => __('Border Color (<strong>Pro Only</strong>)', 'vp_textdomain'),
						'default' => '#dddddd',
					),
					array(
						'type'  => 'color',
						'name'  => 'title_color',
						'label' => __('Title Color (<strong>Pro Only</strong>)', 'vp_textdomain'),
						'default' => '#0099FF',
					),
					
					array(
						'type' => 'slider',
						'name' => 'title_font_size',
						'label' => __('Title Font Size', 'vp_textdomain'),
						'min' => '0',
						'max' => '100',
						'step' => '1',
						'default' => '21',
					),	
					
					array(
						'type'  => 'color',
						'name'  => 'desc_text_color',
						'label' => __('Description Text Color', 'vp_textdomain'),
						'default' => '#868686',
					),					
					array(
						'type'  => 'color',
						'name'  => 'other_text_color',
						'label' => __('Other Text Color', 'vp_textdomain'),
						'default' => '#a1c44e',
					),
					array(
						'type' => 'select',
						'name' => 'google_font',
						'label' => __('Custom Font (<strong>Pro Only</strong>)', 'vp_textdomain'),
						'description' => __('Select Font', 'vp_textdomain'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value' => 'vp_get_gwf_family',
								),
							),
						),
					),					
				
				array(
					'type' => 'select',
					'name' => 'btn_style',
					'label' => __('Button Style', 'vp_textdomain'),
					'default' => array(
								'{{first}}',
								),
					'items' => array(
						array(
							'value' => 'blue',
							'label' => 'Blue',
						),
						array(
							'value' => 'red',
							'label' => 'Red',
						),	
						array(
							'value' => 'orange',
							'label' => 'Orange',
						),	
						array(
							'value' => 'green',
							'label' => 'Green',
						),		
						array(
							'value' => 'yellow',
							'label' => 'Yellow',
						),		
	
				),	),										
					array(
						'type' => 'checkbox',
						'name' => 'link_open',
						'label' => __('Open In New Tab?', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => '_blank',
							),
						),
					),
					


				
				),
			),
		// ... more elements
			
			
			// shortcode with attribute
			'c_vertical' => array(
			'title' => __('Coupon Vertical Style (<strong>Pro Only</strong>)', 'qualia_td'),
			'code' => '[coupon]',
			'attributes' => array(
			
					array(
						'type' => 'notebox',
						'name' => 'nb_1',
						'label' => __('Author Comment', 'vp_textdomain'),
						'description' => __('If you want to enable these awesome features, you need to buy pro version from here <a href="http://demo.wpvalueclub.com/wp-coupon-system/">WP Coupon System Pro</a>', 'vp_textdomain'),
						'status' => 'error',
						),
					array(
						'type'  => 'textbox',
						'name'  => 'category',
						'label' => __('Category Name', 'vp_textdomain'),

					),
					
					array(
						'type'  => 'color',
						'name'  => 'hover_color',
						'label' => __('Hover Color', 'vp_textdomain'),
						'default' => '#FF8317',
					),
					
					array(
						'type'  => 'color',
						'name'  => 'title_color',
						'label' => __('Title Color', 'vp_textdomain'),
						'default' => '#0099FF',
					),
					
					array(
						'type' => 'slider',
						'name' => 'title_font_size',
						'label' => __('Title Font Size', 'vp_textdomain'),
						'min' => '0',
						'max' => '100',
						'step' => '1',
						'default' => '21',
					),	
					
					array(
						'type'  => 'color',
						'name'  => 'desc_text_color',
						'label' => __('Description Text Color', 'vp_textdomain'),
						'default' => '#868686',
					),					
					array(
						'type'  => 'color',
						'name'  => 'other_text_color',
						'label' => __('Other Text Color', 'vp_textdomain'),
						'default' => '#a1c44e',
					),
					array(
						'type' => 'select',
						'name' => 'google_font',
						'label' => __('Custom Font', 'vp_textdomain'),
						'description' => __('Select Font', 'vp_textdomain'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value' => 'vp_get_gwf_family',
								),
							),
						),
					),					
				
				array(
					'type' => 'select',
					'name' => 'btn_style',
					'label' => __('Button Style', 'vp_textdomain'),
					'default' => array(
								'{{first}}',
								),
					'items' => array(
						array(
							'value' => 'blue',
							'label' => 'Blue',
						),
						array(
							'value' => 'red',
							'label' => 'Red',
						),	
						array(
							'value' => 'orange',
							'label' => 'Orange',
						),	
						array(
							'value' => 'green',
							'label' => 'Green',
						),		
						array(
							'value' => 'yellow',
							'label' => 'Yellow',
						),		
	
				),	),										
					array(
						'type' => 'checkbox',
						'name' => 'link_open',
						'label' => __('Open In New Tab?', 'vp_textdomain'),
						'items' => array(
							array(
								'value' => '_blank',
							),
						),
					),
					


				
				),
			),			
			
		
		),
	),
// ... more menus
);

?>