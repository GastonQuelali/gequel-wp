<?php
/**
 *
 * @package arile-extra
 */	

if ( ! function_exists( 'arileextra_designexo_main_slider_default_content' ) ) :
		/* Main slider content  */
		function arileextra_designexo_main_slider_default_content( $wp_customize ){
			
			$activate_theme_data = wp_get_theme(); // getting current theme data
            $activate_theme = $activate_theme_data->name;
			
					$designexo_main_slider_data = $wp_customize->get_setting( 'designexo_main_slider_content' );
						if ( ! empty( $designexo_main_slider_data ) ) {
							
				if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Great Creative Designs', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Interior Design', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide1.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'Living Area Redesign', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Enjoy Your Space', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide2.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
				
				if('Architect Decor' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Great Creative Designs', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Interior Design', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide5.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'Living Area Redesign', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Enjoy Your Space', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide6.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}

				if('Empresa' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'May your choices reflect your hopes, not your fears', 'arile-extra' ),
						'subtitle'       => esc_html__( 'What we think, we become', 'arile-extra' ),
						'text'       => esc_html__( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide3.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'Photography is the story I fail to put into words', 'arile-extra' ),
						'subtitle'       => esc_html__( 'I don’t trust words. I trust pictures', 'arile-extra' ),
						'text'       => esc_html__( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide4.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}

                if('Architects' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'WE DESIGN YOUR SPACE WITH COMFORT', 'arile-extra' ),
						'subtitle'       => esc_html__( 'BEST ARCHITECTURAL DESIGN', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide7.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'COMFORT. STYLE. PERFECT', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Enjoy Your Space', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide8.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
				if('IntecoPress' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Home Interior Desgins', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Interior Design', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide9.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'Trendy Living Room Design', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Home Decoration', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide10.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
				if('Monster Dark' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Always Deliver More Than Expected', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Create. Work. Inspire.', 'arile-extra' ),
						'text'       => esc_html__( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et malesuada fames ipsum.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide11.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'We make creative solutions', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Design Agency', 'arile-extra' ),
						'text'       => esc_html__( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et malesuada fames ipsum.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide3.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
				
				if('DesignTech' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'High Expectations Are The Key To Everything', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Create. Work. Inspire.', 'arile-extra' ),
						'text'       => esc_html__( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et malesuada fames ipsum.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide18.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'We make creative solutions', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Design Agency', 'arile-extra' ),
						'text'       => esc_html__( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et malesuada fames ipsum.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide19.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
				
				if('NewsMedia' == $activate_theme || 'Atlanta Blog' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Photography Adventures', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Photographer, Blogger', 'arile-extra' ),
						'text'       => esc_html__( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et malesuada fames ipsum.', 'arile-extra' ),
						'button_text'      => __('READ MORE','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide13.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						array(
						'title'      => esc_html__( 'Explore the Northwest', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Travel Destination', 'arile-extra' ),
						'text'       => esc_html__( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et malesuada fames ipsum.', 'arile-extra' ),
						'button_text'      => __('READ MORE','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide12.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						
					) );
				}
				
				if('Interior Dark' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Stylish Design', 'arile-extra' ),
						'subtitle'       => esc_html__( 'PERFECT QUALITY Services', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide14.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'Innovative Designs', 'arile-extra' ),
						'subtitle'       => esc_html__( 'build your dream home', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide15.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
				
				if('SpiceMag' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Adventurous Experiences', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Travels Guidance', 'arile-extra' ),
						'text'       => esc_html__( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et.', 'arile-extra' ),
						'button_text'      => __('Read More','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide16.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'Best Vacations in Miami', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Miami Tours', 'arile-extra' ),
						'text'       => esc_html__( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et.', 'arile-extra' ),
						'button_text'      => __('Read More','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide17.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
				
				if('InteriorX' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Innovate Your Home', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Interior Design', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Read More','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide20.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'build your dream house', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Enjoy Your Space', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Read More','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide21.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
				
				
				if('Technoex' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Great companies are built on great products.', 'arile-extra' ),
						'subtitle'       => esc_html__( 'What we think, we become', 'arile-extra' ),
						'text'       => esc_html__( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide22.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'Photography is the story I fail to put into words', 'arile-extra' ),
						'subtitle'       => esc_html__( 'I don’t trust words. I trust pictures', 'arile-extra' ),
						'text'       => esc_html__( 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide4.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
				
				if('Interior Decor' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Stylish Interior Design Solutions', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Interior Design', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide23.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'Living Area Redesign', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Enjoy Your Space', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide24.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
				
				if('Interior House' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'DESIGN. STYLE. COMFORT', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Interior Design', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide25.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'GREAT CREATIVE DESIGNS', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Enjoy Your Space', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide2.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
				
				if('Architect House' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'DESIGN. STYLE. COMFORT', 'arile-extra' ),
						'subtitle'       => esc_html__( 'ARCHITECTURE Firms', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of architecture and interior design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide28.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'GREAT CREATIVE DESIGNS', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Enjoy Your Space', 'arile-extra' ),
						'text'       => esc_html__( 'We provide all types of architecture and interior design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide29.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
				
				if('BeautyCare' == $activate_theme){
						$designexo_main_slider_data->default = json_encode( array(
						array(
						'title'      => esc_html__( 'Get Smooth and Glowing Skin', 'arile-extra' ),
						'subtitle'       => esc_html__( 'The Essence of Natural Beauty', 'arile-extra' ),
						'text'       => esc_html__( 'Beauty is an experience, nothing else. It is not a fixed pattern or an arrangement of features. It is something felt, a glow, or a communicated sense of fineness.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide26.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b10',				
						),
						array(
						'title'      => esc_html__( 'Hair that Slays, Starts at the Salon', 'arile-extra' ),
						'subtitle'       => esc_html__( 'Simplicity is the Beauty of Life', 'arile-extra' ),
						'text'       => esc_html__( 'Beauty is an experience, nothing else. It is not a fixed pattern or an arrangement of features. It is something felt, a glow, or a communicated sense of fineness.', 'arile-extra' ),
						'button_text'      => __('Check it out','arile-extra'),
						'link'       => '#',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-slide27.jpg',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b14',
						),
						
					) );
				}
 				
					
				}
		}
add_action( 'customize_register', 'arileextra_designexo_main_slider_default_content' );
endif;

/* Theme Info content  */
if ( ! function_exists( 'arileextra_designexo_theme_info_default_content' ) ) :		
    function arileextra_designexo_theme_info_default_content( $wp_customize ){
			$designexo_theme_info_content_control = $wp_customize->get_setting( 'designexo_theme_info_content' );
			
			$activate_theme_data = wp_get_theme(); // getting current theme data
            $activate_theme = $activate_theme_data->name;
			
				if ( ! empty( $designexo_theme_info_content_control ) ) {
					
				if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme || 'Interior Dark' == $activate_theme || 'InteriorX' == $activate_theme){
					$designexo_theme_info_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-star-o',
						'title'      => esc_html__( 'Award Winning Solutions', 'arile-extra' ),
						'text'       => esc_html__( 'Our unique offer', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b21',
						),
						array(
						'icon_value' => 'fa fa-calendar',
						'title'      => esc_html__( 'Exclusive 10 Years Warranty', 'arile-extra' ),
						'text'       => esc_html__( 'Whats included', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b22',
						),
						array(
						'icon_value' => 'fa fa-home',
						'title'      => esc_html__( 'Modern Interior Projects', 'arile-extra' ),
						'text'       => esc_html__( 'See our works', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b23',
						),
						array(
						'icon_value' => 'fa fa-pencil',
						'title'      => esc_html__( 'Get a personal estimate', 'arile-extra' ),
						'text'       => esc_html__( 'Contact us', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b26',
						),
					) );
				}
                if('Empresa' == $activate_theme || 'Technoex' == $activate_theme){
					$designexo_theme_info_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-trophy',
						'title'      => esc_html__( 'Award winning solutions', 'arile-extra' ),
						'text'       => esc_html__( 'Know more', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b21',
						),
						array(
						'icon_value' => 'fa fa-bitcoin',
						'title'      => esc_html__( 'Saving and strategy', 'arile-extra' ),
						'text'       => esc_html__( 'Know more', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b22',
						),
						array(
						'icon_value' => 'fa fa-bar-chart',
						'title'      => esc_html__( 'Online media marketing', 'arile-extra' ),
						'text'       => esc_html__( 'Know more', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b23',
						),
					) );
				}	

				if('Architects' == $activate_theme){
					$designexo_theme_info_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-star-o',
						'title'      => esc_html__( 'Award Winning Solutions', 'arile-extra' ),
						'text'       => esc_html__( 'Our unique offer', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b21',
						),
						array(
						'icon_value' => 'fa fa-calendar',
						'title'      => esc_html__( 'EXPERIENCED TEAM OF WORK', 'arile-extra' ),
						'text'       => esc_html__( 'Whats included', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b22',
						),
						array(
						'icon_value' => 'fa fa-home',
						'title'      => esc_html__( 'ARCHITECTURE PROJECT', 'arile-extra' ),
						'text'       => esc_html__( 'See our works', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b23',
						),
						array(
						'icon_value' => 'fa fa-pencil',
						'title'      => esc_html__( 'Get a personal estimate', 'arile-extra' ),
						'text'       => esc_html__( 'Contact us', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b26',
						),
					) );
				}

				if('Interior Decor' == $activate_theme){
					$designexo_theme_info_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-star-o',
						'title'      => esc_html__( 'Award Winning Solutions', 'arile-extra' ),
						'text'       => esc_html__( 'Our unique offer', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b21',
						),
						array(
						'icon_value' => 'fa fa-calendar',
						'title'      => esc_html__( 'Exclusive 10 Years Warranty', 'arile-extra' ),
						'text'       => esc_html__( 'Whats included', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b22',
						),
						array(
						'icon_value' => 'fa fa-home',
						'title'      => esc_html__( 'Modern Interior Projects', 'arile-extra' ),
						'text'       => esc_html__( 'See our works', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b23',
						),
					) );
				}	

				if('Interior House' == $activate_theme || 'Architect House' == $activate_theme){
					$designexo_theme_info_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-star-o',
						'title'      => esc_html__( 'Award Winning Solutions', 'arile-extra' ),
						'text'       => esc_html__( 'Our unique offer', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b21',
						),
						array(
						'icon_value' => 'fa fa-calendar',
						'title'      => esc_html__( 'Exclusive 10 Years Warranty', 'arile-extra' ),
						'text'       => esc_html__( 'Whats included', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b22',
						),
				        array(
						'icon_value' => 'fa fa-pencil',
						'title'      => esc_html__( 'Get a personal estimate', 'arile-extra' ),
						'text'       => esc_html__( 'Contact us', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b26',
						),
					) );
				}

		        if('BeautyCare' == $activate_theme){
					$designexo_theme_info_content_control->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-calendar',
						'title'      => esc_html__( 'Book an Appointment', 'arile-extra' ),
						'text'       => esc_html__( 'Know more', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b21',
						),
						array(
						'icon_value' => 'fa fa-clock-o',
						'title'      => esc_html__( 'Opening Hours', 'arile-extra' ),
						'text'       => esc_html__( 'Mon - Fri: 08.00 - 18.00', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b22',
						),
				        array(
						'icon_value' => 'fa fa-phone',
						'title'      => esc_html__( 'Call Us Now', 'arile-extra' ),
						'text'       => esc_html__( '805-678-1367', 'arile-extra' ),
						'id'         => 'customizer_repeater_56d7ea7f40b26',
						),
					) );
				}				
					

				}
	    }
add_action( 'customize_register', 'arileextra_designexo_theme_info_default_content' );
endif;


/* Service content  */
if ( ! function_exists( 'arileextra_designexo_service_default_content' ) ) :		
    function arileextra_designexo_service_default_content( $wp_customize ){
		
			$designexo_service_data = $wp_customize->get_setting( 'designexo_service_content' );
				if ( ! empty( $designexo_service_data ) ) {
					
			$activate_theme_data = wp_get_theme(); // getting current theme data
            $activate_theme = $activate_theme_data->name;
					
				if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme || 'Interior House' == $activate_theme){	
					
					$designexo_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa-laptop',
						'title'      => esc_html__( 'Interior Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service1.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa fa-opencart',
						'title'      => esc_html__( 'Architectural Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service2.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa fa-users',
						'title'      => esc_html__( 'Exterior Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service3.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );
					
				}

				if('Empresa' == $activate_theme || 'NewsMedia' == $activate_theme || 'SpiceMag' == $activate_theme || 'Technoex' == $activate_theme || 'Atlanta Blog' == $activate_theme){	
					
					$designexo_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa fa-file-text-o',
						'title'      => esc_html__( 'Great typography', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa fa-language',
						'title'      => esc_html__( 'Translations', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa fa-mobile',
						'title'      => esc_html__( 'Creative design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						array(
						'icon_value' => 'fa fa-globe',
						'title'      => esc_html__( 'SEO optimized', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b18',
						),
						array(
						'icon_value' => 'fa fa-trophy',
						'title'      => esc_html__( 'Premium quality', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b19',
						),
						array(
						'icon_value' => 'fa fa-cog',
						'title'      => esc_html__( 'Live customizer', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b20',
						),
						
					) );
					
				}
				
				if('Architects' == $activate_theme){	
					
					$designexo_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa-laptop',
						'title'      => esc_html__( 'Architectural Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-service5.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa fa-opencart',
						'title'      => esc_html__( 'Interior Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-service4.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa fa-users',
						'title'      => esc_html__( 'Exterior Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-service6.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );
					
				}
				
				if('IntecoPress' == $activate_theme){	
					
					$designexo_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa-laptop',
						'title'      => esc_html__( 'INTERIOR DESIGN', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service4.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa fa-opencart',
						'title'      => esc_html__( 'INTERIOR EXPERTISE', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service5.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa fa-users',
						'title'      => esc_html__( 'LIGHTING DESIGN', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service6.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );
					
				}
				
				if('Monster Dark' == $activate_theme || 'DesignTech' == $activate_theme){	
					
					$designexo_service_data->default = json_encode( array(

                        array(
						'icon_value' => 'fa fa-cog',
						'title'      => esc_html__( 'Live Customizer', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b20',
						),
						array(
						'icon_value' => 'fa fa-mobile',
						'title'      => esc_html__( 'Creative Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						array(
						'icon_value' => 'fa fa-trophy',
						'title'      => esc_html__( 'Premium Quality', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_icon',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b19',
						),
						
					) );
					
				}
				
				if('Interior Dark' == $activate_theme || 'InteriorX' == $activate_theme){	
					
					$designexo_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa-laptop',
						'title'      => esc_html__( 'Interior Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service1.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa fa-opencart',
						'title'      => esc_html__( 'Architectural Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service2.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa fa-users',
						'title'      => esc_html__( 'Exterior Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service3.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );
					
				}
				
			if('Interior Decor' == $activate_theme){	
					
					$designexo_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa-laptop',
						'title'      => esc_html__( 'Interior Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service1.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa fa-opencart',
						'title'      => esc_html__( 'FLOOR PLANNING', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service2.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa fa-users',
						'title'      => esc_html__( 'Exterior Design', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service3.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );
					
				}
				
				if('BeautyCare' == $activate_theme){	
					
					$designexo_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa-laptop',
						'title'      => esc_html__( 'Face Care', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service7.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa fa-opencart',
						'title'      => esc_html__( 'Perm & Straightening', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service8.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa fa-users',
						'title'      => esc_html__( 'Acne Treatments', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service9.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );
					
				}
				
				if('Architect House' == $activate_theme){	
					
					$designexo_service_data->default = json_encode( array(
						array(
						'icon_value' => 'fa-laptop',
						'title'      => esc_html__( 'ARCHITECT DESIGN', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service10.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b15',
						),
						array(
						'icon_value' => 'fa fa-opencart',
						'title'      => esc_html__( 'HOUSE DECOR', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service11.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b16',
						),
						array(
						'icon_value' => 'fa fa-users',
						'title'      => esc_html__( 'PROJECT PLANNING', 'arile-extra' ),
						'text'       => 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been standard dummy.',
						'choice'    => 'customizer_repeater_image',
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-service12.jpg',
						'link'       => '#',
						'open_new_tab' => 'no',
						'id'         => 'customizer_repeater_56d7ea7f40b17',
						),
						
					) );
					
				}
				
				
				}
	    }
add_action( 'customize_register', 'arileextra_designexo_service_default_content' );
endif;

/* Project content  */
if ( ! function_exists( 'arileextra_designexo_project_default_content' ) ) :		
	function arileextra_designexo_project_default_content( $wp_customize ){

					$designexo_project_data = $wp_customize->get_setting( 'designexo_project_content' );
					if ( ! empty( $designexo_project_data ) ) { 
					
			$activate_theme_data = wp_get_theme(); // getting current theme data
            $activate_theme = $activate_theme_data->name;
					
				if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme || 'Interior House' == $activate_theme){	
					$designexo_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project1.jpg',
						'title'      => __('BEDROOM LIGHTING DÉCOR','arile-extra'),
						'text'       => __('','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project2.jpg',
						'title'      => __('EXTERIOR RENOVATION','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project3.jpg',
						'title'      => __('ARCHITECTURE DESIGN','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project4.jpg',
						'title'      => __('MODULAR KITCHEN DESIGN','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
				if('Architect Decor' == $activate_theme){	
					$designexo_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project1.jpg',
						'title'      => __('BEDROOM LIGHTING DÉCOR','arile-extra'),
						'text'       => __('','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project2.jpg',
						'title'      => __('EXTERIOR RENOVATION','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project3.jpg',
						'title'      => __('ARCHITECTURE DESIGN','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),
						
					) );
				}
				if('Empresa' == $activate_theme || 'NewsMedia' == $activate_theme || 'SpiceMag' == $activate_theme || 'Technoex' == $activate_theme || 'Atlanta Blog' == $activate_theme){	
					$designexo_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project5.jpg',
						'title'      => __('Adventures','arile-extra'),
						'text'       => __('Mountain climbing','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project6.jpg',
						'title'      => __('Photography portfolio','arile-extra'),
						'text'       => __('Illustration','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project7.jpg',
						'title'      => __('Fashion store','arile-extra'),
						'text'       => __('Fashion photography','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project8.jpg',
						'title'      => __('Tour & travels','arile-extra'),
						'text'       => __('Entertainment','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
				
				if('Architects' == $activate_theme){	
					$designexo_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-project9.jpg',
						'title'      => __('EXTERIOR RENOVATION','arile-extra'),
						'text'       => __('','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-project10.jpg',
						'title'      => __('LIVING ROOM LIGHTING DÉCOR','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-project11.jpg',
						'title'      => __('ARCHITECTURE DESIGN','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/arilewp/images/theme-project12.jpg',
						'title'      => __('MODULAR KITCHEN DESIGN','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
				
				if('IntecoPress' == $activate_theme){	
					$designexo_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project9.jpg',
						'title'      => __('RESIDENTIAL DESIGN','arile-extra'),
						'text'       => __('','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project10.jpg',
						'title'      => __('COMMERCIAL DESIGN','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project11.jpg',
						'title'      => __('HOUSING PROJECT','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project12.jpg',
						'title'      => __('GLASS ART IN LONDON','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
				
			    if('Monster Dark' == $activate_theme || 'DesignTech' == $activate_theme){	
					$designexo_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project13.jpg',
						'title'      => __('Business Consulting','arile-extra'),
						'text'       => __('','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project14.jpg',
						'title'      => __('App Development','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project15.jpg',
						'title'      => __('Digital Marketing','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project7.jpg',
						'title'      => __('Fashion Store','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
				
				if('Interior Dark' == $activate_theme || 'InteriorX' == $activate_theme || 'Interior Decor' == $activate_theme){	
					$designexo_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project16.jpg',
						'title'      => __('Home Renovations','arile-extra'),
						'text'       => __('','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project17.jpg',
						'title'      => __('Modern Bedroom Design','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project18.jpg',
						'title'      => __('Perfect wooden kitchen','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project19.jpg',
						'title'      => __('Wall Decorations','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
					
				if('BeautyCare' == $activate_theme){	
					$designexo_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project20.jpg',
						'title'      => __('Skin Care','arile-extra'),
						'text'       => __('Beauty, Cosmetics','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project21.jpg',
						'title'      => __('Face Primer','arile-extra'),
						'text'       => __('Facial Treatment','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project22.jpg',
						'title'      => __('Haircuts & Styling','arile-extra'),
						'text'       => __('Color & Highlights','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project23.jpg',
						'title'      => __('Prenatal Massage','arile-extra'),
						'text'       => __('Massage Therapy','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
				
			if('Architect House' == $activate_theme){	
					$designexo_project_data->default = json_encode( array(
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project24.jpg',
						'title'      => __('ARCHITECTURER IDEAS','arile-extra'),
						'text'       => __('','arile-extra'),	
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project25.jpg',
						'title'      => __('RESIDENTIAL HOME DECOR','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project26.jpg',
						'title'      => __('HOME DECOR','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b71',
						),						
						array(
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-project27.jpg',
						'title'      => __('BUSINESS SPACE DÉCOR','arile-extra'),
						'text'       => __('','arile-extra'),
						'id'         => 'customizer_repeater_56d7ea7f40b32',
						),
						
					) );
				}
					
				}
        }
add_action( 'customize_register', 'arileextra_designexo_project_default_content' );
endif;

/* Testimonial content  */
if ( ! function_exists( 'arileextra_designexo_testimonial_default_content' ) ) :		
	function arileextra_designexo_testimonial_default_content( $wp_customize ){
				$designexo_testimonial_data = $wp_customize->get_setting( 'designexo_testimonial_content' );
			$activate_theme_data = wp_get_theme(); // getting current theme data
            $activate_theme = $activate_theme_data->name;
				if ( ! empty( $designexo_testimonial_data ) ) 
				{	
                if('BeautyCare' == $activate_theme){			
					$designexo_testimonial_data->default = json_encode( array(
						array(
						'title'      => 'Olivia Kevinson',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-user1.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'title'      => 'Anna Parker',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Financer','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-user5.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'title'      => 'Julia Cloe',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Sales Manager','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-user3.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b33',
						),
					) );
				}else{
					$designexo_testimonial_data->default = json_encode( array(
						array(
						'title'      => 'Olivia Kevinson',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Founder','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-user1.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'title'      => 'Mitchell Harris',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Financer','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-user2.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b31',
						),
						array(
						'title'      => 'Julia Cloe',
						'text'       => '"You guys are legendary! You guys are great and having amazing support & service. I couldn’t ask for any better. Thank you!"',
						'designation' => __('Sales Manager','arile-extra'),
						'image_url'  => arile_extra_plugin_url .'/inc/designexo/images/theme-user3.jpg',
						'id'         => 'customizer_repeater_56d7ea7f40b33',
						),
					) );
					
				}
			}
        }
add_action( 'customize_register', 'arileextra_designexo_testimonial_default_content' );
endif;