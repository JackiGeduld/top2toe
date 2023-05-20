@extends('layout')
@section('title', 'Services | Top2Toe - Unisex Salon')
@section('content')
@section('styles')
<style>
.lsvr-service-list-widget__item--current {
    background-color: var(--secondary-color);
}
.lsvr-service-list-widget__item-icon {
    color: var(--secondary-color);
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

            <h1 class="page-header__title">Cosmetics</h1>

            <!-- BREADCRUMBS : begin -->
            <div class="breadcrumbs">
              <div class="breadcrumbs__inner">
                <ul class="breadcrumbs__list">

                  <li class="breadcrumbs__item">
                    <a href="index.html" class="breadcrumbs__link">Home</a>
                  </li>

                  <li class="breadcrumbs__item">
                    <a href="service-archive.html" class="breadcrumbs__link">Our Services</a>
                  </li>

                </ul>

              </div>
            </div>
            <!-- BREADCRUMBS : end -->

          </div>
        </div>
      </div>
    </div>
    <!-- PAGE HEADER : end -->

    <!-- CORE COLUMNS : begin -->
    <div class="core__columns">
      <div class="core__columns-inner">
        <div class="lsvr-container">

          <!-- COLUMNS GRID : begin -->
          <div class="core__columns-grid lsvr-grid">

            <!-- MAIN COLUMN : begin -->
            <div class="core__columns-col core__columns-col--main core__columns-col--left lsvr-grid__col lsvr-grid__col--span-9 lsvr-grid__col--md-span-12">

              <!-- MAIN : begin -->
              <main id="main">
                <div class="main__inner">

                  <!-- PAGE : begin -->
                  <div class="page service-post-page service-post-single">
                    <div class="page__content">

                      <!-- POST : begin -->
                      <article class="post service-post">
                        <div class="post__inner">

                          <!-- POST CONTENT : begin -->
                          <div class="post__content">

                            <p>Cosmetics are substances or products used to enhance or alter the appearance of the face or fragrance and texture of the body. Many cosmetics are designed for use of applying to the face, hair, and body. They are generally mixtures of chemical compounds; some being derived from natural sources (such as coconut oil), and some being synthetics or artificial. Cosmetics applied to the face to enhance its appearance are often called make-up or makeup. Common make-up items include: lipstick, mascara, eye shadow, foundation, blush, and contour. Other common cosmetics can include skin cleansers, body lotions, shampoo and conditioner, hairstyling products (gel, hair spray, etc.), perfume and cologne.</p>

                            <table>
                              <thead>
                                <tr>
                                  <th>Service</th>
                                  <th>Price</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Wash</td>
                                  <td>R150.50</td>
                                </tr>
                                <tr>
                                  <td>Cut and Finish</td>
                                  <td>R199.99</td>
                                </tr>
                                <tr>
                                  <td>Blow Dries</td>
                                  <td>R140</td>
                                </tr>
                                <tr>
                                  <td>Hair Colouring</td>
                                  <td>R120.50</td>
                                </tr>
                                <tr>
                                  <td>Evening Hairdressing</td>
                                  <td>R180.99</td>
                                </tr>
                              </tbody>
                            </table>

                          </div>
                          <!-- POST CONTENT : end -->

                          <!-- POST GALLERY : begin -->
                          <div class="post__gallery">

                            <h3 class="post__gallery-title">Gallery</h3>

                            <ul class="post__image-list lsvr-grid lsvr-grid--4-cols lsvr-grid--md-2-cols lsvr-grid--masonry">

                              <!-- GALLERY IMAGE : begin -->
                              <li class="post__image-item lsvr-grid__col">
                                <a href="images/gallery_01.jpg" class="post__image-link open-in-lightbox">
                                  <img src=" {{ asset('assets/images/gallery_01.jpg') }}" class="post__image" alt="Gallery image">
                                </a>
                              </li>
                              <!-- GALLERY IMAGE : end -->

                              <!-- GALLERY IMAGE : begin -->
                              <li class="post__image-item lsvr-grid__col">
                                <a href="images/gallery_02.jpg" class="post__image-link open-in-lightbox">
                                  <img src="{{ asset('assets/images/gallery_03.jpg') }}" class="post__image" alt="Gallery image">
                                </a>
                              </li>
                              <!-- GALLERY IMAGE : end -->

                              <!-- GALLERY IMAGE : begin -->
                              <li class="post__image-item lsvr-grid__col">
                                <a href="images/gallery_03.jpg" class="post__image-link open-in-lightbox">
                                  <img src="{{ asset('assets/images/gallery_03.jpg') }}" class="post__image" alt="Gallery image">
                                </a>
                              </li>
                              <!-- GALLERY IMAGE : end -->

                              <!-- GALLERY IMAGE : begin -->
                              <li class="post__image-item lsvr-grid__col">
                                <a href="images/gallery_04.jpg" class="post__image-link open-in-lightbox">
                                  <img src="{{ asset('assets/images/gallery_04.jpg') }}" class="post__image" alt="Gallery image">
                                </a>
                              </li>
                              <!-- GALLERY IMAGE : end -->

                              <!-- GALLERY IMAGE : begin -->
                              <li class="post__image-item lsvr-grid__col">
                                <a href="images/gallery_05.jpg" class="post__image-link open-in-lightbox">
                                  <img src="{{ asset('assets/images/gallery_05.jpg') }}" class="post__image" alt="Gallery image">
                                </a>
                              </li>
                              <!-- GALLERY IMAGE : end -->

                              <!-- GALLERY IMAGE : begin -->
                              <li class="post__image-item lsvr-grid__col">
                                <a href="images/gallery_06.jpg" class="post__image-link open-in-lightbox">
                                  <img src="{{ asset('assets/images/gallery_06.jpg') }}" class="post__image" alt="Gallery image">
                                </a>
                              </li>
                              <!-- GALLERY IMAGE : end -->

                              <!-- GALLERY IMAGE : begin -->
                              <li class="post__image-item lsvr-grid__col">
                                <a href="images/gallery_07.jpg" class="post__image-link open-in-lightbox">
                                  <img src="{{ asset('assets/images/gallery_07.jpg') }}" class="post__image" alt="Gallery image">
                                </a>
                              </li>
                              <!-- GALLERY IMAGE : end -->

                              <!-- GALLERY IMAGE : begin -->
                              <li class="post__image-item lsvr-grid__col">
                                <a href="images/gallery_08.jpg" class="post__image-link open-in-lightbox">
                                  <img src="{{ asset('assets/images/gallery_08.jpg') }}" class="post__image" alt="Gallery image">
                                </a>
                              </li>
                              <!-- GALLERY IMAGE : end -->

                            </ul>
                              </div>
                              <!-- POST GALLERY : end -->

                          </div>
                      </article>
                      <!-- POST : end -->

                    </div>
                  </div>
                  <!-- PAGE : end -->

                </div>
              </main>
              <!-- MAIN : end -->

            </div>
            <!-- MAIN COLUMN : end -->

            <!-- SIDEBAR COLUMN : begin -->
            <div class="core__columns-col core__columns-col--sidebar core__columns-col--right lsvr-grid__col lsvr-grid__col--span-3 lsvr-grid__col--md-span-12">

              <!-- SIDEBAR : begin -->
              <aside id="sidebar">
                <div class="sidebar__inner">

                  <!-- LSVR SERVICE LIST WIDGET : begin -->
                  <div class="widget lsvr-service-list-widget">
                    <div class="widget__inner">
                      <h3 class="widget__title">Services</h3>
                      <div class="widget__content">

                        <ul class="lsvr-service-list-widget__list">

                          <!-- SERVICE LIST ITEM : begin -->
                          <li class="lsvr-service-list-widget__item lsvr-service-list-widget__item--has-icon lsvr-service-list-widget__item--current">
                            <span class="lsvr-service-list-widget__item-icon icon-powder-brush" aria-hidden="true"></span>
                            <a href="service-single.html" class="lsvr-service-list-widget__item-link">Cosmetics</a>
                          </li>
                          <!-- SERVICE LIST ITEM : end -->

                          <!-- SERVICE LIST ITEM : begin -->
                          <li class="lsvr-service-list-widget__item lsvr-service-list-widget__item--has-icon">
                            <span class="lsvr-service-list-widget__item-icon icon-hair-dryer" aria-hidden="true"></span>
                            <a href="service-single.html" class="lsvr-service-list-widget__item-link">Hairdressing</a>
                          </li>
                          <!-- SERVICE LIST ITEM : end -->

                          <!-- SERVICE LIST ITEM : begin -->
                          <li class="lsvr-service-list-widget__item lsvr-service-list-widget__item--has-icon">
                            <span class="lsvr-service-list-widget__item-icon icon-beard" aria-hidden="true"></span>
                            <a href="service-single.html" class="lsvr-service-list-widget__item-link">Barber</a>
                          </li>
                          <!-- SERVICE LIST ITEM : end -->

                          <!-- SERVICE LIST ITEM : begin -->
                          <li class="lsvr-service-list-widget__item lsvr-service-list-widget__item--has-icon">
                            <span class="lsvr-service-list-widget__item-icon icon-spa-lotion" aria-hidden="true"></span>
                            <a href="service-single.html" class="lsvr-service-list-widget__item-link">Massages</a>
                          </li>
                          <!-- SERVICE LIST ITEM : end -->

                          <!-- SERVICE LIST ITEM : begin -->
                          <li class="lsvr-service-list-widget__item lsvr-service-list-widget__item--has-icon">
                            <span class="lsvr-service-list-widget__item-icon icon-lotus-flower" aria-hidden="true"></span>
                            <a href="service-single.html" class="lsvr-service-list-widget__item-link">Body Treatments</a>
                          </li>
                          <!-- SERVICE LIST ITEM : end -->

                          <!-- SERVICE LIST ITEM : begin -->
                          <li class="lsvr-service-list-widget__item lsvr-service-list-widget__item--has-icon">
                            <span class="lsvr-service-list-widget__item-icon icon-essence-candle-1" aria-hidden="true"></span>
                            <a href="service-single.html" class="lsvr-service-list-widget__item-link">Aromatherapy</a>
                          </li>
                          <!-- SERVICE LIST ITEM : end -->

                        </ul>

                      </div>
                    </div>
                  </div>
                  <!-- LSVR SERVICE LIST WIDGET : end -->

                </div>
              </aside>
              <!-- SIDEBAR : end -->

            </div>
            <!-- SIDEBAR COLUMN : end -->

          </div>
          <!-- COLUMNS GRID : end -->

        </div>
      </div>
    </div>
    <!-- CORE COLUMNS : end -->

  </div>
</div>
@endsection
