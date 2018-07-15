<?php
	include('db.php');		


	$query = "SELECT * FROM tb_events_201";
	$result = mysqli_query($connection, $query);

	if (!$result) {
		die("DB query faild" . mysqli_error());
	}

	
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<section class="itemCard" id="'. $row['Event_Image'] . '">';
		echo '<a href="eventpage.php?id='. $row['Event_Image'] . '">';
		echo '<img class="imgCard" src="images/eventBanner-' . $row["Event_Image"] . '.jpg" alt="Event Banner">
		<h2 class="titleCard">' . $row["Event_Name"] .'</h2>
		<p class="descriptionCard">' . $row["Event_Details"] . '</p>';
		echo '</a></section>';
	}

