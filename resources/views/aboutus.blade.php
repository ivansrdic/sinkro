@extends('layouts.main')

@section('title')
O nama
@stop
   
@section('main')



<section id="about-us">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>O nama</h2>
                <p class="lead">Poduzeće Sinkro d.o.o. posluje u Hrvatskoj od 1993. godine.<br>Dugogodišnji smo ekskluzivni zastupnici tvornice Kama, Istanbul, Turska.</p>
            </div>

            <section>
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-md-offset-1 aboutus">
                        <p>Kama je jedan od najrenomiranijih proizvođača industrijskih kotača, čija proizvodnja pokriva najširu mogućnost aplikacije takvih proizvoda, tako da se u našoj ponudi nalaze razni kotači i kotačići, industrijski kotači, okretni kotači, fiksni kotači, kotači sa kočnicom, kotači za namještaj itd.</p>
                    </div>
                    <div class="col-sm-12 col-md-4 col-md-offset-2 aboutus">
                        <p>Naše dobro opskrbljeno skladište gotovih proizvoda omogućuje Vam trenutnu isporuku najvećeg dijela asortimana, a skladište poluproizvoda omogućava nam da profesionalnim kompletiranjem i montaľom različitih komponenti zadovoljimo i najsofisticiranije zahtjeve.</p>
                    </div>
                    
                </div>
            </section>
        </div><!--/.container-->
</section><!--/about-us-->

@stop

@section('footer')
@parent
@stop

@section('javascript')
@parent
@stop