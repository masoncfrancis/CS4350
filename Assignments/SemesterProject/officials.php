<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elected Officials - SUUSA Project Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>
    <style>
        .card {
            width: 17rem
        }
    </style>
</head>
<body>
    <div class="container-fluid">

        <?php
        echo file_get_contents("sources/navbar.html");
        ?>

        <div class="form-row justify-content-between">
            <div class="col-auto form-group">
                <h3>Elected Officials</h3>
            </div>
            <div class="col-auto">
                <a href="addofficial.php" class="btn btn-primary">Add Official</a>
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
            // Get executive council info
            include "include/db.php";
            $query = "SELECT * FROM suusaprojecttracker.electedofficials";
            $ec_cards = "";
            $senate_cards = "";
            $judicial_cards = "";
            if ($results = $mysqli->query($query)) {
                while ($row = mysqli_fetch_array($results)) {
                    if ($row['branch'] === '1') {
                        $ec_cards .= "<div class='col-auto'>
                            <div class='card'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>{$row['name']}</h5>
                                        <h6 class='card-subtitle text-muted'>{$row['position']}</h6>
                                        <p class='card-text'>
                                            <a href='mailto:suusa_email@suu.edu'>{$row['email']}</a>
                                        </p>
                                        <a href='editofficial.php?official={$row['id']}'><img alt='Edit icon' src='media/pencil-fill.svg' height='20'></a>
                                    </div>
                                </div>
                            </div>";
                    } elseif ($row['branch'] === '2') {
                        $senate_cards .= "<div class='col-auto'>
                            <div class='card'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>{$row['name']}</h5>
                                        <h6 class='card-subtitle text-muted'>{$row['position']}</h6>
                                        <p class='card-text'>
                                            <a href='mailto:{$row['email']}'>{$row['email']}</a>
                                        </p>
                                        <a href='editofficial.php?official={$row['id']}'><img alt='Edit icon' src='media/pencil-fill.svg' height='20'></a>
                                    </div>
                                </div>
                            </div>";
                    } elseif ($row['branch'] === '3') {
                        $judicial_cards .= "<div class='col-auto'>
                            <div class='card'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>{$row['name']}</h5>
                                        <h6 class='card-subtitle text-muted'>{$row['position']}</h6>
                                        <p class='card-text'>
                                            <a href='mailto:{$row['email']}'>{$row['email']}</a>
                                        </p>
                                        <a href='editofficial.php?official={$row['id']}'><img src='media/pencil-fill.svg' alt='Edit icon' height='20'></a>
                                    </div>
                                </div>
                            </div>";
                    }
                }
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
            echo $senate_cards;
            ?>
        </div>

        <div class="row">
            <div class="col">
                <br>
                <h4>Judicial:</h4>
            </div>
        </div>

        <div class="row">
            <?php
            echo $judicial_cards;
            ?>
        </div>




    </div>

</body>
</html>