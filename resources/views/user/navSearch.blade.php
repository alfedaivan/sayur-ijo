<div class="agileits_header">
	<div class="w3l_offers">
		<a href="{{url('/')}}">Our Popular Products !!</a>
	</div>
	<div class="w3l_search">
		<form action="#" method="post">
			<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
			<input type="submit" value=" ">
		</form>
	</div>
	<div class="product_list_header">
		<a href="{{url('/checkout')}}" class="button-cart">
			<span>View My Cart</span>
		</a>
	</div>
	<div class="clearfix"> </div>
</div>

@include('user.menu')
