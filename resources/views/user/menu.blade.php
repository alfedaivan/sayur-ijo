<div class="logo_products">
		<div class="container">
			<a href="{{url('/')}}" class="logo">
                <img src="{{url('/assets/TemplateUser/images/Logo.png')}}" alt="">
			</a>
			<div class="w3ls_logo_products_left1" id="menu">
				<ul class="special_items">
					<li><a href="{{url('/')}}">Beranda</a><i>/</i></li>
                    <li><a href="#footer">  Tentang Kami</a><i>/</i> </li>
                    <li><a href="{{url('/product')}}">Produk</a><i>/</i></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn dropdown-toggle " type="button" data-toggle="dropdown">
                            Kategori
                            <span class="glyphicon glyphicon-triangle-bottom" style="font-size: 10px;"></span>
                        </a>
                        <ul class="dropdown-menu" id="navigation-dropdown">
                            @foreach($category as $c)
                            <li><a href="#">{{ $c -> category}}</a></li>
                            @endforeach
                        </ul>

                    </li>




				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
