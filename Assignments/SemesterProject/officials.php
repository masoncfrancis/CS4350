<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elected Officials - SUUSA Project Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">

        <?php
            echo file_get_contents("sources/navbar.html");
        ?>

        <div class="form-row">
            <div class="col form-group">
                <h3>Elected Officials</h3>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <br>
                <h4>Executive Council:</h4>
            </div>
        </div>
        

        
        <div class="row">
            <?php
            $ec_cards = "";
            for ($i = 0; $i < 4; $i++){
                $ec_cards .= "<div class='col-auto'>
                <div class='card'>
                    <img src='media/profile.svg' class='card-img-top'>
                    <div class='card-body'>
                        <h5 class='card-title'>Name</h5>
                        <h6 class='card-subtitle text-muted'>Position</h6>
                        <p class='card-text'>
                            <a href='mailto:suusa_email@suu.edu'>suusa_email@suu.edu</a>
                        </p>
                        <a href='addeditofficial.php'><img src='media/pencil-fill.svg' height='20px'></a>

                    </div>
                </div>
            </div>";
            }

            echo $ec_cards;
            ?>
        </div>


        <div class="row">
            <div class="col">
                <br>
                <h4>Senate:</h4>
            </div>
        </div>

        <div class="row">
            <?php
            $senate_cards = "";
            for ($i = 0; $i < 4; $i++){
                $senate_cards .= "<div class='col-auto'>
                <div class='card'>
                    <img src='media/profile.svg' class='card-img-top'>
                    <div class='card-body'>
                        <h5 class='card-title'>Name</h5>
                        <h6 class='card-subtitle text-muted'>Position</h6>
                        <p class='card-text'>
                            <a href='mailto:suusa_email@suu.edu'>suusa_email@suu.edu</a>
                        </p>
                        <a href='addeditofficial.php'><img src='media/pencil-fill.svg' height='20px'></a>

                    </div>
                </div>
            </div>";
            }

            echo $senate_cards;
            ?>
        </div>

        <style>
            .card {width: 17rem}
        </style>




    </div>

</body>
</html>