<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
@include('user.head')

<body>

<!-- nav -->
@include('user.nav')
<!-- //nav -->

<!-- banner -->
<div class="banner">

	<div class="col-md-12 w3l_banner_nav_right ">
		<div class="checkout-page privacy about">
			<h3>Checkout</h3>

	      <div class="checkout-right">
					<h4>Your shopping cart contains: <span>3 Products</span></h4>
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>
							<th>Product</th>
							<th>Quality</th>
							<th>Product Name</th>

							<th>Price</th>
							<th>Remove</th>
						</tr>
					</thead>
					<tbody>
					<tr class="rem1">
						<td class="invert">1</td>
						<td class="invert-image"><a ><img src="{{url('/assets/TemplateUser/images/4.png')}}" alt=" " class="img-responsive"></a></td>
						<td class="invert">
							 <div class="quantity">
								<div class="quantity-select">
									<div class="entry value-minus">&nbsp;</div>
									<div class="entry value"><span>1</span></div>
									<div class="entry value-plus active">&nbsp;</div>
								</div>
							</div>
						</td>
						<td class="invert">Fortune Sunflower Oil</td>

						<td class="invert">$290.00</td>
						<td class="invert">
							<div class="rem">
								<div class="close1"> </div>
							</div>

						</td>
					</tr>

				</tbody></table>
			</div>
			<div class="checkout-left">
				<div class="col-md-4 checkout-left-basket">
					<h4>Continue to basket</h4>
					<ul>
						<li>Product1 <i>-</i> <span>$15.00 </span></li>
						<li>Product2 <i>-</i> <span>$25.00 </span></li>
						<li>Product3 <i>-</i> <span>$29.00 </span></li>
						<li>Total Service Charges <i>-</i> <span>$15.00</span></li>
						<li>Total <i>-</i> <span>$84.00</span></li>
					</ul>
				</div>
				<div class="col-md-8 address_form_agile">
					  <h4>Add Details</h4>
				<form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
					<section class="creditly-wrapper wthree, w3_agileits_wrapper">
						<div class="information-wrapper">
							<div class="first-row form-group">
								<div class="controls">
									<label class="control-label">Full name: </label>
									<input class="billing-address-name form-control" type="text" name="name" placeholder="Full name">
								</div>
								<div class="w3_agileits_card_number_grids">
									<div class="w3_agileits_card_number_grid_left">
										<div class="controls">
											<label class="control-label">Mobile number:</label>
											<input class="form-control" type="text" placeholder="Mobile number">
										</div>
									</div>
									<div class="clear"> </div>
								</div>
							</div>
							<button class="submit check_out">Checkout <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></button>
						</div>
					</section>
				</form>
				</div>

				<div class="clearfix"> </div>

			</div>

		</div>
	</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

<!-- footer -->
@include('user.footer')
<!-- //footer -->

</body>
</html>
