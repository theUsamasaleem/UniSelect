<?php
	include '../inc/config.php';
	session_start();

	

	$university = $_POST['university'];
	
	
	$selectdata = "SELECT review.RevID, user.UserID,user.Name,review.Rating,review.Comment,review.Time FROM review, user WHERE review.UserID=user.UserID AND review.university = '$university' ORDER BY review.RevID DESC";

	$query = mysqli_query($mysqli,$selectdata);
		echo "<h4>Reviews (".mysqli_num_rows($query).")</h4>";
	while($row = mysqli_fetch_array($query))
	{
			
			echo "<div id='comment-blog;>";
				echo "<ul class='comment' style='list-style-type:none;'>";
					echo "<li class='comment'>";
						echo "<div class='avatar'><img alt='' src='images/avatar-01.jpg' class='avatar'></div>";
						echo "<div class='comment-container'>";
							echo "<h5 class='comment-author'><a href='#'>".$row['Name']."</a></h5>";
							echo "<div class='comment-meta'>";
								echo "<a href='#' class='comment-date link-style1'>".date("M d,Y", strtotime($row['Time']))."</a>";
								
								echo "<a class='comment-reply-link link-style3' href='#respond'>";
								for($i = 1; $i <= $row['Rating']; $i++){
									echo "&#11088;";
								}
								echo "</a>";
							echo "</div>";
							echo "<div class='comment-body'>";
								echo "<p>".$row['Comment']."</p>";
							echo "</div>";
						echo "</div>";
					echo "</li>";
				echo "</ul>";
			echo "</div>";
					
	}


	mysqli_close($mysqli);

	
?>


