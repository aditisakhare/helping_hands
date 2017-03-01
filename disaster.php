<?php 
include 'connection.php';
if(isset($_POST['submitb'])){

   $fname = $_POST['first_name'];
   $lname = $_POST['last_name'];
   $fl_no = $_POST['flat_no'];
   $bl_name = $_POST['building_name'];
   $area = $_POST['area'];
   $city = $_POST['city'];
   $state = $_POST['state'];
  $ho_no = $_POST['home_no'];
  $mob_no = $_POST['mobile_no'];
  $em_id = $_POST['email_id'];
 
 $sql = "INSERT INTO members (first_name , last_name , flat_no, building_name, area,city, state, home_no,mobile_no, email_id) VALUES ('$fname','$lname' , '$fl_no' , '$bl_name' , '$area' , '$city' , '$state', '$ho_no', '$mob_no' , '$em_id' )" ;
 $enter = mysqli_query($conn , $sql);

if(!$enter){
	die ("error inserting");
}
else {

	echo "values inserted"; 
}

}


?>

