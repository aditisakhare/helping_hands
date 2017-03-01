
<?php 

error_reporting(E_ALL & ~E_NOTICE);
session_start();
if($_POST['submit']){
    include_once("connection.php");
    $username = strip_tags($_POST['username']); //acessing info inside the form
      $password = strip_tags($_POST['password']);
    
    $sql = "SELECT id,username , password FROM members WHERE username = '$username' AND activated = '1' LIMIT 1  "; //acess to one persone only !
    
    $query = mysqli_query($dbCon , $sql);
    
    if($query){
        
        
        $row = mysqli_fetch_row($query);
        $userId = $row[0];
        $dbUsername = $row[1];
        $dbPassword = $row[2];
    }
    
    if($username == $dbUsername && $password == $dbPassword){
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $userId;
        header('Location: user.php');
        
    }else{
        
        echo"incoreect password my bui!";
    }
    
}

?>





<html>
<head>
    <title>
    Social Network
    </title>
    
    </head>
<body>
    
        <form method="post" action="index.php">
    Username : <input type="text" placeholder="username" name="username"  ><br>
    password : <input type="password"  placeholder ="password" name="password" ><br>     
    <input type="submit" value="log In " name="submit"><br>
         <input type="button" value="Sign up" >
      
        
     
    </form>
    
    </body>


</html>