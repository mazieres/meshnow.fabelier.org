<html>
<head>
</head>
<body>
	<b>Volunteering for nodes</b><br />
	<i>node_id|latitude|longitude|altitude|internet|noob0|noob1|noob2|noob3</i><br />
<?php 
$dbhandle = sqlite_open('nodes.db');
$query = sqlite_query($dbhandle, 'SELECT * FROM commit_nodes');
$result = sqlite_fetch_all($query, SQLITE_ASSOC);
foreach ($result as $entry) {
	echo nl2br($entry['id'] . '|' . $entry['latitude'] . '|' . $entry['longitude'] . '|' . $entry['altitude'] . '|' . $entry['internet'] . '|' . $entry['noob0'] . '|' . $entry['noob1'] . '|' . $entry['noob2'] . '|' . $entry['noob3'] . "<br />");
	}
?>
<br />
<b>Notified nodes</b><br />
<i>node_id|latitude|longitude|altitude|internet|radio|protocol|canal|ssid|os</i><br />
<?php 
$dbhandle = sqlite_open('nodes.db');
$query = sqlite_query($dbhandle, 'SELECT * FROM notify_nodes');
$result = sqlite_fetch_all($query, SQLITE_ASSOC);
foreach ($result as $entry) {
	echo nl2br($entry['id'] . '|' . $entry['latitude'] . '|' . $entry['longitude'] . '|' . $entry['altitude'] . '|' . $entry['internet'] . '|' . $entry['radio'] . '|' . $entry['protocol'] . '|' . $entry['canal'] . '|' . $entry['ssid'] . '|' . $entry['os'] . "<br />");
	}
?>
</body>
</html>