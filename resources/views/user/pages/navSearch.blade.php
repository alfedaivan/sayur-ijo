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

<div class="logo_products">
	<div class="container">
		<div class="w3ls_logo_products_left">
			<h1><a href="{{url('/')}}"><span>Grocery</span> Store</a></h1>
		</div>
		<div class="w3ls_logo_products_left1" id="menu">
			<ul class="special_items">
				<li><a href="{{url('/')}}">Home</a><i>/</i></li>
				<li><a href="{{url('/product')}}">Product</a><i>/</i></li>
				<li><a href="#footer">About Us</a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
