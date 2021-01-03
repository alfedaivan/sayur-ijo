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
        <div class="col-md-12 w3l_banner_nav_right ">

            <div class="checkout-page privacy about">
                <h3>Keranjang</h3>

                <div class="container">

                    <div class="col-md-7">
                        <div class="checkout-right">
                            <table class="timetable_sub">
                                <thead>
                                    <tr>
                                        <th>Produk</th>
                                        <th>Nama Produk</th>
                                        <th>Kuantitas</th>
                                        <th>Harga</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($keranjang as $c)
                                    <tr class="rem1">
                                        <td class="invert-image"><a ><img src="{{ url('/images/'.$c -> photo) }}" alt=" " class="img-responsive"></a></td>
                                        <td class="invert">{{$c -> product_name}}</td>
                                        <td class="invert">
                                            <div class="quantity">
                                                <div class="quantity-select">
                                                    @if ($c -> quantity > 1)
                                                    <a class="entry value-minus" href="{{url('/checkout/minus/?id=' . $c -> product_id)}}"></a>
                                                    @else
                                                    <button disabled="disabled" class="entry value-minus"></button>
                                                    @endif
                                                    <div class="entry value"><span>{{$c -> quantity}}</span></div>
                                                    @if ($c -> quantity == $c -> stock)
                                                    <a class="entry value-plus active" href="{{url('/checkout/plus/?id=' . $c -> product_id)}}"></a>
                                                    @else
                                                    <button disabled="disabled" class="entry value-plus active"></button>
                                                    @endif

                                                </div>
                                            </div>
                                        </td>
                                        <td class="invert">Rp. {{$c -> price}}</td>
                                        <td class="invert">
                                            <div class="rem">
                                                <a class="close1" href="{{url('/checkout/delete/?id=' . $c -> product_id)}}"></a>
                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-4">
                        <div class="checkout-left">
                            <div class="col-md-4 checkout-left-basket">
                                <h4>Nota</h4>
                                <table class="table">
                                    <tbody>
                                        @foreach ($keranjang as $c)
                                        <tr>
                                            <td>{{$c -> product_name}}</td>
                                            <td>{{$c -> quantity}}</td>
                                            <td class="harga">Rp. {{$c -> total_price}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="total">
                                    <h5 class="title">Total:</h5>
                                    <h5 class="content">Rp. {{$sum}}</h5>
                                </div>

                                <button class="submit check_out" data-toggle="modal" data-target="#konfirmasiCheckout">
                                    Pesan Sekarang
                                </button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
		<div class="clearfix"></div>
    <!-- //content -->



        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="konfirmasiCheckout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalCenter">
                            <i class="glyphicon glyphicon-info-sign"></i> Konfirmasi Pembelian
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="row body">
                            <div class="col-md-4">
                                <div class="data">
                                    <h5>Informasi Order</h5>
                                    <form  class="creditly-card-form agileinfo_form">
                                        {{csrf_field()}}
                                        <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                            <div class="information-wrapper">
                                                <div class="first-row form-group">
                                                    <div class="controls">
                                                        <label class="control-label">Nama Lengkap : </label>
                                                        <input class="billing-address-name form-control" type="text" name="nama" placeholder="Nama lengkap">
                                                    </div>
                                                    <br>
                                                    <div class="controls">
                                                        <label class="control-label">Alamat : </label>
                                                        <input class="billing-address-name form-control" type="text" name="alamat" placeholder="Alamat">
                                                    </div>
                                                    <br>
                                                    <div class="controls">
                                                        <label class="control-label">Catatan : </label>
                                                        <textarea class="billing-address-name form-control" type="text" name="catatan" placeholder="Catatan" cols="5" rows="1"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">Produk</th>
                                        <th scope="col" class="kuantitas">Kuantitas</th>
                                        <th scope="col">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($keranjang as $c)
                                        <tr>
                                            <td>{{$c -> nama_produk}}</td>
                                            <td>{{$c -> kuantitas}}</td>
                                            <td>Rp. {{$c -> harga}}</td>
                                        </tr>
                                    </tbody>
                                        @endforeach
                                </table>
                                <div class="total">
                                    <h5 class="title">Total :</h5>
                                    <h5>Rp. {{$sum}}</h5>
                                </div>
                            </div>
                        </div>
                        <div class="btn-checkout">
                            <button type="button" class="submit check_out2">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


<!-- footer -->
@include('user.footer')
<!-- //footer -->
</body>
</html>
