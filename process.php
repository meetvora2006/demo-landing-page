<?php

include 'connection.php';
include 'operation.php';


$operation = new operation();



if (isset($_POST['submit'])) {
    array_pop($_POST);

    $operation->InsertQuery('service_appointment', $_POST);
}


header('Location: index.php');
?>