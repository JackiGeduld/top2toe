@extends('layout')
@section('title', 'Services | Top2Toe - Unisex Salon')
@section('content')
@section('styles')
<style>
img {
    border-radius: 10px
  }
  .service-post-archive .post__permalink-link {
    box-shadow: 0 1px 0 0 var(--secondary-color);
}
.service-post-archive .post__permalink-link:active {
    box-shadow: 0 1px 0 0 var(--secondary-color);
}
</style>
@endsection
<div id="core">
  <div class="core__inner">

    <!-- PAGE HEADER : begin -->
    <div class="page-header">
      <div class="page-header__inner">
        <div class="lsvr-container">
          <div class="page-header__content">

            <h1 class="page-header__title">Our Services</h1>

          </div>
        </div>
      </div>
    </div>
    <!-- PAGE HEADER : end -->

    <!-- CORE COLUMNS : begin -->
    <div class="core__columns">
      <div class="core__columns-inner">
        <div class="lsvr-container">

          <!-- MAIN : begin -->
          <main id="main">
            <div class="main__inner">

              <!-- PAGE : begin -->
              <div class="page service-post-page service-post-archive">
                <div class="page__content">

                  <!-- POST ARCHIVE LIST : begin -->
                  <div class="post-archive__list lsvr-grid lsvr-grid--masonry lsvr-grid--3-cols lsvr-grid--md-2-cols lsvr-grid--sm-1-cols">

                    <!-- POST COLUMN : begin -->
                    <div class="lsvr-grid__col">

                      <!-- POST : begin -->
                      <article class="post service-post post--has-thumbnail">
                        <div class="post__inner">

                          <!-- POST THUMB : begin -->
                          <p class="post__thumbnail">
                            <a href="{{ route('services_individual', ['slug' => 'cosmetics']) }}" class="post__thumbnail-link">
                              <img src="{{ asset('assets/images/service_01.jpg') }}" class="post__thumbnail-img" alt="Cosmetics">
                            </a>
                          </p>
                          <!-- POST THUMB : end -->

                          <!-- POST ICON : begin -->
                          <span class="post__icon" aria-hidden="true">
                            <span class="post__icon-image icon-powder-brush"></span>
                          </span>
                          <!-- POST ICON : end -->

                          <!-- POST HEADER : begin -->
                          <header class="post__header">
                            <h2 class="post__title">
                              <a href="service-single.html" class="post__title-link">Cosmetics</a>
                            </h2>
                          </header>
                          <!-- POST HEADER : end -->

                          <!-- POST CONTENT : begin -->
                          <div class="post__content">
                            <p>Cosmetics are substances or products used to enhance or alter the appearance of the face or fragrance and texture of the body.</p>
                            <p class="post__permalink">
                              <a href="{{ route('services_individual', ['slug' => 'cosmetics']) }}" class="post__permalink-link">More Info</a>
                            </p>
                          </div>
                          <!-- POST CONTENT : end -->

                                </div>
                            </article>
                            <!-- POST : end -->

                        </div>
                        <!-- POST COLUMN : end -->

                    <!-- POST COLUMN : begin -->
                    <div class="lsvr-grid__col">

                      <!-- POST : begin -->
                      <article class="post service-post post--has-thumbnail">
                        <div class="post__inner">

                          <!-- POST THUMB : begin -->
                          <p class="post__thumbnail">
                            <a href="service-single.html" class="post__thumbnail-link">
                              <img src="{{ asset('assets/images/service_02.jpg') }}" class="post__thumbnail-img" alt="Hairdressing">
                            </a>
                          </p>
                          <!-- POST THUMB : end -->

                          <!-- POST ICON : begin -->
                          <span class="post__icon" aria-hidden="true">
                            <span class="post__icon-image icon-hair-dryer"></span>
                          </span>
                          <!-- POST ICON : end -->

                          <!-- POST HEADER : begin -->
                          <header class="post__header">
                            <h2 class="post__title">
                              <a href="service-single.html" class="post__title-link">Hairdressing</a>
                            </h2>
                          </header>
                          <!-- POST HEADER : end -->

                          <!-- POST CONTENT : begin -->
                          <div class="post__content">
                            <p>Hairdressing as an occupation dates back thousands of years. Ancient art drawings and paintings have been discovered.</p>
                            <p class="post__permalink">
                              <a href="service-single.html" class="post__permalink-link">More Info</a>
                            </p>
                          </div>
                          <!-- POST CONTENT : end -->

                                </div>
                            </article>
                            <!-- POST : end -->

                        </div>
                        <!-- POST COLUMN : end -->

                    <!-- POST COLUMN : begin -->
                    <div class="lsvr-grid__col">

                      <!-- POST : begin -->
                      <article class="post service-post post--has-thumbnail">
                        <div class="post__inner">

                          <!-- POST THUMB : begin -->
                          <p class="post__thumbnail">
                            <a href="service-single.html" class="post__thumbnail-link">
                              <img src="{{ asset('assets/images/service_03.jpg') }}" class="post__thumbnail-img" alt="Barber">
                            </a>
                          </p>
                          <!-- POST THUMB : end -->

                          <!-- POST ICON : begin -->
                          <span class="post__icon" aria-hidden="true">
                            <span class="post__icon-image icon-beard"></span>
                          </span>
                          <!-- POST ICON : end -->

                          <!-- POST HEADER : begin -->
                          <header class="post__header">
                            <h2 class="post__title">
                              <a href="service-single.html" class="post__title-link">Barber</a>
                            </h2>
                          </header>
                          <!-- POST HEADER : end -->

                          <!-- POST CONTENT : begin -->
                          <div class="post__content">
                            <p>A barber is a person whose occupation is mainly to cut, dress, groom, style and shave men’s and boys’ hair. Most barbers now specialize.</p>
                            <p class="post__permalink">
                              <a href="service-single.html" class="post__permalink-link">More Info</a>
                            </p>
                          </div>
                          <!-- POST CONTENT : end -->

                                </div>
                            </article>
                            <!-- POST : end -->

                        </div>
                        <!-- POST COLUMN : end -->

                    <!-- POST COLUMN : begin -->
                    <div class="lsvr-grid__col">

                      <!-- POST : begin -->
                      <article class="post service-post post--has-thumbnail">
                        <div class="post__inner">

                          <!-- POST THUMB : begin -->
                          <p class="post__thumbnail">
                            <a href="service-single.html" class="post__thumbnail-link">
                              <img src="{{ asset('assets/images/service_04.jpg') }} " class="post__thumbnail-img" alt="Massages">
                            </a>
                          </p>
                          <!-- POST THUMB : end -->

                          <!-- POST ICON : begin -->
                          <span class="post__icon" aria-hidden="true">
                            <span class="post__icon-image icon-spa-lotion"></span>
                          </span>
                          <!-- POST ICON : end -->

                          <!-- POST HEADER : begin -->
                          <header class="post__header">
                            <h2 class="post__title">
                              <a href="service-single.html" class="post__title-link">Massages</a>
                            </h2>
                          </header>
                          <!-- POST HEADER : end -->

                          <!-- POST CONTENT : begin -->
                          <div class="post__content">
                            <p>Massage is the manipulation of soft tissues in the body. Massage techniques are commonly applied with hands, fingers, elbows.</p>
                            <p class="post__permalink">
                              <a href="service-single.html" class="post__permalink-link">More Info</a>
                            </p>
                          </div>
                          <!-- POST CONTENT : end -->

                                </div>
                            </article>
                            <!-- POST : end -->

                        </div>
                        <!-- POST COLUMN : end -->

                    <!-- POST COLUMN : begin -->
                    <div class="lsvr-grid__col">

                      <!-- POST : begin -->
                      <article class="post service-post post--has-thumbnail">
                        <div class="post__inner">

                          <!-- POST THUMB : begin -->
                          <p class="post__thumbnail">
                            <a href="service-single.html" class="post__thumbnail-link">
                              <img src="{{ asset('assets/images/service_05.jpg') }}" class="post__thumbnail-img" alt="Body Treatments">
                            </a>
                          </p>
                          <!-- POST THUMB : end -->

                          <!-- POST ICON : begin -->
                          <span class="post__icon" aria-hidden="true">
                            <span class="post__icon-image icon-lotus-flower"></span>
                          </span>
                          <!-- POST ICON : end -->

                          <!-- POST HEADER : begin -->
                          <header class="post__header">
                            <h2 class="post__title">
                              <a href="service-single.html" class="post__title-link">Body Treatments</a>
                            </h2>
                          </header>
                          <!-- POST HEADER : end -->

                          <!-- POST CONTENT : begin -->
                          <div class="post__content">
                            <p>A manicure is a cosmetic beauty treatment for the fingernails and hands performed at home or in a nail salon.</p>
                            <p class="post__permalink">
                              <a href="service-single.html" class="post__permalink-link">More Info</a>
                            </p>
                          </div>
                          <!-- POST CONTENT : end -->

                                </div>
                            </article>
                            <!-- POST : end -->

                        </div>
                        <!-- POST COLUMN : end -->

                    <!-- POST COLUMN : begin -->
                    <div class="lsvr-grid__col">

                      <!-- POST : begin -->
                      <article class="post service-post post--has-thumbnail">
                        <div class="post__inner">

                          <!-- POST THUMB : begin -->
                          <p class="post__thumbnail">
                            <a href="service-single.html" class="post__thumbnail-link">
                              <img src="{{ asset('assets/images/service_06.jpg') }}" class="post__thumbnail-img" alt="Aromatherapy">
                            </a>
                          </p>
                          <!-- POST THUMB : end -->

                          <!-- POST ICON : begin -->
                          <span class="post__icon" aria-hidden="true">
                            <span class="post__icon-image icon-essence-candle-1"></span>
                          </span>
                          <!-- POST ICON : end -->

                          <!-- POST HEADER : begin -->
                          <header class="post__header">
                            <h2 class="post__title">
                              <a href="service-single.html" class="post__title-link">Aromatherapy</a>
                            </h2>
                          </header>
                          <!-- POST HEADER : end -->

                          <!-- POST CONTENT : begin -->
                          <div class="post__content">
                            <p>Aromatherapy uses aromatic materials, including essential oils, and other aroma compounds, with claims for improving.</p>
                            <p class="post__permalink">
                              <a href="service-single.html" class="post__permalink-link">More Info</a>
                            </p>
                          </div>
                          <!-- POST CONTENT : end -->

                                </div>
                            </article>
                            <!-- POST : end -->

                        </div>
                        <!-- POST COLUMN : end -->

                    </div>
                    <!-- POST ARCHIVE LIST : end -->

                </div>
              </div>
              <!-- PAGE : end -->

            </div>
          </main>
          <!-- MAIN : end -->

        </div>
      </div>
    </div>
    <!-- CORE COLUMNS : end -->

  </div>
</div>
@endsection
