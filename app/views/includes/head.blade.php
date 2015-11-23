<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sizzle Order Pizza Online</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/modal.css" rel="stylesheet">

    <link href="../bootstrap/css/custom.css" rel="stylesheet" type="text/css">
    <link href="../bootstrap/css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/image-picker.css">
    <link rel="stylesheet" href="../bootstrap/css/stylesheet.css" type="text/css"

    <!-- Java Scripts Links -->
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
      <link rel="stylesheet" href="/resources/demos/style.css">


     <!-- Google Maps  -->
     <script src="http://maps.googleapis.com/maps/api/js"></script>
     <script>
        var map;
        var myCenter=new google.maps.LatLng(8.238434, 124.249320);

        function initialize()
        {
        var mapProp = {
          center:myCenter,
          zoom:14,
          mapTypeId:google.maps.MapTypeId.ROADMAP
          };

          map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

          google.maps.event.addListener(map, 'click', function(event) {
            placeMarker(event.latLng)
          });
        }

        var marker;

        function placeMarker(location) {
          if ( marker ) {
            marker.setPosition(location);
          } else {
            marker = new google.maps.Marker({
              position: location,
              map: map            
            });
          }

          marker.setMap(map);

          var infowindow = new google.maps.InfoWindow({
            content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
          });
          infowindow.open(map,marker);
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <!-- For hide and show -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../bootstrap/css/normalize.css" type="text/css" rel="stylesheet">
    
    <link href="../bootstrap/css/core.css" type="text/css" rel="stylesheet">
    
<!--
    <script src="../bootstrap/dev/js/vendor/jquery/jquery-2.0.3.js"></script>
    <link rel="stylesheet/less" href="../bootstrap/dev/less/app.less">
    <script src="../bootstrap/dev/js/vendor/other/less-1.5.0.min.js"></script>
    <script src="../bootstrap/dev/js/vendor/bootstrap/transition.js"></script>
    <script src="../bootstrap/dev/js/vendor/bootstrap/dropdown.js"></script>
    <script src="../bootstrap/dev/js/vendor/bootstrap/collapse.js"></script>
-->