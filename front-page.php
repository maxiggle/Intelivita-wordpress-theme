<?php get_header();?>
	<!-- Top banner -->

	<?php
$value = get_field( "hero" );
?>
	<section class="fh5co-top-banner">
		<div class="top-banner__inner site-container">
			<div class="top-banner__image">
				<img src="<?php bloginfo('template_url'); ?>/images/top-banner-author.jpg" alt="author image">
			</div>
			<div class="top-banner__text">
				<div class="top-banner__text-up">
					<span class="brand-span"><?php echo $value["small_text"];?></span>
					<h2 class="top-banner__h2"><?php echo $value["first_name"];?></h2>
				</div>
				<div class="top-banner__text-down">
					<h2 class="top-banner__h2"><?php echo $value["last_name"];?></h2>
					<span class="brand-span">Author, Writer, Traveler</span>
				</div>
				<p>One Man. One Mission. Can He Go Beyond?One Man. One Mission. Can He Go Beyond?</p>
				<a href="#" class="brand-button">Read bio > </a>
			</div>
		</div>
	</section>
	<!-- Top banner end -->

	<!-- About me -->
	<section class="fh5co-about-me">
		<div class="about-me-inner site-container">
			<article class="portfolio-wrapper">
				<div class="portfolio__img">
					<img src="<?php bloginfo('template_url'); ?>/images/about-me.jpg" class="about-me__profile" alt="about me profile picture">
				</div>
				<div class="portfolio__bottom">
					<div class="portfolio__name">
						<span>J</span>
						<h2 class="universal-h2">hone Smith</h2>
					</div>
					<p>Jhone Smith is a short story author, novelist, and award-winning poet.</p>
				</div>
			</article>
			<div class="about-me__text">
				<div class="about-me-slider">
					<div class="about-me-single-slide">
						<h2 class="universal-h2 universal-h2-bckg">About me</h2>
						<p><span>H</span> e has work appearing or forthcoming in over a dozen venues, including Buzzy Mag, The Spirit of Poe, and the British Fantasy Society journal Dark Horizons. He is also CEO of a company, specializing in custom book publishing and social media marketing services, have created a community for authors to learn and connect.He has work appearing or forthcoming in over a dozen venues, including Buzzy Mag, The Spirit of Poe, and have created a community for authors to learn and connect.</p>
						<h4>Author</h4>
						<p class="p-white">See me</p>
					</div>
					<div class="about-me-single-slide">
						<h2 class="universal-h2 universal-h2-bckg">About me 2</h2>
						<p><span>H</span> e has work appearing or forthcoming in over a dozen venues, including Buzzy Mag, The Spirit of Poe, and the British Fantasy Society journal Dark Horizons. He is also CEO of a company, specializing in custom book publishing and social media marketing services, have created a community for authors to learn and connect.He has work appearing or forthcoming in over a dozen venues, including Buzzy Mag, The Spirit of Poe, and have created a community for authors to learn and connect.</p>
						<h4>Author</h4>
						<p class="p-white">See me</p>
					</div>
				</div>
			</div>
		</div>
		<div class="about-me-bckg"></div>
	</section>
	<!-- About me end -->

	<!-- Books and CD -->
	<section class="fh5co-books">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg">New Books And CD</h2>
			<div class="books">
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="<?php bloginfo('template_url'); ?>/images/books-1.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="./images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Olivani</h4>
					<span class="single-book__price">$15.00</span>
					<!-- star rating -->
					<div class="rating">
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
					</div>
					<!-- star rating end -->
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="<?php bloginfo('template_url'); ?>/images/books-2.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="<?php bloginfo('template_url'); ?>/images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Molleon’s Life</h4>
					<span class="single-book__price">$22.00</span>
					<!-- star rating -->
					<div class="rating">
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
						<span>&#9734;</span>
					</div>
					<!-- star rating end -->
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="<?php bloginfo('template_url'); ?>/images/books-3.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="<?php bloginfo('template_url'); ?>/images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Love is Love</h4>
					<span class="single-book__price">$25.00</span>
				</div>
				<div class="single-book">
					<a href="#" class="single-book__img">
						<img src="<?php bloginfo('template_url'); ?>/images/books-4.jpg" alt="single book and cd">
						<div class="single-book_download">
							<img src="<?php bloginfo('template_url'); ?>/images/download.svg" alt="book image">
						</div>
					</a>
					<h4 class="single-book__title">Give Me Also</h4>
					<span class="single-book__price">$30.00</span>
				</div>
			</div>
			<div class="books-brand-button">
				<a href="#" class="brand-button">View more</a>
			</div>
		</div>
	</section>
	<!-- Books and CD end -->

	<!-- Counter -->
	<div class="fh5co-counter counters">
		<div class="counter-inner site-container">
			<div class="single-count">
				<span class="count" data-count="50">0</span>
				<div class="single-count__text">
					<img src="<?php bloginfo('template_url'); ?>/images/counter-1.png" alt="counter icon">
					<p>Books</p>
				</div>
			</div>
			<div class="single-count">
				<span class="count" data-count="600">0</span>
				<div class="single-count__text">
					<img src="<?php bloginfo('template_url'); ?>/images/counter-2.png" alt="counter icon">
					<p>Pages</p>
				</div>
			</div>
			<div class="single-count">
				<span class="count" data-count="2000">0</span>
				<div class="single-count__text">
					<img src="<?php bloginfo('template_url'); ?>/images/counter-3.png" alt="counter icon">
					<p>Sales</p>
				</div>
			</div>
			<div class="single-count">
				<span class="count" data-count="125">0</span>
				<div class="single-count__text">
					<img src="<?php bloginfo('template_url'); ?>/images/counter-4.png" alt="counter icon">
					<p>Awards</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Counter -->

	<!-- Blog -->
	<section class="fh5co-blog">
		<div class="site-container">
			<h2 class="universal-h2 universal-h2-bckg">My Blog</h2>
			<div class="blog-slider blog-inner">
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="<?php bloginfo('template_url'); ?>/images/blog1.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
						<h4>The Journey Under the Waves</h4>
						<span>On August 28, 2015</span>
						<p>Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
					</div>
				</div>
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="<?php bloginfo('template_url'); ?>/images/blog2.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
						<h4>The Journey Under the Waves</h4>
						<span>On August 28, 2015</span>
						<p>Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
					</div>
				</div>
				<div class="single-blog">
					<div class="single-blog__img">
						<img src="<?php bloginfo('template_url'); ?>/images/blog2.jpg" alt="blog image">
					</div>
					<div class="single-blog__text">
						<h4>The Journey Under the Waves</h4>
						<span>On August 28, 2015</span>
						<p>Quisque vel sapi nec lacus adipis cing bibendum nullam porta lites laoreet aliquam.velitest, tempus a ullamcorper et, lacinia mattis mi. Cras arcu nulla, blandit id cursus et, ultricies eu leo.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog end -->

	<!-- Quotes -->
	<section class="fh5co-quotes">
		<div class="site-container">
			<div class="about-me-slider">
				<div>
					<h2 class="universal-h2 universal-h2-bckg">What People Are Saying</h2>
					<p>“Pudding croissant cake candy canes fruitcake sweet roll pastry gummies sugar plum. Tart pastry danish soufflé donut bear claw chocolate cake marshmallow chupa chups. Jelly danish gummi bears cake donut powder chocolate cake. Bonbon soufflé lollipop biscuit dragée jelly-o. Wafer pastry pudding tiramisu chocolate bar croissant cake. Pie caramels gummies danish.”</p>
					<img src="<?php bloginfo('template_url'); ?>/images/quotes.svg" alt="quotes svg">
					<h4>David Dixon</h4>
					<p>Reader</p>
				</div>
				<div>
					<h2 class="universal-h2 universal-h2-bckg">What People Are Saying 2</h2>
					<p>“Pudding croissant cake candy canes fruitcake sweet roll pastry gummies sugar plum. Tart pastry danish soufflé donut bear claw chocolate cake marshmallow chupa chups. Jelly danish gummi bears cake donut powder chocolate cake. Bonbon soufflé lollipop biscuit dragée jelly-o. Wafer pastry pudding tiramisu chocolate bar croissant cake. Pie caramels gummies danish.”</p>
					<img src="<?php bloginfo('template_url'); ?>/images/quotes.svg" alt="quotes svg">
					<h4>David Dixon</h4>
					<p>Reader</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Quotes end -->

	<!-- Social -->
	<section class="fh5co-social">
		<div class="site-container">
			<div class="social">
				<h5>Follow me!!</h5>
				<div class="social-icons">
					<a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/social-twitter.png" alt="social icon"></a>
					<a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/social-pinterest.png" alt="social icon"></a>
					<a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/social-youtube.png" alt="social icon"></a>
					<a href="#" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/social-twitter.png" alt="social icon"></a>
				</div>
				<h5>Share it!</h5>
			</div>
		</div>
	</section>
	<!-- Social -->
	<?php get_footer();?>
