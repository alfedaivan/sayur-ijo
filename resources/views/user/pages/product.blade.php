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
    @include('user.navSearch')
    <!-- //nav -->
    <div class="banner">
    <!-- banner -->
		<div class="top-brands mt-5" id="offers">
			<div class="container">
				<h3>Produk Kami</h3>
				<div class="agile_top_brands_grids">
                @foreach ($product as $p)
                <div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
                                            <a ><img src="{{ url('/images/'.$p->photo) }}" alt=" " class="img-responsive" /></a>
											<p>{{$p -> product_name}}</p>
											<h4>Rp. {{$p -> price}}</h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<a href={{url("/checkout?id=".$p -> id)}} class="btn-produk">Pesan</a>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
                </div>
                @endforeach
                </div>
            </div>
        </div>

            {{ $product->links('user.pagination') }}
        <div class="clearfix"></div>
    <!-- //content -->
    </div>

<!-- footer -->
@include('user.footer')
<!-- //footer -->

</body>
</html>
