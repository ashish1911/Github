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


input[type=text],input[type=number] {
    border: none;
    border-bottom: 2px solid grey;
	
	margin-left:50px;
	
}
input[type=textarea]
{
	col
}
	</style>
  
  
  <script>
 function valid(){
	 var a=document.getElementById("tname").value;
	 var b=document.getElementById("tsub").value;
	 var c=document.getElementById("ttype").value;
	 var d=document.getElementById("tdesc").value;
	 var e=document.getElementById("key").value;
	 var f=document.getElementById("intro").value;
	 var g=document.getElementById("algo").value;
	 if(a=='' || b=='' || c=='' || d=='' || e=='' || f=='' || g=='')
	 {
		 alert("Fill all Details !");
		 onclick.stopPropogation();
	 }
	 
 }
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
          <li><a href="ViewLO.php">View LO</a></li>
		  <li><a href="logout.php">Logout</a></li>
          
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <section class="featured"  >
    <div class="container">
      <div class="row mar-bot40">
        <div class="col-md-10 col-md-offset-1">

          <div class="align-center">
           
			
            <h2 class="slogan" >Add Learning Object</h2>
            
          </div>
        </div>
      </div>
    </div>
  </section>
 
 

  <!-- services -->
	 
	<section>  
		<div class="container-fluid" style="margin-top:10px;padding:20px">
			<div class="row">
			<div class="col-md-6 col-md-offset-1" style="margin-top:-50px;">
				<center>
				<form action="add_action.php" enctype="multipart/form-data" method="post" style="margin-top:50px;">
					<b>Topic name:</b><br><br>
						<input type="text" name="tname" id="tname" size="40"><br><br>
					<b>Sub Topic name:</b><br><br>
						<input type="text" name="tsub" id="tsub" size="40"><br><br>
					<b>Learning Object:</b><br><br>
						<select name="ttype" id="ttype"  style="margin-left:10px">
						<option value="">--Select--</option>
						<option value="DS">Data Structure</option>
						<option value="J">Java</option>
						<option value="OS">Operating System</option>
						</select><br><br>	
					<b>Topic Description:</b><br><br>
						<textarea name="tdesc" id="tdesc" cols="50" rows="5" ></textarea><br><br>
					<b>Keywords:</b><br><br>
						<input type="text" name="key" id="key" size="40"><br><br>
								
				</div>
				<div class="col-md-4">
					<b>Upload Introduction:</b><br><br>
						<input type="file" id="intro" name="intro"><br>		
					<b>Upload Algorithm:</b><br><br>
						<input type="file" id="algo" name="algo"><br>
					<b>Upload Flowchart:</b><br><br>
						<input type="file" id="flow" name="flow"><br><br>
					<b>Upload Example:</b><br><br>
						<input type="file" id="eg" name="eg"><br>
					<b>Upload Implementation:</b><br><br>
						<input type="file" id="impl" name="impl"><br>
					<b>Upload Video Link:</b><br><br>
						<input type="file" id="video" name="video"><br>
				</div>
				<div class="col-md-9 col-md-offset-4" style="margin-top:25px;">
					<button type="submit" class="btn btn-info btn-lg btn3d"  style="border-radius:25px;width:200px;" onclick=valid() >Submit</button>
					<button type="Reset" class="btn btn-info btn-lg btn3d"  style="border-radius:25px;width:200px;margin-left:20px;">Reset</button>
				</form>
				</div>
				</center>
			</div>

				
			</div>
		</div>
	</section>

 
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

