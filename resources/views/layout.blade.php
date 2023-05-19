
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from demo.lsvr.sk/html/beautyspot/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 10:12:03 GMT -->
<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title')</title>

        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <!-- STYLESHEETS : begin -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/default.css') }}"><!-- Default styles generated from assets/scss/general.scss (do not edit) -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/general.css') }}"><!-- Default color scheme generated from assets/scss/color-schemes/default.scss (change to other pre-defined or custom color scheme) -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}"><!-- Place your own CSS into this file -->
		<!-- STYLESHEETS : end -->
<style>

:root {
  --primary-color: #3d3d3d;   /* Replace with your primary color value */
  --secondary-color: #D82028; /* Replace with your secondary color value */
}
#header {
    background-color: var(--primary-color);
}
.header-cta__button {
    color: #fff;
    background-color: var(--secondary-color);
}

.lsvr-button {
    color: #FFF;
    background-color: var(--secondary-color);
}

.lsvr-slide-list__nav-button {
    color: #FFF;
    background-color: var(--secondary-color);
}

.lsvr-services__post-description {
    background-color: rgba(216,32,40,0.95);
}

a{
  color: var(--secondary-color);
}

.lsvr-posts__header:before {
    background-color: var(--secondary-color) !important;
    background-image: none;
}

.lsvr-testimonials__header:before {
      background-color: var(--secondary-color) !important;
        background-image: none;
}

.lsvr-services__header:before {
  background-color: var(--secondary-color) !important;
    background-image: none;
}

.header-logo {
    max-width: 100%;
}

.lsvr-services__post-description {
    border-radius: 10px;
}
.lsvr-services__item--has-thumbnail .lsvr-services__post-inner {
  border-radius: 10px;
}

.lsvr-services__post-bg {
    border-radius: 10px;
}
.lsvr-slide-list__item-content-inner {
  border-top-right-radius: 10px;

}
.header-cta__button:hover {
    box-shadow: 0 0 0 1px var(--secondary-color);
}
.header-branding{
	margin-bottom: 109px;
}
.lsvr-feature__icon {
    color: var(--secondary-color);
}

input, select, textarea {
  border-radius: 10px;
}
.service-post-archive .post__icon {

    background-color: var(--secondary-color);
}
</style>
@yield('styles')
	</head>
	<body>

		<!-- WRAPPER : begin -->
		<div id="wrapper">

			<!-- HEADER : begin -->
				<header id="header" class="header--has-languages header--has-search header--has-cta header--has-contact header--has-social-links header--has-collision-detection header--has-expanded-panel"
  >
				<div class="header__inner">
					<div class="header__content">

						<!-- HEADER LANGUAGES : begin -->
						<div class="header-languages">

							<span class="screen-reader-text">Choose language</span>
							<ul class="header-languages__list">

								<li class="header-languages__item header-languages__item--active">
									<a href="#en" class="header-languages__item-link">EN</a>
								</li>

								<li class="header-languages__item">
									<a href="#de" class="header-languages__item-link">DE</a>
								</li>

								<li class="header-languages__item">
									<a href="#es" class="header-languages__item-link">ES</a>
								</li>

							</ul>

							<button type="button" class="header-languages__toggle" title="Choose language">
								<span class="header-languages__toggle-icon icon-close" aria-hidden="true"></span>
								<span class="header-languages__toggle-label">EN</span>
							</button>

						</div>
						<!-- HEADER LANGUAGES : end -->

						<!-- HEADER BRANDING : begin -->
						<div class="header-branding">
							<div class="header-branding__inner">

								<!-- HEADER LOGO : begin -->
								<div class="header-logo">
									<a href="/" class="header-logo__link">
										<img src="{{ asset('assets/images/mainlogo.png') }}" class="header-logo__image" alt="Logo" width="200px">
									</a>
								</div>
								<!-- HEADER LOGO : end -->

								<!-- HEADER TITLE TAGLINE : begin -->
								<div class="header-title-tagline">

									<div class="header-title">
										<a href="/" class="header-title__link">Hair Salon</a>
									</div>

									<p class="header-tagline">
										Together We Stand Up Again
									</p>

								</div>
								<!-- HEADER TITLE TAGLINE : end -->

							</div>
						</div>
						<!-- HEADER BRANDING : end -->

						<!-- HEADER MENU : begin -->
						<nav class="header-menu" aria-label="Header menu">

							<ul class="header-menu__list" role="menu">

								<!-- MENU ITEM : begin -->
								<li class="header-menu__item header-menu__item--current header-menu__item--has-children">

									<span class="header-menu__item-link-wrapper">
										<a href="/" class="header-menu__item-link">Home</a>
									</span>

									<button type="button" class="header-menu__submenu-toggle" title="Expand submenu">
										<span class="header-menu__submenu-toggle-icon" aria-hidden="true"></span>
									</button>

									<ul class="header-menu__submenu">

										<li class="header-menu__item header-menu__item--current">
											<a href="index.html" class="header-menu__item-link" role="menuitem">Home 1</a>
										</li>

										<li class="header-menu__item">
											<a href="index-2.html" class="header-menu__item-link" role="menuitem">Home 2</a>
										</li>

									</ul>

								</li>
								<!-- MENU ITEM : end -->

								<!-- MENU ITEM : begin -->
								<li class="header-menu__item">

									<span class="header-menu__item-link-wrapper">
										<a href="{{route('services')}}" class="header-menu__item-link">Our Services</a>
									</span>

								</li>
								<!-- MENU ITEM : end -->

								<!-- MENU ITEM : begin -->
								<li class="header-menu__item header-menu__item--has-children">

									<span class="header-menu__item-link-wrapper">
										<a href="product-archive.html" class="header-menu__item-link">Store</a>
									</span>

									<button type="button" class="header-menu__submenu-toggle" title="Expand submenu">
										<span class="header-menu__submenu-toggle-icon" aria-hidden="true"></span>
									</button>

									<ul class="header-menu__submenu">

										<li class="header-menu__item">
											<a href="product-archive.html" class="header-menu__item-link" role="menuitem">Products</a>
										</li>

										<li class="header-menu__item">
											<a href="product-cart.html" class="header-menu__item-link" role="menuitem">Cart</a>
										</li>

										<li class="header-menu__item">
											<a href="product-checkout.html" class="header-menu__item-link" role="menuitem">Checkout</a>
										</li>

									</ul>

								</li>
								<!-- MENU ITEM : end -->

								<!-- MENU ITEM : begin -->
								<li class="header-menu__item header-menu__item--has-children">

									<span class="header-menu__item-link-wrapper">
										<a href="blog-archive.html" class="header-menu__item-link">About Us</a>
									</span>

									<button type="button" class="header-menu__submenu-toggle" title="Expand submenu">
										<span class="header-menu__submenu-toggle-icon" aria-hidden="true"></span>
									</button>

									<ul class="header-menu__submenu">

										<li class="header-menu__item">
											<a href="blog-archive.html" class="header-menu__item-link" role="menuitem">Blog</a>
										</li>

										<li class="header-menu__item">
											<a href="gallery-archive.html" class="header-menu__item-link" role="menuitem">Galleries</a>
										</li>

										<li class="header-menu__item">
											<a href="person-archive.html" class="header-menu__item-link" role="menuitem">Our Team</a>
										</li>

										<li class="header-menu__item">
											<a href="testimonial-archive.html" class="header-menu__item-link" role="menuitem">Testimonials</a>
										</li>

										<li class="header-menu__item">
											<a href="faq-archive.html" class="header-menu__item-link" role="menuitem">FAQ</a>
										</li>

									</ul>

								</li>
								<!-- MENU ITEM : end -->

								<!-- MENU ITEM : begin -->
								<li class="header-menu__item">

									<span class="header-menu__item-link-wrapper">
										<a href="contact.html" class="header-menu__item-link">Contact</a>
									</span>

								</li>
								<!-- MENU ITEM : end -->

								<!-- MENU ITEM : begin -->
								<li class="header-menu__item header-menu__item--has-children">

									<span class="header-menu__item-link-wrapper">
										<a href="typography.html" class="header-menu__item-link">More</a>
									</span>

									<button type="button" class="header-menu__submenu-toggle" title="Expand submenu">
										<span class="header-menu__submenu-toggle-icon" aria-hidden="true"></span>
									</button>

									<ul class="header-menu__submenu">

										<li class="header-menu__item">
											<a href="typography.html" class="header-menu__item-link" role="menuitem">Typography</a>
										</li>

										<li class="header-menu__item">
											<a href="elements.html" class="header-menu__item-link" role="menuitem">Elements</a>
										</li>

										<li class="header-menu__item">
											<a href="sidebar-left.html" class="header-menu__item-link" role="menuitem">Left Sidebar</a>
										</li>

										<li class="header-menu__item">
											<a href="sidebar-right.html" class="header-menu__item-link" role="menuitem">Right Sidebar</a>
										</li>

										<li class="header-menu__item">
											<a href="search-results.html" class="header-menu__item-link" role="menuitem">Search Results</a>
										</li>

										<li class="header-menu__item">
											<a href="404.html" class="header-menu__item-link" role="menuitem">Error 404 Page</a>
										</li>

									</ul>

								</li>
								<!-- MENU ITEM : end -->

							</ul>

						</nav>
						<!-- HEADER MENU : end -->

						<!-- HEADER SEARCH : begin -->
						<div class="header-search">
							<div class="header-search__form">

								<!-- SEARCH FORM : begin -->
								<form class="search-form" action="https://demo.lsvr.sk/html/beautyspot/search-results.html" method="get" role="search">
									<div class="search-form__inner">
										<div class="search-form__input-holder">

											<input class="search-form__input" type="text" name="s" placeholder="Search..." value="">

											<button class="search-form__button" type="submit" title="Search">
												<span class="search-form__button-icon" aria-hidden="true"></span>
											</button>

										</div>
									</div>
								</form>
								<!-- SEARCH FORM : end -->

							</div>

							<button type="button" class="header-search__toggle"
								title="Search">
								<span class="header-search__toggle-icon" aria-hidden="true"></span>
							</button>

						</div>
						<!-- HEADER SEARCH : end -->

						<!-- HEADER PANEL : begin -->
						<div class="header-panel">
							<div class="header-panel__inner">

								<!-- HEADER PANEL TOP : begin -->
								<div class="header-panel__top">
									<div class="header-panel__top-inner">

										<!-- HEADER CTA : begin -->
										<div class="header-cta">
											<a href="{{route('appointment.form')}}" class="header-cta__button">Make An Appointment</a>
										</div>
										<!-- HEADER CTA : end -->

										<!-- HEADER CONTACT : begin -->
										<div class="header-contact">
											<div class="header-contact__inner">

												<ul class="header-contact__list">

													<!-- CONTACT ITEM : begin -->
													<li class="header-contact__item header-contact__item--has-icon">
														<span class="header-contact__item-icon icon-phone" aria-hidden="true"></span>
														<a href="tel:+27219138243">+27 21 913 8243</a>
													</li>
													<!-- CONTACT ITEM : end -->

													<!-- CONTACT ITEM : begin -->
													<li class="header-contact__item header-contact__item--has-icon">
														<span class="header-contact__item-icon icon-envelope-o" aria-hidden="true"></span>
														<a href="mailto:example@example.com">example@example.com</a>
													</li>
													<!-- CONTACT ITEM : end -->

													<!-- CONTACT ITEM : begin -->
													<li class="header-contact__item header-contact__item--has-icon">
														<span class="header-contact__item-icon icon-map-marker" aria-hidden="true"></span>
														<p>
															BeautySpot<br>
															9015 Sunset Boulevard<br>
															Ca 90069
														</p>
													</li>
													<!-- CONTACT ITEM : end -->

													<!-- CONTACT ITEM : begin -->
													<li class="header-contact__item header-contact__item--has-icon">
														<span class="header-contact__item-icon icon-clock-o" aria-hidden="true"></span>
														<dl>
															<dt>Mo. - Fr.:</dt>
															<dd>10am - 4pm</dd>
															<dt>Sa.:</dt>
															<dd>9am - 2pm</dd>
															<dt>Su.:</dt>
															<dd>Closed</dd>
														</dl>
													</li>
													<!-- CONTACT ITEM : end -->

												</ul>

											</div>
										</div>
										<!-- HEADER CONTACT : end -->

									</div>
								</div>
								<!-- HEADER PANEL TOP : end -->

								<!-- HEADER PANEL BOTTOM : begin -->
								<div class="header-panel__bottom">
									<div class="header-panel__bottom-inner">

										<!-- HEADER SOCIAL : begin -->
										<div class="header-social">
											<ul class="header-social__list">

												<!-- SOCIAL ITEM : begin -->
												<li class="header-social__item header-social__item--facebook">
													<a class="header-social__item-link" href="#facebook" target="_blank" title="Facebook">
														<span class="header-social__icon icon-facebook" aria-hidden="true"></span>
													</a>
												</li>
												<!-- SOCIAL ITEM : end -->

												<!-- SOCIAL ITEM : begin -->
												<li class="header-social__item header-social__item--instagram">
													<a class="header-social__item-link" href="#instagram" target="_blank" title="Instagram">
														<span class="header-social__icon icon-instagram" aria-hidden="true"></span>
													</a>
												</li>
												<!-- SOCIAL ITEM : end -->

												<!-- SOCIAL ITEM : begin -->
												<li class="header-social__item header-social__item--twitter">
													<a class="header-social__item-link" href="#twitter" target="_blank" title="Twitter">
														<span class="header-social__icon icon-twitter" aria-hidden="true"></span>
													</a>
												</li>
												<!-- SOCIAL ITEM : end -->

												<!-- SOCIAL ITEM : begin -->
												<li class="header-social__item header-social__item--youtube">
													<a class="header-social__item-link" href="#youtube" target="_blank" title="YouTube">
														<span class="header-social__icon icon-youtube" aria-hidden="true"></span>
													</a>
												</li>
												<!-- SOCIAL ITEM : end -->

											</ul>
										</div>
										<!-- HEADER SOCIAL : end -->

										<span class="header-panel__bottom-decor" aria-hidden="true"></span>

										<!-- HEADER CART : begin -->
										<div class="header-cart">

											<a href="product-cart.html"
												class="header-cart__button">
												<span class="header-cart__button-icon" aria-hidden="true"></span>
												<span class="header-cart__button-info">3</span>
											</a>

										</div>
										<!-- HEADER CART : end -->

									</div>
								</div>
								<!-- HEADER PANEL BOTTOM : end -->

							</div>

							<button type="button" class="header-panel__toggle">
								<span class="header-panel__toggle-icon" aria-hidden="true"></span>
							</button>

						</div>
						<!-- HEADER PANEL : end -->

						<button type="button" class="header-mobile-toggle">
							<span class="header-mobile-toggle__icon" aria-hidden="true"></span>
						</button>

					</div>
				</div>
			</header>
			<!-- HEADER : end -->

			<!-- CORE : begin -->


      @yield('content')
			<!-- CORE : end -->

			<!-- FOOTER : begin -->
			<footer id="footer">
				<div class="footer__inner">

					<!-- FOOTER WIDGETS : begin -->
					<div class="footer-widgets" style="background-image: url( 'images/footer_bg.jpg' )">
						<div class="footer-widgets__inner">
							<div class="lsvr-container">

								<!-- WIDGETS GRID : begin -->
								<div class="footer-widgets__grid lsvr-grid">

									<!-- GRID COLUMN : begin -->
									<div class="footer-widgets__grid-col lsvr-grid__col lsvr-grid__col--span-8 lsvr-grid__col--md-span-12">

										<!-- TEXT WIDGET : begin -->
										<div class="widget lsvr-text-widget">
											<div class="widget__inner">

												<h3 class="widget__title">About  Top<span style="color: var(--secondary-color);">2</span>Toe</h3>
												<div class="widget__content">

													<p>We are a Unisex Hair salon. We do ladies, gents, boys and girls hair. We retail Schwartzkopf hair p</p>


												</div>

											</div>
										</div>
										<!-- TEXT WIDGET : end -->

									</div>
									<!-- GRID COLUMN : end -->

									<!-- GRID COLUMN : begin -->
									<div class="footer-widgets__grid-col lsvr-grid__col lsvr-grid__col--span-4 lsvr-grid__col--md-span-12">

										<!-- IMAGE GRID WIDGET : begin -->
										<div class="widget lsvr-image-grid-widget">
											<div class="widget__inner">

												<h3 class="widget__title">We Endorse These Brands</h3>
												<div class="widget__content">

													<div class="lsvr-images-widget__grid lsvr-grid lsvr-grid--4-cols lsvr-grid--sm-2-cols">

														<div class="lsvr-grid__col">
															<p><img src="{{ asset('assets/images/brand_01.png') }}" alt="Brand 1"></p>
														</div>

														<div class="lsvr-grid__col">
															<p><img src="{{ asset('assets/images/brand_02.png') }}" alt="Brand 2"></p>
														</div>

														<div class="lsvr-grid__col">
															<p><img src="{{ asset('assets/images/brand_03.png') }}" alt="Brand 3"></p>
														</div>

														<div class="lsvr-grid__col">
															<p><img src="{{ asset('assets/images/brand_04.png') }}" alt="Brand 4"></p>
														</div>

													</div>

												</div>

											</div>
										</div>
										<!-- IMAGE GRID WIDGET : end -->

									</div>
									<!-- GRID COLUMN : end -->

								</div>
								<!-- WIDGETS GRID : end -->

							</div>
						</div>
					</div>
					<!-- FOOTER WIDGETS : end -->


		</div>
		<!-- WRAPPER : end -->

		<!-- SCRIPTS : begin -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    		<script src="{{ asset('assets/css/third-party-scripts.min.js') }}" type="text/javascript"></script>
    		<script src="{{ asset('assets/css/scripts.js') }}" type="text/javascript"></script>
		<!-- SCRIPTS : end -->

	</body>

<!-- Mirrored from demo.lsvr.sk/html/beautyspot/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2023 10:12:16 GMT -->
</html>
