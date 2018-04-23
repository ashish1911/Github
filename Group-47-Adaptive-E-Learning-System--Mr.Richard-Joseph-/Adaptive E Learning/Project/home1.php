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
        <h1><a  class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">			Adaptive E-Learning
					</a></h1>
      </div>
      <div class="navbar-collapse collapse" style="margin-top:7px;">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="home1.php">Home</a></li>
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
        <div class="col-md-9 col-md-offset-2">

          <div class="align-center">
           <?php
				$uid = $_SESSION['uid'];
				$con = mysqli_connect("localhost","root","","adaptive");
				$sql = "select * from user_info where uid='$uid'";
				$res = mysqli_query($con,$sql);
				$rox = mysqli_fetch_array($res);
				$ability = $rox['ability'];
				
				$count = 0;
				$sql1 = "select * from user_info";
				$res1 = mysqli_query($con,$sql1);
				$nrows = mysqli_num_rows($res1);
				while($rox1 = mysqli_fetch_array($res1)){
					$count += $rox1['ability'];
				}
				$mean = 0.2;
				
				$sql3 = "select * from grade where uid='$uid'";
				$res3 = mysqli_query($con,$sql3);
				$rox3 = mysqli_fetch_array($res3);
				$LO = $rox3['topic'];
				
				$sql4 = "select * from topic_1 where sname='$LO'";
				$res4 = mysqli_query($con,$sql4);
				$rox4 = mysqli_fetch_array($res4);
				$tidx = $rox4['tid'];
				
				$tidx = $tidx + 1;
				
				$sql5 = "select * from topic_1 where tid='$tidx'";
				$res5 = mysqli_query($con,$sql5);
				$rox5 = mysqli_fetch_array($res5);
				$new_LO = $rox5['sname'];
		   
		   ?>
			
            <h2 class="slogan" >Welcome to Adaptive E-Learning.</h2>
			<h3 class="slogan" >Current Ability : <?php if(isset($ability)){ echo $ability;} ?></h3> 
            <h3 class="slogan" >Next LO : <?php if($ability>$mean){
				echo "<h4>".$new_LO."</h4>";
			}else{ echo "<h4>".$LO."</h4>"; }?></h3> 
          </div>
        </div>
      </div>
    </div>
  </section>
 
 



 
 
  <!-- services -->
  <div class="main1">
  <section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">

      <div class="row mar-bot40">
	  
		<div class="col-lg-3 wrapper" style="margin-top:30px;">
			
				<form action="search.php" method="get" id="search">
					<input type="text" id="quer" name="quer" placeholder="Search term" ><button ><i class="fa fa-search" aria-hidden="true"></i></button> 				
				</form>
					
		</div>
	  
	  
		<div style=""></div>
        <div class="col-lg-3" style="margin-left:70px;border-left:2px solid grey;">
			<a href="ds.php?value=ds">
			  <div class="align-center">
				<i class="fa fa-terminal fa-5x mar-bot20"></i>
				<h4 class="text-bold">Data Structure</h4>
			</a>
				
			  </div>
			
        </div>

        <div class="col-lg-3" style="">
			<a href="java.php?value=j">
			  <div class="align-center">
				<i class="fa fa-bolt fa-5x mar-bot20"></i>
				<h4 class="text-bold">Java</h4>
			</a>
				
			  </div>
			
        </div>
		
		 <div class="col-lg-3">
			<a href="os.php?value=os">
			  <div class="align-center">
			  <i class="fa fa-laptop fa-5x mar-bot20" aria-hidden="true"></i>
				
				<h4 class="text-bold">Operating System</h4>
			</a>
		</div>
			
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
echo "<script>window.open('Login.html','_self')</script>";
}
?>

