<?php

    include('db.php');

    $eventNum = $_GET['id'];

    $query = "SELECT * FROM tb_events_201 WHERE Event_Image = $eventNum";
    $result = mysqli_query($connection, $query);
    
    if (!$result) {
		die("DB query faild" . mysqli_error());
	}

    $row = mysqli_fetch_assoc($result);

    echo '<section class="eventPageContainer">
    <img class="imageEventPage" src="images/eventBanner-' . $row['Event_Image'] . '.jpg">
<<<<<<< HEAD
    <a href="checkoutpage.php?id=' . $row['Event_Image'] . '"><button class="registerBtn"></button></a>
=======
<<<<<<< HEAD
    <a href="checkoutpage.php?id=' . $row['Event_Image'] . '"><button class="registerBtn"></button></a>
=======
    <button class="registerBtn"></button>
>>>>>>> 4dba40dea583ef9c2f05fbe0b1158210a2cb4f8b
>>>>>>> 22c9c26be53c238789795c132d68e972a9356d8d
    <div class="clear"></div>
    <h2 class="eventName">' . $row['Event_Name'] . '</h2>
    <p class="eventDetails">' . $row['Event_Details'] . '</p>
    <h3 class="eventName">Speakers:</h3>';

    for ($i = 1; $i <= 3; $i++) {
    echo '<section class="speakerContainer">
    <img class="speakerImage" src="images/speaker' . $i . '.jpg">
    <h4 class="speakerName">' . $row['Speaker_Name' . $i] . '</h4>
    <p class="speakerDetails">' . $row['Speaker_Details' . $i] . '</p>
    </section>';
    }
    echo '</section>';

    /* mysqli_free_result($result);
    mysqli_close($connection); */
    
