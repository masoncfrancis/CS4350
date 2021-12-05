<?php
include_once "../include/db.php";


$name = mysqli_escape_string($mysqli, $_POST['name']);
$position = mysqli_escape_string($mysqli, $_POST['position']);
$branch = mysqli_escape_string($mysqli, $_POST['branch']);
$email = mysqli_escape_string($mysqli, $_POST['email']);
$query = "";

if (!isset($_POST['actionType'])){ // Return 400 error if accessed not with a form submission
    http_response_code(400);
    die();
}

if ($_POST['actionType'] === '1') {
    $query = "INSERT INTO suusaprojecttracker.electedofficials (id, name, position, branch, email) VALUES (NULL, '{$name}', '{$position}', {$branch}, '{$email}')";

} elseif ($_POST['actionType'] === '2') {
    $id = mysqli_escape_string($mysqli, $_POST['officialid']);
    $query = "UPDATE suusaprojecttracker.electedofficials SET name = '{$name}', position = '{$position}', branch = {$branch}, email = '{$email}' WHERE id = {$id}";
}

if ($mysqli->query($query)){
    echo "<script>window.location.replace('../officials.php');</script>";
} else {echo "Error: " . mysqli_error($mysqli);}