    <div class="agileits_header">
		<div class="w3l_offers">
			<a href="{{url('/')}}#offers">Produk Terbaru !!!</a>
		</div>
        @if($keranjang->count()==0)
        <div class="product_list_header">
            <a href="{{url('/checkout')}}" class="button-cart">
				<span>keranjangku</span>
			</a>
		</div>
        @else
        <div class="product_list_header">
            <span class="badge badge-danger">{{count($keranjang)}}</span>
            <a href="{{url('/checkout')}}" class="button-cart">
				<span>keranjangku</span>
			</a>
		</div>
        @endif

		<div class="clearfix"> </div>
	</div>

    @include('user.menu')
