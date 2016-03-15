@extends('index')
@section('body')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

<aside class="aside aside-1 white">
  <h4 class="thin center" align="middle">My Target</h4>
<div class="col s12 m8 l9">
  <nav class="green darken-3">
    <div class="nav-wrapper">
      <div class="col s12">
      <form class="row">
        <div class="input-field">
          <input id="search" required="" type="text">
          <label for="search" class=""><i class="mdi-action-search"></i> Please input
          </label>
        </div>
      </form>
      </div>
    </div>
  </nav>
</div>

  <div class="row">
      <div class="col s12">
        <ul class="tabs green-text">
          <li class="tab col s4"><a class="active green-text" href="#monitor">All</a></li>
          <li class="tab col s4"><a class="green-text" href="#online">Online</a></li>
          <li class="tab col s4"><a class="green-text" href="#offline">Offline</a></li>
        </ul>
      </div>

      <div class="col s12">
        <div id="monitor">
          <p>Monitor here</p>
           <ul class="collapsible popout" data-collapsible="accordion">
                    <li>
                      <div class="collapsible-header">Default</div>

                      <div class="collapsible-body">
                        <div class="row">
                          <div class="col s4">
                          <img src="{!! asset('img/jerald.jpg') !!}" alt="" class="circle col s12 center" align="middle">
                        </div>

                          <div class="col s4">
                            <span class="title">Title</span><br>
                            <a>First Line</a><br>
                            <a>First Line</a>
                          </div>

                          <div class="col s4">
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                          </div>  
                        </div>
                      </div>

                      <div class="collapsible-body">
                        <div class="row">
                          <div class="col s4">
                          <img src="{!! asset('img/jerald.jpg') !!}" alt="" class="circle col s12 center" align="middle">
                        </div>

                          <div class="col s4">
                            <span class="title">Title</span><br>
                            <a>First Line</a><br>
                            <a>First Line</a>
                          </div>

                          <div class="col s4">
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                          </div>  
                        </div>
                      </div>

                       <div class="collapsible-body">
                        <div class="row">
                          <div class="col s4">
                          <img src="{!! asset('img/jerald.jpg') !!}" alt="" class="circle col s12">
                        </div>

                         <div class="col s4">
                            <span class="title">Title</span><br>
                            <a>First Line</a><br>
                            <a>First Line</a>
                          </div>

                          <div class="col s4">
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                          </div>  
                        </div>
                      </div>
                    </li>
                   
            </ul>
        </div>

        <div id="online">
          <p>online here</p>
           <ul class="collapsible popout" data-collapsible="accordion">
                    <li>
                      <div class="collapsible-header">Default</div>

                      <div class="collapsible-body">
                        <div class="row">
                          <div class="col s4">
                          <img src="{!! asset('img/jerald.jpg') !!}" alt="" class="circle col s12 center" align="middle">
                        </div>

                          <div class="col s4">
                            <span class="title">Title</span><br>
                            <a>First Line</a><br>
                            <a>First Line</a>
                          </div>

                          <div class="col s4">
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                          </div>  
                        </div>
                      </div>

                      <div class="collapsible-body">
                        <div class="row">
                          <div class="col s4">
                          <img src="{!! asset('img/jerald.jpg') !!}" alt="" class="circle col s12 center" align="middle">
                        </div>

                          <div class="col s4">
                            <span class="title">Title</span><br>
                            <a>First Line</a><br>
                            <a>First Line</a>
                          </div>

                          <div class="col s4">
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                          </div>  
                        </div>
                      </div>

                       <div class="collapsible-body">
                        <div class="row">
                          <div class="col s4">
                          <img src="{!! asset('img/jerald.jpg') !!}" alt="" class="circle col s12">
                        </div>

                         <div class="col s4">
                            <span class="title">Title</span><br>
                            <a>First Line</a><br>
                            <a>First Line</a>
                          </div>

                          <div class="col s4">
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                          </div>  
                        </div>
                      </div>
                    </li>
                   
            </ul>
        </div>

        <div id="offline">
          <p>offline here</p>
          <ul class="collapsible popout" data-collapsible="accordion">
                    <li>
                      <div class="collapsible-header">Default</div>

                      <div class="collapsible-body">
                        <div class="row">
                          <div class="col s4">
                          <img src="{!! asset('img/jerald.jpg') !!}" alt="" class="circle col s12 center" align="middle">
                        </div>

                          <div class="col s4">
                            <span class="title">Title</span><br>
                            <a>First Line</a><br>
                            <a>First Line</a>
                          </div>

                          <div class="col s4">
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                          </div>  
                        </div>
                      </div>

                      <div class="collapsible-body">
                        <div class="row">
                          <div class="col s4">
                          <img src="{!! asset('img/jerald.jpg') !!}" alt="" class="circle col s12 center" align="middle">
                        </div>

                          <div class="col s4">
                            <span class="title">Title</span><br>
                            <a>First Line</a><br>
                            <a>First Line</a>
                          </div>

                          <div class="col s4">
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                          </div>  
                        </div>
                      </div>

                       <div class="collapsible-body">
                        <div class="row">
                          <div class="col s4">
                          <img src="{!! asset('img/jerald.jpg') !!}" alt="" class="circle col s12">
                        </div>

                         <div class="col s4">
                            <span class="title">Title</span><br>
                            <a>First Line</a><br>
                            <a>First Line</a>
                          </div>

                          <div class="col s4">
                            <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                          </div>  
                        </div>
                      </div>
                    </li>
                   
            </ul>
        </div>
      </div>
    </div>
</aside>
<article class="main white"> <!--START OF MAIN-->    
  <h2 class="thin">Maps</h2>
  <div id="map" style="height: 600px;">
  </div>
</article> 
  <script>
        // Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error "The Geolocation service
        // failed.", it means you probably did not give permission for the browser to
        // locate you.

        function initMap() {
          var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 6
          });
          var infoWindow = new google.maps.InfoWindow({map: map});

          // Try HTML5 geolocation.
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
              };

              infoWindow.setPosition(pos);
              infoWindow.setContent('Location found.');
              map.setCenter(pos);
            }, function() {
              handleLocationError(true, infoWindow, map.getCenter());
            });
          } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
          }
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
          infoWindow.setPosition(pos);
          infoWindow.setContent(browserHasGeolocation ?
                                'Error: The Geolocation service failed.' :
                                'Error: Your browser doesn\'t support geolocation.');
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQ0SZWJZhR6tdJTL--VNQ7UKqrLr3qFc8&callback=initMap">
      </script>

  <!--END OF MAIN--> 
@endsection