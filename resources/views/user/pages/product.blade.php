<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
@include('user.head')

<body>
    <!-- nav -->
    @include('user.nav')
    <!-- //nav -->
    <div class="banner">
    <!-- banner -->
		<div class="top-brands mt-5" id="offers">
			<div class="container">
                <h3>Produk Kami</h3>

                <div class="w3l_search">
                    <form action="/product" method="GET">
                        <input type="text" name="search" id="search" placeholder="Cari Produk...">
                        <input type="submit" value=" ">
                        <div id="product_list"></div>
                    </form>

                </div>

				<div class="agile_top_brands_grids" >
                    @foreach ($product as $p)
                    <div class="col-md-3 top_brand_left" id="list-product">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#search').on('keyup',function() {
                    var query = $(this).val();
                    $.ajax({
                        url:'/search',
                        type:"GET",
                        data:{'search':query},
                        success:function (data) {
                            $('#product_list').html(data);
                        }
                    })
                });

                $(document).on('click', 'li', function(){
                    var value = $(this).text();
                    $('#search').val(value);
                    $('#product_list').html("");
                });
            });
        </script>
</body>
</html>
