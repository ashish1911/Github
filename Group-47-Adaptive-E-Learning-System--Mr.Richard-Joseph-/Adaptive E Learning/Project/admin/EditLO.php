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
           
			
            <h2 class="slogan" >Edit Learning Object</h2>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <div class="container" style="margin-top:40px;">
	<div class="row">
		<div class="col-md-11 col-md-offset-1">
				<?php 
					$conn=mysqli_connect('localhost','root','');
					mysqli_select_db($conn,'adaptive');
					$sql="select * from topic_1";
					$result=mysqli_query($conn,$sql);
					
					echo "<div class='table-responsive'>          
					<table class='table table-hover'>
					<thead>
					<tr>
					<th>#</th>
					<th>Topic name</th>
					<th>Sub Topic name</th>
					<th>Subject</th>
					<th>Admin ID</th>
					<th>Date Inserted</th>
					<th>Update</th>
					<th>Delete</th>
					</tr>
					</thead>
					<tbody>";
					while($row=mysqli_fetch_assoc($result))
					{	
					echo "<tr>";
					
					echo "<td>" . $row['tid'] . "</td>";
					echo "<td>" . $row['name'] . "</td>";
					echo "<td><a href='desc.php?tid=". $row['tid'] ."'>" . $row['sname'] . "</a></td>";
					echo "<td>" . $row['type'] . "</td>";
					echo "<td>" . $row['aid'] . "</td>";
					echo "<td>" . $row['date'] . "</td>";
					
					echo "<td> <a href='edit_LO.php?tid=".$row['tid']."'>" ."<i class='fa fa-pencil-square-o' style='font-size:30px' aria-hidden='true'></i>" ."</a></td>";
					echo "<td> <a href='del_LO.php?tid=".$row['tid']."'>" ."<i class='fa fa-trash-o'  style='font-size:30px' aria-hidden='true'></i>" ."</a></td>";
					
					
					
					echo "</tr>";
					}
					echo "</tbody></table>";
				?>
			</div>
		</div>
	</div>



  
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

