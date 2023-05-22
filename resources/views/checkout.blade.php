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

									<h1 class="page-header__title">Checkout</h1>

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
										<div class="page product-post-page product-post-order product-post-order--checkout">
											<div class="page__content">

												<!-- PRODUCT CHECKOUT : begin -->
												<form class="product-checkout lsvr-form" method="post" action="product-order-sent.html">

													<!-- VALIDATION ERROR MESSAGE : begin -->
													<div class="lsvr-form__message lsvr-form__message--validation-error lsvr-alert-message lsvr-alert-message--warning">
														<span class="lsvr-alert-message__icon" aria-hidden="true"></span>
														<p>Please make sure all required fields are filled out correctly.</p>
													</div>
													<!-- VALIDATION ERROR MESSAGE : begin -->

													<h3>Billing Address</h3>

													<!-- GRID : begin -->
													<div class="lsvr-grid lsvr-grid--2-cols lsvr-grid--sm-1-cols">

														<!-- GRID COL : begin -->
														<div class="lsvr-grid__col">

												            <p class="lsvr-form__field">
												                <label class="lsvr-form__field-label" for="order-billing-first-name">First Name*</label>
												                <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--required" type="text" name="order-billing-first-name" id="order-billing-first-name">
												            </p>

												        </div>
												        <!-- GRID COL : end -->

														<!-- GRID COL : begin -->
														<div class="lsvr-grid__col">

												            <p class="lsvr-form__field">
												                <label class="lsvr-form__field-label" for="order-billing-last-name">Last Name*</label>
												                <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--required" type="text" name="order-billing-last-name" id="order-billing-last-name">
												            </p>

												        </div>
												        <!-- GRID COL : end -->

											        </div>
											        <!-- GRID : end -->

													<!-- GRID : begin -->
													<div class="lsvr-grid lsvr-grid--2-cols lsvr-grid--sm-1-cols">

														<!-- GRID COL : begin -->
														<div class="lsvr-grid__col">

												            <p class="lsvr-form__field">
												                <label class="lsvr-form__field-label" for="order-billing-email">Your Email*</label>
												                <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--email lsvr-form__field-input--required" type="text" name="order-billing-email" id="order-billing-email">
												            </p>

												        </div>
												        <!-- GRID COL : end -->

														<!-- GRID COL : begin -->
														<div class="lsvr-grid__col">

												            <p class="lsvr-form__field">
												                <label class="lsvr-form__field-label" for="order-billing-phone">Your Phone</label>
												                <input class="lsvr-form__field-input lsvr-form__field-input--text" type="text" name="order-billing-phone" id="order-billing-phone">
												            </p>

												        </div>
												        <!-- GRID COL : end -->

											        </div>
											        <!-- GRID : end -->

													<!-- GRID : begin -->
													<div class="lsvr-grid lsvr-grid--2-cols lsvr-grid--sm-1-cols">

														<!-- GRID COL : begin -->
														<div class="lsvr-grid__col">

												            <p class="lsvr-form__field">
												                <label class="lsvr-form__field-label" for="order-billing-address">Address*</label>
												                <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--required" type="text" name="order-billing-address" id="order-billing-address">
												            </p>

												        </div>
												        <!-- GRID COL : end -->

														<!-- GRID COL : begin -->
														<div class="lsvr-grid__col">

												            <p class="lsvr-form__field">
												                <label class="lsvr-form__field-label" for="order-billing-city">City*</label>
												                <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--required" type="text" name="order-billing-city" id="order-billing-city">
												            </p>

												        </div>
												        <!-- GRID COL : end -->

											        </div>
											        <!-- GRID : end -->

													<!-- GRID : begin -->
													<div class="lsvr-grid lsvr-grid--2-cols lsvr-grid--sm-1-cols">

														<!-- GRID COL : begin -->
														<div class="lsvr-grid__col">

												            <p class="lsvr-form__field">
												                <label class="lsvr-form__field-label" for="order-billing-country">Country*</label>
												                <select class="lsvr-form__field-input lsvr-form__field-input--select lsvr-form__field-input--required" name="order-billing-country" id="order-billing-country">
												                	<option value="country1">Country 1</option>
												                	<option value="country2">Country 2</option>
												                	<option value="country3">Country 3</option>
												                	<option value="country4">Country 4</option>
												                	<option value="country5">Country 5</option>
												                	<option value="country6">Country 6</option>
											                	</select>

												            </p>

												        </div>
												        <!-- GRID COL : end -->

														<!-- GRID COL : begin -->
														<div class="lsvr-grid__col">

												            <p class="lsvr-form__field">
												                <label class="lsvr-form__field-label" for="order-billing-postcode">Postcode*</label>
												                <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--required" type="text" name="order-billing-postcode" id="order-billing-postcode">
												            </p>

												        </div>
												        <!-- GRID COL : end -->

											        </div>
											        <!-- GRID : end -->

											        <!-- SPACER : begin -->
											        <hr class="lsvr-spacer lsvr-spacer--small">
											        <!-- SPACER : end -->

											        <!-- SHIPPING CHECKBOX : begin -->
											        <p class="lsvr-form__field">
											        	<label for="order-shipping-checkbox" class="lsvr-form__field-label lsvr-form__field-label--checkbox">
											        		<input type="checkbox" value="true" class="lsvr-form__field-input lsvr-form__field-input--checkbox" name="order-shipping-checkbox" id="order-shipping-checkbox" checked="checked" data-toggle-element="order-form-shipping-fields">
											        		<span>Shipping address is the same as billing address</span>
											        	</label>
										        	</p>
									        		<!-- SHIPPING CHECKBOX : end -->

									        		<!-- SHIPPING FIELDS : begin -->
									        		<div id="order-form-shipping-fields" style="display: none;">

												        <!-- SPACER : begin -->
												        <hr class="lsvr-spacer lsvr-spacer--small">
												        <!-- SPACER : end -->

														<h3>Shipping Address</h3>

														<!-- GRID : begin -->
														<div class="lsvr-grid lsvr-grid--2-cols lsvr-grid--sm-1-cols">

															<!-- GRID COL : begin -->
															<div class="lsvr-grid__col">

													            <p class="lsvr-form__field">
													                <label class="lsvr-form__field-label" for="order-shipping-first-name">First Name*</label>
													                <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--required" type="text" name="order-shipping-first-name" id="order-shipping-first-name" disabled="disabled">
													            </p>

													        </div>
													        <!-- GRID COL : end -->

															<!-- GRID COL : begin -->
															<div class="lsvr-grid__col">

													            <p class="lsvr-form__field">
													                <label class="lsvr-form__field-label" for="order-shipping-last-name">Last Name*</label>
													                <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--required" type="text" name="order-shipping-last-name" id="order-shipping-last-name" disabled="disabled">
													            </p>

													        </div>
													        <!-- GRID COL : end -->

												        </div>
												        <!-- GRID : end -->

														<!-- GRID : begin -->
														<div class="lsvr-grid lsvr-grid--2-cols lsvr-grid--sm-1-cols">

															<!-- GRID COL : begin -->
															<div class="lsvr-grid__col">

													            <p class="lsvr-form__field">
													                <label class="lsvr-form__field-label" for="order-shipping-email">Your Email*</label>
													                <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--email lsvr-form__field-input--required" type="text" name="order-shipping-email" id="order-shipping-email" disabled="disabled">
													            </p>

													        </div>
													        <!-- GRID COL : end -->

															<!-- GRID COL : begin -->
															<div class="lsvr-grid__col">

													            <p class="lsvr-form__field">
													                <label class="lsvr-form__field-label" for="order-shipping-phone">Your Phone</label>
													                <input class="lsvr-form__field-input lsvr-form__field-input--text" type="text" name="order-shipping-phone" id="order-shipping-phone" disabled="disabled">
													            </p>

													        </div>
													        <!-- GRID COL : end -->

												        </div>
												        <!-- GRID : end -->

														<!-- GRID : begin -->
														<div class="lsvr-grid lsvr-grid--2-cols lsvr-grid--sm-1-cols">

															<!-- GRID COL : begin -->
															<div class="lsvr-grid__col">

													            <p class="lsvr-form__field">
													                <label class="lsvr-form__field-label" for="order-shipping-address">Address*</label>
													                <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--required" type="text" name="order-shipping-address" id="order-shipping-address" disabled="disabled">
													            </p>

													        </div>
													        <!-- GRID COL : end -->

															<!-- GRID COL : begin -->
															<div class="lsvr-grid__col">

													            <p class="lsvr-form__field">
													                <label class="lsvr-form__field-label" for="order-shipping-city">City*</label>
													                <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--required" type="text" name="order-shipping-city" id="order-shipping-city" disabled="disabled">
													            </p>

													        </div>
													        <!-- GRID COL : end -->

												        </div>
												        <!-- GRID : end -->

														<!-- GRID : begin -->
														<div class="lsvr-grid lsvr-grid--2-cols lsvr-grid--sm-1-cols">

															<!-- GRID COL : begin -->
															<div class="lsvr-grid__col">

													            <p class="lsvr-form__field">
													                <label class="lsvr-form__field-label" for="order-shipping-country">Country*</label>
													                <select class="lsvr-form__field-input lsvr-form__field-input--select lsvr-form__field-input--required" name="order-shipping-country" id="order-shipping-country" disabled="disabled">
													                	<option value="country1">Country 1</option>
													                	<option value="country2">Country 2</option>
													                	<option value="country3">Country 3</option>
													                	<option value="country4">Country 4</option>
													                	<option value="country5">Country 5</option>
													                	<option value="country6">Country 6</option>
												                	</select>

													            </p>

													        </div>
													        <!-- GRID COL : end -->

															<!-- GRID COL : begin -->
															<div class="lsvr-grid__col">

													            <p class="lsvr-form__field">
													                <label class="lsvr-form__field-label" for="order-shipping-postcode">Postcode*</label>
													                <input class="lsvr-form__field-input lsvr-form__field-input--text lsvr-form__field-input--required" type="text" name="order-shipping-postcode" id="order-shipping-postcode" disabled="disabled">
													            </p>

													        </div>
													        <!-- GRID COL : end -->

												        </div>
												        <!-- GRID : end -->

									        		</div>
									        		<!-- SHIPPING FIELDS : end -->

											        <!-- SPACER : begin -->
											        <hr class="lsvr-spacer lsvr-spacer--small">
											        <!-- SPACER : end -->

													<!-- GRID : begin -->
													<div class="lsvr-grid lsvr-grid--2-cols lsvr-grid--sm-1-cols">

														<!-- GRID COL : begin -->
														<div class="lsvr-grid__col">

															<h3>Choose Payment Method</h3>

												            <ul class="lsvr-form__field lsvr-form__field--list">

												            	<li class="lsvr-form__field-list-item">
													                <label for="order-payment-method-1" class="lsvr-form__field-label lsvr-form__field-label--radio">
													                	<input class="lsvr-form__field-input lsvr-form__field-input--radio" type="radio" value="bank-transfer" name="order-payment-method" id="order-payment-method-1" checked="checked">
												                		<span>Bank Transfer</span>
													                </label>
												            	</li>

												            	<li class="lsvr-form__field-list-item">
													                <label for="order-payment-method-2" class="lsvr-form__field-label lsvr-form__field-label--radio">
													                	<input class="lsvr-form__field-input lsvr-form__field-input--radio" type="radio" value="credit-card" name="order-payment-method" id="order-payment-method-2">
												                		<span>Credit Card</span>
													                </label>
												            	</li>

												            </ul>

												        </div>
												        <!-- GRID COL : end -->

														<!-- GRID COL : begin -->
														<div class="lsvr-grid__col">

															<h3>Choose Delivery Method</h3>

												            <ul class="lsvr-form__field lsvr-form__field--list">

												            	<li class="lsvr-form__field-list-item">
													                <label for="order-delivery-method-1" class="lsvr-form__field-label lsvr-form__field-label--radio">
													                	<input class="lsvr-form__field-input lsvr-form__field-input--radio" type="radio" value="bank-transfer" name="order-delivery-method" id="order-delivery-method-1" checked="checked">
												                		<span>Home Delivery</span>
													                </label>
												            	</li>

												            	<li class="lsvr-form__field-list-item">
													                <label for="order-delivery-method-2" class="lsvr-form__field-label lsvr-form__field-label--radio">
													                	<input class="lsvr-form__field-input lsvr-form__field-input--radio" type="radio" value="credit-card" name="order-delivery-method" id="order-delivery-method-2">
												                		<span>Pickup at Store</span>
													                </label>
												            	</li>

												            </ul>

												        </div>
												        <!-- GRID COL : end -->

											        </div>
											        <!-- GRID : end -->

											        <!-- SEPARATOR : begin -->
											        <hr class="lsvr-separator">
											        <!-- SEPARATOR : end -->

											        <h3>Order Summary</h3>

								        			<!-- DEFINITION LIST : begin -->
													<dl class="lsvr-definition-list__list">

														<!-- ITEM : begin -->
													    <dt class="lsvr-definition-list__item-title">
													    	Almond Supple Skin Oil (x1)
													    </dt>
													    <dd class="lsvr-definition-list__item-text">R35.50</dd>
													    <!-- ITEM : end -->

														<!-- ITEM : begin -->
													    <dt class="lsvr-definition-list__item-title">
													    	Almond Tonic Body Oil (x1)
													    </dt>
													    <dd class="lsvr-definition-list__item-text">R36.50</dd>
													    <!-- ITEM : end -->

														<!-- ITEM : begin -->
													    <dt class="lsvr-definition-list__item-title">
													    	Aroma Volumizing Mask (x1)
													    </dt>
													    <dd class="lsvr-definition-list__item-text">R27.20</dd>
													    <!-- ITEM : end -->

														<!-- ITEM : begin -->
													    <dt class="lsvr-definition-list__item-title">
													    	Aromachology Repairing Mask (x1)
													    </dt>
													    <dd class="lsvr-definition-list__item-text">R22.40</dd>
													    <!-- ITEM : end -->

													</dl>
													<!-- DEFINITION LIST : end -->

													<!-- ORDER FOOTER : begin -->
													<div class="product-order__footer">

														<!-- FOOTER BACK : begin -->
														<p class="product-order__footer-back">
															<a href="product-cart.html" class="product-order__footer-back-link">Back to Cart</a>
														</p>
														<!-- FOOTER BACK : end -->

														<!-- FOOTER CHECKOUT : begin -->
														<p class="product-order__footer-checkout">
															<button type="submit" class="product-order__footer-checkout-btn lsvr-button">Place Order</button>
														</p>
														<!-- FOOTER CHECKOUT : end -->

													</div>
													<!-- ORDER FOOTER : end -->

												</form>
												<!-- PRODUCT CHECKOUT : end -->

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
