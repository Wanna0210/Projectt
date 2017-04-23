<?php
    include 'connect.php';



$class = $_POST['class'];
$toclass = $_POST['toclass'];
$status = $_POST['status'];
$symptom = $_POST['symptom'];
$amountused = $_POST['amountused'];
$unit = $_POST['unit'];


$sql = 'INSERT INTO addtreatstudents ( class, toclass, status, symptom, amountused, unit)
        VALUES ( "'.$class.'", "'.$toclass.'", "'.$status.'", "'.$symptom.'","'.$amountused.'", "'.$unit.'")';

        $result = $con->query($sql);
        echo 'success';

 ?>
