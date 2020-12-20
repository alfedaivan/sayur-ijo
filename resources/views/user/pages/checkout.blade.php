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
                        <tr class="rem1">
                            <td class="invert-image"><a ><img src="{{url('/assets/TemplateUser/images/4.png')}}" alt=" " class="img-responsive"></a></td>
                            <td class="invert">Fortune Sunflower Oil</td>
                            <td class="invert">
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus">&nbsp;</div>
                                        <div class="entry value"><span>1</span></div>
                                        <div class="entry value-plus active">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td class="invert">Rp. 100.000</td>
                            <td class="invert">
                                <div class="rem">
                                    <div class="close1"> </div>
                                </div>

                            </td>
                        </tr>

                    </tbody></table>
                </div>
                <div class="checkout-left">
                    <div class="col-md-4 checkout-left-basket">
                        <h4>Nota</h4>
                        <ul>
                            <li>Product1 <i class="kuantitas">( 12 )</i> <span>Rp. 2000 </span></li>
                            <li>Product2 <i class="kuantitas">( 12 )</i> <span>Rp. 2000 </span></li>
                            <li>Product3 <i class="kuantitas">( 12 )</i> <span>Rp. 2000 </span></li>
                            <li></li>
                            <li>Total <i>-</i> <span>Rp. 2000</span></li>
                        </ul>
                    </div>
                    <div class="col-md-8 address_form_agile">
                        <h4>Detail</h4>
                    <form action="#" class="creditly-card-form agileinfo_form">
                        <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                            <div class="information-wrapper">
                                <div class="first-row form-group">
                                    <div class="controls">
                                        <label class="control-label">Nama Lengkap : </label>
                                        <input class="billing-address-name form-control" type="text" name="name" placeholder="Nama lengkap">
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
                                <button class="submit check_out" data-toggle="modal" data-target="#exampleModal">
                                    Pesan Sekarang
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                </button>
                            </div>
                        </section>
                    </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
		<div class="clearfix"></div>
    <!-- //content -->
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <h5>Informasi Pelanggan</h5>
                                    <h6>Nama</h6> <p>Wahoyes</p>
                                    <h6>Alamat</h6> <p>Jl. Akordion, Tunggulwulung, Kec. Lowokwaru, Kota Malang, Jawa Timur 65143</p>
                                    <h6>Catatan</h6> <p>-</p>
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
                                        <tr>
                                            <td>Ayam kampus (5kg)</td>
                                            <td>5</td>
                                            <td>Rp. 200.000</td>
                                        </tr>
                                        <tr>
                                            <td>Ayam kampus (5kg)</td>
                                            <td>5</td>
                                            <td>Rp. 200.000</td>
                                        </tr>
                                        <tr>
                                            <td>Ayam kampus (5kg)</td>
                                            <td>5</td>
                                            <td>Rp. 200.000</td>
                                        </tr>
                                        <tr>
                                            <td>Ayam kampus (5kg)</td>
                                            <td>5</td>
                                            <td>Rp. 200.000</td>
                                        </tr>

                                    </tbody>
                                </table>
                                <div class="total">
                                    <h5 class="title">Total :</h5>
                                    <h5>Rp. 1.000.000</h5>
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
