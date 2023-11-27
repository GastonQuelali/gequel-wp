<?php
$designexo_main_slider_options = get_theme_mod('designexo_main_slider_content');
$designexo_main_slider_disabled = get_theme_mod('designexo_main_slider_disabled', true);
$designexo_main_slider_overlay_disable = get_theme_mod('designexo_main_slider_overlay_disable', true);
$activate_theme_data = wp_get_theme(); // getting current theme data
$activate_theme = $activate_theme_data->name;
if( $designexo_main_slider_disabled == true ): ?>
<section class="theme-main-slider <?php if('Interior Dark' == $activate_theme || 'Interior Decor' == $activate_theme){ echo 'vrsn-three'; } ?>" id="theme-slider">
    <div id="theme-main-slider" class="owl-carousel owl-theme">
		<?php 
			$designexo_main_slider_options = json_decode($designexo_main_slider_options);
			if( $designexo_main_slider_options!='' )
				{
					foreach($designexo_main_slider_options as $slide_iteam){	
						$title = ! empty( $slide_iteam->title ) ? $slide_iteam->title : '';
						$subtitle = ! empty( $slide_iteam->subtitle ) ? $slide_iteam->subtitle : '';
						$img_description = ! empty( $slide_iteam->text ) ? $slide_iteam->text : '';
						$readmorelink = ! empty( $slide_iteam->link ) ? $slide_iteam->link : '';	
						$readmore_button = ! empty( $slide_iteam->button_text ) ? $slide_iteam->button_text : '';
						$open_new_tab = $slide_iteam->open_new_tab;
						
			if($slide_iteam->image_url!=''){ ?>			
			<div class="item" style="background-image:url(<?php echo $slide_iteam->image_url; ?>);">
			<?php } ?>
			<?php if($title != '' || $img_description!= '' || $readmore_button!=''){ ?>
				<div class="container theme-slider-content">
					<div class="theme-text-<?php if('Designexo' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme || 'Interior Dark' == $activate_theme || 'Interior Decor' == $activate_theme || 'Interior House' == $activate_theme || 'BeautyCare' == $activate_theme || 'Architect House' == $activate_theme){ echo 'left'; } ?><?php if('Empresa' == $activate_theme || 'InteriorWP' == $activate_theme || 'Architects' == $activate_theme || 'Monster Dark' == $activate_theme || 'NewsMedia' == $activate_theme || 'SpiceMag' == $activate_theme || 'DesignTech' == $activate_theme || 'InteriorX' == $activate_theme || 'Technoex' == $activate_theme || 'Atlanta Blog' == $activate_theme){ echo 'center'; } ?> theme-caption-bg<?php if('Empresa' == $activate_theme || 'Architects' == $activate_theme || 'SpiceMag' == $activate_theme || 'InteriorX' == $activate_theme || 'Technoex' == $activate_theme || 'Interior House' == $activate_theme || 'Architect House' == $activate_theme){ echo '2'; } ?> <?php if('InteriorWP' == $activate_theme || 'Monster Dark' == $activate_theme || 'NewsMedia' == $activate_theme || 'DesignTech' == $activate_theme || 'Atlanta Blog' == $activate_theme){ echo 'align-center';} ?>">
					<?php if($subtitle != ''){ ?>
						<h5 class="sub-title"><?php echo $subtitle; ?></h5>
				    <?php } ?>
					<?php if($title != ''){ ?>
						<h1 class="title-large"><?php echo wp_kses_post( html_entity_decode( $title ) ); ?></h1>
				    <?php } ?>
					<?php if($img_description!= ''){ ?>
						<p class="description"><?php echo wp_kses_post( html_entity_decode( $img_description ) ); ?></p>
					<?php } ?>
					<?php if($readmore_button!='' ) { ?>
						<div class="mt-4 pt-2">
							<a href="<?php echo $readmorelink ;?>" <?php if($open_new_tab== 'yes' || $open_new_tab== '1') { echo "target='_blank'"; } ?> class="btn-small btn-slider"><?php echo esc_html($readmore_button) ?></a>
						</div>
                    <?php } ?>						
					</div>
				</div>
			<?php } ?>
			<?php if($designexo_main_slider_overlay_disable == true) { ?>
			<div class="overlay"></div>
			<?php } ?>
			<?php if($slide_iteam->image_url!=''){ ?>			
			</div>
			<?php } ?>			
			<?php							
				}	
		    }
	        else { 
			
			?>
			
			<?php if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme){ ?>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide<?php if('Architect Decor' == $activate_theme){echo '5';}else{echo '1';}?>.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-<?php if('Designexo' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme){ echo 'left';}else{ echo 'center'; }?> theme-caption-bg <?php if('InteriorWP' == $activate_theme){ echo 'align-center';} ?>">
					    <h5 class="sub-title"><?php esc_html_e('Interior Design','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Great Creative Designs','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide<?php if('Architect Decor' == $activate_theme){echo '6';}else{echo '2';}?>.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-<?php if('Designexo' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme){ echo 'left';}else{ echo 'center'; }?> theme-caption-bg <?php if('InteriorWP' == $activate_theme){ echo 'align-center';} ?>">
					    <h5 class="sub-title"><?php esc_html_e('Enjoy Your Space','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Living Area Redesign','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<?php } ?>	
			<?php if('Empresa' == $activate_theme){ ?>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide3.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg2">
					    <h5 class="sub-title"><?php esc_html_e('What we think, we become','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('May your choices reflect your hopes, not your fears','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide4.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg2">
					    <h5 class="sub-title"><?php esc_html_e('I don’t trust words. I trust pictures','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Photography is the story I fail to put into words','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
		    <?php } ?>	
			
			<?php if('Architects' == $activate_theme){ ?>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide7.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg2">
					    <h5 class="sub-title"><?php esc_html_e('BEST ARCHITECTURAL DESIGN','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('WE DESIGN YOUR SPACE WITH COMFORT','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide8.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg2">
					    <h5 class="sub-title"><?php esc_html_e('Enjoy Your Space','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('COMFORT. STYLE. PERFECT','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
		    <?php } ?>

			<?php if('IntecoPress' == $activate_theme){ ?>

            <div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide9.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left theme-caption-bg">
					    <h5 class="sub-title"><?php esc_html_e('Interior Design','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Home Interior Desgins','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide10.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left theme-caption-bg">
					    <h5 class="sub-title"><?php esc_html_e('Home Decoration','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Trendy Living Room Design','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
		    <?php } ?>	


			<?php if('Monster Dark' == $activate_theme){ ?>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide11.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg align-center">
					    <h5 class="sub-title"><?php esc_html_e('Create. Work. Inspire.','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Always Deliver More Than Expected','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et malesuada fames ipsum.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide3.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg align-center">
					    <h5 class="sub-title"><?php esc_html_e('Design Agency','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('We make creative solutions','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et malesuada fames ipsum.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
		    <?php } ?>	
			
			<?php if('DesignTech' == $activate_theme){ ?>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide18.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg align-center">
					    <h5 class="sub-title"><?php esc_html_e('Create. Work. Inspire.','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('High Expectations Are The Key To Everything','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et malesuada fames ipsum.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide19.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg align-center">
					    <h5 class="sub-title"><?php esc_html_e('Design Agency','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('We make creative solutions','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et malesuada fames ipsum.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
		    <?php } ?>	

			<?php if('NewsMedia' == $activate_theme || 'Atlanta Blog' == $activate_theme){ ?>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide13.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg align-center">
					    <h5 class="sub-title"><?php esc_html_e('Photographer, Blogger','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Photography Adventures','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et malesuada fames ipsum.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('READ MORE','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide12.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg align-center">
					    <h5 class="sub-title"><?php esc_html_e('Travel Destination','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Explore the Northwest','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et malesuada fames ipsum.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('READ MORE','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
		    <?php } ?>	

			<?php if('Interior Dark' == $activate_theme){ ?>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide14.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left theme-caption-bg">
					    <h5 class="sub-title"><?php esc_html_e('PERFECT QUALITY Services','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Stylish Design','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide15.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left theme-caption-bg">
					    <h5 class="sub-title"><?php esc_html_e('build your dream home','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Innovative Designs','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<?php } ?>
			
		<?php if('SpiceMag' == $activate_theme){ ?>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide16.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg2 align-center">
					    <h5 class="sub-title"><?php esc_html_e('Travels Guidance','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Adventurous Experiences','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Read More','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide17.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg2 align-center">
					    <h5 class="sub-title"><?php esc_html_e('Miami Tours','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Best Vacations in Miami','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos suspendisse potenti interdum et.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Read More','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
		    <?php } ?>

		<?php if('InteriorX' == $activate_theme){ ?>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide20.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg2 align-center">
					    <h5 class="sub-title"><?php esc_html_e('Interior Design','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Innovate Your Home','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Read More','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide21.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg2 align-center">
					    <h5 class="sub-title"><?php esc_html_e('Enjoy Your Space','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('build your dream house','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Read More','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
		    <?php } ?>		

			<?php if('Technoex' == $activate_theme){ ?>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide22.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg2">
					    <h5 class="sub-title"><?php esc_html_e('What we think, we become','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Great companies are built on great products.','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide4.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-center theme-caption-bg2">
					    <h5 class="sub-title"><?php esc_html_e('I don’t trust words. I trust pictures','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Photography is the story I fail to put into words','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum. Suspendisse potenti. Interdum et malesuada fames ac ante ipsum.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
		    <?php } ?>	

			<?php if('Interior Decor' == $activate_theme){ ?>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide23.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left theme-caption-bg">
					    <h5 class="sub-title"><?php esc_html_e('Interior Design','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Stylish Interior Design Solutions','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide24.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left theme-caption-bg">
					    <h5 class="sub-title"><?php esc_html_e('Enjoy Your Space','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Living Area Redesign','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<?php } ?>	

			<?php if('Interior House' == $activate_theme){ ?>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide25.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left theme-caption-bg2">
					    <h5 class="sub-title"><?php esc_html_e('Interior Design','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('DESIGN. STYLE. COMFORT','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Read More','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide2.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left theme-caption-bg2">
					    <h5 class="sub-title"><?php esc_html_e('Enjoy Your Space','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('GREAT CREATIVE DESIGNS','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Read More','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<?php } ?>	
			
			<?php if('BeautyCare' == $activate_theme){ ?>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide26.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left theme-caption-bg">
					    <h5 class="sub-title"><?php esc_html_e('The Essence of Natural Beauty','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Get Smooth and Glowing Skin','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('Beauty is an experience, nothing else. It is not a fixed pattern or an arrangement of features. It is something felt, a glow, or a communicated sense of fineness.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide27.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left theme-caption-bg">
					    <h5 class="sub-title"><?php esc_html_e('Simplicity is the Beauty of Life','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('Hair that Slays, Starts at the Salon','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('Beauty is an experience, nothing else. It is not a fixed pattern or an arrangement of features. It is something felt, a glow, or a communicated sense of fineness.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
		    <?php } ?>	
			
		<?php if('Architect House' == $activate_theme){ ?>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide28.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left theme-caption-bg2">
					    <h5 class="sub-title"><?php esc_html_e('ARCHITECTURE Firms','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('DESIGN. STYLE. COMFORT','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of architecture and interior design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Read More','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-slide29.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left theme-caption-bg2">
					    <h5 class="sub-title"><?php esc_html_e('Enjoy Your Space','arile-extra'); ?></h5>
						<h1 class="title-large"><?php esc_html_e('GREAT CREATIVE DESIGNS','arile-extra'); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of architecture and interior design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-slider"><?php esc_html_e('Read More','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($designexo_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<?php } ?>	
			
			
	    <?php } ?>	
		</div>		
</section>
<?php endif; ?>