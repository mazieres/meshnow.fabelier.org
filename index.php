<!DOCTYPE html>
<html>
  <head>
   	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="This project aims at mapping the volunteering effort in installing nodes for a ad-hoc network. Every node on the map is a routeur someone commited to install in case an initiative of building a meshwork reaches him" />
	<meta name="keywords" content="meshwork, network, meshnetwork, maille, distributed network, adhoc, ad-hoc, protocol, node, map" />
	<meta name="author" content="Antoine Mazieres, http://ant1.cc/" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    
	<title>Mesh Now</title>
	<link rel="shortcut icon" type="image/png" href="./img/favicon.gif" />
	<link rel="stylesheet" href="./css/style.css" type="text/css">
	<link rel="stylesheet" href="./css/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="./css/print.css" type="text/css" media="print">
    <link rel="stylesheet" href="./css/fancy.css" type="text/css" media="screen, projection">
	
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
	
	<style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
    </style>
    
	<script type="text/javascript" src="./js/jquery-1.4.3.min.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			$("#various1").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
			$("#various2").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'none',
				'transitionOut'		: 'none'
			});
		});
	</script>
	
	<script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDen9yjmx7D0_Gp5vRdph_hpFtQIAVPntk&sensor=false">
    </script>
    <script type="text/javascript">
		var map;
		function initialize() {
  			var myLatlng = new google.maps.LatLng(48.856614,2.352222);
  			var myOptions = {
		    zoom: 12,
		    center: myLatlng,
		    mapTypeId: google.maps.MapTypeId.ROADMAP
		  	}
  			map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

  			google.maps.event.addListener(map, 'click', function(event) {
    			alert('pouet');
  			});
			
			var myMarkerImageRed = new google.maps.MarkerImage('./img/wifi_spot_1.gif');
			var myMarkerImageBlack = new google.maps.MarkerImage('./img/wifi_spot_0.gif');
			
			<?php 
			$dbhandle = sqlite_open('nodes.db');
			$query = sqlite_query($dbhandle, 'SELECT * FROM commit_nodes');
			$result = sqlite_fetch_all($query, SQLITE_ASSOC);
			foreach ($result as $entry) {
				echo 'var myMarker' . $entry['id'] . '= new google.maps.Marker({position: new google.maps.LatLng(' . $entry['latitude'] . ',' . $entry['longitude'] . '), map: map, icon: myMarkerImageBlack, optimized: false});';
			}
			?>
			<?php 
			$dbhandle = sqlite_open('nodes.db');
			$query = sqlite_query($dbhandle, 'SELECT * FROM notify_nodes');
			$result = sqlite_fetch_all($query, SQLITE_ASSOC);
			foreach ($result as $entry) {
				echo 'var myMarker' . $entry['id'] . '= new google.maps.Marker({position: new google.maps.LatLng(' . $entry['latitude'] . ',' . $entry['longitude'] . '), map: map, icon: myMarkerImageRed, optimized: false});';
			}
			?>
		}
    </script>
  </head>
  <body onload="initialize()">
	<div class="container">
		<br />
		<div style="text-align:center"><h1>Mesh Now</h1>
		<hr>
		<h2 class="alt">This project aims at mapping the volunteering effort in installing nodes for <a href="https://en.wikipedia.org/wiki/Ad-hoc_network" target="_blank">Wireless Ad-hoc Networks</a>.</h2>
		<hr>
	      <div class="span-11 colborder">
	        <h4><img src="./img/wifi_spot_1.gif" /> An existing Node :: <a href="./notify_node.php">Add one</a></h4>
	      </div>
	      <div class="span-11 last">
	        <h4><img src="./img/wifi_spot_0.gif" /> A Node someone committed to install :: <a href="./commit_node.php">Add one</a></h4>
	      </div>
		  </div>
	</div>
	<div id="map_canvas" style="width:70%; height:70%; margin:auto"></div>
	<div class="container" style="text-align:right">
	        <a href="http://lists.fabelier.org/listinfo.cgi/meshnow-fabelier.org" target="_blank">Mailing-List</a> <b>|</b> <a href="http://wiki.fabelier.org/index.php?title=Mesh_Now" target="_blank">Wiki</a> <b>|</b> Made by <a href="http://ant1.cc/" target="_blank">@mazieres</a> <b>|</b> Hosted at <a href="http://fabelier.org" target="_blank">Fabelier</a> | <a href="./raw_data.php">Raw data</a>
	</div>
</body>
</html>
