<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tutorial - SUUSA Project Tracker</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="projcss.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <?php
        echo file_get_contents("sources/navbar.html");
        ?>

        <div class="row">
            <div class="col text-center">
                <h3>How to use the SUUSA Project Tracker:</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <video width="50%" controls style="display: block; margin-left: auto; margin-right: auto;">
                    <source type="video/mp4" src="media/tutorial.mp4">
                    Your browser doesn't support this file format
                </video>
                <p class="text-center"><small>This placeholder video was originally obtained <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">here</a><br> and was originally created by
                    <a href="https://en.wikipedia.org/wiki/Stock_Aitken_Waterman">Stock Aitken Waterman</a> </small></p>
            </div>
        </div>
    </div>


</body>
</html>