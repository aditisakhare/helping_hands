<?php 
include 'connection1.php' ;

if(isset($_POST['submitb'])){

   $fname = $_POST['first_name'];
   $lname = $_POST['last_name'];   
  $mob_no = $_POST['mobile_no'];
  $em_id = $_POST['email_id'];
   $password = $_POST['password'];
   

 $sql = "INSERT INTO members (first_name , last_name ,mobile_no, email_id, password ) VALUES ('$fname','$lname', '$mob_no' , '$em_id','$password' )" ;
if(!mysqli_query($conn , $sql)){
  echo 'error values inserting';
}
else {

	echo "values inserted"; 
}

}


?>