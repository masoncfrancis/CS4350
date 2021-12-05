<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SUUSA Project Tracker</title>
    <link rel="stylesheet" href="projcss.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">

        <?php
        echo file_get_contents("sources/navbar.html");
        include "include/session.php";
        echo "\nUsername: {$_SESSION['username']}";
        ?>
        <div class="row">
            <div class="col">
                <img style="margin-left: auto; margin-right: auto; display: block;" src="media/suusalogo.png"><br>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <h4>Welcome to the SUUSA Project Tracker</h4>
                <br>
                <h5>Instructions:</h5>
                <h6>Click on Projects to view and modify active projects</h6>
                <h6>Click on Elected Officials to add and modify elected officials and their positions</h6>
            </div>
        </div>

    </div>
</body>
</html>