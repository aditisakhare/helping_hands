<?php

 $conn = mysqli_connect("localhost","Database", "backend@1234" , "affected_area") or die ("could not connect to database");
error_reporting(E_ALL & ~E_NOTICE);

if ($conn){

 echo "connected";

}else {

	echo "error";
}

?>



  