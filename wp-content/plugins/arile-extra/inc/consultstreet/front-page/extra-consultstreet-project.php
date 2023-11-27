<?php
if('ConsultStreet' == $activate_theme || 'BrightPress' == $activate_theme || 'AssentPress' == $activate_theme || 'EnvoPress' == $activate_theme || 'Arvada' == $activate_theme || 'EarnPress' == $activate_theme || $activate_theme == 'MadisonBlog'){	   $title = 'Our Latest Projects';
    $description = 'We provide you with a beautiful working place that your work is productive to growth your business.';	
}
if('FitnessBase' == $activate_theme){
    $title = 'Training Programs';
    $description = 'Let us take your workout routines to the next level with our full-body programs and intensity challenges.';				
}
if('Beauty Spa Salon' == $activate_theme){
    $title = 'Our Treatments';
    $description = 'Alienum phaedrum torquatos nec eu, vis detraxit periculis ex, nihil expete ndis in vel pertinax sensibus';				
}
if('Decorexo' == $activate_theme){
    $title = 'Latest Projects';
    $description = 'Our friendly and qualified team is committed to designing excellence, responsibility, and sustainability.';				
}
$consultstreet_project_content  = get_theme_mod( 'consultstreet_project_content');
$consultstreet_project_disabled = get_theme_mod('consultstreet_project_disabled', true); 
$consultstreet_project_front_container_size = get_theme_mod('consultstreet_project_front_container_size', 'container-full');
$consultstreet_project_area_title = get_theme_mod('consultstreet_project_area_title', __(''.$title.'','arile-extra'));
$consultstreet_project_area_des = get_theme_mod('consultstreet_project_area_des', __(''.$description.'','arile-extra'));
if($consultstreet_project_disabled == true): ?>
	<section class="theme-block theme-project theme-bg-grey <?php if('EnvoPress' == $activate_theme || 'Arvada' == $activate_theme){echo 'vrsn-three';}?>" id="theme-project">
	    <?php if($consultstreet_project_area_title != null || $consultstreet_project_area_des != null): ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="theme-section-module text-center">
					<?php if($consultstreet_project_area_title != null): ?>
						<h2 class="theme-section-title"><?php echo wp_kses_post($consultstreet_project_area_title); ?></h2>
					<?php endif; ?>
					<?php if($consultstreet_project_area_des != null): ?>
						<p class="theme-section-subtitle"><?php echo wp_kses_post($consultstreet_project_area_des); ?></p>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full"></div>
					</div>
				</div>
			</div>
		</div>	
		<?php endif; ?>
		<div class="<?php echo esc_html($consultstreet_project_front_container_size); ?>">
			<div class="row theme-project-row">		
				<?php 
				if ( ! empty( $consultstreet_project_content ) ) {
				$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
					$consultstreet_project_content = json_decode($consultstreet_project_content);
						foreach ( $consultstreet_project_content as $project_item ) {
						$image_url = ! empty( $project_item->image_url ) ? $project_item->image_url : '';
						$title = ! empty( $project_item->title ) ? $project_item->title : '';
						$text = ! empty( $project_item->text ) ? $project_item->text : '';
						?>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content">
								<?php if ( ! empty( $image_url ) || ! empty( $title ) || ! empty( $text ) ) :?>
									<figure class="portfolio-thumbnail">
										<img src="<?php echo esc_url( $image_url ); ?>" class="img-fluid" alt="<?php echo esc_html( $title ); ?>">
										<div class="content-overlay"></div>
										<div class="click-view">
										<?php if ( ! empty( $title ) ) :?>
											<h5 class="theme-project-title"><?php echo esc_html( $title ); ?></h5>
										<?php endif; ?>
										<?php if ( ! empty( $text ) ) :?>					
											<p><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
										<?php endif; ?>
										</div>
									</figure>
								<?php endif; ?>
								</article>
							</div>
				<?php } } else {
                    
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

					?>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-project<?php echo $project1_image; ?>.jpg" class="img-fluid" alt="Business Planning">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e(''.$project1_title.'','arile-extra'); ?></h5>
										<?php if('Decorexo' != $activate_theme){ ?>
										<p>
										<?php if('EnvoPress' == $activate_theme || 'Arvada' == $activate_theme){ ?>
										<?php esc_html_e('Lorem ipsum dolor sit amet.','arile-extra'); ?>
										<?php } else {?>
										<?php esc_html_e('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'); ?>
										<?php } ?>
										</p>
										<?php } ?>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-project<?php echo $project2_image; ?>.jpg" class="img-fluid" alt="Planning For The Future.">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e(''.$project2_title.'','arile-extra'); ?></h5>
										<?php if('Decorexo' != $activate_theme){ ?>
										<p>
										<?php if('EnvoPress' == $activate_theme || 'Arvada' == $activate_theme){ ?>
										<?php esc_html_e('Lorem ipsum dolor sit amet.','arile-extra'); ?>
										<?php } else {?>
										<?php esc_html_e('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'); ?>
										<?php } ?>
										</p>
										<?php } ?>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-project<?php echo $project3_image; ?>.jpg" class="img-fluid" alt="Growth Expansion">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e(''.$project3_title.'','arile-extra'); ?></h5>
										<?php if('Decorexo' != $activate_theme){ ?>
										<p>
										<?php if('EnvoPress' == $activate_theme || 'Arvada' == $activate_theme){ ?>
										<?php esc_html_e('Lorem ipsum dolor sit amet.','arile-extra'); ?>
										<?php } else {?>
										<?php esc_html_e('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'); ?>
										<?php } ?>
										</p>
										<?php } ?>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/consultstreet/images/theme-project<?php echo $project4_image; ?>.jpg" class="img-fluid" alt="Sales Forecasting">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e(''.$project4_title.'','arile-extra'); ?></h5>
										<?php if('Decorexo' != $activate_theme){ ?>
										<p>
										<?php if('EnvoPress' == $activate_theme || 'Arvada' == $activate_theme){ ?>
										<?php esc_html_e('Lorem ipsum dolor sit amet.','arile-extra'); ?>
										<?php } else {?>
										<?php esc_html_e('Lorem ipsum dolor sit amet, sit sit consectetuer, etiam metus arcu ultrices eros, nam gravida et dapibus.','arile-extra'); ?>
										<?php } ?>
										</p>
										<?php } ?>
										</div>
									</figure>
								</article>
							</div>
				
					<?php } ?>
			</div>
		</div>
</section>
<?php endif; ?>