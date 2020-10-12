<!DOCTYPE html>
<html>
  <head>
    <title>Custom Markers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
        width: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;

      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(
            document.getElementById('map'),
            {center: new google.maps.LatLng(-33.91722, 151.23064), zoom: 16});

        var icon = {
            url: "bus.png", // url
            origin: new google.maps.Point(0,0), // origin
            anchor: new google.maps.Point(0, 0) // anchor
        };




        var features = [
          {
            position: new google.maps.LatLng(-33.91721, 151.22630),

          }, {
            position: new google.maps.LatLng(-33.91539, 151.22820),

          }, {
            position: new google.maps.LatLng(-33.91747, 151.22912),

          }, {
            position: new google.maps.LatLng(-33.91910, 151.22907),

          }, {
            position: new google.maps.LatLng(-33.91725, 151.23011),

          }, {
            position: new google.maps.LatLng(-33.91872, 151.23089),

          }, {
            position: new google.maps.LatLng(-33.91784, 151.23094),

          }, {
            position: new google.maps.LatLng(-33.91682, 151.23149),

          }, {
            position: new google.maps.LatLng(-33.91790, 151.23463),

          }, {
            position: new google.maps.LatLng(-33.91666, 151.23468),

          }, {
            position: new google.maps.LatLng(-33.916988, 151.233640),

          }
        ];






        // var i=0;
        //  @foreach($features as $feature)
        //  var lat = "{{$feature->live_lat}}";
        // var lng = "{{$feature->live_lng}}"
        // console.log(lat);
        // console.log(lng);
        //  var marker = new google.maps.Marker({
        //     position: new google.maps.LatLng(lat,lng),
        //     icon: icon,
        //     map: map
        //   });

        // @endforeach


        for (var i = 0; i < features.length; i++) {
          var marker = new google.maps.Marker({
            position: features[i].position,
            icon: icon,
            map: map
          });
        };
      }
    </script>
    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxeU25rpIkBdnXCGBgOcMDUunPjOjDSks&callback=initMap">
    </script>
  </body>
</html>
