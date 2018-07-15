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
            <img class="imageCheckoutPage" src="images/eventBanner-' . $row['Event_Image'] .'.jpg">
            <h2 class="eventName">' . $row['Event_Name'] . '</h2>
            <form action="action1.php" method="get" id="checkoutForm">
            <label id="lunch" for="lunch">Lunch:</label><br>
                <input type="radio" id="radioBtn" name="lunch" value=1>
                <label id="withLunch" class="lunchLabel" for="withLunch">with Lunch</label><br>
                <input type="radio" id="radioBtn" name="lunch" value=0>
                <label id="withOutLunch" class="lunchLabel" for="withOutLunch">with Out Lunch</label><br>
                <label id="Tickets" for="Tickets">Number Of Tickets:</label>
                <input type="number" id="numberInput" name="numofticket" min="0" max="5">
                <input type="hidden" name="index" value='. $eventNum.'>
                <button type="submit" id="submit">Apply</button>
            </form>
        </section>';







    /* <section class="eventPageContainer">
        <img class="imageCheckoutPage" src="images/eventBanner-1.jpg">
        <h2 class="eventName">Event Name</h2>
        <form action="" method="post" id="checkoutForm">
            <label id="lunch" for="lunch">Lunch:</label><br>
            <input type="radio" id="radioBtn" name="parameters[]" value="withLunch">
            <label id="withLunch" class="lunchLabel" for="withLunch">with Lunch</label><br>
            <input type="radio" id="radioBtn" name="parameters[]" value="withOutLunch">
            <label id="withOutLunch" class="lunchLabel" for="withOutLunch">with Out Lunch</label><br>
            <label id="Tickets" for="Tickets">Number Of Tickets:</label><br>
            <input type="number" id="numberInput" name="parameters[]" min="0" max="5">
            <button type="submit" id="submit">Apllay</button>
        </form>
    </section>  */
