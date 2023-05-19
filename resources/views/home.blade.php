@extends('layout')

@section('title', 'Home | Top2Toe - Unisex Salon')

@section('content')
<div id="core" class="core--fullwidth">
  <div class="core__inner">

    <!-- CORE COLUMNS : begin -->
    <div class="core__columns">
      <div class="core__columns-inner">

        <!-- MAIN : begin -->
        <main id="main">
          <div class="main__inner">

            <!-- PAGE : begin -->
            <div class="page">
              <div class="page__content">

                <!-- LSVR SLIDE LIST : begin -->
                <section class="lsvr-slide-list"><!-- To enable autoplay add: data-autoplay="5" -->

                    <div class="lsvr-slide-list__bg">
                        <div class="lsvr-slide-list__inner">
                          <div class="lsvr-slide-list__list">

                            <!-- SLIDE : begin -->
                            <div class="lsvr-slide-list__item">
                                        <div class="lsvr-slide-list__item-bg" style="background-image: url( {{ asset('assets/images/headerphoto.jpg') }} );">
                                            <div class="lsvr-slide-list__item-inner">
                                              <div class="lsvr-slide-list__item-content-wrapper">
                                                <div class="lsvr-slide-list__item-content">
                                                  <div class="lsvr-container">
                                                    <div class="lsvr-slide-list__item-content-inner">

                                                                    <h2 class="lsvr-slide-list__item-title">Welcome to Top2Toe</h2>

                                                                    <div class="lsvr-slide-list__item-text">
                                                                      <p>
                                                                      We are a Unisex Hair salon. We do ladies, gents, boys and girls hair.
                                                                      </p>
                                                                    </div>

                                                                    <p class="lsvr-slide-list__item-button">
                                                                        <a href="{{route('services')}}" class="lsvr-button lsvr-slide-list__item-button-link">See Our Services</a>
                                                                    </p>

                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- SLIDE : end -->

                            <!-- SLIDE : begin -->
                            <div class="lsvr-slide-list__item">
                                        <div class="lsvr-slide-list__item-bg" style="background-image: url( {{ asset('assets/images/slide_02.jpg') }} );">
                                            <div class="lsvr-slide-list__item-inner">
                                              <div class="lsvr-slide-list__item-content-wrapper">
                                                <div class="lsvr-slide-list__item-content">
                                                  <div class="lsvr-container">
                                                    <div class="lsvr-slide-list__item-content-inner">

                                                                    <h2 class="lsvr-slide-list__item-title">Read Professional Beauty Tips</h2>

                                                                    <div class="lsvr-slide-list__item-text">
                                                                      <p>
                                                                        Get inspired by our beauty tips on cosmetics, hair and body treatments
                                                                      </p>
                                                                    </div>

                                                                    <p class="lsvr-slide-list__item-button">
                                                                        <a href="blog-archive.html" class="lsvr-button lsvr-slide-list__item-button-link">See Our Blog</a>
                                                                    </p>

                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- SLIDE : end -->

                            <!-- SLIDE : begin -->
                            <div class="lsvr-slide-list__item">
                                        <div class="lsvr-slide-list__item-bg" style="background-image: url( {{ asset('assets/images/slide_03.jpg') }}  );">
                                            <div class="lsvr-slide-list__item-inner">
                                              <div class="lsvr-slide-list__item-content-wrapper">
                                                <div class="lsvr-slide-list__item-content">
                                                  <div class="lsvr-container">
                                                    <div class="lsvr-slide-list__item-content-inner">

                                                                    <h2 class="lsvr-slide-list__item-title">Hundreds of Happy Clients</h2>

                                                                    <div class="lsvr-slide-list__item-text">
                                                                      <p>
                                                                        Read what some of our customers are saying about our beauty salon
                                                                      </p>
                                                                    </div>

                                                                    <p class="lsvr-slide-list__item-button">
                                                                        <a href="testimonial-archive.html" class="lsvr-button lsvr-slide-list__item-button-link">See Our Testimonials</a>
                                                                    </p>

                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- SLIDE : end -->

                                </div>
                        </div>
                    </div>

                    <!-- SLIDE LIST NAV : begin -->
                    <div class="lsvr-slide-list__nav">
                      <button type="button" class="lsvr-slide-list__nav-button lsvr-slide-list__nav-button--prev">
                        <span class="lsvr-slide-list__nav-button-icon" aria-hidden="true"></span>
                      </button>
                      <button type="button" class="lsvr-slide-list__nav-button lsvr-slide-list__nav-button--next">
                        <span class="lsvr-slide-list__nav-button-icon" aria-hidden="true"></span>
                      </button>
                    </div>
                    <!-- SLIDE LIST NAV : end -->

                </section>
                <!-- LSVR SLIDE LIST : end -->

                <!-- LSVR SERVICES : begin -->
                <section class="lsvr-services lsvr-services--has-dark-background">
                    <div class="lsvr-services__inner">
                        <div class="lsvr-services__content">

                      <!-- SERVICES HEADER : begin -->
                          <div class="lsvr-services__header-wrapper">
                                  <div class="lsvr-container">
                                    <header class="lsvr-services__header">

                                      <h2 class="lsvr-services__title">
                                        <a href="service-archive.html" class="lsvr-services__title-link">Our Services</a>
                                      </h2>

                                      <h3 class="lsvr-services__subtitle">Our salon offers a wide variety of beauty services</h3>

                                    </header>
                                  </div>
                                </div>
                                <!-- SERVICES HEADER : end -->

                                <!-- SERVICE LIST : begin -->
                                <div class="lsvr-services__list-wrapper">
                                  <div class="lsvr-container">
                                    <div class="lsvr-services__list lsvr-grid lsvr-grid--3-cols lsvr-grid--md-2-cols lsvr-grid--sm-1-cols">

                                    <!-- SERVICE ITEM : begin -->
                                      <div class="lsvr-services__item lsvr-grid__col lsvr-services__item--has-thumbnail">
                                        <article class="lsvr-beautyspot-services__post">
                                          <div class="lsvr-services__post-bg" style="background-image: url( {{ asset('assets/images/service_01.jpg') }} ); ">
                                                        <div class="lsvr-services__post-inner">

                                                          <!-- SERVICE ITEM HEADER : begin -->
                                                        <header class="lsvr-services__post-header">
                                                                <div class="lsvr-services__post-header-inner">

                                                                  <span class="lsvr-services__post-icon icon-powder-brush" aria-hidden="true"></span>

                                                                  <h3 class="lsvr-services__post-title">
                                                                    <a href="service-single.html" class="lsvr-services__post-title-link">Cosmetics</a>
                                                                </h3>

                                                                </div>
                                                            </header>
                                                            <!-- SERVICE ITEM HEADER : end -->

                                                            <!-- SERVICE ITEM DESCRIPTION : begin -->
                                                            <div class="lsvr-services__post-description">
                                                                  <div class="lsvr-services__post-description-inner">
                                                                      <p>Cosmetics are substances or products used to enhance or alter the appearance of the face or fragrance and texture of the body.</p>
                                                                  </div>
                                                              </div>
                                                              <!-- SERVICE ITEM DESCRIPTION : end -->

                                                            <a href="service-single.html" class="lsvr-services__post-overlay-link">
                                                                <span class="screen-reader-text">More Info</span>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <!-- SERVICE ITEM : end -->

                                    <!-- SERVICE ITEM : begin -->
                                      <div class="lsvr-services__item lsvr-grid__col lsvr-services__item--has-thumbnail">
                                        <article class="lsvr-beautyspot-services__post">
                                          <div class="lsvr-services__post-bg" style="background-image: url( {{ asset('assets/images/service_02.jpg') }} ); ">
                                                        <div class="lsvr-services__post-inner">

                                                          <!-- SERVICE ITEM HEADER : begin -->
                                                        <header class="lsvr-services__post-header">
                                                                <div class="lsvr-services__post-header-inner">

                                                                  <span class="lsvr-services__post-icon icon-hair-dryer" aria-hidden="true"></span>

                                                                  <h3 class="lsvr-services__post-title">
                                                                    <a href="service-single.html" class="lsvr-services__post-title-link">Hairdressing</a>
                                                                </h3>

                                                                </div>
                                                            </header>
                                                            <!-- SERVICE ITEM HEADER : end -->

                                                            <!-- SERVICE ITEM DESCRIPTION : begin -->
                                                            <div class="lsvr-services__post-description">
                                                                  <div class="lsvr-services__post-description-inner">
                                                                      <p>Hairdressing as an occupation dates back thousands of years. Ancient art drawings and paintings have been discovered.</p>
                                                                  </div>
                                                              </div>
                                                              <!-- SERVICE ITEM DESCRIPTION : end -->

                                                            <a href="service-single.html" class="lsvr-services__post-overlay-link">
                                                                <span class="screen-reader-text">More Info</span>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <!-- SERVICE ITEM : end -->

                                    <!-- SERVICE ITEM : begin -->
                                      <div class="lsvr-services__item lsvr-grid__col lsvr-services__item--has-thumbnail">
                                        <article class="lsvr-beautyspot-services__post">
                                          <div class="lsvr-services__post-bg" style="background-image: url( {{ asset('assets/images/service_03.jpg') }} ); ">
                                                        <div class="lsvr-services__post-inner">

                                                          <!-- SERVICE ITEM HEADER : begin -->
                                                        <header class="lsvr-services__post-header">
                                                                <div class="lsvr-services__post-header-inner">

                                                                  <span class="lsvr-services__post-icon icon-beard" aria-hidden="true"></span>

                                                                  <h3 class="lsvr-services__post-title">
                                                                    <a href="service-single.html" class="lsvr-services__post-title-link">Barber</a>
                                                                </h3>

                                                                </div>
                                                            </header>
                                                            <!-- SERVICE ITEM HEADER : end -->

                                                            <!-- SERVICE ITEM DESCRIPTION : begin -->
                                                            <div class="lsvr-services__post-description">
                                                                  <div class="lsvr-services__post-description-inner">
                                                                      <p>A barber is a person whose occupation is mainly to cut, dress, groom, style and shave men’s and boys’ hair. Most barbers now specialize.</p>
                                                                  </div>
                                                              </div>
                                                              <!-- SERVICE ITEM DESCRIPTION : end -->

                                                            <a href="service-single.html" class="lsvr-services__post-overlay-link">
                                                                <span class="screen-reader-text">More Info</span>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <!-- SERVICE ITEM : end -->

                                    <!-- SERVICE ITEM : begin -->
                                      <div class="lsvr-services__item lsvr-grid__col lsvr-services__item--has-thumbnail">
                                        <article class="lsvr-beautyspot-services__post">
                                          <div class="lsvr-services__post-bg" style="background-image: url( {{ asset('assets/images/service_04.jpg') }} ); ">
                                                        <div class="lsvr-services__post-inner">

                                                          <!-- SERVICE ITEM HEADER : begin -->
                                                        <header class="lsvr-services__post-header">
                                                                <div class="lsvr-services__post-header-inner">

                                                                  <span class="lsvr-services__post-icon icon-spa-lotion" aria-hidden="true"></span>

                                                                  <h3 class="lsvr-services__post-title">
                                                                    <a href="service-single.html" class="lsvr-services__post-title-link">Massages</a>
                                                                </h3>

                                                                </div>
                                                            </header>
                                                            <!-- SERVICE ITEM HEADER : end -->

                                                            <!-- SERVICE ITEM DESCRIPTION : begin -->
                                                            <div class="lsvr-services__post-description">
                                                                  <div class="lsvr-services__post-description-inner">
                                                                      <p>Massage is the manipulation of soft tissues in the body. Massage techniques are commonly applied with hands, fingers, elbows.</p>
                                                                  </div>
                                                              </div>
                                                              <!-- SERVICE ITEM DESCRIPTION : end -->

                                                            <a href="service-single.html" class="lsvr-services__post-overlay-link">
                                                                <span class="screen-reader-text">More Info</span>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <!-- SERVICE ITEM : end -->

                                    <!-- SERVICE ITEM : begin -->
                                      <div class="lsvr-services__item lsvr-grid__col lsvr-services__item--has-thumbnail">
                                        <article class="lsvr-beautyspot-services__post">
                                          <div class="lsvr-services__post-bg" style="background-image: url( {{ asset('assets/images/service_05.jpg') }} ); ">
                                                        <div class="lsvr-services__post-inner">

                                                          <!-- SERVICE ITEM HEADER : begin -->
                                                        <header class="lsvr-services__post-header">
                                                                <div class="lsvr-services__post-header-inner">

                                                                  <span class="lsvr-services__post-icon icon-lotus-flower" aria-hidden="true"></span>

                                                                  <h3 class="lsvr-services__post-title">
                                                                    <a href="service-single.html" class="lsvr-services__post-title-link">Body Treatments</a>
                                                                </h3>

                                                                </div>
                                                            </header>
                                                            <!-- SERVICE ITEM HEADER : end -->

                                                            <!-- SERVICE ITEM DESCRIPTION : begin -->
                                                            <div class="lsvr-services__post-description">
                                                                  <div class="lsvr-services__post-description-inner">
                                                                      <p>A manicure is a cosmetic beauty treatment for the fingernails and hands performed at home or in a nail salon.</p>
                                                                  </div>
                                                              </div>
                                                              <!-- SERVICE ITEM DESCRIPTION : end -->

                                                            <a href="service-single.html" class="lsvr-services__post-overlay-link">
                                                                <span class="screen-reader-text">More Info</span>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <!-- SERVICE ITEM : end -->

                                    <!-- SERVICE ITEM : begin -->
                                      <div class="lsvr-services__item lsvr-grid__col lsvr-services__item--has-thumbnail">
                                        <article class="lsvr-beautyspot-services__post">
                                          <div class="lsvr-services__post-bg" style="background-image: url( {{ asset('assets/images/service_06.jpg') }} ); ">
                                                        <div class="lsvr-services__post-inner">

                                                          <!-- SERVICE ITEM HEADER : begin -->
                                                        <header class="lsvr-services__post-header">
                                                                <div class="lsvr-services__post-header-inner">

                                                                  <span class="lsvr-services__post-icon icon-essence-candle-1" aria-hidden="true"></span>

                                                                  <h3 class="lsvr-services__post-title">
                                                                    <a href="service-single.html" class="lsvr-services__post-title-link">Aromatherapy</a>
                                                                </h3>

                                                                </div>
                                                            </header>
                                                            <!-- SERVICE ITEM HEADER : end -->

                                                            <!-- SERVICE ITEM DESCRIPTION : begin -->
                                                            <div class="lsvr-services__post-description">
                                                                  <div class="lsvr-services__post-description-inner">
                                                                      <p>Aromatherapy uses aromatic materials, including essential oils, and other aroma compounds, with claims for improving.</p>
                                                                  </div>
                                                              </div>
                                                              <!-- SERVICE ITEM DESCRIPTION : end -->

                                                            <a href="service-single.html" class="lsvr-services__post-overlay-link">
                                                                <span class="screen-reader-text">More Info</span>
                                                            </a>

                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                            <!-- SERVICE ITEM : end -->

                                      </div>
                                  </div>
                              </div>
                              <!-- SERVICE LIST : end -->

                        </div>
                    </div>
                </section>
                <!-- LSVR SERVICES : end -->

                <!-- LSVR POSTS : begin -->
                <section class="lsvr-posts">
                    <div class="lsvr-posts__inner">
                          <div class="lsvr-posts__content">

                            <!-- POSTS HEADER : begin -->
                            <div class="lsvr-posts__header-wrapper">
                              <div class="lsvr-container">
                                <header class="lsvr-posts__header">

                                  <h2 class="lsvr-posts__title">
                                    <a href="blog-archive.html" class="lsvr-posts__title-link">Latest Blog Posts</a>
                                  </h2>

                                  <h3 class="lsvr-posts__subtitle">Read our tips about makeup, hairdressing and body treatments</h3>

                                </header>
                              </div>
                            </div>
                            <!-- POSTS HEADER : end -->

                      <!-- POST LIST : begin -->
                      <div class="lsvr-posts__list-wrapper">
                        <div class="lsvr-container">
                                    <div class="lsvr-posts__list lsvr-grid lsvr-grid--masonry lsvr-grid--3-cols lsvr-grid--md-2-cols lsvr-grid--sm-1-cols">

                                      <!-- POST ITEM : begin -->
                                      <div class="lsvr-posts__item lsvr-grid__col">
                                        <article class="lsvr-posts__post">
                                          <div class="lsvr-posts__post-inner">

                                            <!-- POST ITEM THUMB : begin -->
                                                        <p class="lsvr-posts__post-thumbnail">
                                                            <a href="blog-single.html" class="lsvr-posts__post-thumbnail-link">
                                                                <img src="{{ asset('assets/images/blog_01.jpg') }}" class="lsvr-posts__post-thumbnail-img" alt="A spa is a location where mineral-rich spring water">
                                                            </a>
                                                        </p>
                                                        <!-- POST ITEM THUMB : end -->

                                                        <!-- POST ITEM HEADER : begin -->
                                                        <header class="lsvr-posts__post-header">

                                                          <h3 class="lsvr-posts__post-title">
                                                              <a href="blog-single.html" class="lsvr-posts__post-title-link">A spa is a location where mineral-rich spring water</a>
                                                          </h3>

                                                          <p class="lsvr-posts__post-meta">

                                                                  <span class="lsvr-posts__post-meta-date">
                                                                      August 23, 2020
                                                                  </span>

                                                                  <span class="lsvr-posts__post-meta-categories">
                                                                      in <a href="blog-archive.html" class="lsvr-posts__post-meta-link">Spa Treatments</a>
                                                                  </span>

                                                            </p>

                                                      </header>
                                                      <!-- POST ITEM HEADER : end -->

                                                      <!-- POST ITEM CONTENT : begin -->
                                                      <!--div class="lsvr-posts__post-content">

                                                            <p>The term is derived from the name of the town of Spa, Belgium, whose name is known back from Roman times, when the location was called Aquae Spadanae, sometimes incorrectly connected to the Latin word spargere meaning to scatter, sprinkle or moisten.</p>

                                                        </div-->
                                                        <!-- POST ITEM CONTENT : end -->

                                                      <p class="lsvr-posts__post-permalink">
                                                         <a href="blog-single.html" class="lsvr-posts__post-permalink-link">Read More</a>
                                                      </p>

                                                  </div>
                                              </article>
                                          </div>
                                          <!-- POST ITEM : end -->

                                      <!-- POST ITEM : begin -->
                                      <div class="lsvr-posts__item lsvr-grid__col">
                                        <article class="lsvr-posts__post">
                                          <div class="lsvr-posts__post-inner">

                                            <!-- POST ITEM THUMB : begin -->
                                                        <p class="lsvr-posts__post-thumbnail">
                                                            <a href="blog-single.html" class="lsvr-posts__post-thumbnail-link">
                                                                <img src="{{ asset('assets/images/blog_02.jpg') }}" class="lsvr-posts__post-thumbnail-img" alt="The main professionals that provide therapeutic">
                                                            </a>
                                                        </p>
                                                        <!-- POST ITEM THUMB : end -->

                                                        <!-- POST ITEM HEADER : begin -->
                                                        <header class="lsvr-posts__post-header">

                                                          <h3 class="lsvr-posts__post-title">
                                                              <a href="blog-single.html" class="lsvr-posts__post-title-link">The main professionals that provide therapeutic</a>
                                                          </h3>

                                                          <p class="lsvr-posts__post-meta">

                                                                  <span class="lsvr-posts__post-meta-date">
                                                                      August 20, 2020
                                                                  </span>

                                                                  <span class="lsvr-posts__post-meta-categories">
                                                                      in <a href="blog-archive.html" class="lsvr-posts__post-meta-link">Spa Treatments</a>
                                                                  </span>

                                                            </p>

                                                      </header>
                                                      <!-- POST ITEM HEADER : end -->

                                                      <p class="lsvr-posts__post-permalink">
                                                         <a href="blog-single.html" class="lsvr-posts__post-permalink-link">Read More</a>
                                                      </p>

                                                  </div>
                                              </article>
                                          </div>
                                          <!-- POST ITEM : end -->

                                      <!-- POST ITEM : begin -->
                                      <div class="lsvr-posts__item lsvr-grid__col">
                                        <article class="lsvr-posts__post">
                                          <div class="lsvr-posts__post-inner">

                                            <!-- POST ITEM THUMB : begin -->
                                                        <p class="lsvr-posts__post-thumbnail">
                                                            <a href="blog-single.html" class="lsvr-posts__post-thumbnail-link">
                                                                <img src="{{ asset('assets/images/blog_03.jpg') }}" class="lsvr-posts__post-thumbnail-img" alt="The dyeing of hair is an ancient art that involves">
                                                            </a>
                                                        </p>
                                                        <!-- POST ITEM THUMB : end -->

                                                        <!-- POST ITEM HEADER : begin -->
                                                        <header class="lsvr-posts__post-header">

                                                          <h3 class="lsvr-posts__post-title">
                                                              <a href="blog-single.html" class="lsvr-posts__post-title-link">The dyeing of hair is an ancient art that involves</a>
                                                          </h3>

                                                          <p class="lsvr-posts__post-meta">

                                                                  <span class="lsvr-posts__post-meta-date">
                                                                      August 18, 2020
                                                                  </span>

                                                                  <span class="lsvr-posts__post-meta-categories">
                                                                      in <a href="blog-archive.html" class="lsvr-posts__post-meta-link">Hair Care</a>
                                                                  </span>

                                                            </p>

                                                      </header>
                                                      <!-- POST ITEM HEADER : end -->

                                                      <p class="lsvr-posts__post-permalink">
                                                         <a href="blog-single.html" class="lsvr-posts__post-permalink-link">Read More</a>
                                                      </p>

                                                  </div>
                                              </article>
                                          </div>
                                          <!-- POST ITEM : end -->

                                    </div>
                                </div>
                            </div>
                            <!-- POST LIST : end -->

                        </div>
                    </div>
                </section>
                <!-- LSVR POSTS : end -->

                <!-- LSVR TESTIMONIALS : begin -->
                <section class="lsvr-testimonials lsvr-testimonials--has-dark-background">
                    <div class="lsvr-testimonials__inner">
                      <div class="lsvr-testimonials__content">

                        <!-- TESTIMONIALS HEADER : begin -->
                        <div class="lsvr-testimonials__header-wrapper">
                          <div class="lsvr-container">
                                    <header class="lsvr-testimonials__header">

                                          <h2 class="lsvr-testimonials__title">
                                              <a href="testimonial-archive-2.html" class="lsvr-testimonials__title-link">Our Clients Testimonials</a>
                                          </h2>

                                          <h3 class="lsvr-testimonials__subtitle">What our customers are saying about us</h3>

                                      </header>
                                  </div>
                                </div>
                                <!-- TESTIMONIALS HEADER : end -->

                                <!-- TESTIMONIAL LIST : begin -->
                                <div class="lsvr-testimonials__list-wrapper">
                                  <div class="lsvr-container">
                                    <div class="lsvr-testimonials__list lsvr-grid lsvr-grid--masonry lsvr-grid--2-cols lsvr-grid--sm-1-cols">

                                        <!-- TESTIMONIAL ITEM : begin -->
                                          <div class="lsvr-testimonials__item lsvr-grid__col">
                                            <div class="lsvr-testimonials__post">
                                                  <div class="lsvr-testimonials__post-inner">
                                                    <div class="lsvr-testimonials__post-content-wrapper">

                                                      <!-- TESTIMONIAL BLOCKQUOTE : begin -->
                                                      <blockquote class="lsvr-testimonials__post-quote">

                                                        <p>Eye shadow is a pigmented powder/cream or substance used to accentuate the eye area, traditionally on, above, and under the eyelids. Many colours may be used at once and blended together to create different effects using a blending brush.</p>

                                                        <footer class="lsvr-testimonials__post-footer lsvr-testimonials__post-footer--has-thumbnail">

                                                          <p class="lsvr-testimonials__post-thumbnail">
                                                            <a href="testimonial-single.html" class="lsvr-testimonials__post-thumbnail-link">
                                                                            <img src="{{ asset('assets/images/client_01.jpg') }}" class="lsvr-testimonials__post-thumbnail-img" alt="Sandra Olson">
                                                                          </a>
                                                                        </p>

                                                                        <cite class="lsvr-testimonials__post-title">
                                                                          <a href="testimonial-single.html" class="lsvr-testimonials__post-title-link">Sandra Olson</a>
                                                                          <span class="lsvr-testimonials__post-title-description">Pharmacist</span>
                                                                        </cite>

                                                              </footer>

                                                          </blockquote>
                                                          <!-- TESTIMONIAL BLOCKQUOTE : end -->

                                                      </div>
                                                   </div>
                                              </div>
                                          </div>
                                          <!-- TESTIMONIAL ITEM : end -->

                                        <!-- TESTIMONIAL ITEM : begin -->
                                          <div class="lsvr-testimonials__item lsvr-grid__col">
                                            <div class="lsvr-testimonials__post">
                                                  <div class="lsvr-testimonials__post-inner">
                                                    <div class="lsvr-testimonials__post-content-wrapper">

                                                      <!-- TESTIMONIAL BLOCKQUOTE : begin -->
                                                      <blockquote class="lsvr-testimonials__post-quote">

                                                        <p>Bronzer gives skin a bit of color and contours the face for a sharper definition or creates a tan-look. Bronzer is considered to be more of a natural look and can be used for everyday wear. Bronzer enhances the color of the face. It comes in either matte, semi-matte/satin, or shimmer finishes.</p>

                                                        <footer class="lsvr-testimonials__post-footer lsvr-testimonials__post-footer--has-thumbnail">

                                                          <p class="lsvr-testimonials__post-thumbnail">
                                                            <a href="testimonial-single.html" class="lsvr-testimonials__post-thumbnail-link">
                                                                            <img src="{{ asset('assets/images/client_02.jpg') }}" class="lsvr-testimonials__post-thumbnail-img" alt="Donna Kittrell">
                                                                          </a>
                                                                        </p>

                                                                        <cite class="lsvr-testimonials__post-title">
                                                                          <a href="testimonial-single.html" class="lsvr-testimonials__post-title-link">Donna Kittrell</a>
                                                                          <span class="lsvr-testimonials__post-title-description">Receptionist</span>
                                                                        </cite>

                                                              </footer>

                                                          </blockquote>
                                                          <!-- TESTIMONIAL BLOCKQUOTE : end -->

                                                      </div>
                                                   </div>
                                              </div>
                                          </div>
                                          <!-- TESTIMONIAL ITEM : end -->

                                        <!-- TESTIMONIAL ITEM : begin -->
                                          <div class="lsvr-testimonials__item lsvr-grid__col">
                                            <div class="lsvr-testimonials__post">
                                                  <div class="lsvr-testimonials__post-inner">
                                                    <div class="lsvr-testimonials__post-content-wrapper">

                                                      <!-- TESTIMONIAL BLOCKQUOTE : begin -->
                                                      <blockquote class="lsvr-testimonials__post-quote">

                                                        <p>Face powder sets the foundation and under eye concealer, giving it a matte finish while also concealing small flaws or blemishes. It can also be used to bake the foundation, so that it stays on longer and create a matte finish.</p>

                                                        <footer class="lsvr-testimonials__post-footer lsvr-testimonials__post-footer--has-thumbnail">

                                                          <p class="lsvr-testimonials__post-thumbnail">
                                                            <a href="testimonial-single.html" class="lsvr-testimonials__post-thumbnail-link">
                                                                            <img src="{{ asset('assets/images/client_03.jpg') }}" class="lsvr-testimonials__post-thumbnail-img" alt="Angela Chambers">
                                                                          </a>
                                                                        </p>

                                                                        <cite class="lsvr-testimonials__post-title">
                                                                          <a href="testimonial-single.html" class="lsvr-testimonials__post-title-link">Angela Chambers</a>
                                                                          <span class="lsvr-testimonials__post-title-description">Computer analyst</span>
                                                                        </cite>

                                                              </footer>

                                                          </blockquote>
                                                          <!-- TESTIMONIAL BLOCKQUOTE : end -->

                                                      </div>
                                                   </div>
                                              </div>
                                          </div>
                                          <!-- TESTIMONIAL ITEM : end -->

                                        <!-- TESTIMONIAL ITEM : begin -->
                                          <div class="lsvr-testimonials__item lsvr-grid__col">
                                            <div class="lsvr-testimonials__post">
                                                  <div class="lsvr-testimonials__post-inner">
                                                    <div class="lsvr-testimonials__post-content-wrapper">

                                                      <!-- TESTIMONIAL BLOCKQUOTE : begin -->
                                                      <blockquote class="lsvr-testimonials__post-quote">

                                                        <p>Most modern barbershops have special barber chairs, and special equipment for rinsing and washing hair. In some barbershops, people can read magazines or watch TV while the barber works.</p>

                                                        <footer class="lsvr-testimonials__post-footer lsvr-testimonials__post-footer--has-thumbnail">

                                                          <p class="lsvr-testimonials__post-thumbnail">
                                                            <a href="testimonial-single.html" class="lsvr-testimonials__post-thumbnail-link">
                                                                            <img src="{{ asset('assets/images/client_03.jpg') }}" class="lsvr-testimonials__post-thumbnail-img" alt="Thomas Wadsworth">
                                                                          </a>
                                                                        </p>

                                                                        <cite class="lsvr-testimonials__post-title">
                                                                          <a href="testimonial-single.html" class="lsvr-testimonials__post-title-link">Thomas Wadsworth</a>
                                                                          <span class="lsvr-testimonials__post-title-description">Librarian</span>
                                                                        </cite>

                                                              </footer>

                                                          </blockquote>
                                                          <!-- TESTIMONIAL BLOCKQUOTE : end -->

                                                      </div>
                                                   </div>
                                              </div>
                                          </div>
                                          <!-- TESTIMONIAL ITEM : end -->

                                    </div>
                                </div>
                            </div>
                            <!-- TESTIMONIAL LIST : end -->

                          </div>
                      </div>
                </section>
                <!-- LSVR TESTIMONIALS : end -->


              </div>
            </div>
            <!-- PAGE : end -->

          </div>
        </main>
        <!-- MAIN : end -->

      </div>
    </div>
    <!-- CORE COLUMNS : end -->

  </div>
</div>
@endsection
