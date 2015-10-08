@extends('layouts.main')

@section('title')
Kontakt
@stop
   
@section('main')
    <section id="contact-info">
        <div id="map">
        </div>
    </section>  <!--/gmap_area -->

    <section id="contact-page">
        <div class="container">    
            <div class="row" style="padding-bottom: 40px;">
                <div class="col-sm-10 col-sm-offset-1">
                    <h2>Sinkro d.o.o.</h2>
                </div>
                <div class="col-sm-5 col-sm-offset-1">
                    <p>
                        Pešćanska 131<br>Zagreb, 10 000<br>
                    </p>
                    <p><b>Radno vrijeme</b>:<br>Ponedjeljak - Petak<br>8:00 do 16:00</p>
                </div>
                <div class="col-sm-5">
                    <p><i class="glyphicon glyphicon-earphone"></i> +385 1 3866 631</p>
                    <p><abbr><b>Fax</b></abbr>: +385 1 3866 630</p>
                    <p><abbr><b>OIB</b></abbr>: 7216307999</p>
                </div>
            </div>
            <div class="center">        
                <h2>Pošaljite nam poruku</h2>
            </div> 
            <div class="row contact-wrap"> 
                <div class="form_status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="{{ route('sendMail') }}">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Ime *</label>
                            <input type="text" id="contact-name" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" id="contact-email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Broj telefona</label>
                            <input type="number" id="contact-phone" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Ime tvrtke</label>
                            <input type="text" id="contact-company" name="company" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Naslov *</label>
                            <input type="text" id="contact-subject" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Poruka *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="center">
                            <input type="hidden" id="contact-token" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Pošaljite poruku</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
@stop

@section('footer')
    @parent
@stop

@section('javascript')
@parent
<script type="text/javascript">
function initMap() {
  myLatLng = {lat: 45.7953914, lng: 15.9219683}

  var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    scrollwheel: false,
    zoom: 16
  });

  var infowindow = new google.maps.InfoWindow();
  var service = new google.maps.places.PlacesService(map);

  service.getDetails({
    placeId: 'ChIJ1VufKU3RZUcR_lh7pAiuS6I'
  }, function(place, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {
      var marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location
      });
      var contentStr = '<h5>'+place.name+'</h5><p>'+place.formatted_address;
          contentStr += '<br>'+place.formatted_phone_number;
          contentStr += '<br><a target="_blank" href="'+place.website+'">'+place.website+'</a>';
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(contentStr);
        infowindow.open(map, this);
      });
    }
  });


}
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_tU1SQmf2XBDy9H7fK8wK-BiIavMnFho&libraries=places&callback=initMap&language=hr" async defer></script>
@stop