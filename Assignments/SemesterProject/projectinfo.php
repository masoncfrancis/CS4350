<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Info - SUUSA Project Tracker</title>
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
                <h3>Project Info</h3>
            </div>
        </div>

        <div class="form-row">
            <div class="col form-group">
                <label for="projectName">Project Name: </label>
                <input class="form-control" type="text" id="projectName" name="projectName">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-4">
                <label for="sponsorName">Sponsor Name:</label>
                <input class="form-control" type="text" id="sponsorName" name="sponsorName">
            </div>
            <div class="form-group col-4">
                <label for="cosponsorName">Co-Sponsor Name:</label>
                <input class="form-control" type="text" id="cosponsorName" name="cosponsorName">
            </div>
            <div class="form-group col-4">
                <label for="authorName">Author Name:</label>
                <input class="form-control" type="text" id="authorName" name="authorName">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-4">
                <label for="sponsorPosition">Sponsor Position:</label>
                <input class="form-control" type="text" id="sponsorPosition" name="sponsorPosition">
            </div>
            <div class="form-group col-4">
                <label for="cosponsorPosition">Co-Sponsor Position:</label>
                <input class="form-control" type="text" id="cosponsorPosition" name="cosponsorPosition">
            </div>
            <div class="form-group col-4">
                <label for="authorPosition">Author Position:</label>
                <input class="form-control" type="text" id="authorPosition" name="authorPosition">
            </div>
        </div>


        <div class="form-row">
            <div class="col form-group">
                <label for="billText">Bill Text:</label>
                <textarea class="form-control" rows="5" id="billText" name="billText"></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="col form-group">
                <label for="keyPeople">Key People and Contact Info:</label>
                <textarea class="form-control" rows="5" id="keyPeople" name="keyPeople"></textarea>
            </div>
        </div>



        <div class="form-row justify-content-end">
            <div class="col-auto">
                <button class="btn btn-primary">Save Changes</button>
            </div>
        </div>
    </div>

</body>
</html>