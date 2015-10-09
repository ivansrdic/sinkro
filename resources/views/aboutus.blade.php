@extends('layouts.main')

@section('title')
O nama
@stop
   
@section('main')



        <div class="container-fluid no-margin">
            <img src="images/gallery/slika1.jpg" class="img-responsive">
        </div>

<section id="about-us">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>O nama</h2>
                <p class="lead">Poduzeće Sinkro d.o.o. posluje u Hrvatskoj od 1993. godine.<br>Ekskluzivni smo zastupnici tvornice Kama, Istanbul, Turska.</p>
            
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-md-offset-3 aboutus">
                        <p>Kama je jedan od najrenomiranijih proizvođača industrijskih kotača, čija proizvodnja pokriva najširu mogućnost aplikacije takvih proizvoda, tako da se u našoj ponudi nalaze razni kotači i kotačići, industrijski kotači, okretni kotači, fiksni kotači, kotači sa kočnicom, kotači za namještaj itd.</p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-md-offset-3 aboutus">
                        <p>Naše dobro opskrbljeno skladište gotovih proizvoda omogućuje Vam trenutnu isporuku najvećeg dijela asortimana, a skladište poluproizvoda omogućava nam da profesionalnim kompletiranjem i montažom različitih komponenti zadovoljimo i najsofisticiranije zahtjeve.</p>
                    </div>
                </div>
                </div>
        </div><!--/.container-->
</section><!--/about-us-->

@stop

@section('footer')
@parent
@stop

@section('javascript')
@parent
@stop