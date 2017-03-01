<?php

 $conn = mysqli_connect("localhost","Database", "backend@1234" , "payment_info") or die ("could not connect to database");
error_reporting(E_ALL & ~E_NOTICE);

if ($conn){

 echo "connected";

}else {

	echo "error";
}

?>