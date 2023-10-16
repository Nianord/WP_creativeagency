<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	  <head>
	    <meta charset="<?php bloginfo('charset'); ?>">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    
	    <?php wp_head(); ?>
	    
	    <title>Creatic, creative agency</title>
	  </head>
	  <body>
	<div class="wrapper">

	<header class="header">
		<div class="header__container container">
			<div class="header__logo logo">
				<?php the_custom_logo(); ?>
			</div>
			<nav class="header__menu menu">
				<ul class="menu__list">
					<li class="menu__link"><a href="">Home</a></li>
					<li class="menu__link"><a href="">About Us</a></li>
					<li class="menu__link"><a href="">Services</a></li>
					<li class="menu__link"><a href="">Portfolio</a></li>
					<li class="menu__link"><a href="">Pages</a></li>
					<li class="menu__link"><a href="">Contact Us</a></li>
				</ul>
				<div class="menu__burger">
					<span></span>
				</div>
				<div class="menu__search search">
					<div class="search__img">
						<img src="<?php bloginfo('template_url'); ?>/assets/images/icons/Search.png" alt="Search">
					</div>
					<div class="search__form form">
						<form class="form__body" action="#">
							<div class="form__wrap">
								<input class="form__input" type="text" name="search">
								<button class="form__btn" type="submit"><img src="<?php bloginfo('template_url'); ?>/assets/images/icons/Search.png" alt="Search"></button>
							</div>
						</form>
					</div>
				</div>
			</nav>
		</div>
	</header>