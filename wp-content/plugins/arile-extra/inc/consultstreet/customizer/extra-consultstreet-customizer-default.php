<?php
/**
 *
 * @package arile-extra
 */	

/* Top header content  */
if ( ! function_exists( 'consultstreet_theme_top_header_default_content' ) ) :		
    function consultstreet_theme_top_header_default_content( $wp_customize ){
			$consultstreet_theme_top_header_content_control = $wp_customize->get_setting( 'consultstreet_top_header_info_content' );
				if ( ! empty( $consultstreet_theme_top_header_content_control ) ) {
					$consultstreet_theme_top_header_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-clock-o',
						'text'       => esc_html__( 'Mon - Sat 8.00 - 18.00. Sunday CLOSED', 'consultstreet' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b37',
						),
						array(
						'icon_value' => 'fa fa-phone',
						'text'       => '+14 1-800-1234-567',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b47',
						),
						array(
						'icon_value' => 'fa fa-envelope-o',
						'text'       => esc_html__( 'info@consultstreet.com', 'consultstreet' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b57',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'consultstreet_theme_top_header_default_content' );
endif; 

/* Top header social icons  */
if ( ! function_exists( 'consultstreet_theme_header_social_default_content' ) ) :		
    function consultstreet_theme_header_social_default_content( $wp_customize ){
			$consultstreet_theme_top_header_social_content_control = $wp_customize->get_setting( 'consultstreet_top_header_social_content' );
				if ( ! empty( $consultstreet_theme_top_header_social_content_control ) ) {
					$consultstreet_theme_top_header_social_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-facebook',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b37',
						),
						array(
						'icon_value' => 'fa fa-twitter',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b47',
						),
						array(
						'icon_value' => 'fa fa-google-plus',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b57',
						),
						array(
						'icon_value' => 'fa fa-linkedin',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b57',
						),
						
					) );

				}
	    }
add_action( 'customize_register', 'consultstreet_theme_header_social_default_content' );
endif;

if ( ! function_exists( 'arileextra_consultstreet_main_slider_default_content' ) ) :
		/* Main slider content  */
		function arileextra_consultstreet_main_slider_default_content( $wp_customize ){
			
			$activate_theme_data = wp_get_theme(); // getting current theme data
			$activate_theme = $activate_theme_data->name;
			
				if('ConsultStreet' == $activate_theme || 'AssentPress' == $activate_theme || $activate_theme == 'MadisonBlog'){
					$image1_slide = 1;
					$image2_slide = 2;
					$slider1_title = 'Provide Quality Consulting Services';
					$slider2_title = 'Best Choice for Your Business';
				}
				if('BrightPress' == $activate_theme){
					$image1_slide = 3;
					$image2_slide = 2;
					$slider1_title = 'Provide Quality <span>Consulting Services</span>';
					$slider2_title = 'Best Choice for <span>Your Business</span>';
				}
				if('FitnessBase' == $activate_theme){
					$image1_slide = 5;
					$image2_slide = 6;
				    $slider1_title = 'Build Your <span>Body Strong</span>';
					$slider2_title = 'Challenge <span>Your Limits</span>';	
				} 
				if('Beauty Spa Salon' == $activate_theme){
					$image1_slide = 7;
					$image2_slide = 8;
					$slider1_title = 'Get a Amazing & Awesome Beauty';
					$slider2_title = 'Skin Facials, Waxing, Nails Care ';	
				} 
			    if('Decorexo' == $activate_theme){
					$image1_slide = 9;
					$image2_slide = 10;
					$slider1_title = 'Design Can Change The World';
					$slider2_title = 'Great Experience For Interior Design';	
				} 
				if('EnvoPress' == $activate_theme){
					$image1_slide = 11;
					$image2_slide = 12;
					$slider1_title = 'We ensure your <span>business</span> goal!';
					$slider2_title = 'We will build <span>your own</span> business';	
				} 
				if('Arvada' == $activate_theme){
					$image1_slide = 13;
					$image2_slide = 14;
					$slider1_title = "Create Your World's <span>Best Business</span> Website";
					$slider2_title = 'We will build <span>your own</span> business';	
				} 
				if('EarnPress' == $activate_theme){
					$image1_slide = 15;
					$image2_slide = 16;
					$slider1_title = "Business planning strategy and execution";
					$slider2_title = 'The purpose of business is to create and keep a customer';	
				} 
				
				$consultstreet_main_slider_data = $wp_customize->get_setting( 'consultstreet_main_slider_content' );
					if ( ! empty( $consultstreet_main_slider_data ) ) {
	
					if('Decorexo' == $activate_theme){		
						$consultstreet_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( ''.$slider1_title.'', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-slide'.$image1_slide.'.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',
						),
						array(
						'title'      => esc_html__( ''.$slider2_title.'', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-slide'.$image2_slide.'.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
					}elseif('EnvoPress' == $activate_theme || 'Arvada' == $activate_theme){
						
					$consultstreet_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( ''.$slider1_title.'', 'arile-extra' ),
						'text'       => esc_html__( "We provide world class business services for our clients to grow their businesses, so don't waste your time, contact us and see the results instantly.", 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-slide'.$image1_slide.'.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',
						),
						array(
						'title'      => esc_html__( ''.$slider2_title.'', 'arile-extra' ),
						'text'       => esc_html__( "We provide world class business services for our clients to grow their businesses, so don't waste your time, contact us and see the results instantly.", 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-slide'.$image2_slide.'.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
						
						
					}	
					else{
						
					$consultstreet_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( ''.$slider1_title.'', 'arile-extra' ),
						'text'       => esc_html__( 'We provide world best consulting services for our clients to grow their businesses, so dont waste your time, contact us and see the results instantly.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-slide'.$image1_slide.'.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',
						),
						array(
						'title'      => esc_html__( ''.$slider2_title.'', 'arile-extra' ),
						'text'       => esc_html__( 'We provide world best consulting services for our clients to grow their businesses, so dont waste your time, contact us and see the results instantly.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-slide'.$image2_slide.'.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
						
						
					}
					
				}
		}
add_action( 'customize_register', 'arileextra_consultstreet_main_slider_default_content' );
endif;

/* Theme Info content  */
if ( ! function_exists( 'arileextra_consultstreet_theme_info_default_content' ) ) :		
    function arileextra_consultstreet_theme_info_default_content( $wp_customize ){
			$consultstreet_theme_info_content_control = $wp_customize->get_setting( 'consultstreet_theme_info_content' );
				if ( ! empty( $consultstreet_theme_info_content_control ) ) {
					
				$activate_theme_data = wp_get_theme(); // getting current theme data
			    $activate_theme = $activate_theme_data->name;
					
				if('Decorexo' == $activate_theme){
					$consultstreet_theme_info_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-user-o',
						'title'      => esc_html__( 'Expert Instruction', 'arile-extra' ),
						'text'       => esc_html__( 'Find the right instructor for you', 'arile-extra' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b21',
						),
						array(
						'icon_value' => 'fa fa-home',
						'title'      => esc_html__( 'Interior Solutions', 'arile-extra' ),
						'text'       => 'Our unique offer',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b22',
						),
						array(
						'icon_value' => 'fa fa-trophy',
						'title'      => esc_html__( 'Well Experienced', 'arile-extra' ),
						'text'       => esc_html__( '25 years of experience', 'arile-extra' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b23',
						),
						
					) );
				}else{
					
					$consultstreet_theme_info_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-user-o',
						'title'      => esc_html__( 'Expert Instruction', 'arile-extra' ),
						'text'       => esc_html__( 'Find the right instructor for you', 'arile-extra' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b21',
						),
						array(
						'icon_value' => 'fa fa-headphones',
						'title'      => esc_html__( 'Premium Support', 'arile-extra' ),
						'text'       => '014 1547 925 - 123 4567 890',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b22',
						),
						array(
						'icon_value' => 'fa fa-trophy',
						'title'      => esc_html__( 'Well Experienced', 'arile-extra' ),
						'text'       => esc_html__( '25 years of experience', 'arile-extra' ),
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b23',
						),
						
					) );
					
				}

				}
	    }
add_action( 'customize_register', 'arileextra_consultstreet_theme_info_default_content' );
endif;


/* Service content  */
if ( ! function_exists( 'arileextra_consultstreet_service_default_content' ) ) :		
    function arileextra_consultstreet_service_default_content( $wp_customize ){
		
			$activate_theme_data = wp_get_theme(); // getting current theme data
			$activate_theme = $activate_theme_data->name;
		
				if('ConsultStreet' == $activate_theme || 'AssentPress' == $activate_theme || 'EarnPress' == $activate_theme || $activate_theme == 'MadisonBlog'){
					$service1_icon = 'fa-usd';
					$service2_icon = 'fa-clone';
					$service3_icon = 'fa-bar-chart';
					$service1_title = 'Corporate Finance';
					$service2_title = 'Consulting Service';
					$service3_title = 'Market Analysis';
					$choice = 'icon';
				}
				if('BrightPress' == $activate_theme){
					$service1_icon = 'fa-usd';
					$service2_icon = 'fa-clone';
					$service3_icon = 'fa-bar-chart';
					$service1_title = 'Corporate Finance';
					$service2_title = 'Consulting Service';
					$service3_title = 'Market Analysis';
					$choice = 'icon';
				}
				if('FitnessBase' == $activate_theme){
					$service1_icon = 'fa-hand-grab-o';
					$service2_icon = 'fa-clock-o';
					$service3_icon = 'fa-sheqel';
					$service1_title = 'No Long-Term Contract';
					$service2_title = 'Exercise Round the Clock';
					$service3_title = 'Best Equipment';	
					$choice = 'image';
				} 
				if('Beauty Spa Salon' == $activate_theme){
					$service1_icon = 'fa-usd';
					$service2_icon = 'fa-clone';
					$service3_icon = 'fa-bar-chart';
					$service1_title = 'Skin Spa Care';
					$service2_title = 'Nails Care';
					$service3_title = 'Massage Therapy';
                    $choice = 'image';					
				} 
				if('Decorexo' == $activate_theme){
					$service1_icon = 'fa-usd';
					$service2_icon = 'fa-clone';
					$service3_icon = 'fa-bar-chart';
					$service1_title = 'Interior Design';
					$service2_title = 'Architectural Design';
					$service3_title = 'Lighting Design';
                    $choice = 'image';					
				} 
				if('EnvoPress' == $activate_theme){
					$service1_icon = 'fa-money';
					$service2_icon = 'fa-suitcase';
					$service3_icon = 'fa-globe';
					$service1_title = 'Business Planning';
					$service2_title = 'Corporate Finance';
					$service3_title = 'SEO Optimization';
                    $choice = 'icon';					
				} 
				if('Arvada' == $activate_theme){
					$service1_icon = 'fa-money';
					$service2_icon = 'fa-users';
					$service3_icon = 'fa-globe';
					$service1_title = 'Business Planning';
					$service2_title = 'Satisfied Clients';
					$service3_title = 'SEO Optimization';
                    $choice = 'icon';					
				} 
		
			$consultstreet_service_data = $wp_customize->get_setting( 'consultstreet_service_content' );
				if ( ! empty( $consultstreet_service_data ) ) {
					
				if('Beauty Spa Salon' == $activate_theme){	
					
					$consultstreet_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa '.$service1_icon.'',
						'title'      => esc_html__( ''.$service1_title.'', 'arile-extra' ),
						'text'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.',
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-service4.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa '.$service2_icon.'',
						'title'      => esc_html__( ''.$service2_title.'', 'arile-extra' ),
						'text'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.',
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-service5.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa '.$service3_icon.'',
						'title'      => esc_html__( ''.$service3_title.'', 'arile-extra' ),
						'text'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.',
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-service6.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );
				}
				elseif('Decorexo' == $activate_theme){	
					
					$consultstreet_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa '.$service1_icon.'',
						'title'      => esc_html__( ''.$service1_title.'', 'arile-extra' ),
						'text'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.',
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-service3.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa '.$service2_icon.'',
						'title'      => esc_html__( ''.$service2_title.'', 'arile-extra' ),
						'text'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.',
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-service2.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa '.$service3_icon.'',
						'title'      => esc_html__( ''.$service3_title.'', 'arile-extra' ),
						'text'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.',
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-service1.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );
				}else{
					
					$consultstreet_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa '.$service1_icon.'',
						'title'      => esc_html__( ''.$service1_title.'', 'arile-extra' ),
						'text'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.',
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-service1.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa '.$service2_icon.'',
						'title'      => esc_html__( ''.$service2_title.'', 'arile-extra' ),
						'text'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.',
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-service2.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa '.$service3_icon.'',
						'title'      => esc_html__( ''.$service3_title.'', 'arile-extra' ),
						'text'       => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.',
						'choice'    => 'customizer_repeater_'.$choice.'',
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-service3.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );
					
				}
					

				}
	    }
add_action( 'customize_register', 'arileextra_consultstreet_service_default_content' );
endif;

/* Project content  */
if ( ! function_exists( 'arileextra_consultstreet_project_default_content' ) ) :		
	function arileextra_consultstreet_project_default_content( $wp_customize ){
		
		$activate_theme_data = wp_get_theme(); // getting current theme data
			$activate_theme = $activate_theme_data->name;
		
				if('ConsultStreet' == $activate_theme || 'AssentPress' == $activate_theme || 'EarnPress' == $activate_theme || $activate_theme == 'MadisonBlog'){
					$project1_image = '1';
					$project2_image = '2';
					$project3_image = '3';
					$project4_image = '4';
					$project1_title = 'Business Planning';
					$project2_title = 'Planning For The Future';
					$project3_title = 'Growth Expansion';
					$project4_title = 'Sales Forecasting';
				}
				if('BrightPress' == $activate_theme){	
					$project1_image = '1';
					$project2_image = '2';
					$project3_image = '3';
					$project4_image = '4';
					$project1_title = 'Business Planning';
					$project2_title = 'Planning For The Future';
					$project3_title = 'Growth Expansion';
					$project4_title = 'Sales Forecasting';
				}
				if('FitnessBase' == $activate_theme){	
					$project1_image = '5';
					$project2_image = '6';
					$project3_image = '7';
					$project4_image = '8';
					$project1_title = 'Aerobics';
					$project2_title = 'Yoga Pilates';
					$project3_title = 'Active Kids';
					$project4_title = 'Strength Exercises';
				} 
			    if('Beauty Spa Salon' == $activate_theme){	
					$project1_image = '9';
					$project2_image = '10';
					$project3_image = '11';
					$project4_image = '12';
				    $project1_title = 'Spa & Bathing';
					$project2_title = 'Facial Massage';
					$project3_title = 'Thermal Add On';
					$project4_title = 'Hair Colour Shades';
				} 
				if('Decorexo' == $activate_theme){	
					$project1_image = '13';
					$project2_image = '14';
					$project3_image = '15';
					$project4_image = '16';
				    $project1_title = 'Office Decoration';
					$project2_title = 'Bedroom Lighting Décor';
					$project3_title = 'Exterior Renovation';
					$project4_title = 'Architecture Design';
				}
				if('EnvoPress' == $activate_theme || 'Arvada' == $activate_theme){	
					$project1_image = '17';
					$project2_image = '18';
					$project3_image = '19';
					$project4_image = '20';
				    $project1_title = 'Business Resource';
					$project2_title = 'Business Consulting';
					$project3_title = 'Business Advisor';
					$project4_title = 'Digital Marketing';
				}

			$consultstreet_project_data = $wp_customize->get_setting( 'consultstreet_project_content' );
			    if ( ! empty( $consultstreet_project_data ) ) 
				{ 

				if('Decorexo' == $activate_theme){	
					
				$consultstreet_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project1_image.'.jpg',
						'title'      => __(''.$project1_title.'','arile-extra'),
						'text'       => __('','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project2_image.'.jpg',
						'title'      => __(''.$project2_title.'','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project3_image.'.jpg',
						'title'      => __(''.$project3_title.'','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project4_image.'.jpg',
						'title'      => __(''.$project4_title.'','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				} elseif('EnvoPress' == $activate_theme || 'Arvada' == $activate_theme){	
					
				$consultstreet_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project1_image.'.jpg',
						'title'      => __(''.$project1_title.'','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet.','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project2_image.'.jpg',
						'title'      => __(''.$project2_title.'','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet.','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project3_image.'.jpg',
						'title'      => __(''.$project3_title.'','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet.','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project4_image.'.jpg',
						'title'      => __(''.$project4_title.'','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet.','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
				else{
				
				$consultstreet_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project1_image.'.jpg',
						'title'      => __(''.$project1_title.'','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project2_image.'.jpg',
						'title'      => __(''.$project2_title.'','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project3_image.'.jpg',
						'title'      => __(''.$project3_title.'','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-project'.$project4_image.'.jpg',
						'title'      => __(''.$project4_title.'','arile-extra'),
						'text'       => __('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
			}
        }
add_action( 'customize_register', 'arileextra_consultstreet_project_default_content' );
endif;

/* Testimonial content  */
if ( ! function_exists( 'arileextra_consultstreet_testimonial_default_content' ) ) :		
	function arileextra_consultstreet_testimonial_default_content( $wp_customize ){
				$consultstreet_testimonial_data = $wp_customize->get_setting( 'consultstreet_testimonial_content' );
				if ( ! empty( $consultstreet_testimonial_data ) ) 
				{			
				$activate_theme_data = wp_get_theme(); // getting current theme data
				$activate_theme = $activate_theme_data->name;
				if('ConsultStreet' == $activate_theme || 'AssentPress' == $activate_theme || 'Beauty Spa Salon' == $activate_theme || 'Decorexo' == $activate_theme || $activate_theme == 'MadisonBlog'){
					$consultstreet_testimonial_data->default = json_encode( array(
						array(
						'title'      => 'Olivia Kevinson',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-user1.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),				
					) );
                }					
				if('BrightPress' == $activate_theme || 'FitnessBase' == $activate_theme || 'EnvoPress' == $activate_theme || 'Arvada' == $activate_theme || 'EarnPress' == $activate_theme){
					$consultstreet_testimonial_data->default = json_encode( array(
						array(
						'title'      => 'Olivia Kevinson',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-user1.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'title'      => 'Mitchell Harris',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-user2.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'title'      => 'Julia Cloe',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/consultstreet/images/theme-user3.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b33',
						),
					) );
				}
				}
        }
add_action( 'customize_register', 'arileextra_consultstreet_testimonial_default_content' );
endif;