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
	.sidenav {
    height: 100%;
    width: 260px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
}

.sidenav a {
    padding: 6px 6px 6px 32px;
    text-decoration: none;
    font-size: 18px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
	transform:scale(1.2,1.2);
	transition:all 0.5s ease-in-out;
}

.main {
    margin-left: 260px; /* Same as the width of the sidenav */
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.active{
    border-color: white;
    border-left-color: black; 
    border-top-color: black;
    color: white; 
    background-color: #fff;
	pointer-events: none;

	
}   </style>
  
  
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
        <h1><a id="x" class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">			Adaptive E-Learning
					</a></h1>
      </div>
      <div class="navbar-collapse collapse" style="margin-top:7px;">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li><a href="home1.php">Home</a></li>
          <li><a href="About.php">About</a></li>
		  <li><a href="logout.php">Logout</a></li>
          
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <section class="featured">
    <div class="container">
      <div class="row mar-bot40">
        <div class="col-md-10 col-md-offset-2">

          <div class="align-center">
           
			
            <h2 class="slogan" >Data Structure</h2>
            
          </div>
        </div>
      </div>
    </div>
  </section>
 
 
 <div class="sidenav">
 <div style="margin-top:110px;">
  <a href="bfs_ds.php" class="active">BFS</a>
  <a href="dfs_ds.php" style="">DFS</a>
  <a href="sorting_ds.php">Sorting</a>
  <a href="tree_ds.php">Decision Tree</a>
  
  </div>
</div>


 
 
  <!-- services -->
  <div class="main">
   <section id="section-services" class="section pad-bot30 bg-white">	
	 <div class="container" style="border-bottom:1px solid grey;margin-bottom:20px;padding-top:10px;">
			<div class="row mar-bot40">
				<div class="col-lg-10">
				</div>
			</div>	
	 </div>
   </section>
  </div>
	
	
	
	
	
 
  


  <!-- spacer section:stats -->
  <section id="parallax1" class="section pad-top40 pad-bot40" data-stellar-background-ratio="0.5" style="margin-bottom:-400px;">
    <div class="container">
      <div class="align-center pad-top40 pad-bot40" style="margin-left:-200px;">
        <blockquote class="bigquote color-white"><!--Copyright @Suven Consultants--></blockquote>
        <p class="color-white">Adaptive E-Learning</p>
      </div>
    </div>
  </section>
  
  </div>

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
echo "<script>window.open('Login.html','_self')</script>";
}
?>
