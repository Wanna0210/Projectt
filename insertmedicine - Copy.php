<?php
    include 'connect.php';

$typemedicine = $_POST['typemedicine'];
$id_med = $_POST['id_med'];
$name_med = $_POST['name_med'];
$expiredDate = $_POST['expiredDate'];
$packagingdimensions = $_POST['packagingdimensions'];
$packup = $_POST['packup'];
$howtouse = $_POST['howtouse'];
$properties = $_POST['properties'];
$warning = $_POST['warning'];
$note = $_POST['note'];



$sql = 'INSERT INTO addmedicine (typemedicine, id_med, name_med, expiredDate, packagingdimensions, packup, howtouse, properties, warning, note)
        VALUES ("'.$typemedicine.'", "'.$id_med.'", "'.$name_med.'", "'.$expiredDate.'", "'.$packagingdimensions.'", "'.$packup.'", "'.$howtouse.'", "'.$properties.'", "'.$warning.'", "'.$note.'")';

        $result = $con->query($sql);
        echo 'success';

 ?>
