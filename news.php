<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> News / Updates</title>
	 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">

#sec1{

	text-align: center;
	padding: 50px;
}
.jumbotron{

	text-align: center;
}
#sec1c1{

	text-align: left;
}
#jimg{

width: 100%;
height: auto;
}


  </style>

</head>
<body>


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



<div class="jumbotron" >
 <h1>News</h1>
 <p>We love sharing the stories of the work we do and of the incredible volunteers who allow us to impact communities in need around the world.

</p>
 <img src="1.jpg" id="jimg">
 	
 </div>

<div class="container" >
	<div class="row" id="sec1" >
	
	   <div class="col-md-4 " id="sec1c1">   	
           <h3>Media Contact</h3>
           <p>Tanya Glanville-Wallis, Director of Public Relations
Office: (+1) 508.758.8211
Email: tanya.gw@hands.org
</p>
	   </div> 


	   <div class="col-md-8 margin" id="sec1c2">
	      <h3>LATEST NEWS</h3>
	      <p>
	      	February 24, 2016 : Aaj tak <a>
	      		
	      		Helping hands volunteers helped around 300 people in nepal
	      	</a>

	      </p>
	   
	   	</div>

	   </div> 	
       

	   </div>

	    </div>


<div class="nav navbar-inverse navbar-bottom">
	<div class="container">

	<div class="navbar-text pull-left">
   <p>@copyright </p>


</div>

<div class="navbar-text pull-right">

<a href="#"><i class="fa fa-facebook fa-2x"> </i></a>
<a href="#"><i class="fa fa-google-plus fa-2x"> </i></a>
<a href="#"><i class="fa fa-twitter fa-2x"> </i></a>

</div>

<div class="modal fade" id="contact" role="dialog" >
    <div class="modal-dialog">
	
	       <div class="modal-content">
	           <form class="form-horizontal" role="form">


	           <div class="modal-header">
                <h4>Contact</h4>  
	            </div>
    
               
               <div class="modal-body">
              <div class="form-group">
    	        <label for="fname" class="col-sm-2   control-label">Name</label>
               <div class="col-sm-10" >
    	
    	      <input type="text" class="form-control" id="fname" placeholder="First Name " ></input>
         </div>


     </div>


     <div class="form-group">
    	        <label for="sname" class="col-sm-2   control-label">Surname</label>
               <div class="col-sm-10" >
    	
    	      <input type="text" class="form-control" id="sname" placeholder="surname " ></input>
         </div>


     </div>


     <div class="form-group">
    	        <label for="email" class="col-sm-2   control-label">Email</label>
               <div class="col-sm-10" >
    	
    	      <input type="email" class="form-control" id="email" placeholder="email id " ></input>
         </div>


     </div>



     <div class="form-group">
    	        <label for="mob-No" class="col-sm-2   control-label">Mobile No</label>
               <div class="col-sm-10" >
    	
    	      <input type="email" class="form-control" id="mob-No" placeholder="Mobile No " ></input>
         </div>


     </div>


       <div class="form-group">
    	        <label for="Msg" class="col-sm-2   control-label">Message</label>
               <div class="col-sm-10" >
    	
    	      <textarea class="form-control" rows="5"></textarea>
         </div>


     </div>
    	
 </div>



    <div class="modal-footer">
    	
    	<a class="btn btn-primary" data-dismiss="modal">close</a>
       <button type="submit" class="btn btn-primary" >Send</button>

    </div>

</div>

</div>
</div>


</body>
</html>