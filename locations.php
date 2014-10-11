<div id="content_small">
	<h1>LOCATIONS</h1>
	<div id="map_canvas">
		
	</div>
</div>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
	function initialize() {
        var mapCanvas = document.getElementById('map_canvas');
        var mapOptions = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(mapCanvas, mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
</script>