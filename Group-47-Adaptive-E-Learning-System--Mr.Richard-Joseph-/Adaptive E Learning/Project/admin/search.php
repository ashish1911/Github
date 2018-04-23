<?php
session_start();
if(isset($_SESSION['aid']))
{
?>

<html class="no-js">
<!--<![endif]-->

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Adaptive E-Learning Question | Abstraction LO </title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-theme.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style1.css">
  <!-- skin -->
  <link rel="stylesheet" href="skin/default.css">
  <style>
  .wrapper {
    border:1px solid #000;
	padding-top:10px;
    display:inline-block;
	width : 220px
}

input,
button {
    background-color:transparent;
    border:0;
}
	</style>
  
  
  <script>
 
  </script>

</head>

<body>
  <section id="header" class="appear"></section>
  <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
        <h1><a  class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">			Adaptive E-Learning
					</a></h1>
      </div>
      <div class="navbar-collapse collapse" style="margin-top:7px;">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="admin_home.php">Home</a></li>
          <li><a href="AddLO.php">Add LO</a></li>
		  <li><a href="logout.php">Logout</a></li>
          
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <section class="featured"  style='margin-bottom:50px;' >
    <div class="container">
      <div class="row mar-bot40">
        <div class="col-md-9 col-md-offset-1">

          <div class="align-center">
           
			
            <h2 class="slogan" >Learning Objects available</h2>
            
          </div>
        </div>
      </div>
    </div>
  </section>
<?php

$search = $_GET [ 'quer' ];  
if( strlen( $search ) <= 1 ) 
	echo " <center><font size='5' ><b>Search term too short</b></center>"; 
else {
	echo "<center><font size='5' ><b>You searched for <i style='color:green;'> $search </i> <hr size='1' > </ br > </b></font></center>";

	$conn=mysqli_connect("localhost","root","") ; 
	mysqli_select_db($conn,"adaptive"); 	
	$construct =  $search;
		
		$construct = "select * from topic_1 WHERE name like '%$construct%' or keyword like '%$construct%'"; 
		$run = mysqli_query($conn,$construct); 
		$foundnum = mysqli_num_rows($run); 
		if ($foundnum == 0) 
			echo "<center>Sorry, there are no matching result for <b> <i style='color:green;'>$search</i> </b>. </br> </br> 1. Try more general words. for example: If you want to search 'how to create a website' then use general keyword like 'create' 'website' </br> 2. Try different words with similar meaning </br> 3. Please check your spelling</center>"; 
		else { 
			echo "<center><i> $foundnum results found !</i></center><p>";
			echo "<section>  
					<div class='container' style='margin-top:10px;padding:20px'>
						<div class='row'>
							<div class='col-md-12'><div class='table-responsive'>          
								<table class='table table-hover'>
								<thead>
								<tr>
								<th>#</th>
								<th>Learning Object</th>
								<th>Topic name</th>
								<th>Description</th>
								<th>Subject</th>
								<th>Admin ID</th>
								<th>Date Inserted</th>
								</tr>
								</thead>
								<tbody>";
			while( $row = mysqli_fetch_assoc( $run ) )
				{
					echo "<tr>";
					
					echo "<td>" . $row['tid'] . "</td>";
					echo "<td>" . $row['name'] . "</i></td>";
					echo "<td><a href='desc.php?tid=". $row['tid'] ."'>" . $row['sname'] . "</a></td>";
					echo "<td class='col-md-4'>" . $row['descp'] . "</td>";
					echo "<td>" . $row['type'] . "</td>";
					echo "<td>" . $row['aid'] . "</td>";
					echo "<td>" . $row['date'] . "</td>";
					
					
					echo "</tr>";
				} 
				echo "</tbody></table>";
			} 
		}
	
?>

	
				</div>
			</div>
		</div>
	</section>

  <!-- about -->
  <section id="section-about" class="section appear clearfix" >
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Our Team</h2>
            <p>Project Group from XYZ College.</p>
          </div>
        </div>
      </div>

      <div class="row align-center mar-bot40">
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/suven.png" alt="" style="width:200px;" /></figure>
            <div class="team-detail">
              <h4>ABC</h4>
              <span>User experiences</span>
            </div>
          </div>
        </div>
        <div class="col-md-3" >
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/suven.png" alt="" style="width:200px;" /></figure>
            <div class="team-detail">
              <h4>XYZ</h4>
              <span>Web developer</span>
            </div>
          </div>
        </div>
        <div class="col-md-3" >
          <div class="team-member">
            <figure class="member-photo"><img src="img/team/suven.png" alt="" style="width:200px;" /></figure>
            <div class="team-detail">
              <h4>PQR</h4>
              <span>Web designer</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo" ><img src="img/team/suven.png" alt="" style="width:200px;" /></figure>
            <div class="team-detail">
              <h4>IJK</h4>
              <span>UI designer</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /about -->
</div>
  <!-- spacer section:stats -->
  <section id="parallax1" class="section pad-top40 pad-bot40" data-stellar-background-ratio="0.5" style="margin-bottom:-400px;">
    <div class="container">
      <div class="align-center pad-top40 pad-bot40">
        <blockquote class="bigquote color-white"><!--Copyright @Suven Consultants--></blockquote>
        <p class="color-white">Adaptive E-Learning</p>
      </div>
    </div>
  </section>

  <!-- section works -->
  
 
  <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.localScroll.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/main.js"></script>
  
</body>

</html>
<?php
}
else
{
echo "<script>window.open('Admin.html','_self')</script>";
}
?>

