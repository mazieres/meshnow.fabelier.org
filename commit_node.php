<!DOCTYPE html>
<html>
  <head>
   	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="This project aims at mapping the volunteering effort in installing nodes for a ad-hoc network. Every node on the map is a routeur someone commited to install in case an initiative of building a meshwork reaches him" />
	<meta name="keywords" content="meshwork, network, meshnetwork, maille, distributed network, adhoc, ad-hoc, protocol, node, map" />
	<meta name="author" content="Antoine Mazieres, http://ant1.cc/" />
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    
	<title>Mesh Now :: Volunteer to host a node</title>
	<link rel="shortcut icon" type="image/png" href="./img/favicon.gif" />
	<link rel="stylesheet" href="./css/style.css" type="text/css">
	<link rel="stylesheet" href="./css/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="./css/print.css" type="text/css" media="print">
    <link rel="stylesheet" href="./css/fancy.css" type="text/css" media="screen, projection">
	
  </head>
  <body>
	<div class="container" style="text-align:justify">
		<br />
		<div style="text-align:center"><h1>Mesh Now</h1>
		<hr>
		<h2 class="alt">Volonteer to host a Node</a>.</h2>
		<hr></div>
	    <h4>Volonteering to install a node means you are interested in contributing if an initiative of building a wireless ad-hoc network reaches you. This means that if someone take the time to explain you how to do install a node, or helps you do it, or even send you a router to plug to your network, you will be quite happy !</h4>
		<h4>Please fill this form with great attention and provide a valid email address so we can contact you when some help or router is ready</h4>
		<form method="post" action="add_commit_node.php">
			<br />
			<input type="checkbox" name="volunteer_kind0" value="noob0" />I understand the idea and would like to contrubute, but I don't understand anything about what need to be done
			<br />
			<input type="checkbox" name="volunteer_kind1" value="noob1" />If someone explain me how to do this, i would be glad to install a router here
			<br />
			<input type="checkbox" name="volunteer_kind2" value="noob2" />If someone visit me and help me install one of my router here, I would be glad to contribute.
			<br />
			<input type="checkbox" name="volunteer_kind3" value="noob3" />If someone send me a router to plug on my network, I would be glad to install a router here
			<br />
			<br />
			<h5>Exact position of the router</h5>
			Please have a look at <a href="http://wiki.fabelier.org/index.php?title=Mesh_Now#Finding_the_exact_position_of_a_router" target="_blank">this page</a> in order to provide useful information about the router exact position
			<br />
			Latitude: <input type="text" name="latitude" /> Example: 48.825191<br />
			Longitude: <input type="text" name="longitude" /> Example: 2.3294<br />
			Altitude: <input type="text" name="altitude" /> In meters. Example: 52<br />
			<br />
			<input type="checkbox" name="internet" value="net" />You can provide an internet connection for the router
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


