<?php 
include 'connection1.php' ;

$query = "SELECT * FROM area";
$result = mysqli_query($conn , $query);



if(isset($_POST['submitb'])){

   $fname = $_POST['first_name'];
   $lname = $_POST['last_name'];
   $age = $_POST['age'];
   $fl_no = $_POST['flat_no'];
   $bl_name = $_POST['building_name'];
   $area = $_POST['area'];
   $city = $_POST['city'];
   $state = $_POST['state'];
  $ho_no = $_POST['home_no'];
  $mob_no = $_POST['mobile_no'];
  $em_id = $_POST['email_id'];
  $state= $_POST['area'];

 $sql = "INSERT INTO members (first_name , last_name , age , flat_no, building_name, area,city, state, home_no,mobile_no, email_id, state_s) VALUES ('$fname','$lname','$age' , '$fl_no' , '$bl_name' , '$area' , '$city' , '$state', '$ho_no', '$mob_no' , '$em_id','$state' )" ;
if(!mysqli_query($conn , $sql)){
  echo 'error values inserting';
}
else {

	echo "values inserted"; 
}

}


?>


