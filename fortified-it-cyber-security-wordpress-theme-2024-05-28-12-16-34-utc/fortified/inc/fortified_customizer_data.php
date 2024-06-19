<?php
/** 
 * Fortified Customizer data
 */

function fortified_customizer( $data ) {
	$fortified_elementor_template_list = fortified_get_elementor_templates();
	$fortified_elementor_header_templates = fortified_get_elementor_header_templates();
	return array(
		'panel' => array ( 
			'id' => 'fortified',
			'name' => esc_html__('Fortified Customizer','fortified'),
			'priority' => 10,
			'section' => array(
				'header_setting' => array(
					'name' => esc_html__( 'Header Topbar Setting', 'fortified' ),
					'priority' => 10,
					'fields' => array(
						array(
							'name' => esc_html__( 'Topbar Swicher', 'fortified' ),
							'id' => 'fortified_topbar_switch',
							'default' => false,
							'type' => 'switch',
							'transport'	=> 'refresh'
						),						
						array(
							'name' => esc_html__( 'Show Button', 'fortified' ),
							'id' => 'fortified_show_header_btn',
							'default' => 0,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Button Text', 'fortified' ),
							'id' => 'fortified_header_btn_text',
							'default' => esc_html__('Sign in','fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Button Link', 'fortified' ),
							'id' => 'fortified_header_btn_link',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),						
						array(
							'name' => esc_html__( 'Button Icon', 'fortified' ),
							'id' => 'fortified_header_btn_icon',
							'default' => esc_html__('fa fa-user-o', 'fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						/** investment button **/	
						array(
							'name' => esc_html__( 'Show Investment Offer Link', 'fortified' ),
							'id' => 'fortified_show_investment_offer_link',
							'default' => 0,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Link Text', 'fortified' ),
							'id' => 'fortified_header_link_text',
							'default' => esc_html__('Fortified Offer','fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Link Url', 'fortified' ),
							'id' => 'fortified_header_link_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						/** contact-info **/
						array(
							'name' => esc_html__( 'Show Contact Info', 'fortified' ),
							'id' => 'fortified_show_contact_info',
							'default' => 0,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Email Address', 'fortified' ),
							'id' => 'fortified_header_email',
							'default' => esc_html__('info@gmail.com','fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Phone Number', 'fortified' ),
							'id' => 'fortified_header_phone',
							'default' => esc_html__('+97657945737', 'fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						)

					) 
				),
				'fortified_topbar_social_profiles_setting' => array(
					'name' => esc_html__( 'Header Social Profiles', 'fortified' ),
					'priority' => 15,
					'fields' => array(
						array(
							'name' => esc_html__( 'Show Social Profiles', 'fortified' ),
							'id' => 'fortified_show_social_profiles',
							'default' => 0,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Facebook Url', 'fortified' ),
							'id' => 'fortified_topbar_fb_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Twitter Url', 'fortified' ),
							'id' => 'fortified_topbar_twitter_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Linkedin Url', 'fortified' ),
							'id' => 'fortified_topbar_linkedin_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Instagram Url', 'fortified' ),
							'id' => 'fortified_topbar_instagram_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
					) 
				),
				'header_main_setting' => array(
					'name' => esc_html__( 'Header Setting', 'fortified' ),
					'priority' => 20,
					'fields' => array(
						array(
							'name' => esc_html__( 'Choose Header Style', 'fortified' ),
							'id' => 'choose_default_header',
							'type'     => 'select',
							'choices'  => array(
								'header-style-1' => esc_html__( 'Header Style 1', 'fortified' ),
								'header-style-2' => esc_html__( 'Header Style 2', 'fortified' ),
							),
							'default' => 'header-style-2',
							'transport'	=> 'refresh'
						),
						array(
							'name' => esc_html__( 'Header Type', 'fortified' ),
							'id' => 'choose_default_header',
							'type'     => 'select',
							'choices'  => array(
								'default-header' => esc_html__( 'Default Header', 'fortified' ),
								'elementor-header' => esc_html__( 'Elementor Header', 'fortified' ),
							),
							'default' => 'default-header',
							'transport'	=> 'refresh'
						),
						array(
							'name' => esc_html__( 'Header Elementor Templates', 'fortified' ),
							'id' => 'choose_elementor_header',
							'type'     => 'select',
							'choices'  => $fortified_elementor_header_templates,
							'transport'	=> 'refresh',
							'required' => ['header_source_type',
							'=',
							'e'],
						),
						array(
							'name' => esc_html__( 'Header Logo', 'fortified' ),
							'id' => 'logo',
							'default' => get_template_directory_uri() . '/assets/img/logo/logo.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header Black Logo', 'fortified' ),
							'id' => 'seconday_logo',
							'default' => get_template_directory_uri() . '/assets/img/logo/logo-black.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header Retina Logo', 'fortified' ),
							'id' => 'retina_logo',
							'default' => get_template_directory_uri() . '/assets/img/logo/logo@2x.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header Retina Black Logo', 'fortified' ),
							'id' => 'retina_secondary_logo',
							'default' => get_template_directory_uri() . '/assets/img/logo/logo-black@2x.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Show Header Search', 'fortified' ),
							'id' => 'fortified_header_search_show',
							'default' => 1,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),	
					) 
				),	
				'banner_main_setting' => array(
					'name' => esc_html__( 'Sub Banner Setting', 'fortified' ),
					'priority' => 20,
					'fields' => array(
						
						array(
							'name' => esc_html__( 'Banner Image', 'fortified' ),
							'id' => 'sub-banner-img',
							'default' => get_template_directory_uri() . '/assets/img/sub-banner-img.jpg',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						
					) 
				),	
				'page_title_setting'=> array(
					'name'=> esc_html__('Page Title Setting','fortified'),
					'priority'=> 30,
					'fields'=> array(
						array(
							'name' => esc_html__( 'Choose Breadcrumb Style', 'fortified' ),
							'id' => 'choose_default_breadcrumb',
							'type'     => 'select',
							'choices'  => array(
								'breadcrumb-style-1' => esc_html__( 'Breadcrumb Style 1', 'fortified' ),
								'breadcrumb-style-2' => esc_html__( 'default', 'fortified' ),
							),
							'default' => 'breadcrumb-style-1',
							'transport'	=> 'refresh'
						),
						array(
							'name'=>esc_html__('Breadcrumb BG Color','fortified'),
							'id'=>'breadcrumb_bg_color',
							'default'=> esc_html__('#343a40','fortified'),
							'transport'	=> 'refresh'  
						),
						array(
							'name' => esc_html__( 'Page Title Background Image', 'fortified' ),
							'id' => 'breadcrumb_bg_img',
							'default' => '',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Breadcrumb Archive', 'fortified' ),
							'id' => 'breadcrumb_archive',
							'default' => esc_html__('Archive for category','fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Breadcrumb Search', 'fortified' ),
							'id' => 'breadcrumb_search',
							'default' => esc_html__('Search results for','fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Breadcrumb tagged', 'fortified' ),
							'id' => 'breadcrumb_post_tags',
							'default' => esc_html__('Posts tagged','fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),		
						array(
							'name' => esc_html__( 'Breadcrumb posted by', 'fortified' ),
							'id' => 'breadcrumb_artitle_post_by',
							'default' => esc_html__('Articles posted by','fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),		
						array(
							'name' => esc_html__( 'Breadcrumb Page Not Found', 'fortified' ),
							'id' => 'breadcrumb_404',
							'default' => esc_html__('Page Not Found','fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),		
						array(
							'name' => esc_html__( 'Breadcrumb Page', 'fortified' ),
							'id' => 'breadcrumb_page',
							'default' => esc_html__('Page','fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),			
						array(
							'name' => esc_html__( 'Breadcrumb Shop', 'fortified' ),
							'id' => 'breadcrumb_shop',
							'default' => esc_html__('Shop','fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),			
						array(
							'name' => esc_html__( 'Breadcrumb Home', 'fortified' ),
							'id' => 'breadcrumb_home',
							'default' => esc_html__('Home','fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),					
					)
				),
				'blog_setting'=> array(
					'name'=> esc_html__('Blog Setting','fortified'),
					'priority'=> 40,
					'fields'=> array(
						array(
							'name' => esc_html__( 'Show Blog BTN', 'fortified' ),
							'id' => 'fortified_blog_btn_switch',
							'default' => 1,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),	
						array(
							'name' => esc_html__( 'Show Blog Btn Icon', 'fortified' ),
							'id' => 'fortified_blog_btn_icon_switch',
							'default' => 1,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Blog Button text', 'fortified' ),
							'id' => 'fortified_blog_btn',
							'default' => esc_html__('Read More','fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),							
						array(
							'name' => esc_html__( 'Blog Button Icon', 'fortified' ),
							'id' => 'fortified_blog_btn_icon',
							'default' => esc_html__('fas fa-angle-double-right','fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),						
						array(
							'name' => esc_html__( 'Blog Title', 'fortified' ),
							'id' => 'breadcrumb_blog_title',
							'default' => esc_html__('Blog','fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),						
						array(
							'name' => esc_html__( 'Blog Details Title', 'fortified' ),
							'id' => 'breadcrumb_blog_title_details',
							'default' => esc_html__('Blog Details','fortified'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),

					)
				),
				'fortified_footer_setting' => array(
					'name'=> esc_html__('Footer Setting','fortified'),
					'priority'=> 60,
					'fields'=> array(
						array(
							'name' => esc_html__( 'Footer Elementor Templates', 'fortified' ),
							'id' => 'choose_elementor_footer',
							'type'     => 'select',
							'choices'  => $fortified_elementor_template_list,
							'transport'	=> 'refresh',
							'required' => ['footer_source_type',
							'=',
							'e'],
						),
						array(
							'name' => esc_html__( 'Choose Footer Style', 'fortified' ),
							'id' => 'choose_default_footer',
							'type'     => 'select',
							'choices'  => array(
								'footer-style-1' => esc_html__( 'Footer Style 1', 'fortified' ),
								'footer-style-2' => esc_html__( 'Footer Style 2', 'fortified' ),
								'footer-style-3' => esc_html__( 'Footer Style 3', 'fortified' ),
							),
							'default' => 'footer-style-1',
							'transport'	=> 'refresh'
						),
						array(
							'name' => esc_html__( 'Footer Background Image', 'fortified' ),
							'id' => 'fortified_footer_bg',
							'default' => '',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name'=>esc_html__('Footer BG Color','fortified'),
							'id'=>'fortified_footer_bg_color',
							'default'=> esc_html__('#f4f9fc','fortified'),
							'transport'	=> 'refresh'  
						),
						array(
							'name'=>esc_html__('Copy Right','fortified'),
							'id'=>'fortified_copyright',
							'default'=> esc_html__('Copyright &copy; Fortified 2023. All rights reserved','fortified'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						),	
						array(
							'name'=>esc_html__('Enable Scrollup','fortified'),
							'id'=>'fortified_scrollup_switch',
							'default'=> false,
							'type'=>'switch',
							'transport'	=> 'refresh'  
						),						
						array(
							'name'=>esc_html__('Enable Footer Widgets','fortified'),
							'id'=>'fortified_enable_footer_widgets',
							'default'=> true,
							'type'=>'switch',
							'transport'	=> 'refresh'  
						),	
						array(
							'name'=>esc_html__('Enable Preloader','fortified'),
							'id'=>'fortified_preloader_switch',
							'default'=> false,
							'type'=>'switch',
							'transport'	=> 'refresh'  
						)
					)
				),
				'error_page_setting'=> array(
					'name'=> esc_html__('404 Setting','fortified'),
					'priority'=> 90,
					'fields'=> array(
						array(
							'name'=>esc_html__('400 Text','fortified'),
							'id'=>'fortified_error_404_text',
							'default'=> esc_html__('404','fortified'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						),
						array(
							'name'=>esc_html__('Not Found Title','fortified'),
							'id'=>'fortified_error_title',
							'default'=> esc_html__('Page not found','fortified'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						),
						array(
							'name'=>esc_html__('404 Description Text','fortified'),
							'id'=>'fortified_error_desc',
							'default'=> esc_html__('Oops! The page you are looking for does not exist. It might have been moved or deleted','fortified'),
							'type'=>'textarea',
							'transport'	=> 'refresh'  
						),
						array(
							'name'=>esc_html__('404 Link Text','fortified'),
							'id'=>'fortified_error_link_text',
							'default'=> esc_html__('Back To Home','fortified'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						)
						
					)
				),
			),
		)
	);

}

add_filter('fortified_customizer_data', 'fortified_customizer');


