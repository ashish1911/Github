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
  
  <script>
	function validate() {
	console.log("validation using javascript");
	var q1 = document.forms['myform']['question-1-answers'].value;
	var q2 = document.forms['myform']['question-2-answers'].value;
	var q3 = document.forms['myform']['question-3-answers'].value;
	var q4 = document.forms['myform']['question-4-answers'].value;
	
	if(q1 == "" || q2== "" || q3 == "" ||q4 == "")
	{
		alert("Attempt All Questions ! ");
		return false;
	}
	else{
		confirm("Confirm Submission ?")
		return true;
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
        <h1><a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">			Adaptive E-Learning
					</a></h1>
      </div>
      <div class="navbar-collapse collapse" style="margin-top:7px;">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="Home.php">Home</a></li>
          <li><a href="About.php">About</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </div>

  <section class="featured">
    <div class="container" >
      <div class="row" >
        <div class="col-md-8 col-md-offset-2" >

          <div class="align-center" height="500px">
           <h2 style="font-size:4em;font-weight:700"> Competitive Question Set</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php 

		$topic = $_REQUEST['topic'];
		$con = mysqli_connect("localhost","root","","adaptive");
        
		$query=("SELECT  qid, question, cans, wans1, wans2,
        wans3 FROM question_table where topic='$topic' LIMIT 4 " );
		
		// Query to be changed for taking data of particular topic where topic='$topic'
		
        $result = mysqli_query ($con, $query); // Run the query.
		$num_of_row = mysqli_num_rows($result);
		if($num_of_row>0)
		{
		
		$count =1;
        while($row = mysqli_fetch_array($result)):
		
				
		
		?>
  <!-- services -->
  <section id="section-services" class="section pad-bot30 bg-white">
		
		<form name="myform" action="gradepage.php" onsubmit="" method="get" >
		 
				 <!-- Question 1 -->
				 
				 <div class="container-fluid" style="padding:0px;">
					  <div class="row mar-bot40">
						<div class="col-lg-12">
						
						<input type="hidden" name="topic" id="topic" value="<?php echo $topic ?>" /> 
						  <div class="question" id="question1">
							<h4 class="text-bold" style="margin-left:200px">
								<?php echo $row['qid'];?>) <?php echo $row['question'];?>
							</h4>
							<div class="radio r_1">
								<label><input type="radio" class="radio__x" name="ans<?php echo $count; ?>" id="distractor<?php echo $row['qid'];?>" value="1" ><?php echo $row['cans'];?></label>
							</div>
							
							<div class="radio r_1">
								<label><input type="radio" class="radio__x" name="ans<?php echo $count; ?>" id="distractor<?php echo $row['qid'];?>" value="B" ><?php echo $row['wans1'];?></label>
							</div>
							
							<div class="radio r_1">
								<label><input type="radio" class="radio__x" name="ans<?php echo $count; ?>" id="distractor<?php echo $row['qid'];?>" value="C" ><?php echo $row['wans2'];?></label>
							</div>
							
							<div class="radio r_1">
								<label><input type="radio" class="radio__x" name="ans<?php echo $count; ?>" id="distractor<?php echo $row['qid'];?>" value="C" ><?php echo $row['wans3'];?></label>
							</div>
							
						  </div>
						</div>
					 </div>
				 </div>
				 
				 <?php $count++; 
				 endwhile;
				 ?>
				 
				 <div class="container" style="margin-top:100px;">
					<div class="row text-center">
						 <button type="submit" class="btn btn-success btn-lg btn3d"  style="border-radius:25px;width:200px;">Submit</button>
					</div>
				</div>
			 
		 </form>
		 
	 
   </section>
			<?php
		}
		else{
				echo "<center><h2 style='margin-top:50px;'><i>No Questions to be Found.</i></h2></center>";
		
			
			?>	
  <!-- spacer section:testimonial -->
  

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
            <figure class="member-photo"></figure>
            <div class="team-detail">
              <h4>ABC</h4>
              <span>User experiences</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="team-member">
            <figure class="member-photo"></figure>
            <div class="team-detail">
              <h4>XYZ</h4>
              <span>Web developer</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="team-member">
            <figure class="member-photo"></figure>
            <div class="team-detail">
              <h4>PQR</h4>
              <span>Web designer</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 ">
          <div class="team-member">
            <figure class="member-photo" ></figure>
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
}
else{
	echo "Please Relogin";
	
}
?>
