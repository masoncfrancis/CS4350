<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Projects - SUUSA Project Tracker</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="projcss.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>
</head>
<body onload="draw()">
    <div class="container-fluid">

        <?php
        echo file_get_contents("sources/navbar.html");
        ?>

        <div class="form-row">
            <div class="col" style="margin: auto; display: block; width: 50%">
                <canvas id="suusaLogoCanvas" style="margin: auto; display: block;" width="400"
                        height="150"></canvas>
                <img src="media/suusalogo.png" alt="SUUSA Logo" style="display: none" id="suusaLogo">
                <script>
                    function draw() {
                        const context = document.getElementById('suusaLogoCanvas').getContext('2d');
                        const img = document.getElementById('suusaLogo');
                        context.drawImage(img, 10, 10);
                    }
                </script>
            </div>
        </div>

        <div class="form-row">
            <div class="col form-group text-center">
                <h3>Project List</h3>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <h4>Active Projects:</h4>
                <br>
                <div class="list-group">
                    <a href="projectinfo.php" class="list-group-item list-group-item-action">CSIS Faculty Crisis
                        <small>Sponsor: <strong>Mason Francis</strong></small></a>
                    <a href="projectinfo.php" class="list-group-item list-group-item-action">ELC Improvements <small>Sponsor:
                            <strong>Mason Francis</strong></small></a>
                </div>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col text-center">
                <h4>Closed Projects:</h4>
                <br>
                <div class="list-group">
                    <a href="projectinfo.php" class="list-group-item list-group-item-action">Lauren's Promise
                        Resolution <small>Sponsor: <strong>Alexandra Holsey</strong></small></a>
                    <a href="projectinfo.php" class="list-group-item list-group-item-action">Athletic Newsletter
                        Posting Funding <small>Sponsor: <strong>Jonah Babbel</strong></small></a>
                </div>
                <br>
            </div>
        </div>
    </div>


</body>
</html>