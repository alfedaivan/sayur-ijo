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
    <!-- banner -->
		<div class="top-brands mt-5" id="offers">
			<div class="container">
                <h3>Produk Kami</h3>

                <div class="w3l_search">
                    <form action="#">
                        <input type="text" name="search" id="search" placeholder="Cari Produk...">
                        <input type="submit" value=" ">
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

<script>
    $(document).ready(function(){
        fetch_product_data();

        function fetch_product_data(query = ''){
            $.ajax({
                url:"{{ route('live_search.action') }}",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data){
                    $('#list-product').html(data.product_data);
                }
            })
        }

        $(document).on('keyup', '#search', function(){
            var query = $(this).val();
            fetch_product_data(query);
        });
    });
</script>
<!-- //footer -->

</body>
</html>
