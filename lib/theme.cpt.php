<?php

Class CPT extends Singleton
{

    public function __construct()
    {
			// add_action('init', [$this,'make_custom_post_type']);
    }

    public function make_custom_post_type(){
			register_post_type('weart_product',
				array(
					'labels'      => array(
						'name'          => __('Products', 'textdomain'),
						'singular_name' => __('Product', 'textdomain'),
					),
						'public'      => true,
						'has_archive' => true,
				)
			);
    }

}

CPT::getInstance();