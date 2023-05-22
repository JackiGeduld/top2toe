@extends('layout')

@section('title', $title . ' | Top2Toe - Unisex Salon')
@section('styles')
<style>
.person-post-archive .post__thumbnail-link {
    background-color: var(--secondary-color);
    background-image: var(--secondary-color);
}

}
</style>
@endsection
@section('content')
<div id="core">
				<div class="core__inner">

					<!-- PAGE HEADER : begin -->
					<div class="page-header">
						<div class="page-header__inner">
							<div class="lsvr-container">
								<div class="page-header__content">

									<h1 class="page-header__title">Our Team</h1>

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
										<div class="page person-post-page person-post-archive">
											<div class="page__content">

												<!-- POST ARCHIVE LIST : begin -->
												<div class="post-archive__list lsvr-grid lsvr-grid--masonry lsvr-grid--3-cols lsvr-grid--md-2-cols lsvr-grid--sm-1-cols" style="position: relative; height: 430px;">

													<!-- POST COLUMN : begin -->
													<div class="lsvr-grid__col" style="position: absolute; left: 0px; top: 0px;">

														<!-- POST : begin -->
														<article class="post person-post">
															<div class="post__inner">

																<!-- POST THUMB : begin -->
																<p class="post__thumbnail">
																	<a href="#" class="post__thumbnail-link">
																		<img src=" {{ asset('assets/images/person_01.jpg ') }} " class="post__thumbnail-img" alt="Desiree Nel">
																	</a>
																</p>
																<!-- POST THUMB : end -->

																<!-- POST HEADER : begin -->
																<header class="post__header">

																	<h2 class="post__title">
																		<a href="" class="post__title-link">Desiree Nel</a>
																	</h2>

																	<h4 class="post__subtitle">Chief Hairstylist</h4>

																</header>
																<!-- POST HEADER : end -->

																<!-- POST CONTENT : begin -->
																<div class="post__content">
																	<p>Cosmetics that are meant to be used on the face and eye area are usually applied with a brush, a makeup sponge.</p>
																</div>
																<!-- POST CONTENT : end -->

																<!-- POST SOCIAL : begin -->
																<ul class="post__social-list">

																	<li class="post__social-item">
																		<a href="#twitter" class="post__social-link" target="_blank" title="Twitter">
																			<span class="post__social-icon person-social-icon person-social-icon--twitter" aria-hidden="true"></span>
																		</a>
																	</li>

																	<li class="post__social-item">
																		<a href="#facebook" class="post__social-link" target="_blank" title="Facebook">
																			<span class="post__social-icon person-social-icon person-social-icon--facebook" aria-hidden="true"></span>
																		</a>
																	</li>

																</ul>
																<!-- POST SOCIAL : end -->

															</div>
														</article>
														<!-- POST : end -->

													</div>
													<!-- POST COLUMN : end -->

													<!-- POST COLUMN : begin -->
													<div class="lsvr-grid__col" style="position: absolute; left: 318.984px; top: 0px;">

														<!-- POST : begin -->
														<article class="post person-post">
															<div class="post__inner">

																<!-- POST THUMB : begin -->
																<p class="post__thumbnail">
																	<a href="#" class="post__thumbnail-link">
																		<img src="{{ asset('assets/images/person_02.jpg ') }} " class="post__thumbnail-img" alt="Rudy Martinez">
																	</a>
																</p>
																<!-- POST THUMB : end -->

																<!-- POST HEADER : begin -->
																<header class="post__header">

																	<h2 class="post__title">
																		<a href="#" class="post__title-link">Rudy Martinez</a>
																	</h2>

																	<h4 class="post__subtitle">Body Treatments</h4>

																</header>
																<!-- POST HEADER : end -->

																<!-- POST CONTENT : begin -->
																<div class="post__content">
																	<p>The European spas provided various other diversions for guests after the bath, including gambling, horse racing.</p>
																</div>
																<!-- POST CONTENT : end -->

																<!-- POST SOCIAL : begin -->
																<ul class="post__social-list">

																	<li class="post__social-item">
																		<a href="#twitter" class="post__social-link" target="_blank" title="Twitter">
																			<span class="post__social-icon person-social-icon person-social-icon--twitter" aria-hidden="true"></span>
																		</a>
																	</li>

																	<li class="post__social-item">
																		<a href="#facebook" class="post__social-link" target="_blank" title="Facebook">
																			<span class="post__social-icon person-social-icon person-social-icon--facebook" aria-hidden="true"></span>
																		</a>
																	</li>

																</ul>
																<!-- POST SOCIAL : end -->

															</div>
														</article>
														<!-- POST : end -->

													</div>
													<!-- POST COLUMN : end -->

													<!-- POST COLUMN : begin -->
													<div class="lsvr-grid__col" style="position: absolute; left: 637.968px; top: 0px;">

														<!-- POST : begin -->
														<article class="post person-post">
															<div class="post__inner">

																<!-- POST THUMB : begin -->
																<p class="post__thumbnail">
																	<a href="person-single.html" class="post__thumbnail-link">
																		<img src=" {{ asset('assets/images/person_03.jpg ') }}" class="post__thumbnail-img" alt="Matthew Hernandez">
																	</a>
																</p>
																<!-- POST THUMB : end -->

																<!-- POST HEADER : begin -->
																<header class="post__header">

																	<h2 class="post__title">
																		<a href="person-single.html" class="post__title-link">Matthew Hernandez</a>
																	</h2>

																	<h4 class="post__subtitle">Barber and Hairdresser</h4>

																</header>
																<!-- POST HEADER : end -->

																<!-- POST CONTENT : begin -->
																<div class="post__content">
																	<p>The barber pole, featuring red and white spiraling stripes, symbolized different aspects of the craft.</p>
																</div>
																<!-- POST CONTENT : end -->

																<!-- POST SOCIAL : begin -->
																<ul class="post__social-list">

																	<li class="post__social-item">
																		<a href="#twitter" class="post__social-link" target="_blank" title="Twitter">
																			<span class="post__social-icon person-social-icon person-social-icon--twitter" aria-hidden="true"></span>
																		</a>
																	</li>

																	<li class="post__social-item">
																		<a href="#facebook" class="post__social-link" target="_blank" title="Facebook">
																			<span class="post__social-icon person-social-icon person-social-icon--facebook" aria-hidden="true"></span>
																		</a>
																	</li>

																</ul>
																<!-- POST SOCIAL : end -->

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
