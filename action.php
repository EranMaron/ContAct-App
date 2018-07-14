<?php
	include('db.php');		


	$query = "SELECT Event_Image FROM tb_events_201";
	$result = mysqli_query($connection, $query);

	if (!$result) {
		die("DB query faild");
	}

	echo '<section class="itemCard">';
	echo '<a href="#">';
	while ($row = mysqli_fetch_assoc($result)) {
		echo
	'<img class="imgCard" src="images/eventBanner-' . $row["Event_Image"] . '.jpg alt="Event Banner">';
	/* <h2 class="titleCard">University Of Ohama</h2>'; */
	}
	echo '</a></section>';


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
