@extends('layouts.main')

@section('title')
Naslovna stranica
@stop
    
@section('main')
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs animation animated-item-4 col-sm-offset-2">
                                <div class="slider-img">
                                    <img src="{{ asset('images/logo/sinkro_logo.png') }}" class="img-responsive">
                                </div>
                            </div>
                        </div>
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Sinkro d.o.o.</h1>
                                    <h2 class="animation animated-item-2">Dobro došli na naše stranice!</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-3">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <!--<img src="{{ asset('images/slider/img2.png') }}" class="img-responsive">-->
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-9">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                    <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <!--<img src="{{ asset('images/slider/img3.png') }}" class="img-responsive">-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Features</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-bullhorn"></i>
                            <h2>Fresh and Clean</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-comments"></i>
                            <h2>Retina ready</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cloud-download"></i>
                            <h2>Easy to customize</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-leaf"></i>
                            <h2>Adipisicing elit</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-cogs"></i>
                            <h2>Sed do eiusmod</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-heart"></i>
                            <h2>Labore et dolore</h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

    <section id="recent-works">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Recent Works</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

           <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <a href="images/portfolio/full/skladiste1v.jpg" rel="prettyPhoto">
                        <div class="warehouse">
                            <img class="img-responsive" src="http://projects.ivansrdic.com.hr/images/portfolio/recent/skladiste1.jpg" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <a href="images/portfolio/full/kotaci4v.jpg" rel="prettyPhoto">
                        <div class="warehouse">
                            <img class="img-responsive" src="http://projects.ivansrdic.com.hr/images/portfolio/recent/kotaci4.jpg" alt="">
                        </div>
                    </a>
                </div> 

                <div class="col-xs-12 col-sm-4">
                    <a href="images/portfolio/full/kotaci1v.jpg" rel="prettyPhoto">
                        <div class="warehouse">
                            <img class="img-responsive" src="http://projects.ivansrdic.com.hr/images/portfolio/recent/kotaci1.jpg" alt="">
                        </div>
                    </a>
                </div>   
            </div>

                <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <a href="images/portfolio/full/kotaci2v.jpg" rel="prettyPhoto">
                        <div class="warehouse">
                            <img class="img-responsive" src="http://projects.ivansrdic.com.hr/images/portfolio/recent/kotaci2.jpg" alt="">
                        </div>
                    </a>
                </div>

                <div class="col-xs-12 col-sm-4">
                    <a href="images/portfolio/full/kotaci3v.jpg" rel="prettyPhoto">
                        <div class="warehouse">
                            <img class="img-responsive" src="http://projects.ivansrdic.com.hr/images/portfolio/recent/kotaci3.jpg" alt="">
                        </div>
                    </a>
                </div> 

                <div class="col-xs-12 col-sm-4">
                    <a href="images/portfolio/full/skladiste2v.jpg" rel="prettyPhoto">
                        <div class="warehouse">
                            <img class="img-responsive" src="http://projects.ivansrdic.com.hr/images/portfolio/recent/skladiste2.jpg" alt="">
                        </div>
                    </a>
                </div>   
            </div>
                </div>   
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#recent-works-->

    <section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Naši partneri</h2>
                <p class="lead"></p>
            </div>    
            
            <div class="partners">
            <div class="row col-sm-12 col-sm-offset-3">
                <ul >
                    <li style="width: 50%;"> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="{{ asset('images/partners/kama.png') }}"></a></li>
                </ul>
            </div>
            <div class="row col-sm-12 col-sm-offset-1">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="{{ asset('images/partners/rollyx.png') }}" style="width: 40%;"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="{{ asset('images/partners/orko.png') }}"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="{{ asset('images/partners/lag.png') }}" style="width: 25%;"></a></li>
                </ul>
            </div>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->

@stop

@section('footer')
@parent
@stop

@section('javascript')
@parent
@stop