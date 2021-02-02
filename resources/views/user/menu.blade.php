<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="{{url('/')}}"><span>Grocery</span> Store</a></h1>
			</div>
			<div class="w3ls_logo_products_left1" id="menu">
				<ul class="special_items">
					<li><a href="{{url('/')}}">Beranda</a><i>/</i></li>
                    <!-- <li><a href="{{url('/product')}}">Produk</a><i>/</i></li> -->

                    <li class="dropdown">
                        <a class="dropbtn dropdown-toggle " type="button" data-toggle="dropdown">
                            Produk
                            <span class="glyphicon glyphicon-triangle-bottom" style="font-size: 10px; margin-left: 5px;"></span>
                        </a> <i>/</i>
                        <ul class="dropdown-menu" id="navigation-dropdown">
                            <li><a href="{{url('/product')}}">Semua Produk</a></li>
                            @foreach($category as $c)
                            <li><a href="/product/{{$c->id}}">{{ $c -> category}}</a></li>
                            @endforeach
                        </ul>

                    </li>

					<li><a href="#footer">Tentang Kami</a></li>


				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
