<?php 
$designexo_project_content  = get_theme_mod( 'designexo_project_content');
$designexo_project_disabled = get_theme_mod('designexo_project_disabled', true); 
$designexo_project_front_container_size = get_theme_mod('designexo_project_front_container_size', 'container-fluid');
$designexo_project_area_title = get_theme_mod('designexo_project_area_title', __('Our Portfolio','arile-extra'));
if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme || 'Architects' == $activate_theme || 'IntecoPress' == $activate_theme || 'Interior Dark' == $activate_theme || 'InteriorX' == $activate_theme || 'Interior House' == $activate_theme){
$designexo_project_area_des = get_theme_mod('designexo_project_area_des', __('ALL INTERIOR DESIGN SOLUTIONS','arile-extra'));
}
if('Architect House' == $activate_theme){
$designexo_project_area_des = get_theme_mod('designexo_project_area_des', __('ALL Architect DESIGN SOLUTIONS','arile-extra'));
}
if('Empresa' == $activate_theme || 'Monster Dark' == $activate_theme || 'NewsMedia' == $activate_theme || 'SpiceMag' == $activate_theme || 'DesignTech' == $activate_theme || 'Technoex' == $activate_theme || 'Atlanta Blog' == $activate_theme || 'Atlanta Blog' == $activate_theme){
$designexo_project_area_des = get_theme_mod('designexo_project_area_des', __('Our latest works','arile-extra'));
}
if('Interior Decor' == $activate_theme){
$designexo_project_area_des = get_theme_mod('designexo_project_area_des', __('ALL INTERIOR & ARCHITECTURE DESIGN SOLUTIONS','arile-extra'));
}
if('BeautyCare' == $activate_theme){
$designexo_project_area_des = get_theme_mod('designexo_project_area_des', __('Featured Works','arile-extra'));
}
$designexo_project_button_text = get_theme_mod('designexo_project_button_text', __('VIEW ALL PROJECTS','arile-extra'));
$designexo_project_button_link = get_theme_mod('designexo_project_button_link', '#');
if($designexo_project_disabled == true): ?>
	<section class="theme-block theme-project theme-bg-grey pb-0 <?php if('Interior Dark' == $activate_theme || 'Interior Decor' == $activate_theme || 'Architect House' == $activate_theme){ echo 'vrsn-three'; } ?>" id="theme-project">
	    <?php if($designexo_project_area_title != null || $designexo_project_area_des != null): ?>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="theme-section-module text-center">
					<?php if($designexo_project_area_title != null): ?>
						<p class="theme-section-subtitle wow animate fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post($designexo_project_area_title); ?></p>
					<?php endif; ?>
						<?php if($designexo_project_area_des != null): ?>
						<h2 class="theme-section-title wow animate fadeInUp" data-wow-delay=".3s"><?php echo wp_kses_post($designexo_project_area_des); ?></h2>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full wow animate fadeInUp" data-wow-delay=".3s"></div>
					</div>
				</div>
			</div>
		</div>	
		<?php endif; ?>
		<div class="<?php echo esc_html($designexo_project_front_container_size); ?>">
			<div class="row theme-project-row">		
				<?php 
				if ( ! empty( $designexo_project_content ) ) {
				$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
					$designexo_project_content = json_decode($designexo_project_content);
						foreach ( $designexo_project_content as $project_item ) {
						$image_url = ! empty( $project_item->image_url ) ? $project_item->image_url : '';
						$title = ! empty( $project_item->title ) ? $project_item->title : '';
						$text = ! empty( $project_item->text ) ? $project_item->text : '';
						?>
							<div class="col-lg-<?php if('Architect Decor' == $activate_theme){ echo '4'; }else{echo '3';} ?> col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
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
				<?php } } else { ?>
				        <?php if('Designexo' == $activate_theme || 'InteriorWP' == $activate_theme || 'Designexo Child Theme' == $activate_theme || 'Architect Decor' == $activate_theme || 'Interior House' == $activate_theme){ ?>
							<div class="col-lg-<?php if('Architect Decor' == $activate_theme){ echo '4'; }else{echo '3';} ?> col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project1.jpg" class="img-fluid" alt="BEDROOM LIGHTING DÉCOR">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('BEDROOM LIGHTING DÉCOR','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-<?php if('Architect Decor' == $activate_theme){ echo '4'; }else{echo '3';} ?> col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project2.jpg" class="img-fluid" alt="EXTERIOR RENOVATION">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('EXTERIOR RENOVATION','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-<?php if('Architect Decor' == $activate_theme){ echo '4'; }else{echo '3';} ?> col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project3.jpg" class="img-fluid" alt="ARCHITECTURE DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('ARCHITECTURE DESIGN','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
						<?php if('Architect Decor' != $activate_theme){ ?>	
							
							<div class="col-lg-<?php if('Architect Decor' == $activate_theme){ echo '4'; }else{echo '3';} ?> col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project4.jpg" class="img-fluid" alt="MODULAR KITCHEN DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('MODULAR KITCHEN DESIGN','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
						<?php } ?>	
							
						<?php } ?>
			            <?php if('Empresa' == $activate_theme || 'NewsMedia' == $activate_theme  || 'SpiceMag' == $activate_theme || 'Technoex' == $activate_theme || 'Atlanta Blog' == $activate_theme || 'Atlanta Blog' == $activate_theme){ ?>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project5.jpg" class="img-fluid" alt="BEDROOM LIGHTING DÉCOR">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Adventures','arile-extra'); ?></h5>
										<p><?php esc_html_e('Mountain climbing','arile-extra'); ?></p>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project6.jpg" class="img-fluid" alt="EXTERIOR RENOVATION">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Photography portfolio','arile-extra'); ?></h5>
										<p><?php esc_html_e('Illustration','arile-extra'); ?></p>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project7.jpg" class="img-fluid" alt="ARCHITECTURE DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Fashion store','arile-extra'); ?></h5>
										<p><?php esc_html_e('Fashion photography','arile-extra'); ?></p>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project8.jpg" class="img-fluid" alt="MODULAR KITCHEN DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Tour & travels','arile-extra'); ?></h5>
										<p><?php esc_html_e('Entertainment','arile-extra'); ?></p>
										</div>
									</figure>
								</article>
							</div>
						<?php } ?>
						
						<?php if('Architects' == $activate_theme){ ?>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-project9.jpg" class="img-fluid" alt="BEDROOM LIGHTING DÉCOR">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('EXTERIOR RENOVATION','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-project10.jpg" class="img-fluid" alt="EXTERIOR RENOVATION">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('LIVING ROOM LIGHTING DÉCOR','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-project11.jpg" class="img-fluid" alt="ARCHITECTURE DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('ARCHITECTURE DESIGN','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>	
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/arilewp/images/theme-project12.jpg" class="img-fluid" alt="MODULAR KITCHEN DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('MODULAR KITCHEN DESIGN','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							
						<?php } ?>
						
						<?php if('IntecoPress' == $activate_theme){ ?>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project9.jpg" class="img-fluid" alt="BEDROOM LIGHTING DÉCOR">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('RESIDENTIAL DESIGN','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project10.jpg" class="img-fluid" alt="EXTERIOR RENOVATION">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('COMMERCIAL DESIGN','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project11.jpg" class="img-fluid" alt="ARCHITECTURE DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('HOUSING PROJECT','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>	
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project12.jpg" class="img-fluid" alt="MODULAR KITCHEN DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('GLASS ART IN LONDON','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							
						<?php } ?>
						
						<?php if('Monster Dark' == $activate_theme || 'DesignTech' == $activate_theme){ ?>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project13.jpg" class="img-fluid" alt="BEDROOM LIGHTING DÉCOR">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Business Consulting','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project14.jpg" class="img-fluid" alt="EXTERIOR RENOVATION">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('App Development','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project15.jpg" class="img-fluid" alt="ARCHITECTURE DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Digital Marketing','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>	
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project7.jpg" class="img-fluid" alt="MODULAR KITCHEN DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Fashion Store','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							
						<?php } ?>
						
						<?php if('Interior Dark' == $activate_theme || 'Interior Decor' == $activate_theme){ ?>

							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project16.jpg" class="img-fluid" alt="BEDROOM LIGHTING DÉCOR">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Home Renovations','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project17.jpg" class="img-fluid" alt="EXTERIOR RENOVATION">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Modern Bedroom Design','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project18.jpg" class="img-fluid" alt="ARCHITECTURE DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Perfect wooden kitchen','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project19.jpg" class="img-fluid" alt="MODULAR KITCHEN DESIGN">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Wall Decorations','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							
						<?php } ?>
						
						<?php if('InteriorX' == $activate_theme){ ?>

							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project16.jpg" class="img-fluid" alt="Home Renovations">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Home Renovations','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project17.jpg" class="img-fluid" alt="Modern Bedroom Design">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Modern Bedroom Design','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project18.jpg" class="img-fluid" alt="Perfect wooden kitchen">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Perfect wooden kitchen','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project19.jpg" class="img-fluid" alt="Wall Decorations">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Wall Decorations','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
						<?php } ?>
						
					    <?php if('BeautyCare' == $activate_theme){ ?>

							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project20.jpg" class="img-fluid" alt="Home Renovations">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Skin Care','arile-extra'); ?></h5>
										<p><?php esc_html_e('Beauty, Cosmetics','arile-extra'); ?></p>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project21.jpg" class="img-fluid" alt="Modern Bedroom Design">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Face Primer','arile-extra'); ?></h5>
										<p><?php esc_html_e('Facial Treatment','arile-extra'); ?></p>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project22.jpg" class="img-fluid" alt="Perfect wooden kitchen">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Haircuts & Styling','arile-extra'); ?></h5>
										<p><?php esc_html_e('Color & Highlights','arile-extra'); ?></p>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project23.jpg" class="img-fluid" alt="Wall Decorations">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('Prenatal Massage','arile-extra'); ?></h5>
										<p><?php esc_html_e('Massage Therapy','arile-extra'); ?></p>
										</div>
									</figure>
								</article>
							</div>
						<?php } ?>
						
					    <?php if('Architect House' == $activate_theme){ ?>

							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project24.jpg" class="img-fluid" alt="Home Renovations">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('ARCHITECTURER IDEAS','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project25.jpg" class="img-fluid" alt="Modern Bedroom Design">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('RESIDENTIAL HOME DECOR','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project26.jpg" class="img-fluid" alt="Perfect wooden kitchen">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('HOME DECOR','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12">	
								<article class="theme-project-content mb-0 wow animate zoomIn" data-wow-delay=".3s">
									<figure class="portfolio-thumbnail">
										<img src="<?php echo arile_extra_plugin_url; ?>/inc/designexo/images/theme-project27.jpg" class="img-fluid" alt="Wall Decorations">
										<div class="content-overlay"></div>
										<div class="click-view">
										<h5 class="theme-project-title"><?php esc_html_e('BUSINESS SPACE DÉCOR','arile-extra'); ?></h5>
										</div>
									</figure>
								</article>
							</div>
						<?php } ?>
				
					<?php } ?>
			</div>
		</div>
		<?php if ( ! empty( $designexo_project_button_text ) ) :?>
			<div class="container-fluid pl-0 pr-0 pt-5 pb-5 theme-bg-default">
				<div class="row">
					<div class="col-lg-12">
						<div class="mx-auto theme-text-center wow animate fadeInUp" data-wow-delay=".3s">
							<a href="<?php echo $designexo_project_button_link; ?>" target="_blank" class="btn-small btn-dark"><?php echo $designexo_project_button_text; ?></a>
						</div>
					</div>
				</div>
			</div>
		<?php endif; ?>
		
</section>
<?php endif; ?>