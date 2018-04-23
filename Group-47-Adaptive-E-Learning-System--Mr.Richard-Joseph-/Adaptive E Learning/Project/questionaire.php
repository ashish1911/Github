<?php
      // Starts the session

      session_start();
     
     ?>
      <?php
/*
      $con = mysqli_connect("localhost","root","","adaptive");
		
      $uid = $_SESSION['uid'];
      $quizGradeBegan=("INSERT INTO learner_grade_db( uid, score )
      VALUES     ('$uid','$score') ");
      $result=@mysqli_query($dbcon, $submittedAnswerQuery);
*/

      if(isset($_SESSION['uid'])){
      ?>


     <!DOCTYPE html>
     <html>
     <head>
         <meta charset="utf-8" />
         <title>Q-Quiz: Learner Homepage</title>
         <link rel="stylesheet" href="sdnt.css" />
     </head>

     <body>

    <div class="wrapper">  <!-- Start of wrapper div -->
        <div class="header"> <!-- Start of header div -->
            <h1>e-Quiz: <br> Learner Homepage</h1>

               
     </div><!-- End of Header div -->


     <div class="article"> <!-- Start of the article div -->
     <?php
		$topic = $_REQUEST['topic'];
		$con = mysqli_connect("localhost","root","","adaptive");
        
		$query=("SELECT  qid, question, cans, wans1, wans2,
        wans3 FROM question_table  LIMIT 4 " );
		
		// Query to be changed for taking data of particular topic where topic='$topic'
		
        $result = mysqli_query ($con, $query); // Run the query.
        while($row = mysqli_fetch_array($result)):?>
       <br>
        <form  action="gradepage.php" method="get">
        <?php echo $row['qid'];?>
         <br>
        <?php echo $row['question'];?>
         <br>
			<input type="hidden" name="topic" id="topic" value="<?php echo $topic ?>" /> 
           <input type="radio" value="1" id=' distractor<?php echo $row['qid'];?>'
            name ='<?php echo   $row['qid'];?>'/><?php echo $row['cans'];?>
            <br>
            <input type="radio" value="2" id=' distractor  <?php echo $row['qid'];?>'
            name ='<?php echo $row['qid'];?>'/><?php echo $row['wans1'];?>
            <br>
            <input type="radio" value="3" id=' distractor  <?php echo $row['qid'];?>'
             name ='<?php echo $row['question_id'];?>'/><?php echo $row['wans2'];?>
            <br>
            <input type="radio" value="4" id=' distractor  <?php echo $row['qid'];?>'
            name ='<?php $row['qid'];?>'/><?php echo $row['wans3'];?>
            <br>
            <?php endwhile;?>
             <p>
             <input id="submit" type="submit" name="submit"
          value="Click To Submit Completed Quiz">
           </div> <!-- End of the article div -->

          <div class="aside"> <!-- Start of the aside div -->
     <ul class="nav2">

     
     </ul>
     <br><br><br><br><br>


     </div> <!-- End of the aside div -->

    <div class="footer "><!-- Start of the footer div -->

  

    </div><!-- End of the footer div -->
    </div><!-- End of the wrapper div -->
    </body>
    </html>
<?php

	  }
	  else{
		  echo "Login Error";
		  header("location:Login.html");
	  }
	  ?>