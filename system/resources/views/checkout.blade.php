@extends('section.mainbase')

@section('content')

<div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('/products')}}">Products</a></li>
                    <li class="active">CART</li>
                </ol>
            </div>
        </div>
        <!-- check-out -->
            <div class="check">
                <div class="container">  
                    <div class="col-md-3 cart-total">
                        <a class="continue" href="#">Ke Keranjang</a>
                        <div class="price-details">
                            <h3>Detail Harga</h3>
                            <span>Total</span>
                            <span class="total1">Rp. 1.080.000</span>
                            <span>Diskon</span>
                            <span class="total1">0%</span>
                            <span>Berkurang</span>
                            <span class="total1">0</span>
                            <div class="clearfix"></div>                 
                        </div>
                        <hr class="featurette-divider">
                        <ul class="total_price">
                           <li class="last_price"> <h4>TOTAL</h4></li>  
                           <li class="last_price"><span>Rp. 1.080.000</span></li>
                           <div class="clearfix"> </div>
                        </ul> 
                        <div class="clearfix"></div>
                        <a class="order" href="#">Tetapkan Pesanan</a>
                    </div>
                    <div class="col-md-9 cart-items">
                        <h1>Tas ku (2)</h1>
                            <script>$(document).ready(function(c) {
                                $('.close1').on('click', function(c){
                                    $('.cart-header').fadeOut('slow', function(c){
                                        $('.cart-header').remove();
                                    });
                                    });   
                                });
                           </script>
                        <div class="cart-header">
                <div class="close1"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></div>
                            <div class="cart-sec simpleCart_shelfItem">
                                    <div class="cart-item cyc">
                                        <img src="images/grid8.jpg" class="img-responsive" alt=""/>
                                    </div>
                                   <div class="cart-item-info">
                                        <ul class="qty">
                                            <li><p>Ukuran : 9 US</p></li>
                                            <li><p>Jumlah : 1</p></li>
                                            <li><p>Harga : Rp. 400.000</p></li>
                                        </ul>
                                        <div class="delivery">
                                             <p>Ongkir : Rp. 50.000 </p>
                                             <span>Estimasi Waktu 2-3 hari</span>
                                             <div class="clearfix"></div>
                                        </div>  
                                   </div>
                                   <div class="clearfix"></div>

                              </div>
                         </div>
                         <script>$(document).ready(function(c) {
                                $('.close2').on('click', function(c){
                                        $('.cart-header2').fadeOut('slow', function(c){
                                    $('.cart-header2').remove();
                                });
                                });   
                                });
                         </script>
                        <div class="cart-header2">
                <div class="close2"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></div>
                                <div class="cart-sec simpleCart_shelfItem">
                                    <div class="cart-item cyc">
                                         <img src="{{url('public')}}/img/2.jpg" class="img-responsive" alt=""/>
                                    </div>
                                    <div class="cart-item-info">
                                        <ul class="qty">
                                            <li><p>Ukuran : 8 US</p></li>
                                            <li><p>Jumlah : 2</p></li>
                                            <li><p>Harga : Rp. 340.000</p></li>
                                        </ul>
                                        <div class="delivery">
                                            <p>Ongkir : Rp. 50.000</p>
                                            <span>Estimasi Waktu 2-3 Hari</span>
                                            <div class="clearfix"></div>
                                        </div>  
                                   </div>
                                   <div class="clearfix"></div>                 
                                </div>
                        </div>          
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

@endsection