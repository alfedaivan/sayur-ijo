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
                <h3>Checkout</h3>

            <div class="checkout-right">
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quality</th>
                                <th>Product Name</th>

                                <th>Price</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr class="rem1">
                            <td class="invert-image"><a ><img src="{{url('/assets/TemplateUser/images/4.png')}}" alt=" " class="img-responsive"></a></td>
                            <td class="invert">
                                <div class="quantity">
                                    <div class="quantity-select">
                                        <div class="entry value-minus">&nbsp;</div>
                                        <div class="entry value"><span>1</span></div>
                                        <div class="entry value-plus active">&nbsp;</div>
                                    </div>
                                </div>
                            </td>
                            <td class="invert">Fortune Sunflower Oil</td>

                            <td class="invert">$290.00</td>
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
                                    Checkout
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
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenter">Konfirmasi Pembelian</h4>
                </div>
                <div class="modal-body">
                    <div class="row head">
                        <div class="col-sm-12">
                            <h4 class="title">Apakah data pemesanan dan barang yang anda beli sudah benar?</h4>
                        </div>
                    </div>
                    <div class="row body">
                        <div class="col-md-6 left">
                            <h4>Nama</h4>
                            <p>Wahoyes</p>
                            <h4>Alamat</h4>
                            <p>Lumajang</p>
                            <h4>Catatan</h4>
                            <p>Hahahahah</p>
                        </div>
                        <div class="col-md-6 right">
                            <h4>Produk</h4>
                            <div class="row product">
                                <div class="col-lg-12 list-product">
                                    <ul>
                                        <li><i class="product">Ayam Kampus 2kg (12)</i><span>Rp. 200.000 </span></li>
                                        <li><i>Ayam Kampus 2kg (12)</i><span>Rp. 200.000 </span></li>
                                        <li><i>Ayam Kampus 2kg (12)</i><span>Rp. 200.000 </span></li>
                                        <li><i>Ayam Kampus 2kg (12)</i><span>Rp. 200.000 </span></li>
                                        <li><i>Ayam Kampus 2kg (12)</i><span>Rp. 200.000 </span></li>
                                        <li><i>Ayam Kampus 2kg (12)</i><span>Rp. 200.000 </span></li>
                                        <li><i>Ayam Kampus 2kg (12)</i><span>Rp. 200.000 </span></li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <div class="row total">
                                <div class="col-sm-6">
                                    <H4>Total</H4>
                                </div>
                                <div class="col-sm-6 list-price">
                                    <p>Rp. 1.000.000</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="submit check_out2">
                        Checkout
                        <!-- <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> -->
                    </button>
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
