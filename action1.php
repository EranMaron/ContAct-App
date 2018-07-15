<?php
    include('db.php');	
    $id=$_GET['index'];
    $num=$_GET['numofticket'];
    $launch=$_GET['launch'];
    $query ="INSERT INTO tb_registar_201 (index_event,tickets,launch) VALUES ('$id','$num','$launch')";
    mysqli_query($connection2, $query);
    $query ="DELETE from tb_recommened_201 where index_event=$id";
    mysqli_query($connection2, $query);
    

    mysqli_close($connection2);
    header('Location: my_event.php');
    
    
?>