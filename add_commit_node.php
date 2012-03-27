<?php
$dbhandle = sqlite_open('nodes.db');
// CREATE TABLE commit_nodes(id INTEGER PRIMARY KEY, latitude REAL, longitude REAL, altitude INTEGER, internet TEXT, email TEXT, noob0 TEXT, noob1 TEXT, noob2 TEXT, noob3 TEXT);

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

$noob0 = "none";
$noob1 = "none";
$noob2 = "none";
$noob3 = "none";
$internet = "nonet";

if ($_POST['volunteer_kind0']):
	{
	$noob0 = "noob0";
	}
endif;
if ($_POST['volunteer_kind1']):
	{
	$noob1 = "noob1";
	}
endif;
if ($_POST['volunteer_kind2']):
	{
	$noob2 = "noob2";
	}
endif;
if ($_POST['volunteer_kind3']):
	{
	$noob3 = "noob3";
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

$query = 'INSERT INTO commit_nodes(latitude,longitude,altitude,internet,email,noob0,noob1,noob2,noob3) VALUES(' . $latitude . ',' . $longitude . ',' . $altitude . ',"' . $internet . '","' . $email . '","' . $noob0 . '","' . $noob1 . '","' . $noob2 . '","' . $noob3 . '");';
// print $query;
sqlite_query($dbhandle, $query);
?>
<a href="./index.php">Home</a>
