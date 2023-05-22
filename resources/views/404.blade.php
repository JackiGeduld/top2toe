@extends('layout')
@section('title', ' Contact | Top2Toe - Unisex Salon')
@section('content')
@section('styles')

@endsection
<div id="core" class="core--narrow">
				<div class="core__inner">

					<!-- PAGE HEADER : begin -->
					<div class="page-header">
						<div class="page-header__inner">
							<div class="lsvr-container">
								<div class="page-header__content">

									<h1 class="page-header__title page-header__title--center">Page Not Found</h1>

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
										<div class="page error-404-page">
											<div class="page__content">

											    <div class="error-404-page__inner">

											        <h2 class="error-404-page__title">404</h2>

											        <div class="error-404-page__content">

											            <p class="lsvr-alert-message">The server can't find the page you requested. The page has either been moved to a different location or deleted, or you may have mistyped the URL.</p>
											            <p class="error-404-page__button">
											            	<a href="{{route('home')}}" class="error-404-page__button-link">Back to Homepage</a>
											            </p>

											        </div>

											    </div>

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
