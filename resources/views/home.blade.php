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
                            <div class="col-sm-3 hidden-xs animation animated-item-4 col-sm-offset-0">
                                <div class="slider-img">
                                    <img src="{{ asset('images/logo/sinkro_logo.png') }}" class="img-responsive">
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                        </div>
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1" style="text-shadow: 2px 2px #151515;">Sinkro d.o.o.</h1>
                                    <h2 class="animation animated-item-2" style="text-shadow: 1px 1px #151515;">Dobro došli na naše stranice!</h2>
                                    <a class="btn-slide animation animated-item-3" href="{{ route('aboutus') }}">O nama</a>
                                </div>
                            </div>

                            

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1" style="text-shadow: 2px 2px #151515;">Široka ponuda</h1>
                                    <h2 class="animation animated-item-2" style="text-shadow: 1px 1px #151515;">Istražite našu raznovrsnu ponudu svih vrsta industrijskih kotača i kotačića.</h2>
                                    <a class="btn-slide animation animated-item-3" href="{{ route('search') }}">Ponuda</a>
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
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1" style="text-shadow: 2px 2px #151515;">Kontaktirajte nas</h1>
                                    <h2 class="animation animated-item-2" style="text-shadow: 1px 1px #151515;">Ukoliko imate pitanja u vezi naše ponude ili Vam trebaju dodatne informacije slobodno nam se obratite</h2>
                                    <a class="btn-slide animation animated-item-3" href="{{ route('contact') }}">Kontakt</a>
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
           <!--<div class="center wow fadeInDown">
                <h2>Features</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>-->

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-truck"></i>
                            <h2>Trenutna isporuka</h2>
                            <h3>Na skladištu više od 100 000 jedinica robe</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-car"></i>
                            <h2>Parking</h2>
                            <h3>Osigurana parkirališna mjesta za sve vrste vozila</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-map-marker"></i>
                            <h2>Lokacija</h2>
                            <h3>Neposredna blizina najfrekventnije avenije u Hrvatskoj</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-thumbs-up"></i>
                            <h2>Fleksibilni uvjeti</h2>
                            <h3>Količinski i predračunski rabati</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-graduation-cap"></i>
                            <h2>Iskustvo</h2>
                            <h3>Dvadesetogodišnje akumulirane povratne informacije s tržišta</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-question"></i>
                            <h2>Savjetovanje</h2>
                            <h3>Stručne informacije i profesionalni pristup</h3>
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
                <h2 style="text-shadow: 2px 2px #151515;">Naši partneri</h2>
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