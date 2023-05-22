@extends('layout')

@section('title', $title . ' | Top2Toe - Unisex Salon')

@section('styles')

@endsection
@section('content')
<div id="core" class="core--narrow">
				<div class="core__inner">

					<!-- PAGE HEADER : begin -->
					<div class="page-header">
						<div class="page-header__inner">
							<div class="lsvr-container">
								<div class="page-header__content">

									<h1 class="page-header__title">Your Cart</h1>

									<!-- BREADCRUMBS : begin -->
									<div class="breadcrumbs">
										<div class="breadcrumbs__inner">
											<ul class="breadcrumbs__list">

												<li class="breadcrumbs__item">
													<a href="index.html" class="breadcrumbs__link">Home</a>
												</li>

												<li class="breadcrumbs__item">
													<a href="product-archive.html" class="breadcrumbs__link">Store</a>
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

								<!-- MAIN : begin -->
								<main id="main">
									<div class="main__inner">

										<!-- PAGE : begin -->
										<div class="page product-post-page product-post-order product-post-order--cart">
											<div class="page__content">

												<!-- PRODUCT CART : begin -->
												<form class="product-cart" method="post" action="product-checkout.html">

													<!-- CART LIST : begin -->
													<ul class="product-cart__list">

														<!-- CART ITEM : begin -->
														<li class="product-cart__item">

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--thumb">

																<!-- ITEM THUMB : begin -->
																<p class="product-cart__item-thumb">
																	<a href="product-single.html" class="product-cart__item-thumb-link">
																		<img src="{{ asset('assets/images/product_06_th.jpg') }}" class="product-cart__item-thumb-img" alt="Almond Supple Skin Oil">
																	</a>
																</p>
																<!-- ITEM THUMB : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--title">

																<!-- ITEM TITLE : begin -->
																<h4 class="product-cart__item-title">
																	<a href="product-single.html" class="product-cart__item-title-link">Almond Supple Skin Oil</a>
																</h4>
																<!-- ITEM TITLE : end -->

																<!-- ITEM STATUS : begin -->
																<p class="product-cart__item-status product-cart__item-status--in-stock"><!-- You can use "in-stock", "on-order" and "unavailable" modifiers -->
																	In Stock
																</p>
																<!-- ITEM STATUS : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--quantity">

																<!-- ITEM QUANTITY : begin -->
																<p class="product-cart__item-quantity quantity-field">

																	<input type="text" class="quantity-field__input" value="1">

																	<button type="button" class="quantity-field__btn quantity-field__btn--add" title="Add one">
																		<span class="quantity-field__btn-icon" aria-hidden="true"></span>
																	</button>

																	<button type="button" class="quantity-field__btn quantity-field__btn--remove" title="Remove one">
																		<span class="quantity-field__btn-icon" aria-hidden="true"></span>
																	</button>

																</p>
																<!-- ITEM QUANTITY : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--price">

																<!-- ITEM PRICE : begin -->
																<p class="product-cart__item-price">
																	$35.50
																</p>
																<!-- ITEM PRICE : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--remove">

																<!-- ITEM REMOVE : begin -->
																<p class="product-cart__item-remove">
																	<button type="button" class="product-cart__item-remove-btn">
																		<span class="product-cart__item-remove-btn-icon" aria-hidden="true"></span>
																	</button>
																</p>
																<!-- ITEM REMOVE : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

														</li>
														<!-- CART ITEM : end -->

														<!-- CART ITEM : begin -->
														<li class="product-cart__item">

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--thumb">

																<!-- ITEM THUMB : begin -->
																<p class="product-cart__item-thumb">
																	<a href="product-single.html" class="product-cart__item-thumb-link">
																		<img src="{{ asset('assets/images/product_02_th.jpg') }}" class="product-cart__item-thumb-img" alt="Almond Tonic Body Oil">
																	</a>
																</p>
																<!-- ITEM THUMB : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--title">

																<!-- ITEM TITLE : begin -->
																<h4 class="product-cart__item-title">
																	<a href="product-single.html" class="product-cart__item-title-link">Almond Tonic Body Oil</a>
																</h4>
																<!-- ITEM TITLE : end -->

																<!-- ITEM STATUS : begin -->
																<p class="product-cart__item-status product-cart__item-status--on-order">
																	On Order
																</p>
																<!-- ITEM STATUS : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--quantity">

																<!-- ITEM QUANTITY : begin -->
																<p class="product-cart__item-quantity quantity-field">

																	<input type="text" class="quantity-field__input" value="1">

																	<button type="button" class="quantity-field__btn quantity-field__btn--add" title="Add one">
																		<span class="quantity-field__btn-icon" aria-hidden="true"></span>
																	</button>

																	<button type="button" class="quantity-field__btn quantity-field__btn--remove" title="Remove one">
																		<span class="quantity-field__btn-icon" aria-hidden="true"></span>
																	</button>

																</p>
																<!-- ITEM QUANTITY : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--price">

																<!-- ITEM PRICE : begin -->
																<p class="product-cart__item-price">
																	$36.50
																</p>
																<!-- ITEM PRICE : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--remove">

																<!-- ITEM REMOVE : begin -->
																<p class="product-cart__item-remove">
																	<button type="button" class="product-cart__item-remove-btn">
																		<span class="product-cart__item-remove-btn-icon" aria-hidden="true"></span>
																	</button>
																</p>
																<!-- ITEM REMOVE : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

														</li>
														<!-- CART ITEM : end -->

														<!-- CART ITEM : begin -->
														<li class="product-cart__item">

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--thumb">

																<!-- ITEM THUMB : begin -->
																<p class="product-cart__item-thumb">
																	<a href="product-single.html" class="product-cart__item-thumb-link">
																		<img src="{{ asset('assets/images/product_03_th.jpg') }}" class="product-cart__item-thumb-img" alt="Aroma Volumizing Mask">
																	</a>
																</p>
																<!-- ITEM THUMB : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--title">

																<!-- ITEM TITLE : begin -->
																<h4 class="product-cart__item-title">
																	<a href="product-single.html" class="product-cart__item-title-link">Aroma Volumizing Mask</a>
																</h4>
																<!-- ITEM TITLE : end -->

																<!-- ITEM STATUS : begin -->
																<p class="product-cart__item-status product-cart__item-status--in-stock">
																	In Stock
																</p>
																<!-- ITEM STATUS : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--quantity">

																<!-- ITEM QUANTITY : begin -->
																<p class="product-cart__item-quantity quantity-field">

																	<input type="text" class="quantity-field__input" value="1">

																	<button type="button" class="quantity-field__btn quantity-field__btn--add" title="Add one">
																		<span class="quantity-field__btn-icon" aria-hidden="true"></span>
																	</button>

																	<button type="button" class="quantity-field__btn quantity-field__btn--remove" title="Remove one">
																		<span class="quantity-field__btn-icon" aria-hidden="true"></span>
																	</button>

																</p>
																<!-- ITEM QUANTITY : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--price">

																<!-- ITEM PRICE : begin -->
																<p class="product-cart__item-price">
																	$27.20
																</p>
																<!-- ITEM PRICE : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--remove">

																<!-- ITEM REMOVE : begin -->
																<p class="product-cart__item-remove">
																	<button type="button" class="product-cart__item-remove-btn">
																		<span class="product-cart__item-remove-btn-icon" aria-hidden="true"></span>
																	</button>
																</p>
																<!-- ITEM REMOVE : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

														</li>
														<!-- CART ITEM : end -->

														<!-- CART ITEM : begin -->
														<li class="product-cart__item">

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--thumb">

																<!-- ITEM THUMB : begin -->
																<p class="product-cart__item-thumb">
																	<a href="product-single.html" class="product-cart__item-thumb-link">
																		<img src="{{ asset('assets/images/product_04_th.jpg') }}" class="product-cart__item-thumb-img" alt="Aromachology Repairing Mask">
																	</a>
																</p>
																<!-- ITEM THUMB : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--title">

																<!-- ITEM TITLE : begin -->
																<h4 class="product-cart__item-title">
																	<a href="product-single.html" class="product-cart__item-title-link">Aromachology Repairing Mask</a>
																</h4>
																<!-- ITEM TITLE : end -->

																<!-- ITEM STATUS : begin -->
																<p class="product-cart__item-status product-cart__item-status--in-stock">
																	In Stock
																</p>
																<!-- ITEM STATUS : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--quantity">

																<!-- ITEM QUANTITY : begin -->
																<p class="product-cart__item-quantity quantity-field">

																	<input type="text" class="quantity-field__input" value="1">

																	<button type="button" class="quantity-field__btn quantity-field__btn--add" title="Add one">
																		<span class="quantity-field__btn-icon" aria-hidden="true"></span>
																	</button>

																	<button type="button" class="quantity-field__btn quantity-field__btn--remove" title="Remove one">
																		<span class="quantity-field__btn-icon" aria-hidden="true"></span>
																	</button>

																</p>
																<!-- ITEM QUANTITY : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--price">

																<!-- ITEM PRICE : begin -->
																<p class="product-cart__item-price">
																	$22.40
																</p>
																<!-- ITEM PRICE : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

															<!-- ITEM ITEM COL : begin -->
															<div class="product-cart__item-col product-cart__item-col--remove">

																<!-- ITEM REMOVE : begin -->
																<p class="product-cart__item-remove">
																	<button type="button" class="product-cart__item-remove-btn">
																		<span class="product-cart__item-remove-btn-icon" aria-hidden="true"></span>
																	</button>
																</p>
																<!-- ITEM REMOVE : end -->

															</div>
															<!-- ITEM ITEM COL : end -->

														</li>
														<!-- CART ITEM : end -->

													</ul>
													<!-- CART LIST : end -->

													<!-- CART SUMMARY : begin -->
													<div class="product-cart__summary">

														<!-- CART COUPON : begin -->
														<p class="product-cart__coupon">
															<input type="text" class="product-cart__coupon-input" placeholder="Coupon Code">
															<button type="button" class="product-cart__coupon-btn lsvr-button lsvr-button--type-2">Apply Coupon</button>
														</p>
														<!-- CART COUPON : end -->

														<!-- CART TOTAL : begin -->
														<p class="product-cart__total">
															<span class="product-cart__total-label">Total</span>
															<strong class="product-cart__total-price">$121.60</strong>
														</p>
														<!-- CART TOTAL : end -->

													</div>
													<!-- CART SUMMARY : end -->

													<!-- ORDER FOOTER : begin -->
													<div class="product-order__footer">

														<!-- FOOTER BACK : begin -->
														<p class="product-order__footer-back">
															<a href="product-archive.html" class="product-order__footer-back-link">Back to Store</a>
														</p>
														<!-- FOOTER BACK : end -->

														<!-- FOOTER CHECKOUT : begin -->
														<p class="product-order__footer-checkout">
															<button type="submit" class="product-order__footer-checkout-btn lsvr-button">To Checkout</button>
														</p>
														<!-- FOOTER CHECKOUT : end -->

													</div>
													<!-- ORDER FOOTER : end -->

												</form>
												<!-- PRODUCT CART : end -->

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
