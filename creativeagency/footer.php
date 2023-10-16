<footer class="footer">
	<div class="footer__container">
		<div class="footer__row">
			<div class="footer__pic logo">
				<?php the_custom_logo(); ?>
			</div>
			<div class="footer__line textblock__line textblock__line_color textblock__line_pos"></div>
			<ul class="footer__categories">
				<li><a href="">Categories</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Services</a></li>
				<li><a href="">Portfolio</a></li>
				<li><a href="">Pages</a></li>
				<li><a href="">Support</a></li>
			</ul>
			<div class="footer__text"><?php the_field('text_footer'); ?></div>
			<div class="footer__icons">
				<a href="<?php the_field('facebook-link'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/facebook.png" alt="facebook"></a>
				<a href="<?php the_field('instagram-link'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/instagram.png" alt="instagram"></a>
				<a href="<?php the_field('whatsapp-link'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/whatsapp.png" alt="whatsapp"></a>
				<a href="<?php the_field('linkedin-link'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/linkedin.png" alt="linkedin"></a>
				<a href="<?php the_field('pinterest-link'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/pinterest.png" alt="pinterest"></a>
				<a href="<?php the_field('twitter-link'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/twitter.png" alt="twitter"></a>
			</div>
			<div class="footer__blur">Copyright © 2003-2023 Creatic Agency All rights reserved.</div>
			<div class="footer__copyright">
				<a href="<?php echo get_page_link(111); ?>">Confidential policy</a>
				<br>Copyright © 2003-2023 Creatic Agency All rights reserved.
			</div>
		</div>

	</div>
</footer>

	</div>
	<?php wp_footer(); ?>
	  </body>
	</html>