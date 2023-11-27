<?php
/**
 * @package    arile-extra
 */

require arile_extra_plugin_dir . 'inc/designexo/customizer/extra-designexo-customizer.php';
require arile_extra_plugin_dir . 'inc/designexo/customizer/extra-designexo-customizer-options.php';
require arile_extra_plugin_dir . 'inc/designexo/customizer/extra-designexo-customizer-default.php';
$activate_theme_data = wp_get_theme(); // getting current theme data
$activate_theme = $activate_theme_data->name;
if ( ! function_exists( 'arileextra_designexo_frontpage_sections' ) ) :
	function arileextra_designexo_frontpage_sections() {	
		require arile_extra_plugin_dir . 'inc/designexo/front-page/extra-designexo-slider.php';
		if ( 'Architect Decor' != $activate_theme || 'IntecoPress' != $activate_theme || 'Monster Dark' != $activate_theme || 'NewsMedia' != $activate_theme || 'SpiceMag' != $activate_theme || 'DesignTech' != $activate_theme || 'Atlanta Blog' != $activate_theme){
			require arile_extra_plugin_dir . 'inc/designexo/front-page/extra-designexo-theme-info.php';
		}	
		require arile_extra_plugin_dir . 'inc/designexo/front-page/extra-designexo-service.php';
		require arile_extra_plugin_dir . 'inc/designexo/front-page/extra-designexo-project.php';
		require arile_extra_plugin_dir . 'inc/designexo/front-page/extra-designexo-testimonial.php';	
		require arile_extra_plugin_dir . 'inc/designexo/front-page/extra-designexo-blog.php';
    }
	add_action( 'arileextra_designexo_frontpage', 'arileextra_designexo_frontpage_sections' );
endif;

if ( ! function_exists( 'arileextra_newsmedia_blog_sections' ) ) :
	function arileextra_newsmedia_blog_sections() {
		
		$activate_theme_data = wp_get_theme(); // getting current theme data
        $activate_theme = $activate_theme_data->name;
		
		if('NewsMedia' == $activate_theme || 'SpiceMag' == $activate_theme){
		require arile_extra_plugin_dir . 'inc/designexo/front-page/extra-designexo-slider.php';
		}
    }
	add_action( 'arileextra_newsmedia_blogpage', 'arileextra_newsmedia_blog_sections' );
endif;