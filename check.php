<?php
 include 'connect.php';


$first_name= $_POST['first_name'];
$last_name= $_POST['last_name'];
$email_from= $_POST['email'];
$telephone= $_POST['telephone'];
$message= $_POST['comments'];
$location= $_POST['location'];
$error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
  
  $loc_exp = "/^[A-Za-z0-9.'-]+$/";
  
 /* if(!preg_match($loc_exp,$location)) {
	  $error_message .= 'The Location entered does not appear to be valid.<br />';
  }
 */ 
  $num_exp = "/^[0-9]*$/";
  
  if(!preg_match($num_exp,$telephone)&& (strlen($telephone) != 10)) {
	$error_message .= 'The mobile number does not appear to be valid.<br />';
  }
  
  if(strlen($message) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    die($error_message);
  }
?>
<?php 

function getCoordinates($address){
    $address = urlencode($address);
    $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=" . $address;
    $response = file_get_contents($url);
    $json = json_decode($response,true);
 
    $lat = $json['results'][0]['geometry']['location']['lat'];
    $lng = $json['results'][0]['geometry']['location']['lng'];
 
    return array($lat, $lng);
}
 
 
$coords = getCoordinates($location);
print_r($coords);
?>
<html>
<body>
<h1>SOS Message Sent!</h1>
<p>Your mail has been successfully sent to:</p>
<?php
session_start();
include('connect.php');
$sqlquery = "SELECT * FROM `email`";
$result = mysql_query($sqlquery,$connect);
$to = '';
while($row=mysql_fetch_array($result)) {
	echo $row['email'] . '<br/>';
	//$add = $row['email'];
	$to .= $row['email'] .',';
}

rtrim($to,',');

if(!isset($_POST['submit'])) {
	$msg = 'First Name: ' .$first_name ."\n"
	    . 'Last Name: ' .$last_name ."\n"
		. 'Email ID: ' .$email_from ."\n"
		. 'Mobile Number: ' .$telephone ."\n"
		. 'Messsage: ' .$message ."\n"
		. 'Location Co-ordinates: ' .$location;
	mail($to,'EMERGENCY',$msg);	
}
else {
	header('location: sos.html');
	exit(0);
}
?>
</body>
</html>