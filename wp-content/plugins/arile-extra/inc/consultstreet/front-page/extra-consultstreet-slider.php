<?php
$consultstreet_main_slider_options = get_theme_mod('consultstreet_main_slider_content');
$consultstreet_main_slider_disabled = get_theme_mod('consultstreet_main_slider_disabled', true);
$consultstreet_main_slider_overlay_disable = get_theme_mod('consultstreet_main_slider_overlay_disable', true);
if( $consultstreet_main_slider_disabled == true ): ?>
<section class="theme-main-slider <?php if('EnvoPress' == $activate_theme || 'Arvada' == $activate_theme){echo 'vrsn-two';}?>" id="theme-slider">
    <div id="theme-main-slider" class="owl-carousel owl-theme">
		<?php 
			$consultstreet_main_slider_options = json_decode($consultstreet_main_slider_options);
			if( $consultstreet_main_slider_options!='' )
				{
					foreach($consultstreet_main_slider_options as $slide_iteam){	
						$title = ! empty( $slide_iteam->title ) ? $slide_iteam->title : '';
						$img_description = ! empty( $slide_iteam->text ) ? $slide_iteam->text : '';
						$readmorelink = ! empty( $slide_iteam->link ) ? $slide_iteam->link : '';	
						$readmore_button = ! empty( $slide_iteam->button_text ) ? $slide_iteam->button_text : '';
						$open_new_tab = $slide_iteam->open_new_tab;
						
			if($slide_iteam->image_url!=''){ ?>			
			<div class="item" style="background-image:url(<?php echo $slide_iteam->image_url; ?>);">
			<?php } ?>
			<?php if($title != '' || $img_description!= '' || $readmore_button!=''){ ?>
				<div class="container theme-slider-content">
					<div class="<?php if('EarnPress' == $activate_theme){ echo 'theme-text-center align-center';}else{echo 'theme-text-left';};?>">
					<?php if($title != ''){ ?>
						<h1 class="title-large"><?php echo wp_kses_post( html_entity_decode( $title ) ); ?></h1>
				    <?php } ?>
					<?php if($img_description!= ''){ ?>
						<p class="description"><?php echo wp_kses_post( html_entity_decode( $img_description ) ); ?></p>
					<?php } ?>
					<?php if($readmore_button!='' ) { ?>
						<div class="mt-4 pt-2">
							<a href="<?php echo $readmorelink ;?>" <?php if($open_new_tab== 'yes' || $open_new_tab== '1') { echo "target='_blank'"; } ?> class="btn-small btn-default"><?php echo esc_html($readmore_button) ?></a>
						</div>
                    <?php } ?>						
					</div>
				</div>
			<?php } ?>
			<?php if($consultstreet_main_slider_overlay_disable == true) { ?>
			<div class="overlay"></div>
			<?php } ?>
			<?php if($slide_iteam->image_url!=''){ ?>			
			</div>
			<?php } ?>			
			<?php							
				}	
		    }
	        else { 
			
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
					$slider2_title = 'The purpose of business is to create and keep a customer.';	
				} 
			
			?>
			
			<?php if('Decorexo' == $activate_theme){ ?>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-slide<?php echo $image1_slide; ?>.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left">
						<h1 class="title-large"><?php echo wp_kses_post( html_entity_decode( $slider1_title  ) ); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-default"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($consultstreet_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-slide<?php echo $image2_slide; ?>.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left">
						<h1 class="title-large"><?php echo wp_kses_post( html_entity_decode( $slider2_title  ) ); ?></h1>
						<p class="description"><?php esc_html_e('We provide all types of interior and architecture design services such as exterior design, kitchen design, room design, furniture design, light design, etc. With the help of which you can build your dream home.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-default"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($consultstreet_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<?php } elseif('EnvoPress' == $activate_theme){ ?>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-slide<?php echo $image1_slide; ?>.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left">
						<h1 class="title-large"><?php echo wp_kses_post( html_entity_decode( $slider1_title  ) ); ?></h1>
						<p class="description"><?php esc_html_e("We provide world class business services for our clients to grow their businesses, so don't waste your time, contact us and see the results instantly.",'arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-default"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($consultstreet_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-slide<?php echo $image2_slide; ?>.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left">
						<h1 class="title-large"><?php echo wp_kses_post( html_entity_decode( $slider2_title  ) ); ?></h1>
						<p class="description"><?php esc_html_e("We provide world class business services for our clients to grow their businesses, so don't waste your time, contact us and see the results instantly.",'arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-default"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($consultstreet_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			<?php } elseif('Arvada' == $activate_theme){ ?>
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-slide<?php echo $image1_slide; ?>.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left">
						<h1 class="title-large"><?php echo wp_kses_post( html_entity_decode( $slider1_title  ) ); ?></h1>
						<p class="description"><?php esc_html_e("We provide world class business services for our clients to grow their businesses, so don't waste your time, contact us and see the results instantly.",'arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-default"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($consultstreet_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-slide<?php echo $image2_slide; ?>.jpg);">
				<div class="container theme-slider-content">
					<div class="theme-text-left">
						<h1 class="title-large"><?php echo wp_kses_post( html_entity_decode( $slider2_title  ) ); ?></h1>
						<p class="description"><?php esc_html_e("We provide world class business services for our clients to grow their businesses, so don't waste your time, contact us and see the results instantly.",'arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-default"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($consultstreet_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
			<?php } else { ?>
			 
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-slide<?php echo $image1_slide; ?>.jpg);">
				<div class="container theme-slider-content">
					<div class="<?php if('EarnPress' == $activate_theme){ echo 'theme-text-center align-center';}else{echo 'theme-text-left';};?>">
						<h1 class="title-large"><?php echo wp_kses_post( html_entity_decode( $slider1_title  ) ); ?></h1>
						<p class="description"><?php esc_html_e('We provide world best consulting services for our clients to grow their businesses, so dont waste your time, contact us and see the results instantly.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-default"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($consultstreet_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
			<div class="item" style="background-image:url(<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-slide<?php echo $image2_slide; ?>.jpg);">
				<div class="container theme-slider-content">
					<div class="<?php if('EarnPress' == $activate_theme){ echo 'theme-text-center align-center';}else{echo 'theme-text-left';};?>">
						<h1 class="title-large"><?php echo wp_kses_post( html_entity_decode( $slider2_title  ) ); ?></h1>
						<p class="description"><?php esc_html_e('We provide world best consulting services for our clients to grow their businesses, so dont waste your time, contact us and see the results instantly.','arile-extra'); ?></p>
						<div class="mt-4 pt-2">
							<a href="#" class="btn-small btn-default"><?php esc_html_e('Check it out','arile-extra'); ?></a>
						</div>							
					</div>
				</div>
				<?php if($consultstreet_main_slider_overlay_disable == true) { ?>
				<div class="overlay"></div>
				<?php } ?>
			</div>
			
			<?php } ?>	
	        <?php } ?>	
		</div>		
</section>
<?php endif; ?>