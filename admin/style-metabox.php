<?php



return array(
	array(
		'type'      => 'group',
		'name'      => 'style-metabox',
		'priority'  => 'high',
		'title'     => __('Coupon Style', 'vp_textdomain'),
		'fields'    => array(
		
				array(
					'type' => 'notebox',
					'name' => 'nb_1',
					'label' => __('Author Comment', 'vp_textdomain'),
					'description' => __('If you want to enable these awesome features, you need to buy pro version from here <a href="http://demo.wpvalueclub.com/wp-coupon-system/">WP Coupon System Pro</a>', 'vp_textdomain'),
					'status' => 'error',
					),		
		
	
		 array(
		'type' => 'radiobutton',
		'name' => 'style',
		'label' => __('Select Coupon Style', 'vp_textdomain'),
		'validation' => 'required',
		'items' => array(
				array(
					'value' => 'horizontal',
					'label' => __('Horizontal', 'vp_textdomain'),
				),
				array(
					'value' => 'vertical',
					'label' => __('Vertical (<strong>Pro Only</strong>)', 'vp_textdomain'),
				),
			),
		),

 

		),
	),
);

/**
 * EOF
 */