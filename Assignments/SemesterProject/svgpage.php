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
        ?>
        <div class="row">
            <!-- Original SVG code for file, changed when I opened and resaved it in Adobe Illustrator
            <svg height="300" width="100%">
                    <circle r="100" cx="50%" cy="110" stroke-width="4" fill="red"></circle>
                    <text x="44%" y="105" fill="black">SUUSA Project Tracker</text>
                </svg>-->
            <div class="col-auto">
                <img src="media/svgcreation.svg" height="300">
            </div>
            <div class="col-auto">
                <img src="media/svgcreation.svg" height="150">
            </div>
        </div>


    </div>
</body>
</html>