<?php 
//$button = $_GET [ 'submit' ]; 
$search = $_GET [ 'quer' ]; 
 
if( strlen( $search ) <= 1 ) 
	echo "Search term too short"; 
else {
	echo "You searched for <b> $search </b> <hr size='1' > </ br > ";

	$conn=mysqli_connect("localhost","root","") ; 
	mysqli_select_db($conn,"adaptive"); 
	
	$construct = $search;
		
		$construct = "select * from topic_1 WHERE name like '%$construct%' "; 
		$run = mysqli_query($conn,$construct); 
		$foundnum = mysqli_num_rows($run); 
		if ($foundnum == 0) 
			echo "Sorry, there are no matching result for <b> $search </b>. </br> </br> 1. Try more general words. for example: If you want to search 'how to create a website' then use general keyword like 'create' 'website' </br> 2. Try different words with similar meaning </br> 3. Please check your spelling"; 
		else { 
			echo "$foundnum results found !<p>";
			echo "<section>  
					<div class='container' style='margin-top:10px;padding:20px'>
						<div class='row'>
							<div class='col-md-12'><div class='table-responsive'>          
								<table class='table table-hover'>
								<thead>
								<tr>
								<th>#</th>
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
					echo "<td><a href='desc.php?tid=". $row['tid'] ."'>" . $row['name'] . "</a></td>";
					echo "<td>" . $row['descp'] . "</td>";
					echo "<td>" . $row['type'] . "</td>";
					echo "<td>" . $row['aid'] . "</td>";
					echo "<td>" . $row['date'] . "</td>";
					
					
					echo "</tr>";
				} 
				echo "</tbody></table>";
			} 
		}
	
	
?>
