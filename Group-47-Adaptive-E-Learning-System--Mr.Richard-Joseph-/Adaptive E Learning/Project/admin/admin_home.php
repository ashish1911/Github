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
          <li><a href="MUser.php">Manage User</a></li>
		  <li><a href="Add_Question.php">Add Quiz</a></li>
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
           
			
            <h2 class="slogan" >Welcome to Adaptive E-Learning.</h2>
            
          </div>
        </div>
      </div>
    </div>
  </section>
 
 

  <!-- services -->
	<div class="main1" style="margin-bottom:-10px;">
		<section id="section-services" class="section pad-bot30 bg-white">
			<div class="container">		
				<div class="row mar-bot40">	  
					<div class="col-lg-3" >		
						<div class="wrapper" style="padding-left:10px;">
							<form action="search.php" method="get" id="search">
								<input type="text" name="quer" id="query"  placeholder="Search term" style="margin-top:10px;"><button style="margin-left:5px	"><i class="fa fa-search" aria-hidden="true"></i></button> 				
							</form>	
						</div>
						<a href="AddLO.php"><button type="submit" class="btn btn-info btn-lg btn3d"  style="border-radius:25px;padding:10px;width:200px;margin-top:30px;margin-left:10px;">Add LO </button></a>
						
						<a href="EditLO.php"><button type="submit" class="btn btn-info btn-lg btn3d"  style="margin-top:30px;margin-left:10px;padding:10px;border-radius:25px;width:200px;">Edit LO</button></a>
						
						<a href="ViewLO.php"><button type="submit" class="btn btn-info btn-lg btn3d"  style="margin-top:30px;margin-left:10px;padding:10px;border-radius:25px;width:200px;">View LO</button></a>
						
						<a href="prop.php"><button type="submit" class="btn btn-info btn-lg btn3d"  style="margin-top:30px;margin-left:10px;padding:10px;border-radius:25px;width:200px;">Prop LO</button></a>
						
						
					</div>
					<div class="col-md-8" style="border-left:2px solid grey;margin-left:20px;">
						<div class="article-body" style="margin-left:20px;">
						<p><span>This article outlines how you can add or remove courses from custom topics in admin account. You can populate your custom topics. </span></p>
						<p><span>You can View your topics using View LO from Side Bar. </span></p>
						<p><span>For steps on how to create custom topics in your account, please review our </span><span>Adding Custom Topics</span><span> article.</span></p>
						<p><strong>How to Add a Course to a Custom Topic</strong></p>
						<p><span>You can add a course to a custom topic by following the steps below:</span></p>
						<ol>
						<li><span>Click on </span><strong>Add LO</strong><span> on side bar of the page</span></li>
						<li><span>Add Name, Description, Introduction, Algorithm, Flowchart, Implementation, Example, Video Files</span></li>
						<li><span>Choose the topic that you would like to add the course to and click <strong>Save</strong></span></li>
						</ol>



					</div>
										
				</div>				
			</div>			
		</section>
	</div>	

	
 <!-- 
	<section>  
		<div class="container-fluid" style="margin-top:10px;background-color:grey;padding:20px">
			<div class="row text-center">
				
			</div>
		</div>
	</section>
-->

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

