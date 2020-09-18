<?php
    /**
     * The template for displaying the footer
     *
     * @package restaurant
     */
    $footer         = get_option( 'theme_footer', [] );
    $facebook_link  = $footer['facebook_link'] ?? '';
    $twitter_link   = $footer['twitter_link'] ?? '';
    $linkedin_link  = $footer['linkedin_link'] ?? '';
    $instagram_link = $footer['instagram_link'] ?? '';
    $youtube_link   = $footer['youtube_link'] ?? '';
    $address        = $footer['address'] ?? '';
    $phone          = $footer['phone'] ?? '';
    $email          = $footer['email'] ?? '';
    $copyright_text = $footer['copyright_text'] ?? '';
?>


			<?php if(is_array($footer) && !empty($footer)): ?>
			<footer id="footer" class="border-top-0 bg-color-secondary mt-0">
				<div class="container">
					<div class="row py-5">
						<div class="col text-center">
							<ul class="footer-social-icons social-icons social-icons-clean social-icons-big social-icons-opacity-light social-icons-icon-light mt-1">
								
								<?php if($facebook_link): ?>
								<li class="social-icons-facebook">
									<a href="<?php echo esc_url( $facebook_link ); ?>" target="_blank" title="Facebook">
										<i class="fa fa-facebook-f"></i>
									</a>
								</li>
								<?php endif; ?>

								<?php if($twitter_link): ?>
								<li class="social-icons-twitter">
									<a href="<?php echo esc_url( $twitter_link ); ?>" target="_blank" title="Twitter">
									<i class="fa fa-twitter"></i>
									</a>
								</li>
								<?php endif; ?>

								<?php if($linkedin_link): ?>
								<li class="social-icons-linkedin">
									<a href="<?php echo esc_url( $linkedin_link ); ?>" target="_blank" title="Linkedin">
									<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<?php endif; ?>

							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright footer-copyright-style-2 bg-color-secondary">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col-lg-8 text-center text-lg-left mb-2 mb-lg-0">
								<p>
									<?php if($address): ?>
									<span class="pr-0 pr-md-3 d-block d-md-inline-block">
										<i class="fa fa-circle text-color-primary top-1 p-relative"></i>
										<span class="text-color-light opacity-7 pl-1">
											<?php echo esc_html( $address ); ?>
										</span>
									</span>
									<?php endif; ?>

									<?php if($phone): ?>
									<span class="pr-0 pr-md-3 d-block d-md-inline-block">
										<i class="fa fa-whatsapp text-color-primary top-1 p-relative"></i>
										<a href="tel:<?php echo esc_attr( $phone ); ?>" class="text-color-light opacity-7 pl-1">
											<?php echo esc_html( $phone ); ?>
										</a>
									</span>
									<?php endif; ?>

									<?php if($email): ?>
									<span class="pr-0 pr-md-3 d-block d-md-inline-block">
										<i class="fa fa-envelope text-color-primary top-1 p-relative"></i>
										<a href="mailto:<?php echo esc_attr( $email ); ?>" class="text-color-light opacity-7 pl-1">
											<?php echo esc_html( $email ); ?>
										</a>
									</span>
									<?php endif; ?>


								</p>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end mb-4 mb-lg-0 pt-4 pt-lg-0">
								<div class="text-color-light opacity-7">
									<?php echo wp_kses_post($copyright_text); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<?php endif; ?>

		</div>

		<?php wp_footer();?>
	</body>
</html>

