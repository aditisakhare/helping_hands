<?php

//include 'check.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>


<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1" >
	<title>Home</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"




></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 1000%;
      


  }
.navbar-inverse{
padding: 20px;
background-color: #2C3E50;
border-color:  #FFFFFF;
color: #FFFFFF;


}

.navbar-inverse.navbar-brand{

	color: #FFFFFF;

}
.navbar-inverse.navbar-brand,
.navbar-inverse.navbar-focus{


color: #18BC9C;
background-color: transparent;

}

.jumbotron{


	background-color:#FFFFFF ;
	width: 100%;


}

#vlounteers{

	background-color: #ff3300;
}

#home{

	background-color: #5c5c8a;
}

#countries{

	background-color: #0000cc;
}
#myCarousel{

	width: 100%;
	height: 1000px;
}

#img1,#img2,#img3,#img4{
  width: 100%;
  height: 900px;

}




  </style>

</head>
<body>





<!--navigation bar-->





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





<!--jumbotron-->




<div class="jumbotron text-center" style="margin:5px;">
<div style="padding: 60px;">
  <h1>Helping Hands</h1>      
  <p>Helping Hands Volunteers is an non-profit organization aimed at rebuilding humanity by addressing the immediate and long-term needs of communities impacted by natural disaster. </p>
</div>
</div>












<!--carousel -->





<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="1.jpg" alt="Chania" id="img1">
    </div>

    <div class="item">
      <img src="2.jpg" alt="Chania" id="img2">
    </div>

    <div class="item">
      <img src="3.jpg" alt="Flower" id="img3">
    </div>

    <div class="item">
      <img src="4.jpg" alt="Flower" id="img4">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>













<div class="container" style="padding: 20px;" >
	
	<div class="row" style="text-align: center;" >
		<h1>Reviews by Great people and their photo</h1>
		
        <div class="col-md-4 margin" style="padding: 20px;"  >

      <a href="#" class="thumbnail"> <img src="1.jpg" alt="thumbnail"></a>

       <p>	
From today's featured article
Regents of the University of California v. Bakke was a landmark Supreme Court decision in 1978 upholding affirmative action. It found diversity in the classroom to be a compelling state interest and allowed race to be one of several factors in college admission policy, but rejected specific quotas, such as the 16 out of 100 seats set aside for minority students by the UC Davis School of Medicine. Although the court had outlawed segregation in schools, it had not resolved the legality of voluntary affirmative action programs initiated by universities. Proponents deemed such programs necessary to make up for past discrimination, while opponents believed they violated the Equal Protection Clause of the Fourteenth Amendment. The case fractured the court: the nine justices issued a total of six opinions. The judgment of the court was written by Justice Lewis Powell, and two different blocs of four justices joined various parts of Powell's opinion. The decision had little practical effect on most affirmative action programs. In 2003 the court upheld Powell's position in a majority opinion in Grutter v. Bollinger. </p> 
        </div>





 <div class="col-md-4 margin" style="padding: 20px;"  >

      <a href="#" class="thumbnail"> <img src="1.jpg" alt="thumbnail"></a>

       <p>	
From today's featured article
Regents of the University of California v. Bakke was a landmark Supreme Court decision in 1978 upholding affirmative action. It found diversity in the classroom to be a compelling state interest and allowed race to be one of several factors in college admission policy, but rejected specific quotas, such as the 16 out of 100 seats set aside for minority students by the UC Davis School of Medicine. Although the court had outlawed segregation in schools, it had not resolved the legality of voluntary affirmative action programs initiated by universities. Proponents deemed such programs necessary to make up for past discrimination, while opponents believed they violated the Equal Protection Clause of the Fourteenth Amendment. The case fractured the court: the nine justices issued a total of six opinions. The judgment of the court was written by Justice Lewis Powell, and two different blocs of four justices joined various parts of Powell's opinion. The decision had little practical effect on most affirmative action programs. In 2003 the court upheld Powell's position in a majority opinion in Grutter v. Bollinger. </p> 
        </div>





        <div class="col-md-4 margin" style="padding: 20px;" >
       	<p>


      <a href="#" class="thumbnail"> <img src="1.jpg" alt="thumbnail"></a>

From today's featured article
Regents of the University of California v. Bakke was a landmark Supreme Court decision in 1978 upholding affirmative action. It found diversity in the classroom to be a compelling state interest and allowed race to be one of several factors in college admission policy, but rejected specific quotas, such as the 16 out of 100 seats set aside for minority students by the UC Davis School of Medicine. Although the court had outlawed segregation in schools, it had not resolved the legality of voluntary affirmative action programs initiated by universities. Proponents deemed such programs necessary to make up for past discrimination, while opponents believed they violated the Equal Protection Clause of the Fourteenth Amendment. The case fractured the court: the nine justices issued a total of six opinions. The judgment of the court was written by Justice Lewis Powell, and two different blocs of four justices joined various parts of Powell's opinion. The decision had little practical effect on most affirmative action programs. In 2003 the court upheld Powell's position in a majority opinion in Grutter v. Bollinger. 
<div class="footer-right">
	read more

</div>
        </p>
        </div>
    </div>
</div>



<!--updates Section -->





<div class="container" >
	
	<div class="row"  style="text-align: center;" >
	 <h1>Updates Section</h1>
		
		
        <div class="col-md-6 margin" style="padding: 20px;"  >

     

       <p>	
From today's featured article
Regents of the University of California v. Bakke was a landmark Supreme Court decision in 1978 upholding affirmative action. It found diversity in the classroom to be a compelling state interest and allowed race to be one of several factors in college admission policy, but rejected specific quotas, such as the 16 out of 100 seats set aside for minority students by the UC Davis School of Medicine. Although the court had outlawed segregation in schools, it had not resolved the legality of voluntary affirmative action programs initiated by universities. Proponents deemed such programs necessary to make up for past discrimination, while opponents believed they violated the Equal Protection Clause of the Fourteenth Amendment. The case fractured the court: the nine justices issued a total of six opinions. The judgment of the court was written by Justice Lewis Powell, and two different blocs of four justices joined various parts of Powell's opinion. The decision had little practical effect on most affirmative action programs. In 2003 the court upheld Powell's position in a majority opinion in Grutter v. Bollinger. </p> 
        </div>

        <div class="col-md-6 margin" style="padding: 20px;" >
       	<p>


      

From today's featured article
Regents of the University of California v. Bakke was a landmark Supreme Court decision in 1978 upholding affirmative action. It found diversity in the classroom to be a compelling state interest and allowed race to be one of several factors in college admission policy, but rejected specific quotas, such as the 16 out of 100 seats set aside for minority students by the UC Davis School of Medicine. Although the court had outlawed segregation in schools, it had not resolved the legality of voluntary affirmative action programs initiated by universities. Proponents deemed such programs necessary to make up for past discrimination, while opponents believed they violated the Equal Protection Clause of the Fourteenth Amendment. The case fractured the court: the nine justices issued a total of six opinions. The judgment of the court was written by Justice Lewis Powell, and two different blocs of four justices joined various parts of Powell's opinion. The decision had little practical effect on most affirmative action programs. In 2003 the court upheld Powell's position in a majority opinion in Grutter v. Bollinger. 
<div class="footer-right">
	read more

</div>
        </p>
        </div>
    </div>
</div>






<!-- Additional info about the company-->



<div class="container" >
	
	<div class="row"  style="text-align: center;" >
	
		
		
        <div  id="vlounteers" class="col-md-4 margin" style="padding-top: 60px;"  >
<i class="fa fa-users fa-5x"></i>

         <div style="padding: 60px;">
<p>No of Volunteers present right now</p></div>
</div>

        <div id="home"  class="col-md-4 margin" style="padding-top: 60px;"   >

<i class="fa fa-globe fa-5x"></i>

          <div  style="padding: 60px;">
<p>No of Volunteers present right now</p>
</div>
</div>


        <div id="countries" class="col-md-4 margin" style="padding-top: 60px;"  >
 
<i class="fa fa-home fa-5x"></i>
         <div style="padding: 60px;">
<p>No of Volunteers present right now</p></div>
     
        </div>

       
        </div>
    </div>
</div>





<!-- Volunteer andd Donate -->





<div class="container" >
	
	<div class="row"  style="text-align: center;" >
	 <h1>Want to help?</h1>
		
		
        <div class="col-md-6 margin" style="padding: 60px;"  >

     <button type="button" onclick="window.location.href='donationf.php'" class="btn btn-default btn-lg">Donating</button>

     <div class="margin" style="padding: 60px;">
     <p>Dont have time still want to help?  </p>
        <p>you can help us by donating money or necessary things</p> 
</div>


        </div>

        <div class="col-md-6 margin" style="padding: 60px;" >
       	    
<button type="button" onclick="window.location.href='volunteersg.php'" class="btn btn-default btn-lg">Volunteer</button>



<div class="margin" style="padding: 60px;" >
<p> Want to participate in helping drivers you can!! </p>
     </div> 


        </div>
    </div>
</div>










<!-- Modal -->
<div class="modal fade" id="contact" role="dialog" >
    <div class="modal-dialog">
	
	       <div class="modal-content">
	           <form class="form-horizontal" role="form">


	           <div class="modal-header">
                <h4>Contact</h4>  
	            </div>
    
               
               <div class="modal-body">
              <div class="form-group">
              <form name="sos" method="post" action="check.php">

    	        <label for="first_name" class="col-sm-2   control-label">Name</label>
               <div class="col-sm-10" >
    	
    	      <input type="text" class="form-control" name="first_name" id="fname" placeholder="First Name " ></input>
         </div>


     </div>


     <div class="form-group">
    	        <label for="last_name" class="col-sm-2   control-label">Surname</label>
               <div class="col-sm-10" >
    	
    	      <input type="text" class="form-control" name="last_name" id="sname" placeholder="surname " ></input>
         </div>


     </div>

     


     <div class="form-group">
    	        <label for="email" class="col-sm-2   control-label">Email</label>
               <div class="col-sm-10" >
    	
    	      <input type="email" class="form-control" name="email" id="email" placeholder="email id " ></input>
         </div>


     </div>

     <div class="form-group">
              <label for="location"  class="col-sm-2   control-label">Location</label>
               <div class="col-sm-10" >
      
            <input type="text" class="form-control" name="location" id="sname" placeholder="Location " ></input>
         </div>


     </div>



     <div class="form-group">
    	        <label for="telephone" class="col-sm-2   control-label">Mobile No</label>
               <div class="col-sm-10" >
    	
    	      <input type="text" name="telephone" class="form-control" id="mob-No" placeholder="Mobile No " ></input>
         </div>


     </div>


       <div class="form-group">
    	        <label for="comments" class="col-sm-2   control-label">Message</label>
               <div class="col-sm-10" >
    	
    	      <textarea class="form-control" name="comments" rows="5"></textarea>
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



</div>
</div>








</body>
</html>