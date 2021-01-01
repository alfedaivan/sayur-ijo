<div class="agileits_header">
	<div class="w3l_offers">
		<a href="{{url('/')}}">Produk Terpopuler !!</a>
	</div>
	<div class="w3l_search">
		<form action="/product" method="GET">
			<input type="text" name="search" id="search" placeholder="Cari Produk...">
			<input type="submit" value=" ">
		</form>
	</div>
	<div class="product_list_header">
		<a href="{{url('/checkout')}}" class="button-cart">
			<span>Keranjangku</span>
		</a>
	</div>
	<div class="clearfix"> </div>
</div>

@include('user.menu')
