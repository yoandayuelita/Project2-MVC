@extends('section.mainbase')

@section('content')
    <div class="header-end">
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{url('public')}}/img/3.jpg" style="width: 400px;">
                        <div class="carousel-caption car-re-posn">
                            <h3>AirMax</h3>
                            <h4>You feel to fall</h4>
                            <span class="color-bar"></span>
                        </div>
                    </div>
                    <div class="item">
                      <img src="{{url('public')}}/img/1.jpg" style="width: 400px;">
                        <div class="carousel-caption car-re-posn">
                            <h3>AirMax</h3>
                            <h4>You feel to fall</h4>
                            <span class="color-bar"></span>
                        </div>
                    </div>
                    <div class="item">
                      <img src="{{url('public')}}/img/2.jpg" style="width: 400px;">
                        <div class="carousel-caption car-re-posn">
                            <h3>AirMax</h3>
                            <h4>You feel to fall</h4>
                            <span class="color-bar"></span>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left car-icn" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right car-icn" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="feel-fall">
        <div class="container">
            <div class="pull-left fal-box">
                <div class=" fall-left">
                    <h3>Fall</h3>
                    <img src="{{url('public')}}/img/14.jpg" style="width: 300px;height: 300px;" class="img-responsive fl-img-wid">
                    <p>Inspiration and innovation<br> for every athlete in the world</p>
                    <span class="fel-fal-bar"></span>
                </div>
            </div>
            <div class="pull-right fel-box">
                <div class="feel-right">
                    <h3>Feel</h3>
                    <img src="{{url('public')}}/img/16.jpg" style="width: 300px;height: 300px;" class="img-responsive fl-img-wid">
                    <p>Inspiration and innovation<br> for every athlete in the world</p>
                    <span class="fel-fal-bar2"></span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="shop-grid">
        <div class="container">
            <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <div class="ih-item square effect3 bottom_to_top">
                            <div class="bottom-2-top">
                    <div class="img"><img src="{{url('public')}}/img/4.jpg" alt="/" class="img-responsive gri-wid" style="width: 300px; height: 300px;"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>style 01</h3>
                                </div>
                                <div class="pull-right styl-price">
                                    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                        </div>
                    <div class="quick-view">
                        <a href="{{url('/single')}}">Quick view</a>
                    </div>
                </div>
                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <div class="ih-item square effect3 bottom_to_top">
                            <div class="bottom-2-top">
                    <div class="img"><img src="{{url('public')}}/img/6.jpg" alt="/" class="img-responsive gri-wid" style="width: 300px; height: 300px;"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>style 01</h3>
                                </div>
                                <div class="pull-right styl-price">
    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                        </div>
                    <div class="quick-view">
                        <a href="{{url('/single')}}">Quick view</a>
                    </div>
                </div>
                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <div class="ih-item square effect3 bottom_to_top">
                            <div class="bottom-2-top">
                    <div class="img"><img src="{{url('public')}}/img/3.jpg" alt="/" class="img-responsive gri-wid" style="width: 300px; height: 300px;"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>style 01</h3>
                                </div>
                                <div class="pull-right styl-price">
    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                        </div>
                    <div class="quick-view">
                        <a href="{{url('/single')}}">Quick view</a>
                    </div>
                </div>
                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <div class="ih-item square effect3 bottom_to_top">
                            <div class="bottom-2-top">
                    <div class="img"><img src="{{url('public')}}/img/5.jpg" alt="/" class="img-responsive gri-wid" style="width: 300px; height: 300px;"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>style 01</h3>
                                </div>
                                <div class="pull-right styl-price">
    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                        </div>
                    <div class="quick-view">
                        <a href="{{url('/single')}}">Quick view</a>
                    </div>
                </div>
                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <div class="ih-item square effect3 bottom_to_top">
                            <div class="bottom-2-top">
                    <div class="img"><img src="{{url('public')}}/img/7.jpg" alt="/" class="img-responsive gri-wid" style="width: 300px; height: 300px;"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>style 01</h3>
                                </div>
                                <div class="pull-right styl-price">
    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                        </div>
                    <div class="quick-view">
                        <a href="{{url('/single')}}">Quick view</a>
                    </div>
                </div>
                <div class="col-md-4 grid-stn simpleCart_shelfItem">
                        <div class="ih-item square effect3 bottom_to_top">
                            <div class="bottom-2-top">
                    <div class="img"><img src="{{url('public')}}/img/8.jpg" alt="/" class="img-responsive gri-wid" style="width: 300px; height: 300px;"></div>
                            <div class="info">
                                <div class="pull-left styl-hdn">
                                    <h3>style 01</h3>
                                </div>
                                <div class="pull-right styl-price">
    <p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$190</span></a></p>
                                </div>
                                <div class="clearfix"></div>
                            </div></div>
                        </div>
                    <div class="quick-view">
                        <a href="{{url('/single')}}">Quick view</a>
                    </div>
                </div>
        <div class="clearfix"></div>
            </div>
        </div>
        <div class="sub-news">
            <div class="container">
                <form>
                    <h3>NewsLetter</h3>
                <input type="text" class="sub-email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
                <a class="btn btn-default subs-btn" href="#" role="button">SUBSCRIBE</a>
                </form>
            </div>
        </div>
       

@endsection
      