<?php 	
$consultstreet_service_area_disabled = get_theme_mod('consultstreet_service_area_disabled', true); 
$consultstreet_service_area_title = get_theme_mod('consultstreet_service_area_title', __('We offer best services','arile-extra'));
$consultstreet_service_area_des = get_theme_mod('consultstreet_service_area_des', __("We provide the world's best services to growth your business.",'arile-extra'));
$consultstreet_service_content  = get_theme_mod( 'consultstreet_service_content'); 
if($consultstreet_service_area_disabled == true): ?>
<section class="theme-block theme-services" id="theme-services">
	<div class="container">
	<?php  
	if( ($consultstreet_service_area_title) || ($consultstreet_service_area_des)!='' ): ?>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="theme-section-module text-center">
					<?php if($consultstreet_service_area_title != null): ?>
						<h2 class="theme-section-title"><?php echo $consultstreet_service_area_title; ?></h2>
					<?php endif; ?>
					<?php if($consultstreet_service_area_des != null): ?>
						<p class="theme-section-subtitle"><?php echo $consultstreet_service_area_des; ?></p>
					<?php endif; ?>
						<div class="theme-separator-line-horrizontal-full"></div>
					</div>
				</div>
			</div>
		<?php endif; ?>
	<div class="row theme-services-content">
	
		<?php
		if ( ! empty( $consultstreet_service_content ) ) {
		$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
		$consultstreet_service_content = json_decode( $consultstreet_service_content );
		foreach ( $consultstreet_service_content as $features_item ) {
			$icon = ! empty( $features_item->icon_value ) ? $features_item->icon_value : '';
			$title = ! empty( $features_item->title ) ? $features_item->title : '';
			$text = ! empty( $features_item->text ) ? $features_item->text : '';
			$link = ! empty( $features_item->link ) ? $features_item->link : '';
			$image = ! empty( $features_item->image_url ) ? $features_item->image_url : '';
			$open_new_tab = $features_item->open_new_tab;
			
			?>
			<div class="col-lg-4 col-md-6 col-sm-12">
			
					<article class="service-content-two media">
					<?php if($features_item->choice == 'customizer_repeater_image'){ ?>
							<?php if ( ! empty( $image ) ) : ?>
							<figure class="service-content-thumbnail-two">
								<?php if ( ! empty( $link ) ) : ?>
									<a href="<?php echo $link; ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>>
									   <img class="img-fluid" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
									</a>
								<?php endif; ?>	
								<?php if ( empty( $link ) ) : ?>	
										<img class="img-fluid" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
                                <?php endif; ?>	
                            </figure>								
							<?php endif; ?>
						<?php } else if($features_item->choice =='customizer_repeater_icon'){ ?>
							<?php if ( ! empty( $icon ) ) :?>
							<figure class="service-content-thumbnail-two">
									<?php if ( ! empty( $link ) ) : ?>
											<a href="<?php echo $link; ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>><i class="fa <?php echo esc_html( $icon ); ?>"></i></a>
									<?php endif; ?>
									<?php if ( empty( $link ) ) : ?>
											<i class="fa <?php echo esc_html( $icon ); ?>"></i>	
									<?php endif; ?>
							</figure>
							<?php endif; ?>
						<?php } ?>
						<div class="media-body">
							<?php if ( ! empty( $title ) ) : 
								if(empty($link)){ ?>
									<h4 class="service-title"><?php echo esc_html( $title ); ?></h5><?php
								}else{
									?>
									<h4 class="service-title"><a href="<?php echo $link; ?>" <?php if($open_new_tab =='yes'){?>target="_blank" <?php }?> ><?php echo esc_html( $title ); ?></a></h5><?php
								}
							?>
							<?php endif; ?>
							<?php if ( ! empty( $text ) ) : ?>
								<p><?php echo wp_kses_post( html_entity_decode( $text ) ); ?></p>
							<?php endif; ?>
						</div>
					</article>
			</div>
			<?php
			} }
			else
			{ ?>	
		        <div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content-two media">
						<figure class="service-content-thumbnail-two">
							<a href="#"><i class="fa fa-money"></i></a>
						</figure>
						<div class="media-body">
							<h4 class="service-title"><a href="#"><?php esc_html_e('Business Planning','arile-extra'); ?></a></h4>
							<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.','arile-extra'); ?></p>
						</div>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content-two media">
						<figure class="service-content-thumbnail-two">
							<a href="#"><i class="fa fa-users"></i></a>
						</figure>
						<div class="media-body">
							<h4 class="service-title"><a href="#"><?php esc_html_e('Satisfied Clients','arile-extra'); ?></a></h4>
							<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.','arile-extra'); ?></p>
						</div>
					</article>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">				
					<article class="service-content-two media">
						<figure class="service-content-thumbnail-two">
							<a href="#"><i class="fa fa-globe"></i></a>
						</figure>
						<div class="media-body">
							<h4 class="service-title"><a href="#"><?php esc_html_e('SEO Optimization','arile-extra'); ?></a></h4>
							<p><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor quas molesty.','arile-extra'); ?></p>
						</div>
					</article>
				</div>
			
				
			<?php } ?>
		</div>
	</div>
</section>
<?php endif;