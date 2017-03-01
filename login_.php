
<!DOCTYPE html>
<html lang="en">
<head>


<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1" >
	<title>login</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"

></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


<style type="text/css">
.col-sm-8{

	padding:60px;

}	

</style>


</head>






<nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom: 0px;" >
	 
  <!-- logo -->

	<div class="container-fluid">
		
      <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavbar" >
       	
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>


       </button>
      	
        <a href="#" class="navbar-brand">HELPING HANDS </a>

      </div>
  

     <!-- nav menu -->

     <div class="collapse navbar-collapse" id="mainNavbar" role="navigation" >



     	<ul class="nav navbar-nav navbar-right">
     	 	

     	 	<li><a href="homepage.php" >Home </a></li>
        
     	 	
     	 	
          <!-- menu with  drop down -->

          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">About us</a>
          <ul class="dropdown-menu">
          <li><a href="whatmakes.php"> What makes us unique</a></li>      
          <li><a href="news.php">News/Updates</a></li>
          <li><a href="team.php">team</a></li>
          <li><a href="guidelines.php">Guide Lines</a></li>
          <li><a href="#">Conatct Us</a></li>
          </ul>
          </li>


          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Projects</a>
          <ul class="dropdown-menu">
          <li><a href="active_projects.php"> Active Projects</a></li>
          <li><a href="updates.php">updates </a></li>
          <li><a href="#">All Projects </a></li>
          </ul>
          </li>


          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Volunteers</a>
          <ul class="dropdown-menu">
          <li><a href="volunteers.php"> Volunteers with all hand</a></li>
          <li><a href="#">Voluntters blog</a></li>

          
          </ul>
          </li>
 

      

        <li><a href="#contact"data-toggle="modal"> sos</a> </li>       

        
        	
             	<li><a href="#"  > <span class="glyphicon glyphicon-log-in"></span>   login </a></li>
             		<li><a href="#" > <span class="glyphicon glyphicon-user"></span> Sign up </a></li>



        </ul>
     </div>
	</div>

</nav>






















<div class="container">
     <body>
      <div class="row" >
    <div class="col-sm-8" >

    <button type="button" data-target="#users" data-toggle="modal" class="btn btn-primary btn-lg">Users</button>
     </div>
     </div>



       <div class="row">
    <div class="col-sm-8">

    <button type="button"  data-target="#vol" data-toggle="modal" class="btn btn-primary btn-lg">volunteers</button>
     </div>
     </div>


      <div class="row">
    <div class="col-sm-8">

    <button type="button" data-target="#gov" data-toggle="modal" class="btn btn-primary btn-lg">Goverment officials</button>
     </div>
     </div>



      <div class="row">
    <div class="col-sm-8">

    <button type="button"  data-target="#ngo" data-toggle="modal" class="btn btn-primary btn-lg">Ngo officials</button>
     </div>
     </div>





<div class="modal fade" id="users" role="dialog" >
    <div class="modal-dialog">
	
	       <div class="modal-content">
	           <form class="form-horizontal" role="form">


	           <div class="modal-header">
                <h4>login</h4>  
	            </div>
    
               
               <div class="modal-body">
               <form  method="post" action="">


             <div class="form-group">
           <label for="first_name" class="col-sm-2   control-label">Name</label>
               <div class="col-sm-10" >
    	
    	      <input type="text" class="form-control" name="first_name" id="fname" placeholder="First Name " ></input>
         </div>


     </div>



               
           <div class="form-group">
           <label for="first_name" class="col-sm-2   control-label">Name</label>
               <div class="col-sm-10" >
    	
    	      <input type="text" class="form-control" name="first_name" id="fname" placeholder="First Name " ></input>
         </div>


     </div>    


     


     <div class="form-group">
    	        <label for="email" class="col-sm-2   control-label">Email</label>
               <div class="col-sm-10" >
    	
    	      <input type="email" class="form-control" name="email" id="email" placeholder="email id " ></input>
         </div>


   
</form>

     </div>
    	
 </div>



    <div class="modal-footer">
    	
    	<a class="btn btn-primary" data-dismiss="modal">close</a>
       <button type="submit" class="btn btn-primary" >Submit</button>

    </div>

</div>

</div>
</div>












<div class="modal fade" id="vol" role="dialog" >
    <div class="modal-dialog">
	
	       <div class="modal-content">
	           <form class="form-horizontal" role="form">


	           <div class="modal-header">
                <h4>login</h4>  
	            </div>
    
               
               <div class="modal-body">
               <form  method="post" action="">


             <div class="form-group">
           <label for="first_name" class="col-sm-2   control-label">Name</label>
               <div class="col-sm-10" >
    	
    	      <input type="text" class="form-control" name="first_name" id="fname" placeholder="First Name " ></input>
         </div>


     </div>



               
           <div class="form-group">
           <label for="first_name" class="col-sm-2   control-label">Name</label>
               <div class="col-sm-10" >
    	
    	      <input type="text" class="form-control" name="first_name" id="fname" placeholder="First Name " ></input>
         </div>


     </div>    


     


     <div class="form-group">
    	        <label for="email" class="col-sm-2   control-label">Email</label>
               <div class="col-sm-10" >
    	
    	      <input type="email" class="form-control" name="email" id="email" placeholder="email id " ></input>
         </div>


   
</form>

     </div>
    	
 </div>



    <div class="modal-footer">
    	
    	<a class="btn btn-primary" data-dismiss="modal">close</a>
       <button type="submit" class="btn btn-primary" >Submit</button>

    </div>

</div>

</div>
</div>









<div class="modal fade" id="gov" role="dialog" >
    <div class="modal-dialog">
	
	       <div class="modal-content">
	           <form class="form-horizontal" role="form">


	           <div class="modal-header">
                <h4>login</h4>  
	            </div>
    
               
               <div class="modal-body">
               <form  method="post" action="">


             <div class="form-group">
           <label for="first_name" class="col-sm-2   control-label">Name</label>
               <div class="col-sm-10" >
    	
    	      <input type="text" class="form-control" name="first_name" id="fname" placeholder="First Name " ></input>
         </div>


     </div>



               
           <div class="form-group">
           <label for="first_name" class="col-sm-2   control-label">Name</label>
               <div class="col-sm-10" >
    	
    	      <input type="text" class="form-control" name="first_name" id="fname" placeholder="First Name " ></input>
         </div>


     </div>    


     


     <div class="form-group">
    	        <label for="email" class="col-sm-2   control-label">Email</label>
               <div class="col-sm-10" >
    	
    	      <input type="email" class="form-control" name="email" id="email" placeholder="email id " ></input>
         </div>


   
</form>

     </div>
    	
 </div>



    <div class="modal-footer">
    	
    	<a class="btn btn-primary" data-dismiss="modal">close</a>
       <button type="submit" class="btn btn-primary" >Submit</button>

    </div>

</div>

</div>
</div>











<div class="modal fade" id="ngo" role="dialog" >
    <div class="modal-dialog">
	
	       <div class="modal-content">
	           <form class="form-horizontal" role="form">


	           <div class="modal-header">
                <h4>login</h4>  
	            </div>
    
               
               <div class="modal-body">
               <form  method="post" action="">


             <div class="form-group">
           <label for="first_name" class="col-sm-2   control-label">Name</label>
               <div class="col-sm-10" >
    	
    	      <input type="text" class="form-control" name="first_name" id="fname" placeholder="First Name " ></input>
         </div>


     </div>



               
           <div class="form-group">
           <label for="first_name" class="col-sm-2   control-label">Name</label>
               <div class="col-sm-10" >
    	
    	      <input type="text" class="form-control" name="first_name" id="fname" placeholder="First Name " ></input>
         </div>


     </div>    


     


     <div class="form-group">
    	        <label for="email" class="col-sm-2   control-label">Email</label>
               <div class="col-sm-10" >
    	
    	      <input type="email" class="form-control" name="email" id="email" placeholder="email id " ></input>
         </div>


   
</form>

     </div>
    	
 </div>



    <div class="modal-footer">
    	
    	<a class="btn btn-primary" data-dismiss="modal">close</a>
       <button type="submit" class="btn btn-primary" >Submit</button>

    </div>

</div>

</div>
</div>










</body>
</html>