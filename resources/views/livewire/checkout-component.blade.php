<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>checkout</span></li>
				</ul>
			</div>
            <div class="row">
            <div class="col-md-12">

			<div class=" main-content-area">
			<form >
				<div class="wrap-address-billing">
					<h3 class="box-title">Billing Address</h3>
                    <div class="addressing-address">
						<p class="row-in-form">
							<label for="fname">first name<span>*</span></label>
							<input  type="text" name="fname" value="" placeholder="Your name" wire:model="firstname">
						</p>
						<p class="row-in-form">
							<label for="lname">last name<span>*</span></label>
							<input  type="text" name="lname" value="" placeholder="Your last name" wire:model="lastname">
						</p>
						<p class="row-in-form">
							<label for="email">Email Addreess:</label>
							<input  type="email" name="email" value="" placeholder="Type your email" wire:model="email">
						</p>
						<p class="row-in-form">
							<label for="phone">Phone number<span>*</span></label>
							<input  type="number" name="phone" value="" placeholder="10 digits format" wire:model="mobile">
						</p>
						<p class="row-in-form">
							<label for="add">Address:</label>
							<input  type="text" name="add" value="" placeholder="Street at apartment number" wire:model="address">
						</p>
						<p class="row-in-form">
							<label for="country">Country<span>*</span></label>
							<input  type="text" name="country" value="" placeholder="United States" wire:model="country">
						</p>
					
						<p class="row-in-form">
							<label for="city">Town / City<span>*</span></label>
							<input  type="text" name="city" value="" placeholder="City name" wire:model="city">
						</p>
						<p class="row-in-form fill-wife">
							
							<label class="checkbox-field">
								<input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_to_different">
								<span>Ship to a different address?</span>
							</label>
						</p>
                      </div>
				</div>
                </div>
                </div>

                @if($ship_to_different)

                <div class="col-md-12">
                <div class="wrap-address-billing">
					<h3 class="box-title">Shipping Address</h3>
                    <div class="addressing-address">
					<p class="row-in-form">
							<label for="fname">first name<span>*</span></label>
							<input  type="text" name="fname" value="" placeholder="Your name" wire:model="s_firstname">
						</p>
						<p class="row-in-form">
							<label for="lname">last name<span>*</span></label>
							<input  type="text" name="lname" value="" placeholder="Your last name" wire:model="s_lastname">
						</p>
						<p class="row-in-form">
							<label for="email">Email Addreess:</label>
							<input  type="email" name="email" value="" placeholder="Type your email" wire:model="s_email">
						</p>
						<p class="row-in-form">
							<label for="phone">Phone number<span>*</span></label>
							<input  type="number" name="phone" value="" placeholder="10 digits format" wire:model="s_mobile">
						</p>
						<p class="row-in-form">
							<label for="add">Address:</label>
							<input  type="text" name="add" value="" placeholder="Street at apartment number" wire:model="s_address">
						</p>
						<p class="row-in-form">
							<label for="country">Country<span>*</span></label>
							<input  type="text" name="country" value="" placeholder="United States" wire:model="s_country">
						</p>
					
						<p class="row-in-form">
							<label for="city">Town / City<span>*</span></label>
							<input  type="text" name="city" value="" placeholder="City name" wire:model="s_city">
						</p>
						
                     </div>
				</div>
                </div>
                </div>

                @endif

                </div>


				<div class="summary summary-checkout">
					<div class="summary-item payment-method">
						<h4 class="title-box">Payment Method</h4>
						<p class="summary-info"><span class="title">Check / Money order</span></p>
						<p class="summary-info"><span class="title">Credit Cart (saved)</span></p>
						<div class="choose-payment-methods">
							<label class="payment-method">
								<input name="payment-method" id="payment-method-bank" value="bank" type="radio">
								<span>Direct Bank Transder</span>
								<span class="payment-desc">But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-visa" value="visa" type="radio">
								<span>visa</span>
								<span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
								<span>Paypal</span>
								<span class="payment-desc">You can pay with your credit</span>
								<span class="payment-desc">card if you don't have a paypal account</span>
							</label>
						</div>
						<p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">$100.00</span></p>
						<!-- <a href="thankyou.html" class="btn btn-medium">Place order now</a> -->
						<button type="submit" class="btn btn-medium">Place order now</button>
					</div>
					<div class="summary-item shipping-method">
						<h4 class="title-box f-title">Shipping method</h4>
						<p class="summary-info"><span class="title">Flat Rate</span></p>
						<p class="summary-info"><span class="title">Fixed $50.00</span></p>
						
					</div>
				</div>

				</form>

			</div><!--end main content area-->
		</div><!--end container-->

	</main>