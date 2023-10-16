<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>

<main>

	<section class="whoWeAre">
		<div class="whoWeAre__container container">
			<div class="whoWeAre__row">
				<div class="whoWeAre__textblock textblock">
					<div class="textblock__subtitle"><?php the_field('subtitle_mainblock'); ?></div>
					<div class="textblock__title">
						<?php the_field('title_mainblock'); ?>
					</div>
					<span class="textblock__line"></span>
					<div class="textblock__text"><?php the_field('text_mainblock'); ?></div>
					<div class="textblock__btn">
						<button class="btn1" type="submit">GET IN TOUCH</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ideas">
		<div class="ideas__container container">
			<div class="ideas__row">
				<div class="ideas__textblock textblock">
					<div class="textblock__subtitle"><?php the_field('subtitle_ideasblock'); ?></div>
					<div class="textblock__title textblock__title_little">
						<?php the_field('title_ideasblock'); ?>
					</div>
					<span class="textblock__line textblock__line_color"></span>
					<div class="textblock__label"><?php the_field('label_ideasblock'); ?></div>
					<div class="textblock__text"><?php the_field('text1_ideasblock'); ?></div>
					<div class="textblock__text"><?php the_field('text2_ideasblock'); ?></div>
					<div class="textblock__btn">
						<button class="btn1" type="submit">READ more</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="innovation">
		<div class="innovation__container container">
			<div class="innovation__row">
				<div class="innovation__item">
					<div class="innovation__textblock textblock">
						<div class="textblock__subtitle"><?php the_field('subtitle_innovblock'); ?></div>
						<div class="textblock__title textblock__title_little">
							<?php the_field('title_innovblock'); ?>
						</div>
						<span class="textblock__line textblock__line_color"></span>
						<div class="textblock__text"><?php the_field('text_innovblock'); ?></div>
						<div class="textblock__btn">
							<button class="btn1" type="submit">VIEW ALL</button>
						</div>
					</div>
				</div>
				<div class="innovation__item">
					<div class="innovation__cards cards">
						<div class="cards__container">
							<div class="cards__row">
								<div class="cards__item cards__item_1">
									<img  class="cards__img" src=<?php the_field('card1pic_innovblock'); ?>>
									<p class="cards__title"><?php the_field('card1title_innovblock'); ?></p>
									<p class="cards__text"><?php the_field('card1text_innovblock'); ?></p>
								</div>
								<div class="cards__item cards__item_2">
									<img  class="cards__img" src=<?php the_field('card2pic_innovblock'); ?>>
									<p class="cards__title"><?php the_field('card2title_innovblock'); ?></p>
									<p class="cards__text"><?php the_field('card2text_innovblock'); ?></p>
								</div>
							</div>
							<div class="cards__row">
								<div class="cards__item cards__item_3">
									<img  class="cards__img" src=<?php the_field('card3pic_innovblock'); ?>>
									<p class="cards__title"><?php the_field('card3title_innovblock'); ?></p>
									<p class="cards__text"><?php the_field('card3text_innovblock'); ?></p>
								</div>
								<div class="cards__item cards__item_4">
									<img  class="cards__img" src=<?php the_field('card4pic_innovblock'); ?>>
									<p class="cards__title"><?php the_field('card4title_innovblock'); ?></p>
									<p class="cards__text"><?php the_field('card4text_innovblock'); ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<section class="statistics">
		<div class="statistics__container container">
			<div class="statistics__row">
				<div class="statistics__cards cards">
					<div class="cards__container cards__container_horizontal">
						<div class="cards__row cards__row_horizontal">

<?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
	'category' => 4,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
			<div class="cards__item cards__item_5">
				<?php the_post_thumbnail(
					array(105, 96),
					); ?>
					<div class="cards__title cards__title_color cards__title_size"><?php the_title(); ?></div>
					<div class="cards__text cards__text_color"><?php the_content(); ?></div>
			</div>
<?php }}
wp_reset_postdata(); 
?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="projects">
		<div class="projects__container container">
			<div class="projects__row">
				<div class="projects__item">
					<div class="projects__textblock">	
							<?php the_field('title_projblock'); ?>
						<p class="projects__text textblock__subtitle"><?php the_field('subtitle_projblock'); ?></p>
					</div>
				</div>
				<div class="projects__item">
					<div class="projects__slider slider swiper-container">
							<div class="slider__wrapper swiper-wrapper">
<?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
	'category' => 5,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
			<div class="slider__slide swiper-slide">
				<?php the_post_thumbnail(
					array(1000, 624),
					); ?>

				</div>
<?php }}
wp_reset_postdata(); 
?>
							</div>
							<div class="swiper-pagination"></div>
						</div>
					</div>
				</div>
			</div>
	</section> 

	<section class="experience">
		<div class="experience__container container">
			<div class="experience__row">
					<div class="experience__item experience__textblock textblock">
						<div class="textblock__subtitle textblock__subtitle_color textblock__subtitle_pos"><?php the_field('subtitle_expblock'); ?></div>
						<span class="textblock__line"></span>
						<div class="textblock__title textblock__title_medium">
							<?php the_field('title_expblock'); ?>
						</div>
						<div class="textblock__btn">
							<button class="btn1" type="submit">READ more</button>
						</div>
					</div>
					<div class="experience__item experience__list list">
						<div class="list__text"><?php the_field('text_expblock'); ?></div>
						<div class="list__list">
							<?php the_field('list_expblock'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="testimonials">
		<div class="testimonials__container">
			<div class="testimonials__row">
				<div class="testimonials__item testimonials__pic1 ibg">
					<img src=<?php the_field('bg_left_testimblock'); ?>>
				</div>
				<div class="testimonials__item testimonials__textblock textblock">
					<div class="textblock__title textblock__title_medium textblock__title_pos">
						<?php the_field('title_testimblock'); ?>
					</div>
					<span class="textblock__line textblock__line_size"></span>
					<div class="textblock__subtitle textblock__subtitle_color textblock__subtitle_pos"><?php the_field('subtitle_testimblock'); ?></div>
					<div class="textblock__block block">
						<div class="block__text"><?php the_field('text_testimblock'); ?></div>
						<div class="block__signature">
							<div class="block__pic">
								<img src=<?php the_field('pic_testimblock'); ?>>
							</div>
							<div class="block__name">
								<?php the_field('name_testimblock'); ?>
							</div>
							<div class="block__icon">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/icons/Commas.png" alt="Commas">
							</div>
						</div>
					</div>
					<div class="textblock__btn">
						<button class="btn1" type="submit">VIEW ALL TESTIMONIALS </button>
					</div>
				</div>
				<div class="testimonials__item testimonials__pic2 ibg">
					<img src=<?php the_field('bg_right_testimblock'); ?>>
				</div>
			</div>
		</div>
	</section>

	<section class="subscribe">
		<div class="subscribe__container container">
			<div class="subscribe__row">
				<div class="subscribe__item contacts">
					<div class="contacts__textblock textblock">
						<div class="textblock__title textblock__title_little textblock__title_upper textblock__title_pos2">
							<?php the_field('title_subscrblock'); ?>
						</div>
						<span class="textblock__line textblock__line_color"></span>
						<div class="textblock__text textblock__text_pos"><?php the_field('text_subscrblock'); ?> </div>
					</div>
					<div class="contacts__address">
						<ul class="contacts__list">
							<li>
								<img src="<?php bloginfo('template_url'); ?>/assets/images/icons/address.png" alt="address">
								<div>
									<span>Office Address</span>
									<p><a href="<?php the_field('address-link'); ?>"><?php the_field('address'); ?></a></p>
								</div>
							</li>
							<li>
								<img src="<?php bloginfo('template_url'); ?>/assets/images/icons/phone.png" alt="phone">
								<div>
									<span>Call Us</span>
									<p><a href="tel:<?php the_field('phone-number'); ?>"><?php the_field('phone'); ?></a></p>
								</div>
							</li>
							<li>
								<img src="<?php bloginfo('template_url'); ?>/assets/images/icons/mail.png" alt="mail">
								<div>
									<span>Mail Us</span>
									<p><a href="mailto:<?php the_field('mail'); ?>"><?php the_field('mail'); ?></a></p>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="subscribe__item subscribe">
					<div class="subscribe__form form2">
						<form action="#" method="" enctype="multipart/form-data">
							<?php echo do_shortcode('[contact-form-7 id="52" title="Form subscribe"]')	?>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>