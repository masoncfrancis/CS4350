<?php

include_once "../include/db.php";

$data = [];

foreach ($_POST as $key=>$val){
    $data[$key] = mysqli_escape_string($mysqli, $val);
}

$is_active = "false";
if ($data['isActive'] === '1'){
    $is_active = "true";
}

$query = "UPDATE projects SET name = '{$data['projectName']}', sponsor_name = '{$data['sponsorName']}', sponsor_position = '{$data['sponsorPosition']}', cosponsor_name = '{$data['cosponsorName']}', cosponsor_position = '{$data['cosponsorPosition']}', author_name = '{$data['authorName']}', author_position = '{$data['authorPosition']}', bill_text = '{$data['billText']}', people_contact = '{$data['keyPeople']}', is_active = {$is_active} WHERE id = {$data['projId']}";

if ($mysqli->query($query)){
    echo "<script>window.location.replace('../projects.php');</script>";
} else {echo "Error: " . mysqli_error($mysqli);}