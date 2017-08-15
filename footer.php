				<footer id="footer">
					<div class="footer-content">
						<div class="social">
							<?php vw_render_site_social_icons(); ?>
						</div>
						<img class="logo" src="/wp-content/uploads/2017/08/2Artboard-1@2x-1.png"> <!-- white logo -->
						<div class="copyrightstuff">
							<p>&copy; Copyright 2017, The Nevada Sagebrush</p>
							<?php
							if ( has_nav_menu('top_navigation' ) ) {
								wp_nav_menu( array(
									'theme_location' => 'top_navigation',
									'container' => false,
									'menu_class' => 'bottom-nav list-unstyled',
									'link_before' => '<span>',
									'link_after' => '</span>',
									'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth' => 2,
									'walker' => new vw_text_menu_walker()
								) );
							}
							?>
						</div>
					</div>
				</footer>

			</div> <!-- Off canvas body inner -->

		<?php wp_footer(); ?>
	</body>
</html>
