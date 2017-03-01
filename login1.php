<html>

<head>
    <title>Log In </title>
	<style>
	label
    {
        vertical-align:middle;
    }

	</style>
<head>

<body>

<?php
session_start();
  include 'connect1.php';
  $b=$a=$c=$d='';
  $x='submit';
  echo $x;
  if(isset($_POST['sub1']))
     {
	    if($_POST['b1']==1)
		    {
			$a='checked';
			$_SESSION['p']=1;
			echo $_SESSION['p'];
			}
		else if($_POST['b1']==2)
		    {
			$b='checked';
			$_SESSION['q']=1;
			echo $_SESSION['q'];
			}
		else if($_POST['b1']==3)
		    {
			$c='checked';
			$_SESSION['r']=1;
			echo $_SESSION['r'];
			}
        else if($_POST['b1']==4)
		    {
			$d='checked';
			$_SESSION['s']=1;
			echo $_SESSION['s'];
			}	
		if($_POST['b1']!=0)
		$x='hidden';	
	 }
	 if(isset($_POST['b1']))
	   echo $_POST['b1'];
  echo "<form action='' method='post'>

               <input type='hidden' name='b1' value=0 />
                     <div>
	                     <label for='b1'>User</label>
	                     <input type='radio' id='b1' value=1 name='b1' <?php echo $a ?  />
					</div>
                    <div>					
                         <label for='b1'>Government Official</label>
	                      <input type='radio' id='b1' name='b1' value=2 <?php echo $b ? /> 
					</div>
					<div>
                         <label for='b1'>NGO Official</label>
	                     <input type='radio' id='b1' name='b1' value=3 <?php echo $c ?  /> 
					</div>
					<div>
                         <label for='b1'>NGO Volunteers</label>
	                    <input type='radio' id='b1' name='b1' value=4 <?php echo $d ?  /> 	
                     </div>
	                 <div>
					    <button type=<?php echo $x ?  id='submit' value='Continue' name='sub1' >Continue </button>
					</div>	
        </form>";  
    echo $x;
	if(isset($_POST['sub1']))
	 {
	 
	 if($_POST['b1']==1)
	 {
	  echo "</br>";
	  echo "
	        <form action='' method='post'>
			   <fieldset>
			     <Legend>Log In As User:</legend>
                <br/>

                <br/>
                <div>
                <label for='user'>Name:</label>
                <input type='text' id='user' name='user' autocapitalize='words' required autofocus/>
                </div> </br>

                <div>
                <label for='mail'>Email:</label>
                <input type='email' id='mail' name='mail' required />
                </div> </br> 
				<div>
               <label for='pass'>Password:</label>
               <input type='password' id='pass' name='pass' minlength=6 required/>
                </div>
                <div>
        
                <button type='submit' id='submit' value='Sign Up' name='sub2' > Log in </button>
                </div>
				</fieldset>
                </form>";
       }
	}
	
if(isset($_POST['sub1']))
	 {
	 
	 if($_POST['b1']==2)
	 {
	  echo "</br>";
	  echo "
	        <form action='' method='post'>
			   <fieldset>
			     <Legend>Log In As Govt. Official:</legend>
                <br/>

                <br/>
                <div>
                <label for='user'>Name:</label>
                <input type='text' id='user' name='user' autocapitalize='words' required autofocus/>
                </div> </br>

                <div>
                <label for='mail'>Email:</label>
                <input type='email' id='mail' name='mail' required />
                </div> </br> 
				
				<div>
               <label for='key'>Security Key:</label>
               <input type='text' id='key' name='key' required/>
                </div>
				
				<div>
               <label for='pass'>Password:</label>
               <input type='password' id='pass' name='pass' minlength=6 required/>
                </div>
                <div>
        
                <button type='submit' id='sub3' value='Sign Up' name='sub3' > Login </button>
                </div>
				</fieldset>
                </form>";
       }
	}
	
	
	
	if(isset($_POST['sub1']))
	 {
	 
	 if($_POST['b1']==3)
	 {
	  echo "</br>";
	  echo "
	        <form action='' method='post'>
			   <fieldset>
			     <Legend>Log In As NGO Official:</legend>
                <br/>

                <br/>
                <div>
                <label for='user'>Name:</label>
                <input type='text' id='user' name='user' autocapitalize='words' required autofocus/>
                </div> </br>

                <div>
                <label for='mail'>Email:</label>
                <input type='email' id='mail' name='mail' required />
                </div> </br> 
				
				<div>
               <label for='key'>Security Key:</label>
               <input type='text' id='key' name='key' required/>
                </div>
				
				<div>
               <label for='pass'>Password:</label>
               <input type='password' id='pass' name='pass' minlength=6 required/>
                </div>
                <div>
        
                <button type='submit' id='sub4' value='Sign Up' name='sub4' > Login </button>
                </div>
				</fieldset>
                </form>";
       }
	}
	
	if(isset($_POST['sub1']))
	 {
	 
	 if($_POST['b1']==4)
	 {
	  echo "</br>";
	  echo "
	        <form action='' method='post'>
			   <fieldset>
			     <Legend>Log In As NGO Volunteer:</legend>
                <br/>

                <br/>
                <div>
                <label for='user'>Name:</label>
                <input type='text' id='user' name='user' autocapitalize='words' required autofocus/>
                </div> </br>

                <div>
                <label for='mail'>Email:</label>
                <input type='email' id='mail' name='mail' required />
                </div> </br> 
				
				<div>
               <label for='key'>Security Key Given By NGO:</label>
               <input type='text' id='key' name='key' required/>
                </div>
				
				<div>
               <label for='pass'>Password:</label>
               <input type='password' id='pass' name='pass' minlength=6 required/>
                </div>
                <div>
        
                <button type='submit' id='sub5' value='Sign Up' name='sub5' > Login </button>
                </div>
				</fieldset>
                </form>";
       }
	}
	
	
	
	
	if(isset($_POST['sub2']))
	{
	  $user=$_POST['user'];
	  $mail=$_POST['mail'];
	  $password=$_POST['pass'];
	  $sql = "SELECT * FROM infouser WHERE username='$user' AND email='$mail' AND password='$password'";
	  $res=mysql_query($sql);
	  
	  if(mysql_num_rows($res) >=1)
	 {
		echo $sql;
		while($row=mysql_fetch_array($res))
		{
			$_SESSION['s_user'] = $user;
				header('location:final1.php');
		
		}	
	 }
	  else echo "Invalid details";
	}
	if(isset($_POST['sub3']))
	{
	  $user=$_POST['user'];
	  $mail=$_POST['mail'];
	  $key=$_POST['key'];
	  $password=$_POST['pass'];
	  $sql = "SELECT * FROM infogovt WHERE name='$user' AND email='$mail' AND password='$password' AND security='$key'";
	  echo $sql;
	  $res=mysql_query($sql);
	  
	  echo $res;
	  if(mysql_num_rows($res) >=1)
	 {
		echo $sql;
		while($row=mysql_fetch_array($res))
		{
			$_SESSION['s_user'] = $user;
				header('location:final1.php');
		
		}	
	 }
	 echo "Invalid details";
	}
	if(isset($_POST['sub4']))
	{
	  $user=$_POST['user'];
	  $mail=$_POST['mail'];
	  $key=$_POST['key'];
	  $password=$_POST['pass'];
	  $sql = "SELECT * FROM infongo WHERE name='$user' AND email='$mail' AND password='$password' AND security='$key'";
	  $res=mysql_query($sql);
	  
	  if(mysql_num_rows($res) >=1)
	 {
		echo $sql;
		while($row=mysql_fetch_array($res))
		{
			$_SESSION['s_user'] = $user;
				header('location:final1.php');
		
		}	
	 }
	  echo "Invalid details";
	}
	if(isset($_POST['sub5']))
	{
	  $user=$_POST['user'];
	  $mail=$_POST['mail'];
	  $key=$_POST['key'];
	  $password=$_POST['pass'];
	  $sql = "SELECT * FROM infovolunteer WHERE name='$user' AND email='$mail' AND password='$password' AND security='$key' ";
	  $res=mysql_query($sql);
	  
	  if(mysql_num_rows($res) >=1)
	 {
		echo $sql;
		while($row=mysql_fetch_array($res))
		{
			$_SESSION['s_user'] = $user;
				header('location:final1.php');
		
		}	
	 }
	 echo "Invalid Details";
	}

?>   
</body>
</html>					