<?php
	include('db.php');		


	$query = "SELECT * FROM tb_events_201";
	$result = mysqli_query($connection, $query);

	if (!$result) {
		die("DB query faild");
	}

	
	while ($row = mysqli_fetch_assoc($result)) {
		echo '<section class="itemCard">';
		echo '<a href="#">';
		echo '<img class="imgCard" src="images/eventBanner-' . $row["Event_Image"] . '.jpg" alt="Event Banner">
		<h2 class="titleCard">' . $row["Event_Name"] .'</h2>
		<p class="descriptionCard">' . $row["Event_Details"] . '</p>';
		echo '</a></section>';
	}
	


	/* echo '<section class="itemCard">
	<a href="#">
		<img class="imgCard" src="images/eventBanner-2.jpg" alt="Event Banner">
		<h2 class="titleCard">University Of Ohama</h2>
		<p class="descriptionCard">This is a description about
			the event. This is a description about
			the event.the event. This is a description about
			the event.the event. This is a description about
			the event.the event. This is a description about
			the event.the event. This is a description about
			the event.
		</p>
	</a>
</section>'; */
