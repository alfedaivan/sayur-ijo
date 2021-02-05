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

						</div>
					</li>
					<li>
						<div class="w3l_banner_nav_right_banner1">

						</div>
					</li>
					<li>
						<div class="w3l_banner_nav_right_banner1">

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
            <h3>Produk Terbaru</h3>

			<div class="row" >
                    <div class="agile_top_brands_grids" id="product">
                        @foreach ($product as $p)
                        <div class="col-md-3 top_brand_left" id="list-product">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="agile_top_brand_left_grid1" >
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb" >
                                                    <a ><img src="{{ url('/images/'.$p->photo) }}" alt=" " class="img-responsive" /></a>

                                                    <h4>{{$p -> product_name}}</h4>
                                                    <p>Rp. {{$p -> price}} / {{$p -> unit}}</p>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <a href="{{url("/checkout?id=".$p -> id)}}" class="btn-produk">Pesan</a>
                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="clearfix"></div>
                    </div>
                </div>
		</div>
<!-- //content -->
    </div>
<!-- footer -->
@include('user.footer')
<!-- //footer -->
</body>
</html>
