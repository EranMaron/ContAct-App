<?php
	include('db.php');		


	$query = "SELECT * FROM tb_recommened_201";
	$result = mysqli_query($connection, $query);

	if (!$result) {
		die("DB query faild" . mysqli_error());
	}

	while ($row1 = mysqli_fetch_assoc($result)) {
		$query1 = "SELECT * FROM tb_events_201";
		$result1 = mysqli_query($connection1,$query1);
		while($row = mysqli_fetch_assoc($result1)){
			if($row["Event_Image"]==$row1["index_event"]){
				echo '<section class="itemCard">';
				echo '<a href="eventpage.php?id='.$row["Event_Image"].'">';
				echo '<img class="imgCard" src="images/eventBanner-' . $row["Event_Image"] . '.jpg" alt="Event Banner">
				<h2 class="titleCard">' . $row["Event_Name"] .'</h2>
				<p class="descriptionCard">' . $row["Event_Details"] . '</p>';
				echo '</a></section>';
		}}
	}
	

