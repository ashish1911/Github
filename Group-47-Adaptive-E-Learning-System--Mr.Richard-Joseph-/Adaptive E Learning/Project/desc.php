<?php
session_start();
if(isset($_SESSION['uid']))
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
        <h1><a  class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;" style="margin-left:30px;">Adaptive E-Learning
					</a></h1>
      </div>
      <div class="navbar-collapse collapse" style="margin-top:7px;">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="home1.php">Home</a></li>
          
		  <li><a href="logout.php">Logout</a></li>
          
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <section class="featured"  >
    <div class="container">
      <div class="row mar-bot40">
        <div class="col-md-9 col-md-offset-2">

          <div class="align-center">
           
			
            <h2 class="slogan" >Download Section</h2>
            
          </div>
        </div>
      </div>
    </div>
  </section>
 
 

  <!-- services -->

  
	<section>  
		<div class="container" style="margin-top:10px;padding:20px">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
				<div class="well well-sm text-center"><h2>Downloads</h2></div>
				<?php 
				$uid = $_SESSION['uid'];
				$name = $_GET['value'];
					 $conn=mysqli_connect('localhost','root','');
					 mysqli_select_db($conn,'adaptive');
					 
					 $sql1 = "select * from person where uid='$uid'";
					 $res=mysqli_query($conn,$sql1);
					 $rox=mysqli_fetch_assoc($res);
					 if($rox['objective'] == "curiosity" || "learning" && $rox['personality'] == "Introvert")
					 {
						  $sql="select * from topic_1 where name='$name'";
							 $result=mysqli_query($conn,$sql);
							 if(mysqli_num_rows($result)>0)
							 {
								
							echo "<div class='table-responsive' style='margin:100px;'>          
							<table class='table table-hover'><tbody>";
							 while($row=mysqli_fetch_assoc($result))
							 {
								echo "<tr>";
									echo "<th>Topic Name</th>";
									echo "<td class='col-md-2'><h3> " . $row['sname'] . " <i class='fa fa-download' aria-hidden='true'></h3></td>";
								echo "</tr>";
								
								echo "<tr>";
									echo "<th>Introduction</th>";
									echo "<td><a href='download2.php?nama=".$row['intro']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['intro'] . " </td>";
								echo "</tr>";
								
								echo "<tr>";
									echo "<th>Algorithm</th>";
									echo "<td><a href='download2.php?nama=".$row['algo']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['algo'] . " </td>";
								echo "</tr>";
								
								echo "<tr>";
									echo "<th>Flowchart</th>";
									echo "<td><a href='download2.php?nama=".$row['flow']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['flow'] . " </td>";
								echo "</tr>";
								
								echo "<tr>";
									echo "<th>Example</th>";
									echo "<td><a href='download2.php?nama=".$row['eg']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['eg'] . " </a></td>";
								echo "</tr>";
								
								echo "<tr>";
									echo "<th>Implementation</th>";
									echo "<td><a href='download2.php?nama=".$row['impl']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['impl'] . " </a></td>";
								echo "</tr>";
								
								echo "<tr>";
									echo "<th>Video</th>";
									echo "<td><a href='download2.php?nama=".$row['video']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['video'] . " </a></td>";
								echo "</tr>";
								
								echo "<tr>";
								echo "<th>
										
												<a class='btn btn-success btn-lg btn3d'  href='quiz.php?topic=".$row['sname']."' style='border-radius:25px;width:200px;'>Take the Quiz >></a>

									</th>";
								echo "</tr>";
								
								
							}
							echo "</tbody></table>";
							echo "<hr style='margin:20px;>'";
							}
								 
					 }
					 else if ($rox['objective'] == "curiosity" || "learning" && $rox['personality'] == "Extrovert")
					 {
						$sql="select * from topic_1 where name='$name'";
						$result=mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0)
							 {
								
							echo "<div class='table-responsive' style='margin-bottom:100px;'>          
							<table class='table table-hover'><tbody>";
							 while($row=mysqli_fetch_assoc($result))
							 {
								echo "<tr>";
									echo "<th>Topic Name</th>";
									echo "<td class='col-md-2'><h3> " . $row['sname'] . " <i class='fa fa-download' aria-hidden='true'></h3></td>";
								echo "</tr>";
								
								echo "<tr>";
									echo "<th>Introduction</th>";
									echo "<td><a href='download2.php?nama=".$row['intro']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['intro'] . " </td>";
								echo "</tr>";
								
								echo "<tr>";
									echo "<th>Video</th>";
									echo "<td><a href='download2.php?nama=".$row['video']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['video'] . " </a></td>";
								echo "</tr>";
																						
								echo "<tr>";
									echo "<th>Example</th>";
									echo "<td><a href='download2.php?nama=".$row['eg']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['eg'] . " </a></td>";
								echo "</tr>";
								
								echo "<tr>";
									echo "<th>Implementation</th>";
									echo "<td><a href='download2.php?nama=".$row['impl']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['impl'] . " </a></td>";
								echo "</tr>";
								
								echo "<tr>";
								echo "<th>
										<a class='btn btn-success btn-lg btn3d'  href='quiz.php?topic=".$row['sname']."' style='border-radius:25px;width:200px;'>Take the Quiz >></a>											
									</th>";
								echo "</tr>";
								

							}
							echo "</tbody></table>";
							echo "<hr style='margin:20px;>'";
							} 
					 }
					 else if($rox['objective'] == "project" && $rox['personality'] == "Extrovert" || "Introvert"){
						 
						 $sql="select * from topic_1 where name='$name'";
						$result=mysqli_query($conn,$sql);
						if(mysqli_num_rows($result)>0)
							 {
								
							echo "<div class='table-responsive' style='margin-bottom:100px;'>          
							<table class='table table-hover'><tbody>";
							 while($row=mysqli_fetch_assoc($result))
							 {
								echo "<tr>";
									echo "<th>Topic Name</th>";
									echo "<td class='col-md-2'><h3> " . $row['sname'] . " <i class='fa fa-download' aria-hidden='true'></h3></td>";
								echo "</tr>";
								
								echo "<tr>";
									echo "<th>Introduction</th>";
									echo "<td><a href='download2.php?nama=".$row['intro']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['intro'] . " </td>";
								echo "</tr>";
								
								echo "<tr>";
									echo "<th>Example</th>";
									echo "<td><a href='download2.php?nama=".$row['eg']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['eg'] . " </a></td>";
								echo "</tr>";
								
								echo "<tr>";
									echo "<th>Implementation</th>";
									echo "<td><a href='download2.php?nama=".$row['impl']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['impl'] . " </a></td>";
								echo "</tr>";												
												
								echo "<tr>";
									echo "<th>Algorithm</th>";
									echo "<td><a href='download2.php?nama=".$row['algo']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['algo'] . " </td>";
								echo "</tr>";
								
								echo "<tr>";
									echo "<th>Flowchart</th>";
									echo "<td><a href='download2.php?nama=".$row['flow']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['flow'] . " </td>";
								echo "</tr>";								
								
								echo "<tr>";
									echo "<th>Video</th>";
									echo "<td><a href='download2.php?nama=".$row['video']."&sname=".$row['sname']."&type=".$row['type']."'>" . $row['video'] . " </a></td>";
								echo "</tr>";
								
								
												

							}
							echo "</tbody></table>";
							echo "<hr style='margin:20px;>'";
							} 
						 
						 
						 
					 }
					 else{
						 echo "Something Went Wrong";
					 }
					 
					


				
				
				
				?>
				
				
				</div>
			</div>
		</div>
	</section>
	
				
  <!-- about -->
  <!-- about -->
  <section id="section-about" class="section appear clearfix" >
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Our Team</h2>
        
          </div>
        </div>
      </div>

      <div class="row align-center mar-bot40">
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo"></figure>
            <div class="team-detail">
              <h4>Krishna Shahri</h4>
             
            </div>
          </div>
        </div>
        <div class="col-md-3" >
          <div class="team-member">
            <figure class="member-photo"></figure>
            <div class="team-detail">
              <h4>Swapnali Ghumkar</h4>
              
            </div>
          </div>
        </div>
        <div class="col-md-3" >
          <div class="team-member">
            <figure class="member-photo"></figure>
            <div class="team-detail">
              <h4>Leena chavan</h4>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="team-member">
            <figure class="member-photo" ></figure>
            <div class="team-detail">
              <h4>Ashish Mishra</h4>
              
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

