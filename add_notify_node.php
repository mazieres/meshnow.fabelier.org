<?php
$dbhandle = sqlite_open('nodes.db');
// CREATE TABLE notify_nodes(id INTEGER PRIMARY KEY, latitude REAL, longitude REAL, altitude INTEGER, internet TEXT, email TEXT, radio TEXT, protocol TEXT, canal TEXT, ssid TEXT, os TEXT);

function EmailValidation($email)
 { 
    $email = htmlspecialchars(stripslashes(strip_tags($email))); //parse unnecessary characters to prevent exploits
    
    if ( eregi ( '[a-z||0-9]@[a-z||0-9].[a-z]', $email ) ) 
	{ //checks to make sure the email address is in a valid format
    $domain = explode( "@", $email ); //get the domain name
        if ( @fsockopen ($domain[1],80,$errno,$errstr,3)) 
		{
            //if the connection can be established, the email address is probably valid
            return true;
        } else 
		{
            return false; //if a connection cannot be established return false
        }
    return false; //if email address is an invalid format return false
  }
}

$internet = "nonet";
$radio = "noradio";
$protocol = "noprotocol";
$canal = "nocanal";
$ssid = "nossid";
$os = "noos";

if ($_POST["radio"]):
	{
	$radio = strval($_POST["radio"]);
	} 
endif;
if ($_POST["protocol"]):
	{
	$protocol = strval($_POST["protocol"]);
	} 
endif;
if ($_POST["canal"]):
	{
	$canal = strval($_POST["canal"]);
	} 
endif;
if ($_POST["ssid"]):
	{
	$ssid = strval($_POST["ssid"]);
	} 
endif;
if ($_POST["os"]):
	{
	$os = strval($_POST["os"]);
	} 
endif;
if ($_POST["internet"]):
	{
	$internet = "net";
	} 
endif;

$latitude = "none";
$longitude = "none";
$altitude = "none";
$email = "none";

if (is_numeric($_POST['latitude'])) {
	$latitude = floatval($_POST['latitude']);
	}

if (is_numeric($_POST['longitude'])):
	{
	$longitude = floatval($_POST['longitude']);
	}
endif;

if (is_numeric($_POST['altitude'])):
	{
	$altitude = intval($_POST['altitude']);
	}
endif;

if (EmailValidation($_POST['email'])):
	{
	$email = str_replace('@','_at_',$_POST['email']);
	}
endif;

$query = 'INSERT INTO notify_nodes(latitude,longitude,altitude,internet,email,radio,protocol,canal,ssid,os) VALUES(' . $latitude . ',' . $longitude . ',' . $altitude . ',"' . $internet . '","' . $email . '","' . $radio . '","' . $protocol . '","' . $canal . '","' . $ssid . '","' . $os . '");';
// print $query;
sqlite_query($dbhandle, $query);
?>
<a href="./index.php">Home</a>
