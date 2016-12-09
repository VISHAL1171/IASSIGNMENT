<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <h1>Aparna buildings</h1>
</head>
<body>
<div class="container-fluid">
<p> to know about reident living here &amp their opinion about life style<a href="rinfo1.php"> click here</a></p>
<h3 class="text-center">contact info </h3>
<ol><li>MOBILE No.1:+9199887766554433</li><li>Mobile no.2:+91223344556677</li><li>email:dealer@yahoo.com</li><li>fill the form  dealer will
    contact you <a href="form.php">click here for form</a></li></ol>




<div id="map-container" class="col-md-12"></div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
 <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
 <script>

   function init_map() {
     var var_location = new google.maps.LatLng(45.430817,12.331516);

     var var_mapoptions = {
       center: var_location,
       zoom: 14
     };

     var var_marker = new google.maps.Marker({
         position: var_location,
         map: var_map,
         title:"Venice"});

     var var_map = new google.maps.Map(document.getElementById("map-container"),
         var_mapoptions);

     var_marker.setMap(var_map);

   }

   google.maps.event.addDomListener(window, 'load', init_map);

 </script>
</div>

</div>
</body>
</html>
