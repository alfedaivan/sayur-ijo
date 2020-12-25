<div class="footer" id="footer">
	<div class="container">
    @foreach($site as $s)
		<div class="col-md-4 w3_footer_grid ">
			<h3>TENTANG KAMI</h3>
			<h4>
                {{$s->about}}
			</h4>
			<div class="w3_footer_grid_bottom">
				<ul class="agileits_social_icons">
					<li><a href="{{$s->facebook}}" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="{{$s->twitter}}" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="{{$s->instagram}}" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-4 w3_footer_grid">
			<h3>KONTAK</h3>
			<ul class="contact" style='list-style-type: none;'>
				<li><i class="fa fa-map-marker"></i> <span>{{$s->alamat}}3</span> </li>
				<li><i class="fa fa-phone"></i> <span> <a href="https://api.whatsapp.com/send?phone={{$s->nomor_wa}}">+{{$s->nomor_wa}}</a></span></li>
				<li><i class="fa fa-envelope"></i> <span><a class="email" href="mailto: {{$s->email}}">{{$s->email}}</a></span> </li>
			</ul>
		</div>
    @endforeach
		<div class="col-md-4 w3_footer_grid">
			<h3>MENU</h3>
			<ul class="w3_footer_grid_list">
                <li><a href="{{url('/')}}">Beranda</a></li>
				<li><a href="{{url('/product')}}">Produk</a></li>
				<li><a href="#about">Tentang Kami</a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<div class="wthree_footer_copy">
			<p>© 2016 Grocery Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
</div>

<script src="{{url('/assets/TemplateUser/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('/assets/TemplateUser/js/index.js')}}"> </script>
