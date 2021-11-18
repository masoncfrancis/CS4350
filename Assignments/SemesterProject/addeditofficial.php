<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add/Edit Elected Official - SUUSA Project Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <?php
            echo file_get_contents("sources/navbar.html");
        ?>

        <form id="officialForm">

            <div class="form-row">
                <div class="col form-group">
                    <h3>Add/Edit Elected Official</h3>
                </div>
            </div>

            <div class="form-row">
                <div class="col form-group">
                    <label for="name">Name: </label>
                    <input class="form-control" type="text" id="name" name="name">
                </div>
            </div>

            <div class="form-row">
                <div class="col form-group">
                    <label for="pic">Picture:</label><br>
                    <img src="media/profile.svg" id="pic" height="120px"><br><br>
                    <button type="button" id="uploadBtn" class="btn btn-sm btn-outline-primary">Upload new photo...</button>
                    <input type="file" id="newProfPic" style="display: none">
                    <script>
                        document.getElementById('uploadBtn').addEventListener('click', function(e) {
                            document.getElementById('newProfPic').click();
                        });
                    </script>
                </div>
            </div>

            <div class="form-row">
                <div class="col form-group">
                    <label for="position">Position: </label>
                    <input class="form-control" type="text" id="position" name="position">
                </div>
            </div>

            <div class="form-row">
                <div class="col form-group">
                    <label for="email">Email: </label>
                    <input class="form-control" type="email" id="email" name="email">
                </div>
            </div>

            <div class="form-row justify-content-end">
                <div class="col-auto">
                    <button class="btn btn-primary" type="button" onclick="changeSaveButton(1)" id="saveBtn">Save Changes</button><br>
                    <script>
                        function changeSaveButton(option) {
                            const saveBtn = document.getElementById('saveBtn');
                            console.log(option);
                            if (option === 1) {
                                saveBtn.innerHTML = `<div class="spinner-border text-light spinner-border-sm" role="status"><span class="sr-only"></span></div>&nbsp;Saving...`;
                                saveBtn.disabled = true;
                            } else if (option === 2) {
                                saveBtn.innerHTML = "Save Changes...";
                                saveBtn.disabled = false;
                            }
                        }
                    </script>
                </div>
            </div>
        </form>


    </div>

</body>
</html>