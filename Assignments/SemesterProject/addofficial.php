<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Elected Official - SUUSA Project Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <?php
        echo file_get_contents("sources/navbar.html");
        ?>

        <form id="officialForm" method="post" action="proc/officialproc.php">

            <div class="form-row">
                <div class="col form-group">
                    <h3>Add Elected Official</h3>
                    <input type="hidden" name="actionType" value="1">
                </div>
            </div>

            <div class="form-row">
                <div class="col form-group">
                    <label for="name">Name: </label>
                    <input class="form-control" type="text" id="name" name="name" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col form-group">
                    <label for="position">Position: </label>
                    <input class="form-control" type="text" id="position" name="position" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col form-group">
                    <label for="email">Branch: </label>
                    <select class="form-control" name="branch" required>
                        <option selected disabled value="">Select an option</option>
                        <option value="1">Executive Council</option>
                        <option value="2">Senate</option>
                        <option value="3">Judicial</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="col form-group">
                    <label for="email">Email: </label>
                    <input class="form-control" type="email" id="email" name="email" required>
                </div>
            </div>

            <div class="form-row justify-content-end">
                <div class="col-auto">
                    <button class="btn btn-primary" type="submit" id="saveBtn">Save Changes</button>
                    <br>
                    <script>
                        $(document).ready(function () {
                            $('#officialForm').submit(function (e) {
                                changeSaveButton(1);
                            })
                        })

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