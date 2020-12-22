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
    <div class="banner">
    <!-- content -->
	<!-- hero banner -->
	<div class="w3l_banner_nav ">
		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="w3l_banner_nav_right_banner">
							<h3>Make your <span>food</span> with Spicy.</h3>
							<div class="more">
								<a href="{{url('/product')}}" class="button--saqui button--round-l button--text-thick" data-text="Belanja Sekarang">Belanja Sekarang</a>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l_banner_nav_right_banner1">
							<h3>Make your <span>food</span> with Spicy.</h3>
							<div class="more">
								<a href="{{url('/product')}}" class="button--saqui button--round-l button--text-thick" data-text="Belanja Sekarang">Belanja Sekarang</a>
							</div>
						</div>
					</li>
					<li>
						<div class="w3l_banner_nav_right_banner2">
							<h3>upto <i>50%</i> off.</h3>
							<div class="more">
								<a href="{{url('/product')}}" class="button--saqui button--round-l button--text-thick" data-text="Belanja Sekarang">Belanja Sekarang</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
            </section>
            <!-- flexSlider -->
                <link rel="stylesheet" href="{{url('/assets/TemplateUser/css/flexslider.css')}}" type="text/css" media="screen" property="" />
                <script defer src="{{url('/assets/TemplateUser/js/jquery.flexslider.js')}}"></script>
                <script type="text/javascript"></script>
                <script>
                    // flex slidder
                    $(window).load(function(){
                        $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider){
                            $('body').removeClass('loading');
                        }
                        });
                    });
                    // end
                </script>
            <!-- //flexSlider -->
        </div>
        <!-- end hero banner -->
        <div class="clearfix"></div>
    </div>


<!-- banner -->
<!-- top-brands -->
	<div class="top-brands mt-5" id="offers">
		<div class="container">
			<h3>Produk Terpopuler</h3>
			<div class="agile_top_brands_grids">

				<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
                                            <a ><img src="{{url('/assets/TemplateUser/images/4.png')}}" alt=" " class="img-responsive" /></a>
											<p>dogs food (4 Kg)</p>
											<h4>$9.00 </h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<a href="{{url('/checkout')}}" class="btn-produk">Beli</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
                </div>

                <div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
                                            <a ><img src="{{url('/assets/TemplateUser/images/4.png')}}" alt=" " class="img-responsive" /></a>
											<p>dogs food (4 Kg)</p>
											<h4>$9.00 </h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<a href="{{url('/checkout')}}" class="btn-produk">Beli</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
                </div>

                <div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
                                            <a ><img src="{{url('/assets/TemplateUser/images/4.png')}}" alt=" " class="img-responsive" /></a>
											<p>dogs food (4 Kg)</p>
											<h4>$9.00 </h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<a href="{{url('/checkout')}}" class="btn-produk">Beli</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
                </div>

                <div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
                                            <a ><img src="{{url('/assets/TemplateUser/images/4.png')}}" alt=" " class="img-responsive" /></a>
											<p>dogs food (4 Kg)</p>
											<h4>$9.00 </h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<a href="{{url('/checkout')}}" class="btn-produk">Beli</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
                </div>

                <div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
                                            <a ><img src="{{url('/assets/TemplateUser/images/4.png')}}" alt=" " class="img-responsive" /></a>
											<p>dogs food (4 Kg)</p>
											<h4>$9.00 </h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<a href="{{url('/checkout')}}" class="btn-produk">Beli</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
                </div>

                <div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
                                            <a ><img src="{{url('/assets/TemplateUser/images/4.png')}}" alt=" " class="img-responsive" /></a>
											<p>dogs food (4 Kg)</p>
											<h4>$9.00 </h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<a href="{{url('/checkout')}}" class="btn-produk">Beli</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
                </div>

                <div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
                                            <a ><img src="{{url('/assets/TemplateUser/images/4.png')}}" alt=" " class="img-responsive" /></a>
											<p>dogs food (4 Kg)</p>
											<h4>$9.00 </h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<a href="{{url('/checkout')}}" class="btn-produk">Beli</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
                </div>

                <div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
                                            <a ><img src="{{url('/assets/TemplateUser/images/4.png')}}" alt=" " class="img-responsive" /></a>
											<p>dogs food (4 Kg)</p>
											<h4>$9.00 </h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<a href="{{url('/checkout')}}" class="btn-produk">Beli</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //content -->
    </div>
<!-- footer -->
@include('user.footer')
<!-- //footer -->
</body>
</html>
