<?php



return array(
	array(
		'type'      => 'group',
		'repeating' => true,
		'sortable'  => true,
		'name'      => 'coupon',
		'priority'  => 'high',
		'title'     => __('Coupon', 'vp_textdomain'),
		'fields'    => array(
		
	
			array(
					'type' => 'upload',
					'name' => 'image',
					'label' => __('Coupon Image', 'vp_textdomain'),
				),
				
				
			array(
				'type'  => 'textbox',
				'name'  => 'title',
				'label' => __('Coupon Title', 'vp_textdomain'),
				'default' => 'Title Here',
				
			),			
			
			
			array(
				'type'  => 'textarea',
				'name'  => 'description',
				'label' => __('Description', 'vp_textdomain'),
				'default' => 'Coupon description goes here',
			),
			array(
				'type'  => 'textbox',
				'name'  => 'othertext',
				'label' => __('Other Text', 'vp_textdomain'),
				'description' => __('Leave empty if you do not want', 'vp_textdomain'),
			),
			array(
				'type'  => 'textbox',
				'name'  => 'btntext',
				'label' => __('Button Text', 'vp_textdomain'),
			),	

			array(
				'type'  => 'textbox',
				'name'  => 'link',
				'label' => __('Button Link', 'vp_textdomain'),
			),
			

 

		),
	),
);

/**
 * EOF
 */