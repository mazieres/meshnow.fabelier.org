<!DOCTYPE html>
<html>
  <head>
   	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="This project aims at mapping the volunteering effort in installing nodes for a ad-hoc network. Every node on the map is a routeur someone commited to install in case an initiative of building a meshwork reaches him" />
	<meta name="keywords" content="meshwork, network, meshnetwork, maille, distributed network, adhoc, ad-hoc, protocol, node, map" />
	<meta name="author" content="Antoine Mazieres, http://ant1.cc/" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    
	<title>Mesh Now :: Notify an existing Node</title>
	<link rel="shortcut icon" type="image/png" href="./img/favicon.gif" />
	<link rel="stylesheet" href="./css/style.css" type="text/css">
	<link rel="stylesheet" href="./css/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="./css/print.css" type="text/css" media="print">
    <link rel="stylesheet" href="./css/fancy.css" type="text/css" media="screen, projection">
	
  </head>
  <body>
	<div class="container" style="text-align:justify">
		<br />
		<div style="text-align:center"><h1><a href="http://meshnow.fabelier.org/" style="text-decoration:none;color:black">Mesh Now</a></h1>
		<hr>
		<h2 class="alt">Notify an existing Node</a>.</h2>
		<hr></div>
	    <h4>Notifying a node means you are interested in providing information about Nodes of an existing meshwork and that you would be suite happy to receive proposals to connect with other networks</h4>
		<h4>Please fill this form with great attention and provide a valid email address so network neighbours can contact you</h4>
		<form method="post" action="add_notify_node.php">
			<br />
			<h5>Exact position of the router</h5>
			Please have a look at <a href="http://wiki.fabelier.org/index.php?title=Mesh_Now#Finding_the_exact_position_of_a_router" target="_blank">this page</a> in order to provide useful information about the router exact position
			<br />
			<br />
			Latitude: <input type="text" name="latitude" /> Example: 48.825191<br />
			Longitude: <input type="text" name="longitude" /> Example: 2.3294<br />
			Altitude: <input type="text" name="altitude" /> In meters. Example: 52<br />
			<br />
			<h5>Router and network specifications</h5>
			
			<input type="checkbox" name="internet" value="net" />The router is connected to the internet<br />
			Radio standard: <input type="text" name="radio" /><br />
			Protocol: <input type="text" name="protocol" /><br />
			Canal/Frequence: <input type="text" name="canal" /><br />
			SSID: <input type="text" name="ssid" /><br />
			Operating System: <input type="text" name="os" /><br />
			<br />
			<p>Email: <input type="text" name="email" /></p>
			<br />
			<input type="submit" value="Submit" />
		</form>
		<br />
		<hr>
		<div style="text-align:right"><a href="http://lists.fabelier.org/listinfo.cgi/meshnow-fabelier.org" target="_blank">Mailing-List</a> <b>|</b> <a href="http://wiki.fabelier.org/index.php?title=Mesh_Now" target="_blank">Wiki</a> <b>|</b> Made by <a href="http://ant1.cc/" target="_blank">@mazieres</a> <b>|</b> Hosted at <a href="http://fabelier.org" target="_blank">Fabelier</a> | <a href="./raw_data.php">Raw data</a></div>
	</div>
</body>
</html>


